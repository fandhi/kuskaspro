$(document).ready(function() {

    //SHOW HIDE BUTTON
    $("#category + .btn.btn-primary").click(function() {
        catheight = $("#category .row").innerHeight();
        if ($(this).hasClass("open"))
        {
            $(this).removeClass("open");
            $("#category").animate({"height": 540})
            $(".btn .oc").show()
            $(".btn .cc").hide()
        } else {
            $(this).addClass("open");
            $("#category").animate({"height": catheight})
            $(".btn .oc").hide()
            $(".btn .cc").show()
        }

    })


});//END DOCUMENT

//SELECT CHAIN
window.onload = function() {
    initListGroup('chainedmenu', document.listmenu0.firstlevel, document.listmenu0.secondlevel, document.listmenu0.thirdlevel, 'savestate')
};

