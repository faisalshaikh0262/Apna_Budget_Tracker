<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  background-color: #182727;
  /* background: linear-gradient(60deg, rgb(255, 244, 176) 25%, rgb(255, 185, 234) 80%); */
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
  width: 100%;
}
.center{
    display: block;
    margin-left:auto;
    margin-right: auto;
    width: 50%;
}


.about-section {
  padding: 50px;
  text-align: center;
  background: linear-gradient(60deg, rgb(255, 244, 176) 25%, rgb(255, 185, 234) 80%);
  color: black;

}

.container {
  padding: 0 16px;
  color: white;
}
.smole-title{
    color: white;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us Page</h1>
  <p>Hi, first of all, thanks for visiting this page. This page is all about us. You will get exciting things about my life.</p>
  <p>This website is created by the students in Abeda Inamdar Senior College under the guidance of <b><i><u>SUHAIL SAYYED</u></i></b> sir.</p>
</div>

<h2 style="text-align:center" class="smole-title " >Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card" >
      <img src="faisal.jpeg" class="center" alt="faisal" style="width:83%">
      <div class="container">
        <h2>Faisal Shaikh</h2>
        <p class="title">CEO & Founder</p>
        <p>Faisal Shaikh is a CEO & Founder of the website "Apna Budget Tracker".</p>
        <p>shaikhfaisal5220@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="zoheb.jpeg" class="center" alt="zoheb" style="width:100%">
      <div class="container">
        <h2>Zoheb Shaikh</h2>
        <p class="title">Designer</p>
        <p>Zoheb Shaikh is a CO-Founder of the website "Apna Budget Tracker", also a designer.</p>
        <p>shaikhzoheb123@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="samad.jpeg" class="center" alt="samad" style="width:77%;">
      <div class="container">
        <h2>Abdul Samad</h2>
        <p class="title">Art Director</p>
        <p>ABdul Samad is a manager of this website "Apna Budget Tracker", also an art director.</p>
        <p>abdulsamad123@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>