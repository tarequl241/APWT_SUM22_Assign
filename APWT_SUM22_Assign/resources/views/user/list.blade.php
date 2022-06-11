@extends('layout.main')
@section('content')

    <h1>List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Id</th>
            <th>Dob</th>
            <th>Email</th>

        </tr>
        @foreach($user as $u1)
        <tr>
            

            <td><a href="{{route('user.details',['id'=>$u1->id,'name'=>$u1->name])}}">{{$u1->name}}</a></td>
                <td>{{$u1->id}}</td>
                <td>{{$u1->dob}}</td>
                <td>{{ $u1->email }}</td>

        </tr>
        @endforeach
    </table>
@endsection