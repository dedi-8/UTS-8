@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4">
					<div class="card-header">
						Edit Artikel
						<form action="{{url('admin/blog', $blog->id)}}" method="post">
							@csrf
							@method('PUT')
					</div>
					<div class="card-body">
					<div class="form-group">
						<label class="control-label" for="">Judul</label>
						<input type="text" name="judul" class="form-control" value="{{$blog->judul}}">
					</div>
					<div class="form-group">
						<label class="control-label" for="">Content</label>
						<textarea name="isi" class="form-control"></textarea>
					</div>
					
				</div>					
					<button class="btn btn-dark float-right"><i class="fa fa-save"> simpan</i></button>
					</form>
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection