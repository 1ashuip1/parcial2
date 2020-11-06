<?php
require_once('librerias/conexionBD.php');
$sql = "select * from roles";
$result =  $conn->query($sql);
$roles = array();
while ($fila =  $result->fetch_array()) {
    $roles[] = $fila;
}
$sql = "select * from usuarios";
$result =  $conn->query($sql);
$usuarios = array();
while ($fila =  $result->fetch_array()) {
    $usuarios[] = $fila;
}
require_once('librerias/cabe.php');
?>
<FONT FACE="Cursive" SIZE=4 COLOR="BLACK">
<div class="container">
  <h1>Nuevo permiso</h1>
  <form action="per-procesa.php" method="post">

  <div class="form-group">
    <label for="">Usuario</label>
    <select class="form-control" name="id_usuario">
      <option value="">--Seleccionar--</option>
      <?php foreach ($usuarios as $item): ?>
      <option value="<?= $item['id'] ?>"><?= $item['usuario'] ?></option>
      <?php endforeach ?>
    </select>
  </div>
  <div class="form-group">
    <label for="">Rol</label>
    <select class="form-control" name="id_rol">
      <option value="">--Seleccionar--</option>
      <?php foreach ($roles as $item): ?>
      <option value="<?= $item['id'] ?>"><?= $item['descripcion'] ?></option>
      <?php endforeach ?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>
</FONT>
<?php
require_once('librerias/pie.php');
?>
