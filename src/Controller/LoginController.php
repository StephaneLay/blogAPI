<?php

namespace App\Controller;

use App\Core\BaseController;
use App\View\LoginView;

class LoginController extends BaseController{
    public function doGet(): LoginView{
        return new LoginView();
    }
}