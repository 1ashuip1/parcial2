<?php
require_once('librerias/conexionBD.php');

$sql = "select * from roles";
$result = $conn->query($sql);

require_once('librerias/cabe.php');

 ?>
<div class="container">
  <FONT FACE="Cursive" SIZE=8 COLOR="BLACK">Roles</FONT>
  <p>
      <a href="rol-edit.php" class="btn btn-success"><FONT FACE="Cursive" SIZE=4 COLOR="BLACK">Nuevo</FONT></a>
  </p>
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
        <FONT FACE="Cursive" SIZE=4 COLOR="BLACK">
      <table class="table table-striped">
        <tr>
          <th>Id</th>
          <th>Descripcion</th>
          <th></th>
          <th></th>
        </tr>
        <?php
        if($result->num_rows>0){
          $conta=0;
          while ($fila=$result->fetch_array()) {
            echo "<tr>";
            echo '<td>'.++$conta.'</td>';
            echo '<td>'.$fila['descripcion'].'</td>';
            echo '<td><a href="rol-edit.php?id=' . $fila['id']. '" class="btn btn-primary">Editar</a></td>';
            echo '<td><a href="rol-elimina.php?id=' . $fila['id']. '"onclick="return confirm(\'Esta Seguro\')" class="btn btn-danger">Eliminar</a></td>';
            echo "</tr>";
          }
        }
        else{
          '<p> No existen registros</p>'
;        }?>

      </table>
      </FONT>
    </div>
  </div>
</div>

<?php
require_once('librerias/pie.php');
?>
