<?php
    include_once 'navbar.inc.php';
    if (isset($_POST['submit'])) {
        $newFileName = $_POST['filename'];
        if (empty($newFileName)) {
            $newFileName = "File";
        }
        else {
            $newFileName = strtolower(str_replace(" ", "-", $newFileName));
        }
        $description = $_POST['description'];
        $file = $_FILES['file'];
        $fileName = $file["name"];
        $fileType = $file["type"];
        $fileTempName = $file["tmp_name"];
        $fileError = $file["error"];
        $fileSize = $file["size"];
        $fileExt = explode(".", $fileName);
        $fileActualExt = strtolower(end($fileExt));
        $allowed = array("txt","doc","docx","pdf","gif","jpg", "jpeg", "png");
        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 2000000) {
                    $fileFullName = $newFileName.".".uniqid("",true).".".$fileActualExt;
                    $fileDestination = "../files/".$fileFullName;
                    if (empty($description)) {
                        header("Location: ../upload.php?error=emptyfields");
                        exit();
                    } else {
                        $filenumber = new FilesView();
                        $rowcount = $filenumber->numberoffiles();
                        $setFileOrder = $rowcount + 1;
                        $fileInsert = new FilesContr();
                        $fileInsert->insertfiles($description, $fileFullName, $setFileOrder);
                        move_uploaded_file($fileTempName, $fileDestination);
                        header("Location: ../upload.php?upload=success");
                    }
                } else {
                    header("Location: ../upload.php?error=bigfile");
                    exit();
                }
            } else {
                header("Location: ../upload.php?error=fileerror");
                exit();
            }
        } else {
            header("Location: ../upload.php?error=improperfiletype");
            exit();
        }
    }