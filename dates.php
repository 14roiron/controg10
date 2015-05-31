<?php


include("inc/header.php");

?>
    
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <br />
		  <h1>Quelques graphiques de notre controverse</h1>
          <br />
          <hr />
          <object width="800" height="400">
            <param name="movie" value="http://www.timetoast.com/flash/TimelineViewer.swf?passedTimelines=1072438" />
            <param name="passedTimelines" value="1072438" />
            <param name="allowScriptAccess" value="always" />
            <embed src="http://www.timetoast.com/flash/TimelineViewer.swf?passedTimelines=1072438" type="application/x-shockwave-flash" passedtimelines="1072438" width="800"
            height="400" allowscriptaccess="always" />
          </object>
          <hr />
          <a href="javascript:window.open('js/gexf-js-master/index.html#graph.gexf','nom_de_ma_zzzz','menubar=no,%20scrollbars=no');">
          <img src="template/images/corpus.png" style="image-responsive" />
          <br />Graphe des mots clés de notre corpus scientifique de 345 articles</a>
          <hr />
          <a href="javascript:window.open('js/gexf-js-master/index.html#presse.gexf','nom_de_ma_zzzz','menubar=no,%20scrollbars=no');">
          <img src="template/images/presse.png" style="image-responsive" />
          <br />Graphe des mots clés de notre corpus de presse de 443 articles</a>
        </div>
      </div>
    </div><?php

        include("inc/footer.php");

        ?>
    <script language="javascript">

$("#listeHeaderHistorique").addClass("active");
$("#autre").addClass("active");

</script>
  </body>
</html>
