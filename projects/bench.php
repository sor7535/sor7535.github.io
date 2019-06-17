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
				<h2>Sound / Light / Form</h2>
				
				<h4>Interactive Installation + Arduino + LogicPro</h4>
				
				<img class="large" src="../_images/bench0.jpg">
				
				<div class="separator-mini"></div>
				
				<p>In the last part of the Industrial Sound Design course we had an opportunity to freely experiment in Sound, Form and Light. We, as a group of four (I, Oko, Nirvana and Jenn), all agreed that we wanted to explore in the area of social interaction and non-verbal communication. We spent almost half of the time research on these topics to get some ideas and inspiration.</p>
				
				<p>“Jazz musicians communicate through their music, without verbal communication, they speak with their heart to the heart of others. They are able to radiate their feeling and emotion through the sounds they produce...” — Taking this as an inspiration, we finally decided to create a set of objects that stimulate interaction between people in the public space through non verbal communication.</p>
				
				<div class="separator-nano"></div>
				<img class="medium" src="../_images/bench1.jpg">
				<div class="separator-nano"></div>
					
				<p>In the development process, we discussed on non verbal ways of communicating and relationship between inputs and outputs for both the sender and receiver to figured out how can we implement the interplay behaviour through form, sound and light.</p>
				<p>We were also interested in the interactive installation in the public context and finally chose public benches as our design element. The concept was to intrigue people by a set of living benches, each bench has the same form but utter different sound however, complimenting each other. The form is designed to be playful and modular, they can be composed in various arrangement. This will promote both fun and collaboration.</p>
				
				
				
				<div class="separator"></div>
				
				<h3>Wood + Arduino + LogicPro</h3>
				<p>We spent 2 days in the wood workshop making the full scale benches and 2 more days dealing with coding and wiring to make it works. A big thinks to Camille and Lars!</p>
				<p>Many tools were used in constructing the prototype. We attached position sensors underneath each seats to receive signal input and send to arduino. Then the signal will be converted into midicode and send to mac mini through serial port to generate sound of the selected instruments in Logic Pro, and the audio signal will be separated by the audio channels splitter then send back to each speaker inside the benches. In the same time the same signal will control the colour LEDs inside, the light intesity relate to the notes playing, the higher note generate the brighter light. White LEDs are glowing all the time in order to draw attention from people surrounded</p>
				
				<div class="videoWrapper">
					<iframe src="http://player.vimeo.com/video/9745937?badge=0&amp;color=97d4dc" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				</div>
				
				<div class="separator-atom"></div>
				
				<img class="large" src="../_images/bench2.jpg">
				<img class="large" src="../_images/bench3.jpg">
				
				
				<div class="separator"></div>
				
				<h3>The Prototype</h3>
				<p>Using as a public furniture, it can be place anywhere in public space. We present our concept through a little story we created, it was about life in a day in a park and the benches.</p>
				<p>Afterward we sent our concept to <a href="http://www.create-conference.org/" target="window">Create 10</a>, an interaction design conference in Scotland to and we got accepted to exhibit our work there which we received quite good feedback. We are also looking forward to develop the concept further and wish it could be placed somewhere in the city.</p>
				
				<div class="videoWrapper">
					<iframe src="http://player.vimeo.com/video/10589654?badge=0&amp;color=97d4dc" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				</div>
				
				<div class="separator-atom"></div>
				
				<img class="large" src="../_images/bench4.jpg">
				<img class="large" src="../_images/bench5.jpg">
				<img class="large" src="../_images/bench6.jpg">
				
				
				
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