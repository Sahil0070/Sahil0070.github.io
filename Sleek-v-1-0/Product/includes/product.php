<?php
include 'database.php';
class SubCategory extends Database
{
    protected $tableName = 'product_description';
    /*
        * function is used to add record
        * @param array $data
        * @return int $LastInsertedId
    */

    public function getsubcategoryid($catname, $tablename)
    {
        $sql = "SElECT sub_Category_Id AS subcatid FROM {$tablename} WHERE sub_Category_Name ={$catname}";
        $stmt = $this->conn->prepare($sql);

        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['subcatid'];
    }


    public function add($data)
    {
        $fileds = $placeholders = [];
        if (!empty($data)) {
            foreach ($data as $field => $value) {
                $fileds[] = $field;
                $placeholders[] = ":{$field}";
                // echo $field."-".":{$field}"."<br>";
            }
        }
        $sql = "INSERT INTO {$this->tableName} (" . implode(',', $fileds) . ") VALUES(" . implode(',', $placeholders) . ")";
        // var_dump($this->conn); 
        // echo "insert sql".$sql;die();
        $stmt = $this->conn->prepare($sql);
        try {
            $this->conn->beginTransaction();
            $stmt->execute($data);
            $lastInsertedId = $this->conn->lastInsertId();
            $this->conn->commit();

            return $lastInsertedId;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            $this->conn->rollback();
        }
    }

    public function update($data, $id)
    {
        if (!empty($data)) {
            $fileds = '';
            $x = 1;
            $filedsCount = count($data);

            foreach ($data as $field => $value) {
                $fileds .= "{$field} =:{$field}";
                if ($x < $filedsCount) {
                    $fileds .= ", ";
                }
                $x++;
            }
            $sql = "UPDATE {$this->tableName} SET {$fileds} WHERE product_Id = :id";
            $stmt = $this->conn->prepare($sql);
            try {
                $this->conn->beginTransaction();
                $data['id'] = $id;
                $stmt->execute($data);
                $this->conn->commit();
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
                $this->conn->rollback();
            }
        }
    }

    /*
        * function is used to get records 
        * @param array $start
        * @param array $limit 
        * @return array $results
    */
    public function getRows($start = 0, $limit = 4)
    {
        $sctable = 'sub_category';
        $sql = "SElECT product_description.product_Id,${sctable}.sub_Category_Name,product_description.product_Name,product_description.price,product_description.discount,product_description.discount_Price,product_description.photo,product_description.description FROM ${sctable},{$this->tableName} WHERE ${sctable}.sub_Category_Id = {$this->tableName}.sub_Category_Name ORDER BY product_Id  DESC LIMIT {$start},{$limit}";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $results = [];
        }
        return $results;
    }

    public function getAllRows($table_name)
    {
        $sql = "SElECT sub_Category_Name FROM {$table_name}";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $results = [];
        }
        return $results;
    }


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

    public function getRow($field, $value)
    {
        $sctable = 'sub_category';
        $sql = "SElECT product_description.product_Id,${sctable}.sub_Category_Name,product_description.product_Name,product_description.price,product_description.discount,product_description.discount_Price,product_description.photo,product_description.description FROM ${sctable},{$this->tableName} WHERE ${sctable}.sub_Category_Id = {$this->tableName}.sub_Category_Name AND {$field} = :{$field}";
        // echo $sql;die();
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([":{$field}" => $value]);
        if ($stmt->rowCount() > 0) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            // echo "this is result";
            // var_dump($result);die();    
        } else {
            $result = [];
        }
        return $result;
    }

    public function deleteRow($id)
    {
        $sql = "DELETE FROM {$this->tableName} WHERE product_Id = :id";
        $stmt = $this->conn->prepare($sql);
        try {
            $stmt->execute([':id' => $id]);
            if ($stmt->rowCount() > 0) {
                return true;
            }
        } catch (PDOException $e) {
            echo "Error:" . $e->getMessage();
            return false;
        }
    }

    public function searchPlayer($searchText, $start = 0, $limit = 4)
    {
        $stable = 'sub_category';
        $sql = "SELECT {$this->tableName}.product_Id,${stable}.sub_Category_Name,{$this->tableName}.product_Name,{$this->tableName}.price,{$this->tableName}.discount,{$this->tableName}.discount_Price,{$this->tableName}.photo FROM ${stable},{$this->tableName} WHERE ${stable}.sub_Category_Id = {$this->tableName}.sub_Category_Name AND {$this->tableName}.product_Name LIKE :search ORDER BY product_Id DESC LIMIT {$start}{$limit}";
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

    public function uploadphoto($file)
    {
        if (!empty($file)) {
            $fileTempPath = $file['tmp_name'];
            $fileName = $file['name'];
            $fileSize = $file['size'];
            $fileType = $file['type'];
            $fileNameCmps = explode('.', $fileName);
            $fileExtension = strtolower(end($fileNameCmps));
            $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
            $allowedExtn = ["jpg", "png", "gif", "jpeg", "webp"];
            if (in_array($fileExtension, $allowedExtn)) {
                $uploadFileDir = getcwd() . '/uploads/';
                $destFilePath = $uploadFileDir . $newFileName;
                if (move_uploaded_file($fileTempPath, $destFilePath)) {

                    return $newFileName;
                }
            }
        }
    }
}
