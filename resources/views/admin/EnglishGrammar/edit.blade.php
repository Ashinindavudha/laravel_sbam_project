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
					@include('admin.layouts.errors')
					<!-- form start -->
					<form action="{{route('grammar.update', $grammar->id)}}" method="POST" enctype="multipart/form-data">
						@csrf
						{{ method_field('PATCH') }}
						<div class="box-body">
							<div class="col-lg-6">
								<div class="form-group">
									<label for="name">Author Name</label>
									<input type="text" class="form-control" id="name" name="name" placeholder="Researcher Name"
									value="{{ $grammar->name }}">
								</div>

								<div class="form-group">
									<label for="title">Research Post Title</label>
									<input type="text" class="form-control" id="title" name="title" placeholder="Research Post Title" value="{{ $grammar->title }}">
								</div>
									
									<div class="checkbox pull-left">
										<label>
											<input type="checkbox" name="status" value="1" @if ($grammar->status == 1) {{'checked'}} @endif> Publish
										</label>
									</div>
							

							</div>
						</div><!-- /.box-body -->


						<div class="box">
							<div class="box-header">
								<h3 class="box-title">Write Post Body Here <small>Simple and fast</small></h3>
								<!-- tools box -->
								<div class="pull-right box-tools">
									<button class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>

								</div><!-- /. tools -->
							</div><!-- /.box-header -->
							<div class="box-body pad">

								<textarea name="body" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="editor1">{{ $grammar->body}}</textarea>

							</div>
						</div>

						<div class="box-footer">
							<input type="submit" name="" class="btn btn-primary" value="Submit">
							<a href="{{ route('grammar.index') }}" class="btn btn-warning">Back</a>
						</div>
					</form>
				</div>



				
			</div><!-- /.col-->
		</div><!-- ./row -->
	</section><!-- /.content -->
</div><!-- /.content-wrapper -->

@endsection

@section('footerSection')
<script src="{{ asset('admin/plugins/select2/select2.full.min.js') }}"></script>
<!-- <script src="//cdn.ckeditor.com/4.13.1/full/ckeditor.js"></script>  -->  

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