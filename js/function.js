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
    //Initialize Bootstrap Switch.
    $("input[type='checkbox'][name='onoff']").bootstrapSwitch();
    // initialize with defaults rating stars
    $("#input-id").rating();
    
    //TOGGLE SEARCH CONTENT
    $('.searh-result li .btn span:first-child').click(function() {
    var temp = $(this)
    var filterNum = $(this).parents('li').attr('class').match(/\d+/);
    var resultH = $('.searh-result .result-' + filterNum + ' article').outerHeight();
    $('.result-' + filterNum + ' .result-toggle').animate({'height':resultH});
    $('.searh-result .result-' + filterNum + ' .btn span:first-child').hide();
    $('.searh-result .result-' + filterNum + ' .btn span:last-child').show();
    
    $('.searh-result .result-' + filterNum + ' .btn span:last-child').click(function() {
        $('.result-' + filterNum + ' .result-toggle').animate({'height':'60'});
        $('.searh-result .result-' + filterNum + ' .btn span:first-child').show();
    $('.searh-result .result-' + filterNum + ' .btn span:last-child').hide();
    });
        return false;
    });
});//END DOCUMENT



