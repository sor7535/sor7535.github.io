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
				
				<h2>Data Visualisation</h2>
				
				<h4>Visual & Interaction Design, Processing Prototype</h4>
				
				<img class="large" src="../_images/paper1.jpg">
				
				
				<div class="separator-micro"></div>
									
				
				<p>This project we collaborated with Pöyry, an engineering consultant. Pöyry is developing a tool used for improving process efficiency in Paper Mill industry. This tool is capable of continuously analysing pulp quality in every 20 seconds, and send the result back to control room. With this information, it provides significant benefit to the industry because the operator can make the adjustment in realtime in order to improve product quality as well as energy efficiency.</p>
				
				<p>But, in the existing situation, there is a huge load of information already presented to the operators, so we were assigned to find the best way to present this new lot of information. I was particularly interested in the subject of "Ambient Visualisation” I though it might be beneficial for this situation where “cognitive overload” can be occurred easily.</p>
				
			
				<div class="separator"></div>

				<h3>User study</h3>
									
				<p>At the beginning of the project we had an opportunity to visit a paper mill in Sundsvall to observe the operators working in control room as well as to interview them to identify their dilemmas and problems in order to expose the design opportunities.</p>
				
				<p>The existing interface is well mapped with the machines in the factory, the operators can instantly handle everything through this interface. But we found that, most of the information showing on the screen is not so important. Regarding to the interview, there are around 50 different parameters presenting in each screen and less than 5 are normally used.</p>
				
				<img class="medium" src="../_images/paper2.jpg">
			
			
				<div class="separator"></div>
			
				<h3>Task analysis</h3>
									
				<p>From the beginning of a shift operators are assigned to monitor on specific production line, they will receive a brief verbally from the previous operators and after the initial check up they start monitoring. In a shift they mostly stay in the control room but sometimes go to the factory. At the end of the shift they have to give a short brief to the next operator that will continue responsible on the same production line. We found that the iteration occurs in the monitoring process, which is the task that operators do most of the time.</p>
				
				<p>In order to get better understanding of the operation and its sequences, I listed down the tasks that possibly be occurred in a control room and put them together to create a flowchart. This helps me to identify which information are necessary in each state and how should it be presented to the operators.</p>
				
				<img class="medium" src="../_images/paper3.jpg">
		
		
				<div class="separator"></div>
		
				<h3>Research</h3>
									
				<p>We (comprised of 11 people in the class) then divided in to small groups to do the research in different topics. I did the research in the area of cognitive psychology. I was wondering about, through which mediums do we receive the information and how do we interpret them and finally reflect on them? I was also curious about how does these issue associate with aesthetics.</p>
				
				<p>Another subject that I was interested in was the ambient information visualisation. Since there is a huge load of information in the control room environment already, to just adding more might not be a good way to do, too much information can become overburdening. It might be more efficient to present this chunk of information in more subtle way.</p>
				
				
				<div class="separator"></div>
			
				<h3>Ideation & Evaluation</h3>
									
				<p>During conceptualising phase, I developed 3 initial concepts and made lo-fi graphic prototypes to test with the users in order to find the direction to continue developing. This evaluation focused on multiple area such as readability and usability.</p>
				
				<p>After testing the initial concepts, I tried to combine good features from each concept together, and the final idea was to amass the information into one bit to reduce cognitive load of the operators and also to improve perceivability.</p>

				<img class="medium" src="../_images/paper5.jpg">
				<img class="medium" src="../_images/paper6.jpg">
				
				
				<div class="separator"></div>
				
				<h3>Wireframe & Prototype</h3>
									
				<p>In this project, I used <a href="http://processing.org/" target="window">Processing</a> to develop my prototypes, I though it was a good tool to visualise realtime information and huge database. Although I had to spent a lot of time to solve the problems with both coding and math, the final result was satisfied, I can present my ideas through this medium quite well so that I can get the most authentic feedback from the user testing.</p>
				
				<img class="medium" src="../_images/paper7.jpg">
				
				
				<div class="separator"></div>
				
				<h3>Final design</h3>
									
				<p>The final design concept has evolved through the evaluation result and all the research. It mainly design based on the the concept of ambient information visualisation which to present the information in more subtle way in order to reduce cognitive load on the users.</p>
				
				<p>The interface comprised of two main screens, the first screen lambently displays realtime information when the users do not pay much attention on it. At this state, it provides information in qualitative way which users can perceive the situation quickly by just a glance. The other mode provides detailed information, it will be used when the users want to retrieve the historical information or to see the overall trend of productivity.</p>
				
				<p>At the end, we presented to Pöyry the consultancy, my concept was selected to be developed further to use in the industry.</p>

				<div class="videoWrapper">
					<iframe src="http://player.vimeo.com/video/9107955?badge=0&amp;color=97d4dc" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
				</div>
				
				<div class="separator"></div>
				<h3>Download prototypes</h3>
				<p>
				Ambient Mode (Realtime): <a href="../_flash/Papermill_realtime_mac.zip">Mac</a> | 
				<a href="../_flash/Papermill_realtime_windows.zip">Windows</a></br>
				Ambient Mode (Speed up): <a href="../_flash/Papermill_Ambient_mac.zip"> Mac</a> | 
				<a href="../_flash/Papermill_Ambient_windows.zip">Windows</a></br>
				Informative Mode:  
				<a href="../_flash/Papermill_Informative_mac.zip">Mac</a> | <a href="../_flash/Papermill_Informative_windows.zip">Windows</a></p>
				
				
				
				<img class="large" src="../_images/paper12.jpg">
				<img class="large" src="../_images/paper13.jpg">
				<img class="large" src="../_images/paper14.jpg">
				
				
				
				
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