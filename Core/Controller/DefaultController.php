<?php
namespace Core\Controller;

class DefaultController {

    /**
     * Génère l'affichage des pages
     *
     * @param string $pathView
     * @param array $params
     * @return void
     */
    public function render (string $pathView, array $params = [])
    {
        ob_start();
        extract($params);
        require ROOT."/pages/$pathView.php";
        $content = ob_get_clean();
        require ROOT."/pages/base.php";
    }

    public function redirectToRoute($path)
    {
        header("Location: $path");
    }

}