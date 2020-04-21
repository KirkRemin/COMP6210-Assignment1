<?php
$servername = 'localhost';
$username = 'a1000498_Kirk';
$password = 'Lara&Kirk7854';
$dbname = 'a1000498_SCP_DB';
$port = '3306';
$image_dir = "images/" . basename($_FILES["image_upload"]["name"]);
$image_type = strtolower(pathinfo($image_dir,PATHINFO_EXTENSION));
   $conn = new mysqli($servername, $username, $password, $dbname, $port);
   
    
if(isset($_POST['object']) && isset($_POST['SCP']) && isset($_POST['description']) && isset($_POST['clearance']) && isset($_POST['notes']))
    {
        $object_class = mysqli_real_escape_string($conn,$_POST['object']);
        $scp = mysqli_real_escape_string($conn,$_POST['SCP']);
        $object_description = mysqli_real_escape_string($conn,$_POST['description']);
        $clearance = $_POST['clearance'];
        $has_notes = $_POST['notes'];
        $insert_in_SCP_Entry = "INSERT INTO `SCP_Entry` (`ID`, `IMAGE`, `OBJECT_CLASS`, `SPECIAL_CONTAINMENT_PROCEDURE`, `OBJECT_DESCRIPTION`, `SECURITY_CLEARANCE`, `ADDITIONAL_NOTES`)
                                VALUES (
                                    NULL,
                                    NULL,
                                    '$object_class',
                                    '$scp',
                                    '$object_description',
                                    '$clearance',
                                    '$has_notes'
                                    )";
        //Check if image has been uploaded
        if(!empty($_FILES["image_upload"]) && $_FILES['image_upload']['size'] <= 1000000){
            if($image_type == "jpg" || $image_type == "png" || $image_type == "jpeg" || $image_type == "gif" ) {
                if (move_uploaded_file($_FILES["image_upload"]["tmp_name"], $image_dir)) {
                    
                }
                $image_dir = mysqli_real_escape_string($conn,("images/" . basename($_FILES["image_upload"]["name"])));
                
                
                
                
                $insert_in_SCP_Entry = "INSERT INTO `SCP_Entry` (`ID`, `IMAGE`, `OBJECT_CLASS`, `SPECIAL_CONTAINMENT_PROCEDURE`, `OBJECT_DESCRIPTION`, `SECURITY_CLEARANCE`, `ADDITIONAL_NOTES`)
                                VALUES (
                                    NULL,
                                    '$image_dir',
                                    '$object_class',
                                    '$scp',
                                    '$object_description',
                                    '$clearance',
                                    '$has_notes'
                                    )";
            }
            else{
                //Is not an appropriate image type
            }
            //if image is not empty then upload and run query with path location.
        }               
        
        //Else just run the query with the text.

        if($conn->query($insert_in_SCP_Entry)===TRUE){
             
        }
        else{
             
        }
        $sql = "SELECT * FROM `SCP_Entry` ORDER BY ID DESC LIMIT 1";
        $result = mysqli_query($conn,$sql);
        
        while($row = $result->fetch_assoc()){
             
        $id = $row['ID'];
        if($row['ADDITIONAL_NOTES']==='1'){
            $counter = (int)$_POST['counter'];
            $i = 1;
            while($i <= $counter){
                $title = 'note_name' . $i;
                $text = 'note_text' . $i;
                if(isset($_POST[$title]) && isset($_POST[$text])){
                    $note_title = mysqli_real_escape_string($conn,$_POST[$title]);
                    $note_body = mysqli_real_escape_string($conn,$_POST[$text]);
                    $insert_in_SCP_NOTES = "INSERT INTO `SCP_NOTES` (`NOTE_ID`, `ENTRY_ID`, `NOTE_NAME`, `NOTE`) 
                    VALUES (NULL, '$id', '$note_title', '$note_body')";
                    if($conn->query($insert_in_SCP_NOTES)===TRUE){
                    }
                }
                $i++; 
            }
        }
        
    }
}
?>