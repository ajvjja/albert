<?php 
  session_start();
  if (!isset($_SESSION['username'])) {
    header('location:index.php');
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>My Portfolio</title>
    <link rel="stylesheet" href="style.css">
<style>

body{
  background-color: #FAFAFA;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #FAFAFA;
  margin-right: 15px;

}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 20px 20px;
  text-decoration: none;
  font-family: Arial;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}

.content1{
  background-color: auto;
  height: 350px;
  width: 350px;
  margin-left: 100px;
  margin-top: -300px;
}

.content2{
  height: 350px;
  width: 350px;
  margin-top: -370px;
  float: right;
  background-color: auto;
  margin-right: 100px;
  font-family: Arial;

}


.container {
  width: 300px;
  height: 19px;
  background-color: #ddd;
}

.skills {
  text-align: right;
  color: white;
}

.html {width: 90%; background-color: #04AA6D;}
.css {width: 80%; background-color: #04AA6D;}
.js {width: 30%; background-color: #04AA6D;}
.php {width: 70%; background-color: #04AA6D;}


.column {
  float: left;
  margin-left: 300px;
  width: 30%;
  padding: 10px;
  height: 200px;
  margin: 10px;
  padding-left: 200px;

}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.skillset{
  height: 350px;
  padding-top: -10px;
  width: auto;
}

.row{
  padding-top: -20px;
}

h2, p, h4 {
  font-family: Arial;
}

.myfavorite{
  background-color: #04AA6D;
  border-radius: 10px;
  height: 350px;
  width: 350px;
  margin-left: 100px;
  margin-top: -70px;
}

.contactme{
  background-color: auto;
  height: 400px;
  width: 700px;
  float: right;
  margin-right: 100px;
  margin-top: -350px
}


#contactme{
  font-family: Arial;
  font-size: 40px;
  text-align: center;
}

.input-group{
  height: 20px;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 6px;
  border: 1px solid gray;
  width: 25em;
}

#btn{
  background-color: #04AA6D;
  color: white;
  border-radius: 50px;
  height: 40px;
  width: 150px;
  font-size: 15px;
  font-family: Arial;
  font-weight: 30px;
  margin-left: -350%;
  margin-left: -300px;
}


textarea{
  resize: none;
  height: auto;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 6px;
  border: 1px solid gray;
  width: 25em;
  font-family: Arial;
}

.wrapper-form{
  height: 200px;
  width: 427px;
  background-color: auto;
  margin-top: -30px;
  margin-left: 100px;
}



.two{
  background-color: #EBEBEB;
  width: 25em;
  height: 22em;
  margin-top: 0px;
  border-radius: 0px 0px 10px 10px;
  border: 1px solid #EBEBEB;
}

form{
  padding: 40px;
}

.header{
  width: 25em;
  margin:50px auto 0px;
  color: white;
  background: #04AA6D;
  text-align: center;
  border: 1px solid #04AA6D;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
  margin-top: 110px;
}

input{
  border-radius: 2px;
  border: 1px solid gray;
}

.header2{
  width: 25em;
  margin:50px auto 0px;
  color: white;
  background: #04AA6D;;
  text-align: center;
  border: 1px solid #04AA6D;;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
  margin-top: 110px;
}

.three{
  background-color: #EBEBEB;
  width: 25em;
  height: 14em;
  margin-top: 0px;
  border-radius: 0px 0px 10px 10px;
  border: 1px solid #EBEBEB;
}

#send{
  background-color:#04AA6D;;
  color: white;
  border: 1px solid #04AA6D;;
  margin-top: 20px;
}

#send:hover{
  background-color: white;
  color: #04AA6D;;
  opacity: 0.9;
  transition: .9s ease;
}

h1{
  width: auto;
  height: 50px;
  padding: 20px;
  color: white;
  margin-top: 250px;
  font-size: 90px;
  font-family: Arial;
  font-weight: 900;
}




























</style>
</head>
<body>

<ul>
  <li style="float:right"><a class="active" href="logout.php">Logout</a></li>
</ul>

<center><img src="me1.jpg" style="height: 300px; width: 300px; margin-top: 50px; box-shadow: 10px 10px 5px grey;"></center>
<div class="content1">
    <h2 style="color: #04AA6D;">MY STORY</h2>
    <p>Hi, my name is John Albert Clerigo, currently taking bachelor of science information technology at Laguna State Polytechnic University. I choose this course because I think that studying tnformation technology gives you the chance to earn more money in the future. It also has multiple carrier choice which is a good thing for me.</p>
</div>

<div class="content2">
  <h2 style="color: #04AA6D;">PERSONAL INFORMATION</h2>
  Name: John Albert Clerigo <br>
  <hr style="width:90%;text-align:left;margin-left:0">
  Age: 21 <br>
  <hr style="width:90%;text-align:left;margin-left:0">
  Phone: 09123456789 <br>
  <hr style="width:90%;text-align:left;margin-left:0">
  Email: albertclerigo@gmail.com <br>
  <hr style="width:90%;text-align:left;margin-left:0">
  Address: San Pablo City <br>
</div>

<section class="skillset">
  <CENTER><h2 style="color: #04AA6D;">MY SKILLSET</h2></CENTER>
                  <div class="row">
                        <div class="column">
                            
                            <h4>HTML</h4>
                            <div class="container">
                              <div class="skills html">90%</div>
                            </div>

                            <h4>CSS</h4>
                            <div class="container">
                              <div class="skills css">80%</div>
                            </div>
                        </div>
                        <div class="column">
                            
                                <h4>JavaScript</h4>
                                <div class="container">
                                  <div class="skills js">30%</div>
                                </div>

                                <h4>PHP</h4>
                                <div class="container">
                                  <div class="skills php">70%</div>
                                </div>
                        </div>
                    </div>
</section>

<div class="myfavorite">
  <CENTER><h2 style="color: white; padding-top: 15px;">Favorite Hobbies</h2>
  <p>
  Playing Guitar <br>
  Playing Badminton <br>
  Playing Mobile Legends <br></p>

  <h2 style="color: white; padding-top: 15px;">Favorite Programming Languages</h2>
   <p>
  HTML <br>
  C# <br>
  CSS <br>
  JAVA <br></p>

  </CENTER> 
</div>

<div class="contactme">
  <section class="wrapper-contact" id="contacts">
                    <h2 id="contactme">ContactMe</h2>

                    <div class="wrapper-form">
                    <form>
                            <table>
                                <tr>
                                    <td>
                                        <input type="text" class="input-group" placeholder="Name" id="paddingText">
                                    </td>
                
                                </tr>
                                
                                <tr>
                                    <td>
                                        <input type="text" class="input-group" placeholder="Your email address" id="paddingText">
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td>
                                        <textarea cols="70" rows="3" placeholder="Message"></textarea>
                                        
                                    </td>
                            
                                </tr>

                                <tr>
                                    <td></td>
                                    <td><input type="submit" value="Submit Form" id="btn"></td>
                                </tr>
                            </table>
                    </form>
            </section>
</div>

</script>






        <script src="src/index.js"></script>
</body>
</html>
