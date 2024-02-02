<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<title>{{ $title }}</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="/html/demo1/dist/assets/media/logos/favicon.ico" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="{{  asset('html/demo1/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{  asset('dist/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{  asset('html/demo1/dist/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{  asset('html/demo1/dist/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->

	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">

        <!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Aside-->
                @include('layout.sidebar')
				<!--end::Aside-->

				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					@include('layout.header')
					<!--end::Header-->
					<!--begin::Content-->
					@yield('content')
					<!--end::Content-->
					<!--begin::Footer-->
					{{-- @include('includes.footer')
					<!--end::Footer--> --}}
				</div>
				<!--end::Wrapper-->

			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->

		<!--begin::Drawers-->
		{{-- @include('includes.toolbar.navbar_drawer') --}}
		<!--end::Drawers-->
	    <!--end::Main-->

		<!--begin::Engage drawers-->
		{{-- @include('includes.toolbar.toolbar_drawer') --}}
		<!--end::Engage drawers-->

		<!--begin::Engage toolbar-->
		{{-- @include('includes.toolbar.toolbar') --}}
		<!--end::Engage toolbar-->

		<!--begin::Scrolltop-->
		{{-- @include('includes.scrolltop') --}}
		<!--end::Scrolltop-->

		<!--begin::Modals-->
		{{-- @include('includes.modal') --}}
		<!--end::Modals-->

		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{  asset('html/demo1/dist/assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{  asset('html/demo1/dist/assets/js/scripts.bundle.js') }}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="{{  asset('html/demo1/dist/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
		<script src="{{  asset('html/demo1/dist/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="{{  asset('html/demo1/dist/assets/js/widgets.bundle.js') }}"></script>
		<script src="{{  asset('html/demo1/dist/assets/js/custom/widgets.js') }}"></script>
		<script src="{{  asset('html/demo1/dist/assets/js/custom/apps/chat/chat.js') }}"></script>
		<script src="{{  asset('html/demo1/dist/assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
		<script src="{{  asset('html/demo1/dist/assets/js/custom/utilities/modals/create-app.js') }}"></script>
		<script src="{{  asset('html/demo1/dist/assets/js/custom/utilities/modals/users-search.js') }}"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
