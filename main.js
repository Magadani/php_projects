$(document).ready(function () {
    cat();
    brand();
    product();
    // fucntion to display the categories of games in the sidebar
    function cat() {
        $.ajax({
            url: "action.php",
            method: "POST",
            data: {category: 1},
            success: function (data) {
                $("#get_category").html(data);
            }
        });
    }
    // fucntion to display the brand of games in the sidebar
    function brand() {
        $.ajax({
            url: "action.php",
            method: "POST",
            data: {brand: 1},
            success: function (data) {
                $("#get_brand").html(data);
            }
        });
    }

    // function to display the products on the index page
    function product() {
        $.ajax({
            url: "action.php",
            method: "POST",
            data: {getProduct: 1},
            success: function (data) {
                $("#get_product").html(data);
            }
        });
    }

    // ajax request to display the product by the category that is clicked by the user
    $("body").delegate(".category", "click", function () {
        event.preventDefault();
        var cid = $(this).attr('cid');
        $.ajax({
            url: "action.php",
            method: "POST",
            data: {get_selected_category: 1, cat_id: cid},
            success: function (data) {
                $("#get_product").html(data);
            }
        });
    });

    // ajax request to display the product by the brand that is clicked by the user
    $("body").delegate(".selectBrand", "click", function () {
        event.preventDefault();
        var bid = $(this).attr('bid');
        $.ajax({
            url: "action.php",
            method: "POST",
            data: {selectBrand: 1, brand_id: bid},
            success: function (data) {
                $("#get_product").html(data);
            }
        });
    });

    // ajax request for searching a product from the database
    $("#search_btn").click(function () {
        $("#get_product").html("<h3>Loading...</h3>");
        var keyword = $("#search").val();
        if (keyword != "") {
            $.ajax({
                url: "action.php",
                method: "POST",
                data: {search: 1, keyword: keyword},
                success: function (data) {
                    $("#get_product").html(data);
                    if ($("body").width() < 480) {
                        $("body").scrollTop(683);
                    }
                }
            });
        }
    });

    // the register button
    $("#signup_button").click(function (event) {
        event.preventDefault();
        $.ajax({
            url: "register.php",
            method: "POST",
            data: $("form").serialize(),
            success: function (data) {
                $("#signup_msg").html(data);
            }
        });

    });

    // code to login a user
    $("#login").click(function (event) {
        event.preventDefault();
        var email = $("#email").val();
        var pass = $("#password").val();
        $.ajax({
            url: "login.php",
            method: "POST",
            data: {userLogin: 1, userEmail: email, userPassword: pass},
            success: function (data) {
                if (data = "truefsvkjbskvvsbd") {
                    window.location.href = "profile.php"; //only the assignment operator works 
                }
            }
        })
    })
    
   // code for addding products to the cart and displaying alert when product is added
    $("body").delegate("#product", "click", function(event){
        event.preventDefault();
        var p_id = $(this).attr('pid');
        $.ajax({
           url:  "action.php",
           method: "POST",
           data:   {addToProduct:1,proId:p_id},
           success: function(data){
               $("#product_msg").html(data);
           }
        });
        
    });
    
    // code for the cart container 
    $("#cart_container").click(function(event){
        event.preventDefault();
        $.ajax({
           url:  "action.php",
           method: "POST",
           data:   {get_cart_product:1},
           success: function(data){
               $("#cart_product").html(data);
           }
        });
    });
    
    // function for the checkout page
    cart_checkout();
    function cart_checkout(){
        $.ajax({
            url : "action.php",
            method : "POST",
            data : {cart_checkout:1},
            success : function(data){
                $("#cart_checkout").html(data);
            }
        });
    }
     // code for the cart update and delete 
     $("body").delegate(".qty","keyup",function(){
         var pid = $(this).attr("pid");
         var qty = $("#qty-"+pid).val();
         var price = $("#price-"+pid).val();
         var total = qty * price;
         $("#total-"+pid).val(total);
     });
     
     // removing a prodcut from the cart
    $("body").delegate(".remove", "click", function (event) {
        event.preventDefault();
        var pid = $(this).attr("remove_id");
        $.ajax({
            url: "action.php",
            method: "POST",
            data: {removeFromCart: 1, removeId: pid},
            success: function (data) {
                $("#cart_msg").html(data);
                cart_checkout();
            }
        });
    });
    
    // updating a product quantity and price in the database 
    $("body").delegate(".update","click",function(event){
        event.preventDefault();
        var pid = $(this).attr("update_id");
        var qty = $("#qty-"+pid).val();
        var price = $("#price-"+pid).val();
        var total = $("#total-"+pid).val();
        $.ajax({
            url : "action.php",
            method : "POST",
            data : {updateProduct:1,updateId:pid,qty:qty,price:price,total:total},
            success : function(data){
                $("#cart_msg").html(data);
                cart_checkout();
            }
        });
    });
    
    //funcction for pagination
    page();
    function page(){
        $.ajax({
           url : "action.php",
           method: "POST",
           data : {page:1},
           success : function(data){
               $("#pageno").html(data);
           }
        });
    }
    $("body").delegate("#page","click",function(){
		var pn = $(this).attr("page");
		$.ajax({
			url	:	"action.php",
			method	:	"POST",
			data	:	{getProduct:1,setPage:1,pageNumber:pn},
			success	:	function(data){
				$("#get_product").html(data);
			}
		})
	})

});
