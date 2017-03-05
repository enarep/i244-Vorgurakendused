 $(document).ready(function () {
        setInterval(function(){
            var back = ["#ff0000","blue","gray","#ffff00","#ff00ff"];
            var rand = back[Math.floor(Math.random() * back.length)];
            $('body').css('background', rand);
            });
        }, 500);

    $(document).ready(function () {
        setInterval(function(){
            var back = ["#ff0000","blue","gray","#ffff00","#ff00ff"];
            var rand = back[Math.floor(Math.random() * back.length)];
            $('div').css('background', rand);
            });
        }, 500);

