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