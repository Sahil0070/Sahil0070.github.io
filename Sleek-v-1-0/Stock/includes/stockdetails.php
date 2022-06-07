<?php
include 'database.php';
class stockdetail extends Database
{
    protected $tableName = 'stock';
    /*
        * function is used to add record
        * @param array $data
        * @return int $LastInsertedId
    */

    //  public function getcategoryid($catname,$tablename)
    // {
    //     $sql = "SElECT category_Id AS catid FROM {$tablename} WHERE category_Name ={$catname}";
    //     $stmt = $this->conn->prepare($sql);

    //     $stmt->execute();
    //     $result = $stmt->fetch(PDO::FETCH_ASSOC);
    //     return $result['catid'];
    // }
    //  public function getsubcategoryid($subname,$tablename)
    // {
    //     $sql = "SElECT sub_Category_Id as subid FROM {$tablename} WHERE sub_Category_Name ={$subname}";
    //     $stmt = $this->conn->prepare($sql);

    //     $stmt->execute();
    //     $result = $stmt->fetch(PDO::FETCH_ASSOC);
    //     return $result['catid'];
    // }
    // public function getproductid($catname, $tablename)
    // {
    //     $sql = "SElECT product_Id AS proid FROM {$tablename} WHERE product_Name ={$catname}";
    //     $stmt = $this->conn->prepare($sql);

    //     $stmt->execute();
    //     $result = $stmt->fetch(PDO::FETCH_ASSOC);
    //     return $result['proid'];
    // }


    // public function add($data)
    // {
    //     $fileds = $placeholders = [];
    //     if (!empty($data)) {
    //         foreach ($data as $field => $value) {
    //             $fileds[] = $field;
    //             $placeholders[] = ":{$field}";
    //             //echo $field."-".":{$field}"."<br>";
    //         }
    //     }
    //     $sql = "INSERT INTO {$this->tableName} (" . implode(',', $fileds) . ") VALUES(" . implode(',', $placeholders) . ")";
    //     // var_dump($this->conn); 
    //     $stmt = $this->conn->prepare($sql);
    //     try {
    //         $this->conn->beginTransaction();
    //         $stmt->execute($data);
    //         $lastInsertedId = $this->conn->lastInsertId();
    //         $this->conn->commit();
    //         return $lastInsertedId;
    //     } catch (PDOException $e) {
    //         echo "Error: " . $e->getMessage();
    //         $this->conn->rollback();
    //     }
    // }

    // public function update($data, $id)
    // {
    //     if (!empty($data)) {
    //         $fileds = '';
    //         $x = 1;
    //         $filedsCount = count($data);

    //         foreach ($data as $field => $value) {
    //             $fileds .= "{$field} =:{$field}";
    //             if ($x < $filedsCount) {
    //                 $fileds .= ", ";
    //             }
    //             $x++;
    //         }
    //         $sql = "UPDATE {$this->tableName} SET {$fileds} WHERE stock_Id = :id";
    //         $stmt = $this->conn->prepare($sql);
    //         try {
    //             $this->conn->beginTransaction();
    //             $data['id'] = $id;
    //             $stmt->execute($data);
    //             $this->conn->commit();
    //         } catch (PDOException $e) {
    //             echo "Error: " . $e->getMessage();
    //             $this->conn->rollback();
    //         }
    //     }
    // }

    /*
        * function is used to get records 
        * @param array $start
        * @param array $limit 
        * @return array $results
    */
    public function getRows($start = 0, $limit = 4)
    {
        $ptable = 'product_description';
        $sql = "SElECT {$this->tableName}.s_Id,${ptable}.product_Name,{$this->tableName}.total_qty FROM ${ptable},{$this->tableName} WHERE ${ptable}.product_Id = {$this->tableName}.p_Id ORDER BY s_Id  DESC LIMIT {$start},{$limit}";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $results = [];
        }
        return $results;
    }

    // public function getAllRows($table_name)
    // {
    //     $sql = "SElECT category_Name FROM {$table_name}";
    //     $stmt = $this->conn->prepare($sql);
    //     $stmt->execute();
    //     if ($stmt->rowCount() > 0) {
    //         $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //     } else {
    //         $results = [];
    //     }
    //     return $results;
    // }

    // public function getAllSubRows($catname, $table_name)
    // {
    //     $ctable = 'category';
    //     $sql = "SElECT sub_Category_Name FROM {$table_name} where {$table_name}.category_Id = ( SELECT category_Id from ${ctable} where category_Name = '${catname}' )";
    //     $stmt = $this->conn->prepare($sql);
    //     $stmt->execute();
    //     if ($stmt->rowCount() > 0) {
    //         $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //     } else {
    //         $results = [];
    //     }
    //     return $results;
    // }
    // public function getAllProRows($proname, $table_name)
    // {
    //     $ctable = 'sub_category';
    //     $sql = "SElECT product_Name FROM {$table_name} where {$table_name}.sub_Category_Name = ( SELECT sub_Category_Id from ${ctable} where sub_Category_Name = '${proname}' )";
    //     $stmt = $this->conn->prepare($sql);
    //     $stmt->execute();
    //     if ($stmt->rowCount() > 0) {
    //         $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //     } else {
    //         $results = [];
    //     }
    //     return $results;
    // }
    // public function getcategories($proname, $table_name)
    // {
    //     $sctable = 'sub_category';
    //     $ptable = 'product_description';
    //     $sql = "SElECT {$table_name}.category_Name FROM {$table_name} where {$table_name}.category_Id = ( SELECT ${sctable}.category_Id from ${sctable} where ${sctable}.sub_Category_Id = (Select ${ptable}.sub_Category_Name from ${ptable} where ${ptable}.product_Name='${proname}'))";

    //     $stmt = $this->conn->prepare($sql);
    //     $stmt->execute();
    //     if ($stmt->rowCount() > 0) {
    //         $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //     } else {
    //         $results = [];
    //     }
    //     return $results;
    // }
    // public function getsubcategories($proname)
    // {
    //     $sctable = 'sub_category';
    //     $ptable = 'product_description';
    //     $sql = "SELECT ${sctable}.subcategory_Name from ${sctable} where ${sctable}.sub_Category_Id = (Select ${ptable}.sub_Category_Name from ${ptable} where ${ptable}.product_Name='${proname}')";

    //     $stmt = $this->conn->prepare($sql);
    //     $stmt->execute();
    //     if ($stmt->rowCount() > 0) {
    //         $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //     } else {
    //         $results = [];
    //     }
    //     return $results;
    // }

    public function getCount()
    {
        $sql = "SElECT count(*) as subcount FROM {$this->tableName}";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result['subcount'];
    }
    /*
        * function is used to get simple record based on the column value
        * @param string $fileds
        * @param any $value
        *@return array $results
    */

    // public function getRow($field, $value)
    // {
    //     $ptable = 'product_description';
    //     $sql = "SElECT {$this->tableName}.stock_Id,${ptable}.product_Name,{$this->tableName}.stock_qty,{$this->tableName}.added_Date FROM ${ptable},{$this->tableName} WHERE ${ptable}.product_Id = {$this->tableName}.product_Name AND {$field} = :{$field}";
    //     // echo $sql;
    //     $stmt = $this->conn->prepare($sql);
    //     $stmt->execute([":{$field}" => $value]);
    //     if ($stmt->rowCount() > 0) {
    //         $result = $stmt->fetch(PDO::FETCH_ASSOC);
    //         //echo $result;
    //     } else {
    //         $result = [];
    //     }
    //     return $result;
    // }

    // public function deleteRow($id)
    // {
    //     $sql = "DELETE FROM {$this->tableName} WHERE stock_Id = :id";
    //     $stmt = $this->conn->prepare($sql);
    //     try {
    //         $stmt->execute([':id' => $id]);
    //         if ($stmt->rowCount() > 0) {
    //             return true;
    //         }
    //     } catch (PDOException $e) {
    //         echo "Error:" . $e->getMessage();
    //         return false;
    //     }
    // }

    public function searchPlayer($searchText, $start = 0, $limit = 4)
    {
        $ptable = 'product_description';
        $sql = "SElECT {$this->tableName}.s_Id,${ptable}.product_Name,{$this->tableName}.total_qty FROM ${ptable},{$this->tableName} WHERE ${ptable}.product_Id = {$this->tableName}.p_Id  AND {$this->tableName}.p_Id = (select ${ptable}.product_Id from ${ptable} where ${ptable}.product_Name LIKE :search)  ORDER BY s_Id DESC LIMIT {$start}{$limit}";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':search' => "{$searchText}%"]);
        if ($stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $results = [];
        }
        return $results;
    }


    /*
        * function is used to upload file
        * @param array $file
        * @return array $results
    */

    // public function uploadPhoto($file)
    // {
    //     if(!empty($file)){
    //         $fileTempPath = $file['tmp_name'];
    //         $fileName = $file['name'];
    //         $fileSize = $file['size'];
    //         $fileType = $file['type'];
    //         $fileNameCmps = explode('.', $fileName);
    //         $fileExtension = strtolower(end($fileNameCmps));
    //         $newFileName = md5(time().$fileName) . '.' .$fileExtension;
    //         $allowedExtn = ["jpg","png","gif","jpeg"];
    //         if(in_array($fileExtension, $allowedExtn)){
    //             $uploadFileDir = getcwd() .'/uploads/';
    //             $destFilePath = $uploadFileDir.$newFileName;
    //             if(move_uploaded_file($fileTempPath, $destFilePath)){
    //                 return $newFileName;
    //             }
    //         }
    //     }
    // }


}
