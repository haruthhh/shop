$(document).ready(function(){
$('.update').click(function(){
	let id=$(this).parents('tr').attr('id');
	let name=$(this).parents('tr').find('.name').text();
	// alert(name);
	$.ajax({
		url:"../controller/categoryController.php",
		type: 'post',
		data:{
			id,
			name,
			action:'update'
		},
		success:function(result){
			
		}
	});
});
$('.delete').click(function(){
	let id=$(this).parents('tr').attr('id');
	$.ajax({
		url:"../controller/categoryController.php",
		type: 'post',
		data:{
			id,
			action: 'delete'
		},
		success:function(result){
			location.reload();
		}
	});
});




})