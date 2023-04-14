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
    body {
    background: #2370ED 50%;
    margin: 0;
		padding: 0;
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
<header>
		<nav>
			<div class="logo">
            <P>Software industry and Multimedia</P>    
            </div>
			<ul>
				<li><a href="{{ route('myhome') }}"">Home</a></li>
				<li><a href="{{ route('profile') }}"">Profile</a></li>
				<li><a href="{{ route('courses') }}"">Courses</a></li>
				<li><a href="{{ route('attendance') }}">Attendance</a></li>
                <li><a href="{{Route("about")}}">about us</a></li>
			</ul>
		</nav>
	</header>
    <!-- <div class="image">
        <img src="porfolio pic.png" alt="Image">
    </div> -->


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

</body>

</html>