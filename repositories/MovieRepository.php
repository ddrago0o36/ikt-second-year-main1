<?php


class MovieRepository extends Db
{
    public function getAll(){
        $sql = "
        SELECT 
            * FROM 
              movie";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}