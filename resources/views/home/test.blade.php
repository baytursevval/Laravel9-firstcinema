<!DOCTYPE html>
<html>
<head>
    <title>Laravel Test Page</title>
</head>
<body>

<h1>Laravel test</h1>
id no: {{$id}} <br>
name: {{$name}}
<?php
echo "id number: ". $id;
echo "<br> name: ". $name;
for($i=1;$i<=$id;$i++){
    echo "<br> $id - $name";
}
?>
<br>
<a href="{{route('home')}}">Ana Sayfa</a>

</body>
</html>
