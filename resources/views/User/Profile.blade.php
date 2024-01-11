<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head>
		<title>{{ config('app.name') }} | | Maps</title>
		<link href="{{ asset('plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css"/>
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
						<!--begin::Post-->
						<div class="post d-flex flex-column-fluid" id="kt_post">
							<!--begin::Container-->
							<div id="kt_content_container" class="container-xxl">
								<!--begin::Navbar-->
								<div class="card mb-5 mb-xl-10">
									<div class="card-body pt-9 pb-0">
										<!--begin::Details-->
										<div class="d-flex flex-wrap flex-sm-nowrap mb-3">
											<div class="me-7 mb-4">
												<div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
													<img src="{{ asset('media/avatars/blank.png') }}" alt="image" />
													<div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px"></div>
												</div>
											</div>
											<!--end::Pic-->
											<!--begin::Info-->
											<div class="flex-grow-1">
												<!--begin::Title-->
												<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
													<!--begin::User-->
													<div class="d-flex flex-column">
														<!--begin::Name-->
														<div class="d-flex align-items-center mb-2">
															<a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bolder me-1">Mohammed Alhassan</a>
															<a href="#">
																<!--begin::Svg Icon | path: icons/duotune/general/gen026.svg-->
																<span class="svg-icon svg-icon-1 svg-icon-primary">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																		<path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="#00A3FF" />
																		<path class="permanent" d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</a>
															<a href="#" class="btn btn-sm btn-light-success fw-bolder ms-2 fs-8 py-1 px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Verified</a>
														</div>
														<!--end::Name-->
														<!--begin::Info-->
														<div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
															<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
															<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
															<span class="svg-icon svg-icon-4 me-1">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="black" />
																	<path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="black" />
																</svg>
															</span>
															Developer</a>
															<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
															<span class="svg-icon svg-icon-4 me-1">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="black" />
																	<path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="black" />
																</svg>
															</span>
															a.m@example.com</a>
														</div>
													</div>
													<div class="d-flex my-4">
														<div class="me-0">
															<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
																<i class="bi bi-three-dots fs-3"></i>
															</button>
															<!--begin::Menu 3-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
																<!--begin::Heading-->
																<div class="menu-item px-3">
																	<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Actions</div>
																</div>
																<!--end::Heading-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="/CreateInvoice" class="menu-link px-3">Create Invoice</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="/Payments" class="menu-link flex-stack px-3">Create Payment
																	<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="CreateInvoice" class="menu-link px-3">Generate Bill</a>
																</div>
																<!-- <div class="menu-item px-3 my-1">
																	<a href="#" class="menu-link px-3">Settings</a>
																</div> -->
																<!--end::Menu item-->
															</div>
															<!--end::Menu 3-->
														</div>
														<!--end::Menu-->
													</div>
													<!--end::Actions-->
												</div>
												<!--end::Title-->
												<!--begin::Stats-->
												<div class="d-flex flex-wrap flex-stack">
													<!--begin::Wrapper-->
													<div class="d-flex flex-column flex-grow-1 pe-8">
														<!--begin::Stats-->
														<div class="d-flex flex-wrap">
															<!--begin::Stat-->
															<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
																<!--begin::Number-->
																<div class="d-flex align-items-center">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																	<span class="svg-icon svg-icon-3 svg-icon-success me-2">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
																			<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<div class="fs-2 fw-bolder" data-kt-countup="true" data-kt-countup-value="4500" data-kt-countup-prefix="CFA"> 0</div>
																</div>
																<!--end::Number-->
																<!--begin::Label-->
																<div class="fw-bold fs-6 text-gray-400">Earnings</div>
																<!--end::Label-->
															</div>
															<!--end::Stat-->
															<!--begin::Stat-->
															<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
																<!--begin::Number-->
																<div class="d-flex align-items-center">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
																	<span class="svg-icon svg-icon-3 svg-icon-danger me-2">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="black" />
																			<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="black" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<div class="fs-2 fw-bolder" data-kt-countup="true" data-kt-countup-value="75">0</div>
																</div>
																<!--end::Number-->
																<!--begin::Label-->
																<div class="fw-bold fs-6 text-gray-400">Transactions</div>
																<!--end::Label-->
															</div>
															<!--end::Stat-->
															<!--begin::Stat-->
															<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
																<!--begin::Number-->
																<div class="d-flex align-items-center">
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
																	<span class="svg-icon svg-icon-3 svg-icon-success me-2">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
																			<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<div class="fs-2 fw-bolder" data-kt-countup="true" data-kt-countup-value="60" data-kt-countup-prefix="%">0</div>
																</div>
																<!--end::Number-->
																<!--begin::Label-->
																<div class="fw-bold fs-6 text-gray-400">Success Rate</div>
																<!--end::Label-->
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end::Navbar-->
								<!--begin::details View-->
								<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
									<!--begin::Card header-->
									<div class="card-header cursor-pointer">
										<!--begin::Card title-->
										<div class="card-title m-0">
											<h3 class="fw-bolder m-0">Profile Details</h3>
										</div>
										<a href="#" class="btn btn-success align-self-center">Edit Profile</a>
									</div>
									<!--begin::Card header-->
									<!--begin::Card body-->
									<div class="card-body p-9">
										<!--begin::Row-->
										<div class="row mb-7">
											<!--begin::Label-->
											<label class="col-lg-4 fw-bold text-muted">Full Name</label>
											<div class="col-lg-8">
												<span class="fw-bolder fs-6 text-gray-800">Mohammed Alhassan</span>
											</div>
										</div>
										<div class="row mb-7">
											<label class="col-lg-4 fw-bold text-muted">Municipal</label>
											<div class="col-lg-8 fv-row">
												<span class="fw-bold text-gray-800 fs-6">BLITA</span>
											</div>
										</div>
										<div class="row mb-7">
											<!--begin::Label-->
											<label class="col-lg-4 fw-bold text-muted">Contact Phone
											<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i></label>
											<!--end::Label-->
											<!--begin::Col-->
											<div class="col-lg-8 d-flex align-items-center">
												<span class="fw-bolder fs-6 text-gray-800 me-2">0245 340461</span>
												<span class="badge badge-success">Verified</span>
											</div>
											<!--end::Col-->
										</div>
										<div class="row mb-7">
											<label class="col-lg-4 fw-bold text-muted">Zone</label>
											<div class="col-lg-8">
												<a href="#" class="fw-bold fs-6 text-gray-800 text-hover-primary">ZONE 1</a>
											</div>
										</div>
										<div class="row mb-7">
											<label class="col-lg-4 fw-bold text-muted">Email</label>
											<div class="col-lg-8">
												<span class="fw-bolder fs-6 text-gray-800">infor@sigrecettes.com</span>
											</div>
										</div>
										<!-- <div class="row mb-10">
											<label class="col-lg-4 fw-bold text-muted">Emanil</label>
											<div class="col-lg-8">
												<span class="fw-bold fs-6 text-gray-800">Yes</span>
											</div>
										</div> -->
										<div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
											<span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
													<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black" />
													<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black" />
												</svg>
											</span>
											<div class="d-flex flex-stack flex-grow-1">
												<div class="fw-bold">
													<h4 class="text-gray-900 fw-bolder">We need your attention!</h4>
													<div class="fs-6 text-gray-700">Two factor authentication is not enabled.
													<a class="fw-bolder" href="#">Enable now</a>.</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--begin::Row-->
								<div class="row gy-5 g-xl-10">
									<!--begin::Col-->
									<div class="col-xl-8 mb-xl-10">
										<div class="card card-flush h-lg-100">
											<!--begin::Header-->
											<div class="card-header pt-5">
												<!--begin::Title-->
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bolder text-dark">Online Activeness</span>
													<span class="text-gray-400 pt-2 fw-bold fs-6">75% activity growth</span>
												</h3>
												<!--end::Title-->
												<!--begin::Toolbar-->
												<div class="card-toolbar">
													<!--begin::Menu-->
													<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
														<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
														<span class="svg-icon svg-icon-1 svg-icon-gray-300 me-n1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="black" />
																<rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
																<rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
																<rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</button>
													<!--begin::Menu 2-->
													<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px" data-kt-menu="true">
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick Actions</div>
														</div>
														<div class="separator mb-3 opacity-75"></div>
													
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">New Ticket</a>
														</div>
														
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">New Customer</a>
														</div>
														
														<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
															
															<a href="#" class="menu-link px-3">
																<span class="menu-title">New Group</span>
																<span class="menu-arrow"></span>
															</a>
															
															<div class="menu-sub menu-sub-dropdown w-175px py-4">
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Admin Group</a>
																</div>
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Staff Group</a>
																</div>
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3">Member Group</a>
																</div>
															</div>
														</div>
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3">New Contact</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu separator-->
														<div class="separator mt-3 opacity-75"></div>
														<!--end::Menu separator-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<div class="menu-content px-3 py-3">
																<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
															</div>
														</div>
														<!--end::Menu item-->
													</div>
													<!--end::Menu 2-->
													<!--end::Menu-->
												</div>
												<!--end::Toolbar-->
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-0 px-0">
												<!--begin::Chart-->
												<div id="kt_charts_widget_1" class="min-h-auto ps-4 pe-6 mb-3" style="height: 350px"></div>
												<div class="d-flex align-items-center px-9">
													<div class="d-flex align-items-center me-6">
														<span class="rounded-1 bg-primary me-2 h-10px w-10px"></span>
														<span class="fw-bold fs-6 text-gray-600">Gained</span>
													</div>
													<div class="d-flex align-items-center">
														<span class="rounded-1 bg-success me-2 h-10px w-10px"></span>
														<span class="fw-bold fs-6 text-gray-600">Lost</span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-xl-4 mb-5 mb-xl-10">
										<div class="card h-md-100">
											<div class="card-body d-flex flex-column flex-center">
												<div class="mb-2">
													<h1 class="fw-bold text-gray-800 text-center lh-lg">Have you tried
													<br/>the
													<span class="fw-boldest">Mobile Application ?</span></h1>
													<div class="flex-grow-1 bgi-no-repeat bgi-size-contain bgi-position-x-center card-rounded-bottom h-200px mh-200px my-5 my-lg-12" style="background-image:url('{{ asset('media/svg/illustrations/easy/1.svg') }}')"></div>
												</div>
													<div class="text-center">
											    		<a class="btn btn-sm btn-primary me-2" data-bs-target="#kt_modal_create_app" data-bs-toggle="modal">Try now</a>
														<a class="btn btn-sm btn-light" href="#">Learn more</a>
												</div>
											</div>
										</div>
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row gy-5 g-xl-10">
									<div class="col-xl-4">
										<div class="card card-flush h-xl-100">
											<div class="card-header pt-7">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bolder text-dark">Customer Registered</span>
													<span class="text-gray-400 mt-1 fw-bold fs-6">3 Customers registered so far</span>
												</h3>
												<div class="card-toolbar">
													<a href="#" class="btn btn-sm btn-light">View Details</a>
												</div>
											</div>
											<div class="card-body">
												<div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 415px">
													<div class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
														<div class="d-flex flex-stack mb-3">
															<div class="me-3">
																<a href="#" class="text-gray-800 text-hover-primary fw-bolder">ELEPHANT THES</a>
															</div>
														</div>
														<div class="d-flex flex-stack">
															<span class="text-gray-400 fw-bolder">VILLAGE
															<a href="#" class="text-gray-800 text-hover-primary fw-bolder">JASON BOURNE</a></span>
															<span class="badge badge-light-success">ACTIVE</span>
														</div>
													</div>
													<div class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
														<div class="d-flex flex-stack mb-3">
															<div class="me-3">
																<a href="#" class="text-gray-800 text-hover-primary fw-bolder">BLACK STONE</a>
															</div>
														</div>
														<div class="d-flex flex-stack">
															<span class="text-gray-400 fw-bolder">VILLAGE:
															<a href="#" class="text-gray-800 text-hover-primary fw-bolder">DAN WILSON</a></span>
															<span class="badge badge-light-danger">ACTIVE</span>
														</div>
													</div>
													<div class="rounded border-gray-300 border-1 border-gray-300 border-dashed px-7 py-3 mb-6">
														<div class="d-flex flex-stack mb-3">
															<div class="me-3">
																<a href="#" class="text-gray-800 text-hover-primary fw-bolder">BLUE STONE</a>
															</div>
														</div>
														<div class="d-flex flex-stack">
															<span class="text-gray-400 fw-bolder">VILLAGE:
															<a href="#" class="text-gray-800 text-hover-primary fw-bolder">DAN WILSON</a></span>
															<span class="badge badge-light-danger">ACTIVE</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-xl-8">
										<!--begin::Table Widget 5-->
										<div class="card card-flush h-xl-100">
											<!--begin::Card header-->
											<div class="card-header pt-7">
												<!--begin::Title-->
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bolder text-dark">Recent Payments</span>
													<span class="text-gray-400 mt-1 fw-bold fs-6">Total 2,356 </span>
												</h3>
												<!--end::Title-->
												<!--begin::Actions-->
												<div class="card-toolbar">
													<!--begin::Filters-->
													<div class="d-flex flex-stack flex-wrap gap-4">
														<div class="d-flex align-items-center fw-bolder">
															<div class="text-muted fs-7 me-2">Status</div>
															<select class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bolder py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option" data-kt-table-widget-5="filter_status">
																<option></option>
																<option value="Show All" selected="selected">Show All</option>
																<option value="In Stock">Success</option>
																<option value="Out of Stock">Error</option>
																<option value="Low Stock">Pending</option>
															</select>
														</div>
														<!-- <a href="#" class="btn btn-light btn-sm">View Stock</a> -->
													</div>
												</div>
											</div>
											<div class="card-body">
												<table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_5_table">
													<thead>
														<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
															<th class="min-w-100px">Description</th>
															<th class="text-end pe-3 min-w-100px">Product ID</th>
															<th class="text-end pe-3 min-w-150px">Date Added</th>
															<th class="text-end pe-3 min-w-100px">Amount</th>
															<th class="text-end pe-3 min-w-50px">Status</th>
															<th class="text-end pe-0 min-w-25px">Qty</th>
														</tr>
													</thead>
													<tbody class="fw-bolder text-gray-600">
														<tr>
															<td>
																<a href="#" class="text-dark text-hover-primary">Macbook Air M1</a>
															</td>
															<td class="text-end">#XGY-356</td>
															<td class="text-end">Oct 25, 2022</td>
															<td class="text-end">CFA 1,230</td>
															<td class="text-end">
																<span class="badge py-3 px-4 fs-7 badge-light-primary"> Success</span>
															</td>
															<td class="text-end" data-order="58">
																<span class="text-dark fw-bolder">1</span>
															</td>
														</tr>
														<tr>
															<td>
																<a href="#" class="text-dark text-hover-primary">Surface Laptop 4</a>
															</td>
															<td class="text-end">#YHD-047</td>
															<td class="text-end">Jun 20, 2022</td>
															<td class="text-end">CFA 1,060</td>
															<td class="text-end">
																<span class="badge py-3 px-4 fs-7 badge-light-danger">Error</span>
															</td>
															<td class="text-end" data-order="0">
																<span class="text-dark fw-bolder">1</span>
															</td>
														</tr>
														<tr>
															<td>
																<a href="#" class="text-dark text-hover-primary">Logitech MX 250</a>
															</td>
															<td class="text-end">#SRR-678</td>
															<td class="text-end">May 05, 2022</td>
															<td class="text-end">CFA 64</td>
															<td class="text-end">
																<span class="badge py-3 px-4 fs-7 badge-light-primary">Success</span>
															</td>
															<td class="text-end" data-order="290">
																<span class="text-dark fw-bolder">5</span>
															</td>
														</tr>
														<tr>
															<td>
																<a href="#" class="text-dark text-hover-primary">AudioEngine HD3</a>
															</td>
															<td class="text-end">#PXF-578</td>
															<td class="text-end">Mar 10, 2022</td>
															<td class="text-end">CFA 1,060</td>
															<td class="text-end">
																<span class="badge py-3 px-4 fs-7 badge-light-danger">Error</span>
															</td>
															<td class="text-end" data-order="46">
																<span class="text-dark fw-bolder">6</span>
															</td>
														<tr>
															<td>
																<a href="#" class="text-dark text-hover-primary">Dell 32 UltraSharp</a>
															</td>
															<td class="text-end">#XGY-356</td>
															<td class="text-end">Jul 25, 2022</td>
															<td class="text-end">CFA 1,060</td>
															<td class="text-end">
																<span class="badge py-3 px-4 fs-7 badge-light-warning">Pending</span>
															</td>
															<td class="text-end" data-order="8">
																<span class="text-dark fw-bolder">8 PCS</span>
															</td>
														</tr>
														<tr>
															<td>
																<a href="#" class="text-dark text-hover-primary">Google Pixel 6 Pro</a>
															</td>
															<td class="text-end">#XVR-425</td>
															<td class="text-end">Nov 10, 2022</td>
															<td class="text-end">CFA 1,060</td>
															<td class="text-end">
																<span class="badge py-3 px-4 fs-7 badge-light-primary">Success</span>
															</td>
															<td class="text-end" data-order="124">
																<span class="text-dark fw-bolder">124 PCS</span>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Table Widget 5-->
									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Post-->
                   </div>
					<!--begin::Footer-->
					@include('inc.footercontent')
					<!--end::Footer-->
				</div>
			</div>
		</div>
		<script src="{{ asset('plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('js/scripts.bundle.js') }}"></script>
		<script src="{{ asset('plugins/custom/leaflet/leaflet.bundle.js') }}"></script>
		<script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}"></script>
		<script src="{{ asset('js/widgets.bundle.js') }}"></script>
		<script src="{{ asset('js/custom/widgets.js') }}"></script>
		<script src="{{ asset('js/custom/apps/chat/chat.js') }}"></script>
		<script src="{{ asset('js/custom/utilities/modals/upgrade-plan.js') }}"></script>
		<script src="{{ asset('js/custom/utilities/modals/create-app.js') }}"></script>
		<script src="{{ asset('js/custom/utilities/modals/select-location.js') }}"></script>
		<script src="{{ asset('js/custom/utilities/modals/users-search.js') }}"></script>
	</body>
	<!--end::Body-->
</html>