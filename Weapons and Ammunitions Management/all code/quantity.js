$(document).ready(function () {


    $('.increment-btn').click(function (e) {
        e.preventDefault();

        var qty = $(this).closest('.product_data').find('.input-qty').val();

        var value = parseInt(qty, 10);
        value = isNaN(value) ? 0 : value;
        if (value < 10) {
            value++;
            $('.input-qty').val(value);
            var qty = $(this).closest('.product_data').find('.input-qty').val(value);
        }
    });

    $('.decrement-btn').click(function (e) {
        e.preventDefault();

        var qty = $(this).closest('.product_data').find('.input-qty').val();

        var value = parseInt(qty, 10);
        value = isNaN(value) ? 0 : value;
        if (value > 1) {
            value--;
            $('.input-qty').val(value);
            var qty = $(this).closest('.product_data').find('.input-qty').val(value);
        }
    });

    $('.addToCartBtn').click(function (e) {
        e.preventDefault();

        var qty = $(this).closest('.product_data').find('.input-qty').val();
        var prod_name = $(this).val();

        $.ajax({
            method: "POST",
            url: "cart.php",
            data: {
                "prod_name" : prod_name,
                "prod_qty":  qty,
                "scope": "add"
            },
            dataType: "dataType",
            success: function (response) {
                if(response ==201)
                {
                    alert("Product added to cart");
                }
                else if(response ==401)
                {
                    alert("Login to continue");
                }
                else if(response ==500)
                {
                    alert("Something went wrong");
                }
            }
        });
    });

});