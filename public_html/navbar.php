<?php
    $home = "<a class=\"nav-link active btn-danger\" href=\"index.php\">Home</a>";
    $view = "<a class=\"nav-link active btn-danger\" href=\"viewpage.php\">View/Update</a>";
    $create = "<a class=\"nav-link active btn-danger\" href=\"createpage.php\">Create</a>";
    ?>
    
    <ul class="nav nav-pills justify-content-center">
    <li class="nav-item">
        <?php echo $home?>
    </li>
    <li class="nav-item">
        <?php echo $view?>
    </li>
    <li class="nav-item">
        <?php echo $create?>
    </li>
</ul>

