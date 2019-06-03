@extends('layouts.site_template')
@section('content')
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Certificate Store</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/">Unos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/">Pregled</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/">Kreiranje</a>
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

  <!-- Nav tabs -->
  <ul class="nav nav-pills mb-2">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="pill" href="#home">Files</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#menu1">Text</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content ">
    <div class="tab-pane container active" id="home">
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
          <button type="button" class="btn btn-light">Test</button>
          <button type="button" class="btn btn-light">Store</button>
        </div>
      </div>
      <!-- details card -->
      <div class="card card-body bg-light border-0 mt-2">
        lorem ipsum
      </div>
    </div>

    <!-- drugi tab -->
    <div class="tab-pane container fade" id="menu1">
      <div class="row">
        <div class="col-6">
          <div class="card mb-2 mr-1 card-body bg-dark text-light border-0">
            <div class="form-group">
              <label for="comment">Certifikat</label>
              <textarea class="form-control" rows="5" id="comment"></textarea>
            </div>
          </div>
        </div>

        <div class="col-6">
          <div class="card col ml-1 mb-2 card-body bg-dark text-light border-0">
            <div class="form-group">
              <label for="comment">Privatni ključ</label>
              <textarea class="form-control" rows="5" id="comment"></textarea>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-6">
          <div class="card mt-2 mr-1 card-body bg-dark text-light border-0">
            <div class="form-group">
              <label for="comment">Certitfikat izdavatelja</label>
              <textarea class="form-control" rows="5" id="comment"></textarea>
            </div>
          </div>
        </div>

        <div class="col-6">
          <div class="card mt-2 ml-1 card-body bg-dark text-light border-0">
            <div class="form-group">
              <label for="comment">CSR</label>
              <textarea class="form-control" rows="5" id="comment"></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="card card-body bg-dark border-0 mt-2">
        <!-- button area -->
        <div class="mt-2">
          <button type="button" class="btn btn-light">Test</button>
          <button type="button" class="btn btn-light">Store</button>
        </div>
      </div>
      <!-- details card -->
      <div class="card card-body bg-light border-0 mt-2">
        lorem ipsum
      </div>
    </div>

    <!-- treci tab -->
    <div class="tab-pane container fade" id="menu2">...
    </div>
  </div>
<!-- tablica -->
  <div class="card card-body bg-dark text-light border-0  mt-2">

    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Naziv</th>
          <th scope="col">Certifikat</th>
          <th scope="col">Chain of turst</th>
          <th scope="col">CSR</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($certifikati as $certifikat)
        <tr>
          <th scope="row">{{$certifikat->id}}</th>
          <td>{{$certifikat->certificate_title}}</td>
          <td>{{$certifikat->certificate_text}}</td>
          <td>{{$certifikat->private_key}}</td>
          <td>{{$certifikat->chain_of_trust_certificate}}</td>
          <td>{{$certifikat->csr}}</td>

        </tr>
        @endforeach


      </tbody>
    </table>
  </div>
</div>

@endsection