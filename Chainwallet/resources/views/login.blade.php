<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <!-- Font Awesome-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel= "stylesheet" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mbd-ui-kit/3.3.0/mbd.min.js"></script>
</head>
<body class="bg-info">
    <div class="container w-25 mt-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <h3> Login </h3>
                <form action="{{ url('api/login') }}" method="POST" autocomplete="off">
                    @csrf
                    <div class="input-group">
                        <input type="text" class="email" name="email" placeholder="email">
                        <input type="password" class="password" name="password" placeholder="password" >
                    </div>
                    <br>
                    <button class="button login__submit">
                        <span class="button__text"> Login </span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>
                    <a href="forget-password">reset password</a>
                </form>
    </div>
</body>
</html>