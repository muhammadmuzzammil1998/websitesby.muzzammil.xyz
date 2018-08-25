/*
                                                                                                                                                                                              
                                                                                                                                                                                              
hhhhhhh                               lllllll                                                                                           IIIIIIIIII                                            
h:::::h                               l:::::l                                                                                           I::::::::I                                            
h:::::h                               l:::::l                                                                                           I::::::::I                                            
h:::::h                               l:::::l                                                                                           II::::::II                                            
 h::::h hhhhh         aaaaaaaaaaaaa    l::::l     ccccccccccccccccyyyyyyy           yyyyyyy ooooooooooo   nnnn  nnnnnnnn                  I::::Innnn  nnnnnnnn        cccccccccccccccc        
 h::::hh:::::hhh      a::::::::::::a   l::::l   cc:::::::::::::::c y:::::y         y:::::yoo:::::::::::oo n:::nn::::::::nn                I::::In:::nn::::::::nn    cc:::::::::::::::c        
 h::::::::::::::hh    aaaaaaaaa:::::a  l::::l  c:::::::::::::::::c  y:::::y       y:::::yo:::::::::::::::on::::::::::::::nn               I::::In::::::::::::::nn  c:::::::::::::::::c        
 h:::::::hhh::::::h            a::::a  l::::l c:::::::cccccc:::::c   y:::::y     y:::::y o:::::ooooo:::::onn:::::::::::::::n              I::::Inn:::::::::::::::nc:::::::cccccc:::::c        
 h::::::h   h::::::h    aaaaaaa:::::a  l::::l c::::::c     ccccccc    y:::::y   y:::::y  o::::o     o::::o  n:::::nnnn:::::n              I::::I  n:::::nnnn:::::nc::::::c     ccccccc        
 h:::::h     h:::::h  aa::::::::::::a  l::::l c:::::c                  y:::::y y:::::y   o::::o     o::::o  n::::n    n::::n              I::::I  n::::n    n::::nc:::::c                     
 h:::::h     h:::::h a::::aaaa::::::a  l::::l c:::::c                   y:::::y:::::y    o::::o     o::::o  n::::n    n::::n              I::::I  n::::n    n::::nc:::::c                     
 h:::::h     h:::::ha::::a    a:::::a  l::::l c::::::c     ccccccc       y:::::::::y     o::::o     o::::o  n::::n    n::::n              I::::I  n::::n    n::::nc::::::c     ccccccc        
 h:::::h     h:::::ha::::a    a:::::a l::::::lc:::::::cccccc:::::c        y:::::::y      o:::::ooooo:::::o  n::::n    n::::n ,,,,,,     II::::::IIn::::n    n::::nc:::::::cccccc:::::c        
 h:::::h     h:::::ha:::::aaaa::::::a l::::::l c:::::::::::::::::c         y:::::y       o:::::::::::::::o  n::::n    n::::n ,::::,     I::::::::In::::n    n::::n c:::::::::::::::::c ...... 
 h:::::h     h:::::h a::::::::::aa:::al::::::l  cc:::::::::::::::c        y:::::y         oo:::::::::::oo   n::::n    n::::n ,::::,     I::::::::In::::n    n::::n  cc:::::::::::::::c .::::. 
 hhhhhhh     hhhhhhh  aaaaaaaaaa  aaaallllllll    cccccccccccccccc       y:::::y            ooooooooooo     nnnnnn    nnnnnn ,:::,,     IIIIIIIIIInnnnnn    nnnnnn    cccccccccccccccc ...... 
                                                                        y:::::y                                             ,:::,                                                             
                                                                       y:::::y                                              ,,,,                                                              
                                                                      y:::::y                                                                                                                 
                                                                     y:::::y                                                                                                                  
                                                                    yyyyyyy                                                                                                                   
                                                                                                                                                                                              
                                                                                                                                                                                              
*/
(function() {
    var width, height, header, canvas, filler, circles, target, animateHeader = true;
    initHeader();
    addListeners();

    function initHeader() {
        width = window.innerWidth; //Getting width
        height = window.innerHeight; //Getting Height
        target = {x: 0, y: height};
        header = document.getElementById('home');
        header.style.height = height+'px';
        canvas = document.getElementById('can');
        canvas.width = width;
        canvas.height = height;
        filler = canvas.getContext('2d');
        // Creating cirles
        circles = []; // Making var "circles" an array
        for(var x = 0; x < width*(1/8); x++)
            circles.push(new Circle()); //Adding to array list
        animate();
    }
    // Event handling
    function addListeners() {
        window.addEventListener('resize', onResize);
    }
    function onResize() {
        width = window.innerWidth;
        height = window.innerHeight;
        header.style.height = height+'px';
        canvas.width = width;
        canvas.height = height;
    }
    function animate() {
        if(animateHeader) {
            filler.clearRect(0,0,width,height);
            for(var circle in circles) {
                circles[circle].draw();
            }
        }
        requestAnimationFrame(animate);
    }
    function Circle() {
        var cir = this;
        (function() {
            cir.pos = {};
            init();
        })();
        function init() {
            cir.pos.x = Math.random()*width;
            cir.pos.y = height+Math.random()*100;
            cir.alpha = 0.1+Math.random()*0.3;
            cir.scale = 0.1+Math.random()*0.3;
            cir.velocity = Math.random();
        }
        cir.draw = function() {
            if(cir.alpha <= 0) {
                init();
            }
            cir.pos.y -= cir.velocity;
            cir.alpha -= 0.0005;
            filler.beginPath();
            filler.arc(cir.pos.x, cir.pos.y, cir.scale*10, 0, 2 * Math.PI, false);
            filler.fillStyle = 'rgba(255,255,255,'+ cir.alpha+')';
            filler.fill();
        };
    }
})();
function jsVersion(){
    return "2.0";
}
$(document).ready(function(){
    $("#spacer").slideUp(1000)
    $(".title").fadeIn(1000)
    $("#tag").delay(1000).fadeIn(1000)
    $("#about").click(function(){
        $("html, body").animate({ scrollTop: $(".about").offset().top }, 1000);
    });
    $("#team").click(function(){
        $("html, body").animate({ scrollTop: $(".team").offset().top }, 1000);
    });
    $("#projects").click(function(){
        $("html, body").animate({ scrollTop: $(".work").offset().top }, 1000);
    });
    $("#hire").click(function(){
        $("html, body").animate({ scrollTop: $(".hire").offset().top }, 1000);
    });
    function detectedMob() {
        if( navigator.userAgent.match(/Android/i)
            || navigator.userAgent.match(/webOS/i)
            || navigator.userAgent.match(/iPhone/i)
            || navigator.userAgent.match(/iPad/i)
            || navigator.userAgent.match(/iPod/i)
            || navigator.userAgent.match(/BlackBerry/i)
            || navigator.userAgent.match(/Windows Phone/i)){
            return true;
        }
        else {
            return false;
        }
    }
    if(detectedMob()){
        $(".nav").fadeOut(1)
        $(".title").css({paddingTop : "50%", fontSize: "1500%"})
        $("#tag").css({fontSize: "500%"})
        $(".founder").css({width: "100%", margin: "2%"})
        $("#fs").css({margin: "2%"})
        $(".hire").css({paddingBottom: "5%"})
        $(".founder h2").css({backgroundColor: "black", color: "white"})
    }
})