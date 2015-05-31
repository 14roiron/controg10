<?php
include("inc/header.php");
?>
<!--main-->
    <div class="container">
      <div class="row">
        <!--left-->
        <div class="col-md-3" id="leftCol">
          <ul class="nav nav-stacked well well-lg" id="sidebar">
            <li>
            </li>
          </ul>
        </div>
        <!--/left-->
        <!--right-->
        <div class="col-md-9">
          <div id="base" class="NOM">
            <div class="contenu">
              <div class="paragraphe">
                <h2 id="domaines">Différentes mesures pour différents domaines ?</h2>
                <p>Les indicateurs bibliométriques constituent une manière de mesurer l'impact de travaux scientifiques. Ils se basent sur un certain index de références
                particulier et choisi ; ils sont donc sujets aux critiques non seulement concernant les formules mathématiques utilisées, mais également dans leur
                conception.</p>
                <p>L'une des critiques, par exemple, est que dans certains domaines comme les sciences humaines, les indicateurs bibliométriques comme le Journal Impact Factor
                sont peu pertinents car le genre de production scientifique n'est, dans ce domaine, pas l'article, mais le livre. Le livre ne suit pas le même mode d'évaluation
                : sa rédaction est longue et les remarques qui y sont faites le sont via un genre de publication particulier, le book review. De plus, un livre, contrairement à
                un article de journal, n'est susceptible d'être cité qu'un certain temps après sa publication, et de manière bien moins importante. Il s'agit donc de trouver
                d'autres moyens, plus adaptés, de mesurer.</p>
                <p>Une réponse possible est de créer des index de publications spécifiques à certains types de productions. Par exemple, le BKCI, book citation index,
                développé par Thomson Reuters, se concentre sur les différents genres liés à la publication de livres. L'un des genres de productions qui pourrait indiquer
                l'impact d'un certain livre pourrait être le book review : il s'agit d'articles qui ont pour objet de commenter le contenu d'un livre.</p>
                <blockquote>Despite the fact that correlations between citations to a book and the number of corresponding book reviews differ from research area to research area
                and are overall weak or non-existent, this study confirms that books with book reviews do not remain uncited and accrue a remarkable mean number of citations. 
                <small class="pull-right">J. Gorraiz, C. Gumpenberger, P.J. Purnell, The power of book reviews: a simple and transparent enhancement approach for book citation
                indexes, Scientometrics, 98:841–852, 2014</small>
                <br /></blockquote><br/>
                <p>D'autres chercheurs évoquent le fait que Google Scholar est effectivement bien plus ouvert que d'autres bases de données, plus sélectives. Il recoupe en
                effet de nombreux revues ou articles dits en "open access", c'est-à-dire qu'ils sont disponibles librement sur le web, sans avoir à souscrire d'abonnement
                particulier. Cela permettrait notamment de diminer les écarts constatés au niveau des indicateurs utilisés lorsqu'on recoupe différents domaines de
                recherche.</p>
                <blockquote>Our findings that the majority of Google Scholar unique citations (70%) were fulltext scholarly sources is important evidence for the growth of OA
                publishing and selfarchiving, although it clearly varies by discipline.
				<br />				
                <small class="pull-right">K. Kousha, M. Thelwall, Sources of Google Scholar citations outside the Science Citation Index: A comparison between four science
                disciplines, Scientometrics, Vol. 74, No. 2, 273–294, 2008</small>
                <br /></blockquote>
                <p>Le lien citationnel n'est donc pas la seule donnée matérialisant un lien entre deux productions scientifiques, mais seulement l'un d'entre-eux.</p>
                <div class="paragraphe">
                  <h2 id="Altemtrics">altmetrics, les mesures alternatives aux indicateurs bibliométriques</h2>
                  <p>
                  <img src="/~groupe10/template/images/altmetric_logo.png" class="img-responsive" /> Parallèlement aux indicateurs bibliométriques, qui utilisent principalement
                  le lien citationnel, il est également utilisé d'autres indicateurs se basant sur des données très différentes. En 2010, on entend pour la première fois le
                  terme de "altmetrics", qui désigne des mesures dites "non traditionnelles", telles que décrites dans le manifeste de altmetrics.</p>
                  <blockquote>No one can read everything. We rely on filters to make sense of the scholarly literature, but the narrow, traditional filters are being swamped.
                  However, the growth of new, online scholarly tools allows us to make new filters; these altmetrics reflect the broad, rapid impact of scholarship in this
                  burgeoning ecosystem. We call for more tools and research based on altmetrics. (...) In growing numbers, scholars are moving their everyday work to the web.
                  Online reference managers Zotero and Mendeley each claim to store over 40 million articles (making them substantially larger than PubMed); as many as a third of
                  scholars are on Twitter, and a growing number tend scholarly blogs. 
                  <small class="pull-right">J. Priem, D. Taraborelli, P. Groth, C. Neylon, 
                  altmetrics : a manifesto, 2010</small>
                  <br /></blockquote>
                  <p>Ces mesures viendraient donc "alternativement" aux mesures utilisées pour calculer les indicateurs bibliométriques. Elles concernent les différents
                  articles qui sont disponibles, non pas dans les bases de données mais sur internet. Les éléments mesurés sont, pour une certaine production scientifique, par
                  exemple, des indicateurs liés à la popularité sur les réseaux sociaux : nombre de vues, nombre de téléchargements... Ainsi, altmetrics prendrait en compte
                  une quantité plus importante d'articles.</p>
                  <p>L'utilisation des indicateurs sus-cités est d'une philosophie fondamentalement différente de celle des indicateurs bibliométriques. En effet, il s'agit ici
                  de mesurer quelque chose d'autre, qui n'est pas forcément mis en exergue par des indicateurs bibliométriques basés sur le lien citationnel. Par exemple,
                  Michel Zitt, chercheur à l'<a target="_blank"href="http://institut.inra.fr/">Inra</a>, mentionne la popularité d'une entité sur le web :</p>
                  <blockquote>Il y a l’idée de mesurer de nouveaux objets, de nouvelles choses, par exemple la présence des différentes universités sur le net, c’est à
                  dire le degré d’activité qu’elles ont sur la toile, qui est donc une notion de communication en quelque sorte, une partie managériale, l’efficacité de
                  la communication de ces universités. 
                  <small class="pull-right">M. Zitt, 
                  <a target="_blank"href="http://institut.inra.fr/">Inra</a>, Entretien</small>
                  <br /></blockquote>
                  <p>Les créateurs de la startup altmetrics voient ces mesures comme complémentaires des mesures basées sur le lien citationnel. En particulier, ils ne
                  souffriraient pas des mêmes "défauts" que ces dernières, notamment leur inertie, et le fait qu'ils ne prennent pas en compte l'influence des travaux en dehors
                  du milieu académique. J. Priem, membre fondateur de altmetrics, mentionne en entretien :</p>
                  <blockquote>Any kind of citation mining, whether from the ISI, Web of Science or from Scopus, is gonna be limited by the fact that citation has certain weakness
                  associated to them. For instance, a citation will take a certain amount of time to show up: the word has to be published, someone has to read it, they have to
                  get their own republish... So often there is a delay, as much as several years, between one of our creative impact and when we can observe that impact in the
                  citation record. 
                  <small class="pull-right">J. Priem, 
                  <a target="_blank"href="http://altmetrics.org/">altmetrics</a>, Entretien</small>
                  <br /></blockquote>
                  <p>Ces mesures alternatives seraient donc plus actuelles que les mesures liées à la citation, car plus rapide et touchant un nombre plus important d'acteurs de
                  la recherche.</p>
                  <div class="paragraphe">
                    <h2 id="selectivitearticles">Sélectivité des articles : quantité et qualité</h2>
                    <p>Les mesures alternatives comme celles proposées par altmetrics prennent le parti d'utiliser le maximum de données possibles disponibles sur le web, et
                    d'utiliser des mesures telles que le nombre de vues ou de téléchargements qui, à priori, sont moins codifiées ou soumises à vérification que le lien
                    citationnel. Les bases de données, au contraire, utilisent des mesures basées sur le lien citationnel au sein de bases de données dont le contenu est
                    sélectionné au préalable.</p>
                    <blockquote>Il n’en reste pas moins que la citation reste un lien qui est validé, c’est-à-dire que c’est vraiment un lien intellectuel, ce n’est pas
                    seulement moi qui partage sur mon compte Twitter un article, tout simplement parce que j’ai trouvé le titre intéressant. Quand vous citez un article,
                    c’est parce que vous vous êtes réellement servi des travaux de recherche qui s’y trouvent dans vos propres recherches. Ce lien intellectuel créé entre
                    les chercheurs, il est validé de plus par le fait que la base de données – le Web of Science – est sélectionnée. 
                    <small class="pull-right">G. Rivalle, 
                    <a target="_blank"href="http://www.thomsonreuters.com/">Thomson Reuters</a>, Entretien</small>
                    <br /></blockquote>
                    <p>Les bases de données comme le 
                    <a target="_blank"href="http://webofscience.com">Web of Science</a> opèrent en effet une sélection fine des revues qui sont indexées dans la base de données,
                    c'est-à-dire qu'il y a une sélection de via comité éditorial, qui prend en compte divers critères comme la régularité de la fréquence de publication
                    des revues, ou encore la qualité du contenu, la renommée, afin de constituer l'index. Une fois ce dernier mis en place, il s'agit de calculer les différents
                    indicateurs bibliométriques. Ce qui apparaît dans les indicateurs bibliométriques dépend donc en grande partie de ce choix initial dans la constitution de
                    la base de données.</p>
                    <p>Les indicateurs bibliométriques s'opposent donc totalement à la vision d'altmetrics, qui tend plutôt à s'ouvrir vers des indicateurs plus larges, à
                    support moins restrictif. Mais même lorsqu'il s'agit de calculer des indicateurs bibliométriques, basés sur la citation, le problème de choix de la base de
                    données est un problème qui soulève de nombreuses interrogations et débats. C'est d'ailleurs l'un des principaux motifs de désaccord entre P. Jacso et
                    J.K. Vanclay, comme on avait pu le voir dans le choix de la base de données source des mesures.</p>
                    <blockquote>Because of its broader coverage and despite known deficiencies, Hirsch’s h-index based on 
                    <a target="_blank"href="https://scholar.google.fr/">Google Scholar</a> data may be more useful than the Journal Impact Factor, as a measure of journal quality, and in
                    providing a basis to rank journals. 
                    <small class="pull-right">J.K. Vanclay, Ranking forestry journals using the h-index, Journal of Informetrics, 2(4), 326–334, 2012</small>
                    <br /></blockquote>
                    <p>
                    Ainsi, l'utilisation de mesures autres que les mesures bibliométriques peut apporter des informations différentes. Les critiques principales contre l'utilisation de ces mesures alternatives portent sur le fait que ces mesures se basent sur des liens jugés moins fiables que le lien citationnel.
                    </p>
                    <p>
                    Néanmoins, on peut également envisager des situations dans lesquelles ces mesures peuvent se compléter plutôt que de s'opposer. En effet, il est par exemple nécessaire de constituer un index de publications, une base de données, afin de calculer les différents indicateurs bibliométriques. La sélection des articles se fait via un comité de rédaction. Comme l'évoque G. Rivalle, l'utilisation des mesures alternatives pourraient permettre de faciliter le travail de découverte en ce qui concerne les travaux inédits. Les mesures concernant le web pourraient par exemple permettre de découvrir plus rapidement les travaux "populaires" au sein de la communauté scientifique.
                    </p>
                    <blockquote>
                    Une chose qui pourrait être intéressante serait de prendre ces indicateurs comme des précurseurs de citations. C’est-à-dire qu’avant même la citation, il y a d’abord le partage sur les réseaux sociaux, le nombre de vues, le nombre de téléchargements. Peut-être que ces indicateurs alternatifs permettent d’anticiper la citation. 
                    <small class="pull-right">G. Rivalle, <a target="_blank"href="http://www.thomsonreuters.com" target="_blank">Thomson Reuters</a></small>
                    <br /></blockquote>
                    <p>
                    Nous avons donc exploré trois niveaux de controverse : d'une part, concernant l'utilisation des mesures bibliométriques suite à la création des index, puis concernant les formules des différents indicateurs bibliométriques. Enfin, la controverse porte donc à la fois sur l'utilisation d'une mesure plutôt qu'une autre, mais aussi sur la possibilité de combiner les différentes mesures entre-elles. 
                    </p>
                    <hr />
                  </div>
                </div>
              </div>
            </div>
            <!--/contenu-->
          </div>
          <!-- /base-->
        </div>
        <!-- right-->
      </div>
      <!--/row-->
    </div>
    <!--/container-->
    <?php
    include("inc/footer.php");
    ?>
    <script language="javascript">
$("#listeHeaderSuite").addClass("active");
parse();
</script>
  </body>
</html>
