$(function (){
    $(document).on("click", ".header_navbar_menu_icon", activeiteTopMenu);
    $(document).on("click", ".footer_menu_icon", activeiteFooterMenu);
    $(document).on("click", ".menu_top_icon", activeiteFooterMenu);



function activeiteTopMenu(){
    var $icon = $(this);
    $icon.toggleClass('active');
    $(".header_navbar_menu").toggleClass('active');
    $(".header_media_icons").toggleClass('active');
}

    function activeiteFooterMenu(){
        var $icon = $(this);
        $icon.toggleClass('active');
        $(".footer_menu").toggleClass('active');
    }



});