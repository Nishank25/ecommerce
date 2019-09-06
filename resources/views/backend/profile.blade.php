@extends('layouts.master')
@extends('layouts.slide-bar')
<style>
	.datepicker.datepicker-dropdown{
		width: 340px!important;
	}
</style>
@section('content')
	<!-- begin #content -->
	<div id="content" class="content content-full-width">

		<!-- begin profile -->
		<div class="profile">
			<div class="profile-header">
				<!-- BEGIN profile-header-cover -->
				<div class="profile-header-cover"></div>
				<!-- END profile-header-cover -->
				<!-- BEGIN profile-header-content -->
				<div class="profile-header-content">
					<!-- BEGIN profile-header-img -->
					<div class="profile-header-img">
						<img src="@isset($user->profile_image) {{url($user->profile_image)}} @endisset" alt="">
					</div>
					<!-- END profile-header-img -->
					<!-- BEGIN profile-header-info -->
					<div class="profile-header-info">
						<h4 class="m-t-10 m-b-5">{{$user->name}}</h4>
						<a href="#" class="btn btn-xs btn-yellow">Edit Profile</a>
					</div>
					<!-- END profile-header-info -->
				</div>
				<!-- END profile-header-content -->
			</div>
		</div>
		<!-- end profile -->
		<!-- begin breadcrumb -->
		<ol class="breadcrumb pull-right">
			<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
			<li class="breadcrumb-item active">Profile</li>
		</ol>
		<!-- end breadcrumb -->
		<!-- begin profile-content -->
		<div class="profile-content">
			<!-- begin tab-content -->
			<div class="tab-content p-0">
				<!-- begin #profile-about tab -->
				<div class="tab-pane fade show active" id="profile-about">
					<!-- begin table -->
					<div class="table-responsive">
						<table class="table table-profile">
							<form action="{{route('profile_update')}}" method="POST" enctype="multipart/form-data">
								{{csrf_field()}}
								<input type="hidden" name="user_id" value="{{$user['id']}}">
								<tbody>
								<tr>
									<td class="field">Name</td>
									@if($user['name'] != null)
									<td> <input type="text" class="form-control input-inline input-xxlarge" value="{{$user['name']}}" name="name"></td>
										@else
									<td> <input type="text" class="form-control input-inline input-xxlarge" name="name"></td>
									@endif
									<td>
										@error('name')
										<span class="text-danger">{{$message}}</span>
										@enderror
									</td>
								</tr>
								<tr>
									<td class="field">email</td>
									@if($user['email'] != null)
									<td> <input type="email" class="form-control input-inline input-xxlarge" value="{{$user['email']}}" name="email"></td>
										@else
									<td> <input type="email" class="form-control input-inline input-xxlarge" name="email"></td>
									@endif
									<td>
										@error('name')
										<span class="text-danger">{{$message}}</span>
										@enderror
									</td>
								</tr>
								<tr>
									<td class="field">Mobile</td>
									@if($user['mobile'] != null)
										<td> <input type="number" class="form-control input-inline input-xxlarge" maxlength="10" value="{{$user['mobile']}}" name="mobile"> <i class="fa fa-mobile fa-lg m-r-5"></i></td>
										@else
										<td> <input type="number" class="form-control input-inline input-xxlarge" maxlength="10" name="mobile"> <i class="fa fa-mobile fa-lg m-r-5"></i></td>
									@endif
									<td>
										@error('name')
										<span class="text-danger">{{$message}}</span>
										@enderror
									</td>
								</tr>
								<tr class="divider">
									<td colspan="2"></td>
								</tr>
								<tr class="highlight">
									<td class="field">Address</td>
									@if($user['address'] != null)
									<td><textarea name="address" class="form-control input-inline input-xxlarge">{{$user['address']}}</textarea></td>
										@else
									<td><textarea name="address" class="form-control input-inline input-xxlarge"></textarea></td>
									@endif
									<td>
										@error('name')
										<span class="text-danger">{{$message}}</span>
										@enderror
									</td>
								</tr>
								<tr>
									<td class="field">Gender</td>
									<td>
										<select class="form-control input-inline input-xs" name="gender">
											@if($user['gender'] == 'male')
												<option value="male" selected>Male</option>
											@elseif($user['gender'] == 'female')
												<option value="female" selected>Female</option>
											@else
												<option value="male">Male</option>
												<option value="female">Female</option>
											@endif
										</select>
									</td>
									<td>
										@error('name')
										<span class="text-danger">{{$message}}</span>
										@enderror
									</td>
								</tr>
								<tr>
									<td class="field">Birthdate</td>
									<td>
										@if($user['birthday'] == null)
										<input type="date" class="form-control input-inline input-sm" name="birthday">
											@else
                                            <input type="text" class="form-control" style="width: 340px" id="datepicker-default" placeholder="Select Date" value="{{date('Y-m-d',strtotime($user['birthday']))}}">
                                        @endif
									</td>
									<td>
										@error('name')
										<span class="text-danger">{{$message}}</span>
										@enderror
									</td>
								</tr>
								<tr>
									<td class="field">Profile photo</td>
									<td><input type="file" class="form-control input-inline input-sm" name="profile_image"></td>
								</tr>
								<tr class="divider">
									<td colspan="2"></td>
								</tr>
								<tr class="highlight">
									<td class="field">&nbsp;</td>
									<td class="p-t-10 p-b-10">
										<button type="submit" class="btn btn-primary width-150">Update</button>
									</td>
								</tr>
								</tbody>
							</form>
						</table>
					</div>
					<!-- end table -->
				</div>
				<!-- end #profile-about tab -->
			</div>
			<!-- end tab-content -->
		</div>
		<!-- end profile-content -->
	</div>
	<!-- end #content -->
	<!-- begin scroll to top btn -->
	<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
	<!-- end scroll to top btn -->
@stop
@section('javascript_files')
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
	<script src="/assets/plugins/superbox/js/jquery.superbox.min.js"></script>
	<script src="/assets/plugins/lity/dist/lity.min.js"></script>
	<script src="/assets/js/demo/profile.demo.min.js"></script>
	<script src="/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="/assets/plugins/ionRangeSlider/js/ion-rangeSlider/ion.rangeSlider.min.js"></script>
	<script src="/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
	<script src="/assets/plugins/masked-input/masked-input.min.js"></script>
	<script src="/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
	<script src="/assets/plugins/password-indicator/js/password-indicator.js"></script>
	<script src="/assets/plugins/bootstrap-combobox/js/bootstrap-combobox.js"></script>
	<script src="/assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
	<script src="/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
	<script src="/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.js"></script>
	<script src="/assets/plugins/jquery-tag-it/js/tag-it.min.js"></script>
	<script src="/assets/plugins/bootstrap-daterangepicker/moment.js"></script>
	<script src="/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
	<script src="/assets/plugins/select2/dist/js/select2.min.js"></script>
	<script src="/assets/plugins/bootstrap-eonasdan-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
	<script src="/assets/plugins/bootstrap-show-password/bootstrap-show-password.js"></script>
	<script src="/assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
	<script src="/assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.js"></script>
	<script src="/assets/plugins/clipboard/clipboard.min.js"></script>
	<script src="/assets/js/demo/form-plugins.demo.min.js"></script>

	<!-- ================== END PAGE LEVEL JS ================== -->
@endsection
@section('javascripts')
	<script>
        $(document).ready(function() {
            App.init();
            FormPlugins.init();
            Profile.init();
        });
	</script>
@endsection
