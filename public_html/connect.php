
<?php
     $servername = 'localhost';
     $username = 'a1000498_Kirk';
     $password = 'Lara&Kirk7854';
     $dbname = 'a1000498_SCP_DB';
     $port = '3306';
        $conn = new mysqli($servername, $username, $password, $dbname, $port);
        $conn->connect($servername, $username, $password, $dbname);

//Used below to create my tables.
// I then used phpMyAdmin to sort out some issues i was having at a later date, mainly allowing my Incremental ID's to be NULL.
//         if($conn->error){
//              die("Connection Failed!");
//          }
//          else
//          {
//              echo "<p> connection succesful </p>";
//          }

//           $create_main_table =  "CREATE TABLE SCP_Entry (
//              ID INT(3) PRIMARY KEY AUTO_INCREMENT,
//              OBJECT_CLASS VARCHAR(20) NOT NULL,
//              SPECIAL_CONTAINMENT_PROCEDURE TEXT(65000) NOT NULL,
//              OBJECT_DESCRIPTION TEXT(65000) NOT NULL,
//              SECURITY_CLEARANCE INT(2) NOT NULL DEFAULT 10,
//              ADDITIONAL_NOTES BOOLEAN NOT NULL DEFAULT FALSE
//           )";

//          $create_notes = "CREATE TABLE SCP_NOTES (
//             NOTE_ID INT(10) PRIMARY KEY AUTO_INCREMENT,
//             ENTRY_ID INT(3) NOT NULL,
//             NOTE_NAME VARCHAR(30) NOT NULL,
//             NOTE TEXT(65000) NOT NULL,
//             FOREIGN KEY (ENTRY_ID) REFERENCES SCP_Entry(ID)
//             )";

// if($conn->query($create_main_table)===TRUE){
//     echo "<h1> Table Created </h1>";
// }
// else{
//     echo "Table Already Exists";
// }
// if($conn->query($create_notes)===TRUE){
//     echo "<h1> Table Created </h1>";
// }
// else{
//     echo "Table Already Exists";
// }
?>