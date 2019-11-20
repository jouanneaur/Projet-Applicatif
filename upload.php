<?php
//file upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$uploadOk = 1;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

//Check if there is a file to upload
if(empty($_FILES["file"]["name"])) {
        echo "Sorry, no file found to upload.";
    $uploadOk = 0;
}

// Check if file already exists
if (file_exists($targetFilePath) && !empty($_FILES["file"]["name"])) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["file"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
//Check type
    $allowTypes = array('pdf');
    if(in_array($fileType, $allowTypes)){
    ;
}else{
        echo "Sorry, only PDF files are allowed.";
        $uploadOk = 0;
    }

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
}
else{
// if everything is ok, try to upload file
if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            //header("location: recherche.php");
        echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>