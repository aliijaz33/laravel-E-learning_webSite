@extends('layout')


@section('content')

<style>
.body {
    background-color: rgb(181, 213, 210);
    display: flex;
    justify-content: space-between;
    width: 100%;
}

.content {
    width: 100%;
}

.sideNav {
    height: 100%;
    width: 10%;
    padding-top: 20px;
}

.sideNav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 20px;
    font-weight: 500;
    color: black;
    display: flex;
}

body {
    height: 100%;
    width: 100%;
}

.content01 {
    display: flex;
    flex-direction: row;
    justify-content: space-around;
}

.content02 {
    display: flex;
    flex-direction: row;
    justify-content: space-around;
}

#continueLearning {
    background-color: rgb(216, 234, 227);
    border-radius: 10px;
    display: flex;
    flex-direction: column;
    border: 4px solid white;
    width: 40%;

    margin: 1%;
}

.c1img {
    border: 1px solid black;
    width: 60%;
    height: 30%;
}

.c1descript {
    width: 40%;
    height: 30%;
}

.slideImg {
    width: 35%;
    height: 20%;
    margin: 10px;
    border: 1px solid black;
    border-radius: 10px;
}

.learningCommunity {
    display: flex;
    border: 4px solid white;
    border-radius: 6px;
    background-color: rgb(212, 239, 211);
    width: 40%;
    height: 50%;
    margin: 1%;
    padding: 4px;
}

.communityImg {
    margin: 3px;
    width: 250px;
    height: 150px;
    border-radius: 10px;
}

#upcomingCourses {
    size: 7px;
    border: 4px solid white;
    border-radius: 10px;
    background-color: #eae3db;
    width: 25%;
    height: 25%;
    margin: 1%;
    padding: 20px;
}

#upcomingEvents {
    border: 4px solid white;
    border-radius: 9px;
    width: 40%;
    height: 25%;
    margin: 1%;
    padding: 7px;
    margin-right: -60px;
    background-color: rgb(157, 159, 227);
}

.eventCase {
    border: 1px solid black;
    border-radius: 9px;
    background-color: aliceblue;
    display: flex;
    margin: 4px;
    padding: 4px;
}

.eventContent {
    margin-left: 12px;
}

/* Slideshow container */
.slideshow-container {
    /* display: flex;
    flex-direction: column; */
    max-width: 1000px;
    position: relative;
    margin: auto;
}

/* Hide the images by default */
.mySlides {
    display: none;
}

/* Next & previous buttons */
.prev,
.next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    margin-top: -22px;
    padding: 16px;
    color: rgb(53, 226, 30);
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
}

/* Position the "next button" to the right */
.next {
    right: 0;
    border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
    background-color: rgba(0, 0, 0, 0.8);
}

/* Caption text */
.text {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
}

/* The dots/bullets/indicators */
.dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
}

.active,
.dot:hover {
    background-color: #717171;
}

/* Fading animation */
.fade {
    animation-name: fade;
    animation-duration: 100000000000000s;
}

@keyframes fade {
    from {
        opacity: .9
    }

    to {
        opacity: 1
    }
}

.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 250px;
    max-height: 600px;
    margin: auto;
    text-align: center;
    font-family: arial;
    background-color: rgb(232, 198, 190);
}

.price {
    color: rgb(126, 45, 99);
    font-size: 22px;
}

.card button {
    border: none;
    outline: 0;
    padding: 12px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
}

.card button:hover {
    opacity: 0.7;
}


/* Slideshow container */
.slideshow-container1 {
    max-width: 1000px;
    position: relative;
    margin: auto;
}

/* Hide the images by default */
.mySlides1 {
    display: none;
}

/* Next & previous buttons */
.prev1,
.next1 {
    cursor: pointer;
    padding: 10px 35px 10px 35px;
    margin: 0px 50px 30px 50px;
    color: rgb(41, 206, 55);
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 20px;
}

/* Position the "next button" to the right */
.next1 {
    right: 0;
    border-radius: 20px;
}

/* On hover, add a black background color with a little bit see-through */
.prev1:hover,
.next1:hover {
    background-color: rgba(0, 0, 0, 0.8);
}

/* Caption text */
.text1 {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
}

/* Number text (1/3 etc) */
.numbertext1 {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
}

/* The dots/bullets/indicators */
.dot1 {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
}

.active1,
.dot1:hover {
    background-color: #717171;
}

/* Fading animation */
.fade1 {
    animation-name: fade;
    animation-duration: 1.5s;
}

@keyframes fade1 {
    from {
        opacity: .4
    }

    to {
        opacity: 1
    }
}

.card1 {
    display: flex;
    flex-direction: row;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 600px;
    margin: auto;
    text-align: center;
    font-family: arial;
}

.cardImg {
    margin: 3px;
    background-color: blue;
    border-radius: 5px;
    padding: 2px 1px 2px 1px;
    height: 150px;
    width: 250px;
}

.price1 {
    color: rgb(126, 45, 99);
    font-size: 22px;
}

.card button {
    border: none;
    outline: 0;
    padding: 12px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
    font-size: 18px;
}

.card button:hover {
    opacity: 0.7;
}
</style>

<div class="body">
    <section class="sideNav">
        <a href="/">Dashboard</a>
        <a href="course">My Courses</a>
        <a href="quiz">My Quizes</a>
        <a href="result">My Result</a>
        <a href="list">User list</a>

    </section>
    <section class="content">
        <div class="content01">
            <div id="continueLearning">
                <!-- Slideshow container -->
                <div class="slideshow-container1">

                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides1 fade1">
                        <div class="card1">
                            <div>
                                <img class="cardImg" src="images/course1.png" alt="Denim Jeans">
                            </div>
                            <div style="margin: 5px;">
                                <p>You have succefully completed this course and your progress in this course
                                    mention below</p>
                                <hr>
                                <h3>Your Score</h3>
                                <p class="price1">35/50</p>
                            </div>
                        </div>
                    </div>
                    <div class="mySlides1 fade1">
                        <div class="card1">
                            <div>
                                <img class="cardImg" src="images/course2.png" alt="Denim Jeans">
                            </div>
                            <div style="margin: 5px;">
                                <p>You have succefully completed this course and your progress in this course
                                    mention below</p>
                                <hr>
                                <h3>Your Score</h3>
                                <p class="price1">45/50</p>
                            </div>
                        </div>
                    </div>


                    <br>


                    <!-- Next and previous buttons -->

                    <div style="text-align:center">
                        <a class="prev1" onclick="plusSlides1(-1)">&#10094;</a>
                        <a class="next1" onclick="plusSlides1(1)">&#10095;</a>
                    </div>
                </div>

            </div>
            <div class="learningCommunity">
                <img class="communityImg" src="images/discord.png">
                <div class="learningCommunityTxt">
                    <p>Discord Community at Scrimba Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor,
                        reprehenderit harum dolor , vel placeat. Impedit,
                        amet.</p><br>
                    <hr>
                    <a href="discord.com">join us on discord</a>
                </div>
            </div>
        </div>

        <div class="content02">
            <div id="upcomingCourses">
                <!-- Slideshow container -->
                <div class="slideshow-container">
                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                        <div class="card">
                            <img src="images/img1.jpg" alt="Denim Jeans" style="width:100% ; height: 150px;">
                            <h1>React Native Course</h1>
                            <p class="price">$59.99</p>
                            <p>Most Popular App Development Course for cross-platform applications From Beginner to
                                Professional</p>
                            <p><button>Add to Course</button></p>
                        </div>
                    </div>

                    <div class="mySlides fade">
                        <div class="card">
                            <img src="images/img2.jpg" alt="Denim Jeans" style="width:100% ; height: 150px;">
                            <h1>Flutter For Beginners</h1>
                            <p class="price">$49.99</p>
                            <p>Best-Selling cross-platform App Development Course From Beginner to Professional</p>
                            <p><button>Add to Course</button></p>
                        </div>
                    </div>

                    <div class="mySlides fade">
                        <div class="card">
                            <img src="images/img3.jpg" alt="Denim Jeans" style="width:100% ; height: 150px;">
                            <h1>Fiver for Freelancers</h1>
                            <p class="price">$19.99</p>
                            <p>Buy Fiverr's online course to help you boost your freelancing career and improve your
                                business online presence</p>
                            <p><button>Add to Course</button></p>
                        </div>
                    </div>

                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>

                <!-- The dots/circles -->
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>
            <div id="upcomingEvents">
                <h3>Upcoming Events</h3>
                <div class="eventCase">
                    <img class="slideImg" src="images/event.jpg">
                    <div class="eventContent"><br>
                        Best Bootcamp:teacher lead group disscussion
                        <button>Bootcamp</button>
                        <p>8-9 PM </p>
                        <P>Tomorrow</P>
                    </div>
                </div>
                <div class="eventCase">
                    <img class="slideImg" src="images/event.jpg">
                    <div class="eventContent"><br>
                        Best Bootcamp:teacher lead group disscussion
                        <button>Free</button>
                        <p>8-9 PM </p>
                        <P>Tomorrow</P>
                    </div>
                </div>
                <div class="eventCase">
                    <img class="slideImg" src="images/event.jpg">
                    <div class="eventContent"><br>
                        Best Bootcamp:teacher lead group disscussion
                        <button>Bootcamp</button>
                        <button>Free</button>
                        <p>8-9 PM </p>
                        <P>Tomorrow</P>
                    </div>
                </div>
                <div class="eventCase">
                    <img class="slideImg" src="images/event.jpg">
                    <div class="eventContent"><br>
                        Best Bootcamp:teacher lead group disscussion
                        <button>Bootcamp</button>
                        <p>8-9 PM </p>
                        <P>Tomorrow</P>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
let slideIndex = 1;
showSlides(slideIndex);
// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}

let slideIndex1 = 1;
showSlides1(slideIndex1);

// Next/previous controls
function plusSlides1(n1) {
    showSlides1(slideIndex1 += n1);
}

// Thumbnail image controls
function currentSlide1(n1) {
    showSlides1(slideIndex1 = n1);
}

function showSlides1(n1) {
    let i;
    let slides1 = document.getElementsByClassName("mySlides1");
    let dots1 = document.getElementsByClassName("dot1");
    if (n1 > slides1.length) {
        slideIndex1 = 1
    }
    if (n1 < 1) {
        slideIndex1 = slides1.length
    }
    for (i = 0; i < slides1.length; i++) {
        slides1[i].style.display = "none";
    }
    for (i = 0; i < dots1.length; i++) {
        dots1[i].className = dots1[i].className.replace(" active1", "");
    }
    slides1[slideIndex1 - 1].style.display = "block";
    dots1[slideIndex1 - 1].className += "active1";
}
</script>

@endsection