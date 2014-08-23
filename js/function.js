$(document).ready(function() {

    //SHOW HIDE BUTTON
    /*$("#category + .btn.btn-default").click(function() {
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
    });*/

    //Initialize Bootstrap Switch.
    $("input[type='checkbox'][name='onoff']").bootstrapSwitch();
    // initialize with defaults rating stars
    $("#input-id").rating();
    
    //TOGGLE SEARCH CONTENT
    $('#search-result li .btn_read_more').click(function() {
        var temp = $(this);
        var filterNum = $(this).parents('li').attr('class').match(/\d+/);
        var resultH = $('#search-result .result-' + filterNum + ' article').outerHeight();
        $('.result-' + filterNum + ' .result-toggle').animate({'height': resultH});
        $('#search-result .result-' + filterNum + ' .btn_read_more').hide();
        $('#search-result .result-' + filterNum + ' .btn_less').show();

        $('#search-result .result-' + filterNum + ' .btn_less').click(function() {
            $('.result-' + filterNum + ' .result-toggle').animate({'height': '60'});
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
        $(".profile-desc-collapse").animate({"height": "123"},500);
        $(this).hide();
        $("#profileDesc .click-show-profile-desc").show();
    });
    
     //TOGGLE USER COMMENT CONTENT
    $('.media-list li .btn_read_more').click(function() {
        var temp = $(this);
        var filterNum = $(this).parents('li').attr('id').match(/\d+/);
        var commentH = $('.media-list #comment' + filterNum + ' .body-comment').outerHeight();
        $('#comment' + filterNum + ' .ua-comment').animate({'height': commentH});
        $('.media-list #comment' + filterNum + ' .btn_read_more').hide();
        $('.media-list #comment' + filterNum + ' .btn_less').show();

        $('.media-list #comment' + filterNum + ' .btn_less').click(function() {
            $('#comment' + filterNum + ' .ua-comment').animate({'height': '60'});
            $('.media-list #comment' + filterNum + ' .btn_read_more').show();
            $('.media-list #comment' + filterNum + ' .btn_less').hide();
        });
        return false;
    });
    
    //HOVER UNVERIFY
    if( $(".cos-ratings .unv").mouseover(function(){
        $(".cos-ratings .unv").hide();
        $(".cos-ratings .ver").show();
    })){
         
    } if ($(".cos-ratings .ver").mouseleave(function(){
        $(".cos-ratings .unv").show();
        $(".cos-ratings .ver").hide();
    }));
    
    //EDITABLES 
    $.fn.editable.defaults.mode = 'inline';
    $(".profile-edittable").editable({url: '/post'}) ;
    $('#expertise').editable("option", "validate", function(v){
           if(!v) return "Required field";
    });
    $("#salaryRange").editable({
        validate: function(value) {
            if($.trim(value) == "") return "This field is required";
        }
    });
    $("#name").editable({
        validate: function(value) {
            if($.trim(value) == "") return "This field is required";
        }
    });
    $("#age").editable({
        validate: function(value) {
            if($.trim(value) == "") return "This field is required";
        }
    });
    $.mockjax({
        url: '/gender',
        responseText: {
            0: 'Guest',
            1: 'Service',
            2: 'Customer',
            3: 'Operator',
            4: 'Support',
            5: 'Admin'
        }
    });
//    $("#gender").editable({
//        prepend: "Not selected",
//        source: [
//            {value: 1, text: "Male"},
//            {value: 2, text: "Female"}
//        ],
//        display: function(value, sourceData) {
//            var colors = {"": "gray", 1: "green", 2: "blue"},
//                    elem = $.grep(sourceData, function(o){return o.value == value;});
//            if(elem.length) {
//                $(this).text().text(elem[0].text).css("color", colors[value]);
//            }else{
//                $(this).empty();
//            }
//        }
//    });
    $("#location").editable({
        validate: function(value) {
            if($.trim(value) == "") return "This field is required";
        }
    });
    $("#salaryRange").editable({
        validate: function(value) {
            if($.trim(value) == "") return "This field is required";
        }
    });
    $("#contact").editable({
        validate: function(value) {
            if($.trim(value) == "") return "This field is required";
        }
    });
    $("#description").editable({
        validate: function(value) {
            if($.trim(value) == "") return "This field is required";
        }
    });
    //automatically show next editable
    $(".profile-edittable").on("save.newuser", function(){
        var that = this;
        setTimeout(function(){
            $(that).closest("tr"),next().find(".profile-edittable").editable("show");
        }, 200);
    });
    //SAVE CONTENT EDITABLE
    $("#saveBtn").click(function(){
        $(".profile-edittable").editable("submit", {
            ur: "/newuser",
            ajaxOptions: {
                dataType: "json"
            },
            success: function(data, config) {
                if(data && data.id) {
                    $this.editable("option", "pk", data.id);
                    $(this).removeClass("editable-unsaved");
                    var msg = "New user created! ";
                    $("#msg").addClass("aler-success").removeClass("alert-error").html(msg).show();
                    $("#saveBtn").hide();
                    $(this).off("save.newuser");
                } else if("save.newuser"){
                    config.error.call(this, data.errors);
                };
            },
                    error: function(errors) {
                var msg = "";
                if(errors && errors.responseText) {
                    msg = errors.responseText;
                } else {
                    $.each(errors, function(k, v) {
                        msg += k+":"+v+"<br>";
                    });
                }
                $("#msg").removeClass("alert-success").addClass("alert-error").html(msg).show();
                    }
        });
        
        $("#resetBtn").click(function() {
            $(".myeditable").editable("setValue", null)  //clear values
                    .editable("option", "pk", null)          //clear pk
                    .removeClass("editable-unsaved");        //remove bold css

            $("#saveBtn").show();
            $("#msg").hide();
        });
    });    //END EDITABLE
    
});//END DOCUMENT



