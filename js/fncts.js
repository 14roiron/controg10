function parse()
{

	var a = [];
	
	a[0]= [];
	a[0][0] ="P. Jacso";
	a[0][1]="<a data-toggle=\"modal\" href=\"modale_acteurs.php?c=jacso\" data-target=\"#infos\">P.Jacso</a>";
	
	a[2]=[];
	a[2][0]="M. Zitt";
	a[2][1]="<a data-toggle=\"modal\" href=\"modale_acteurs.php?c=zitt\" data-target=\"#infos\">M. Zitt</a>";
	
	a[3]=[];
	a[3][0]="J.K. Vanclay";
	a[3][1]="<a data-toggle=\"modal\" href=\"modale_acteurs.php?c=vanclay\" data-target=\"#infos\">J.K. Vanclay</a>";
	
	a[8]=[];
	a[8][0]="B. Cronin";
	a[8][1]="<a data-toggle=\"modal\" href=\"modale_acteurs.php?c=cronin\" data-target=\"#infos\">B. Cronin</a>";
	
	a[9]=[];
	a[9][0]="L. Egghe";
	a[9][1]="<a data-toggle=\"modal\" href=\"modale_acteurs.php?c=egghe\" data-target=\"#infos\">L. Egghe</a>";
	
	a[10]=[];
	a[10][0]="E. Garfield";
	a[10][1]="<a data-toggle=\"modal\" href=\"modale_acteurs.php?c=garfield\" data-target=\"#infos\">E. Garfield</a>";
	
	
	a[11]=[];
	a[11][0]="J.E. Hirsch";
	a[11][1]="<a data-toggle=\"modal\" href=\"modale_acteurs.php?c=hirsch\" data-target=\"#infos\">J.E. Hirsch</a>";
	
	a[12]=[];
	a[12][0]="K. Kousha";
	a[12][1]="<a data-toggle=\"modal\" href=\"modale_acteurs.php?c=kousha\" data-target=\"#infos\">K. Kousha</a>";
	a[13]=[];
	
	a[13][0]="P. Papon";
	a[13][1]="<a data-toggle=\"modal\" href=\"modale_acteurs.php?c=papon\" data-target=\"#infos\">P. Papon</a>";
	
	a[14]=[];
	a[14][0]="J. Priem";
	a[14][1]="<a data-toggle=\"modal\" href=\"modale_acteurs.php?c=priem\" data-target=\"#infos\">J. Prien</a>";
	
	a[15]=[];
	a[15][0]="G. Rivalle";
	a[15][1]="<a data-toggle=\"modal\" href=\"modale_acteurs.php?c=rivalle\" data-target=\"#infos\">G. Rivalle</a>";
	

	a[1]=[];
	a[1][0]="Journal Impact Factor";
	a[1][1]="<a data-toggle=\"modal\" href=\"modale_indices.php?c=journalimpactfactor\" data-target=\"#infos\">Journal Impact Factor</a>";
	
	a[4]=[];
	a[4][0]="h-index";
	a[4][1]="<a data-toggle=\"modal\" href=\"modale_indices.php?c=h-index\" data-target=\"#infos\">h-index</a>";
	
	a[5]=[];
	a[5][0]="g-index";
	a[5][1]="<a data-toggle=\"modal\" href=\"modale_indices.php?c=g-index\" data-target=\"#infos\">g-index</a>";
	
	a[6]=[];
	a[6][0]="altmetrics";
	a[6][1]="<a data-toggle=\"modal\" href=\"modale_indices.php?c=altmetrics\" data-target=\"#infos\">altmetrics</a>";
	
	
	a[7]=[];
	a[7][0]="book citation index";
	a[7][1]="<a data-toggle=\"modal\" href=\"modale_indices.php?c=bookcitationIndex\" data-target=\"#infos\">book citation Index</a>";
	
	
	
	a[16]=[];
	a[16][0]="Web of Science";
	a[16][1]="<a data-toggle=\"modal\" href=\"modale_acteurs.php?c=webofscience\" data-target=\"#infos\">Web of Science</a>";
	
	
	a[17]=[];
	a[17][0]="Scopus";
	a[17][1]="<a data-toggle=\"modal\" href=\"modale_acteurs.php?c=scopus\" data-target=\"#infos\">Scopus</a>";
	
	a[18]=[];
	a[18][0]="Google Scholar";
	a[18][1]="<a data-toggle=\"modal\" href=\"modale_acteurs.php?c=googlescholar\" data-target=\"#infos\">Google Scholar</a>";
	
	
	for (var i=0;i<a.length;i++) {
		
		document.body.innerHTML=document.body.innerHTML.split(a[i][0]).join(a[i][1]);
	}
	init();

}
function init ()
{
	$("body").on("hidden.bs.modal", ".modal", function () {
		$(this).removeData("bs.modal");
	});
	$(document).ready(function(){/* activate sidebar */
		$('#sidebar').affix({
offset: {
top: 235}})});
	$('#sidebar').text('');
	$('.paragraphe').each(function() {	  
		var id = $(this).children('h2').attr('id');
		var text = $(this).children('h2').text();
		$('#sidebar').append('<li><a href=#'+id+'>'+text+'</a></li>');
	});

	/* activate scrollspy menu */
	var $body   = $(document.body);
	var navHeight = $('.navbar').outerHeight(true) + 10;

	$body.scrollspy({
target: '#leftCol',
offset: navHeight,
	});


	/* smooth scrolling sections */
	$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
					if (target.length) {
			$('html,body').animate({
scrollTop: target.offset().top - 50
			}, 1000);
			return false;
		}
	}
});
}

