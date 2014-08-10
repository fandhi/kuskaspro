$(document).ready(function() {

    //SHOW HIDE BUTTON
    $("#category + .btn.btn-default").click(function() {
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
    $('#search-result li .btn_read_more').click(function() {
    var temp = $(this)
    var filterNum = $(this).parents('li').attr('class').match(/\d+/);
    var resultH = $('#search-result .result-' + filterNum + ' article').outerHeight();
    $('.result-' + filterNum + ' .result-toggle').animate({'height':resultH});
    $('#search-result .result-' + filterNum + ' .btn_read_more').hide();
    $('#search-result .result-' + filterNum + ' .btn_less').show();
    
    $('#search-result .result-' + filterNum + ' .btn_less').click(function() {
        $('.result-' + filterNum + ' .result-toggle').animate({'height':'60'});
        $('#search-result .result-' + filterNum + ' .btn_read_more').show();
    $('#search-result .result-' + filterNum + ' .btn_less').hide();
    });
        return false;
    });
});//END DOCUMENT



