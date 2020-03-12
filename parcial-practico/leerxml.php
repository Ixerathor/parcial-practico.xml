<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital San Juan de Dios - Cartago</title>
    <link rel="stylesheet" type="text/css" href="templates/css/estilos.css">
</head>
<body>

<article>
    <div class="container">
    <section>
    		<h1>  CLIENTES </h1>
    		<table align="center">
            	<th>ID</th>
    			<th>Nombre completo</th>
    			<th>Direccion</th>
    			<th>Email</th>
                <th>Saldo Actual</th>


    			<?php

                    if (file_exists('clientes.xml')) {
                        $xml= simplexml_load_file('clientes.xml');
                    } else {
                        exit('Error abriendo clientes.xml');
                    }
                 
                    foreach ($xml->CLIENTE as $cliente) {

                        echo "<tr>";

                        echo "<td>";
                        echo $cliente->ID;
                        echo "</td>";
                        echo "<td>";
                        echo $cliente->NOMBRE;
                        echo "</td>";
                        echo "<td>";
                        echo $cliente->DIRECCION;
                        echo "</td>";
                        echo "<td>";
                        echo $cliente->EMAIL;
                        echo "</td>";
                        echo "<td>";
                        echo $cliente->SALDOACTUAL;
                        echo "</td>";

                        echo "</tr>";
                    }

                ?>

    		</table>

   	</section>
</div>
    </article>
    
</body>
</html>