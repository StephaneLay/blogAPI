<?php

namespace App\View;

use App\Core\BaseView;

class LoginView extends BaseView
{
    public function content(): void
    {
        ?>

        <form >
            <label for="email">Enter your email</label>
            <input type="email" name="email" id="email">

            <label for="password">Enter your password</label>
            <input type="text" name="password" id="password">

            <button>Log in</button>
        </form>

        <?php
    }
}