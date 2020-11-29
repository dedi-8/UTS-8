@extends('artikeltemplate.artikelbase')

@section('content')
<div class="container">
  <div class="card-body">
      <div class="row">
        <div class="col-12 col-md-8">
          <div class="card">
            <div class="card-body">
              	TENTANG KAMI
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              	proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
                 
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

<!-- Stack the columns on mobile by making one full-width and the other half-width -->
@endsection