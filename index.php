<!DOCTYPE html>

<html>
<head>
     <title>Tap Order</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
</head>

<style type="text/css">
.menu{
	border: solid;
	border-color: black;
	min-height: 2em;
	border-radius: 10px;
}
#submit-btn{
  float: right;
}

#show_total{
  font-size: 14;
  font-weight: bold;
  font-family: Tahoma;
}

thead{
  font-weight: bold;
}
footer{
  position: absolute;
  bottom: 0;
}
</style>

<body>
<header>
<nav class="navbar navbar-inverse">
	<div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="">Tap Order</a>
    </div>
	</div>
</nav>
</header>

<content>
<div class="container">
<!--Modal starts here -->
<div class="modal_box">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#foodModal">Add Food</button>


<!-- Modal -->
<div id="foodModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
    	<div class="modal-header">
    		<button type="button" class="close" data-dismiss="modal">&times;</button>
        	<h4 class="modal-title">Menu List</h4>
      	</div>
    	<div class="modal-body">
        	<?php include "get_menu.php"; ?>
      	</div>
    	<div class="modal-footer">
        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--Modal ends here -->

<!-- Content for selected food goes here -->
</div>
<hr>
<h3>Order List</h3><h4>Table Number: <?php echo $_GET['table']; ?></h4>

<form id="order_submit" method="post" action="submit_order.php">
<input type="hidden" name="num" value= <?php echo $_GET['table']; ?> >
<div class="shoppingcart">
<table id="orderlisttable" class="table table-striped">
  <thead>
    <tr>
      <td>Item</td>
      <td>Price (RM)</td>
    </tr>
  </thead>
  <tbody id="orderlisttablebody">
      
  </tbody>
  <tfoot>
    <tr>
      <td align="right" id="show_total" >Total Price (RM)</td>
      <td id="total_amount"></td>
      <input type="hidden" id="total" name="total">
      <input type="hidden" id="itemnum" name="itemnum">
    </tr>
  </tfoot>
</table>
<input type="submit" value="Submit Order" class="btn btn-success">
</div>
</form>
</div>
</content>
<footer>made by <a href="http://lucidvirtu.github.io">u/lucidvirtu</a></footer>
</body>

<script>
//JS for order list data
//create array that will hold all ordered products
        var shoppingCart = [];
        
        //this function manipulates DOM and displays content of our shopping cart
        function displayOrderList(){
            var orderlisttablebody=document.getElementById("orderlisttablebody");
            //ensure we delete all previously added rows from ordered products table
            while(orderlisttablebody.rows.length>0) {
                orderlisttablebody.deleteRow(0);
            }
                   
            //variable to hold total price of shopping cart
            var total_price=0;
            var itemnum = 0;
            var itemName = "";
            //iterate over array of objects
            for(var item in shoppingCart){
                //add new row      
                var row=orderlisttablebody.insertRow();
                //create 2 cells for product properties 
                var cellItem = row.insertCell(0);
                var cellPrice = row.insertCell(1);
                var cellInput = row.insertCell(2);
                //fill cells with values from current product object of our array
                cellItem.innerHTML = shoppingCart[item].Item;
                cellPrice.innerHTML = shoppingCart[item].Price;
                //document.getElementById("testtxt").innerHTML = shoppingCart[item].Item;
                total_price+=shoppingCart[item].Price;
                itemnum+=1;
                itemName = shoppingCart[item].Item;
                itemID = "item"+itemnum;
                cellInput.innerHTML="<input type='hidden' name='"+itemID+"' value='"+itemName+"'>";

              }
            //fill total cost of our shopping cart 
            document.getElementById("total_amount").innerHTML=total_price;
            document.getElementById("total").value=total_price;
            document.getElementById("itemnum").value=itemnum;
            document.getElementById("testtxt").innerHTML=itemnum;
        }
        
        
        function AddToList(item,price){
           //Below we create JavaScript Object that will hold three properties you have mentioned:    Name,Description and Price
           var singleProduct = {};
           //Fill the product object with data
           singleProduct.Item=item;
           singleProduct.Price=price;
           //Add newly created product to our shopping cart 
           shoppingCart.push(singleProduct);
           //call display function to show on screen
           displayOrderList();
           
        } 
</script>

<!--spot for unused code
cellRemove.innerHTML = ("<button type='button' class='btn btn-warning' onclick=(function(_this){_this.parentNode.removeParent(_this);})(this)>Remove</button>");

-->
</html>