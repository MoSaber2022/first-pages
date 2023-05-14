<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  body{
    margin:0px;
    margin-top: 10px;

    font-family: Arial, sans-serif;
    font-weight: bold;
    background: #2370ED 50%;
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
.card1 {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 20%;
  background-color:white;
  margin-top:50px;
  margin-left:50px;

}
.footer {
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
.ff{
}

.card1:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.card2 {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 20%;
  margin-left:50px;
  background-color:white;
  margin-top:50px;


}

.card2:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
.ff{
  display:flex;
  margin : 50px;
}
.mm{
  margin:30px;
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
          <li><a href="{{Route("home")}}">Home</a></li>
          <li><a href="{{Route("profile")}}">Profile</a></li>
          <li><a href="{{Route("attendance")}}">My Attendance</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- End header -->
  <h1>Semester 1 </h1>

<div class="ff">

<div class="card1">
<img class="mm" src="/img/math.jpeg" width="200" height="200" alt="College Image">
  <div class="container">
    <h4><b>Math 1</b></h4> 
    <p>Gehan</p> 
  </div>
</div>
<div class="card2">
<img class="mm" src="/img/ja.jpg" width="200" height="200" alt="College Image">
  <div class="container">
    <h4><b>Computer Programming 1</b></h4> 
    <p>Rasha Montaser</p> 
  </div>
</div>
<div class="card2">
<img class="mm" src="/img/physics.png" width="200" height="200" alt="College Image">
  <div class="container">
    <h4><b>Physics 1</b></h4> 
    <p>Mohamed Ans</p> 
  </div>
</div>
<div class="card2">
<img class="mm" src="/img/prob.jpeg" width="200" height="200" alt="College Image">
  <div class="container">
    <h4><b>Probabilty</b></h4> 
    <p>Lailia</p> 
  </div>
</div>

</div>
<h1>Semester 2 </h1>

<div class="ff">

<div class="card1">
<img class="mm" src="/img/math.jpeg" width="200" height="200" alt="College Image">
  <div class="container">
    <h4><b>Math 2</b></h4> 
    <p>Gehan</p> 
  </div>
</div>
<div class="card2">
<img class="mm" src="/img/ja.jpg" width="200" height="200" alt="College Image">
  <div class="container">
    <h4><b>Computer Programming 2</b></h4> 
    <p>Rasha Montaser</p> 
  </div>
</div>
<div class="card2">
<img class="mm" src="/img/physics.png" width="200" height="200" alt="College Image">
  <div class="container">
    <h4><b>Physics 2</b></h4> 
    <p>Mohamed Saaed</p> 
  </div>
</div>
<div class="card2">
<img class="mm" src="/img/man.jpeg" width="200" height="200" alt="College Image">
  <div class="container">
    <h4><b>أساسيات إدارة</b></h4> 
    <p>Mostafa Abdelhakim</p> 
  </div>
</div>

</div>
<h1>Semester 3 </h1>

<div class="ff">

<div class="card1">
<img class="mm" src="/img/math.jpeg" width="200" height="200" alt="College Image">
  <div class="container">
    <h4><b>Math 3 </b></h4> 
    <p>Abdelatif</p> 
  </div>
</div>
<div class="card2">
<img class="mm" src="/img/ja.jpg" width="200" height="200" alt="College Image">
  <div class="container">
    <h4><b>Software Engineering Theory</b></h4> 
    <p>Rasha Montaser</p> 
  </div>
</div>
<div class="card2">
<img class="mm" src="/img/gam.jpeg" width="200" height="200" alt="College Image">
  <div class="container">
    <h4><b>Game Programming</b></h4> 
    <p>Rasha Montaser</p> 
  </div>
</div>
<div class="card2">
<img class="mm" src="/img/str.png" width="200" height="200" alt="College Image">
  <div class="container">
    <h4><b>Data Structure</b></h4> 
    <p>Ashraf Saeed</p> 
  </div>
</div>

</div>
<h1>Semester 4 </h1>

<div class="ff">

<div class="card1">
<img class="mm" src="/img/ana.jpeg" width="200" height="200" alt="College Image">
  <div class="container">
    <h4><b>Software Req Analysis</b></h4> 
    <p>Ghada Kadous</p> 
  </div>
</div>
<div class="card2">
<img class="mm" src="/img/we.png" width="200" height="200" alt="College Image">
  <div class="container">
    <h4><b>Web Programming</b></h4> 
    <p>Islam Elkabany</p> 
  </div>
</div>
<div class="card2">
<img class="mm" src="/img/math.jpeg" width="200" height="200" alt="College Image">
  <div class="container">
    <h4><b>Math 4</b></h4> 
    <p>Abdelatif</p> 
  </div>
</div>
<div class="card2">
<img class="mm" src="/img/ui.png" width="200" height="200" alt="College Image">
  <div class="container">
    <h4><b>HCI</b></h4> 
    <p>Nerimn Elkashif</p> 
  </div>
</div>

</div>
<h1>Semester 5 </h1>

<div class="ff">

<div class="card1">
<img class="mm" src="/img/algo.jpeg" width="200" height="200" alt="College Image">
  <div class="container">
    <h4><b>Algorithms</b></h4> 
    <p>Ahmed Sherif</p> 
  </div>
</div>
<div class="card2">
<img class="mm" src="/img/op.png" width="200" height="200" alt="College Image">
  <div class="container">
    <h4><b>Operating Systems</b></h4> 
    <p>Ahmed Sherif</p> 
  </div>
</div>
<div class="card2">
<img class="mm" src="/img/Multimedia.jpg" width="200" height="200" alt="College Image">
  <div class="container">
    <h4><b>Adv Multi</b></h4> 
    <p>Hatem Abdelkader</p> 
  </div>
</div>
<div class="card2">
<img class="mm" src="/img/ui.png" width="200" height="200" alt="College Image">
  <div class="container">
    <h4><b>User Interface Design</b></h4> 
    <p>Shimaa Elmorsy</p> 
  </div>
</div>

</div>
<h1>Semester 6 </h1>

<div class="ff">

<div class="card1">
<img class="mm" src="/img/mob.jpeg" width="200" height="200" alt="College Image">
  <div class="container">
    <h4><b>Mobile</b></h4> 
    <p>Mohamed Elkholy</p> 
  </div>
</div>
<div class="card2">
<img class="mm" src="/img/clou.jpeg" width="200" height="200" alt="College Image">
  <div class="container">
    <h4><b>Cloud</b></h4> 
    <p>Mohamed Elkholy</p> 
  </div>
</div>
<div class="card2">
<img class="mm" src="/img/nu.png" width="200" height="200" alt="College Image">
  <div class="container">
    <h4><b>Numerical Computions</b></h4> 
    <p>Elsayed Mostafa</p> 
  </div>
</div>
<div class="card2">
<img class="mm" src="/img/gam.jpeg" width="200" height="200" alt="College Image">
  <div class="container">
    <h4><b>AI For Games</b></h4> 
    <p>Amira</p> 
  </div>
</div>

</div>
<h1>Semester 7 </h1>

<div class="ff">

<div class="card1">
<img class="mm" src="/img/se.jpeg" width="200" height="200" alt="College Image">
  <div class="container">
    <h4><b>Security</b></h4> 
    <p>Mohamed Elkholy</p> 
  </div>
</div>
<div class="card2">
<img class="mm" src="/img/ri.jpeg" width="200" height="200" alt="College Image">
  <div class="container">
    <h4><b>Risk</b></h4> 
    <p>Mohamed Elkholy</p> 
  </div>
</div>
<div class="card2">
<img class="mm" src="/img/gg.jpeg" width="200" height="200" alt="College Image">
  <div class="container">
    <h4><b>Computer Graphic</b></h4> 
    <p>Nerimn Elkashif</p> 
  </div>
</div>
<div class="card2">
<img class="mm" src="/img/ana.jpeg" width="200" height="200" alt="College Image">
  <div class="container">
    <h4><b>Software Testing</b></h4> 
    <p>Ghada Kadous</p> 
  </div>
</div>

</div>
<h1>Semester 8 </h1>

<div class="ff">

<div class="card1">
<img class="mm" src="/img/ggg.jpeg" width="200" height="200" alt="College Image">
  <div class="container">
    <h4><b>Graphic Programming</b></h4> 
    <p>Hatem Abdelkader</p> 
  </div>
</div>
<div class="card2">
<img class="mm" src="/img/gam.jpeg" width="200" height="200" alt="College Image">
  <div class="container">
    <h4><b>Game Design</b></h4> 
    <p>Amira</p> 
  </div>
</div>
<div class="card2">
<img class="mm" src="/img/ne.png" width="200" height="200" alt="College Image">
  <div class="container">
    <h4><b>Network</b></h4> 
    <p>Emad Raouf</p> 
  </div>
</div>
<div class="card2">
<img class="mm" src="/img/mm.jpg" width="200" height="200" alt="College Image">
  <div class="container">
    <h4><b>أخلاقيات مهنة</b></h4> 
    <p>سامح محمد الغنام</p> 
  </div>
</div>

</div>   
<div class="footer">&copy; SIM <span>Studens</span> All Right Reserved</div>

</body>
</html> 
