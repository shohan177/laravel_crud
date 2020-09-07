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

    <a class="btn btn-sm btn-danger" href="{{ url('table') }}">show all</a>
    <div class="card shadow">
        <div class="card-body">
            <h2>edit</h2>
            @include('validation')

            <form action="{{ url('update_student/'.$edit_stu -> id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Name</label>
                    <input name="name" class="form-control" value="{{ $edit_stu -> name }}" type="text">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input name="email" class="form-control" value="{{ $edit_stu -> email }}" type="text">
                </div>
                <div class="form-group">
                    <label for="">Cell</label>
                    <input name="cell" class="form-control" value="{{ $edit_stu -> cell }}" type="text">
                </div>
                <div class="form-group">
                    <label for="">Username</label>
                    <input name="uname" class="form-control" value="{{ $edit_stu -> uname }}" type="text">
                </div>
                <div class="form-group">
                    <img height="150" width="150" src="{{ url('media\student'.'/'.$edit_stu -> photo) }}" alt="">
                </div>
                <div class="form-group">
                    <label for="">photo</label>
                    <input name="new_photo" class="form-control" type="file">
                    <input name="old_photo" class="form-control" value="{{ $edit_stu -> photo }}" type="hidden">
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Sign Up">
                </div>
            </form>
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
