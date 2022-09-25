<?php
    $link = mysqli_connect("localhost", "root", "", "socket_youtube");
    // $link = mysqli_connect("localhost", "stardxno_socketUser", "stardxno_socket", "socketUser");
    // socketUser
    
    if(mysqli_connect_error()){
        die('ERROR:Unable to connect to the database:'.mysqli_connect_error());
    }
?>