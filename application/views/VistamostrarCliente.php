<?php

?>
<center>
<table border=5px;>
    <tr> 
        
    <h4>Clientes ingresados</h4>
    
        <th>N°</th>
        <th>Rut</th>
        <th>Nombre Completo</th>
        <th>Fecha</th>
        <th>Teléfono</th>
        <th>Dirección</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>S.O</th>
        <th>Accesorios</th>
        <th>Componentes</th>
        <th>Problema Detallado</th>
    </tr>
   
    
    <?php

        foreach ($mostrarDatos->result() as $row ){
            
        echo "<tr>";
            echo "<td>".$row->Id_ingreso."</td>";
            echo "<td>".$row->rut."</td>";
            echo "<td>".$row->Nombre_C."</td>";
            echo "<td>".$row->Fecha."</td>";
            echo "<td>".$row->Telefono."</td>";
            echo "<td>".$row->Direccion."</td>";
            echo "<td>".$row->Marca."</td>";
            echo "<td>".$row->Modelo."</td>";
            echo "<td>".$row->S_O."</td>";
            echo "<td>".$row->Accesorios."</td>";
            echo "<td>".$row->Componentes."</td>";
            echo "<td>".$row->Problema."</td>";
            echo "<td><a href=".base_url()."index.php/ControladordatosCliente/eliminarCliente/".$row->Id_ingreso."><button>ELIMINAR</button></td>"; 
            echo "<td><a href=".base_url()."index.php/ControladordatosCliente/editarCliente/".$row->Id_ingreso."><button>EDITAR</button></td>";
        echo "</tr>";
        
        }
     ?>
</table>
</center>    

