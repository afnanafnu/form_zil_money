<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <form action="/crud/{{$rs[0]->id}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            name
            <input type="text" name="name" value="{{$rs[0]->name}}"><br>
            age<br>
            <input type="number" name="age" value="{{$rs[0]->age}}">
            <br>
            <select name="gender" >
                <option value="male" checkdate="{{$rs[0]->gender}}">male</option>
                <option value="female" checkdate="{{$rs[0]->gender}}">female</option>
                <option value="other" checkdate="{{$rs[0]->gender}}">other</option>
            </select>
            <div id="work">
                <label for="yes_no">will you ready to work</label>
                <p><input type="radio" name="work" value="yes">yes</p>
                <p><input type="radio" name="work" value="no">no  </p>
            </div>
            <p>langages</p>
            <div name="lang">
                <input type="checkbox" name="category[]" value="malayalam">malayalam
                <input type="checkbox" name="category[]" value="arabic">arabic
                <input type="checkbox" name="category[]" value="english">english
                <input type="checkbox" name="category[]" value="tamil">tamil
            </div>
            <button type="submit">submit</button><br>
           


    </div>
    </form>
    </div>
</body>

</html>