<?php
if(isset($_GET['delete'])){
    $deleteid = $_GET['delete'];
    $conn->query("DELETE * FROM SCP_Entry WHERE ID=$deleteid");
    $conn->query("DELETE * FROM SCP_NOTES WHERE ENTRY_ID=$deleteid");
}
?>