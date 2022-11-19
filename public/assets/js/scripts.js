$(document).ready(function (){
    $(".delete-icon").click(function (){
        $(this).parents(".icon:first").remove();
    });

    /*$(".checkboxes input[type=checkbox]").change(function(){
        $(this).next("div").toggleClass("active");
    });*/
});
