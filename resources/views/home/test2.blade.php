
<!DOCTYPE html>
<html>
<head>
    <title>Laravel Test Page</title>
</head>
<body>
<?php
$data_category=\App\Models\Category::all();
foreach ($data_category as $rs)
    echo $rs->title;

$film_category=4;
?>




<h1>hello</h1>
<form action="">


<select name="category">
    @foreach($data_category as $rs)

    <option @if ($rs->id == $film_category)   selected="selected"  @endif    value="{{$rs->id}}"> {{$rs->title}}  </option>
    @endforeach




        <br>
</select>

    <select name="" id="">
        <option value=""> Sec 1</option>
        <option value=""> Sec 2</option>
        <option value=""> Sec 3</option>
        <option selected="selected" value=""> Sec 4</option>
        <option value=""> Sec 5</option>

    </select>



</form>
</body>
</html>
