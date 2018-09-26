<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	    <!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('css/app.css')}}">

	    <title>Hello, world!</title>
	</head>
	<body>
	    <h1>Hello, world!</h1>

	    @if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

		<form action="{{route('translate')}}" method="POST">

			{{csrf_field()}}
			<div class="row">
				<div class="col-md-3 form-group">
					<label for="nome">Nome</label>
					<input type="text" name="nome" id="nome" class="form-control">
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-3 form-group">
					<label for="email">Email</label>
					<input type="text" name="email" id="email" class="form-control">
				</div>
			</div>

			<div class="row">
				<div class="col-md-3 form-group">
					<label for="idade">Idade</label>
					<input type="text" name="idade" id="idade" class="form-control">
				</div>
			</div>

			<div class="row">
				<div class="col-md-3">
					<button class="btn btn-sm btn-success">Enviar</button>
				</div>
			</div>
		</form>



	    <!-- Optional JavaScript -->
	    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	    <script src="{{asset('js/app.js')}}"></script>
	</body>
</html>