<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
    <link rel="stylesheet" href="/Bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="/css/style.css" type="text/css">
    <title>Kirk Remin - 10004981</title>
    

</head>

<body class="container">
    <?php include "navbar.php"?>
    <?php include "connect.php"?>
    <?php include "edit.php"?>
    <?php include "display_table.php"?>
    
<!-- Modal -->
<div class="modal fade" id="edit_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">SCP-EDITOR</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group" style="margin-top:3vh; color:black;">
            <form action="viewpage.php" method="POST" id="update_form">
            
            <label id="SCP_ID"></label><br>
            <input type="hidden" name="SCP_num" id="SCP_hidden_ID">
            
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <label class="input-group-text" for="object" >Object Class:</label><br>
            </div>
            <select class="form-control" name="object" id="object_select">
                <option value="Euclid" selected >Euclid</option>
                <option value="Safe">Safe</option>
            </select>
            </div>
            
            <div class="form-group">
            <label for="SCP">Special Containment Procedures</label><br>
            <textarea class="form-control" sname="SCP" id="SCP_field" style="resize:none;" rows="5"></textarea><br>
            </div>
            
            <div class="form-group">
            <label for="description">Description:</label><br>
            <textarea class="form-control" name="description" id="descriptionField" style="resize:none;" rows="5"></textarea>
            </div>

            <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Security Clearance</label>
            </div>
            <select name="clearance" id="inputGroupSelect01">
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
            <select name="notes" id="note_select" onchange="add_note(this)">
                <option value=0 selected>No</option>
                <option value=1>Yes</option>
            </select>
            </div>
            
            <div id="container"></div>      
        </div>
      </div>
      <div class="modal-footer">
            <input type="number" name="counter" id="loopcounter" style="display:none;">
            <input type="reset" class="btn btn-danger">  
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary">Save changes</button>
        </form>
        </div>
    </div>
  </div>
</div>

</body>
</html>
<script src="edit_modal_form.js"></script>
<script src="add_note.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="/Bootstrap/js/bootstrap.js"></script>