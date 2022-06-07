<?php
include 'database.php';
class SubCategory extends Database
{
    protected $tableName = 'order_master';
    /*
        * function is used to add record
        * @param array $data
        * @return int $LastInsertedId
    */

    public function getcategoryid($catname, $tablename)
    {
        $sql = "SElECT category_Id AS catid FROM {$tablename} WHERE category_Name ={$catname}";
        $stmt = $this->conn->prepare($sql);

        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['catid'];
    }


    public function add($data)
    {
        $fileds = $placeholders = [];
        if (!empty($data)) {
            foreach ($data as $field => $value) {
                $fileds[] = $field;
                $placeholders[] = ":{$field}";
                //echo $field."-".":{$field}"."<br>";
            }
        }
        $sql = "INSERT INTO {$this->tableName} (" . implode(',', $fileds) . ") VALUES(" . implode(',', $placeholders) . ")";
        // var_dump($this->conn); 
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
            $sql = "UPDATE {$this->tableName} SET {$fileds} WHERE sub_Category_Id = :id";
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
        $usertable = 'user_info';
        $sql = "SElECT {$this->tableName}.order_Id,{$usertable}.name,{$this->tableName}.total_Amount,{$this->tableName}.payment_Type,{$this->tableName}.currentdate FROM ${usertable},{$this->tableName} WHERE ${usertable}.info_User_Id = {$this->tableName}.customer_Id ORDER BY order_Id  DESC LIMIT {$start},{$limit}";
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
        $sql = "SElECT category_Name FROM {$table_name}";
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
        $sql = "SElECT count(*) as ordcount FROM {$this->tableName}";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result['ordcount'];
    }
    /*
        * function is used to get simple record based on the column value
        * @param string $fileds
        * @param any $value
        *@return array $results
    */

    public function getRow($field, $value)
    {
        $ctable = 'category';
        $sql = "SElECT category_Name,sub_Category_Name,sub_Category_Id FROM ${ctable},{$this->tableName} WHERE ${ctable}.category_Id = {$this->tableName}.category_Id AND {$field} = :{$field}";
        // echo $sql;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([":{$field}" => $value]);
        if ($stmt->rowCount() > 0) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            //echo $result;
        } else {
            $result = [];
        }
        return $result;
    }

    public function deleteRow($id)
    {
        $sql = "DELETE FROM {$this->tableName} WHERE sub_Category_Id = :id";
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
        $usertable = 'user_info';
        $sql = "SELECT  {$this->tableName}.order_Id,{$usertable}.name,{$this->tableName}.total_Amount,{$this->tableName}.payment_Type,{$this->tableName}.currentdate FROM ${usertable},{$this->tableName} WHERE ${usertable}.info_User_Id = {$this->tableName}.customer_Id AND {$usertable}.name LIKE :search ORDER BY Order_Id DESC LIMIT {$start}{$limit}";
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
