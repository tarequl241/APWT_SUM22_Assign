@extends('layout.main')
@section('content')
<form action="" method="post" style="text-align: center";>
    {{@csrf_field()}}
    Name : <input type="text" value="{{old('name')}}" name="name"> </br>
    @error('name')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
    Id : <input type="text" name="id" value="{{old('id')}}"> </br>
    @error('id')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
    DOB:<input type="date" name="dob"> </br>

    Email : <input type="text" value="{{old('email')}}" name="email"> </br>
    @error('email')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
    Password: <input type="password" name="password"></br>
    Confirm Password : <input type="password" name="conf_password"></br>
    @error('conf_password')
        <span class="text-danger">{{$message}}</span><br>
    @enderror
   
    <input type="submit" value="Create">
</form>
@endsection