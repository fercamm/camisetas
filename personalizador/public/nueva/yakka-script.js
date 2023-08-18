

function verTalles() {

    console.log(jQuery('.woocommerce-product-gallery__image:last img').attr('src'));
    jQuery('.wp-image-86596').attr('src',jQuery('.woocommerce-product-gallery__image:last img').attr('src'));

    jQuery('.unmodal-overlay').fadeIn();
    jQuery('.unmodal-overlay').addClass('loading');
    jQuery('body').addClass('uncode-unmodal-overlay-visible');
    jQuery(window).trigger('unmodal-open');
    jQuery('.quick-view-container').fadeIn();
}