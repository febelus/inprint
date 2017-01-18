
//nasconde e mostra dettagli
function dettagli(riga, tabella) {
	$(document).ready(function(){
		var div= "#dettagli"+tabella+riga;
		var immagine="img.freccia"+"#img"+tabella+riga;
		if($(immagine).attr("src")=="../src/down.png")
			{$(immagine).attr("src","../src/up.png");}
			else{$(immagine).attr("src","../src/down.png");}
		$(div).toggle('slow');
		
	});
};


//effettua le ricerche all'interno delle tabelle della pagina-------- non utilizzato
function searchtab(n){
	$(document).ready(function(){
				var cont;
				var corrispondenze;
				var exp;
				var codAscii;		
				$('#cerca').keyup(function(event){
					if(!checkKey(event)){
						if($(this).val().length>=3)
							filtra($(this).val());
					}

				});

				function filtra(catena){ 
					$('#tabella tbody tr').each(function(){
						$(this).removeClass('nascondi');
						cont=$(this).find('td:eq(0)').html();
						for (var i = 1; i <= 10; i++) {
							cont=cont +" "+$(this).find('td:eq('+i+')').html();
						}
						console.log(cont);
						exp= new RegExp(catena, 'gi');
						corrispondenze= cont.match(exp);
						if(corrispondenze!=null){
							$(this).addClass('trovato');
							
						} else{
							$(this).addClass('nascondi');

						}

					});
				}
				//Ripristina la tabella quando ci sono meno di 3 lettere nel search
				function ripristina(){
					$('#tabella tbody tr').each(function(){
						$(this).removeClass('trovato nascondi');
					});
				}

				function checkKey(e){
					console.log('ciao')
					codAscii= e.which;
					console.log(codAscii);
					if (codAscii==8) {
						if ($('#cerca').val().length>=3) {
							filtra($('#cerca').val())	
						} else{
							ripristina();
						}
						return true;
					} else{
						return false;
					}
				}
			});
}

