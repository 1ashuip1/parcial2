<?php
require_once('librerias/conexionBD.php');
$id='';
$usuario='';
$correo='';
$clave='';
if (isset($_GET["id"])) {
  $sql="select * from usuarios where id=".$_GET['id'];
  $result=$conn->query($sql);
  $fila=$result->fetch_array();
  $id=$fila['id'];
  $usuario=$fila['usuario'];
  $correo=$fila['correo'];
  $clave=$fila['clave'];
}
require_once('librerias/cabe.php');
?>
  <FONT FACE="Cursive" SIZE=4 COLOR="BLACK">
  <div class="container">
    <h1><?php echo ($id>0)? 'Editar':'Nuevo'; ?> usuario</h1>
    <form action="usu-procesa.php" method="post">
      <div class="form-group">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
      </div>
    <div class="form-group">
      <label for="">Usuario</label>
      <input type="text" name="usuario" value="<?php echo $usuario; ?>" class="form-control"required >
    </div>
    <div class="form-group">
      <label for="">Correo electronico</label>
      <input type="email" name="correo" value="<?php echo $correo; ?>"class="form-control" required >
    </div>
    <div class="form-group">
      <label for=>Contraseña</label>
      <input type="password" name="clave" value="<?php echo $clave; ?>" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
  </div>
  </FONT>
  <?php
  require_once('librerias/pie.php');
  ?>
