$(document).ready(function(){
    //CLICK CATEGORY
   $('.list-category .btn-block').click(function() {
      var temp = $(this);
      var filterNum = temp.parents("list-category").attr('class').match(/\d+/);
      $('.catg-' + filterNum + " .cat-rest").fadeIn();

//      $('.panel.close_more').click(function() {
//         $('.ph_desc.phd_' + filterNum).fadeOut();
//      });
alert(filterNum);
      return false;
   });
});//END DOCUMENT