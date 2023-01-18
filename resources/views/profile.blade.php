
@extends('layout')


@section('content')
<style>
.container {
    text-align: center;
    border-radius: 12px;
    border-color: solid black;
    background-color: dimgray;
    border-radius: 5px;
    width: fit-content;
}

/* .profileDiv {
    border-width: 12px;
    border-color: solid black;
} */

.container h5 {
    padding-top: 35px;
}

.logoutButton {
    background-color: aqua;
    border-width: 3px;
    border-radius: 15px;
    margin: 20px 5px 10px 5px;

}

.logoutButton a {
    text-decoration: none;
    color: black;
}

.logoutButton p {
    padding: 10px 5px 0px 5px;
}
</style>

<div class="container">
    <h1>Profile</h1>
    <div class="profileDiv">
        <h5>Name : {{Session::get('user')['name']}}</h5>
        <h5>Email : {{Session::get('user')['email']}}</h5>
        <h5>Password :{{Session::get('user')['password']}}</h5>
    </div>
    <button class="logoutButton">
        <span class="material-icons-outlined"></span>
        <a class="" href="logout">
            <p>LogOut</p>
        </a>
    </button>
</div>


@endsection

