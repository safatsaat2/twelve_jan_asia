<?php

function bluckPurchaseSingleCourse()
{
?>
    <div class="sh-container-bulk">
        <div class="quantity-sec-single-23-sh">
            <div class="price">
                £19.99 <span>/Unit Price</span>
            </div>
            <div class="total-price">
                £199.9
            </div>
            <h5>Quantity:</h5>
            <div class="for-without-width-and-flex">
                <button class="button" onclick="decrement()">-</button>
                <input id=demoInput type=number value="10" min=10 max=500 disabled>
                <button class="button" onclick="increment()">+</button>
            </div>
            <div class="add-to-cart-ctm">
                <a href="?add-to-cart=650373" data-quantity="10" class="button product_type_simple add_to_cart_button ajax_add_to_cart sa_ctm_btn" data-product_id="650373" data-product_sku="" aria-label="Add" rel="nofollow">Add to Cart</a>
            </div>
        </div>
    </div>

    <script>
        function increment() {
            document.getElementById('demoInput').stepUp();
        }

        function decrement() {
            document.getElementById('demoInput').stepDown();
        }

        jQuery(document).ready(function($) {
            $("button").click(function() {
                var inputVal = $('#demoInput').val();

                if (inputVal >= 10 && inputVal <= 49) {
                    $(".sa_ctm_btn").attr("data-quantity", inputVal);
                    $(".price").html("£19.99<span>/Unit Price</span>");
                    $(".total-price").html("£" + (inputVal * 19.99).toFixed(2));
                } else if (inputVal >= 50 && inputVal <= 100) {
                    $(".sa_ctm_btn").attr("data-quantity", inputVal);
                    $(".price").html("£17.99<span>/Unit Price</span>");
                    $(".total-price").html("£" + (inputVal * 17.99).toFixed(2));
                } else if (inputVal >= 101 && inputVal <= 500) {
                    $(".sa_ctm_btn").attr("data-quantity", inputVal);
                    $(".price").html("£14.99<span>/Unit Price</span>");
                    $(".total-price").html("£" + (inputVal * 14.99).toFixed(2));
                }
            });
        });
    </script>
<?php
}
add_shortcode('bulk_purchase_single', 'bluckPurchaseSingleCourse');