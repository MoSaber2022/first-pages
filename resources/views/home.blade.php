<!DOCTYPE html>
<html>
<head>
	<title>College System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<nav>
			<div class="logo">
            <P>Software industry and Multimedia</P>    
            </div>
			<ul>
				<li><a href="{{Route("home")}}">Home</a></li>
				<li><a href="{{Route("signin")}}">Login</a></li>
				<li><a href="{{Route("signuppage")}}">Sign Up</a></li>
                <li><a href="{{Route("about")}}">about us</a></li>
			</ul>
		</nav>
	</header>

	<main>
		<section class="welcome">
			<h1>Welcome to our College</h1>
			<p>We believe there is nothing important than education.</p>
			<a href="#" class="button">Know more about us</a>
		</section>

		
			<img src="/img/coding.png" width="500" height="500" alt="College Image">
		</section>
	</main>
</body>
</html>
<style>
{
	box-sizing: border-box;
}

body {
	margin: 0;
	font-family: Arial, sans-serif;
    font-weight: bold;
    background: #2370ED 50%;
}
.logo{
    font-size:22px; 
}
header {
    background: #2370ED 50%;
	color: #fff;
	padding: 20px;
    border: 1px;

}

nav {
    font-size:22px; 
	display: flex;
	justify-content: space-between;
	align-items: center;
}

nav ul {
	list-style: none;
	margin: 0;
	padding: 0;
}

nav li {
	display: inline-block;
	margin-right: 20px;
}

nav a {
	color: #fff;
	text-decoration: none;
}

nav a:hover {
	text-decoration: underline;
    background-color: black;

}

.logo img {
	height: 50px;
}

main {
	max-width: 1200px;
	margin: 0 auto;
	display: flex;
	flex-wrap: wrap;
	align-items: center;
}

.welcome {
	padding: 50px;
	flex: 1;
}

.welcome h1 {
	font-size: 40px;
	margin-bottom: 20px;
}

.welcome p {
	font-size: 18px;
	line-height: 1.5;
	margin-bottom: 30px;
}

.button {
	display: inline-block;
	padding: 10px 20px;
	background-color: #333;
	color: #fff;
	border-radius: 5px;
	text-decoration: none;
}

.button:hover {
	background-color: black;
}

.image {
	flex: 1;
}

.image img {
	width: 150%;
}
</style>