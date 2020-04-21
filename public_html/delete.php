<?php
$servername = 'localhost';
$username = 'a1000498_Kirk';
$password = 'Lara&Kirk7854';
$dbname = 'a1000498_SCP_DB';
$port = '3306';
   $conn = new mysqli($servername, $username, $password, $dbname, $port);
   $conn->connect($servername, $username, $password, $dbname);

if(isset($_GET['delete_all'])){
    
                    $deleteid = $_GET['delete_all'];
                    $conn->query("DELETE FROM `SCP_Entry` WHERE `SCP_Entry`.`ID` = $deleteid");
                    $conn->query("DELETE FROM `SCP_NOTES` WHERE `SCP_NOTES`.`ENTRY_ID` = $deleteid");
                    
                }
if(isset($_GET['delete_note'])&&isset($_GET['alter'])){
    
    $deleteid = $_GET['delete_note'];
    $conn->query("DELETE FROM `SCP_NOTES` WHERE `SCP_NOTES`.`NOTE_ID` = $deleteid");
    $alterid = $_GET['alter'];
    $sql = "SELECT * FROM `SCP_NOTES` WHERE `ENTRY_ID` = $alterid";
    $result = mysqli_query($conn,$sql);
     if(mysqli_num_rows($result)===0){
         $conn->query("UPDATE `SCP_Entry` SET `ADDITIONAL_NOTES` = '0' WHERE `SCP_Entry`.`ID` = $alterid");
     }           
}

header("Location: viewpage.php");
?>