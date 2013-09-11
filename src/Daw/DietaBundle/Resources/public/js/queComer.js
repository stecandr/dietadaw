var currentMax = 1;
var maxMax = -1;

function inicializar(){
	(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));

	seccion = document.getElementById('main_article');
	var btAtras = document.getElementById('atras');
	var btAdelante = document.getElementById('adelante');
	btAtras.addEventListener("click", back);
	btAdelante.addEventListener("click", next);
	cargarQueComer();
}

function next() {
    currentMax += 1;
    cargarQueComer();
}

function back() {
	if(currentMax>1){
		currentMax -= 1;
		cargarQueComer();
    } 
}

function cargarQueComer(){
	url="xml/que-comer.xml";
	request=new XMLHttpRequest();
	request.addEventListener('load', procesarQueComer, false);
	request.open("GET", url, true);
	request.send(null);
}

function procesarQueComer(e){
	var xml= e.target.responseXML;
	while (seccion.firstChild) {
                seccion.removeChild(seccion.firstChild);
        }
	var articulos= xml.documentElement.getElementsByTagName("item");
	maxMax = articulos.length;
    currentMax = Math.min(maxMax, currentMax);
	for(var i = Math.max(currentMax - 1, 0); i < currentMax; i++){
		var titulo= articulos[i].getElementsByTagName('title')[0].textContent;
		var descripcion= articulos[i].getElementsByTagName('description')[0].textContent;
		var fuente= articulos[i].getElementsByTagName('source')[0].textContent;
		var imagenes= articulos[i].getElementsByTagName("link")[0].textContent;
		
		var articulo = document.createElement('article');
		var encabezado= document.createElement('h2');
		var cuadro=document.createElement('div');
		var img=document.createElement('img');
		var comentarios=document.createElement('div');
	
		texto3= document.createTextNode(titulo);
		encabezado.appendChild(texto3);
		encabezado.setAttribute("class","titulo");
				
		texto2=document.createTextNode(descripcion);		

		texto1=document.createTextNode(fuente);
		
		img.setAttribute("src","images/"+imagenes);
		cuadro.setAttribute("class","centerpic");
		
		cuadro.addEventListener('click',function(){showDiv(texto3,texto2,texto1,imagenes);},false);
	
		articulo.appendChild(encabezado);
		cuadro.appendChild(img);
		articulo.appendChild(cuadro);
		seccion.appendChild(articulo);
	}
}

function showDiv(titul,desc,fuente,im){
	var div;
	div = document.createElement('div');
	div.setAttribute("id", "window_front");
	
	//var articulo = document.createElement('p');
	var tit = document.createElement('h2');
	var des = document.createElement('p');
	var fuent = document.createElement('p');
	var imagen = document.createElement('img');
	tit.appendChild(titul);
	des.appendChild(desc);
	fuent.appendChild(fuente);
	imagen.setAttribute("src","images/"+im);
	imagen.setAttribute("class","sidepic");
	div.appendChild(tit);
	div.appendChild(imagen);
	div.appendChild(des);
	div.appendChild(fuent);
	var negro = document.createElement('div');
	negro.setAttribute("id", "black_screen");
	negro.innerHTML= " ";
	document.body.appendChild(negro);
	document.body.appendChild(div);
	
	
	
	var black = document.getElementById("black_screen");
	black.addEventListener('click',hideDiv,false);
	
}

function hideDiv(){
	document.body.removeChild(document.getElementById("window_front"));
	document.body.removeChild(document.getElementById("black_screen"));	
}


window.addEventListener('load', inicializar, false);