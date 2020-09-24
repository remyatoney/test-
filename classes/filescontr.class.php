<?php

class FilesContr extends FilesModel {
    public function insertfiles ($description, $fileFullName, $setFileOrder) {
        $this->setfile($description, $fileFullName, $setFileOrder);
    }
    public function filedelete ($id) {
        $this->deletefile($id);
    }
    
}