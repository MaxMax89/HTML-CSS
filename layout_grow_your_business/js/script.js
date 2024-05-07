$(function (){
    $(document).on("click", ".header_navbar_menu_icon", activeiteTopMenu);
    $(document).on("click", ".footer_menu_icon", activeiteFooterMenu);



function activeiteTopMenu(){
    var $icon = $(this);
    $icon.toggleClass('active');
    $(".header_navbar_menu").toggleClass('active');
}

    function activeiteFooterMenu(){
        var $icon = $(this);
        $icon.toggleClass('active');
        $(".footer_menu").toggleClass('active');
    }



});