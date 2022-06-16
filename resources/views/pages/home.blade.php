@extends('layouts.default')

@section('content')

<head>
    <title>Hector Elcid</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
  </head>
  <style>
    body{
  background-color: rgb(125, 102, 8 );
}
html{
  scroll-behavior: smooth;
}


.ProfileCard{
  Position: relative;
  border: 3px solid black;
  border-radius: 10px;
  background-color: white;
  box-shadow: 10px 10px 8px 10px rgba(255, 0, 0, 0.2);
  max-width: 300px;
  text-align: center;
}
.Description{
  color: rgb(24,24,24);
  font-size: 18px;
}

.ProfileCard a {
  text-decoration: none;
  font-size: 30px;
  color: black;
}

.InsideText{
  margin-top: 0px;
  background-color: white;
}

.navContainer{
background-color: white;
border: 3px solid black;
border-radius: 10px;
box-shadow: 10px 10px 8px 10px rgba(255, 0, 0, 0.2);
width: 300px;
height: 500px;
margin-top: 20px;
margin-right: 0;
border: 2px solid black;
}

.navContainer a{
  margin-bottom: 10px;
  text-decoration: none;
  display: grid;
  grid-column: 1;
  grid-row: 1;
  font-size: 30px;
  color: black;
}

.Hello{
position: absolute;
top: 25px;
left: 35%;
padding:10px;
padding-left: 100px;
border: 3px solid black;
background-color: white;
}
.Hello2{
position: absolute;
top: 135%;
left: 35%;
margin-right: 173px;
padding:10px;
padding-left: 100px;
border: 3px solid black;
background-color: white;
font-size:20px;
}
.Hello3{
position: absolute;
top: 175%;
left: 35%;
margin-right: 173px;
padding:10px;
padding-left: 100px;
border: 3px solid black;
background-color: white;
font-size:20px;
}

.Hello4{
position: absolute;
top: 222%;
left: 35%;
margin-right: 173px;
padding:10px;
padding-left: 100px;
border: 3px solid black;
background-color: white;
font-size:20px;
}

.Hello li{
  font-size: 25px;
}

  </style>

  
  <body>
    <div class="ProfileCard">
      <img src="Designs/Elcid.jpg" style="width:100% ">
         <h1>HECTOR ELCID B. MIRANDA II</h1>
         <p class="Description">STUDENT, BSCS</p>
         <a href="#"><i class="fa fa-dribbble"></i></a>
         <a href="#"><i class="fa fa-twitter"></i></a>
         <a href="#"><i class="fa fa-facebook"></i></a>
    </div>

    <div class="navContainer">
      <nav>
       <br><br><br><br><br>
        <a href="#AboutMe">ABOUT ME</a><br><br>
        <a href="#CS202">CS 202</a><br><br>
        <a href="#Laravel">Laravel Topic</a><br><br>
        <a href="#Future">Future Self</a><br><br>
      </nav>
    </div>

    <div class="Hello" id= "AboutMe">
      <h1>PERSONAL INFORMATION</h1>
      <ul>
        <li>Name: Miranda II, Hector Elcid Bumanglag</li>
        <li>Age: 19</li>
        <li>Address: 054 Kaimito St.,Pinalad Road, Pinagbuhatan, Pasig City</li>
        <li>Contact Number: 09396148928</li>
        <li>Email Add: mirandaelcid27@yahoo.com</li>
        <li>Religion: Roman Catholic</li>
        <li>Civil Status: Single</li>
        <li>Date of Birth : December 25, 1999</li>
        <li>Place of Birth : Cantilan, Surigao Del Sur </li>
      </ul>

      <h1>EDUCATIONAL ATTAINMENT</h1>
      <ul>
        <li>Primary: Saint Michael College</li>
        <li>Secondary: Saint Michael College </li>
        <li>Secondary: Nagpayong High School</li>
        <li>Senior High School: AMA COMPUTER COLLEGE</li>
      </ul>

      <h1>HOBBIES</h1>
      <ul>
        <li>Playing computer games</li>
        <li>Reading Manga,Light Novel, Manhwa</li>
        <li>Watching anime</li>
        <li>Adventure</li>
      </ul>

      <h1>Likes and Dislikes</h1>
      <ul>
        <li>I love reading and watching anime</li>
        <li>I love eating</li>
        <li>I love Ronalee Sotto</li>
        <li>I enjoy travelling with my loved ones</li>
        <li>I hate people who are dishonest</li>
        <li>I hate cheating</li>

      </ul>

    </div>

    <div class="Hello2" id = "CS202">
      <h1>GIT & GITHUB</h1>
      <p>So what is git and github? Git is a free and open source distributed version control system designed to handle
        everything from small to very large projects with speed and efficiency.

        Git is easy to learn and has a tiny footprint with lightning fast performance. It outclasses
        SCM tools like Subversion, CVS, Perforce, and ClearCase with features like cheap local
        branching, convenient staging areas, and multiple workflows. I have come to like it because with it 
        I am sure that i will definitely use it in the future as a computer programmer</p>

    </div>
    
    <div class="Hello3" id = "Laravel">
      <h1>LARAVEL AN INTRODUCTION</h1>
      <p>Laravel is an open-source web MVC framework for PHP.

      Laravel is a robust framework that provides easy development of PHP web applications
      with features like a modular packaging system with a dedicated dependency manager,
      access to relational databases, and other utilities for application deployment and
      maintenance.
      Laravel strives to provide an amazing developer experience, while providing
      powerful features such as thorough dependency injection, an expressive
      database abstraction layer, queues and scheduled jobs, unit and integration
      testing, and more.
      I choose Laravel Installation as it is one of my first experience and trying a framework.
      And I know for a fact that with my experience with it it can help me in the future.</p>

    </div>

    <div class="Hello4" id = "Future">
      <h1>FUTURE SELF</h1>
      <p>In the near future I want to be a programmer be it a full stack developer or
        have enough knowledge for being a app developer. Although some of the reason i choose
        programming is due to demand but it is also a passion of mine to create an app with my own cheat codes
        Hopefully in the near future I will attain what I want and be successfull so I can repay my parents for their
        hardwork.
      </p>

    </div>

  </body>

@stop
