<!doctype html>

<html>

<head> 
	<meta charset="utf-8">
	<title>Assignment 4 - Odd One Out</title>
	<link rel="stylesheet" href="css/styles.css">
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script src="js/fullclip.js"></script>
</head>

<body class = "home-container">

<header id = "home-header">  
	<h1>Odd Student Out</h1>  

	<h2>Team Barcelona</h2>

  <section class="container">
    <div class="fullBackground"></div>
  </section>
    <script>
    $('.fullBackground').fullClip({
      images: ['images/barc1.jpg', 'images/barc2.jpg', 'images/barc3.jpg'],
      transitionTime: 2000,
      wait: 5000
    });
    </script>

</header>


<main>
	This website contains information on 3 students, 2 of which are pursuing two majors while one is pursuing a single major. There's also a little background on their hometowns and lives.
</main>

	<figure id="majors">
	<img src="images/major.png" alt="Majors">
	</figure> 


	<figure id = "fig1">
	<img src="images/alex.jpg" alt="Alex" class="square">
	<img src="images/jialin.jpg" alt="Jialin" class="square">
	<img src="images/vanessa.jpg" alt="Vanessa" class="circle">

	<nav id="home-nav"><a href="doublemajors.php"> >>>>Check them out!<<<< </a></nav>
	</figure> 




</body>

</html>