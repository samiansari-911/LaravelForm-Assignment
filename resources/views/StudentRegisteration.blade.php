<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registeration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
      <h1>Registeration Form</h1>
      <?php
        //    print_r($errors);
      ?>
      <form class="form-group" action="{{url('/')}}/StudentRegisteration" method="POST">
        @csrf
        <label form="name">Name </label>
        <input class="form-control" type="text" name="name" value="{{old('name')}}">
        <span class="text-danger">
        @error('name')
            {{$message}}
        @enderror
    </span><br>
        <label form="name">Email </label>
        <input class="form-control" type="email" name="email"  value="{{old('name')}}" >
        <span class="text-danger">
        @error('email')
            {{$message}}
        @enderror
    </span><br>
        <label form="name">Address</label>
        <input class="form-control" type="address" name="address"  value="{{old('name')}}">
        <span class="text-danger">
        @error('address')
            {{$message}}
        @enderror
    </span><br>
            <input class="btn btn-primary" type="Submit" name="register">
       </form>
    </div>
</body>
</html>