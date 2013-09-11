/* Drag and drop handlers*/

//******************************************************OPACA
function handleDragStart(e) {
	this.style.opacity = '0.4';  // this / e.target is the source node.
}

var cols = document.querySelectorAll('.recetas_cal');
[].forEach.call(cols, function(col) {
	col.addEventListener('dragstart', handleDragStart, false);
});

//**********************************************************PISTAS PARA EL OBJETO
function handleDragStart(e) {
		this.style.opacity = '0.4';  // this / e.target is the source node.
}

function handleDragOver(e) {
	if (e.preventDefault) {
		e.preventDefault(); // Necessary. Allows us to drop.
	}
	e.dataTransfer.dropEffect = 'move';  // See the section on the DataTransfer object.
	return false;
}

function handleDragEnter(e) {
	// this / e.target is the current hover target.
	this.classList.add('over');
}

function handleDragLeave(e) {
	this.classList.remove('over');  // this / e.target is previous target element.
}

var cols = document.querySelectorAll('.receta_cel');
[].forEach.call(cols, function(col) {
	col.addEventListener('dragstart', handleDragStart, false);
	col.addEventListener('dragenter', handleDragEnter, false);
	col.addEventListener('dragover', handleDragOver, false);
	col.addEventListener('dragleave', handleDragLeave, false);
	col.addEventListener('drop', handleDrop, true);
	col.addEventListener('dragend', handleDragEnd, true);
});

//*********************************************************
var dragSrcEl = null;
function handleDragEnd(e) {
	// this/e.target is the source node.

	[].forEach.call(cols, function (col) {
		col.classList.remove('over');
	});
	this.style.opacity = '1';  // this / e.target is the source node.
}

//***********************************************************TRANFERENCIA
function handleDragStart(e) {
	// Target (this) element is the source node.
	//this.style.opacity = '0.4';

	dragSrcEl = this;

	e.dataTransfer.setData("Text",e.target.id);
}

//*********************************************************

function handleDrop(e) {
	// this/e.target is current target element.

	if (e.stopPropagation) {
	    e.stopPropagation(); // Stops some browsers from redirecting.
	}

	// Don't do anything if dropping the same column we're dragging.
	if (dragSrcEl != this) {
	    // Set the source column's HTML to the HTML of the columnwe dropped on.
		var data=e.dataTransfer.getData("Text");
		if(dragSrcEl.parentNode.className== "calendario_row"){
			if(e.target.parentNode.parentNode.id == "calendario_table")
				e.target.appendChild(document.getElementById(data));
		}else if(dragSrcEl.parentNode.id== "lista_recetas"){
			e.target.appendChild(document.getElementById(data).cloneNode(true));
		}
	}

	return false;
}

function imprime()
{
	window.print();
}

/*cuando encuentre rows sumarÃ¡ lo que estÃ¡ dentro de los divs de esa row?*/
/*function calcularTotal(){
				var filas=document.getElementsByClassName("calendario_row");
				for(i=0; i<filas.lenght; i++){
					var total=0;
					var celdas=filas[i].getElementsByClassName("calendario_cell receta_cel");
					if(celdas.lenght>0){
						for(j=0; j<celdas.lenght; j++){
							var caloria=celdas[j].getElementsByClassName("calorias");
							total+ = parseInt(caloria[0].innerText);
						}
					}
					var totalcel=document.getElementById("total"+(i+1));
					if(totalcel){
						totalcel.innerHTML(total);
				}
		}
}*/
