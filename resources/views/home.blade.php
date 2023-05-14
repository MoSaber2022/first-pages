<!DOCTYPE html>
<html>
<head>
	<title>College System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div>
	   <!-- start header -->
	   <div class="header">
    
    <div class="container">
        
    <h2 class="co" >SIM</h2>
      <img class="logo" src="iamge/logo.png" alt="">
      <div class="links">
        <span class="icon">
          <span></span>
          <span></span>
          <span></span>
        </span>
        <ul>
          <li><a href="{{Route("signin")}}">Log in</a></li>
          <li><a href="{{Route("signuppage")}}">Sign Up</a></li>
          <li><a href="{{Route("about")}}">About Us</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- End header -->
</div>
<div  class="welcome">
		
			<div>
				<h1>Welcome to our College</h1>
			<p>We believe there is nothing important than education.</p>
			<a href="#" class="button">Know more about us</a> 
		</div>
			<img class="rr" src="/img/coding.png" width="500" height="500" alt="College Image">


		
</div>

<div class="footer">&copy; SIM <span>Studens</span> All Right Reserved</div>
</body>
</html>
<style>

.rr{
	margin-left:400px ;
}
.co{
    color:white;
}
.header {
    
padding: 20px;
}
.header .container {
    
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.header .logo {
  width: 60px;
}
.header .links {
position: relative;
}
.header .links:hover .icon span:nth-child(2) {
width: 100%;
}
.header .links .icon {
width: 30px;
display: flex;
flex-wrap: wrap;
justify-content: flex-end;
}
.header .links .icon span {
  background-color: #333;
  margin-bottom: 5px;
  height: 2px;
}
.header .links .icon span:first-child {
  width: 100%;
}
.header .links .icon span:nth-child(2) {
  width: 60%;
  transition: 0.3s;
}
.header .links .icon span:last-child {
  width: 100%;
}
.header .links ul {
  list-style: none;
  margin: 0;
  padding: 0;
  background-color: #f6f6f6;
  position: absolute;
  right: 0;
  min-width: 200px;
  top: calc(100% + 15px);
  display: none;
  z-index: 1;
}
.header .links ul::before {
  content: "";
  border-width: 10px;
  border-style: solid;
  border-color: transparent transparent #f6f6f6 transparent;
  position: absolute;
  right: 5px;
  top: -20px;
}
.header .links:hover ul {
  display: block;
}
.header .links ul li a {
  display: block;
  padding: 15px;
  text-decoration: none;
  color: #333;
  transition: 0.3s;
}
.header .links ul li a:hover {
  padding-left: 25px;
}
.header .links ul li:not(:last-child) a {
  border-bottom: 1px solid #ddd;
}

body {
	margin: 0;
	font-family: Arial, sans-serif;
    font-weight: bold;
    background: #2370ED 50%;
}
.footer {
  background-color: #023e8a;
  color: white;
  padding: 30px 10px;
  text-align: center;
  font-size: 18px;
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

.welcome {
	padding: 50px;
	display:flex;

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

</style>