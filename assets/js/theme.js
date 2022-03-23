// alternative to DOMContentLoaded
document.onreadystatechange = function () {
    if (document.readyState == "interactive") {
        
window.toggle_menu = function toggle_menu(el, toOpen){
        if(toOpen){
            el.parentNode.classList.add('opened');
            el.parentNode.classList.remove('closed');
        }else{
            el.parentElement.classList.add('closed');
            el.parentNode.classList.remove('opened');
        }
    };
        
    //scroll up button
    var mybutton = document.getElementById("to_top");
    var anchor = document.getElementById("to_top_anchor");
    var wheight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
    window.onscroll = function() {scrollFunction();};

    // When the user scrolls down 30px from the top of the document, show the button
    window.scrollFunction = function scrollFunction() {
        var bright = (document.body.clientWidth - 1366 <= 0 )?'16 px':(document.body.clientWidth - 1366)/2 + 16 + 'px';
      if(anchor.getBoundingClientRect().top - wheight <= 0){
        mybutton.style.position = "absolute";                  
        mybutton.style.right = "16px";          
      } else if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
        mybutton.style.display = "block";
        mybutton.style.position = "fixed";
        mybutton.style.right = bright;
      } else {
        mybutton.style.display = "none";
        mybutton.style.position = "fixed";  
        mybutton.style.right = bright;
      }
    };

    // When the user clicks on the button, scroll to the top of the document
    window.topFunction = function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    };
    
    }};