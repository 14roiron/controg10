<?php
include("inc/header.php");
?>

<!--main-->
<div class="container">
	<div class="row">
      <!--left-->
      <!--
      <div class="col-md-3" id="leftCol">
        <ul class="nav nav-stacked well well-lg" id="sidebar">
         
          <li><a href="#sec4">Section 4</a></li>
        </ul>
      </div>-->
      <!--/left-->
      
      <!--right-->
      <div class="col-md-12">
        <div class="paragraphe">
		<h2 id="sec0">Controverses</h2>

        <p>
          Ce site web a été réalisé par des élèves de première année de l’École des Mines dans le cadre du cours de Description des controverses. Ces sites sont le résultat de travail d’étudiants et sont mis en ligne pour des raisons pédagogiques et didactiques. Une description plus détaillée de ce cours sur disponible sur le site du <a href="http://controverses.ensmp.fr/presentation/"> cours de controverse de MINES ParisTech. </a>
        
        </div>
		
        <div class="paragraphe">
		<h2 id="sec2">Introduction</h2>
        
        <p>
        Le monde de la recherche comporte de très nombreux acteurs. Le principal moyen de communication entre ces différents acteurs consiste à partager les différentes avancées par le biais de différentes productions scientifiques : conférences, articles, livres, etc. Au delà du simple partage d'informations, des liens complexes se tissent entre les différents acteurs de la recherche.
        </p>
        
        <p>
        Par exemple, un problème récurrent à propos de la recherche consiste en les modalités de son évaluation. Comment repérer parmi les milliers de publications disponibles celles qui apportent des résultats hors du commun, comment au contraire tenter de se faire lire, telles sont les problématiques du point de vue du chercheur. Comment attribuer les crédits de recherche, et à qui, comment évaluer la performance et l’impact d’un chercheur ou d’un centre de recherche, c’est la problématique du point de vue des institutions et des ministères. Comment comparer une université à une autre, un pays à un autre en fonction de la puissance de sa recherche, c’est l’objectif des classements internationaux. Les débats se multiplient à propos de la condition du chercheur, ou de la publication de  classements aux enjeux de plus en plus importants, dans la sphère publique comme parmi la communauté scientifique. L’évaluation de la recherche se fait bien souvent par le biais de la bibliométrie. Bibliométrie, scientométrie sont des domaines à part entière de la recherche scientifique, visant à déterminer les indicateurs pertinents à tel ou tel usage, et selon telles ou telles situations. La recherche d’un indicateur bibliométrique à la fois simple à déterminer et donnant des résultats pertinents est très active ; existe-t-il, ou doit-on en combiner plusieurs avec leurs défauts et avantages, et lesquels ? Cette question est centrale dans la controverse et les désaccords se multiplient selon les intérêts de chacun des acteurs.
        </p>
        
        
                <p>
          Notre travail s'est concentré sur l'étude du sujet suivant : <b>"Les mesures des productions scientifiques"</b> à partir de différentes sources d'informations :
		  <ul >
				<li>Une étude de la presse francophone tant au point de vue qualitatif que quantitatif</li>
				<li>Une étude de la littérature scientifique</li>
				<li>Divers entretiens réalisés avec les acteurs de la controverse</li>
		  </ul>
	<p>
	Nous avons dans un premier temps constitué deux corpus d'articles d'origines différentes : l'un d'eux comporte des articles de presse, l'autre des publications scientifiques.
	</p>
		  
	<p>
	Notre étude de notre corpus d'articles de presse nous a permis de mieux visualiser les différentes arènes de la controverse. Ces arènes sont matérialisées par l'utilisation de certains mots clés. Nous avons pu, à l'aide de l'outil Gargantext, créer un graphe qui matérialise ces liens :
	</p>
	
          <a href="javascript:window.open('js/gexf-js-master/index.html#presse','Corpus de la press','menubar=no, scrollbars=no');">
          <img src="template/images/presse.png" style="image-responsive" />
          <br />Graphe des mots clés de notre corpus de presse de 250 articles. Cliquer sur l'image</a>
	
	<p>
	On remarque que le nombre de mots clés est très important pour notre corpus d'articles de presse. De plus, ces mots clés sont pour la plupart génériques et traitent surtout des questions d'évaluation de la recherche : nous remarquons donc que la controverse sur le thème précis de la mesure n'est pas centrée dans la presse.
	</p>
        
        <p>
        Nous avons réalisé le même travail pour notre corpus de publications scientifiques. Les liens sont matérialisés dans le graphe ci-dessous :
        </p>
        
          <a href="javascript:window.open('js/gexf-js-master/index.html#corpus','Corpus de Scopus','menubar=no, scrollbars=no');">
          <img src="template/images/corpus.png" style="image-responsive" />
          <br />Graphe des mots clés de notre corpus scientifique de 449 articles. Cliquer sur l'image</a>
          
        <p>
        On peut alors voir apparaître des mots clés plus spécifiques comme par exemple "science citation index". Cela nous a permis de localiser plus précisément les arènes de la controverse et ainsi de dégager plusieurs angles de vue concernant la controverse des mesures des productions scientifiques.
        </p>
        
        <p>
        On abordera donc la controverse autour des mesures des productions scientifiques sous trois angles différents : d'une part, nous verrons comment et pourquoi l'idée et le besoin de mesure sont apparus dès le début des années 1960. D'autre part, on peut également faire état d'une controverse très active quant aux indicateurs bibliométriques, et aux formules qui les régissent. Mais un autre angle de vue permet également de prendre du recul sur la notion de mesure bibliométrique et de considérer des mesures alternatives, par l'intermédiaire du développement des technologies de l'information et des communications.
        </p>
        
        <hr> </div>
        <hr> </div>
        
        </div>

        </div><!--/right-->
  	</div><!--/row-->
</div><!--/container-->

<?php
include("inc/footer.php");
?>
<script language="javascript">
//$("#headerTitrebis").addClass("active");
</script>
	</body>
</html>
