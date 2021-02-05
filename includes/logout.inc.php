<?php 
    // Sequence of session functions to log out user
    session_start();
    session_unset();
    session_destroy();

    // User returns to frontpage
    header('Location: ../index.php');
    exit();