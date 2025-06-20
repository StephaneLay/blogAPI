<?php

namespace App\Controller;

use App\Core\BaseController;
use App\View\SignInView;

class SignInController extends BaseController{
    public function doGet(): SignInView{
        return new SignInView();
    }
}