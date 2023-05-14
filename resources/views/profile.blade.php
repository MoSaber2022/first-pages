<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Main template css file -->
<link rel="stylesheet" href="style.css">
<!-- Google fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap"
    rel="stylesheet">
<!-- website title -->
<title>Profile</title>
<style>
	.tt{
		margin-bottom:100px;
	}
    body {
		margin-top: 5px;

font-family: Arial, sans-serif;
font-weight: bold;
background: #2370ED 50%;
    background: #2370ED 50%;
    margin: 0;
		padding: 0;
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
.footer {
	margin-top:50px;
  background-color: #023e8a;
  color: white;
  padding: 30px 10px;
  text-align: center;
  font-size: 18px;
}
.footer span {
  font-weight: bold;
  color: var(--main-color);
}

  h1 {
    color:white;  
		text-align: center;
		margin-top: 50px;
		}
  table {
			margin: auto;
			border-collapse: collapse;
			border-spacing: 0;
			width: 50%;
			border: 1px solid #ddd;
			background-color: white;
		}
  th, td {
			text-align: left;
			padding: 16px;
			border-bottom: 1px solid #ddd;
		}
  tr:nth-child(even) {
			background-color: #f2f2f2
		}

  .circle {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      background-image: url('https://www.w3schools.com/w3images/avatar2.png');
      background-size: cover;
      margin-left:auto; 
      margin-right:auto;
  }
  nav {
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
}
</style>
</head>

<body>
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
		<li><a href="{{Route("myhome")}}">My Home</a></li>
		<li><a href="{{Route("courses")}}">Courses</a></li>
          <li><a href="{{Route("attendance")}}">My Attendance</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- End header -->
    <!-- <div class="image">
        <img src="porfolio pic.png" alt="Image">
    </div> -->

<div class="tt">
    <h1>Your Profile</h1>
    <div class="circle"></div>
	<table>
	  <tr>
	    <th>Name:</th>
	    <td>John Doe</td>
	  </tr>
	  <tr>
	    <th>Uni ID:</th>
	    <td>1234567</td>
	  </tr>
	  <tr>
	    <th>Gender:</th>
	    <td>Male</td>
	  </tr>
	  <tr>
	    <th>University Email:</th>
	    <td>johndoe@alexu.edu.eg</td>
	  </tr>
    <tr>
	    <th>Mobile num:</th>
	    <td>+20 1115845115</td>
	  </tr>
    <tr>
	    <th>National ID:</th>
	    <td>30102010115213</td>
	  </tr>
    <tr>
	</table>
</div>

	<div class="footer">&copy; SIM <span>Studens</span> All Right Reserved</div>

</body>

</html>