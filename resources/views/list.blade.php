<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Member List </h1>
<form action="">
@csrf
        <input type="search" name="search" value="" placeholder="type here for search"> 
        <button>Search</button>
        <button> <a href="{{url('/list')}}"  type="button"></a>Reset</button>

        <br><br>
</form>
<table border="1">
    <tr>
    <td>ID</td>
    <td>NAME</td>
    <td>EMAIL</td>
    <td>ADDRESS</td>
 </tr>
@foreach($members as $member)
 <tr>
    <td>{{$member['id']}}</td>
    <td>{{$member['name']}}</td>
    <td>{{$member['email']}}</td>
    <td>{{$member['address']}}</td>
    

 </tr>

 @endforeach


</table> 
</body>
</html>