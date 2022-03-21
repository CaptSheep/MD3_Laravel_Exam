<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dealer List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>
<body>

<table border="1" class="table" >

    <thead class="thead-dark">
    <a href="{{route('dealers.create')}}" class="btn btn-primary">Create Dealer</a>
    <p style="text-align: center" >DANH SACH DAI LY BANG HANG</p>
    <tr>
        <td style="text-align: center">ID</td>
        <td style="text-align: center">Code</td>
        <td style="text-align: center">Name</td>
        <td colspan="4" style="text-align: center">Action</td>
    </tr>
    </thead>
    <tbody>
    <form action="{{route('dealers.search')}}" method="get">
        <input name="search" type="text">
        <button>SEARCH</button>
    </form>
    @foreach($dealers as $key => $dealer)
        <tr>
            <td style="text-align: center">{{$key + 1}}</td>
            <td style="text-align: center">{{$dealer->code}}</td>
            <td style="text-align: center">{{$dealer->name}}</td>

            <td style="text-align: center"> <a href="{{route('dealers.show',$dealer->id)}}">Dealer Detail</a></td>
            <td style="text-align: center"> <a href="{{route('dealers.update',$dealer->id)}}">Update Detail</a></td>
            <td style="text-align: center"> <a onclick="return confirm('Are you sure?')" href="{{route('dealers.destroy',$dealer->id)}}">Delete Dealer</a></td>


        </tr>
    @endforeach
    </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>
</html>
