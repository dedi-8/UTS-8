@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4">
					<div class="card">
						<div class="card-header">
							Filter
						</div>
						<div class="card-body">
							<form action="{{url('admin/blog/filter')}}" method="post">
								@csrf
								<div class="form-group">
									<label for="" class="control-label">Judul Artikel</label>
									<input type="text" class="form-control" name="judul" value="{{$judul ?? ''}}">
								</div>
								<button class="btn btn-dark float-right">
									<i class="fa fa-search">Filter</i>
								</button>
							</form>
						</div>
						
					</div>
					<div class="card-header">
						Artikel
						<a href="{{url('admin/blog/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus">  Tambah Data</i></a>
					</div>
					<div class="card-body">
						<table class="table">
							<thead>
								<th>No</th>
								<th width="200px">Aksi</th>
								<th width="300px">Judul Artikel</th>
								<th>Isi Artikel</th>
							</thead>
							<tbody>
								@foreach($list_blog as $blog)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>
										<div class="btn-group">										
											<a href="{{url('blog', $blog->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
										<a href="{{url('admin/blog', $blog->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
										@include('template.utils.delete',['url' => url('admin/blog', $blog->id)])
										</div>

									</td>
									<td><strong>{{$blog->judul}}</strong></td>
									<td>{{$blog->isi}}</td>
								</tr>
								@endforeach
							</tbody>							
						</table>
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection