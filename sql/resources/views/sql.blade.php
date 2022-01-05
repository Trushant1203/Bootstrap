<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Query</title>
    <style>
        table.th,tr,td{
            color: green;
            border: 1px solid blue;
            border-collapse: collapse;
            border-radius: 10px;
        }
        h1{
            color: red;
        }
        h2{
            color: brown;
        }
    </style>
</head>
<body>
    <center>
    <h1>Select,Insert,Update and Delete Query</h1>
    <hr>
    <h2>Select All Record</h2>
    <table>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>City</th>
    @foreach ($student as $item)
        <tr><td>
        {{$item->id}}</td><td>
        {{$item->name}}</td><td>
        {{$item->email}}</td><td>
        {{$item->city}}</td><td>
        </td></tr>
    @endforeach
</table>
<hr>
<h2>Select Only Id</h2>
<table>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>City</th>
    @foreach ($student1 as $item1)
        <tr><td>
        {{$item1->id}}</td><td>
        {{$item1->name}}</td><td>
        {{$item1->email}}</td><td>
        {{$item1->city}}</td><td>
        </td></tr>
    @endforeach
</table>
<hr>
<h2>Select Onle City</h2>
<table>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>City</th>
    @foreach ($student2 as $item2)
        <tr><td>
        {{$item2->id}}</td><td>
        {{$item2->name}}</td><td>
        {{$item2->email}}</td><td>
        {{$item2->city}}</td><td>
        </td></tr>
    @endforeach
</table>
</center>
</body>
</html>