
<?php
session_start();
if(!isset($_SESSION['login']) || $_SESSION['login'] != "OK"){
  header('location: index.php');
}
require_once('librerias/cabe.php')
 ?>
<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <FONT FACE="Cursive" SIZE=8 COLOR="BLACK">Reynaldo Eduardo Quispe Alvarado</FONT>
      <FONT FACE="Cursive" SIZE=8 COLOR="BLACK">Tecnologias Emergentes I</FONT>
      <FONT FACE="Cursive" SIZE=8 COLOR="BLACK">Ingenieria de Sistemas</FONT>
      <FONT FACE="Cursive" SIZE=8 COLOR="BLACK">CI: 12572515</FONT>
      <FONT FACE="Cursive" SIZE=8 COLOR="BLACK">RU: 200007183</FONT>
      <FONT FACE="Cursive" SIZE=8 COLOR="BLACK">CEL: 77582811</FONT>
      <FONT FACE="Cursive" SIZE=8 COLOR="BLACK">6°C</FONT>

    </div>
  </div>
</div>
<?php
require_once('librerias/pie.php')

?>
