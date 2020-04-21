
<?php
   $scp_id = $_POST['SCP_num'];
   $object_class = mysqli_real_escape_string($conn,$_POST['object']);
   $scp = mysqli_real_escape_string($conn,$_POST['SCP']);
   $object_description = mysqli_real_escape_string($conn,$_POST['description']);
   $clearance = $_POST['clearance'];
   $has_notes = $_POST['notes'];
    //Multi Usable update script for if the user decides to change all the fields in the row or just some.
    if(isset($_POST['SCP_num']) && isset($_POST['object']) && isset($_POST['SCP']) && isset($_POST['description']) && isset($_POST['clearance']) && isset($_POST['notes']))
    {
        $scp_id = $_POST['SCP_num'];
        $object_class = mysqli_real_escape_string($conn,$_POST['object']);
        $scp = mysqli_real_escape_string($conn,$_POST['SCP']);
        $object_description = mysqli_real_escape_string($conn,$_POST['description']);
        $clearance = $_POST['clearance'];
        $has_notes = $_POST['notes'];
        if($has_notes==='0'){
            $update_SCP_Entry = " UPDATE `SCP_Entry` SET `ID` = '$scp_id', `OBJECT_CLASS` = '$object_class', `SPECIAL_CONTAINMENT_PROCEDURE` = '$scp', `OBJECT_DESCRIPTION` = '$object_description', `SECURITY_CLEARANCE` = '$clearance' WHERE `SCP_Entry`.`ID` = $scp_id";
            if($conn->query($update_SCP_Entry)===TRUE){}
        }
        if($has_notes==='1'){
            $update_SCP_Entry = " UPDATE `SCP_Entry` SET `ID` = '$scp_id', `OBJECT_CLASS` = '$object_class', `SPECIAL_CONTAINMENT_PROCEDURE` = '$scp', `OBJECT_DESCRIPTION` = '$object_description', `SECURITY_CLEARANCE` = '$clearance', `ADDITIONAL_NOTES` = '$has_notes' WHERE `SCP_Entry`.`ID` = $scp_id";
            if($conn->query($update_SCP_Entry)===TRUE){
                $counter = (int)$_POST['counter'];
                $i = 1;
                while($i <= $counter){
                    $title = 'note_name' . $i;
                    $text = 'note_text' . $i;
                    if(isset($_POST[$title]) && isset($_POST[$text])){
                        $note_title = mysqli_real_escape_string($conn,$_POST[$title]);
                        $note_body = mysqli_real_escape_string($conn,$_POST[$text]);
                        $insert_in_SCP_NOTES = "INSERT INTO `SCP_NOTES` (`NOTE_ID`, `ENTRY_ID`, `NOTE_NAME`, `NOTE`) 
                                                VALUES (NULL, '$scp_id', '$note_title', '$note_body')";
                        if($conn->query($insert_in_SCP_NOTES)===TRUE){
                            
                            }
                        }
                        $i++; 
                    }
                }
            }
        }
?>