<?php
require_once 'Database.php';

class player extends Database
{
    //Table Name

    protected $tableName = 'category';
    
    /**
     * function is used to add record    
     * @param array $data 
     * @return int $lastInsertedId
     */
    public function add($data)
    {
     
        if(!empty($data)){
            $fields=$placeholders = [];
            foreach ($data  as $field=> $value) {
                $fields[]= $field;
                $placeholders[]=":{$field}";
            }
        }
        $sql="INSERT INTO {$this->tableName} (".implode(',',$fields).") VALUES(".implode(',',$placeholders) .")";
        $stmt = $this->conn->prepare($sql);
        try {   
            $this->conn->beginTransaction();
            $stmt->execute($data);
            $lastInsertedId=$this->conn->lastInsertId();
            $this->conn->commit();
            return $lastInsertedId;
        } catch (PDOException $e) {
            echo "Error".$e->getMessage();
            $this->conn->rollback();
        }
    }
  
    public function update($data,$id)
    {
        if(!empty($data))
        {
            $fields = '';
            $x= 1 ;
            $fieldsCount = count($data);
            foreach ($data as $field => $value) {
                $fields .= "{$field}=:{$field}";
                if($x < $fieldsCount)
            {
                $fields .= ", ";
            }
            $x++;
            }
        }
        $sql = "UPDATE {$this->tableName} SET {$fields} WHERE category_Id=:id";
        $stmt = $this->conn->prepare($sql);
        try {   
            $this->conn->beginTransaction();
            $data['id'] = $id;
            $stmt->execute($data); 
            $this->conn->commit();
        } catch (PDOException $e) {
            echo "Error".$e->getMessage();
            $this->conn->rollback();
        }
    }


    /**
     * function is used to get records 
     * @param int $start
     * @param int $limit
     * @return array $results
     */
    public function getRows($start=0, $limit=4)
    {
        $sql = "SELECT * FROM {$this->tableName} ORDER BY category_Id DESC LIMIT {$start},{$limit}";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        if($stmt->rowCount() >0)
        {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        else {
            $results = [];
        }
        return $results;
    }
    public function getCount()
    {
        $sql = "SELECT count(*) as pcount FROM {$this->tableName}";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['pcount'];
    }
    /**
         * This function is used to get single record based on the column value
         * @param string $field
         * @param any $value
         * @return array $result
     */
    public function getRow($field,$value)
    {
        $sql = "SELECT * FROM {$this->tableName} WHERE {$field}=:{$field}";
        
        $stmt=$this->conn->prepare($sql);
        $stmt->execute([":{$field}"=> $value]);
        if($stmt->rowCount() >0){
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        else{
            $result = [];
        }
        return $result;
    }

    public function searchPlayer($searchText , $start=0, $limit=4)
    {
        $sql = "SELECT * FROM {$this->tableName} WHERE category_Name LIKE :search ORDER BY category_Id DESC LIMIT {$start},{$limit}";
        $stmt =$this->conn->prepare($sql);
        $stmt->execute([':search' =>"{$searchText}%"]);
        if($stmt->rowCount() >0){
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        else{
            $results = [];
        }
        return $results;

    }

    /**
     * funtion is used to upload file
     * @param array $file
     * @return string $fileName
     */
    public function uploadphoto($file)
    {
        if(!empty($file))
        {
            $fileTempPath= $file['tmp_name'];
            $fileName = $file['name'];
            $fileSize = $file['size'];
            $fileType = $file['type'];
            $fileNameCmps = explode('.',$fileName);
            $fileExtension = strtolower(end($fileNameCmps));
            $newFileName = md5(time().$fileName). '.' .$fileExtension;
            $allowedExtn = ["jpg","png","gif","jpeg"];
            if(in_array($fileExtension,$allowedExtn))
            {
                $uploadFileDir = getcwd() . '/uploads/';
                $destFilePath = $uploadFileDir . $newFileName;
                if(move_uploaded_file($fileTempPath ,$destFilePath))
                {
                    return $newFileName;
                }
            }
        }
    }
   
    public function deleteRow($id)
    {
       
        $sql = "DELETE FROM {$this->tableName} WHERE category_Id=:id";
        $stmt=$this->conn->prepare($sql);
        try {
            $stmt->execute([':id'=> $id]);
            if($stmt->rowCount() >0){
                return true;
              }
        } catch (PDOEXCEPTION $e) {
            echo "Error :" . $e->getMessage();
            return false;
        }
    }
}
?> 