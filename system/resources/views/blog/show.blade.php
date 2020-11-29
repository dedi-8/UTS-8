@extends('artikeltemplate.artikelbase')

@section('content')

	<div class="container">
		<div class="row mt-4">
			<div class="col-md-8">
				<h4><strong>{{$blog->judul}}</strong></h4><hr>
				<p>{{$blog->isi}}
				</p>
				<!--komentar-->
				<div class="card">
					<div class="container">
					<form>
					  <div class="form-group">
					    <label for="exampleFormControlInput1">Alamat Email</label>
					    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@contoh.com">
					  </div>
					  <div class="form-group">
					    <label for="exampleFormControlTextarea1">Ketikan Komentar</label>
					    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
					  </div>
					  	 <button type="submit" class="btn btn-primary float-right ">Kirim</button>
					</form>
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

@endsection