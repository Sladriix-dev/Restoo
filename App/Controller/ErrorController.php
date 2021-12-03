<?php
namespace App\Controller;

use Core\Controller\DefaultController;

class ErrorController extends DefaultController {

    /**
     * Affiche mes erreurs PDO
     *
     * @param string $message
     * @return void
     */
    public function PdoError (string $message)
    {
        $this->render("Error/PdoError", [
            "message" => $message
        ]);
    }
}