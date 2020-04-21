<?php 
$sql = "SELECT * FROM `SCP_Entry`";

$result = mysqli_query($conn,$sql);

while($row = $result->fetch_assoc()){
    
    echo "<div class='table-responsive'><table class='table table-dark'>
        <thread>
        <tr>
        <th scope='col'></th>
        <th scope='col'>View</th>
        </tr>
        </thread>
        <tbody>";
    echo "<tr> <th>ID: </th><th scope='row' class='".$row['ID']."'>SCP-00" . $row['ID'] ."<br><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#edit_Modal' onclick='edit_modal_form(".$row['ID'].")'>Edit</button> "
        ."<a href='delete.php?delete_all=" . $row['ID'] . "' class='btn btn-danger'>DELETE ALL</a></th></tr>"
        ."<tr><th>Image:</th><th class='".$row['ID']."'> <img class='img-fluid' src='".$row['IMAGE']."'></th></tr>" 
        ."<tr><th> Object Class: </th><th class='".$row['ID']."'>" . $row['OBJECT_CLASS'] . "</th></tr>" 
        ."<tr><th> SCP: <br><br></th><th class='".$row['ID']."'>". $row['SPECIAL_CONTAINMENT_PROCEDURE'] . "</th></tr>" 
        ."<tr><th>Description: <br><br></th><th class='".$row['ID']."'>". $row['OBJECT_DESCRIPTION'] . "</th></tr>"
        ."<tr><th class='".$row['ID']."'> Security Level: ". $row['SECURITY_CLEARANCE'] . "</th></tr>";
                
    $id = $row['ID'];
    if($row['ADDITIONAL_NOTES']==='1'){
        echo "<table class='table table-light table-bordered'>
            <thread>
            <tr>
            <th scope='col'>SCP-00".$row['ID']." -- Additional Notes:</th>
            <th scope='col'> </th>
            <th scope='col'> </th>
            </tr>
            </thread>
            <tbody>";
        $note_query = "SELECT * FROM SCP_NOTES WHERE ENTRY_ID=$id";
        $note_result = mysqli_query($conn,$note_query) or die($conn->error);
        while ($note_row = $note_result->fetch_assoc()){
            echo "<tr> <td>" . $note_row['NOTE_NAME']. "</td>"
            . "<td>".$note_row['NOTE']."</td>"
            . "<td> <a href='delete.php?delete_note=".$note_row['NOTE_ID']."&alter=".$row['ID']."' class='btn btn-danger'>DELETE</a>
            </tr>";
        }
    }
echo "</tr> </trbody> </table> </div>";
}
?>
