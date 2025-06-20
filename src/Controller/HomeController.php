<?php

namespace App\Controller;

use App\Core\BaseController;
use App\Core\BaseView;
use App\View\GeneralHomeView;

class HomeController extends BaseController{
    public function doGet(): BaseView{
        return new GeneralHomeView();
    }
}