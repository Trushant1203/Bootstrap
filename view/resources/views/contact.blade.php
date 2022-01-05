<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        tr,td{
            background-color: yellow;
            border: 1px solid;
            text-align : center;
            border-radius: 10px;
            border-style: dotted;
            border-color: green;
        }
    </style>
    <title>Contact</title>
</head>
<body>
    <center>
    <table>        
    <tr>
    <td><h1>Contact Me</h1></td></tr>
    <tr><td>
    <h1>Hello, {{$name}}</h1></td></tr>
    <tr><td><h1> Roll No: {{$roll}}</h1></td></tr>
    
    </table>
    </center>
</body>
</html>