@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4">
					<div class="card-header">
						Detail Data User
					</div>
					<div class="card-body">
						<h4>Nama : {{$user->nama}}</h4><hr>
						by :{{$blog->by->nama}}
						<p>
							{{"@".$user->username}} |
							Email : {{$user->email}} |
						</p>
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection