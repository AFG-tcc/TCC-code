<?php
        session_start();
        print_r($_SESSION);
        if (!isset($_SESSION['email']) == true && !isset($_SESSION['senha']) == true) {
            exit();
        }
        
    ?>  


