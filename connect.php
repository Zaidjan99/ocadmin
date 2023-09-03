<?php
    $con=mysqli_connect("localhost:3307", "root", "", "oceanbites");

    if(mysqli_connect_error()){
        echo"<script>('cannot not to the database');</script>";
        exit();
    }

?>