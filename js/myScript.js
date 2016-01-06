/**
 * Created by Vasiliy on 14.10.2015.
 */
jQuery(document).ready(function() {


    var modalItem = jQuery('#modalForItem');

    jQuery('#carouselHomePage .thumbnail').on('click', function () {
        var item;
        var itemParts;
        item = jQuery(this);
        itemParts = ({
            'header': item.find('h5').html(),
            'price': item.find('.price').clone(),
            'rating': item.find('.rating').clone(),
            'img': item.find('img').clone()
        });

        itemParts.img.prependTo(modalItem.find('figure'));
        itemParts.price.insertAfter(modalItem.find('article p'));
        itemParts.rating.prependTo(modalItem.find('footer'));
        modalItem.find('h2').append(itemParts.header);


        jQuery('#carouselHomePage').carousel('pause');
        item.css('opacity', 0);
        jQuery('#modal').show();
        jQuery('#cover').css('z-index', '999')
        jQuery('#cover').animate({'opacity': 0.5}, 600);
        jQuery('body').css({
            'overflow': 'hidden',
            'margin-right': 17
        });
        modalItem.css({
            'top': item.offset().top,
            'left': item.offset().left,
            'z-index': 99999
        });
        modalItem
            .animate({
                'top': 50,
                'left': (window.innerWidth - modalItem.width()) / 2
            }, 900);

    });
    function close() {
        jQuery('#modal').hide();
        jQuery('#carouselHomePage .thumbnail').css('opacity', 1);
        jQuery('#carouselHomePage').carousel('cycle');
        modalItem.find('img').remove();
        modalItem.find('.price').remove();
        modalItem.find('.rating').remove();
        modalItem.find('h2').empty();

        jQuery('#cover')
            .animate({'z-index': -1}, 100)
            .animate({'opacity': 0}, 500);
        jQuery('body').css({
            'overflow': 'scroll',
            'margin-right': 0
        });


    };
    jQuery('#close').on('click', close);
    jQuery('#cover').on('click', close);
});






