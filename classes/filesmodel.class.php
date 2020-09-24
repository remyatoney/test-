<?php

class FilesModel extends Dbh {
    protected function getfile($id) {
        $sql = "SELECT * FROM files WHERE id='$id'";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }
    protected function getfileshow() {
        $sql = "SELECT * FROM files WHERE deletion_status=0 ORDER BY orderFile";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll();
        return $results;
    }    
    protected function getfiledeleteshow() {
        $sql = "SELECT * FROM files WHERE deletion_status=1 ORDER BY orderFile DESC";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll();
        return $results;
    }  
    protected function getfilesearch($find) {
        $sql = "SELECT * FROM files WHERE  descFile LIKE '%$find%' OR fileFullName LIKE '%$find%';";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll();
        return $results;
    }
    protected function getfilenumber() {
        $sql = "SELECT * FROM files;";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll();
        return $results;
    }
    protected function setfile($description, $fileFullName, $setFileOrder) {
        $sql = "INSERT INTO files (descFile, fileFullName, orderFile, timedate) VALUES (?,?,?,?);";
        $t = time();
        $time = date("Y-m-d h:i:s",$t);
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$description, $fileFullName, $setFileOrder, $time]);
    }
    protected function deletefile($id) {
        $t = time();
        $time = date("Y-m-d h:i:s",$t);
        $sql = "UPDATE files SET deletion_status=1, timedate='$time' WHERE id='$id';";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
    }
}