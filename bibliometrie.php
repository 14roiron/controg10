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
<h2 id="titre">Les bases de données à la mesure bibliométrique</h2>
<p>
Le processus de mesure consiste à obtenir une nouvelle grandeur signifiante à partir de données existantes. Lorsque l'on a affaire à des productions bibliographiques, on parle de bibliométrie. Les grandeurs obtenues sont appelés indicateurs bibliométriques.
</p>

<p>
P.Jacso fait réponse à une série d'articles publiés par J.K. Vanclay entre 2008 et 2012. Ces articles formulent des objections par rapport au classement de revues, ou "journal ranking", via certains indicateurs bibliométriques, notamment le Journal Impact Factor. Mais qu'est-ce que les indicateurs bibliométriques, quel est leur origine et que mesurent-ils ?
</p>
</div>
<div class="paragraphe">
<h2 id="LesindicateursPD">Les indicateurs bibliométriques : principe et description</h2>
 
 
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
    <small class="pull-right"> P.Jacso, Grim tales about the impact factor and the h-index in the Web of Science and the Journal Citation Reports databases: reflections on Vanclay’s criticism, Scientometrics (2012) 92:325–354</small><br>
    </blockquote> 
 <br />
  
    <blockquote>
    The JIF: angel, devil or scapegoat? All three at a time: angel, for a unique historical role and the many avenues opened to scientometrics and other fields; devil, for a few flaws, and a brightness and market power that may have deterred users from looking aside; but also scapegoat, for misuses and abuses.
    <small class="pull-right">M. Zitt, The journal impact factor: angel, devil, or scapegoat? A comment on J.K. Vanclay’s article 2011, Scientometrics 2012, 22 feb</small><br>
	</blockquote> 
 <br />
	

<p>
P. Jacso dénonce également un manque de pertinence dû à cette absence de sélection dans les articles :
</p>

    <blockquote>
	It must be hard to resist worshipping GS for an author who benefits from GS’s shortcomings, e.g. when it attributes to the researcher 353 publications, 4,003 citations, and an h-index of 30. After a time, the researcher may believe these numbers, set his expectation of other databases accordingly, and soon may find himself with a chip on his shoulder, if his expectation for inflated h-index score, publication and citation counts are not met by other databases. This can make in his eyes Web of Science and JCR look like Old Scrooge when it attributes to him only 80 publications, 1,291 citations, and a h-index of 19. It may add insult to injury by ranking the researcher’s favored journal by the citations/paper and other relative indicators several positions below other journals in the given discipline.
    <small class="pull-right">P.Jacso, Grim tales about the impact factor and the h-index in the Web of Science and the Journal Citation Reports databases: reflections on Vanclay’s criticism, Scientometrics (2012) 92:325–354</small><br>
    </blockquote> 
 <br />

</div>
<div class="paragraphe">
<h2 id="indicateursBiblio">Des indicateurs bibliométriques</h2>
 
<p>
Nous avons vu que le choix de la base de donneés utilisée pour matérialiser les citations est donc controversée : d'un côté, une sélectivité qui a pour but de garantir des liens de qualité, de l'autre une exhaustivité qui cherche à assurer une meilleure couverture des productions scientifiques. Outre ce problème, l'objectif des indicateurs bibliométriques est de constituer, à partir de données brutes comme le lien citationnel, un nombre donnant de manière absolue une indication sur une entité.
</p>

<p>
L'un des plus vieux indicateurs bibliométriques est le Journal Impact Factor, introduit au début des années 60 par Eugène Garfield et Irving H. Sher.
</p>

    <blockquote>
  	We needed a simple method for comparing journals regardless of their size, and so we created the journal impact factor. (...)
	
	A journal’s impact factor is based on 2 elements: the numerator, which is the number of citations in the current year to any items published in a journal in the previous 2 years, and the denominator, which is the number of substantive articles (source items) published in the same 2 years. (...)
	
	In addition to helping libraries decide which journals to purchase, journal impact factors are also used by authors to decide where to submit their articles.
    <small class="pull-right">Garfield, E. "Journal impact factor: a brief review", Canadian Medical Association Journal, 161(8), p.979-80, 1999</small><br>
    </blockquote> 
 <br />
  
<p>
Son but premier est donc la sélection des revues par les bibliothécaires et la découverte scientifique. Néanmoins, il est ensuite utilisé pour en évaluer les auteurs :
</p>
  
    <blockquote>
	I first mentioned the idea of an impact factor in 1955. At that time it did not occur to me that it would one day become the subject of widespread controversy. Like nuclear energy, the impact factor has become a mixed blessing. I expected that it would be used constructively while recognizing that in the wrong hands it might be abused. (...) It is one thing to use impact factors to compare journals and quite another to use them to compare authors.
    <small class="pull-right">Garfield, E. "Journal impact factor: a brief review", Canadian Medical Association Journal, 161(8), p.979-80, 1999</small><br>
    </blockquote> 
 <br />
  
    <blockquote>
    Unlike phrenology, the impact factor has demonstrated utility in informing citation patterns and guiding library purchasing decisions. However, there are increasing concerns that the impact factor is being used inappropriately and in ways not originally envisaged.
    <small class="pull-right">J.K. Vanclay, Impact factor: Outdated artefact or stepping-stone to journal certification?, Scientometrics (2012)</small><br>
	</blockquote> 
 <br />
  
<p>
Cette utilisation du Journal Impact Factor est donc qualifiée de détournée par son créateur. Pourquoi donc les mesures bibliométriques s'orientent-elles vers l'évaluation des entités de la recherche ? En réalité, le besoin d'évaluation est réel, et dans plusieurs domaines. D'une part, le travail de découverte, évoqué plus haut :
</p>
    <blockquote>
	Les citations contextualisent la recherche et aident à orienter le lecteur. Elles permettent au lecteur d'évaluer le travail de l'auteur sur la base de la qualité perçue des références sélectionnées. Et elles permettent au lecteur de retrouver un travail jusque-là inconnu mais potentiellement utile.
    <small class="pull-right">Cronin, Blaise. « Comment la manie des rankings a atteint le coeur de la recherche ». Le Temps, 24 Octobre 2014.</small><br>
	</blockquote> 
 <br />
<p>
Mais aussi l'évaluation du mérite d'une entité dans le domaine de la recherche :
</p>
    <blockquote>
	On a jugé plus attrayant [que l'enrichissement d'un sujet à partir des conclusions précédentes] de relever l'influence universitaire de certaines personnes dans différents domaines et au fil du temps, et d'identifier de la sorte les scientifiques, documents, revues et institutions le plus souvent cités. »
    <small class="pull-right">Cronin, Blaise. « Comment la manie des rankings a atteint le coeur de la recherche ». Le Temps, 24 Octobre 2014.</small><br>
	</blockquote> 
 <br />
<p>
Ou encore, pour des administrations :
</p>
    <blockquote>
	Les administrateurs utilisent ces mesures pour évaluer la productivité des personnes qu'elles embauchent et financent, et suivent l'impact en aval des projets de recherche et de développement qu'ils souscrivent, avec peu d'égards pour les limites de ces indices.
    <small class="pull-right">Cronin, Blaise. « Comment la manie des rankings a atteint le coeur de la recherche ». Le Temps, 24 Octobre 2014.</small><br>
	</blockquote> 
 <br />
<p>
D'où le premier article de la déclaration DORA de San Francisco, qui se présente comme une initiative mondiale qui propose des recommandations aux différents acteurs du monde de la recherche :
</p>
	<blockquote>
	Do not use journal-based metrics, such as Journal Impact Factors, as a surrogate measure of the quality of individual research articles, to assess an individual scientist’s contributions, or in hiring, promotion, or funding decisions.
	   <small class="pull-right">San Francisco Declaration on Research Assessment, 2013</small><br>
	</blockquote> 
 <br />
</p>

<p>
Cette dernière citation soulève le point important des limites des indices. En effet, les indices sont calculés selon des formules qui peuvent favoriser certaines situations. Par exemple, prenons le cas du h-index, proposé par J. Hisch en 2005 :
</p>

	<blockquote>
	A scientist has index h if h of his/her Np papers have at least h citations each, and the other (Np − h) papers have no more than h citations each.
    <small class="pull-right">Hirsh, J. (2005). An index to quantify an individual's scientific research output. (2005) Proceedings of the National Academy of Sciences, vol. 102, no 46, 16569–16572.</small><br>
	</blockquote> 
 <br />

<p>
Le h-index a été proposé par Hirsch à partir de plusieurs constats : lorsqu’on a un chercheur ayant reçu un prix Nobel, aucun doute sur la pertinence de ses travaux de recherche. Mais pour les autres, comment évaluer l’impact et la pertinence de ses travaux ? Parmi les données pouvant être utilisées, on trouve le nombre de publications, le nombre de citations pour une publication précise, les revues dans lesquelles ont été publiés les articles et leur facteur d’impact respectif.
</p>
<p>
Chacun de ces indicateurs pris individuellement ne convient pas : certains mesurent la productivité seulement et non l’importance des résultats, certains avantagent certaines situations (« découvertes ponctuelles » vs travail sur le long terme, auteur très productif mais peu cité vs auteur peu productif mais très cité…).
</p>
<p>
L’indice h proposé par Hirsch mesure convenablement d’après lui l’impact du travail du chercheur, et de plus est facile à calculer (par exemple, dans une base de données telle que le Web Of Science, on classe les publications par nombre de citations et on compte). Hirsch a étudié le h-index pour des physiciens et a constaté que deux chercheurs affichant un h-index semblable ont un impact semblable dans le monde de la recherche.
</p>
<p>
Après la proposition de J. E. Hirsch, la communauté scientifique s’est penchée sur la question de la pertinence d’un tel indice.
</p>
	<blockquote>
	From that seminal paper, a huge amount of research has been lavished, focusing on one hand on the development of correction factors to the h index and on the other hand, on the pros and cons of such measure proposing several possible alternatives. 
	<small class="pull-right">Cerchiello, P., & Giudici, P. (2014). On a statistical h index. Scientometrics Volume 99, Issue 2, 299-312.</small><br>
	</blockquote> 
 <br />
<p>
D’autre part, d’autres chercheurs (comme dans la dernière citation) proposent des solutions pour pallier les défauts de cet indicateur. La controverse n’est donc pas forcément agressive mais plus dans une optique d’amélioration.
</p>
<p>
Néanmoins, la méthode de calcul du h-index est débattue, car ce dernier peut être différent d’une base de donnée à l’autre en raison de leurs bases de données propres, point abordé précédemment.
</p>
	<blockquote>
	In several case the results obtained through Google Scholar are considerably different from the results based on the <a href="http://webofscience.com">Web Of Science</a> and Scopus. Data cleansing is discussed extensively.
	<small class="pull-right">Bar-Ilan, J. (2007). "Which h-index? — A comparison of WoS, Scopus and Google Scholar". Scientometrics 74 (2): 257.</small><br>
	</blockquote> 
 <br />
<p>
La controverse est active notamment dans le domaine des sciences médicales. Par exemple :
</p>
	<blockquote>
	Application of the h-index as a bibliometric in neurosurgery can distinguish academic productivity on the basis of academic rank, years posttraining, and neurosurgical subspecialties. The application of the h-index to compare departments is problematic and, at this time, not reliable. (…) We recommend the creation of individual bibliometric profiles to better compare the academic productivity of neurosurgeons.
	<small class="pull-right">Khan, N., Thompson, C.J., Choudhri, A.F., Boop, F.A., Klimo Jr., P. (2013). Part I: The application of the h-index to groups of individuals and departments in academic neurosurgery. World Neurosurgery, Volume 80, Issue 6, Pages 759-765.e3</small><br>
	</blockquote> 
 <br />
	
<p>
Il existe des désaccords sur l’usage de tel ou tel indice. Par exemple, Leo Egghe publie des articles poussant à l’usage du g-index en lieu et place du h-index (2006, 2009, 2012) et d’un « year-based h-index » (2013, 2014).
</p>
	<blockquote>
It is shown that the g-index inherits all the good properties of the h-index and, in addition, better takes into account the citation scores of the top articles.
	<small class="pull-right">Egghe, Leo (2006), Theory and practise of the g-index, Scientometrics, vol. 69, No 1, pp. 131–152</small><br>
	</blockquote> 
 <br />
	<blockquote>
	We therefore plead to replace the h-index by the g-index, yielding a career years g-index by publications, respectively a career years g-index by citations, which have the good concentration properties as described in Mahbuba and Rousseau (2013).
	<small class="pull-right">Egghe, Leo (2014), Comments on "year-based h-type indicators", Scientometrics 98:2369–2370</small><br>
	</blockquote> 
 <br />
<p>
Néanmoins, le g-index a aussi des détracteurs. Alex De Visscher écrit des articles critiques à ce propos :
</p>
	<blockquote>
	The main difference between the g-index and the h-index is that the former penalizes consistency of impact whereas the latter rewards such consistency. It is concluded that the h-index is a better bibliometric tool than is the g-index, and that the square root of the total number of citations is a convenient measure of a researcher's overall impact.
	<small class="pull-right">De Visscher, A. What does the g-index really measure? (2011). Journal of the American Society for Information Science and Technology, Volume 62, Issue 11. 2290-2293</small><br>
	</blockquote> 
 <br />
<p>
Ce à quoi répond Leo Egghe dans Egghe, L. Remarks on the paper of A. de Visscher, "what does the g-index really measure?" (2012). Journal of the American Society for Information Science and Technology, 63 (10), pp. 2118-2121., puis Alex De Visscher dans De Visscher, A. Response to remarks on the paper by a. De Visscher, 'what does the g-index really measure?' (2013). Journal of the American Society for Information Science and Technology 64 (9), pp. 1960-1962. et ainsi de suite…
</p>
<p>
Toujours dans le domaine de la recherche, d’autres chercheurs sont plus catégoriques et considèrent que le h-index, comme le g-index, sont bien trop simplistes et ne sont pas des indicateurs fiables.
</p>
	<blockquote>
	While they are easy to understand, measure and communicate, such indicators entail a level of inaccuracy that could well be unacceptable for most of the intended uses and objectives.
	<small class="pull-right">G. Abramo, C.A. D'Angelo, F. Viel. The suitability of h and g indexes for measuring the research performance of institutions. Scientometrics (2013) 97:555–570</small><br>
	</blockquote> 
 <br />
<p>
On voit que la controverse autour de cet indicateur bibliométrique est dense. Le débat est centré sur le domaine de la recherche, entre chercheurs. D'une part, les chercheurs d'un certain domaine, notamment le domaine biomédical, font le constat des biais des indicateurs. D'autre part, des spécialistes en bibliométrie font des propositions contrastées pour améliorer les indicateurs existants, ou des recommandations. Enfin, d'autres acteurs, notamment dans le domaine industriel, rejettent en bloc l'idée qu'un indicateur "simple" tel que le h-index ou le g-index soit pertinent.
</p>

<p>
Chaque indicateur bibliométrique est sujet à des débats de ce type. Chaque indicateur a tendance à avantager des situations bien précises, et il s'agit alors de faire la part des choses. A propos du h-index :
</p>
	<blockquote>
	C’est un indicateur qui est assez simple et qui va pénaliser un chercheur qui est jeune. Par exemple, il n’a peut-être que 2 articles, et imaginons que ces deux articles sont cités 200 fois chacun : son h-index reste de 2 puisqu’il a deux articles cités deux fois. Vous comprenez qu’il faut être publié beaucoup et être cité beaucoup pour avoir un haut h-index. L'une des faiblesses du h-index, c’est l’absence de contextualisation. 
	<small class="pull-right">G. Rivalle, Thomson Reuters, Entretien</small><br>
	</blockquote> 
 <br />
<p>
Il s'agit donc de contextualiser, c'est-à-dire de ne pas se borner à regarder un seul indicateur bibliométrique afin de chercher à évaluer un chercheur ou d'adapter les indicateurs en fonction des domaines concernés.
</p>



<hr>
</div>

</div>
</div>
        </div><!--/right-->
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
