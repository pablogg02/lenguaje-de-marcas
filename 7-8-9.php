    <?php
        // Apartado 7.
        
        function calcularArea(float $radio):float
        {
            // Calculo el área utilizando la constante que utilicé en el Apartado 3.
            $area = PI * ($radio * $radio);
            return $area;
        };

        echo 'El área de un círculo de radio 2 es: ' .calcularArea(2). '<br>';
        echo 'El área de un círculo de radio 4 es: ' .calcularArea(4). '<br>';
        echo 'El área de un círculo de radio 6 es: ' .calcularArea(6). '<br>';
    ?>

    <?php
        // Apartado 8.
        
        // En esta función calculo el precio con el descuento.
        function calcularPrezoDesconto(float $prezo, int $desconto = 10):float
        {
            return $prezo * (1 - ($desconto/100));
        };

        // Declaro el precio como aleatorio.
        $prezo = rand(1,100);

        // Almaceno el valor del precio con descuento en una variable.
        $prezoDesconto = calcularPrezoDesconto($prezo);

        // Reutilizo la función del Apartado 7 para sumarle el IVA.
        $novoPrezo = calcularPrezoFinal($prezoDesconto);

        // Saco los valores por pantalla
        echo '<p>O prezo inicial é de: ' .$prezo.' 
        , o prezo con desconto é de: ' .$prezoDesconto. ' 
        e o prezo final é de '.$novoPrezo.'</p>';
    ?>

    <?php
        // Apartado 9.

        // Creo la función para que le lleguen el alto y el ancho y devuelva un String
        function rectangulo(int $alto, int $ancho):string
        {
            // Calculo el area
            $areaR = $ancho * $alto;

            // Calculo el perímetro
            $perimetroR = 2 * ($alto + $ancho);

            // Concateno los valores a un String
            return 'Para un rectángulo de alto: ' .$alto.
            ' y de ancho: ' .$ancho.
            '. El área es de: ' .$areaR. ', 
            y el perímetro es de: ' .$perimetroR;
        };

        echo rectangulo(2,3);
    ?>
