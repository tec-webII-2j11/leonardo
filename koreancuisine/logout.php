<?php

session_start();
unset( $_SESSION["username"]); 
session_destroy(); 
if (isset( $_SESSION["username"])){
    echo  $_SESSION["username"];
} else {
    echo "Adeus";
}
?>