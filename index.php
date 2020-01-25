<!-- to redirect common home/index page -->
<?php
    include 'controller/AdminControl.php';
    $obj = new AdminControl();
    $obj -> LoadIndex();
?>