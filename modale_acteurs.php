<?php
require("lib/simple_html_dom.php");

$name=$_GET["c"];


$dom = file_get_html("template/acteurs/".$name.".html");


$titre = $dom->find("div[class=titre]");
$contenu = $dom->find("div[class=contenu]");
?>
<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal">&times;</button>
  <h1><?php echo $titre[0]; ?></h1>
</div>
<div class="modal-body">
  <?php echo $contenu[0];?>
</div>
