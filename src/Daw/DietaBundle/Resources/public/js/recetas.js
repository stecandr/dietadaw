function inicializar(){
	seccion = document.getElementById('main_section');
	cargarRecetas();
}

function cargarRecetas(){
	url="xml/recetas.xml";
	request=new XMLHttpRequest();
	request.addEventListener('load', procesarRecetas, false);
	request.open("GET", url, true);
	request.send(null);
}

function procesarRecetas(e){
	xml= e.target.responseXML;
	articulos= xml.documentElement.getElementsByTagName("item");
	for(i=0; i<articulos.length; i++){
		titulo= articulos[i].getElementsByTagName('nombre')[0].textContent;
		infonutr= articulos[i].getElementsByTagName('informacionnutricional')[0].textContent;
		ingredientes= articulos[i].getElementsByTagName('ingredientes')[0].textContent;
		preparacion= articulos[i].getElementsByTagName('preparacion')[0].textContent;
		
		articulo = document.createElement('article');
		encabezado= document.createElement('h2');
		infntr=document.createElement('p');
		ingrd=document.createElement('p');
		prepr=document.createElement('p');
		enlace=document.createElement('p');
	
		texto1= document.createTextNode(titulo);
		encabezado.appendChild(texto1);
		
		infntr.innerHTML=infonutr;
		ingrd.innerHTML=ingredientes;
		prepr.innerHTML=preparacion;
		
		articulo.appendChild(encabezado);
		articulo.appendChild(infntr);
		articulo.appendChild(ingrd);
		articulo.appendChild(prepr);
		//articulo.appendChild(enlace);
		seccion.appendChild(articulo);
	}
}

window.addEventListener('load', inicializar, false);