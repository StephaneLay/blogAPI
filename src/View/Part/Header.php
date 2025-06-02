<?php

namespace App\View\Part;

class Header
{

    /**
     * C'est là qu'on pourra mettre l'ouverture des balises HTML
     * du body et le header
     */
    public function render()
    {
        ?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Mon Site</title>
        </head>

        <body>
            <header>Mon header</header>
            <?php
    }
}