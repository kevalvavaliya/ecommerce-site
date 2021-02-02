   // select dom items 
   const menuBtn = 
   document.querySelector(".menu-btn"); 

const menu = 
   document.querySelector(".menu"); 

const menuNav = 
   document.querySelector(".menu-nav"); 

const menuBranding = 
   document.querySelector(".menu-branding"); 

const navItems = 
   document.querySelectorAll(".nav-item"); 

// Set the initial state of the menu 
let showMenu = false; 

menuBtn.addEventListener("click", toggleMenu); 

function toggleMenu() { 
   if (!showMenu) { 
       menuBtn.classList.add("close"); 
       menu.classList.add("show"); 
       menuNav.classList.add("show"); 
      // menu.style.width="0px";
      
       menuBranding.classList.add("show"); 
       navItems.forEach((item) => 
           item.classList.add("show")); 

       // Reset the menu state 
       showMenu = true; 
   } else { 
       menuBtn.classList.remove("close"); 
       menu.classList.remove("show"); 
       menuNav.classList.remove("show"); 
        //      menu.style.width="75%";
          //     menu.style.right="350px"
       menuBranding.classList.remove("show"); 
       navItems.forEach((item) => 
           item.classList.remove("show")); 

       // Reset the menu state 
       showMenu = false; 
   } 
} 

/********************************STICKY HEADER**********************************************/
$(document).ready(function(){
   var $header = $('#h');
   var $sticky = $header.before($header.clone().addClass("sticky"));

   $(window).on("scroll", function(){
     var scrollFromTop = $(window).scrollTop();
     $("body").toggleClass("scroll", (scrollFromTop > 350));
   });
});

/***********************************NUMBER INCREMENT**************************************/
