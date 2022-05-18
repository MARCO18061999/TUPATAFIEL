function inicio() {
    HoraMostrar();
}

function HoraMostrar() {
    var Mhora = new Date();
    var hora = Mhora.getHours();

    $("#HoraActual").text(hora);
}

inicio();