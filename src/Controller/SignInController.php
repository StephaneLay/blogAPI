<?php

namespace App\Controller;

use App\Core\BaseController;
use App\Core\BaseView;
use App\Entity\User;
use App\Repository\UserRepository;
use App\View\ErrorView;
use App\View\GeneralHomeView;
use App\View\SignInView;

class SignInController extends BaseController{
    public function doGet(): SignInView{
        return new SignInView();
    }

    public function doPost(): BaseView{
        if (!isset($_POST["name"]) || empty(trim($_POST["name"]))) {
            return new ErrorView("bad name input");
        }
        if (!isset($_POST["firstname"]) || empty(trim($_POST["firstname"]))) {
            return new ErrorView("bad firstname input");
        }
        if (!isset($_POST["email"]) || empty(trim($_POST["email"]))) {
            return new ErrorView("bad email input");
        }
        $userRepo = new UserRepository();
        $userRepo->persist(new User($_POST["name"],$_POST["firstname"],$_POST["email"]));
        return new GeneralHomeView();
    }
}