<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Register</title>
    <style>
      .flash_message_box {
        position: fixed;
        height: 25%;
        width: 50%;
        background-color: rgb(54, 1, 92);
        top: 25%;
        left: 25%;
    }

      .flash_message_text{
          position: absolute;
          left: 0;
          top: 0;
          right: 0;
          bottom: 0;
          font-size: medium;
          font-weight: bold;
          color: orange;
          margin: 0;
          display: flex;
          align-items: center;
          justify-content: center;
      }
  </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top: 50px;">
                <h4>Registration</h4>
                <form action="{{route('register-user')}}" method="POST">
                    @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    @csrf
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" class="form-control" placeholder="Enter full name" name="name">
                        <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="text" class="form-control" placeholder="Enter your email" name="email">
                        <span class="text-danger">@error('email') {{ $message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="email">phone</label>
                        <input type="text" class="form-control" placeholder="Enter your phone number" name="phone_number">
                        <span class="text-danger">@error('phone_number') {{ $message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password">
                        <span class="text-danger">@error('password') {{ $message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="password_cf">Confirmation Password</label>
                        <input type="password" class="form-control" name="password_cf">
                    </div>
                    <div>
                   <p>Đã có tài khoản?<a href="/login"> Đăng nhập tại đây</a></p>

                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary" type="submit">Sign Up</button>
                    </div>
                  </form>
                  <x-flash-message/>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>