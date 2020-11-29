@extends('artikeltemplate.artikelbase')

@section('content')

	<div class="container">
  <div class="card-body">
      <div class="row">
        <div class="col-12 col-md-8">
          <div class="card">
            <div class="card-body">

        <div class="card-body">
          @foreach ($list_blog as $blog)
            <div class="col-md-10 col-sm-12 mt-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><strong>{{ $blog->judul }}</strong></h5><br>
                        <a href="{{url('blog', $blog->id)}}" class="btn btn-primary">Baca Artikel</a>
                    </div>
                </div>
            </div>
           @endforeach         
          </div>

              
                 
            </div>
          </div>
        </div>
        <div class="col-6 col-md-4">
          <div class="card bg-warning">
            <div class="card-body">
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <p class="text-center">KATEGORI</p>
              <ul>
                <li>
                  Traveling
                </li>
                <li>
                  Kuliner
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      </div>
  </div>
@endsection