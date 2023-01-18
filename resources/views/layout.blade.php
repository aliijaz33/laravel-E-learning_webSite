<html>

<head>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
    body {
        min-height: 100vh;
        width: 100%;
    }

    .navbar {
        background-color: antiquewhite;
    }

    .sideHeader {
        width: 50%;
        display: flex;
        justify-content: flex-end;
        align-items: center;

    }

    .imgLogo {

        border-radius: 5px;
        width: 85px;
        height: 60px;
        margin: 10px;
    }

    .form-control {
        border: 2px solid black;
        border-radius: 19px;
        height: 45px;
    }

    .form-btn {
        background-color: lightgreen;
        border: 1px solid black;
        border-radius: 19px;
        height: 43px;
    }

    .imgProfile {
        border-radius: 45px;
        float: right;
        width: 50px;
        height: 50px;

    }

    .footer {
        background-color: rgb(161, 184, 183);
        display: flex;
        justify-content: space-evenly;
        position: sticky;
        top: 100%;
        width: 100%;

    }

    ul {
        margin: 0;
        padding: 0;
        display: flex;
        align-items: center;
        gap: 3rem;
    }

    li {
        list-style-type: none;
        position: relative;
        padding: 0.625rem 0 0.5rem;
    }

    li ul {
        flex-direction: column;
        position: absolute;
        background-color: black;
        align-items: flex-start;
        transition: all 0.5s ease;
        width: 15rem;
        right: 0.3rem;
        top: 3.9rem;
        border-radius: 0.325rem;
        gap: 0;
        padding: 1rem 0rem;
        opacity: 0;
        box-shadow: 0px 0px 100px rgba(20, 18, 18, 0.25);
        display: none;
    }

    ul li:hover>ul,
    ul li ul:hover {
        visibility: initial;
        opacity: 1;
        display: flex;
        color: azure;
    }

    .material-icons-outlined {
        color: #888888;
        transition: all 0.3s ease-out;
    }

    .material-icons-outlined:hover {
        color: #ff9800;
        transform: scale(1.25) translateY(-4px);
        cursor: pointer;
    }


    .profile {
        height: 3rem;
        width: auto;
        cursor: pointer;
        border-radius: 45px;
        float: right;
        width: 50px;
        height: 50px;
    }

    .sub-item {
        width: 100%;
        display: flex;
        align-items: center;
        gap: 0.725rem;
        cursor: pointer;
        padding: 0.5rem 1.5rem;
    }

    .sub-item:hover {
        background-color: rgba(232, 232, 232, 0.4);
    }

    .sub-item:hover .material-icons-outlined {
        color: #ff9800;
        transform: scale(1.08) translateY(-2px);
        cursor: pointer;
    }

    .sub-item a {
        text-decoration: none;
    }

    .sub-item:hover p {
        color: #ff9800;
        cursor: pointer;
    }

    .sub-item p {
        font-size: 0.85rem;
        color: white;
        font-weight: 500;
        margin: 0.4rem 0;
        flex: 1;
    }

    .uName {
        padding: 0px 85px 0px 85px;
    }
    </style>

</head>
<!-- <a class="" href="profile"><img class="imgProfile" src="images/profile.jpg" alt="profile picture"></a> -->

<body>
    <div class="header">
        @section('header')
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <img class="imgLogo" src="images/logo.png" alt="logo">
                <h2 style="padding-right: 30px;">
                    SCRIMBA
                </h2>
                @if(Session::has('user'))
                <ul>
                    <li>
                        <img src="images/profile.jpg" class="profile" />
                        <ul>
                            <li class="uName">
                                <h5>{{Session::get('user')['name']}}</h5>
                            </li>
                            <li class="sub-item">
                                <span class="material-icons-outlined"></span>
                                <a class="" href="profile">
                                    <p>My Profile</p>
                                </a>
                            </li>
                            <li class="sub-item">
                                <span class="material-icons-outlined"></span>
                                <a class="" href="course">
                                    <p>My Courses</p>
                                </a>
                            </li>
                            <li class="sub-item">
                                <span class="material-icons-outlined"></span>
                                <a class="" href="logout">
                                    <p>LogOut</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                @else
                <li><a href="login">Login</a></li>
                @endif
            </div>
        </nav>
        @show
    </div>

    <hr>

    <div class="content">
        @section('content')
        @show
    </div>
    <hr>
    <div class="footer">
        @section('footer')
        <div>
            <h3><a>Tuotoria</a></h3>
            <p><a>Home</a></p>
            <p><a>Plan and Pricing</a></p>
            <p><a>Gift Membership</a></p>
            <P><a>Scholorship program</a></P>
            <p><a>Teacher Talent program</a></p>
        </div>
        <div>
            <h3><a>Community</a></h3>
            <p><a>Explore the community</a></p>
            <p><a>Community handbook</a></p>
            <p><a>Podcast</a></p>
            <P><a>Youtube</a></P>
            <p><a>Blog</a></p>
        </div>
        <div>
            <h3><a>Courses</a></h3>
            <p><a>All courses</a></p>
            <p><a>Free Courses</a></p>
            <p><a>Pro courses</a></p>
            <P><a>Front-Path</a></P>
            <p><a>Self placed bootcamp</a></p>
        </div>
        @show
    </div>
</body>

</html>