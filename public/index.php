<?php

if(isset($_GET['p'])){
    switch($_GET['p']){
        case "contact":
            include "../pages/contactlView.php";
            break;
        case "book":
            include "../pages/livreorView.php";
            break;
        case "img":
            include "../pages/imagesView.php";
            break;
    }
}else{
    include "../pages/accueilView.php";
}

