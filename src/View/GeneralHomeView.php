<?php

namespace App\View;

use App\Core\BaseView;

class GeneralHomeView extends BaseView{
    public function content(): void{
        ?>

        <h1>Le plus beau de tous les blogs php</h1>
        <p>Ceci est un magnifique blog php pour s'entrainer</p>
        <a href="/sign-in">Sign in</a>

        <?php
        var_dump($_SESSION["user"]);
    }
}