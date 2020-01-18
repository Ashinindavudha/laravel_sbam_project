@extends('admin.layouts.app')

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
						<h3 class="box-title">Permission</h3>
					</div>
					@include('admin.layouts.errors')
					<!-- form start -->
					<form action="{{route('permission.store')}}" method="POST">
						@csrf
				
						<div class="box-body">
							<div class="col-lg-offset-3 col-lg-6">
								<div class="form-group">
									<label for="name">Permission Name</label>
									<input type="text" class="form-control" id="name" name="name" placeholder="Permission Name">
								</div>
								<div class="form-group">
									<label for="for">Permission For</label>
									<select name="for" id="for" class="form-control">
										<option selected disabled>Select Permission For</option>
										<option value="user">User</option>
										<option value="post">Post</option>
										<option value="other">Others</option>
									</select>
								</div>
								<div class="form-group">
							<button type="submit" class="btn btn-primary">Submit</button>
							<a href="{{route('permission.index')}}" class="btn btn-warning">Back</a>
						</div>
							</div>

																
							</div>
						</div>
						<!-- /.box-body -->
						
					</form>
				</div>
			</div><!-- /.col-->
		</div><!-- ./row -->
	</section><!-- /.content -->
</div><!-- /.content-wrapper -->

@endsection