<?php

?>
<center>
<table border=5px;>
    <tr> 
        
    <h4>Clientes ingresados</h4>
    
        <th>N°</th>
        <th>Fecha</th>
        <th>Diagnostico</th>
        <th>Solución</th>
        <th>Servicios</th>
        <th>Costos</th>
        <th>Total</th>
    </tr>
    <?php

        foreach ($mostrarDatos->result() as $row ){
            
        echo "<tr>";
            echo "<td>".$row->Id_egreso."</td>";
            echo "<td>".$row->Fecha."</td>";
            echo "<td>".$row->Diagnostico."</td>";
            echo "<td>".$row->Solucion."</td>";
            echo "<td>".$row->Servicio."</td>";
            echo "<td>".$row->Costos."</td>";
            echo "<td>".$row->Total."</td>";
            echo "<td><a href=".base_url()."index.php/ControladordatosEgreso/eliminarCliente/".$row->Id_egreso."><button>ELIMINAR</button></td>"; 
            echo "<td><a href=".base_url()."index.php/ControladordatosEgreso/editarCliente/".$row->Id_egreso."><button>EDITAR</button></td>";
        echo "</tr>";
        
        }
     ?>
</table>
</center>    



