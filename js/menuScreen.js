$(function () {

    $(".btnAbrir").click(function () {
        $("#menuNuevo").addClass('open')
        //$("#navMovil").css('z-index', '2')
        $("#navMovil").css('display', 'none')
        $("#navMini").css('display', 'none')
        $("#flechaFlotante").css("visibility","hidden");
        $("#inicio").addClass("filter")
        $(".titulo-principal").addClass("filter")
        $(".counter").addClass("filter")
        $("#nosotros").addClass("filter")
        $("#beneficios").addClass("filter")
        $("#equipo").addClass("filter")
        $("#presencia").addClass("filter")
        $("#clientes").addClass("filter")
        $("#contacto").addClass("filter")
        $("#footer").addClass("filter")
        $("body").css("overflow", "hidden")

    })

    $("#btnCerrar").click(function () {
        $("#menuNuevo").removeClass('open')
        //$("#navMovil").css('z-index', '999')
        $("#navMovil").css('display', 'flex')
        $("#navMini").css('display', 'flex')
        $("#inicio").removeClass("filter")
        $(".titulo-principal").removeClass("filter")
        $(".counter").removeClass("filter")
        $("#nosotros").removeClass("filter")
        $("#beneficios").removeClass("filter")
        $("#equipo").removeClass("filter")
        $("#presencia").removeClass("filter")
        $("#clientes").removeClass("filter")
        $("#contacto").removeClass("filter")
        $("#footer").removeClass("filter")
        $("body").css("overflow", "auto")

        if ($(document).scrollTop() >= 500) {
            $("#flechaFlotante").css("visibility", "invisible");
        }
        else {
            $("#flechaFlotante").css("visibility", "visible");
        }

    })

    $(".link").click(function () {
        $("#menuNuevo").removeClass('open')
        $("#navMovil").css('display', 'flex')

        $("#inicio").removeClass("filter")
        $(".titulo-principal").removeClass("filter")
        $(".counter").removeClass("filter")
        $("#nosotros").removeClass("filter")
        $("#beneficios").removeClass("filter")
        $("#equipo").removeClass("filter")
        $("#presencia").removeClass("filter")
        $("#clientes").removeClass("filter")
        $("#contacto").removeClass("filter")
        $("#footer").removeClass("filter")
        $("body").css("overflow", "auto")

    })
   
})
