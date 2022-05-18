
<div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
	<img class="me-3" src="../public/svg/0001.svg" alt="" width="48" height="38">
	<div class="lh-1">
		<h1 class="h6 mb-0 text-white lh-1">Hola, bienvenido(a)</h1>
		<span id="currentTime"></span>
	</div>
</div>

<script>
	fechayhora();
	function fechayhora() {
		var today = new Date();
		var anio = today.getFullYear() ;
		var mes = today.getMonth()+1 ;
		var dia = today.getDate() ;	
		var mes_n = "";
		if (mes == "1") { mes_n = "Enero";}
		if (mes == "2") { mes_n = "Febrero";}
		if (mes == "3") { mes_n = "Marzo";}
		if (mes == "4") { mes_n = "Abril";}
		if (mes == "5") { mes_n = "Mayo";}
		if (mes == "6") { mes_n = "Junio";}
		if (mes == "7") { mes_n = "Julio";}
		if (mes == "8") { mes_n = "Agosto";}
		if (mes == "9") { mes_n = "Septiembre";}
		if (mes == "10") { mes_n = "Octubre";}
		if (mes == "11") { mes_n = "Noviembre";}
		if (mes == "12") { mes_n = "Diciembre";}
		var hours = today.getHours() ;		
		var minutes = today.getMinutes() ;
		var seconds = today.getSeconds() ;
		if (hours < 10) hours = "0" + hours;
		if (minutes < 10) minutes = "0" + minutes;
		if (seconds < 10) seconds = "0" + seconds;
		var time = dia+" de "+mes_n+" del "+anio+"&nbsp;&nbsp;"+ hours + ":" + minutes + ":" + seconds;
		document.getElementById("currentTime").innerHTML = time;
		setTimeout("fechayhora()", 1000);
	}
</script>