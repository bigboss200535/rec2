<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
	<title>{{ config('app.name') }} | Invoices</title>
		<link href="{{ asset('plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
		<link href="{{ asset('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>
		<link href="{{ asset('plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css"/>
		<link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
		<link rel="shortcut icon" href="{{ asset('media/logo.png') }}"/>
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
			    @include('inc.aside')
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Navbar-->
						@include('inc.topmenu')
					<!--end::Navbar-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<div class="toolbar" id="kt_toolbar">
							<!--begin::Container-->
							<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
								<!--begin::Page title-->
								<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
									<h1 class="d-flex align-items-center text-success fw-bolder fs-3 my-1 text-success">Hello 
										<span class="h-20px border-success-200 border-start ms-3 mx-2"></span>
									<!--begin::Separator-->
									<!-- <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span> -->
									</h1>
								</div>
							</div>
							<!--end::Container-->
						</div>
						

						<div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="container-xxl">
								<div class="d-flex flex-column flex-lg-row">
									<div class="flex-lg-row-fluid mb-10 mb-lg-0 me-lg-7 me-xl-10">
										<div class="card">
											<div class="card-body p-12">
												<form action="" id="kt_invoice_form">
													<div class="d-flex flex-column align-items-start flex-xxl-row">
														<div class="d-flex align-items-center flex-equal fw-row me-4 order-2" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Specify invoice date">
															<div class="fs-6 fw-bolder text-gray-700 text-nowrap">Date:</div>
															<div class="position-relative d-flex align-items-center w-150px">
																<input class="form-control form-control-transparent fw-bolder pe-5" placeholder="Select date" name="invoice_date" />
																<span class="svg-icon svg-icon-2 position-absolute ms-4 end-0">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
																	</svg>
																</span>
															</div>
															<!-- <div class="fs-6 fw-bolder text-gray-700 text-nowrap">Month:</div>
															<div class="position-relative d-flex align-items-center w-150px">
																<input class="form-control form-control-transparent fw-bolder pe-5" placeholder="Select date" name="invoice_date" />
																<select class="form-control form-control-transparent fw-bolder pe-5" >
																	<option>-Select-</option>
																</select>
															</div> -->
														</div>
														
														<div class="d-flex flex-center flex-equal fw-row text-nowrap order-1 order-xxl-2 me-4" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Enter invoice number">
															<span class="fs-2x fw-bolder text-gray-800">Invoice #</span>
															<input type="text" class="form-control form-control-flush fw-bolder text-muted fs-3 w-125px" value="2021001" placehoder="..." disabled />
														</div>
													
														<div class="d-flex align-items-center justify-content-end flex-equal order-3 fw-row" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Specify invoice due date">
															<div class="fs-6 fw-bolder text-gray-700 text-nowrap">Due Date:</div>
															<div class="position-relative d-flex align-items-center w-150px">
																<input class="form-control form-control-transparent fw-bolder pe-5" placeholder="Select date" name="invoice_due_date" />
																<span class="svg-icon svg-icon-2 position-absolute end-0 ms-4">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
																	</svg>
																</span>
															</div>
														</div>
													</div>
													<div class="separator separator-dashed my-10"></div>
													<div class="mb-0">
														<div class="row gx-10 mb-5">
															<div class="col-lg-6">
																<label class="form-label fs-6 fw-bolder text-gray-700 mb-3">Invoice Details</label>
																<div class="mb-5">
																	<input type="text" class="form-control form-control-solid" placeholder="Firstname" />
																</div>
																<div class="mb-5">
																	<input type="text" class="form-control form-control-solid" placeholder="Telephone" />
																</div>
																<div class="mb-5">
																	<input type="text" class="form-control form-control-solid" placeholder="Village" />
																</div>
																<div class="mb-5">
																	<textarea name="notes" class="form-control form-control-solid" rows="3" placeholder="Address"></textarea>
																</div>
															</div>
															<div class="col-lg-6">
																<label class="form-label fs-6 fw-bolder text-white-700 mb-3" style="color:white">Bill To</label>
																<div class="mb-5">
																	<input type="text" class="form-control form-control-solid" placeholder="Othername" value='' />
																</div>
																<div class="mb-5">
																	<input type="text" class="form-control form-control-solid" placeholder="Email" />
																</div>
																<div class="mb-5">
																	<input type="text" class="form-control form-control-solid" placeholder="File Number" />
																</div>
																<div class="mb-5">
																	<textarea name="notes" class="form-control form-control-solid" rows="3" placeholder="Invoice Summary"></textarea>
																</div>
															</div>
														</div>
														<div class="table-responsive mb-10">
															<!--begin::Table-->
															<table class="table g-5 gs-0 mb-0 fw-bolder text-gray-700" data-kt-element="items">
																<!--begin::Table head-->
																<thead>
																	<tr class="border-bottom fs-7 fw-bolder text-gray-700 text-uppercase">
																		<th class="min-w-300px w-475px">Item</th>
																		<th class="min-w-100px w-100px">QTY</th>
																		<th class="min-w-150px w-150px">Price</th>
																		<th class="min-w-100px w-150px text-end">Total</th>
																		<th class="min-w-75px w-75px text-end">Action</th>
																	</tr>
																</thead>
																<tbody>
																	<tr class="border-bottom border-bottom-dashed" data-kt-element="item">
																		<td class="pe-7">
																			<input type="text" class="form-control form-control-solid mb-2" name="name[]" placeholder="Item name" />
																			<input type="text" class="form-control form-control-solid" name="description[]" placeholder="Description" />
																		</td>
																		<td class="ps-0">
																			<input class="form-control form-control-solid" type="number" min="1" name="quantity[]" placeholder="1" value="1" data-kt-element="quantity" />
																		</td>
																		<td>
																			<input type="text" class="form-control form-control-solid text-end" name="price[]" placeholder="0.00" value="0.00" data-kt-element="price" />
																		</td>
																		<td class="pt-8 text-end text-nowrap">FCFA
																		<span data-kt-element="total">0.00</span></td>
																		<td class="pt-5 text-end">
																			<button type="button" class="btn btn-sm btn-icon btn-active-color-primary" data-kt-element="remove-item">
																				<span class="svg-icon svg-icon-3">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
																						<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
																						<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
																					</svg>
																				</span>
																			</button>
																		</td>
																	</tr>
																</tbody>
																<tfoot>
																	<tr class="border-top border-top-dashed align-top fs-6 fw-bolder text-gray-700">
																		<th class="text-primary">
																			<button class="btn btn-link py-1" data-kt-element="add-item">Add item</button>
																		</th>
																		<th colspan="2" class="border-bottom border-bottom-dashed ps-0">
																			<div class="d-flex flex-column align-items-start">
																				<div class="fs-5">Subtotal</div>
																			</div>
																		</th>
																		<th colspan="2" class="border-bottom border-bottom-dashed text-end">FCFA
																		<span data-kt-element="sub-total">0.00</span></th>
																	</tr>
																	<tr class="align-top fw-bolder text-gray-700">
																		<th></th>
																		<th colspan="2" class="fs-4 ps-0">Total</th>
																		<th colspan="2" class="text-end fs-4 text-nowrap">FCFA
																		<span data-kt-element="grand-total">0.00</span></th>
																	</tr>
																</tfoot>
															</table>
														</div>
														<table class="table d-none" data-kt-element="item-template">
															<tr class="border-bottom border-bottom-dashed" data-kt-element="item">
																<td class="pe-7">
																	<input type="text" class="form-control form-control-solid mb-2" name="name[]" placeholder="Item name" />
																	<input type="text" class="form-control form-control-solid" name="description[]" placeholder="Description" />
																</td>
																<td class="ps-0">
																	<input class="form-control form-control-solid" type="number" min="1" name="quantity[]" placeholder="1" data-kt-element="quantity" />
																</td>
																<td>
																	<input type="text" class="form-control form-control-solid text-end" name="price[]" placeholder="0.00" data-kt-element="price" />
																</td>
																<td class="pt-8 text-end">FCFA
																<span data-kt-element="total">0.00</span></td>
																<td class="pt-5 text-end">
																	<button type="button" class="btn btn-sm btn-icon btn-active-color-primary" data-kt-element="remove-item">
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
																				<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
																				<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
																			</svg>
																		</span>
																	</button>
																</td>
															</tr>
														</table>
														<table class="table d-none" data-kt-element="empty-template">
															<tr data-kt-element="empty">
																<th colspan="5" class="text-muted text-center py-10">No items</th>
															</tr>
														</table>
														<div class="mb-0">
															<label class="form-label fs-6 fw-bolder text-gray-700">Notes</label>
															<textarea name="notes" class="form-control form-control-solid" rows="3" placeholder="Thanks for your business"></textarea>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
									<div class="flex-lg-auto min-w-lg-300px">
										<div class="card" data-kt-sticky="true" data-kt-sticky-name="invoice" data-kt-sticky-offset="{default: false, lg: '200px'}" data-kt-sticky-width="{lg: '250px', lg: '300px'}" data-kt-sticky-left="auto" data-kt-sticky-top="150px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
											<div class="card-body p-10">
												<div class="mb-10">
													<label class="form-label fw-bolder fs-6 text-gray-700">Payee Search</label>
													<input type="text" name="" class="form-select form-select-solid" placeholder="Payee A/c No">
												</div>
												<!-- <div class="separator separator-dashed mb-8"></div> -->
												<!--<div class="mb-8">
													
													 <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack mb-5">
														<span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700">Payment method</span>
														<input class="form-check-input" type="checkbox" checked="checked" value="" />
													</label> -->
													<!-- <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack mb-5">
														<span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700">Late fees</span>
														<input class="form-check-input" type="checkbox" value="" />
													</label> -->
													<!-- <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
														<span class="form-check-label ms-0 fw-bolder fs-6 text-gray-700">Notes</span>
														<input class="form-check-input" type="checkbox" value="" />
													</label> 
												</div>-->
												<div class="separator separator-dashed mb-8"></div>
												<div class="mb-0">
													<div class="row mb-5">
														<div class="col">
															<a href="#" class="btn btn-light btn-active-light-success w-100">Search</a>
														</div>
														<div class="col">
															<a href="#" class="btn btn-light btn-active-light-danger w-100">Clear</a>
														</div>
													</div>
													<button type="submit" href="#" class="btn btn-success w-100" id="kt_invoice_submit_button">
													<span class="svg-icon svg-icon-3">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M15.43 8.56949L10.744 15.1395C10.6422 15.282 10.5804 15.4492 10.5651 15.6236C10.5498 15.7981 10.5815 15.9734 10.657 16.1315L13.194 21.4425C13.2737 21.6097 13.3991 21.751 13.5557 21.8499C13.7123 21.9488 13.8938 22.0014 14.079 22.0015H14.117C14.3087 21.9941 14.4941 21.9307 14.6502 21.8191C14.8062 21.7075 14.9261 21.5526 14.995 21.3735L21.933 3.33649C22.0011 3.15918 22.0164 2.96594 21.977 2.78013C21.9376 2.59432 21.8452 2.4239 21.711 2.28949L15.43 8.56949Z" fill="black" />
															<path opacity="0.3" d="M20.664 2.06648L2.62602 9.00148C2.44768 9.07085 2.29348 9.19082 2.1824 9.34663C2.07131 9.50244 2.00818 9.68731 2.00074 9.87853C1.99331 10.0697 2.04189 10.259 2.14054 10.4229C2.23919 10.5869 2.38359 10.7185 2.55601 10.8015L7.86601 13.3365C8.02383 13.4126 8.19925 13.4448 8.37382 13.4297C8.54839 13.4145 8.71565 13.3526 8.85801 13.2505L15.43 8.56548L21.711 2.28448C21.5762 2.15096 21.4055 2.05932 21.2198 2.02064C21.034 1.98196 20.8409 1.99788 20.664 2.06648Z" fill="black" />
														</svg>
													</span>	Submit Invoice</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
                   </div>
					<!--begin::Footer-->
						@include('inc.footercontent')
					<!--end::Footer-->
				</div>
			</div>
		</div>
		
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
		<script src="{{ asset('plugins/custom/leaflet/leaflet.bundle.js') }}"></script>
		<script src="{{ asset('js/custom/apps/invoices/create.js') }}"></script>
		<script src="{{ asset('js/custom/utilities/modals/select-location.js') }}"></script>
	</body>
</html>