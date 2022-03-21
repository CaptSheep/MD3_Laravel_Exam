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
<form action="{{route('dealers.store')}}" method="post">
    @csrf
    <div class="form-group has-success has-feedback">
        <label class="control-label" for="name">Status</label>
    </div>
    <select name="select" id="select" class="form-control" >
        @foreach($status as $status)
            <option value="{{$status->id}}">{{$status->name}}</option>
        @endforeach
    </select>
    <div class="form-group has-success has-feedback">
        <label class="control-label" for="name">Code</label>
        <input type="text" class="form-control" id="code" aria-describedby="usernameStatus" name="code">
    </div>
    @if($errors->any())
        <p style="color: red">{{$errors->first('code')}}</p>
    @endif
    <div class="form-group has-success has-feedback">
        <label class="control-label" for="name">Name</label>
        <input type="text" class="form-control" id="name" aria-describedby="usernameStatus" name="name">
    </div>
    @if($errors->any())
        <p style="color: red">{{$errors->first('name')}}</p>
    @endif
    <div class="form-group has-success has-feedback">
        <label class="control-label" for="name">Phone Number</label>
        <input type="text" class="form-control" id="phoneNumber" aria-describedby="usernameStatus" name="phoneNumber">
    </div>
    @if($errors->any())
        <p style="color: red">{{$errors->first('phoneNumber')}}</p>
    @endif
    <div class="form-group has-success has-feedback">
        <label class="control-label" for="name">Email</label>
        <input type="text" class="form-control" id="email" aria-describedby="usernameStatus" name="email">
    </div>
    @if($errors->any())
        <p style="color: red">{{$errors->first('email')}}</p>
    @endif
    <div class="form-group has-success has-feedback">
        <label class="control-label" for="name">Address</label>
        <input type="text" class="form-control" id="address" aria-describedby="usernameStatus" name="address">
    </div>
    @if($errors->any())
        <p style="color: red">{{$errors->first('address')}}</p>
    @endif
    <div class="form-group has-success has-feedback">
        <label class="control-label" for="name">Owner</label>
        <input type="text" class="form-control" id="owner" aria-describedby="usernameStatus" name="owner">
    </div>
    @if($errors->any())
        <p style="color: red">{{$errors->first('owner')}}</p>
    @endif
    <div>
        <input type="submit" value="Create Dealer" class="btn btn-success">
    </div>
    <a href="{{route('dealers.index')}}" class="btn btn-primary">Back</a>
</form>

<!-- jQuery library -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
