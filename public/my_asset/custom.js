// $(document).ready(function(){


// showdata();
// cartNoti();
// count();
// $('.addtocartBtn').on('click', function(){

// 		alert("Hello");

// 		var id = $(this).data('id');
// 		//alert (id);
// 		 var photo= $(this).data('photo') ;
// 		var name= $(this).data('name') ;
// 		 var price= $(this).data('price');
// 		 // console.log(price);

// 		 var item = {
// 		 	id:id,
// 		 	photo:photo,
// 		 	name:name,
// 		 	price:price,
// 		 	qty:1,
// 		 };

// 		 var itemlist=localStorage.getItem("items");

// 		 //console.log(itemlist);

// 			var ItemArray;
// 			if(itemlist==null){
// 				ItemArray=[];
// 			}else{
// 				ItemArray=JSON.parse(itemlist);
// 			}
// 			var status=false;
// 			$.each(ItemArray,function(i,v){
// 				if(v.id==id){
// 				//alert("ok");
// 					v.qty++;
// 					status=true;
// 				}
// 			})

// 			if(!status){
// 				ItemArray.push(item);	
// 			}
// 			var itemstring=JSON.stringify(ItemArray);

// 			localStorage.setItem("items", itemstring);
// 			showdata();
// 			cartNoti();

		
// 		})
// 			function showdata(){
// 			var itemlist=localStorage.getItem("items");
// 			var itemArray=JSON.parse(itemlist);
// 			//console.log(itemArray);
// 			var j=1;
// 			var html="";
// 			var total=0;
// 			$.each(itemArray,function(i,v){

// 					var id = v.id;
// 					 // console.log(id);
// 					var photo = v.photo;
// 					var name = v.name;
// 					//console.log(name);
// 					var price = v.price;
// 					var qty = v.qty;


// 				var subtotal=v.qty*v.price;
// 				total+=subtotal;
// 				html+=

// 				`<tr>
// 				<td>${j++}</td>
// 				<td>${name}</td>
// 				<td><img src="${photo}" width="50px" height ="50px"></td>
// 				<td><button class="btnincrease btn btn-info mr-3" data-id=${i}>++</button>${qty}<button class="btndecrease btn btn-danger ml-3" data-id="${i}">--</button></td>
// 				<td>${price+' Ks'}</td>
// 				<td>${subtotal+' Ks'} <button data-id="${i}" class="remove btn btn-primary">Remove</button></td>
// 				</tr>`;

// 			})
// 			html+=`<tr><td colspan="5">Total</td><td>${total+' Ks'}</td></tr>`;
			
// 			$("tbody").html(html);

			

// 		}
// 		function cartNoti(){
// 		var cart = localStorage.getItem('items');
// 		if (cart) {
// 			var cartArray = JSON.parse(cart);
// 			var total =0;
// 			var noti = 0;
// 			$.each(cartArray, function(i,v){

// 				var unitprice = v.price;
// 				var discount = v.discount;
// 				var qty = v.qty;
// 				if (discount) {
// 					var price = discount;
// 				}
// 				else{
// 					var price = unitprice;
// 				}
// 				var subtotal = price * qty;

// 				noti += qty ++;
// 				total += subtotal ++;
// 			})
// 			$('.cartNoti').html(noti);
// 			$('.cartTotal').html(total+' Ks');
// 		}
// 		else{
// 			$('.cartNoti').html(0);
// 			$('.cartTotal').html(0+' Ks');
// 		}
// 	}

// 	function count(){
// 			var totalcount=0;
// 			var itemlist=localStorage.getItem("items");
// 			if(itemlist){
// 				ItemArray=JSON.parse(itemlist);
// 				$.each(ItemArray,function(i,v){
// 					totalcount+=v.qty;
// 				})
// 			}
// 			$(".cartNoti").html(totalcount);
// 		}


// 		$("tbody").on("click",".btnincrease",function(){
// 			// alert("ok");
// 			var id=$(this).data('id');
// 			var itemlist=localStorage.getItem("items");
// 			var itemArray=JSON.parse(itemlist);
// 			//console.log(ItemArray);

// 			$.each(ItemArray,function(i,v){
// 				if(i==id){
// 					v.qty++;
// 				}
// 			})

// 			var itemstring=JSON.stringify(ItemArray);
// 			localStorage.setItem("items", itemstring);
// 			showdata();
// 			count();
// 			cartNoti();
// 		})

// 		$("tbody").on("click",".btndecrease",function(){
// 			//alert("ok");
// 			var id=$(this).data('id');
// 			var itemlist=localStorage.getItem("items");
// 			var itemArray=JSON.parse(itemlist);
// 			//console.log(ItemArray);

// 			$.each(ItemArray,function(i,v){
// 				if(i==id){
// 					v.qty--;
// 					if(v.qty==0){
// 						ItemArray.splice(id,1);
// 					}
// 				}
// 			})

// 			var itemstring=JSON.stringify(ItemArray);
// 			localStorage.setItem("items", itemstring);
// 			showdata();
// 			count();
// 			cartNoti();
// 		})

// 		$("tbody").on("click",".remove",function(){
// 			//alert("ok");
// 			var id=$(this).data("id");
// 			//console.log(id);
// 			var itemlist=localStorage.getItem("items");
// 			var ItemArray=JSON.parse(itemlist);
// 			ItemArray.splice(id,1);
// 			var itemstring=JSON.stringify(ItemArray);
// 			localStorage.setItem("items", itemstring);
// 			showdata();
// 			count();
// 			cartNoti();
// 		})

		
// });























// // alert("ok");



$(document).ready(function(){

			showdata();
			count();

		$(".addtocartBtn").click(function(){
			//alert("ok");
			var id = $(this).data("id");

			//alert(id);

			var name = $(this).data("name");
			//alert(name);
			var photo = $(this).data("photo");
			var price = $(this).data("price");
			var sku = $(this).data("sku");
			var discount = $(this).data("discount");

			 console.log(id+" "+name+" "+photo+" "+price+" "+sku);

			var item = {
				id : id,
				name : name,
				photo : photo,
				price : price,
				sku : sku,
				discount : discount,
				qty : 1
			}
			//console.log(item);

			var itemList = localStorage.getItem('items');

			// console.log(itemlist);

			// console.log(itemList);
			var itemArray;
			if(itemList==null){
				itemArray = [];
			}else{
				var itemArray = JSON.parse(itemList);
			}

			var status=false;

			$.each(itemArray, function(i,v){
				if(v.id==id){
					v.qty++;
					status = true;
				}
			})

			if(!status){
				itemArray.push(item);
			}

			var itemString = JSON.stringify(itemArray);
			localStorage.setItem("items", itemString);

			showdata();
			count();
		});


			function showdata(){
				var itemList = localStorage.getItem("items");

				if(itemList){
					var itemArray = JSON.parse(itemList);
					//console.log(itemArray);

					var html = "";
					var n = 1;
					var total = 0;
					$.each(itemArray, function(i,v){

						var uniqueprice = v.price;
						var discount = v.discount;
						var qty = v.qty;
						if (discount) {
							var price = discount;
						}
						else{
							var price = uniqueprice;
						}

						var subTotal = v.qty*v.price;
						total += subTotal;

						html += `
								<tr>
									<td>
										<button class="btn btn-outline-danger remove btn-sm" data-id="${i}"> 
											<i class="fas fa-times"></i> 
										</button> 
									</td>
									<td> 
										<img src="${v.photo}" class="img-fluid rounded" width="150px" style="border:1px solid #ccc">						
									</td>
									<td>
										<p> ${v.name} <p/>
									</td>
									<td>
										<button class="btn btn-outline-secondary plus_btn" data-id="${i}"> 
											<i class="fa fa-plus"></i>
										</button>
										<span> ${v.qty} </span>
										<button class="btn btn-outline-secondary minus_btn" data-id="${i}">
											<i class="fa fa-minus"></i>
										</button>
									</td>
									<td>
										<p class="text-danger"> 
											${v.price} Ks
										</p>
										<p class="font-weight-lighter"> 
										<del> ${v.discount} Ks </del> </p>
									</td>
									<td>
										${subTotal} Ks
									</td>
								</tr>

							`
					})

					html+=`
							<tr>
								<td colspan="6">
									<h3 class="text-right"> Total : ${total} Ks </h3>
								</td>
							</tr>
						`

					$("tbody").html(html)
					$("#totalPrice").html(total+' Ks');
				}


					$("tbody").on("click",".remove",function(){
						//alert("ok");
						var id=$(this).data("id");
						//console.log(id);
						var itemlist=localStorage.getItem("items");
						var ItemArray=JSON.parse(itemlist);
						ItemArray.splice(id,1);
						var itemstring=JSON.stringify(ItemArray);
						localStorage.setItem("items", itemstring);
						showdata();
						count();
					})
			}

			function count(){

			var totalcount=0;
			var itemlist=localStorage.getItem("items");

			if(itemlist){
				ItemArray=JSON.parse(itemlist);

				$.each(ItemArray,function(i,v){
					totalcount+=v.qty;

			})
			}
			
			$("#cart").html(totalcount);

		}

	$("tbody").on("click", ".plus_btn", function(){

		// alert("ok");

		var id = $(this).data("id");

		//alert(id);

			var itemList = localStorage.getItem('items');
			var itemArray = JSON.parse(itemList);
			console.log(itemArray);

			$.each(itemArray, function(i,v){
				if(i==id){
					v.qty++;
				}
			})

			var itemString = JSON.stringify(itemArray);
			localStorage.setItem("items", itemString);

			showdata();
			count();

	})

	$("tbody").on("click", ".minus_btn", function(){

		// alert("ok");

		var id = $(this).data("id");

		//alert(id);

			var itemList = localStorage.getItem('items');
			var itemArray = JSON.parse(itemList);
			console.log(itemArray);

			$.each(itemArray, function(i,v){
				if(i==id){
					v.qty--;
					if(v.qty == 0){
						itemArray.splice(id, 1);
					}
				}
			})

			var itemString = JSON.stringify(itemArray);
			localStorage.setItem("items", itemString);

			showdata();
			count();

	})

});