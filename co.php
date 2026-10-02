<?php

final class Coche {

    public function getColor()
    {
        echo "Rojo";
    }
}

class CocheDeLujo extends Coche {
    // Error Fatal: la clase no puede ser heredada.
}

?>