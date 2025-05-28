<?php

namespace App\View\Parts;

class Header {

    /**
     * C'est là qu'on pourra mettre l'ouverture des balises HTML
     * du body et le header
     */
    public function render() {
        echo "<header>mon header</header>";
    }
}