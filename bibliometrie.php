<?php
include("inc/header.php");
?>

<!--main-->
<div class="container">
	<div class="row">
      <!--left-->
      <div class="col-md-3" id="leftCol">
        <ul class="nav nav-stacked well well-lg" id="sidebar">
         
          <li><a href="#sec4">Section 4</a></li>
        </ul>
      </div><!--/left-->
      <!--right-->
      <div class="col-md-9">
        
<div id="base" class="NOM">

<div class="contenu">  

<div class="paragraphe">
<h2 id="bddames">Les bases de données et la mesure bibliométrique</h2>
<p>
Le processus de mesure consiste à obtenir une nouvelle grandeur signifiante à partir de données existantes. Lorsque l'on a affaire à des productions bibliographiques, on parle de bibliométrie. Les grandeurs obtenues sont appelés indicateurs bibliométriques.
</p>

<blockquote>
The papers are much more likely to serve as props for a staged, mock-up scenario based on slipshod research in an experiment, to illustrate the deficiencies in the processes and in the assessment of scholarly publishing productivity and impact in order to present the idealized solution of Vanclay: using the h-index, portrayed as the Prince, mounted on the shoulder of the White Horse, Google Scholar.
	<small class="pull-right">P. Jacso, Grim tales about the impact factor and the h-index in the Web of Science and the Journal Citation Reports databases: reflections on Vanclay’s criticism, Scientometrics (2012) 92:325–354</small><br>
</blockquote>



<p>
P. Jacso fait ainsi réponse à une série d'articles publiés par J.K. Vanclay entre 2008 et 2012. Ces articles formulent des objections par rapport au classement de revues, ou "journal ranking", via certains indicateurs bibliométriques, notamment le Journal Impact Factor. Qu'est-ce que les indicateurs bibliométriques, quel est leur origine et que mesurent-ils ?
</p>

 
 
<p>
Le principe des indicateurs bibliométriques est de fournir des informations vis-à-vis d'une entité, que ce soit un chercheur, une revue, un article, c'est-à-dire un acteur tout comme une production scientifique au sens large, de manière quantifiée. Cette quantification s'appuie sur diverses quantités mesurables existantes, et en créent une nouvelle en réalisant des opérations mathématiques.
</p>

<p>
Par exemple, on peut établir certains liens entre les différentes publications scientifiques en regardant les liens de citations. Le Journal Impact Factor est un indicateur bibliométrique qui a pour but d'évaluer les revues et se sert de ces informations : en pondérant le nombre total de fois que les articles d'une revue ont été cités par d'autres personnes par le nombre d'articles effectivement publiés dans cette revue, on peut espérer créer une nouvelle quantité qui donnera une indication sur la revue.
</p>

<p>
De même, on peut établir des liens entre deux auteurs de publications par les citations croisées entre leurs articles respectifs. Ces liens de citations entre articles constituent un lien entre certains groupes d'auteurs et d'autres ; le h-index, qui est un autre indicateur bibliométrique, tente de créer une autre quantité à partir des quantités existantes pour mesurer l'auteur ou le groupe d'auteurs.
</p>
</div>
<div class="paragraphe">
<h2 id="BasesDeDonnees">Des bases de données à la mesure</h2>

<p>
Les indicateurs sus-cités comme le Journal Impact Factor ou le h-index se basent sur les liens d'articles entre-eux. Leur calcul nécessite donc d'abord de choisir une quantité d'articles sur laquelle travailler, c'est-à-dire de constituer une base de données.
</p>

<p>
Historiquement, les bases de données (ou encore index), comme le Science Citation Index, actuellement géré par Thomson Reuters, étaient constituées dans le but de faciliter la découverte de travaux scientifiques. Ils devaient permettre aux utilisateurs de naviguer de manière plus facile entre les publications scientifiques. 
</p>

	<blockquote>
	La "découverte", c’est le but premier du <a href="http://webofscience.com">Web Of Science</a>. Le but premier n’a jamais été la bibliométrie, mais la découverte: on fournit une plate-forme, qui dans laquelle se trouve la Core Collection, donc la collection cœur des revues, ouvrages et conférences sélectionnés, qui est principalement utilisée pour la découverte bibliographique. 
	<small class="pull-right">G.Rivalle, <a href="http://thomsonreuters.com/">Thomson Reuters</a>, Entretien</small><br>
  </blockquote> 
 <br />

<p>
Depuis, une autre utilisation des bases de données a vu le jour. Plus que permettre la découverte, elles sont de plus en plus utilisées à des fins d'évaluation. Cette évaluation consiste à établir des statistiques vis-à-vis des entités évaluées afin de les comparer entre-elles, ou de les noter de manière absolue à l'aide d'une échelle de notations. Ces statistiques peuvent s'établir via l'analyse de données bibliométriques comme évoquées précédemment.
</p>

<p>
Le fait d'avoir besoin de mesurer quelque chose est lui-même controversé ; mais même à l'intérieur de la mesure, la controverse s'échelonne sur plusieurs aspects.
</p>
</div>
<div class="paragraphe">
<h2 id="Mesurer">Que mesurer, à partir de quoi ?</h2>

<p>
Lorsque l'on a à disposition une certaine quantité d'articles, d'auteurs et d'origines différentes, on doit baser les mesures sur des quantités aisément mesurables, avec un certain degré de certitude. Parmi ces liens entre les différents articles, on trouve la citation. L'utilisation de la citation pour les mesures repose sur le principe suivant : les chercheurs, lorsqu'ils publient, fournissent une bibliographie qui indique les ouvrages sur lesquels ils se basent pour leur projet de recherche, les résultats qu'ils utilisent, ou encore les références auxquelles le lecteur intéressé peut se référer afin de poursuivre son étude. Le lien citationnel entre deux articles matérialise donc un lien entre les travaux de recherche. Un article sera décrit comme "de référence" si beaucoup d'autres articles le citent : cela signifie que les résultats qui y sont présentés sont d'intérêt à priori.
</p>

	<blockquote>
	Il se trouve que la citation reste un lien qui est validé, c’est-à-dire que c’est vraiment un lien intellectuel, ce n’est pas seulement le partage sur un compte Twitter d'un article, tout simplement parce que j’ai trouvé le titre intéressant. Quand vous citez un article, c’est parce que vous vous êtes réellement servi des travaux de  recherche qui s’y trouvent dans vos propres recherches. Ce lien intellectuel créé entre les chercheurs est validé de plus par le fait que la base de données est sélectionnée. 
	<small class="pull-right">G.Rivalle, <a href="http://thomsonreuters.com/">Thomson Reuters</a>, Entretien</small><br>
  </blockquote> 
 <br />

<p>
Le choix de la base de données est donc aussi sujet à controverse. En effet, <a href="http://thomsonreuters.com/">Thomson Reuters</a>, dans ses bases de données, adopte un modèle de sélectivité très fine des articles qui apparaîtront dans la base, via une sélection des revues qui y seront indexées. Cette sélection se fait via un comité de lecture, qui décidera si la revue en question sera ou non présente dans la base de données, via des critères tels que la ponctualité des parutions, la qualité des articles présentés.
</p>

<p>
Cette approche est sujette à désaccords, notamment lorsque des enjeux de financement de la recherche sont concernés. Par exemple, Journal Impact Factor ou J.K. Vanclay, en 2012, critique le Journal Impact Factor, qui est un indicateur calculé par <a href="http://thomsonreuters.com/">Thomson Reuters</a> dans sa base de données.
</p>

	<blockquote>
	The Thomson Reuters impact factor (TRIF) suffers so many weaknesses, that a major overhaul is warranted, and journal editors and other users should cease using the TRIF until Thomson Reuters has addressed these weaknesses.
    <small class="pull-right">J.K. Vanclay, Impact factor: outdated artefact or stepping-stone to journal certification?, Scientometrics (2012) 92:211–238</small><br>
	</blockquote> 
 <br />
	
<p>
En 2012, à l'occasion de débats concernant l'évaluation de la recherche pour l'attribution de financements, l'Excellence in Research for Australia, il publie également des articles postulant que l'utilisation de bases de données plus conséquentes et moins sélectives telles que <a href="https://scholar.google.fr/"> Google Scholar</a> donneraient des résultats plus pertinents. 
</p>

	<blockquote>
	Because of its broader coverage and despite known deficiencies, Hirsch’s h-index based on <a href="https://scholar.google.fr/">Google Scholar</a> data may be more useful than the Journal Impact Factor, as a measure of journal quality, and in providing a basis to rank journals.
    <small class="pull-right">J.K. Vanclay, Ranking forestry journals using the h-index, Journal of Informetrics (2012), 2(4), 326–334</small><br>
	</blockquote> 
 <br />

<p>
Cela provoque des réactions virulentes :
</p>

    <blockquote>
    The papers are much more likely to serve as props for a staged, mock-up scenario based on slipshod research in an experiment, to illustrate the deficiencies in the processes and in the assessment of scholarly publishing productivity and impact in order to present the idealized solution of Vanclay: using the h-index, portrayed as the Prince, mounted on the shoulder of the White Horse, <a href="https://scholar.google.fr/">Google Scholar</a>.<br/>
    <small class="pull-right"> P. Jacso, Grim tales about the impact factor and the h-index in the Web of Science and the Journal Citation Reports databases: reflections on Vanclay’s criticism, Scientometrics (2012) 92:325–354</small><br>
    </blockquote> 
 <br />
  
    <blockquote>
    The JIF: angel, devil or scapegoat? All three at a time: angel, for a unique historical role and the many avenues opened to scientometrics and other fields; devil, for a few flaws, and a brightness and market power that may have deterred users from looking aside; but also scapegoat, for misuses and abuses.
    <small class="pull-right">M. Zitt, The journal impact factor: angel, devil, or scapegoat? A comment on J.K. Vanclay’s article 2011, Scientometrics 2012, 22 feb</small><br>
	</blockquote> 
 <br />

<p>
En effet, ce dernier affirme que l'utilisation de bases de données beaucoup plus larges et moins sélectives que le <a href="http://scholar.google.fr/">Web Of Science</a>, telles que <a href="http://webofscience.com">Google Scholar</a>, qui est une base de données de publications totalement ouverte, serait finalement. L'un des principaux arguments soulevés est que <a href="http://webofscience.com">Google Scholar</a>, par exemple, étant plus ouvert, il est également plus à même de favoriser la découverte de nouveaux travaux, et diminuerait dans le même temps les écarts dans les indicateurs entre les différents domaines de recherche.
</p>

<p>
Ce point de vue ne fait pas l'unanimité ; parmi les détracteurs de J.K. Vanclay, on retrouve par exemple M. Zitt ou encore P. Jacso, qui dénonce un manque de pertinence dû à cette absence de sélection dans les articles :
</p>

    <blockquote>
	It must be hard to resist worshipping GS for an author who benefits from GS’s shortcomings, e.g. when it attributes to the researcher 353 publications, 4,003 citations, and an h-index of 30. After a time, the researcher may believe these numbers, set his expectation of other databases accordingly, and soon may find himself with a chip on his shoulder, if his expectation for inflated h-index score, publication and citation counts are not met by other databases. This can make in his eyes Web of Science and JCR look like Old Scrooge when it attributes to him only 80 publications, 1,291 citations, and a h-index of 19. It may add insult to injury by ranking the researcher’s favored journal by the citations/paper and other relative indicators several positions below other journals in the given discipline.
    <small class="pull-right">P. Jacso, Grim tales about the impact factor and the h-index in the Web of Science and the Journal Citation Reports databases: reflections on Vanclay’s criticism, Scientometrics (2012) 92:325–354</small><br>
    </blockquote> 

<p>
L'utilisation d'une base de données plus large, bien qu'elle soit donc plus ouverte, pourrait donc mener à de fausses mesures, des mesures manipulées.
</p>

<p>
Le choix de la base de donneés utilisée pour matérialiser les citations est donc controversé : d'un côté, une sélectivité qui a pour but de garantir des liens de qualité, de l'autre une exhaustivité qui cherche à assurer une meilleure couverture des productions scientifiques. 
</p>

<div class="paragraphe">
<h2 id="necessaire">Est-il réellement indispensable de quantifier pour mesurer ?</h2>

<p>
L'idée de mesure avec le lien citationnel est basé sur la quantification : on examine combien de fois un article a été cité, par qui, combien de fois un chercheur a été cité, combien de fois une revue a été citée. On considère en règle générale que plus ces quantités sont élevées, plus l'entité sur laquelle on cherche à obtenir des informations a un impact élevé sur le monde de la recherche. Néanmoins, cette vision est parfois considérée comme biaisée.
</p>

<p>
L'une des motivations pour la mesure, outre la facilité de découverte, est pour les institutions d'établir des classements et des évaluations. Ces derniers peuvent avoir une influence sur la réputation de telle ou telle entité de la recherche, comme par exemple pour le <a href="http://www.shanghairanking.com/fr/">Classement de Shanghai</a>, qui fournit un classement annuel des meilleures universités mondiales selon certains critères. L'évaluation de la recherche peut par exemple conduire les institutions de la recherche telles que le <a href="http://www.cnrs.fr/">CNRS</a>, Centre National de la Recherche Scientifique, à distribuer les fonds accordés à la recherche d'une certaine manière plutôt que d'une autre.
</p>

<p>
La déclaration DORA de San Francisco (San Francisco Declaration on Research Assessment) est une déclaration initiée par des scientifiques et éditeurs de journaux qui remet en cause l'utilisation, jugée trop importante, des classements basés sur les mesures bibliométriques avec pour fin l'évaluation de la recherche.
</p>

    <blockquote>
There is a pressing need to improve the ways in which the output of scientific research is evaluated by funding agencies, academic institutions, and other parties. (...) For the purposes of research assessment, consider the value and impact of all research outputs (including datasets and software) in addition to research publications, and consider a broad range of impact measures including qualitative indicators of research impact, such as influence on policy and practice.
    <small class="pull-right">San Francisco Declaration on Research Assessment, 2013</small><br>
    </blockquote> 
    
<p>
Cette déclaration comporte de nombreuses recommandations adressées aux différents acteurs de la recherche, concernant la manière d'utiliser les mesures bibliométriques, ou la manière de les produire.
</p>

<p>
Cette déclaration, publiée en 2013 par l'ASCB (American Society for Cell Biology), a depuis été signée par plus de 6000 personnes et plus de 200 institutions, ce qui montre que la controverse concernant l'utilisation des mesures bibliométriques est réellement active.
</p>

 <br />

</div>

        </div><!--/contenu-->
  	</div> <!-- /base-->
	</div> <!-- right-->
	</div><!--/row-->
</div><!--/container-->

<?php
include("inc/footer.php");
?>
<script language="javascript">
$("#listeHeaderBibli").addClass("active");
parse();
</script>
	</body>
</html>
