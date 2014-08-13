$(document).ready(function() {

    //SHOW HIDE BUTTON
    $("#category + .btn.btn-default").click(function() {
        catheight = $("#category .row").innerHeight();
        if ($(this).hasClass("open"))
        {
            $(this).removeClass("open");
            $("#category").animate({"height": 540});
            $(".btn .oc").show();
            $(".btn .cc").hide();
        } else {
            $(this).addClass("open");
            $("#category").animate({"height": catheight});
            $(".btn .oc").hide();
            $(".btn .cc").show();
        }

    });
    //Initialize Bootstrap Switch.
    $("input[type='checkbox'][name='onoff']").bootstrapSwitch();
    // initialize with defaults rating stars
    $("#input-id").rating();
    
    //TOGGLE SEARCH CONTENT
    $('#search-result li .btn_read_more').click(function() {
    var temp = $(this);
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
    
    //CLICK SHOW EMAIL & NUMBER
    $(".click-show-email").click(function(){
        $("#uEmail").show();
        $(this).hide();
    });
    $(".click-show-number").click(function(){
        $("#uNumber").show();
        $(this).hide();
    });
    //CLICK TOGGLE PROFILE DESCRIPTION
    $("#profileDesc .click-show-profile-desc").click(function(){
        var updHeight = $("#profileDesc .profile-desc-collapse > div").outerHeight();
        $(".profile-desc-collapse").animate({"height": updHeight},500);
        $(this).hide();
        $("#profileDesc .click-hide-profile-desc").show();
    });
    $("#profileDesc .click-hide-profile-desc").click(function(){
        $(".profile-desc-collapse").animate({"height": "130"},500);
        $(this).hide();
        $("#profileDesc .click-show-profile-desc").show();
    });
});//END DOCUMENT



