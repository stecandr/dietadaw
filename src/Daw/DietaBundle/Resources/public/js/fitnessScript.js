
window.addEventListener('load', popUp, false);

function popUp(){		  
	x = document.getElementById("imagenes");
	x.addEventListener('click',function(){showDiv();},false);					
}

function showDiv()
{
	bt = document.getElementsByClassName('active');
	i = bt[0].getAttribute("data-id");
	
	Nodos = document.getElementsByClassName('prueba');				
	a = Nodos[i-1].firstElementChild;
	t=a.getAttribute("data-title");
	f=a.getAttribute("alt");
	img=a.firstElementChild;
	imagen=img.getAttribute("src");
	d=img.getAttribute("alt");
	
	titulo=document.createTextNode(t);
	descripcion=document.createTextNode(d);
	fuente=document.createTextNode(f);
	
	div = document.createElement('div');
	div.setAttribute("id", "window_front");
	Titulo = document.createElement('h2');
	Imagen = document.createElement('img');
	Descripcion = document.createElement('p');
	Fuente = document.createElement('p');
	
	Titulo.appendChild(titulo);
	Imagen.setAttribute("src",imagen);
	Imagen.setAttribute("class","centerpic");
	Descripcion.appendChild(descripcion);
	Fuente.appendChild(fuente);
	div.appendChild(Titulo);
	div.appendChild(Imagen);
	div.appendChild(Descripcion);
	div.appendChild(Fuente);
	negro = document.createElement('div');
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

