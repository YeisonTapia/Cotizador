tablas();
$('thead').css('display','none');
$('.cover').css('width','100%');
$('table.dataTable.no-footer').css('border-bottom','1px solid #e9ecef');


$(document).on('click', '.openmodal', function(e){
	e.preventDefault();
});

$(document).on('click', '.paginate_button', function(e){
	$('thead').css('display','none');
	$('.cover').css('width','100%');
	$('table.dataTable.no-footer').css('border-bottom','1px solid #e9ecef');
});

