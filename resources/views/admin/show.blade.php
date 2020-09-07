<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="{{ asset('crud/assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('crud/assets/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('crud/assets/css/responsive.css') }}">
</head>
<body>

    <div class="wrap">
		<a class="btn btn-sm btn-info" href="{{ url('table') }}">Show all </a>

		<div class="card shadow">
			<div class="card-header shadow ">


			<div class="card-body">
				<img style="height:300px; width: 300px; border-radius:150px 150px; margin-bottom: 20px;" src="{{ url('media/student'.'/'.$s_student -> photo ) }}">


				 <table class="table table-condensed">


				      <tr>
                          <td>Name:</td>
                          <td>{{ $s_student -> name }}</td>
				      </tr>

				      <tr>
				        <td>Email:</td>
				        <td>{{ $s_student -> email }}</td>

                      </tr>

                          <td>Cell:</td>
                          <td>{{ $s_student -> cell }}</td>

				      </tr>

				      <tr>
				        <td>User name: </td>
				        <td>{{ $s_student -> uname }}</td>

				      </tr>
                 </table>
			</div>
		</div>
	</div>


	<!-- JS FILES  -->
	<script src="{{ asset('crud/assets/js/jquery-3.4.1.min.js') }}"></script>
	<script src="{{ asset('crud/assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('crud/assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('crud/assets/js/custom.js') }}"></script>
</body>
</html>
