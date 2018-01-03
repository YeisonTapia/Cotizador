$(document).ready(function() {
    tablas();
    publicationlist(1);
    barrainfo();
});

$(document).on('click', '.category', function(e){
	e.preventDefault();
});

$(document).on('click', '.getcotization', function(e){
    e.preventDefault();
});

$(document).on('click', '.remover', function(e){
    e.preventDefault();
});

$(document).on('click', '.additem', function(e){
    e.preventDefault();
});

$(document).on('click', '.limpiar', function(e){
    e.preventDefault();
});

$(document).on('click', '#menu-toggle', function(e){
    e.preventDefault();
});

$(document).on('click', '.botoncategory', function(e){
    e.preventDefault();
});

function trash () {
    $.ajax({
        url: "/cart/trash",
        type: 'GET',
        dataType: 'json',
        success: function(data){

        }
    });
    this.getcotization();
    this.barrainfo();
}


function barrainfo () {
    $.ajax({
        url: "/barrainfo",
        type: 'GET',
        dataType: 'json',
        success: function(data){
            $('.barra-info').html(data);
        }
    });

}

function publicationlist ($id) {
    $.ajax({
        url: "/publicationlist/"+$id,
        type: 'GET',
        dataType: 'json',
        success: function(data){
        	$('#tabla').html(data);
        }
    });
}

function removeitem ($id) {
    $.ajax({
        url: "/cart/delete/"+$id,
        type: 'GET',
        dataType: 'json',
        success: function(data){
            $("#tabla").empty();
        }
    });
    this.getcotization();
    this.barrainfo();
}

function additem ($id) {
    var quantity = $('.quantity').val();
    $.ajax({
        url: "/cart/add/"+$id+"/"+quantity,
        type: 'GET',
        dataType: 'json',
        success: function(data){
            console.log('adding');
        }
    });
    this.barrainfo();
}

function getcotization () {
    $.ajax({
        url: "/cart/show",
        type: 'GET',
        dataType: 'json',
        success: function(data){
            $('#tabla').html(data);
        }
    });
}

function publication ($id) {
    $.ajax({
        url: "/publication/"+$id,
        type: 'GET',
        dataType: 'json',
        success: function(data){
            $('.publication').html(data);
        }
    });
}

$( document ).ajaxStart(function() {
  $( ".loader" ).css( "display", "block" );
});

$( document ).ajaxStop(function() {
  $( ".loader" ).css( "display", "none" );
});

function ocultarmenu () {
    $("#wrapper").toggleClass("toggled");
}

function tablas () {
    $('#myTable').DataTable({
        "language": {
            "lengthMenu": "Mostrar _MENU_ por página",
            "zeroRecords": "No hay datos",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "search": "Buscar:",
            "paginate": {
                first:      "Primero",
                previous:   "Anterior",
                next:       "Siguiente",
                last:       "Ultima"
            },
            "infoFiltered": "(Filrado de un total de  _MAX_ registros)"
        },
        "lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "Todo"]]
    });
}