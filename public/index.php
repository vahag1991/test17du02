<?php

if (isset ($_GET['page'])){
    switch($_GET['page']){
        case 'livreDor':
            include ('../pages/livreDor.php');
            break;
        case 'contact':
            include ('../pages/contact.php');
    }
}