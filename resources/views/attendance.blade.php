<!DOCTYPE html>
<html>
<head>
	<title>Attendance System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
		<nav>
			<div class="logo">
            <P>Software industry and Multimedia</P>    
            </div>
			<ul>
				<li><a href="{{Route("myhome")}}">Home</a></li>
				<li><a href="{{Route("profile")}}">Profile</a></li>
				<li><a href="{{Route("courses")}}">Courses</a></li>
				<li><a href="{{Route("attendance")}}">Attendance</a></li>
                <li><a href="{{Route("about")}}">about us</a></li>
			</ul>
		</nav>
	</header>
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
</body>
</html>
<style>
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

	margin: 0;
	font-family: Arial, sans-serif;
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