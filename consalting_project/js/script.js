$(function (){
    $(document).on("click", ".menu_top_icon", activeiteTopMenu);



    function activeiteTopMenu(){
        var $icon = $(this);
        $icon.toggleClass('active');
        $(".menu_top").toggleClass('active');
    }





});