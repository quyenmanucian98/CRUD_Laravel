@extends('home')
@section('quyen10')
    <form method="post" action="{{route('players.edit',$player->id)}}">
        @csrf
        <table class="table">
            <tr>
                <th>
                    <label >Name Player</label>
                    <input type="text" class="form-control" value="{{$player->name}}" name="name" placeholder="Enter Name">
                </th>
            <tr>
                <th>
                    <label>Age Player</label>
                    <input type="text" class="form-control" value="{{$player->age}}" name="age" placeholder="Enter Age">
                </th>
            <tr>
                <th>
                    <label>Nationaly Player</label>
                    <input type="text" class="form-control" value="{{$player->nationality}}" name="nationality" placeholder="Enter Nationality">
                </th>
            <tr>
                <th>
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                </th>
            </tr>
        </table>
    </form>
@endsection
