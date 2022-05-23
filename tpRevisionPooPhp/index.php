<?php
session_start();
    //Analyse de l'URL avec parse_url() et retourne ses composants
    $url = parse_url($_SERVER['REQUEST_URI']);
    //test soit l'url a une route sinon on renvoi à la racine
    $path = isset($url['path']) ? $url['path'] : '/';
    /*--------------------------ROUTER -----------------------------*/

    //test de la valeur $path dans l'URL et import de la ressource
    switch($path){
        //route / acceuil
        case $path === "/tpRevisionPooPhp/article" : 
            include './ctrl/ctrl_article.php';
        break ;

    }

?>
