<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
	<title>Soramist Chintanamanus</title>
	<link rel="shortcut icon" href="../_images/favicon.ico" />
	
	<!-- Sorchill CSS -->
	<link rel="stylesheet" href="../_css/sorchill5.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
	<script>WebFont.load({google: {families: ["Montserrat:400,700","Roboto:300,regular,500"]}});</script>
	
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	
	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	<!-- Hovering on mobile -->
	<script src="../_js/mobile_touch.js"></script>
	
</head>


<body>

<?php include_once("../_php/analyticstracking.php") ?>

	<!-- Header -->
	<?php include '../_php/header.php'; ?>
	
	
	<!-- Project -->
	<div class="project">
		<div class="container">
			<div class="project-content">
				
				<h2>Experience Prototype</h2>
				<h4>Protyping user experience</h4>
				
				<img class="large" src="../_images/exp1.jpg">
				
				<div class="separator-mini"></div>
				
				<p>A series of intensive experience prototype workshop. The course deals with applying suitable and relevant technologies for prototyping interaction and design concept. During the period we were assigned to document our working process by writing a <a href="http://sorchill.wordpress.com/category/ixd/experience-prototype/" target="window">blog</a> as well as delivering video report at the end of each week.</p>
				
				<div class="separator"></div>
				
				<h3 style="text-transform: none;">PongRevenge();</h3>
				<p>This week was about how can we use mobile devices focussing on Android platform as a tool to prototype our ideas. We had a chance to learn how to connect Processing, Arduino and Android devices together using Android SDK. Our main task for this week was to design a multiplayer game using Android devices. 
					
				<p>I teamed up with Brian to create a game called “Pong_Revenge”. The idea was that instead of players controlling the bar, they will be the ball and who stay the longest is the winner. At the beginning we wanted to play with scale and multiplication for example a giant controller which requires more than one player to control. Or even putting the game in the city and let people join the game with various controlling method. The number of player could be limitless, start from 1, 2 or even a hundred.</p>
				
				<p>Finally, we decided to use 2 physical wheels and a mobile phone for the controllers. This is also to show the possibility of having different controlling methods. It was quite challenge for us to integrate sensors into the wheel because we want them to spin freely, so we were not able to use potentiometer. We tried different sensors such as light interrupter, rotary encoder, and at the end we decided to use the wheel watcher, which is basically a set of IR emitter/receiver and a pattern wheel attached to the center of rotation. The good thing of this is that it can read both speed and direction of the rotation and also allows the wheel to spin frictionlessly.</p>		
				<div class="separator-nano"></div>				
				<div class="videoWrapper">
					<iframe src="http://player.vimeo.com/video/31694490?badge=0&amp;color=97d4dc" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				</div>
				<div class="separator-atom"></div>
				<img class="large" src="../_images/exp_p7.jpg">
				<img class="large" src="../_images/exp_p3.jpg">
				<img class="large" src="../_images/exp_p1.jpg">
				<img class="large" src="../_images/exp_p4.jpg">
				<img class="large" src="../_images/exp_p6.jpg">
				
				
				
				<div class="separator"></div>
				
				<h3 style="text-transform: none;">AmazonHaptic();</h3>
				<p>This week of experience prototype was 'Skmobile_touchhing Haptics' with <a target="window" href="http://www.guchmu.com">Camille Moussette</a>. We were given a task to make a haptic prototype. I collaborated with Brian and Mehrnaz to implement haptic feed back for our AmazonPee(); game from the ActionSript course a couple of weeks ago. The idea was to simulate the feeling of fish swimming in to players' body by placing a series of haptuaters on their leg. When the player hit a fish in the game it will send a signal to Arduino and drive the haptuaters in a bottom-up sequence.</p> 
					
				<p>The reason why we used haptuater, but not vibrators, was because they can generate much more accurate vibration frequency than normal vibrator. We wanted the vibration to be sharp enough to give a shiver to the player. Our main challenge during this workshop was to make Arduino talk to ActionScript. We used serproxy which is a proxy program that allow flash to communicate with an Arduino board via a network connection because the ActionScript itself doesn’t provide access to serial ports.</p>
				
				<div class="videoWrapper">
					<iframe src="http://player.vimeo.com/video/31297213?badge=0&amp;color=97d4dc" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				</div>
				
				<div class="separator"></div>
				
				
				<h3 style="text-transform: none;">Terry();</h3>
				
				<p>The Final week of Experience Prototype course is “Bare Metal Code” (with Daniel Saakes). This week focused on learning to write code properly and more robust which may allow us to create more elaborated experience when we build prototype. In this workshop I teamed up together with Brian and Lima.</p>
					
					<p> We were given a task to create a creature that have a personality and it should be able to interact with surrounding environment. Our creature was inspired by Tim Burton’s story: the melancholy death of the oyster boy, we wanted to explore something in the dark side. We decided to develop the character based on a couples of keywords including “creepy”, “grumpy” and “curious”. We also wanted to make this creature react to information from the internet.</p>
				
				<p>We began by developing the actual behaviour of our creature. Thinking about how would it react to certain situations like when people approach or touch it, when the environment get noisy and also whenever it gets an email, and finally we came up with a character called Terry (or terrified). He is a grumpy old boy who lives in the darkness. He always curious about what people around him is doing but he never want to get closer to them. And if anyone try to approach him he’ll terrify them away, even though he’s not capable of.</p>
				
				<div class="videoWrapper">
					<iframe src="http://player.vimeo.com/video/32645647?badge=0&amp;color=97d4dc" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				</div>
				
				<div class="separator-atom"></div>
				
				<img class="large" src="../_images/exp_t1.jpg">
				<img class="large" src="../_images/exp_t2.jpg">
				<img class="large" src="../_images/exp_t3.jpg">
				<img class="large" src="../_images/exp_t4.jpg">
				<img class="large" src="../_images/exp_t5.jpg">

				
				
				<div class="separator"></div>
				
				<div class="line-separator"></div>
				
				<div class="separator"></div>
				

			</div>
		</div>
	</div>
	
	
	<!-- Project Gallery -->	
	<?php include '../_php/project_gallery.php'; ?>
				
			
	<!-- Footer -->
	<?php include '../_php/footer.php'; ?>
	

</body>
</html>