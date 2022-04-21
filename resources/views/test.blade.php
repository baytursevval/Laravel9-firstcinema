<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

@php
//category deki id = film deki category_id
$data=\Illuminate\Support\Facades\DB::table('categories')->get();
foreach ($data as $rs)
      echo $rs->id . "  ". $rs->title;

@endphp

<br>

<select name="category" id="">

    @foreach($data as $rs)
    <option value="2"> {{$rs->title}}    </option>
    @endforeach

</select>

</body>

</html>
