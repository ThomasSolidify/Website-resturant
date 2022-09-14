$(document).ready(function(){
	cat();
	getRecord();
	product();
	//funtion fetching category record from database when it is called
	function cat(){
		$.ajax({
			url	:	"javascriptmain.php",
			method:	"POST",
			data	:	{category:1},
			success	:	function(data){
				$("#get_category").html(data);
				
			}
		})
	}
	//getRecord() gets a unique record
	function getRecord(){
		$.ajax({
			url	:	"javascriptmain.php",
			method:	"POST",
			data	:	{getRecord:1},
			success	:	function(data){
				$("#get_getRecord").html(data);
			}
		})
	}
	//product() is a funtion fetching product record from database whenever page is load
		function product(){
		$.ajax({
			url	:	"javascriptmain.php",
			method:	"POST",
			data	:	{getProduct:1},
			success	:	function(data){
				$("#get_product").html(data);
			}
		})
	}
	
	$("body").delegate(".category","click",function(event){
		$("#get_product").html("");
		event.preventDefault();
		var cid = $(this).attr('cid');
		
			$.ajax({
			url		:	"javascriptmain.php",
			method	:	"POST",
			data	:	{get_seleted_Category:1,cat_id:cid},
			success	:	function(data){
				$("#get_product").html(data);
				if($("body").width() < 480){
					$("body").scrollTop(683);
				}
			}
		})
	
	})




	//pass user Information before checkout end here

	//Add Product into Cart
	$("body").delegate("#product","click",function(event){
		var pid = $(this).attr("pid");
		event.preventDefault();
		$(".overlay").show();
		$.ajax({
			url : "javascriptmain.php",
			method : "POST",
			data : {addToCart:1,proId:pid},
			success : function(data){
				count_item();
				getCartItem();
				$('#product_msg').html(data);
				$('.overlay').hide();
			}
		})
	})
	//Add Product into Cart End Here
	//Count user cart items funtion
	count_item();
	function count_item(){
		$.ajax({
			url : "javascriptmain.php",
			method : "POST",
			data : {count_item:1},
			success : function(data){
				$(".badge").html(data);
			}
		})
	}


	//Make drop down menu from function
	getCartItem();
	function getCartItem(){
		$.ajax({
			url : "javascriptmain.php",
			method : "POST",
			data : {Common:1,getCartItem:1},
			success : function(data){
				$("#cart_product").html(data);
			}
		})
	}

	


	

})




















