<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Certificate Store</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
      </head>
<body>
  <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Certificate Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
      <!-- input container -->
      <div class="container mt-2 bg-color ">
        <!-- input card -->
         <div class="card card-body bg-dark text-light border-0">
           <div class="row  mt-2">
             <div class="col-11">
                <div class="custom-file">
                <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                <label class="custom-file-label" for="validatedCustomFile">Odaberite certifikat</label>
                <div class="invalid-feedback">Example invalid custom file feedback
                </div>
            </div>
             </div>
           
            <div class="col-1">
                <i style='font-size:35px' class='fas'>&#xf0a3;</i>
            </div>
           </div>
           <div class="row  mt-2">
              <div class="col-11">
                 <div class="custom-file">
                 <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                 <label class="custom-file-label" for="validatedCustomFile">Odaberite privatni ključ</label>
                 <div class="invalid-feedback">Example invalid custom file feedback
                 </div>
             </div>
              </div>
            
             <div class="col-1">
                 <i style='font-size:35px' class='fas'>&#xf100;</i>
             </div>
            </div>
            <div class="row  mt-2">
                <div class="col-11">
                   <div class="custom-file">
                   <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                   <label class="custom-file-label" for="validatedCustomFile">Odaberite certitfikat izdavatelja</label>
                   <div class="invalid-feedback">Example invalid custom file feedback
                   </div>
               </div>
                </div>
              
               <div class="col-1">
                   <i style='font-size:35px' class='fas'>&#xf100;</i>
               </div>
              </div>
              <div class="row  mt-2">
                  <div class="col-11">
                     <div class="custom-file">
                     <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                     <label class="custom-file-label" for="validatedCustomFile">Odaberite csr</label>
                     <div class="invalid-feedback">Example invalid custom file feedback
                     </div>
                 </div>
                  </div>
                
                 <div class="col-1">
                     <i style='font-size:35px' class='fas'>&#xf100;</i>
                 </div>
                </div>

      <!-- button area -->
            <div class="mt-2">
                <button type="button" class="btn btn-light">Light</button>
               <button type="button" class="btn btn-light">Light</button>
            </div>
         </div>
      </div>
      <!-- details container -->
      <div class="container mt-2">
        <!-- details card -->
          <div class="card card-body bg-light border-0">
            lorem ipsum
          </div>
       </div>



      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>