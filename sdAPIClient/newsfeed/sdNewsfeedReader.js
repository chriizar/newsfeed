
function sdNewsfeedReader(container, opciones){

var contenedor, n;
contenedor = $("<div>",  {class:"newsfeed-container"});

		


	function genarateElement(noticia){
		var element, titulo, fecha, descripcion;
		element    = $("<div>",  {class:"newsfeed-element"});
		titulo     = $("<h3>",   {class:"titulo-element"});
		fecha      = $("<span>", {class:"fecha-element"});
		descripcion= $("<span>", {class:"descripcion-element"});

		titulo.text(noticia.titulo);
		fecha.text(noticia.fecha);
		descripcion.text(noticia.descripcion);

		element.append(titulo).append(fecha).append(descripcion);
		return element;
	}
	function getNews(){
		
		$.getJSON('http://localhost/newsfeed/sdAPIClient/newsfeed/server.php', {param1: 'value1'}, function(json, textStatus) {
				/*optional stuff to do after success */
				$.each(json, function(index, val) {
		        /* iterate through array or object */
	 	        contenedor.append(genarateElement(val));
  		        });	
  		        contenedor.appendTo("#"+container);	
		        });
		
	}
	getNews();
this.intermitente  = function(opt){
       if(opt ===true){
			setInterval(function(){
		    	contenedor.fadeOut('fast', function() {
				getNews();
				$(this).html("").fadeIn('fast');
				});
    		},5000);
		}	
	};

  // this['intermitente']();
if( typeof opciones == "object"){
	for(var key in opciones){
		this[key](opciones[key]);
	}
}

	

}

