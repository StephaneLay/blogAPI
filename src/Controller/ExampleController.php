<?php

namespace App\Controller;

use App\Core\BaseController;
use App\View\ExampleView;
use App\View\Part\Header;

class ExampleController extends BaseController
{
   protected function doGet(): \App\Core\BaseView
   {
      Header::$pageTitle = "Example page";
      return new ExampleView();
   }
}