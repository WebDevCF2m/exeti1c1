<?php

if(isset($_GET['p'])){
    switch($_GET['p']){
        case "contact":
            include "../pages/contactlView.php";
            break;
    }
}else{
    include "../pages/accueilView.php";
}

