$(document).ready(function(){

	if (location.hash){ 			//Se eu vier de outra pagina e tiver com um endereço #(...)
		$(location.hash).removeAttr('id');			// Tira a id pro navegador não pular nela

        setTimeout(function(){
        	$('.' + location.hash.slice(1) + '-aux').attr('id',location.hash.slice(1));			// Recoloca a id

        	var offY = $(location.hash).offset().top; //Destinação do scrolling
        	var max = $(document).height() - $(window).height(); //O ponto maximo do scrolling
        	if(max < 0) max = 0;			//Caso especial onde o aparelho é maior que a página em si
        	if(offY > max) offY = max;			//Se minha destinação for além do ponto máximo de scrolling, minha destinação será o ponto máximo

        	var pixels = Math.abs($(window).scrollTop() - offY);			//A quantidade de pixels scrollados (origem - destino)
        	var MsPorPixels = 50;			//A "velocidade" de scrolling

            $('html,body').animate({
       			scrollTop: offY			//Scrolla até o destino
   			},MsPorPixels * Math.sqrt(pixels));			//Duração do scrolling (o sqrt deixa o scroll mais agradavel)
        }, 40);

    }

	$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
 
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');

			var offY = $(target).offset().top;
			var max = $(document).height() - $(window).height();
        	if(max < 0) max = 0;
        	if(offY > max) offY = max;

			var pixels = Math.abs($(window).scrollTop() - offY);
        	var MsPorPixels = 50;

			if (target.length) {
				$('html,body').animate({
				  scrollTop: offY
				}, MsPorPixels * Math.sqrt(pixels));
				return false;
			}
			
		}

	});
});