<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <link rel="stylesheet" href="/Bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="/css/style.css" type="text/css">
    <title>Kirk Remin - 10004981</title>

</head>

<body>

    <?php include "navbar.php"?>
    <?php include "connect.php"?>
    <?php include "add_entry.php"?>

    <div class="form-group" style="margin-top:10vh;margin-left:10vw; margin-right:10vw; color: white;">
        <form id="Create_Form" action="createpage.php" method="POST" enctype="multipart/form-data">
        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="object_select">Object Class:</label>
        </div>
        <select class="form-control" name="object" id="object_select">
            <option value="Euclid" selected>Euclid</option>
            <option value="Safe">Safe</option>
        </select>
        </div>
        <div class="form-group">
        <input class="form-control" type="file" name="image_upload" id="image_upload">
        </div>
  
        <div class="form-group">
        <label for="SCP">Special Containment Procedures</label><br>
        <textarea class="form-control" name="SCP" id="SCP_field" style="resize:none;" rows="10"></textarea>
        
        </div>
        <div class="form-group">
        <label for="description">Description:</label><br>
        <textarea class="form-control"name="description" id="descriptionField" style="resize:none;" rows="10"></textarea>
        </div>

        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="sec_clear">Security Clearance</label>
        </div>
        <select class="form-control"name="clearance" id="sec_clear">
            <option value=1>1</option>
            <option value=2>2</option>
            <option value=3>3</option>
            <option value=4>4</option>
            <option value=5>5</option>
            <option value=6>6</option>
            <option value=7>7</option>
            <option value=8>8</option>
            <option value=9>9</option>
            <option value=10>10</option>
        </select>
        </div>

        <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="note_select">Additional Notes:</label>
        </div>
        <select class="form-control" name="notes" id="note_select" onchange="add_note(this)">
            <option value=0 selected>No</option>
            <option value=1>Yes</option>
        </select>
        </div>
        <div class="form-group" id="container0"></div>
        <input type="number" name="counter" id="loopcounter" style="display:none;">
        <input type="reset" class="btn btn-danger">
        <input type="submit" class="btn btn-success">
        </form>
    </div>

<?php include "close.php" ?>
</body>
</html>
<script src="add_note.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="/Bootstrap/js/bootstrap.js"></script>