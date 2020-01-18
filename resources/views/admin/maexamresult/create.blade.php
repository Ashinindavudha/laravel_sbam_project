@extends('admin.layouts.app')
@section('headSection')
<link rel="stylesheet" href="{{asset('admin/plugins/select2/select2.min.css')}}">
@endsection


@section('main-content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Text Editors
			<small>Advanced form element</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Forms</a></li>
			<li class="active">Editors</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-md-12">


				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">SBA -M / MA Exam Result</h3>
					</div>

					<!-- form start -->
					<form action="{{route('result.store')}}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="box-body">
							<div class="col-lg-6">
								
year
								<div class="form-group">
									<label for="reg">Register No</label>
									<input type="text" class="form-control" id="reg" name="reg" placeholder="Register No">
								</div>

								<div class="form-group">
									<label for="name"> Student Name</label>
									<input type="text" class="form-control" id="name" name="name" placeholder="Student Name">
								</div>
								<div class="form-group">
									<label for="roll">Roll No</label>
									<input type="text" class="form-control" id="roll" name="roll" placeholder="Roll No">
								</div>

								<div class="form-group">
									<label for="year">Academic Year</label>
									<input type="text" class="form-control" id="year" name="year" placeholder="Academic Year">
								</div>
								<div class="form-group">
									<label for="semester">Semester</label>
									<input type="semester" class="form-control" id="semester" name="semester" placeholder="Semester ">
								</div>
								<div class="form-group">
									<label for="subone">Subject One Mark</label>
									<input type="text" class="form-control" id="subone" name="subone" placeholder="Subject One Mark">
								</div>
								<div class="form-group">
									<label for="subtwo">Subject Two Mark</label>
									<input type="text" class="form-control" id="subtwo" name="subtwo" placeholder="Subject Two Mark">
								</div>
								<div class="form-group">
									<label for="subthree">Subject Three Mark</label>
									<input type="text" class="form-control" id="subthree" name="subthree" placeholder="Subject Three Mark">
								</div>
								<div class="form-group">
									<label for="pass">Pass / Fail</label>
									<input type="text" class="form-control" id="pass" name="pass" placeholder="Pass / Fail">
								</div>
			
							</div>
						</div><!-- /.box-body -->

						<div class="box-footer">
							<input type="submit" name="" class="btn btn-primary" value="Submit">
							<a href="{{ route('result.index') }}" class="btn btn-warning">Back</a>
						</div>
					</form>
					@include('sweetalert::alert')
				</div>




			</div><!-- /.col-->
		</div><!-- ./row -->
	</section><!-- /.content -->
</div><!-- /.content-wrapper -->

@endsection
@section('footerSection')
<script src="{{ asset('admin/plugins/select2/select2.full.min.js') }}"></script>
<!-- <script src="//cdn.ckeditor.com/4.13.1/full/ckeditor.js"></script>    -->
<script src="{{ asset('admin/ckeditor/ckeditor.js')}}"></script>
<script>
	$(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
});
</script>


<script>
	$(document).ready(function(){
		$(".select2").select2();
	});
</script>
@endsection