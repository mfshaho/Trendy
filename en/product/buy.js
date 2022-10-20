
// iPhone 14 Price //
var basePrice = 899;

$(".calculate").change(function() {
    newPrice = basePrice;
    $(".calculate option:selected").each(function() {
        newPrice += $(this).data('price')
    });
    $("#item-price").html(newPrice);
});

