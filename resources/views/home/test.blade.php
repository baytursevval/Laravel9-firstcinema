
<!DOCTYPE html>
<html>
<head>
    <title>Laravel Test Page</title>
</head>
<body>

<?php

$data=\App\Models\Film::where('id','=', 59)->get();
echo $data[0]->category->title;


// foreach ($data as $rs)    echo $rs->comment ."<br>";

//$film_category=4;
?>




<h1>hello</h1>


        <br>

</body>
</html>
