<?php


namespace App\View;

use App\Core\BaseView;

class ExampleView extends BaseView {
    protected function content(): void {
        echo "I am an example, delete me";
    }
}