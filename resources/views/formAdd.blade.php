@extends('home')
@section('quyen10')
<form method="post" action="{{route('players.addPlayer')}}">
    @csrf
    <table class="table">
        <tr>
            <th>
                <label >Name Player</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Name">
            </th>
            <tr>
            <th>
                <label>Age Player</label>
                <input type="text" class="form-control" name="age" placeholder="Enter Age">
            </th>
            <tr>
            <th>
                <label>Nationaly Player</label>
                <input type="text" class="form-control" name="nationality" placeholder="Enter Nationality">
            </th>
            <tr>
            <th>
                <button type="submit" class="btn btn-primary">ADD</button>
            </th>
        </tr>
    </table>
</form>
    @endsection
