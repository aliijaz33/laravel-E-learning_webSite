@extends('layout')

@section('content')
<style>
td {
    border: 1px;
    border-width: 2px;
}

tr {
    border-width: 5px;
}
</style>
<h1>User List</h1>
<!-- <div>
    <ul>
        @foreach($user as $u)
        <li>{{$u->name}}</li>
        @endforeach
    </ul>
</div> -->
<table class="table" border="1">
    <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Password</td>
        <td>Opperation</td>
    </tr>
    @foreach ($user as $u)
    <tr>
        <td>{{$u['name']}}</td>
        <td>{{$u['email']}}</td>
        <td>{{$u['password']}}</td>
        <td><a href={{"delete/".$u->id}}>Delete</a></td>
    </tr>
    @endforeach
</table>
@if(Session::has('status'))
<script>
swal("Great", "{ Session::get {'status'} }", "success");
</script>
@endif
@endsection