<?php


// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_FILES["file"]) && $_FILES["file"]["error"] == 0){
        $allowed = "torrent";
        $filename = $_FILES["file"]["name"];
        $filetype = $_FILES["file"]["type"];
        $filesize = $_FILES["file"]["size"];
        //echo $filename; 
    }

    // Verify file extension
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
   
    //To display extension
    // echo $ext."\n";
    // echo $allowed."\n";

    // To display filetype
    // echo gettype($ext)." \n";
    // echo gettype($allowed)."\n";

    //To check filetype
    if($ext!=$allowed) {
        die("Invalid Filetype!!!!");
    }
    
    

}
   
    
       

?>