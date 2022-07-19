<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>{{ config('app.name')}}</title>
    <style>
      h1{
        color:brown;
      }
      td{
        border: 1px blue;
        background:wheat
      }
    </style>
</head>
<body>

  <div class="container mt-2">
     Meeting-room
     <hr>
  </div>
      <div class="container mt-2">
        @yield('content')
      </div>
      <div class="container mt-2">
        <hr>
        @php echo date('Y'); @endphp
     </div>
  
</body>
</html>