
          
            jQuery(document).ready(function ($) {
                
                $("#getmoreinfo1").click(function() {
                      $("#moreinfo1").slideToggle("slow"); 
                });
                 
                $("#getmoreinfo2").click(function() {
                      $("#moreinfo2").slideToggle("slow"); 
                });
                  
                $("#getmoreinfo3").click(function() {
                      $("#moreinfo3").slideToggle("slow"); 
                });
                 $("#getmoreinfo4").click(function() {
                      $("#moreinfo4").slideToggle("slow"); 
                });
                $("#getmoreinfo5").click(function() {
                      $("#moreinfo5").slideToggle("slow"); 
                });
                $("#getmoreinfo6").click(function() {
                      $("#moreinfo6").slideToggle("slow"); 
                });
                $("#getmoreinfo7").click(function() {
                      $("#moreinfo7").slideToggle("slow"); 
                });
                $("#getmoreinfo8").click(function() {
                      $("#moreinfo8").slideToggle("slow"); 
                });
                $("#getmoreinfo9").click(function() {
                      $("#moreinfo9").slideToggle("slow"); 
                });
                
                
                /*My mobile menu*/
                /*when click on veggoburger...add or remove class */

                $('.toggle').click(function () {
                    $('.nav-mobile').toggleClass('nav-mobile-open');
                });
                
                /*when click on menu item...add or remove class */

                $('.nav-mobile ul li a').click(function () {
                    $('.nav-mobile').toggleClass('nav-mobile-open');
                });
                
            });
      
    
