<?php

namespace App;

use App\Controller\ExampleController;


/**
 * Classe qui contient toutes les routes disponibles sur notre application et
 * quel contrôleur est lié à chaque page
 */
class Routes
{
    /**
     * Méthode qui sera appelée dans le index.php pour récupérer la liste des routes à
     * donner à manger au App\Core\Router
     * @return \App\Core\BaseController[]
     */
    public static function defineRoutes()
    {
        return [
            "/example" => new ExampleController(),
            
        ];
    }
}