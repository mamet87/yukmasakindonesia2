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
            <p>Login</p>
			
			<center>
				<div class="login-container">
				  <form method="post" action="">
					<label for="email">Email</label>
					<input type="text" name="email" placeholder="Your email">

					<label for="password">Password</label>
					<input type="text" name="password" placeholder="Your password">

					<input type="submit" value="Login">
				  </form>
				</div>
			</center>
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