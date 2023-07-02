<?php
$target_dir = "uploads/";
if(isset($_FILES) && is_array($_FILES) && count($_FILES)>0){
    echo "Processing the file";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}else{

    echo "Ready for files!";
}

?>