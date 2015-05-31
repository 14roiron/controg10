<?php


include("inc/header.php");

?>






<h1> Quelques graphiques de notre controverse </h1>
<div class="container">

	<div class="row">

		<div class="col-md-8 text-center">
			<br />
			<br />
			<hr />

			<object width="800" height="400"><param name="movie" value="http://www.timetoast.com/flash/TimelineViewer.swf?passedTimelines=1072438" />
			<param name="passedTimelines" value="1072438" /><param name="allowScriptAccess" value="always">
			<embed src="http://www.timetoast.com/flash/TimelineViewer.swf?passedTimelines=1072438" type="application/x-shockwave-flash" passedTimelines="1072438" width="800" height="400" allowScriptAccess="always" />
			</object>

		</div>

</div>
<hr />
<div class="row">
<a href="javascript:window.open('js/gexf-js-master/index.html#graph.gexf','nom_de_ma_zzzz','menubar=no, scrollbars=no');"><img src="template/images/corpus.png" style="image-responsive"/> <br />
Graphe des mots clés de notre corpus scientifique de 345 articles
</a>
</div>
<hr />
<div class="row">

<a href="javascript:window.open('js/gexf-js-master/index.html#presse.gexf','nom_de_ma_zzzz','menubar=no, scrollbars=no');"><img src="template/images/presse.png" style="image-responsive"/> <br/>
Graphe des mots clés de notre corpus de presse de 443 articles</a>
</div>

</div>



<?php

include("inc/footer.php");

?>

<script language="javascript">

$("#listeHeaderHistorique").addClass("active");
$("#autre").addClass("active");

</script>

	</body>

	</html>






