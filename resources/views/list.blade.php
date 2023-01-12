<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>


<h1>MEMBERS DATA</h1>
<table border="1">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>address</td>
        <td>email</td>
        <td>operations</td>
    </tr>
   @foreach ($members as $member)
   <tr>
    <td>{{$member['id']}}</td>
    <td>{{$member['name']}}</td>
    <td>{{$member['address']}}</td>
    <td>{{$member['email']}}</td>
    <td><a href={{"delete/".$member['id']}}><i class="fa fa-close"></i></a>
        <a href={{"edit/".$member['id']}}> <i class="fa fa-edit"></i></a></td>

</tr>
   @endforeach

</table>
<div>
    {{$members->links()}}
</div>
<style>
    .w-5
    {
        display:none;
    }


</style>

</body>
</html>
