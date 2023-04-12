<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        h3 {
    text-align: center;
    }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Entry Page</title>
    <!-- Font Awesome-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel= "stylesheet" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mbd-ui-kit/3.3.0/mbd.min.js"></script>
</head>
<body class="bg-info">
    <div class="container w-25 mt-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{route('store')}}" method= "POST"  autocomplete="off">
                    @csrf
                    <div class="input-group">
                        <input type="text" name="content" class="form-conrol" placeholder="Add your new todo ">
                        <button type="submit" class="btn btn-dark btn-sm px-4"><i class="fas fa-plus"></i></button>
                    </div>
                </form>

                <h3>welcome </h3><br>
            </div>
    </div> 
</body>
</html>