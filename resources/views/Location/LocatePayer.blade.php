<?php  include 'config.php';?>
<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<title>{{ config('app.name') }}  | Location Map</title>
			
		<link rel="stylesheet" type="text/css" href="{{ asset('leaflet/dist_leaflet.css') }}">
		<!-- <link href="assets/plugins/custom/leaflet/leaflet.bundle.css" rel="stylesheet" type="text/css" /> -->
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
		<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
		<!-- <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" /> -->
	    <!-- <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script> -->
		<link href="{{ asset('plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
	</head>
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Aside-->
			   @include('inc.aside')
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					@include('inc.topmenu')
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<div class="toolbar" id="kt_toolbar">
							<!--begin::Container-->
							<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
								<!--begin::Page title-->
								<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
									<h1 class="d-flex align-items-center text-success fw-bolder fs-3 my-1 text-success">Hello 
										<span class="h-20px border-success-200 border-start ms-3 mx-2"></span>
									</h1>
								</div>
							</div>
						</div>
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="container-xxl">
								<!--begin::Card-->
								<div class="card">
									<div class="card-header border-0 pt-6">
										<!--begin::Card title-->
										<div class="card-title">
											<!--begin::Search-->
											<!-- <div class="d-flex align-items-center position-relative my-1">
												<span class="svg-icon svg-icon-1 position-absolute ms-6">
												</span>
												
												<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-order-filter="status">
														<option selected disabled>-Select Municipal-</option>
														<option value="all">All</option>
														<option value="active">Active</option>
														<option value="locked">Locked</option>
												</select>
											</div> -->
											<!--end::Search-->
										</div>
										<!--begin::Card title-->
										<!--begin::Card toolbar-->
										<div class="card-toolbar">
											<!--begin::Toolbar-->
											<div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
												<!--begin::Filter-->
												<div class="w-150px me-3">
													<!--begin::Select2-->
													<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-order-filter="status">
														<option selected disabled>-Select Municipal-</option>
														<option value="all" selected>BLITTA</option>
														<!-- <option value="active">Active</option>
														<option value="locked">Locked</option> -->
													</select>
													<!--end::Select2-->
												</div>
												<div class="w-150px me-3">
													<!--begin::Select2-->
													<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-order-filter="status">
														<option disabled>-Select Zone-</option>
														<option value="all" selected>ZONE 1</option>
														<!-- <option value="active">OWING</option>
														<option value="locked">NKT OWING</option> -->
													</select>
													<!--end::Select2-->
												</div>
												<div class="w-150px me-3">
													<!--begin::Select2-->
													<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-order-filter="status">
														<option selected disabled>-Data Set-</option>
														<option value="all">All</option>
														<option value="active">ARREARS</option>
														<option value="locked">NO ARREARS</option>
													</select>
													<!--end::Select2-->
												</div>
												<div class="w-150px me-3">
													<!--begin::Select2-->
													<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-order-filter="status">
														<option selected disabled>Number</option>
														<option value="5">5</option>
														<option value="10">10</option>
														<option value="15">15</option>
													</select>
													<!--end::Select2-->
												</div>
												<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#kt_modal_add_customer">Submit</button>
												<!--end::Add customer-->
											</div>
											<!--end::Toolbar-->
											<!--begin::Group actions-->
											<div class="d-flex justify-content-end align-items-center d-none" data-kt-customer-table-toolbar="selected">
												<div class="fw-bolder me-5">
												<span class="me-2" data-kt-customer-table-select="selected_count"></span>Selected</div>
												<button type="button" class="btn btn-danger" data-kt-customer-table-select="delete_selected">Delete Selected</button>
											</div>
											<!--end::Group actions-->
										</div>
										<!--end::Card toolbar-->
									</div>

									<!--begin::Card body-->
									<div class="card-body">
										<div id="location_map" class="w-100 rounded" style="height:450px"></div>
									</div>
									
								</div>
								<!--end::Card-->
							</div>
							<!--end::Container-->
						</div>

                   </div>
					<!--begin::Footer-->
						@include('inc.footercontent')
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<script>
				var map_render = L.map('location_map').setView([8.2, 1.1], 10); // Set initial coordinates and zoom level
				L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
				    maxZoom: 19,
				}).addTo(map_render);
		</script>
		<script type="text/javascript">
			fetch('fetch.php')
		    .then(response => response.json())
		    .then(data => {
		        data.forEach(tax_payer => {
		            L.marker([tax_payer.Latitute, tax_payer.Longitute]).addTo(map_render)
		                .bindPopup(tax_payer.Fullname); 
		                // Display employee name on click
		        });
		    });
		</script>
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<script src="assets/js/widgets.bundle.js"></script>
	</body>	
</html>
