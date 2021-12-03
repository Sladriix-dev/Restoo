<?php
/************************ Version ou vous définissez vos routes ***************************/
use App\Controller\AdminController;

if (isset($_GET["page"]) && !empty($_GET["page"])) {
    switch ($_GET["page"]) {
        case 'singleArticle':
            if (isset($_GET["id"]) && is_numeric($_GET["id"])) {
                (new ArticleController)->single($_GET["id"]);
            } else {
                (new ArticleController)->index();
            }
            break;
        case 'indexCategorie':
                (new CategorieController)->index();
            break;
        
        default:
            (new ArticleController)->index();
            break;
    }
} else {
    (new ArticleController)->index();
}

?>