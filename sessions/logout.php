<?php
    session_start();
    
    $_SESSION = [];
    
    session_destroy();
    
    header("Location: welcome.phtml");
    exit();
?>