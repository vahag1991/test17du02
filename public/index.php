<?php

if (isset ($_GET['page'])){
    switch($_GET['page']){
        case 'livreDor':
            include ('../pages/livreDor.php');
            break;
        case 'contact':
            include ('../pages/contact.php');
            break;
        default:
        include ('../pages/acceuil.php');
        break;
    }
}else{
    include ('../page/acceuil.php')
}