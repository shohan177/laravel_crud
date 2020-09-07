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



	<div class="wrap-table ">
		<a class="btn btn-sm btn-success" href="{{ url('/') }}">Insert</a>
		<div class="card shadow">
			<div class="card-body">
				<h2>All Data</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>User Name</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
                    @foreach ($data as $stu)
                            <tr>
                                <td>{{ $loop -> index + 1 }}</td>
                                <td>{{ $stu -> name }}</td>
                                <td>{{ $stu -> email }}</td>
                                <td>{{ $stu -> cell }}</td>
                                <td>{{ $stu -> uname }}</td>
                                <td><img src="{{ URL::to('media/student').'/'.$stu -> photo }}" alt=""></td>
                                <td>
                                    <a class="btn btn-sm btn-info" href="{{ url('single_view/'.$stu -> id) }}">View</a>
                                    <a class="btn btn-sm btn-warning" href="{{ url('edit_student/'.$stu -> id) }}">Edit</a>
                                    <a class="btn btn-sm btn-danger" href="{{ url('delete_student/'.$stu -> id) }}">Delete</a>
                                </td>
                            </tr>
                    @endforeach



					</tbody>
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
