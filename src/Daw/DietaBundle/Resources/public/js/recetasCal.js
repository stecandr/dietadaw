function inicializar(){
	seccion = document.getElementById('lista_recetas');
	lista = document.getElementsByClassName('recetas_group')[0];
	cargarRecetasCal();
}

function cargarRecetasCal(){
	url="xml/recetasCalend.xml";
	request=new XMLHttpRequest();
	request.addEventListener('load', procesarRecetasCal, false);
	request.open("GET", url, true);
	request.send(null);
}

function procesarRecetasCal(e){
	xml= e.target.responseXML;
	articulos= xml.documentElement.getElementsByTagName("item");
	for(i=0; i<articulos.length; i++){
		caloria=articulos[i].getElementsByTagName('nombre')[0].getAttribute('caloria');
		titulo= articulos[i].getElementsByTagName('nombre')[0].textContent;

		caja=document.createElement('div');
		caja.setAttribute("class", "recetas_cal");
		caja.setAttribute("id", "receta"+i);
		caja.setAttribute("draggable");

		cajacal=document.createElement('div');
		cajacal.setAttribute("class", "calorias");

		texto1=document.createTextNode(caloria);
		cajacal.appendChild(texto1);

		texto2 = document.createTextNode(titulo + " Kcal: ");
		caja.appendChild(texto2);
		caja.appendChild(cajacal);

		lista.appendChild(caja);
		
		//seccion.appendChild(articulo);
	}
}

window.addEventListener('load', inicializar, false);
