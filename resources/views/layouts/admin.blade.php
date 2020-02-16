<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{asset('admin/global_assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('admin/assets/css/core.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('admin/assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('admin/assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="{{asset('admin/global_assets/js/plugins/loaders/pace.min.js')}}"></script>
	<script src="{{asset('admin/global_assets/js/core/libraries/jquery.min.js')}}"></script>
	<script src="{{asset('admin/global_assets/js/core/libraries/bootstrap.min.js')}}"></script>
	<script src="{{asset('admin/global_assets/js/plugins/loaders/blockui.min.js')}}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{asset('admin/global_assets/js/plugins/forms/validation/validate.min.js')}}"></script>
	<script src="{{asset('admin/global_assets/js/plugins/forms/inputs/touchspin.min.js')}}"></script>
	<script src="{{asset('admin/global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
	<script src="{{asset('admin/global_assets/js/plugins/forms/styling/switch.min.js')}}"></script>
	<script src="{{asset('admin/global_assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
	<script src="{{asset('admin/global_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>

	<script src="{{asset('admin/assets/js/app.js')}}"></script>
	<script src="{{asset('admin/global_assets/js/demo_pages/form_validation.js')}}"></script>
	<!-- /theme JS files -->

</head>

<body>

@include('Admin/include/nav')
<!-- Page container -->
<div class="page-container">

<!-- Page content -->
<div class="page-content">
@include('Admin/include/navHerizontal')

@yield('content')


</div>
</div>
</body>
</html>