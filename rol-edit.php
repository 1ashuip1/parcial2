<?php
require_once('librerias/conexionBD.php');
$id='';
$descripcion='';
if (isset($_GET["id"])) {
  $sql="select * from roles where id=".$_GET['id'];
  $result=$conn->query($sql);
  $fila=$result->fetch_array();
  $id=$fila['id'];
  $descripcion=$fila['descripcion'];
}
require_once('librerias/cabe.php');
?>
  <FONT FACE="Cursive" SIZE=4 COLOR="BLACK">
  <div class="container">
    <h1><?php echo ($id>0)? 'Editar':'Nuevo'; ?> rol</h1>
    <form action="rol-procesa.php" method="post">
      <div class="form-group">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
      </div>
    <div class="form-group">
      <input type="text" name="descripcion" value="<?php echo $descripcion; ?>" class="form-control"required >
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
  </div>
  </FONT>
  <?php
  require_once('librerias/pie.php');
  ?>
