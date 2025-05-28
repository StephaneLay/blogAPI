<?php

namespace App\Controller;

use App\Core\BaseController;
use App\View\ExampleView;

class ExampleController extends BaseController{
   protected function doGet(): \App\Core\BaseView {
    return new ExampleView();
   }
}