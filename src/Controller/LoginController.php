<?php

namespace App\Controller;

use App\Core\BaseController;
use App\Core\BaseView;
use App\Repository\UserRepository;
use App\View\ErrorView;
use App\View\GeneralHomeView;
use App\View\LoginView;

class LoginController extends BaseController
{
    public function doGet(): BaseView
    {

        if (!empty($_GET["email"])) {
            $userRepo = new UserRepository();
            $result = $userRepo->findByEmail($_GET["email"]);
            if ($result) {
                $_SESSION["user"] = $result;
                return new GeneralHomeView();
            } else {
                return new ErrorView("wrong credentials");
            }
        }
        return new LoginView();



    }
}