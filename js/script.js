jQuery(function() {

    $('.product__delivery').hide();

    $('.pay__product').click(function() {
        $('.pay__product').hide();
        $('.product__delivery').show();
    });
});
