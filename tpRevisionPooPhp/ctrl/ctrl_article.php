<?php
// connect bdd
include './utils/connectBdd.php';
// import view
include './view/view_show_all_articles.php';
// import model article
include './model/model_article.php';


$articles = new Article ();

$tableauArticle = $articles->showAllArticle($bdd);

echo'<ul>';
foreach($tableauArticle as $value){
    echo '<li>l\'article '.$value->nom_art.' est '.$value->content_art.'</li>';
}
echo'</ul>';


?>