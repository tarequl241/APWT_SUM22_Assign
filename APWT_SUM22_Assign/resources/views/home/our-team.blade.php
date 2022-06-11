@extends('layout.main')

@section('content')
    <h1>Our Team Members</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>DOB</th>
        </tr>
        @foreach($teams as $team)
        <tr>
            <td>{{$team['id']}}</td>
            <td>{{$team['name']}}</td>
            <td>{{$team['dob']}}</td>
        </tr>
        @endforeach
    </table>
@endsection