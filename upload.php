<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_FILES["image"]) && $_FILES["image"]["error"] ==0 ){
        $allow = array(
            "jpg"=> "image/jpg",
            "JPG"=> "image/JPG",
            "jpeg"=> "image/jpeg",
            "JPEG"=> "image/JPEG",
            "gif"=> "image/gif",
            "GIF"=> "image/GIF",
            "png"=> "image/png",
            "PNG"=> "image/PNG"
        );
        $fname = $_FILES["image"]["name"];
        $ftype = $_FILES["image"]["type"];
        $fsize = $_FILES["image"]["size"];

        $extension = pathinfo($fname, PATHINFO_EXTENSION);

        if(!array_key_exists($extension, $allow)) die("Error: Please select a valid file format.");

        $maximumsize = 5 * 1024 * 1024;

        if($fsize>$maximumsize) die("Error: File size cross the maximum limit.");

        if(in_array($ftype, $allow)){
            if(file_exists("images/" .$_FILES["image"]["name"])){
                echo $_FILES["image"]["name"] ."is already exists";
            } else{
                move_uploaded_file($_FILES["image"]["tmp_name"],"images/".$_FILES["image"]["name"]);
                echo "Your file was uploaded successfully.";
            }
        } else{
            echo "Error: There was a problem uploading your file, Please try again";
        }
    } else{
        echo "Error: ".$_FILES["image"]["error"];
    }
}