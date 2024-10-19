<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Название</th>
      <th scope="col">Время</th>
      <th scope="col">Статус</th>
    </tr>
    <tbody>
    
@foreach ($tasks as $task)
<tr>
<td> {{ $task->id }}</td>
<td> {{ $task->name }}</td>
<td> {{ $task->created_at}}</td>
<td> {{ $task->is_done}}</td>
</tr>
@endforeach

<form action="{{ route('show') }}" method= "POST">
@csrf
    <label for="name">Имя:</label>
    <input name="name" id="name" type="text">

    <button type="submit">Отправить</button>
</form>


  </tbody></div>
</body>
</html>