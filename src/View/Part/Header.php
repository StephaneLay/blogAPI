<?php

namespace App\View\Part;
/**
 * Classe utilisée par le BaseView afin d'afficher le header de la page et l'ouverture
 * des balises HTML, les head etc.
 */
class Header
{
    /**
     * Variable static permettant de changer le titre des pages depuis les contrôleurs
     * (ou ailleurs) en utilisant Header::$pageTitle = "mon titre"
     */
    public static string $pageTitle = "";

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
            <title>Mon Site - <?=  self::$pageTitle ?></title>
        </head>

        <body>
            <header><a href="/login">Log in</a></header>
            <?php
    }
}