<!DOCTYPE html>
<html lang="en">
	<head>
		<title> {{ config('app.name') }} | Tax Payer</title>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
		<link href="{{ asset('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>
		<link href="{{ asset('plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css"/>
		<link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
		<link rel="../shortcut icon" href="{{ asset('media/logo.png') }}"/>
		
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				    @include('inc.aside')

				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">

					  @include('inc.topmenu')

					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Toolbar-->
						<div class="toolbar" id="kt_toolbar">
							<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
								<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
									<h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Tax Payer</h1>
									<span class="h-20px border-gray-300 border-start mx-4"></span>
									<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
										<li class="breadcrumb-item text-muted">
											<a href="#" class="text-muted text-hover-primary">Home</a>
										</li>
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-300 w-5px h-2px"></span>
										</li>
										<li class="breadcrumb-item text-dark">{{ $title }}</li>
									</ul>
								</div>
								<div class="d-flex align-items-center gap-2 gap-lg-3">
									<div class="m-0">
									</div>
								</div>
							</div>
						</div>
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<div id="kt_content_container" class="container-xxl">
								<div class="card">
									<div class="card-header border-0 pt-6">
										<div class="card-title">
											<div class="d-flex align-items-center position-relative my-1">
												<span class="svg-icon svg-icon-1 position-absolute ms-6">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
														<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
													</svg>
												</span>
												<input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Payer"/>
											</div>
										</div>
										<div class="card-toolbar">
											<div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
												<div class="w-150px me-3">
													<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-order-filter="status">
														<option></option>
														<option value="all">All</option>
														<option value="active">Active</option>
														<option value="locked">Locked</option>
													</select>
												</div>
												<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#kt_modal_create_account">Add Payer</button>
											</div>
											<div class="d-flex justify-content-end align-items-center d-none" data-kt-customer-table-toolbar="selected">
												<div class="fw-bolder me-5">
												<span class="me-2" data-kt-customer-table-select="selected_count"></span>Selected</div>
												<button type="button" class="btn btn-danger" data-kt-customer-table-select="delete_selected" disabled>Delete Selected</button>
											</div>
										</div>
									</div>
									<div class="card-body pt-0">
										<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
											<thead>
												<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
													<th class="w-10px pe-2" disable>
														<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
															<!-- <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_customers_table .form-check-input" value="1" disabled/> -->
														</div>
													</th>
													<th class="min-w-125px">Name</th>
													<th class="min-w-125px">Gender</th>
													<th class="min-w-125px">Status</th>
													<th class="min-w-125px">Village</th>
													<th class="min-w-125px">Neighborhood</th>
													<th class="min-w-125px">Created Date</th>
													<th class="text-end min-w-70px">Actions</th>
												</tr>
											</thead>
											<tbody class="fw-bold text-gray-600">
												<tr>
													<td>
														<div class="form-check form-check-sm form-check-custom form-check-solid">
															<!-- <input class="form-check-input" type="checkbox" value="1" /> -->
														</div>
													</td>
													<td>
														Emma Smith
													</td>
													<td>Male</td>
													<td>
														<div class="badge badge-light-success">Active</div>
													</td>
													<td>TCHALOUDE</td>
													<td>KONADA </td>
													<td>25 Oct 2022</td>
													<td class="text-end">
														<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
														<span class="svg-icon svg-icon-5 m-0">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
															</svg>
														</span>
														</a>
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">View</a>
															</div>
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
															</div>
														</div>
													</td>
												</tr>													
												<tr>
													<td>
														<div class="form-check form-check-sm form-check-custom form-check-solid">
															<!-- <input class="form-check-input" type="checkbox" value="1" /> -->
														</div>
													</td>
													<td>Brian Cox</td>
													<td>Male</td>
													<td><div class="badge badge-light-success">Active</div></td>
													<td>TCHALOUDE</td>
													<td>TIOBA</td>
													<td>25 Jul 2022</td>
													<td class="text-end">
														<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
														<span class="svg-icon svg-icon-5 m-0">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
															</svg>
														</span>
														</a>
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">View</a>
															</div>
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-check-sm form-check-custom form-check-solid">
															<!-- <input class="form-check-input" type="checkbox" value="1" /> -->
														</div>
													</td>
													<td>Mikaela Collins</td>
													<td>
														<a href="#" class="text-gray-600 text-hover-primary mb-1">Female</a>
													</td>
													<td>
														<div class="badge badge-light-danger">Disabled</div>
													</td>
													<td>TCHALOUDE</td>
													<td>LAMAKAZA </td>
													<td>15 Apr 2022</td>
													<td class="text-end">
														<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
														<span class="svg-icon svg-icon-5 m-0">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
															</svg>
														</span>
														</a>
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">View</a>
															</div>
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
															</div>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
					
								<!--begin::Modal - Customers - Add-->
								<div class="modal fade" id="kt_modal_add_customer" tabindex="-1" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered mw-650px">
										<div class="modal-content">
											<form class="form" action="#" id="kt_modal_add_customer_form" data-kt-redirect="#">
												<div class="modal-header" id="kt_modal_add_customer_header">
													<h2 class="fw-bolder">Add a Customer</h2>
													<div id="kt_modal_add_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary">
														<span class="svg-icon svg-icon-1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
																<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
															</svg>
														</span>
													</div>
												</div>
												<div class="modal-body py-10 px-lg-17">
													<div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_customer_header" data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px">
														<div class="fv-row mb-7">
															<label class="required fs-6 fw-bold mb-2">Name</label>
															<input type="text" class="form-control form-control-solid" placeholder="" name="name" value="Sean Bean" />
														</div>
														<div class="fv-row mb-7">
															<label class="fs-6 fw-bold mb-2">
																<span class="required">Email</span>
																<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Email address must be active"></i>
															</label>
															<input type="email" class="form-control form-control-solid" placeholder="" name="email" value="sean@dellito.com" />
														</div>
														<div class="fv-row mb-15">
															<label class="fs-6 fw-bold mb-2">Description</label>
															<input type="text" class="form-control form-control-solid" placeholder="" name="description" />					
														</div>
														<div class="fw-bolder fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#kt_modal_add_customer_billing_info" role="button" aria-expanded="false" aria-controls="kt_customer_view_details">Shipping Information
														<span class="ms-2 rotate-180">
															
															<span class="svg-icon svg-icon-3">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
																</svg>
															</span>
														</span></div>
														<div id="kt_modal_add_customer_billing_info" class="collapse show">
															<div class="d-flex flex-column mb-7 fv-row">
																<!--begin::Label-->
																<label class="required fs-6 fw-bold mb-2">Address Line 1</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input class="form-control form-control-solid" placeholder="" name="address1" value="101, Collins Street" />
																<!--end::Input-->
															</div>
															<!--end::Input group-->
															<!--begin::Input group-->
															<div class="d-flex flex-column mb-7 fv-row">
																<!--begin::Label-->
																<label class="fs-6 fw-bold mb-2">Address Line 2</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input class="form-control form-control-solid" placeholder="" name="address2" value="" />
																<!--end::Input-->
															</div>
															<!--end::Input group-->
															<!--begin::Input group-->
															<div class="d-flex flex-column mb-7 fv-row">
																<!--begin::Label-->
																<label class="required fs-6 fw-bold mb-2">Town</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input class="form-control form-control-solid" placeholder="" name="city" value="Melbourne" />
																<!--end::Input-->
															</div>
															<!--end::Input group-->
															<!--begin::Input group-->
															<div class="row g-9 mb-7">
																<!--begin::Col-->
																<div class="col-md-6 fv-row">
																	<!--begin::Label-->
																	<label class="required fs-6 fw-bold mb-2">State / Province</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input class="form-control form-control-solid" placeholder="" name="state" value="Victoria" />
																	<!--end::Input-->
																</div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col-md-6 fv-row">
																	<!--begin::Label-->
																	<label class="required fs-6 fw-bold mb-2">Post Code</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input class="form-control form-control-solid" placeholder="" name="postcode" value="3000" />
																	<!--end::Input-->
																</div>
																<!--end::Col-->
															</div>
															<!--end::Input group-->
															<!--begin::Input group-->
															<div class="d-flex flex-column mb-7 fv-row">
																<!--begin::Label-->
																<label class="fs-6 fw-bold mb-2">
																	<span class="required">Country</span>
																	<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of origination"></i>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<select name="country" aria-label="Select a Country" data-control="select2" data-placeholder="Select a Country..." data-dropdown-parent="#kt_modal_add_customer" class="form-select form-select-solid fw-bolder">
																	<option value="">Select a Country...</option>
																	<option value="AF">Afghanistan</option>
																	<option value="AX">Aland Islands</option> 
																</select>
																<!--end::Input-->
															</div>
															<div class="fv-row mb-7">
																<!--begin::Wrapper-->
																<div class="d-flex flex-stack">
																	<!--begin::Label-->
																	<div class="me-5">
																		<!--begin::Label-->
																		<label class="fs-6 fw-bold">Use as a billing adderess?</label>
																		<!--end::Label-->
																		<!--begin::Input-->
																		<div class="fs-7 fw-bold text-muted">If you need more info, please check budget planning</div>
																		<!--end::Input-->
																	</div>
																	<!--end::Label-->
																	<!--begin::Switch-->
																	<label class="form-check form-switch form-check-custom form-check-solid">
																		<!--begin::Input-->
																		<input class="form-check-input" name="billing" type="checkbox" value="1" id="kt_modal_add_customer_billing" checked="checked" />
																		<!--end::Input-->
																		<!--begin::Label-->
																		<span class="form-check-label fw-bold text-muted" for="kt_modal_add_customer_billing">Yes</span>
																		<!--end::Label-->
																	</label>
																	<!--end::Switch-->
																</div>
																<!--begin::Wrapper-->
															</div>
															<!--end::Input group-->
														</div>
														<!--end::Billing form-->
													</div>
													<!--end::Scroll-->
												</div>
												<!--end::Modal body-->
												<!--begin::Modal footer-->
												<div class="modal-footer flex-center">
													<!--begin::Button-->
													<button type="reset" id="kt_modal_add_customer_cancel" class="btn btn-light me-3">Discard</button>
													<!--end::Button-->
													<!--begin::Button-->
													<button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
														<span class="indicator-label">Submit</span>
														<span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
													<!--end::Button-->
												</div>
												<!--end::Modal footer-->
											</form>
											<!--end::Form-->
										</div>
									</div>
								</div>
								<!--end::Modal - Customers - Add-->
								<!--begin::Modal - Adjust Balance-->
								<div class="modal fade" id="kt_customers_export_modal" tabindex="-1" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered mw-650px">
										<div class="modal-content">
											<div class="modal-header">
												<h2 class="fw-bolder">Export Customers</h2>
												<div id="kt_customers_export_close" class="btn btn-icon btn-sm btn-active-icon-primary">
													<span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
															<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
														</svg>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
					</div>
					<!--end::Content-->
					@include('inc.footercontent')
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
				</svg>
			</span>
		</div>
		
			@include('inc.modals.taxpayer')

		<script src="{{ asset('plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('js/scripts.bundle.js') }}"></script>
		<script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}"></script>
		<script src="{{ asset('js/custom/apps/ecommerce/customers/listing/listing.js') }}"></script>
		<script src="{{ asset('js/custom/apps/ecommerce/customers/listing/add.js') }}"></script>
		<script src="{{ asset('js/custom/apps/ecommerce/customers/listing/export.js') }}"></script>
		<script src="{{ asset('js/widgets.bundle.js') }}"></script>
		<script src="{{ asset('js/custom/widgets.js') }}"></script>
		<script src="{{ asset('js/custom/apps/chat/chat.js') }}"></script>
		<script src="{{ asset('js/custom/utilities/modals/upgrade-plan.js') }}"></script>
		<script src="{{ asset('js/custom/utilities/modals/create-app.js') }}"></script>
		<script src="{{ asset('js/custom/utilities/modals/users-search.js') }}"></script>
		<script src="{{ asset('js/custom/utilities/modals/create-account.js') }}"></script>
	</body>
	<script type="text/javascript">
    "use strict";

    // Assuming you have a form with id 'kt_create_account_form' 
    // and a submit button with id 'submit_button'
    var form = document.querySelector("#kt_create_account_form");
    var submitButton = document.querySelector("#submit_button");

    form.addEventListener("submit", function (event) {
        event.preventDefault();

        // You can add form validation logic here using FormValidation library if needed

        // Show a loading indicator
        submitButton.setAttribute("data-kt-indicator", "on");
        submitButton.disabled = true;

        // Extract all form fields
        var formData = {};
        var formElements = form.elements;
        for (var i = 0; i < formElements.length; i++) {
            var element = formElements[i];
            if (element.name) {
                formData[element.name] = element.value;
            }
        }

        // Perform Ajax request using Fetch API
        fetch('', {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(formData)
        })
        .then(response => response.json())
        .then(response => {
            // Handle the response from the server
            if (response.status === 'success') {
                // Show a success message or redirect to another page
                Swal.fire({
                    text: "Form submitted successfully!",
                    icon: "success",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                });
            } else {
                // Handle errors or show error messages
                Swal.fire({
                    text: "Form submission failed. Please try again.",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                });
            }
        })
        .finally(() => {
            // Hide the loading indicator
            submitButton.removeAttribute("data-kt-indicator");
            submitButton.disabled = false;
        });
    });
</script>
</html>