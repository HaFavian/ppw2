<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Laravel</title>
</head>
<body>
    <h1>Ini view baru</h1>
    {{$data}} <!-- penggunaan blade -->
    <br><br>
    {{'sama seperti'}}
    <br><br>
    <?php echo $data; 
    ?> <!-- echo pada php-->
    <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Fluid jumbotron</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>
</body>
</html>