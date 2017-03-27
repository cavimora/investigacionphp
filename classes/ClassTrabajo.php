<?php


class Trabajo {
    function __construct() {
        echo '<h2>Se acaba de instanciar la clase Trabajo</h2>';
        echo '<br>';
    }

    public function Mostrar($mostrar){
    	echo '<h3>'.$mostrar.'</h3>';

    	echo '<br>';
    }
}

?>