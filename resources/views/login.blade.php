@extends('home')
@section('quyen10')
    <form method="post" action="{{route('login.check')}}">
        @csrf
        <table class="table">
            <tr>
                <th>
                    <label >USERNAME</label>
                    <input type="text" class="form-control" name="username" placeholder="UserName">
                </th>
            <tr>
                <th>
                    <label>PASSWORD</label>
                    <input type="password" class="form-control" name="password" placeholder="PassWord">
                </th>
            <tr>
            <tr>
                <th>
                    <button type="submit" class="btn btn-primary">LOGIN</button>
                </th>
            </tr>
        </table>
    </form>
@endsection
