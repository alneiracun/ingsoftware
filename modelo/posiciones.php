<?php
    //Muestra posiciones de los competidores - Miguel Angel Pérez/Andrés Hernández
    
    //Conexión a la base de datos
    $conn = Mysqli_connect("localhost","root","","trabajofinal") or die (Mysqli_error());

    //Consulta prueba de la base de datos trabajofinal
    $consulta="select * from tiempos_competidores";

    //Prueba de insertar datos
    $consulta="insert into tiempos_competidores values('100','Roberto Martínez','00:04:32')";
    Mysqli_query($conn,$consulta) or die ("Error en la inserción de datos.");
    $resultado = Mysqli_query($conn, $consulta) or die ("Error en la conexión.");

    //Mostrar resultados de la tabla tiempos_competidores
    if ($resultado->num_rows > 0) {
        
        while($fila = $resultado->fetch_assoc()) {
            echo "<tr>
                  <td> - ID de Competidor:     " . $fila['idcomp']."</td>" 
                 "<td> - Nombre de Competidor: " . $fila['nombrecomp']"</td>"
                 "<td> - Tiempo de Competidor: " . $fila['tiempocomp']"</td>"
                 "<td> - Posición en Carrera:  " . $fila['poscomp']"</td>"."<br>";
        }

    } else {
        echo "Sin resultados para mostrar.";
    }

?>
