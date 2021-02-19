<?php 

$customCSS ="
    <link rel='stylesheet' href='css/home.css'>
";

include "inc/html-top.php"; 

?>

<body>
<div class="container">

	<!-- Header -->

	<?php include "inc/header.php"; ?>

	<!-- Navigation -->

	<?php include "inc/nav.php"; ?>

	<!-- Page Content -->

	<h2>Welcome To The North!</h2>
    <div class="home">

	    <div class="home1">
			<h3>Overview</h3>
				<p>Manchester is a city and metropolitan borough in Greater Manchester, England. The city has the country’s fifth-largest population at 547,62 and lies within the United Kingdom’s second-most populous urban area, with a population of 2.7 million, third most-populous county, at around 2.8 million,  and second-most populous metropolitan area, with a population of 3.3 million. It is fringed by the Cheshire Plain to the south, the Pennines to the north and east, and an arc of towns with which it forms a continuous conurbation. The local authority for the city is Manchester City Council.</p>
				<img src="images/one-angle-square-slideshow.jpg" alt="One Angle Square" class="restrict">
		</div>
			

		<div class="home2">
			<h3>Cultural Importance</h3>
				<img src="images/skyline-slideshow.jpg" alt="Manchester Skyline" class="restrict">
				<p>The city is notable for its architecture, culture, musical exports, media links, scientific and engineering output, social impact, sports clubs and transport connections. Manchester Liverpool Road railway station was the world's first inter-city passenger railway station. At the University of Manchester, Ernest Rutherford first split the atom in 1917, Frederic C. Williams, Tom Kilburn and Geoff Tootill developed the world's first stored-program computer in 1948, and Andre Geim and Konstantin Novoselov isolated the first graphene in 2004. 20th century broadcaster and social commentator Brian Redhead once said "Manchester ... is the capital, in every sense, of the North of England, where the modern world was born. The people know their geography is without equal. Their history is their response to it". </p>
				
		</div>

	</div> <!--.home-->

	<!-- Source -->

	<?php include "inc/source.php"; ?>

</div> <!--.container-->

<?php include "inc/scripts.php"; ?> <!--jQuery Library & Menu Highlighter-->

</body>
</html>