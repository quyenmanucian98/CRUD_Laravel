@extends('home')
@section('quyen10')
    <form>
        @csrf
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Name Player</th>
                <th scope="col">Age Player</th>
                <th scope="col">Nationaly Player</th>
                <th scope="col"><a class="btn btn-outline-light" href="{{route('players.formAdd')}}">ADD PLAYER</a></th>
            </tr>
            </thead>
            <tbody>
            @foreach($players as $key => $player)
                <tr>
                    <th scope="row">{{++$key}}</th>
                    <td style="color: hotpink">{{$player->name}}</td>
                    <td style="color: hotpink">{{$player->age}}</td>
                    <td style="color: hotpink">{{$player->nationality}}</td>
                    <td style="color: hotpink"><a class="btn btn-warning" href="{{route('players.delete',$player->id)}}">DELETE</a>
                        <a class="btn btn-success" href="{{route('players.edit',$player->id)}}">EDIT</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </form>
@endsection
