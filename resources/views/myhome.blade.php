<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Main template css file -->
<link rel="stylesheet" href="home style.css">
<!-- Google fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap"
    rel="stylesheet">
<!-- website title -->
<title>Home</title>
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
<button>My GPA</button>
<button>Courses Registration</button>
</div>
</div>
</center>

<style>
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
button {
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
</body>

</html>