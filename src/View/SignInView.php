<?php

namespace App\View;

use App\Core\BaseView;

class SignInView extends BaseView{
    public function content(): void{
        ?>

        <form  method="post">
            <label for="name">Enter your name</label>
            <input type="text" name="name" id="name">

            <label for="firstname">Enter your firstname</label>
            <input type="text" name="firstname" id="firstname" >

            <label for="email">Enter your email</label>
            <input type="email" name="email" id="email" >

            <button>Sign In</button>
        </form>

        <?php
    }
}