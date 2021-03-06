<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dealer Detail</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
<table border="1" class="table">
    <thead class="thead-dark">
    <tr>
        <th style="text-align: center">Code</th>
        <th style="text-align: center" >Status</th>
        <th style="text-align: center">Name</th>
        <th style="text-align: center">Phone Number</th>
        <th style="text-align: center">Email</th>
        <th style="text-align: center">Address</th>
        <th style="text-align: center">Owner</th>
    </tr>
    </thead>
    <tbody>
    @foreach($dealers as  $dealer)
        <tr>
            <td style="text-align: center">{{$dealer->code}}</td>
            <td style="text-align: center">{{$dealer->status->name}}</td>
            <td style="text-align: center">{{$dealer->name}}</td>
            <td style="text-align: center">{{$dealer->phoneNumber}}</td>
            <td style="text-align: center">{{$dealer->email}}</td>
            <td style="text-align: center">{{$dealer->address}}</td>
            <td style="text-align: center">{{$dealer->owner}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
<a href="{{route('dealers.index')}}" class="btn btn-primary">Back</a>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>
</html>
