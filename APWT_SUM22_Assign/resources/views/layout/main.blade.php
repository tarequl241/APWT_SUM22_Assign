<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Page</title>



<body>
    <table  width="100%" height="80" border="0" cellpadding="5">
    <style>
        table {
          border-collapse: collapse;
          width: 100%;
        }
        
        th, td {
          padding: 8px;
          text-align: left;
          border-bottom: 1px solid #DDD;
        }
        
        tr:hover {background-color: #b9a9dc;}
        </style>
		<td align="left"><font face="Lucida Sans Unicode" color="White"><a href="{{route('home')}}"><b><p style="font-size:18px">Home</p></b></a> </font></td>

		<td align="center"><font face="Lucida Sans Unicode" color="White"><a href="{{route('user.list')}}"><b><p style="font-size:18px">Users List</p></b></a> </font></td>
    <td align="center"><font face="Lucida Sans Unicode" color="White"><a href="{{route('user.create')}}"><b><p style="font-size:18px">Sign Up</p></b></a> </font></td>
    

				
		{{-- <td align="left"><font face="Lucida Sans Unicode" color="White"><a href="{{route('aboutus')}}"><b><p style="font-size:18px">About us</p></b></a> </font></td>
        <td align="right"><font face="Lucida Sans Unicode" color="White"><a href="{{route('ourteam')}}"><b><p style="font-size:18px">Our's Team</p></b></a> </font></td>
        <td align="right"><font face="Lucida Sans Unicode" color="White"><a href="{{route('contactus')}}"><b><p style="font-size:18px">Contact Us</p></b></a> </font></td> --}}
    </table>
    </table>


    


    @yield('content')
</body>

</html>