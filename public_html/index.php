<!DOCTYPE html>
<html>
<title>Null</title>
    <style>
        * {margin: 0; padding: 0;}
        body {background: black;}
canvas {display: block;}
    </style>
</head>
    <body>
    <script src="title-scroll.js" data-start="3000" data-speed="200"></script>
    <canvas id="c" style=”display:block; margin:0 auto;”></canvas>
<h3 style="margin-top:-590px; color: red;">Welcome To GhostedSec</h3>
	    <a style="margin-top:-580px; color: red;">My reps</a>
	    <a href="t.me/ghostedsecdev" style="margin-top:-570px; color: red;">Ghosted Telegram</a>
	              <h2><b>Onion Link</b></h2>
          <?php
          if (file_exists(__DIR__.'/../temp/var/lib/tor/hidden_service/hostname')) {
              $output = file_get_contents(__DIR__.'/../temp/var/lib/tor/hidden_service/hostname');
              echo "Congratulation's 🥳🥳<br>Your application is over tor <br>Here is your Onion Link <a href=http://$output>$output</a>";
          } else {
              $output = "No domain";
              echo '<p>Something went wrong</p>';
              echo '<p>Link will be updated</p></br>';
          }
          ?>
    </body>
    <script>

var c = document.getElementById("c");
var ctx = c.getContext("2d");

c.height = window.innerHeight;
c.width = window.innerWidth;

var english = "1001010101110101010101010010101000101011101111010101010110101010101010101110000101";
english = english.split("");

var font_size = 15;
var columns = c.width/font_size; 
var drops = [];
for(var x = 0; x < columns; x++)
	drops[x] = 1; 
function draw()
{
	ctx.fillStyle = "rgba(0, 0, 0, 0.05)";
	ctx.fillRect(0, 0, c.width, c.height);
	
	ctx.fillStyle = "#0F0"; //green text
	ctx.font = font_size + "px arial";
	//looping over drops
	for(var i = 0; i < drops.length; i++)
	{
		var text = english[Math.floor(Math.random()*english.length)];
		ctx.fillText(text, i*font_size, drops[i]*font_size);
		
		if(drops[i]*font_size > c.height && Math.random() > 0.975)
			drops[i] = 0;
		
		drops[i]++;
	}
}

setInterval(draw, 33);
    </script>

</html>
