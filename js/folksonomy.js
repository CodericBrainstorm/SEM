// JavaScript
//alert("hola mundo");
function generarMarcadores(nombreDiv, texto) {
	var div = document.getElementById(nombreDiv);
	var estaUrl = encodeURIComponent(document.location.href);
	
	// DEFINIMOS LOS SITIOS DE SOCIAL BOOKMARKING
	var sitios = new Array(
		"Del.icio.us", 
		"Technorati", 
		"Digg", 
		"Meneame",
		"Google",
		"Yahoo!",
		"Live Favorites", 
		"Furl", 
		"Fresqui", 
		"Mister Wong");
	var url = new Array(
		"http://del.icio.us/post?url=", 
		"http://technorati.com/faves/?add=", 
		"http://digg.com/submit?phase=2&url=", 
		"http://meneame.net/login.php?return=/submit.php?url=",
		"http://www.google.com/bookmarks/mark?op=edit&bkmk=",
		"http://myweb2.search.yahoo.com/myresults/bookmarklet?u=", 
		"http://favorites.live.com/quickadd.aspx?marklet=1&mkt=es-us&url=",
		"http://www.furl.net/storeIt.jsp?u=",
		"http://tec.fresqui.com/post?url=", 
		"http://www.mister-wong.com/index.php?action=addurl&bm_url=");
	var iconos = new Array(
		"delicious.gif", 
		"technorati.gif", 
		"digg.gif", 
		"meneame.gif",
		"google.jpg",
		"yahoo.png", 
		"live.gif",
		"furl.gif", 
		"fresqui.png", 
		"misterwong.gif");
	
	// LOS AGREGAMOS AL DIV
	for (var i = 0; i < sitios.length; i++) {
		var contenedor = document.createElement("div");
			contenedor.id = "marcador";
			if (!texto)
				contenedor.style.cssFloat = "left";
		
		var img = document.createElement("img");
			img.src = "http://www.reweb.com.ar/labs/marcadoresSociales/iconos/" + iconos[i];
			img.alt = sitios[i];
			img.title = "Agregar a " + sitios[i];
					
		var vinculo = document.createElement("a");
			vinculo.href = url[i] + estaUrl;
			vinculo.appendChild(img);
			if (texto)
				vinculo.innerHTML += sitios[i];
		
		contenedor.appendChild(vinculo);	
		div.appendChild(contenedor);
	}
	
	return;
}