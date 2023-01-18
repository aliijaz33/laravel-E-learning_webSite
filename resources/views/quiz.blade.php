@extends('layout')


@section('content')

<h1 style="text-align: center;">My Quizes</h1>

<br>
<br>

<h2 style="text-align: center ">{{ $names = session('user.name') }}</h2>
<br>
<table class="table" border="1">
    <tr>

        <td>
            <h3>Name</h3>
        </td>
        <td>
            <h3>Quiz ID</h3>
        </td>
        <td>
            <h3>Course Name</h3>
        </td>
        <td>
            <h3>Score</h3>
        </td>
        <td>
            <h3>Course ID</h3>
        </td>


    </tr>
    @foreach ($score as $u)
    @if($u->name == $names)
    <tr>
        <td>{{$u->name}}</td>
        <td>{{$u->quiz_id}}</td>
        <td>{{$u->course_name}}</td>
        <td>{{$u->score}}</td>
        <td>{{$u->course_id}}</td>
    </tr>
    @endif
    @endforeach
</table>
@endsection