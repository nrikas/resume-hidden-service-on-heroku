<!DOCTYPE html>
<html>
<title>GhostedSec</title>
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
	    <a style="margin-top:-580px; color: red;"> Hi all there links about me will be here.</a>
<a style="margin-top:-580px; color: red;">Bank Transfer Any Country i do $100  for $1000 or £400  for £4000</a>
<p>
<br>
<a style="margin-top:-580px; color: red;">CashApp i do $100  for $1000 or £500  for £5000</a>
 <br>
  <p>FraudFox Box  $89.99</p>
  <p>Fullz page $39.99</p>
    <p>BLogs page $59.99</p>
      <p>Custom Page $69.99</p>
<br>
<p style="margin-top:-580px; color: red;">Amount = Item Name this is how i know what item your buying</p>
<pre style="margin-top:-580px; color: red;">Please input amount and hit donate once completed message me on t.me/ghostedsecdev</pre>
<a style="margin-top:-580px; color: red;" src="https://nowpayments.io/pos-terminal/ghostedsec">Buy</a>
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
