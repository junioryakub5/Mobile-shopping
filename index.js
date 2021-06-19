// $(document).ready(function(){
//         $("#banner-area .owl-Carousel").owlCarousel();
// });  
$(document).ready(function(){
    $("#banner-area .owl-carousel").owlCarousel(
    {
        loop:true,
        dots:true,
        items:1,
        autoplay:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
        }
    }
);

$("#top-sale .owl-carousel").owlCarousel(
{
       loop:true, 
       nav:true,
       dots: false,
       responsive:
       {
        0:{
            items:1
        },
        600:{
            items:3
        },            
        1000:{
            items:5
        }
    }

});

$("#new-phone .owl-carousel").owlCarousel(
    {
           loop:true, 
           nav:false,
           dots: false,
           responsive:
           {
            0:{
                items:1
            },
            600:{
                items:3
            },            
            1000:{
                items:5
            }
        }
    
    });

    
$("#blog .owl-carousel").owlCarousel(
    {
           loop:true, 
           nav:true,
           dots: false,
           responsive:
           {
            0:{
                items:1
            },
            600:{
                items:3
            },            
        }
    
    });

    var $grid=$(".grid").isotope({
        itemSelector:'.grid-item',
        layoutMode: 'fitRows'
    });


    $(".button-group").on("click","button",function(){
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({filter:filterValue});
    })
  });


  let $qty_up = $(".qty .qty_up");
  let $qty_down = $(".qty .qty_down");
  let $input = $(".qty .qty_input");
  $qty_up.click(function(e){

      if($input.val() >= 1 && $input.val() <= 9){
        $input.val(function(i,oldval){
            return ++oldval;
        })
      }

      
  })


  $qty_down.click(function(e){
    if($input.val() >= 1 && $input.val() <= 9){
      $input.val(function(i,oldval){
          return --oldval;
      })
    }

    
})