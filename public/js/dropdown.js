/*
*BASADO EN NEWMAN SCRIPT 6
*Mediante los selectores de jquery vamos a seleccionar el valor mediante su id
*luego se obitene el evento change 
*al eventoo, le vamos a crear una funcion a ña cual se le pasa el evento que se este generando
*/
$("#state").change(event => {
	/*
	*luego hacer peticion ajax mediante el verbo get, le especificamos la ruta donde se quiere ir
	*uso del componente target para obtener el componente, el cual se esta generando el evento. obteniendo el value
	*el value sera basicamente el ID. luego especificar funcion donde se obtiene una respuesta y estado
	*/
	$.get(`towns/${event.target.value}`, function(res, sta){
		/*console.log(response);  //PARA IMPRIMIR EN CONSOLA
		*ahora hay que recorrer esa respuesta e ir embebiendo dentro del select
		*/
		/*limpiar componentes*/
		$("#town").empty();
		res.forEach(element => {
			/*mediante los selectores se va a acceder al componente x y mediante el append se va a agregar cada opcion*/
			$("#town").append(`<option value=${element.id}>   ${element.name} </option>`);
		});

	});

});