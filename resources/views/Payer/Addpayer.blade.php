<!DOCTYPE html>
<html lang="en">
	<head>
		<title> {{ config('app.name') }} | Tax Payer</title>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
		<link href="{{ asset('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>
		<link href="{{ asset('plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css"/>
		<link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
		<link rel="../shortcut icon" href="{{ asset('media/logo.png') }}"/>
		<link rel="stylesheet" href="https://cdn.datatables.net/1.11.7/css/dataTables.bootstrap4.min.css">

<!-- Add these lines before the closing body tag -->
	<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
	<script src="https://cdn.datatables.net/1.11.7/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.7/js/dataTables.bootstrap4.min.js"></script>
		
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
											<a href="/home" class="text-muted text-hover-primary">Home</a>
										</li>
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-300 w-5px h-2px"></span>
										</li>
										<li class="breadcrumb-item text-dark">Payers</li>
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
														<option value="locked">Inactive</option>
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
															<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_customers_table .form-check-input" value="1" disabled/>
														</div>
													</th>
													<th class="min-w-125px">Name</th>
													<th class="min-w-125px">Gender</th>
													<th class="min-w-125px">Status</th>
													<th class="min-w-125px">Telephone</th>
													<th class="min-w-125px">National ID</th>
													<th class="min-w-125px">Created Date</th>
													<th class="text-end min-w-70px">Actions</th>
												</tr>
											</thead>
											<tbody class="fw-bold text-gray-600">
												 @foreach($payers as $payer)
												<tr>
													<td>
														<div class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<td>
														{{ strtoupper($payer->Fullname) }}
													</td>
													<td>{{ $payer->GenderName }}</td>
													<td>
														@if ($payer->Status === 'ACTIVE')
                											<div class="badge badge-light-success">ACTIVE</div>
            											@else
                											<div class="badge badge-light-danger">INACTIVE</div>
														@endif
													</td>
													<td>
														@if ($payer->Telephone1)
                											{{ $payer->Telephone1 }}
            											@else
                											-
														@endif
													</td>
													<td> 
													@if ($payer->NationalIdNumber)
                										{{ $payer->NationalIdNumber }}
            										@else
                										-
            										@endif
													</td>
													<td>{{ \Carbon\Carbon::parse($payer->AddedDate)->format('Y-m-d') }}</td>
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
																<a href="#" class="menu-link px-3" data-payer-id="{{ $payer->TaxPayerId }}">View</a>
															</div>
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row" data-payer-id="{{ $payer->TaxPayerId }}">Delete</a>
															</div>
														</div>
													</td>
												</tr>	
											@endforeach
											</tbody>
										</table>
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
	 <script>
        $(document).ready(function() {
            // Initialize DataTable
            $('#kt_customers_table').DataTable();
        });
    </script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get all the 'Detail' links
        var detailLinks = document.querySelectorAll('[data-payer-id]');

        // Attach click event to each 'Detail' link
        detailLinks.forEach(function (link) {
            link.addEventListener('click', function (event) {
                event.preventDefault();

                // Get the TaxPayerId from the data attribute
                var payerId = link.getAttribute('data-payer-id');

                // Make an AJAX request to fetch details
                fetch('/get-taxpayer-details/' + payerId)
                    .then(response => response.json())
                    .then(data => {
                        // Assuming you have a function to display details in a modal
                        displayDetailsModal(data);
                    })
                    .catch(error => {
                        console.error('Error fetching taxpayer details:', error);
                    });
            });
        });

        // You can define the displayDetailsModal function according to your needs
        function displayDetailsModal(data) {
            // Implement the logic to display details in a modal
            // You can use a library like Bootstrap modal or create your own modal
            console.log('Taxpayer Details:', data);
        }
    });
</script>

	<script type="text/javascript">
	 	 $(document).ready(function () {
	    $('[data-kt-customer-table-filter="delete_row"]').on('click', function (e) {
	        e.preventDefault();

	        var payerId = $(this).data('payer-id');

	        // Add logic to confirm deletion and make an AJAX request to delete the payer
	        // Example: You can use the payerId to make an AJAX request to your delete endpoint
	        // $.ajax({
	        //    method: 'DELETE',
	        //    url: '/delete-payer/' + payerId,
	        //    success: function (response) {
	        //        // Handle success, e.g., remove the row from the table
	        //        $(this).closest('tr').remove();
	        //    },
	        //    error: function (error) {
	        //        // Handle error
	        //        console.error(error);
	        //    }
	        // });
	    });
	});
</script>
<!-- <script type="text/javascript">
    "use strict";

    var form = document.querySelector("#kt_create_account_form");
    var submitButton = document.querySelector("#submit_button");

    form.addEventListener("submit", function (event) {
        event.preventDefault();

        
        submitButton.setAttribute("data-kt-indicator", "on");
        submitButton.disabled = true;

        
        var formData = {};
        var formElements = form.elements;
        for (var i = 0; i < formElements.length; i++) {
            var element = formElements[i];
            if (element.name) {
                formData[element.name] = element.value;
            }
        }

        
        fetch("/save-payer", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(formData)
        })
        .then(response => response.json())
        .then(response => {
            
            if (response.status === 'success') {
                
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
        .catch(error => {
            console.error('Error during fetch operation:', error);
        })
        .finally(() => {
            
            submitButton.removeAttribute("data-kt-indicator");
            submitButton.disabled = false;
        });
    });
</script> -->
<script>
    $(document).ready(function () {
        $('#kt_create_account_form').submit(function (e) {
            e.preventDefault();

            // Serialize the form data
            var formData = $(this).serialize();

            // Make an Ajax request to save the payer
            $.ajax({
                url: '/save-payer', // Replace with your actual route
                type: 'POST',
                data: formData,
                dataType: 'json',
                success: function (data) {
                    // Handle the success response
                    console.log(data); // You can customize this part based on your needs
                    alert('Payer saved successfully');
                    // You may redirect or perform other actions here
                },
                error: function (xhr, status, error) {
                    // Handle the error response
                    console.error(xhr.responseText); // You can customize this part based on your needs
                    alert('Error saving payer');
                }
            });
        });
    });
</script>

</html>