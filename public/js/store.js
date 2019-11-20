$(document).ready(function(){


$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


  $('body').on('click',".add",function(e){
  	e.preventDefault();

  var url = $(this).attr("href");
          var id = $(this).attr('id');
          console.log($(this).parents('.inline').find('.qty').text())

        $.ajax({

           type: 'POST',
          url: url,
          contentType: 'json',
          cache: false,
          processData: false,
          success: function(data){

           $("#qty"+id).html('Qty :'+ data.qty); 
            $(".subtotal").html(data.subtotal);
             // $("#price").html(price+'$');
        
        }});
     
    
    });

  $('body').on('click',".reduce",function(e){
  	e.preventDefault();

  var url = $(this).attr("href");

        var id = $(this).attr('id');
        var row =$(this).parents('.cart-header');

        $.ajax({

           type: 'POST',
                    url: url,
                    contentType: 'json',
                    cache: false,
                    processData: false,
          success: function(data){
            if (!data.qty) {
              row.remove();
            }
           $("#qty"+id).html('Qty :'+ data.qty); 
            $(".subtotal").html(data.subtotal);
             // $("#price").html(price+'$');
        
        }});
     
    
    });










// 	var add=0;
// 	var red=0;
// 	 var total = $('#total').text();
// 	 totalchange=(total.replace(/[^.0-9]/gim,''));
// 	// var priceadd=0;

// 	// var pricered=0;

	
// 		    $(".add").click(function(){
//     	add++;
    	
//     	 var qty = $(this).data('qty');
    	 

//     	  // var price = $(this).data('price');
//     	  // priceadd+=price;
    	 

//     	qty+=add+red;
    	
    	
//     	total2=totalchange*qty;
//     	console.log(total2);

//     	// price=qty*price;
    
//     	// price+=priceadd+pricered;
//     	 var id=$(this).attr('id');  
//         $.ajax({
//         	type: 'GET',
//         	url: '/cart/{id}/add',
//         	data: { id: id ,qty:qty,},
//         	success: function(data){
//         		console.log(data);
//         		 // window.location.href = "/cart";
//          $("#qty").html(qty);
//          $("#total").html(total2+'$');
//           // $("#price").html(price+'$');
      
           
//         }});

        
        	
        
       
    
//     });






  // $(".reduce").click(function(){

  
  	    
  // 	  // red--;

  	     	
  // 	      // var price = $(this).data('price');
  // 	      // if(qty>0&&price>0){
  // 	      // 	 pricered-=price;
  // 	      // }
  	      
  //   	 var url = $(this).data('action');
  //   	  var id=$(this).attr('id'); 
  //   	  // if(qty>0){
  //   	  // 	qty+=red+add;
  //   	  // }
    	 
  //   	 // if(qty>0){
  //   	 // 	 price+=priceadd+pricered;
  //   	 // 	 console.log(price);
  //   	 // }
  //   	 // else {
  //   	 // 	return false;
  //   	 // }
    	
    	 


  //       $.ajax({

  //       	type: 'GET',
  //       	url: url,
  //       	contentType: 'json',
  //       	data: { id: id ,},
  //       	cache: false,
  //       	processData: false,
  //       	success: function(data){
  //       		 window.location.href = "/cart";
  //           $("#qty").html(qty);
  //            // $("#price").html(price+'$');
  //        console.log(data);
  //       }});
     
    
  //   });

	




});

