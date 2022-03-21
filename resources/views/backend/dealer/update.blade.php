<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Create Dealer</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>
<body>
<form action="{{route('dealers.update',$dealer->id)}}" method="post">
    @csrf
    <div>
        <label class="control-label" for="select" >Select Status</label>
        <select name="select" id="select" class="form-control">
            @foreach($status as $status)
                <option {{ ($dealer->status->id == $status->id) ? 'selected ' : ''  }} value="{{$status->id}}">{{$status->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group has-success has-feedback">
        <label class="control-label" for="name">Name</label>
        <input type="text" class="form-control" id="name" aria-describedby="usernameStatus" name="name" value="{{$dealer->name}}">
    </div>
    <div class="form-group has-success has-feedback">
        <label class="control-label" for="name">Phone Number</label>
        <input type="text" class="form-control" id="phoneNumber" aria-describedby="usernameStatus" name="phoneNumber" value="{{$dealer->phoneNumber}}">
    </div>
    <div class="form-group has-success has-feedback">
        <label class="control-label" for="name">Email</label>
        <input type="text" class="form-control" id="email" aria-describedby="usernameStatus" name="email" value="{{$dealer->email}}">
    </div>
    <div class="form-group has-success has-feedback">
        <label class="control-label" for="name">Address</label>
        <input type="text" class="form-control" id="address" aria-describedby="usernameStatus" name="address" value="{{$dealer->address}}">
    </div>
    <div class="form-group has-success has-feedback">
        <label class="control-label" for="name">Owner</label>
        <input type="text" class="form-control" id="owner" aria-describedby="usernameStatus" name="owner" value="{{$dealer->owner}}">
    </div>
    <div>
        <input type="submit" value="Update Dealer" class="btn btn-success">
    </div>
    <a href="{{route('dealers.index')}}" class="btn btn-primary">Back</a>
</form>

<!-- jQuery library -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
