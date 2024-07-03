<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Yuk Masak Indonesia</title>
    <link rel="stylesheet" type="text/css" href="cssmasak1.css"/>
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>   
</head>
 
<body>
	<!--- navigation --->
	<nav>
		<!--- logo --->
		<a href="index.php" class="logo">Yuk Masak Indonesia</a>
		<!--- menu --->
		<ul>
			<li><a href="index.php" class="active">Home</a></li>
			<li><a href="keranjang.php">Keranjang</a></li>
			<li><a href="kontak.php">Kontak</a></li>
			<li><a href="login.php">Login</a></li>
		</ul>
	</nav>

    <div class="about">
        <!--text-->
        <div class="about-text ">
            <p>Kontak</p>
			
			<div class="grid-container">
			  <div class="grid-item">
				<div class="kontak-container">
				  <form method="post" action="">
					<label for="fname">First Name</label>
					<input type="text" name="firstname" placeholder="Your name..">

					<label for="lname">Last Name</label>
					<input type="text" name="lastname" placeholder="Your last name..">

					<label for="subject">Subject</label>
					<textarea name="subject" placeholder="Write something.." style="height:200px"></textarea>

					<input type="submit" value="Submit">
				  </form>
				</div>
			  </div>
			  <div class="grid-item">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15862.96352392903!2d106.7671803!3d-6.297742!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698e9e0a53c9a9%3A0x7eef42fe27764cbc!2sUniversitas%20Muhammadiyah%20Jakarta!5e0!3m2!1sid!2sid!4v1715186459615!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			  </div> 
			</div>
        </div>
    </div>
	
	<div style="height:220px;"></div>
 
    <!-- footer -->
    <footer>
        <p>Interested In Using Our About?</p>
             
        <!--paragraph-->
        <p>I try to work on your project as quickly as possible. Guarantee for revision until you are satisfied with my work.</p>
        <!--social-->
        <div class="social-icons">
            <a href="#"><i class="fab fa-whatsapp"></i></a>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
         
        <!--copyright-->
        <p class="copyright">Copyright by Yuk Masak Indonesia</p>
    </footer>
 
    <!--social-attach-bar-->
    <div class="social">
        <a href="#"><i class="fab fa-whatsapp"></i></a>
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
    </div>
</body>
 
</html>