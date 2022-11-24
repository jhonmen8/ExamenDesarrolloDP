var value;
var nombreColor = '';
var Ajax = function(url, params, callback)
{
	http: "",
	this.obtenResultado = function()
	{
		if(window.XMLHttpRequest)
			http = new XMLHttpRequest();
		else
		http = new ActiveXObject("Microsoft.XMLHTTP");
        http.open("POST", url, true);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.setRequestHeader("Content-length", params.length);
        http.setRequestHeader("Connection", "close");
        http.onreadystatechange = function()
        {
	        if(http.readyState == 4)
	        {
	            if(http.status == 200)
	            {
	                respuesta = http.responseText;
	                callback(respuesta);
	            }
	            else if(http.status == 404)
	            {
	                alert('La url ' + url + ' no existe');
	            }
			}
        };
        http.send(params);
	};
};

$(function()
{

	$('#Descargar').click(function(){
		
		descargar();
	});
	
	$('#Buscar').click(function(){
		const $select = document.querySelector("#miSelect");
		const indice = $select.selectedIndex;
		  if(indice === -1) return; // Esto es cuando no hay elementos
		  const opcionSeleccionada = $select.options[indice];
		  //alert(`Texto: ${opcionSeleccionada.text}. Valor: ${opcionSeleccionada.value}`);
		  nombreColor = opcionSeleccionada.value
		if(nombreColor != '')
		{
			buscarCliente(nombreColor );
		}
		else
		{
			alert('Favor de proporcionar un color.');
		}
	});

	function errorContent(div, span) {
		$(div).toggleClass();
		$(div).toggleClass('col-sm-6 has-error has-feedback');
		$(span).toggleClass();
		$(span).toggleClass('glyphicon glyphicon-remove form-control-feedback');
	}
	
	function successContent(div, span) {
		$(div).toggleClass();
		$(div).toggleClass('col-sm-6 has-success has-feedback');
		$(span).toggleClass();
		$(span).toggleClass('glyphicon glyphicon-ok form-control-feedback');
	}

	function warningContent(div, span) {
		$(div).toggleClass();
		$(div).toggleClass('col-sm-6 has-warning has-feedback');
		$(span).toggleClass();
		$(span).toggleClass('glyphicon glyphicon-warning-sign form-control-feedback');
	}

	function buscarCliente(nombre){
		
		location.href = '/consultarColor.php?nombre='+nombre;
	}
	
	function descargar(){
		const $select = document.querySelector("#miSelect");
		const indice = $select.selectedIndex;
		  if(indice === -1) return; // Esto es cuando no hay elementos
		  const opcionSeleccionada = $select.options[indice];
		  //alert(`Texto: ${opcionSeleccionada.text}. Valor: ${opcionSeleccionada.value}`);
		  nombreColor = opcionSeleccionada.value
		location.href = '/consultarColor.php?nombre='+nombreColor+'&descarga=1';
	}

});