<!DOCTYPE html>
<!---Coding By CoderGirl!--->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--<title> An About Us Page | CoderGirl </title>-->
  <!---Custom Css File!--->
  <link rel="stylesheet" href="style.css">
  <style>
    *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
.about-us{
  height: 100vh;
  width: 100%;
  padding: 90px 0;
  background: #ddd;
}
.pic{
  height: auto;
  width:  302px;
}
.about{
  width: 1130px;
  max-width: 85%;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: space-around;
}
.text{
  width: 540px;
}
.text h2{
  font-size: 90px;
  font-weight: 600;
  margin-bottom: 10px;

}
.text h5{
  font-size: 22px;
  font-weight: 500;
  margin-bottom: 20px;
}
span{
  color: #4070f4;
}
.text p{
  font-size: 18px;
  line-height: 25px;
  letter-spacing: 1px;
}
.data{
  margin-top: 30px;
}
.hire{
  font-size: 18px;
  background: black;
  color:white;
  text-decoration: none;
  border: none;
  padding: 8px 25px;
  border-radius: 6px;
  transition: 0.5s;
}
.hire:hover{
  background: #000;
  border: 1px solid #4070f4;
}
nav {
    margin-top: 25px;
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
	color: #ececec;
	text-decoration: none;
}

nav a:hover {
	text-decoration: underline;
}
body{
    background: #2370ED 50%;}

  </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
            <P style="color: #ececec;">Software industry and Multimedia</P>    
            </div>
            <ul>
            <li><a href="{{Route("myhome")}}">Home</a></li>
            <li><a href="{{Route("profile")}}">profile</a></li>
            <li><a href="{{Route("courses")}}">courses</a></li>
            <li><a href="{{Route("attendance")}}">attendance</a></li>
            <li><a href="{{Route("about")}}">about us</a></li>
            </ul>
        </nav>
    </header>

    <div class="about">
      <!--<img src="girl.png" class="pic">-->
      <div class="text">
        <h2 style="color: #ececec;">About Us</h2>
        <h5>SIM Registration <span>Website</span></h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita natus ad sed harum itaque ullam enim quas, veniam accusantium, quia animi id eos adipisci iusto molestias asperiores explicabo cum vero atque amet corporis! Soluta illum facere consequuntur magni. Ullam dolorem repudiandae cumque voluptate consequatur consectetur, eos provident necessitatibus reiciendis corrupti!</p>
        <div class="data">
        <a href="#" class="hire">Contact Us</a>
        </div>
      </div>
    </div>
  </section>
</body>
</html>

 