<!DOCTYPE html>
<html>
<head>
	<title>Attendance System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
		<li><a href="{{Route("profile")}}">Profile</a></li>
		<li><a href="{{Route("courses")}}">Courses</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- End header -->
	<main>
		<h1>Attendance System</h1>
        <table>
			<thead>
				<tr>
					<th>Graphic Programming</th>
					<th>Graphs and Network</th>
					<th>Web Development</th>
					<th>Ai For Game</th>
				</tr>
			</thead>
		<table>
			<thead>
				<tr>
					<th>Date</th>
					<th>Lectures</th>
					<th>Attendance</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1st june 2023</td>
					<td>Lec 1</td>
					<td><input type="checkbox" name="attendance_course1"></td>
				</tr>
				<tr>
					<td>19th june 2023</td>
					<td>Lec 2</td>
					<td><input type="checkbox" name="attendance_course2"></td>
				</tr>
				<tr>
					<td>19th july 2023</td>
					<td>Lec 3</td>
					<td><input type="checkbox" name="attendance_course3"></td>
				</tr>
			</tbody>
		</table>
	</main>
	<div class="footer">&copy; SIM <span>Studens</span> All Right Reserved</div>

</body>
</html>
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
    
{
	box-sizing: border-box;
}

body {
	margin-top: 10px;
	margin : 0px;

font-family: Arial, sans-serif;
font-weight: bold;
background: #2370ED 50%;
}

header {
    background: #2370ED 50%;	
    color: #fff;
	padding: 20px;
}   

nav {
	display: flex;
	justify-content: space-between;
	align-items: center;
}

nav ul {
	list-style: none;
	margin: 0;
	padding: 20;
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

main {
	max-width: 800px;
	margin: 0 auto;
	padding: 20px;
}

h1 {
	text-align: center;
	margin-bottom: 20px;
}

table {
	border-collapse: collapse;
	width: 100%;
	margin-top: 20px;
}

th, td {
	padding: 10px;
	text-align: left;
	border: 1px solid #3277e9;
}

th {
	background-color: #f2f2f2;
}

tbody tr:nth-child(even) {
	background-color: #f2f2f2;
}

input[type="checkbox"] {
	transform: scale(1.5);
}
</style>