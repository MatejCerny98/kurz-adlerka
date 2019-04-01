<!DOCTYPE html>
<html lang="sk">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="/css/responizivita.css">
  <title>Document</title>
</head>

<body>

  <div class="container">
    <div class="row bg-primary" id="hlavicka">
      <div class="col align-self-center">
        <p class="bg-primary text-white">Responzívný dizajn by Krtkúv dort "Mňam dopíči"</p>
      </div>
    </div>


    <div class="nav nav-pills nav-fill">
      <div class="col m-md-2">
        <nav class="nav nav-fill flex-column flex-md-row">
          <a class="nav-item nav-link active" href="/">Home</a>
          <a class="nav-item nav-link" href="/site1">Site1</a>
          <a class="nav-item nav-link" href="/site2">Site2</a>
        </nav>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active">Krtkúv dort</a>
            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">It's something<span class="badge badge-primary">New</span></a>
            <a href="#" class="list-group-item list-group-item-action">What if I told you</a>
            <a href="#" class="list-group-item list-group-item-action">Blalalal</a>
        </div>
      </div>
      <div class="col-md-9">
        @yield('content')
      </div>


</body>

</html>
