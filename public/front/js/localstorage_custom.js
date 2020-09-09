// file name=public/frontend/js/loca lstorage_custom.js

//id/name/photo
$(document).ready(function(){
	//alert('h1');
	showdata();
	shownoticount();
	$.ajaxSetup({
		headers:{
			'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
		}
	});
	
	
	$('.btn_add_to_cart').click(function(){
		//alert('h1');
		var id=$(this).data('id');
		var name=$(this).data('name');
		var photo=$(this).data('photo');
		var price=$(this).data('price');
        var discount=$(this).data('discount');
        //var user_id=$(this).data('user_id');
        //console.log(id);
		//console.log(name);
		//console.log(photo);
		//console.log(price);
		//console.log(discount);

   /*var cart=localStorage.getItem('cart');
   if(!cart)
   {
   	var mycart=new Array();
   }else{
   	var mycart=JSON.parse(cart);
   }
   var item={
   	        id:id,
        	name:name,
        	photo:photo,
        	price:price,
        	discount:discount,
        	user_id:user_id,
        	qty:1
   };
   var hasid=false;
   $.each(mycart,function(i,v){
   	if(v.id==id)
   	{
   		hasid=true;
   		v.qty++;
   	}
   })
   if(!hasid){
   	mycart.push(item);
   }
   //console.log(data);
   localStorage.setItem('cart',JSON.stringify(mycart));
   //showdata();
   shownoticount();
 });
	function showcart()
	{
		var mycart=localStorage.getItem('cart');
		if(mycart)
		{
			var mycart_obj=JSON.parse(mycart);
			var hmtl='';
			//var showtable="";
			var j=1;
			var total=0;
			var subtotal=0;

			//loop obj
			 $.each(mycart_obj,function(i,v){
			 	subtotal+=v.qty*v.price;
			 	total+=subtotal;
			 	html+=`<tr>
			 	           
			 	            <td>
			 	               <button class="btn btn-outline-danger remove btn-sm" style="border-radius:50%" data-id="${i}">
                               <i class="icofont-close-line"></i>
			 	               </button>
			 	            <td><img src="${v.photo}" class="cartImg"></td>   
			 	            <td><p>${v.name}</p></td>
			 	            <td>
                               <button class="btn btn-outline-secondary plus_btn" data-id=${i}>
                               <i class="icofont-plus"></i>
                               </button>
			 	            </td>
			 	            <td><p>${v.qty}</p></td>
			 	            <td>
                               <button class="btn btn-outline-secondary minus_btn" data-id=${i}>
                               <i class="icofont-minus"></i>
                               </button>
			 	            </td>
			 	            <td><p class="text-danger">${v.price}Ks</p>
                            <p class="font-weight-lighter"><del>${v.discount}Ks</del></p>
			 	            </td>
			 	            <td>${subtotal}Ks</td>
			 	            </tr>`;
			 	        });
			 html+=`<h3 class='text-right'>Total:${total}Ks</h3>`
			 $('#shoppingcart_table').html(html);
			 var cart_view='';
			 cart_view='There are your choice items to buy';
			 $('.cart_view').html(cart_view);
             }else{
             	$('#shoppingcart_table').html('');
             	$('.cart_view').html('There are no items in your cart!')
             }
		}
		//qty plus
		$('#shoppingcart_table').on('click','.plus_btn',function(){
			var id=$(this).data('id');
			var mycart=localStorage.getItem('cart');
			if(mycart)
			{
				var mycart_obj=JSON.parse(mycart);
				$.each(mycart_obj,function(i,v){
					if(i==id){
						v.qty++;
					}
				});
				localStorage.setItem('cart',JSON.stringify(mycart_obj));
				showdata();
				shownoticount();
			}
		});
		//qty minus
		$('#shoppingcart_table').on('click','.minus_btn',function(){
			var id=$(this).data('id');
			var mycart=localStorage.getItem('cart');
			if(mycart)
			{
				var mycart_obj=JSON.parse(mycart);
				$.each(mycart_obj,function(i,v){
					if(i==id){
						v.qty--;
						if(v.qty==0){
							var ans=confirm("Are You Sure To Reduce?");
							if(ans)
							{
								mycart_obj.splice(id,1);
							}else{
								v.qty=1;
							}
						}
					}
				});
				localStorage.setItem('cart',JSON.stringify(mycart_obj));
				showdata();
				shownoticount();
			}
		})
		//remove data
		$('#shoppingcart_table').on('click','.remove',function(){
			var id=$(this).data('id');
			var mycart=localStorage.getItem('cart');
			if(mycart){
				var mycart_obj=JSON.parse(mycart);
				$.each(mycart_obj,function(i,v){
					if(i==id){
						var ans=confirm("Are You Sure To Reduce?");
						
							if(ans){
								mycart_obj.splice(id,1);
							
							}
						}
					
				});
				localStorage.setItem('cart',JSON.stringify(mycart_obj));
				showdata();
				shownoticount();
			}
		})
		function shownoticount()
		{
			var mycart=localStorage.getItem('cart');
			if(mycart){
				var mycart_obj=JSON.parse(mycart);
				var cart=0;
				var total=0;
				$.each(mycart_obj,function(i,v){
					cart+=v.qty;
					var price=parseInt(v.price);
					total+=price;
	 			$('.cartNoti').html(noti);
			});
				var totalprice=total+'ks';
				$('.cartNoti').html(cart);
				$(.'price').html(totalprice);
		}else{
			var totalprice=0+'ks';
				$('.cartNoti').html(0);
				$('.price').html(totalprice);
		}
       }
	//For But Now
	$('.checkoutbtn').click(function(){
		var note=$('.note').val();
		//var total=$('.total').val();
		var mycart=localStorage.getItem('cart');
		if(mycart){
			//var shopArray=JSON.parse(shopString);
			$.post('/orders',{mycart:mycart,note:note},function(res){
				
					alert(res);
					localStorage.clear();
					showcart();
				
			})
		}
	})*/
data={
	id:id,
	name:name,
	photo:photo,
	price:price,
	discount:discount,
	qty:1
};
//console.log(typeof(item));
//typeof=get data type eg(array||obj||string)
var mycart=localStorage.getItem('item');
//if we do not have localstorage create new array
if(!mycart)
{
	var myitem=new Array();
}else{
	var myitem=JSON.parse(mycart);
}
var hasid=false;
$.each(myitem,function(i,v){
	if(v.id==id)
	{
		hasid=true;
		v.qty++;
	}
})
if(!hasid){
	myitem.push(data);
}
 //console.log(data);
 localStorage.setItem('item', JSON.stringify(myitem));
 showdata();
 shownoticount();
        });
function showdata(){
	var mycart=localStorage.getItem('item');
	if(mycart){
		var mycart_obj=JSON.parse(mycart);
		var html='';
		var showtable="";
		var j=1;
		var total=0;
		//loop obj
		$.each(mycart_obj,function(i,v){
			var subtotal=v.qty*v.price;
			total+=subtotal;
			showtable+=`<tr>
                        <td>${j++}</td>
                        <td><img src="${v.photo}" width='120px' height = '100px'></td>
                        <td>${v.name}</td>
                        <td>${v.price}</td>
                        <td>${v.discount}</td>
                        <td class="text-dark font-weight-bold">${v.price*v.qty}</td>
                        <td>
                        <button class="btn btn-outline-secondary plus_btn data-id="${i}">+</button>
                        <span class="qty">${v.qty}</span>
                        <button class="btn btn-outline-secondary minus_btn data-id="${i}">-</button>
                        </td>
                        <td>
                        <button class="btn btn-outline-danger rounded-circle text-dark delete" 
                        data-id="${i}">X</button>
                        </td>
                       </tr>`;
		});
		showtable+=`<tr><td colspan=5>Total</td>
		                <td>${total}</td></tr>`;
		                $('#tbody').html(showtable);
	}
}
//qty pius
$('#tbody').on('click','.plus_btn',function(){
			var id=$(this).data('id');
			var mycart=localStorage.getItem('item');
			if(mycart)
			{
				var mycart_obj=JSON.parse(mycart);
				$.each(mycart_obj,function(i,v){
					if(i==id){
						v.qty++;
					}
				});
				localStorage.setItem('item',JSON.stringify(mycart_obj));
				showdata();
				shownoticount();
			}
		})
//qty minus
		$('#tbody').on('click','.minus_btn',function(){
			var id=$(this).data('id');
			var mycart=localStorage.getItem('item');
			if(mycart)
			{
				var mycart_obj=JSON.parse(mycart);
				$.each(mycart_obj,function(i,v){
					if(i==id){
						v.qty--;
						if(v.qty==0){
							var ans=confirm("Are You Sure To Reduce?");
							if(ans)
							{
								mycart_obj.splice(i,1);
							}else{
								v.qty=1;
							}
						}
					}
				});
				localStorage.setItem('item',JSON.stringify(mycart_obj));
				showdata();
				shownoticount();
			}
		})
		//delete data
		$('#tbody').on('click','.delete',function(){
			var id=$(this).data('id');
			var mycart=localStorage.getItem('item');
			if(mycart){
				var mycart_obj=JSON.parse(mycart);
				$.each(mycart_obj,function(i,v){
					if(i==id){
						var ans=confirm("Are You Sure To Reduce?");
						
							if(ans){
								mycart_obj.splice(i,1);
							
							}else{
								v.qty=1;
							}
						}
					
				});
				localStorage.setItem('item',JSON.stringify(mycart_obj));
				showdata();
				shownoticount();
			}
		})
		function shownoticount()
		{
			var mycart=localStorage.getItem('item');
			if(mycart){
				var noti=0;
				var mycart_obj=JSON.parse(mycart);
				$.each(mycart_obj,function(i,v){
					noti+=v.qty;
			});
				$('.cartnoti').html(noti);
				
		}
       }
	
	$('.checkoutbtn').on('click',function(){
		var notes=$('.notes').val();
		//var total=$('.total').val();
		var mycart=localStorage.getItem('item');
		if(mycart){
			//var shopArray=JSON.parse(shopString);
			$.post('/orders',{mycart:mycart,notes:notes},function(res){
				if(res){
					alert(res);
					localStorage.clear();
					getData();

				}
			})
		}
	})
})
		
		
		
		
		
		
