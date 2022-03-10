<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</head>
    <body>
    <div>
        <table class="table table-bordered">
            <tr>
                <th>name</th>
                <th>age</th>
                <th>gender</th>
                <th>work yes or no</th>
               
                <th>languages</th>
                <th>edit</th>
                <th>delete</th>
               
            </tr>
            <?php $count=1;?>
            @foreach($result as $value)
            <tr>
                <td>{{$value->name}}</td>
                <td>{{$value->age}}</td>
                <td>{{$value->gender}}</td>
                <td>{{$value->work_yes_no}}</td>
                <td>{{$value->language}}</td>
               
                <td><a href="/crud/{{$value->id}}/edit" class="label label-success btn btn-danger">edit</a></td>
                <td>
                    <form action="/crud/{{$value->id}}" method="post">
                        @method ('DELETE')
                        <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
                        <button type="submit" class="btn btn-success">DELETE</button>
                    </form>
                </td>
                
            </tr>

            @endforeach

        </table>
        <center>
        <td><a href="/form" class="label label-success btn btn-danger">insert data </a></td>
        </center>

    </div>
</body>
</html>