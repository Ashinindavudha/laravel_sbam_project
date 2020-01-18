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
						<h3 class="box-title">Title</h3>
					</div>

					<!-- form start -->
					<form action="{{route('member.store')}}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="box-body">
							<div class="col-lg-6">
								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" class="form-control" id="name" name="name" placeholder="Name">
								</div>

								<div class="form-group">
									<label for="designation">Designation</label>
									<input type="text" class="form-control" id="designation" name="designation" placeholder="Designation">
								</div>

								<div class="form-group">
									<label for="specialize">Specialize</label>
									<input type="text" class="form-control" id="specialize" name="specialize" placeholder="Specialize">
								</div>

								<div class="form-group">
									<label for="email">Email</label>
									<input type="email" class="form-control" id="email" name="email" placeholder="Email">
								</div>

								<div class="form-group">
									<label for="phone">Phone</label>
									<input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
								</div>
							

		
								<div class="form-group">
									
										<label for="image">File input</label>
										<input type="file" name="image" id="image">
									
									</div>	
								

							</div>
						</div><!-- /.box-body -->

						<div class="box-footer">
							<input type="submit" name="" class="btn btn-primary" value="Submit">
							<a href="{{ route('member.index') }}" class="btn btn-warning">Back</a>
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