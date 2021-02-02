var x = window.matchMedia("(max-width: 700px)")
var offset;
myFunction(x) // Call listener function at run time
  x.addListener(myFunction)

function myFunction(x) {
    if (x.matches) { // If media query matches
         offset = 1200;
    } else {
         offset = 870;
    }
  }
  
    var i= 0;
    $(window).scroll(function() {
        var scrollFromTop = $(window).scrollTop();
        if (scrollFromTop >= offset) {
            i++;
            if(i==1)
            {
            console.log(i);
            console.log(scrollFromTop);
            Number.prototype.format = function(n) {
                var r = new RegExp('\\d(?=(\\d{3})+' + (n > 0 ? '\\.' : '$') + ')', 'g');
                  return this.toFixed(Math.max(0, Math.floor(n))).replace(r, '$&,');
              };
             
              $('.count').each(function () {
              $(this).prop('counter', 0).animate({
                  counter: $(this).text()
              }, {
                  duration: 10000,
                  easing: 'easeOutExpo',
                  step: function (step) {
                      $(this).text('' + step.format());
                  }
              });
             });
            } 
        } 
    });

    
       
