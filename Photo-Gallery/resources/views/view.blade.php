<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Name and Image Viewer</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark container">
  <a class="navbar-brand" href="#">Photo Gallery</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link text-success text-danger" href="add">View Data</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container mt-5">
  <div class="row">
    <!-- Sample Card 1 -->
    <div class="col-md-4 mb-4">
      <div class="card">
        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Image">
        <div class="card-body">
          <h5 class="card-title">John Doe</h5>
        </div>
      </div>
    </div>
    
    <!-- Sample Card 2 -->
    @if(!empty($data_customer))
    @foreach($data as $data)
    <div class="col-md-4 mb-4">
      <div class="card">
        <img src="{{ url('view/' . $data->filename) }}" class="card-img-top" alt="Image">
        <div class="card-body">
          <h5 class="card-title">Jane Smith</h5>
        </div>
      </div>
    </div>
   
@endforeach
@endif



    <!-- Add more cards as needed -->

  </div>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
