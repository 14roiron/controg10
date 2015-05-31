<?php
require("lib/simple_html_dom.php");
include("inc/header.php");

$listeHtml="";
if($dossier = opendir('./template/acteurs/'))
{
	while(false !== ($fichier = readdir($dossier)))
	{
		if($fichier != '.' && $fichier != '..' && $fichier != 'index.php')
		{
			$contents = file_get_contents('template/acteurs/'.$fichier);
			$listeHtml = $listeHtml . $contents;
			
		}
	}
}
$dom = str_get_html($listeHtml);
?>



<!--main-->
<div class="container">
	<div class="row">
      <!--left-->
      <div class="col-md-3" id="leftCol">
        <ul class="nav nav-stacked well well-lg" id="sidebar">
		<?php 
		foreach($dom->find("div[class=acteur]") as $acteur)
		 {
			//echo $acteur->id;
			//echo $acteur->children(0)->innertext;
			echo ' <li><a href="#'.$acteur->id.'">'.$acteur->children(0)->innertext.'</a></li>';
		}
		?>
        </ul>
      </div><!--/left-->
      
      <!--right-->
      <div class="col-md-9">
	  		<?php 
		foreach($dom->find("div[class=acteur]") as $acteur)
		 {
			 
			echo '<div class="paragraphe">';
			echo ' <h2 id="'.$acteur->id.'">'.$acteur->children(0)->innertext.'</h2>';
			echo "<hr>";
			echo "<p>";
			echo $acteur->children(1)->innertext;
			echo "</p>";
			echo '</div>';
			
		}
		?>
        
        </div><!--/right-->
  	</div><!--/row-->
</div><!--/container-->

<?php
include("inc/footer.php");
?>
<script language="javascript">
$("#listeHeaderActeurs").addClass("active");
$("#autre").addClass("active");
</script>
	</body>
</html>
