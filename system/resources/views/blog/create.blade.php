@extends('template.base')

@section('content')

<div class="container mt-4">
		<div class="row">
			<div class="col-md-8 col-sm-12 bg-white p-4">			
						<form action="{{url('admin/blog')}}" method="post">
							@csrf
						<div class="form-group">
							<label class="control-label" for="">Judul Artikel</label>
							<input type="text" name="judul" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label" for="">Isi Artikel</label>
							<textarea name="isi" class="form-control" rows="15"></textarea>
						</div>							
			</div>
			<div class="col-md-3 ml-md-5 col-sm-12 bg-white p-4" style="height:120px !important">
						<div class="form-group">
					        <input type="submit" class="form-control btn btn-primary" value="Upload">
					    </div>
				    </form>
				</div>
		</div>		
</div>

@endsection