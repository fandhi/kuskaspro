$(document).ready(function(){
    //CLICK CATEGORY
   $('.list-category .btn-block').click(function(event) {
       event.stopPropagation();
      var temp = $(this);
      var filterNum = temp.parents("list-category").attr('class').match(/\d+/);
      $('.cat-rest-' + filterNum).fadeIn();

//      $('.panel.close_more').click(function() {
//         $('.ph_desc.phd_' + filterNum).fadeOut();
//      });
alert(filterNum);
      return false;
   });
   $(document).click(function(event){
      var inpsearch = $('ul.wrp_search');
      var clks = $('.block_htop ul li .click_search');
      
      if(inpsearch.has(event.target).length === 0 && clks.has(event.target).length === 0) {
         inpsearch.animate({'width':'0'}).hide("slow");
      }
   });
});//END DOCUMENT