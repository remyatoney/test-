<?php

class FilesView extends FilesModel {
    public function showfile($id) {
        $result = $this->getfile($id);
        echo '<p>'.$result['descFile'].'</p>
            <div class="col-12">
                <object data="/test/files/'.$result['fileFullName'].'">Fallback: This browser does not support this file</object> 
            </div>';
    }
    public function showfileget() {
        $results = $this->getfileshow();
        $row = count($results);
        for ($i=0; $i<$row; $i++) {
            echo '<div class="col-12"><a href="showfile.php?id='.$results[$i]["id"].'">
                <p style="text-decoration: none; color: #0B6A6F;">'.$results[$i]["fileFullName"].'</p></a>
                <form method="POST" action="includes/delete.inc.php">
                <input type="hidden" name="id" value="'.$results[$i]["id"].'">
                <button type="btn">Delete</button>
                </form></div>';
        }   
    }
    public function showfileuploadget() {
        $results = $this->getfileshow();
        $row = count($results);
        for ($i=0; $i<$row; $i++) {
            echo '<div class="col-12">
                <p style="text-decoration: none; color: #0B6A6F;">'.$results[$i]["fileFullName"].'&nbsp;&nbsp;'.$results[$i]["timedate"].'</p>
                </div>';
        }   
    }
    public function showfiledeleteget() {
        $results = $this->getfiledeleteshow();
        $row = count($results);
        for ($i=0; $i<$row; $i++) {
            echo '<div class="col-12">
                <p style="text-decoration: none; color: #0B6A6F;">'.$results[$i]["fileFullName"].'&nbsp;&nbsp;'.$results[$i]["timedate"].'</p>
                </div>';
        }   
    }
    public function searchfile($search) {
        $results = $this->getfilesearch($search);
        $queryResult = count($results);
        if($queryResult <=1) {
            echo "There is ".$queryResult," result<br>";
        } else {
            echo "There are ".$queryResult." results<br><br><br>";
        }
        for ($i=0; $i<$queryResult; $i++) {
            echo '<a href="showfile.php?id='.$results[$i]["id"].'">';
            echo '<div class="row">
                        <div class="col-12">
                            <p class="text-center" style="text-decoration: none; color: #0B6A6F;">'.$results[$i]["descFile"].'</p>
                        </div>
                    </div>
                </a><br><br>';                       
        }
    }
    public function numberoffiles() {
        $results = $this->getfilenumber();
        $nooffiles = count($results);
        return $nooffiles;
    }
}