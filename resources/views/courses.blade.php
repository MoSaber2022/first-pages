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
<div class="cont">


<div class="row">

<div class="card1">
    <div class="header"></div>
    <div class="info">
      <p class="title">Advanced Multimedia</p>
      <img src ="/img/Multimedia.jpg" class="fit">
    </div>
    <div class="footer">
     
      <button type="button" class="action">Get started </button>
    </div>
</div>
    
  
<div class="card2">
            <div class="header"></div>
            <div class="info">
              <p class="title">Artificial Intelligence</p>
              <img src ="/img/ai.jpg" class="fit">
            </div>
            <div class="footer">
             
              <a href=""><button type="button" class="action">Get started </button> </a>
            </div>
            
</div>
<div class="card3">
    <div class="header"></div>
    <div class="info">
      <p class="title">Data Base</p>
      <img src ="/img/sql.png" class="fit">
    </div>
    <div class="footer">
     
      <a href=""><button type="button" class="action">Get started </button> </a>
    </div>
 
</div>
<div class="card4">
    <div class="header"></div>
    <div class="info">
      <p class="title">Web Development</p>
      <img src ="/img/top11.png" class="fit">
    </div>
    <div class="footer">
     
      <a href=""><button type="button" class="action">Get started </button> </a>
    </div>
    
</div>
</div>
    <style>

body{
    background: #2370ED 50%;
}
.cont{
margin: 0 auto;
width: 100%;
}
.row{
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 90%;

 

}
.fit{
    width: 90%;
    height: 30%;
}
.card1 {
    
    flex: 1 12 1rem;
    margin-top: 150px;
    margin-left: 60px; 
 
  border-radius: 0.75rem;
  background-color: white;
  width: 290px;
  height: 370px;
  box-shadow: 0 4px 6px -1px rgba(0,0,0,.1),
  0 2px 4px -2px rgba(0,0,0,.1);
}
.card2 {
    
    flex: 1 12 1rem;
    margin-top: 150px;
    margin-left: 60px; 
 
  border-radius: 0.75rem;
  background-color: white;
  width: 300px;
  height: 370px;
  box-shadow: 0 4px 6px -1px rgba(0,0,0,.1),
  0 2px 4px -2px rgba(0,0,0,.1);
}
.card3 {
    
    flex: 1 12 1rem;
    margin-top: 150px;
    margin-left: 60px; 
 
  border-radius: 0.75rem;
  background-color: white;
  width: 300px;
  height: 370px;
  box-shadow: 0 4px 6px -1px rgba(0,0,0,.1),
  0 2px 4px -2px rgba(0,0,0,.1);
}
.card4 {
    
    flex: 1 12 1rem;
    margin-top: 150px;
    margin-left: 60px; 
 
  border-radius: 0.75rem;
  background-color: white;
  width: 300px;
  height: 370px;
  box-shadow: 0 4px 6px -1px rgba(0,0,0,.1),
  0 2px 4px -2px rgba(0,0,0,.1);
}

.header {
 
  background-clip: border-box;
  margin-top: 1.5rem;
  margin-left: 1rem;
  margin-right: 1rem;
  border-radius: 0.75rem;
  background-color: rgb(33 150 243);
  box-shadow: 0 10px 15px -3px rgba(33,150,243,.4),0 4px 6px -4px rgba(33,150,243,.4);
  height: 4rem;
}

.info {
  border: none;
  padding: 1.5rem;
  text-align: center;
}

.title {
  color: rgb(38 50 56);
  letter-spacing: 0;
  line-height: 1.375;
  font-weight: 600;
  font-size: 1.25rem;
  margin-bottom: 0.5rem;
}

.footer {
  padding: 0.75rem;
  border: 1px solid rgb(236 239 241);
  display: flex;
  align-items: center;
  justify-content: space-between;
  background-color: rgba(0, 140, 255, 0.082);
}

.tag {
  font-weight: 300;
  font-size: .75rem;
  display: block;
}

.action {
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
  border: none;
  outline: none;
  box-shadow: 0 4px 6px -1px rgba(33,150,243,.4),0 2px 4px -2px rgba(33,150,243,.4);
  color: rgb(255 255 255);
  text-transform: uppercase;
  font-weight: 700;
  font-size: .75rem;
  padding: 0.75rem 1.5rem;
  margin-left: 65px;
  background-color: rgb(33 150 243);
  border-radius: 0.5rem;
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
	color: #ececec;
	text-decoration: none;
}

nav a:hover {
	text-decoration: underline;
}


    </style>