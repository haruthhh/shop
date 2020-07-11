$(document).ready(function(){
$('.update').click(function(){
	let id= $(this).parents('tr').attr('id');
	let name=$(this).parents('tr').find('.name').text();
	let price=$(this).parents('tr').find('.price').text();
	let description=$(this).parents('tr').find('.description').text();
	
		$.ajax({
		url:"../controller/productsController.php",
		type: 'post',
		data:{
			id,
			name,
			price,
			description,
			action: 'update'
		},
		success:function(result){

		}
	});
});
$('.delete').click(function(){
	let id = $(this).parents('tr').attr('id');
	$(this).parents('tr').remove();
	$.ajax({
		url:"../controller/productsController.php",
		type:'post',
		data:{
			id,
			action: 'delete'
		},
	 	success:function(result){

	 	}
	});
})














})