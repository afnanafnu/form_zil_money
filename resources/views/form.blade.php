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
    <div><center><br><br>
        <form action="/user" method="post" enctype="multipart/form-data">
            @csrf

            name
            <input type="text" name="name"><br><br>
            age
            <input type="number" name="age">
            <br><br>
            <b>genger</b>
            <select name="gender">
             
                <option value="male">male</option>
                <option value="female">female</option>
                <option value="other">other</option>
            </select>
            <div id="work">
                <label for="yes_no"><b>will you ready to work</b></label>
                <input type="radio" name="work" value="yes">yes
                <input type="radio" name="work" value="no">no  
            </div>
            <br>
            <h3>langages</h3>
            <div name="lang">
                <input type="checkbox" name="category[]" value="malayalam">malayalam
                <input type="checkbox" name="category[]" value="arabic">arabic
                <input type="checkbox" name="category[]" value="english">english
                <input type="checkbox" name="category[]" value="tamil">tamil
            </div>
            <button class="btn btn-danger" type="submit">submit</button><br><br>
            <a href="/view" class="btn btn-sm btn-dark waves-effect waves-light"> view the data </a>


    </div>
    </form>
    </div>
</center>
</body>

</html>