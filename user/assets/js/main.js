$(document).ready(function(){
	$('.add').click(function(){
		let id=$(this).attr('id');
		let name=$(this).parent().find('h1').text();
		let price=$(this).parents().find('span').html();
		$.ajax({
			url:'/shop/user/controller/cardController.php',
			type:'post',
			data:{
				id,
				name,
				price,
				action:'avelacnel'
			}
		}).done(function(res){
			console.log(res)
		})
	})

	$('.quantity').click(function(){
		let id=$(this).attr('id');
		let quantity=$(this).val();
		$.ajax({
			url:'/shop/user/controller/cardController.php',
			method:'post',
			data:{
				id,
				quantity,
				action:'change'
			}
		}).done(function(res){
			location.reload();
		})
	})

	$('.delete').click(function(){
		let id=$(this).parents('tr').attr('id');
		alert(id);
		$(this).parents('tr').remove();
		$.ajax({
			url:'/shop/user/controller/cardController.php',
			method:'post',
			data:{
				id,
				action:'delete'
			}
		}).done(function(res){
			// location.reload();
		})
	})

	$('.order').click(function(){
		let name=$(this).parent().prev().prev().prev().prev().prev().text();
		let price=$(this).parent().prev().prev().prev().prev().text();
		let quantity=$(this).parent().prev().prev().prev().find('input').val();
		alert(name);
		$.ajax({
			url:'/shop/user/controller/cardController.php',
			method:'post',
			data:{
				name,
				price,
				quantity,
				action:'orders'
			}
		}).done(function(res){
			console.log("orders")
		})
	})
	$('#searchs').click(function(){
		let name=$(this).prev().val();
		alert("hellp")
		
			$.ajax({
			url:'/shop/user/controller/search.php',
			method:'post',
			data:{
				name,
				action:'search'
			}
	}).done(function(res){
		
		location.reload();
			})
	})



})