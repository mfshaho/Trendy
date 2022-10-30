/* Total Price */
$(document).ready(function () {
    let model = 0, size = 0;
    $('input[name="model"]').on("click", function () {
        model = parseInt($('input[name="model"]:checked').val());

    });

    $('input[name="size"]').on("click", function () {
        size = parseInt($('input[name="size"]:checked').val());
    });

    $(".form-selector-input").on('click', function () {
        let sum = model + size;
        $("#item-price").html("$" + sum + ".00");
    });
});

/* Shipping Fee */
// iPhone 14 Price //
var basePrice = 0;

$(".calculate").change(function() {
    newPrice = basePrice;
    $(".calculate option:selected").each(function() {
        newPrice += $(this).data('price')
    });
    $("#shipping-fee").html(newPrice);
});

/* Hide/Show Elements */
function next1() {
    var radio = document.getElementById("model");
    var text = document.getElementById("color");
    if (radio.checked === true){
        text.style.display = "none";
    } else {
        text.style.display = "block";
    }
}

function next2() {
    var radio = document.getElementById("color");
    var text = document.getElementById("size");
    if (radio.checked === true){
        text.style.display = "none";
    } else {
        text.style.display = "block";
    }
}

function next3() {
    var radio = document.getElementById("size");
    var text = document.getElementById("price-div");
    if (radio.checked === true){
        text.style.display = "none";
    } else {
        text.style.display = "block";
    }
}

/* Form Validation */
