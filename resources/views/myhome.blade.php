<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Main template css file -->
<link rel="stylesheet" href="home style.css">
<!-- Google fonts -->
<!-- website title -->
<title>Home</title>
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
          <li><a href="{{Route("profile")}}">Profile</a></li>
          <li><a href="{{Route("attendance")}}">My Attendance</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- End header -->
    <center>
        <div class="big">
<div class="all">
    <div class="circle"></div>
    <div class="text">
    <h1>john Doe</h1>
    <h3>Student</h3>
</div>
</div>

<div class="button">

<a class="aa" href ="{{Route("courses")}}">Courses Registration</a>
</div>
</div>
</center>

<style>
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

    margin-top:310px;

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

    nav {
    font-size:22px;   
    margin-top :25px;
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
    body {
        margin: 0px;

        font-family: Arial, sans-serif;
    font-weight: bold;
    background: #2370ED 50%;
}
.logo{
    color:white;
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

.big{
    display: inline-block;
    
}
.text{
    display: block;
    color: aliceblue;
}
.all{
    display: flex;
    float: left;
}
.aa {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: block;
    font-size: 20px;
    margin: 4px 2px;
    cursor: pointer;
}
.button{
    padding-top: 10em;
}
</style>
<div class="footer">&copy; SIM <span>Studens</span> All Right Reserved</div>

</body>

</html>