function parse()
{

            var a = [];
		
		a[0]= [];
		a[0][0] ="P. Jacso";
		a[0][1]="<a data-toggle=\"modal\" href=\"modale_acteurs.php?c=jacso\" data-target=\"#infos\">P.Jacso</a>";
		
		a[1]=[];
		a[1][0]="Journal Impact Factor";
		a[1][1]="<a data-toggle=\"modal\" href=\"modale_indices.php?c=journalimpactfactor\" data-target=\"#infos\">Journal Impact Factor</a>";
		
		a[2]=[];
		a[2][0]="M. Zitt";
		a[2][1]="<a data-toggle=\"modal\" href=\"modale_acteurs.php?c=zitt\" data-target=\"#infos\">M. Zitt</a>";
		
		a[3]=[];
		a[3][0]="J.K. Vanclay";
		a[3][1]="<a data-toggle=\"modal\" href=\"modale_acteurs.php?c=vanclay\" data-target=\"#infos\">J.K. Vanclay</a>";
		
		a[4]=[];
		a[4][0]="h-index";
		a[4][1]="<a data-toggle=\"modal\" href=\"modale_indices.php?c=h-index\" data-target=\"#infos\">h-index</a>";
		
		a[5]=[];
		a[5][0]="g-index";
		a[5][1]="<a data-toggle=\"modal\" href=\"modale_indices.php?c=g-index\" data-target=\"#infos\">g-index</a>";
		
		a[6]=[];
		a[6][0]="Altmetrics";
		a[6][1]="<a data-toggle=\"modal\" href=\"modale_indices.php?c=altmetrics\" data-target=\"#infos\">Altmetrics</a>";
				
				
		a[6]=[];
		a[6][0]="book citation index";
		a[6][1]="<a data-toggle=\"modal\" href=\"modale_indices.php?c=bookcitationIndex\" data-target=\"#infos\">book citation Index</a>";
		
	
		
		for (var i=0;i<a.length;i++) {
			
			document.body.innerHTML=document.body.innerHTML.split(a[i][0]).join(a[i][1]);
		}
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

