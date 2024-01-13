<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home </title>
        <link href="{{ asset('plugins/custom/vis-timeline/vis-timeline.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
        <link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>
        <link rel="../shortcut icon" href="{{ asset('media/logo.png') }}"/>
    </head>
    <body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
        <div class="d-flex flex-column flex-root">
            <!--begin::Page-->
            <div class="page d-flex flex-row flex-column-fluid">
                <!--begin::Aside-->
              @include('inc.aside')
               <!-- aside and footer embeded -->
                <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                    <!--begin::Header-->
                    @include('inc.topmenu')
                    <!--end::Navbar-->
                    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                        <div class="toolbar" id="kt_toolbar">
                            <!--begin::Container-->
                            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                                <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                                    <h1 class="d-flex align-items-center text-secondary fw-bolder fs-3 my-1 text-dark"><span class="h-20px border-gray-200 border-start ms-3 mx-2"></span><a href="#" class="text-dark" id="formattedTime">10:01am</a>
                                        
                                    </h1>
                                </div>
                                <h1 class="pull-right">MUNICIPAL 
                                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                                    <a href="#">ZONE</a>
                                </h1>
                            </div>
                        </div>
                        <div class="post d-flex flex-column-fluid" id="kt_post">
                            <div id="kt_content_container" class="container-xxl">
                                <div class="row gy-5 g-xl-10">
                                    <div class="col-xl-4 mb-xl-10">
                                        <div class="card h-md-100">
                                            <div class="card-body d-flex flex-column flex-center">
                                                <div class="mb-2">
                                                    <h1 class="fw-bold text-gray-800 text-center lh-lg">Hello,
                                                    <br />
                                                    <span class="fw-boldest"><?php ;?></span></h1>
                                                    <div class="flex-grow-1 bgi-no-repeat bgi-size-contain bgi-position-x-center card-rounded-bottom h-200px mh-200px my-5 my-lg-12" style="background-image:url("{{ asset('media/svg/illustrations/easy/4.svg') }}""></div>
                                                </div>
                                                <div class="text-center">
                                                    <a class="btn btn-sm btn-primary me-2" data-bs-target="#kt_modal_view_users" data-bs-toggle="modal">Make Payment</a>
                                                    <a class="btn btn-sm btn-light" href="#">Quick Guide</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 mb-5 mb-xl-10">
                                        <div class="row g-lg-5 g-xl-10">
                                            <div class="col-md-6 col-xl-6 mb-5 mb-xl-10">
                                                <div class="card overflow-hidden h-md-50 mb-5 mb-xl-10">
                                                    <div class="card-body d-flex justify-content-between flex-column px-0 pb-0">
                                                        <div class="mb-4 px-9">
                                                            <div class="d-flex align-items-center mb-2">
                                                                <span class="fs-2hx fw-bolder text-gray-800 me-2 lh-1">47,769,700</span>
                                                                <span class="d-flex align-items-end text-gray-400 fs-6 fw-bold">CFA</span>
                                                            </div>
                                                            <span class="fs-6 fw-bold text-gray-400">Total Payments this Month</span>
                                                        </div>
                                                        <div id="kt_card_widget_8_chart" class="min-h-auto" style="height: 125px"></div>
                                                    </div>
                                                </div>
                                                <div class="card card-flush h-md-50 mb-lg-10">
                                                    <div class="card-header pt-5">
                                                        <div class="card-title d-flex flex-column">
                                                            <span class="fs-2hx fw-bolder text-dark me-2 lh-1">69,700</span>
                                                            <span class="text-gray-400 pt-1 fw-bold fs-6">Expected Revenue This Month</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-body d-flex align-items-end pt-0">
                                                        <div class="d-flex align-items-center flex-wrap">
                                                            <div class="d-flex me-7 me-xxl-10">
                                                                <!-- <div id="kt_card_widget_10_chart" class="min-h-auto" style="height: 78px; width: 78px" data-kt-size="78" data-kt-line="11"></div> -->
                                                            </div>
                                                            <div class="d-flex flex-column content-justify-center flex-grow-1">
                                                                <div class="d-flex fs-6 fw-bold align-items-center">
                                                                    <div class="bullet w-8px h-6px rounded-2 bg-success me-3"></div>
                                                                    <div class="fs-6 fw-bold text-gray-400 flex-shrink-0">Car Tickets</div>
                                                                    <div class="separator separator-dashed min-w-10px flex-grow-1 mx-2"></div>
                                                                    <div class="ms-auto fw-boldest text-gray-700 text-end">45%</div>
                                                                </div>
                                                                <div class="d-flex fs-6 fw-bold align-items-center my-1">
                                                                    <div class="bullet w-8px h-6px rounded-2 bg-primary me-3"></div>
                                                                    <div class="fs-6 fw-bold text-gray-400 flex-shrink-0">General Tax</div>
                                                                    <div class="separator separator-dashed min-w-10px flex-grow-1 mx-2"></div>
                                                                    <div class="ms-auto fw-boldest text-gray-700 text-end">21%</div>
                                                                </div>
                                                                <div class="d-flex fs-6 fw-bold align-items-center">
                                                                    <div class="bullet w-8px h-6px rounded-2 me-3" style="background-color: #E4E6EF"></div>
                                                                    <div class="fs-6 fw-bold text-gray-400 flex-shrink-0">Others</div>
                                                                    <div class="separator separator-dashed min-w-10px flex-grow-1 mx-2"></div>
                                                                    <div class="ms-auto fw-boldest text-gray-700 text-end">34%</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-6 mb-md-5 mb-xl-10">
                                                <div class="card overflow-hidden h-md-50 mb-5 mb-xl-10">
                                                    <div class="card-body d-flex justify-content-between flex-column px-0 pb-0">
                                                        <div class="mb-4 px-9">
                                                            <div class="d-flex align-items-center mb-2">
                                                                <span class="fs-2hx fw-bolder text-gray-800 me-2 lh-1">259,786</span>
                                                            </div>
                                                            <span class="fs-6 fw-bold text-gray-400">Total Shipments</span>
                                                        </div>
                                                        <div id="kt_card_widget_9_chart" class="min-h-auto" style="height: 125px"></div>
                                                    </div>
                                                </div>
                                                <div class="card card-flush h-md-50 mb-lg-10">
                                                    <div class="card-header pt-5">
                                                        <div class="card-title d-flex flex-column">
                                                            <span class="fs-2hx fw-bolder text-dark me-2 lh-1">604</span>
                                                            <span class="text-gray-400 pt-1 fw-bold fs-6">New Customers This Month</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-body d-flex flex-column justify-content-end pe-0">
                                                        <span class="fs-6 fw-boldest text-gray-800 d-block mb-2">Today’s Heroes</span>
                                                        <div class="symbol-group symbol-hover flex-nowrap">
                                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                                                                <span class="symbol-label bg-warning text-inverse-warning fw-bolder">A</span>
                                                            </div>
                                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
                                                                <img alt="Pic" src="{{ asset('media/avatars/300-11.jpg') }}" />
                                                            </div>
                                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
                                                                <span class="symbol-label bg-primary text-inverse-primary fw-bolder">S</span>
                                                            </div>
                                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                                                <img alt="Pic" src="{{ asset('media/avatars/300-2.jpg')}}" />
                                                            </div>
                                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
                                                                <span class="symbol-label bg-danger text-inverse-danger fw-bolder">P</span>
                                                            </div>
                                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
                                                                <img alt="Pic" src="{{ asset('media/avatars/300-12.jpg') }}" />
                                                            </div>
                                                            <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                                                                <span class="symbol-label bg-light text-gray-400 fs-8 fw-bolder">+42</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row gy-5 g-xl-8">
                                    <div class="col-xl-4">
                                        <div class="card card-xl-stretch">
                                            <!--begin::Header-->
                                            <div class="card-header border-0 bg-success py-5">
                                                <h3 class="card-title fw-bolder text-white"></h3>
                                                <div class="card-toolbar">
                                                    <!-- begin::Menu-->
                                                    <button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color- border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
                                                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Body-->
                                            <div class="card-body p-0">
                                                <!--begin::Chart-->
                                                <div class="mixed-widget-2-chart card-rounded-bottom bg-success" data-kt-color="success" style="height: 200px"></div>
                                                <!--end::Chart-->
                                                <!--begin::Stats-->
                                                <div class="card-p mt-n20 position-relative">
                                                    <!--begin::Row-->
                                                    <div class="row g-0">
                                                        <!--begin::Col-->
                                                        <div class="col bg-light-warning px-6 py-8 rounded-2 me-7 mb-7">
                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                                                            <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
                                                                    <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black" />
                                                                    <rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
                                                                    <rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                            <a href="#" class="text-warning fw-bold fs-6">Car Tickets</a>
                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        <div class="col bg-light-primary px-6 py-8 rounded-2 mb-7">
                                                            <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                                                            <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black" />
                                                                    <path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                            <a href="#" class="text-primary fw-bold fs-6">Taxables</a>
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    <!--end::Row-->
                                                    <!--begin::Row-->
                                                    <div class="row g-0">
                                                        <!--begin::Col-->
                                                        <div class="col bg-light-danger px-6 py-8 rounded-2 me-7">
                                                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                                            <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
                                                                    <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                            <a href="#" class="text-danger fw-bold fs-6 mt-2">Others</a>
                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        <div class="col bg-light-success px-6 py-8 rounded-2">
                                                            <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
                                                            <span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="black" />
                                                                    <path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="black" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                            <a href="#" class="text-success fw-bold fs-6 mt-2">Penalties</a>
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    <!--end::Row-->
                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Mixed Widget 2-->
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="card card-xl-stretch">
                                            <div class="card-header align-items-center border-0 mt-4">
                                                <h3 class="card-title align-items-start flex-column">
                                                    <span class="fw-bolder mb-2 text-dark">Activities Logs</span>
                                                    <!-- <span class="text-muted fw-bold fs-7">890,344 Sales</span> -->
                                                </h3>
                                                <!-- <div class="card-toolbar"> -->
                                                    
                                                    
                                                <!-- </div> -->
                                            </div>
                                            <div class="card-body pt-5">
                                                <div class="timeline-label">
                                                    <div class="timeline-item">
                                                        <div class="timeline-label fw-bolder text-gray-800 fs-6">08:42</div>
                                                        <div class="timeline-badge">
                                                            <i class="fa fa-genderless text-warning fs-1"></i>
                                                        </div>
                                                        <div class="fw-mormal timeline-content text-muted ps-3">Registered a new tax payer</div>
                                                    </div>
                                                    <div class="timeline-item">
                                                        <div class="timeline-label fw-bolder text-gray-800 fs-6">10:00</div>
                                                        <div class="timeline-badge">
                                                            <i class="fa fa-genderless text-success fs-1"></i>
                                                        </div>
                                                        <div class="timeline-content d-flex">
                                                            <span class="fw-bolder text-gray-800 ps-3">Assign a mobile device to a collector</span>
                                                        </div>
                                                    </div>
                                                    <div class="timeline-item">
                                                        <div class="timeline-label fw-bolder text-gray-800 fs-6">14:37</div>
                                                        <div class="timeline-badge">
                                                            <i class="fa fa-genderless text-danger fs-1"></i>
                                                        </div>
                                                        <div class="timeline-content fw-bolder text-gray-800 ps-3">Car ticket made issued</div>
                                                    </div>
                                                    <div class="timeline-item">
                                                        <div class="timeline-label fw-bolder text-gray-800 fs-6">16:50</div>
                                                        <div class="timeline-badge">
                                                            <i class="fa fa-genderless text-primary fs-1"></i>
                                                        </div>
                                                        <div class="timeline-content fw-mormal text-muted ps-3">Resolved a complained</div>
                                                    </div>
                                                    <div class="timeline-item">
                                                        <div class="timeline-label fw-bolder text-gray-800 fs-6">21:03</div>
                                                        <div class="timeline-badge">
                                                            <i class="fa fa-genderless text-danger fs-1"></i>
                                                        </div>
                                                        <div class="timeline-content fw-bold text-gray-800 ps-3">New order placed
                                                        <a href="#" class="text-primary">#XF-2356</a>.</div>
                                                    </div>
                                                    <div class="timeline-item">
                                                        <div class="timeline-label fw-bolder text-gray-800 fs-6">16:50</div>
                                                        <div class="timeline-badge">
                                                            <i class="fa fa-genderless text-primary fs-1"></i>
                                                        </div>
                                                        <div class="timeline-content fw-mormal text-muted ps-3">Indulging in poorly driving and keep structure keep great</div>
                                                    </div>
                                                    <div class="timeline-item">
                                                        <div class="timeline-label fw-bolder text-gray-800 fs-6">21:03</div>
                                                        <!--end::Label-->
                                                        <!--begin::Badge-->
                                                        <div class="timeline-badge">
                                                            <i class="fa fa-genderless text-danger fs-1"></i>
                                                        </div>
                                                        <!--end::Badge-->
                                                        <!--begin::Desc-->
                                                        <div class="timeline-content fw-bold text-gray-800 ps-3">Mobile api set up
                                                        <a href="#" class="text-primary">#XF-2356</a>.</div>
                                                        <!--end::Desc-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="timeline-item">
                                                        <!--begin::Label-->
                                                        <div class="timeline-label fw-bolder text-gray-800 fs-6">10:30</div>
                                                        <!--end::Label-->
                                                        <!--begin::Badge-->
                                                        <div class="timeline-badge">
                                                            <i class="fa fa-genderless text-success fs-1"></i>
                                                        </div>
                                                        <!--end::Badge-->
                                                        <!--begin::Text-->
                                                        <div class="timeline-content fw-mormal text-muted ps-3">Finance KPI Mobile app launch preparion meeting</div>
                                                        <!--end::Text-->
                                                    </div>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Timeline-->
                                            </div>
                                            <!--end: Card Body-->
                                        </div>
                                        <!--end: List Widget 5-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-xl-4">
                                        <!--begin::Mixed Widget 7-->
                                        <div class="card card-xl-stretch-50 mb-5 mb-xl-8">
                                            <!--begin::Body-->
                                            <div class="card-body d-flex flex-column p-0">
                                                <!--begin::Stats-->
                                                <div class="flex-grow-1 card-p pb-0">
                                                    <div class="d-flex flex-stack flex-wrap">
                                                        <div class="me-2">
                                                            <a href="#" class="text-dark text-hover-primary fw-bolder fs-3">Generate Reports</a>
                                                            <div class="text-muted fs-7 fw-bold">Finance and accounting reports</div>
                                                        </div>
                                                        <div class="fw-bolder fs-3 text-primary">24,500 CFA</div>
                                                    </div>
                                                </div>
                                                <!--end::Stats-->
                                                <!--begin::Chart-->
                                                <div class="mixed-widget-7-chart card-rounded-bottom" data-kt-chart-color="success" style="height: 150px"></div>
                                                <!--end::Chart-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Mixed Widget 7-->
                                        <!--begin::Mixed Widget 10-->
                                        <div class="card card-xl-stretch-50 mb-5 mb-xl-8">
                                            <!--begin::Body-->
                                            <div class="card-body p-0 d-flex justify-content-between flex-column overflow-hidden">
                                                <!--begin::Hidden-->
                                                <div class="d-flex flex-stack flex-wrap flex-grow-1 px-9 pt-9 pb-3">
                                                    <div class="me-2">
                                                        <span class="fw-bolder text-gray-800 d-block fs-3">Revenue</span>
                                                        <span class="text-gray-400 fw-bold">Oct 08 - Oct 08 22</span>
                                                    </div>
                                                    <div class="fw-bolder fs-3 text-primary">CFA 15,300</div>
                                                </div>
                                                <!--end::Hidden-->
                                                <!--begin::Chart-->
                                                <div class="mixed-widget-10-chart" data-kt-color="primary" style="height: 175px"></div>
                                                <!--end::Chart-->
                                            </div>
                                        </div>
                                        <!--end::Mixed Widget 10-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <div class="row gy-5 g-xl-8">
                                    <div class="col-xl-4">
                                        <div class="card card-xl-stretch mb-xl-8">
                                            <div class="card-header border-0">
                                                <h3 class="card-title fw-bolder text-dark">Recent Payments</h3>
                                                <div class="card-toolbar">                                              
                                                    
                                                </div>
                                            </div>
                                            <div class="card-body pt-2">
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-8">
                                                    <span class="bullet bullet-vertical h-40px bg-success"></span>
                                                    <div class="form-check form-check-custom form-check-solid mx-5">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">Create FireStone Logo</a>
                                                        <span class="text-muted fw-bold d-block">Due in 2 Days</span>
                                                    </div>
                                                    <span class="badge badge-light-success fs-8 fw-bolder">New</span>
                                                </div>
                                                <div class="d-flex align-items-center mb-8">
                                                    <span class="bullet bullet-vertical h-40px bg-primary"></span>
                                                    <div class="form-check form-check-custom form-check-solid mx-5">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">Stakeholder Meeting</a>
                                                        <span class="text-muted fw-bold d-block">Due in 3 Days</span>
                                                    </div>
                                                    <span class="badge badge-light-primary fs-8 fw-bolder">New</span>
                                                </div>
                                                <div class="d-flex align-items-center mb-8">
                                                    <span class="bullet bullet-vertical h-40px bg-warning"></span>
                                                    <div class="form-check form-check-custom form-check-solid mx-5">
                                                        <!-- <input class="form-check-input" type="checkbox" value="" /> -->
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">Scoping &amp; Estimations</a>
                                                        <span class="text-muted fw-bold d-block">Due in 5 Days</span>
                                                    </div>
                                                    <span class="badge badge-light-warning fs-8 fw-bolder">New</span>
                                                </div>
                                                <div class="d-flex align-items-center mb-8">
                                                    <span class="bullet bullet-vertical h-40px bg-primary"></span>
                                                    <div class="form-check form-check-custom form-check-solid mx-5">
                                                        <!-- <input class="form-check-input" type="checkbox" value="" /> -->
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">KPI App Showcase</a>
                                                        <span class="text-muted fw-bold d-block">Due in 2 Days</span>
                                                    </div>
                                                    <span class="badge badge-light-primary fs-8 fw-bolder">New</span>
                                                </div>
                                                <div class="d-flex align-items-center mb-8">
                                                    <!--begin::Bullet-->
                                                    <span class="bullet bullet-vertical h-40px bg-danger"></span>
                                                    <div class="form-check form-check-custom form-check-solid mx-5">
                                                        <!-- <input class="form-check-input" type="checkbox" value="" /> -->
                                                    </div>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Description-->
                                                    <div class="flex-grow-1">
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">Project Meeting</a>
                                                        <span class="text-muted fw-bold d-block">Due in 12 Days</span>
                                                    </div>
                                                    <!--end::Description-->
                                                    <span class="badge badge-light-danger fs-8 fw-bolder">New</span>
                                                </div>
                                                <!--end:Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Bullet-->
                                                    <span class="bullet bullet-vertical h-40px bg-success"></span>
                                                    <!--end::Bullet-->
                                                    <!--begin::Checkbox-->
                                                    <div class="form-check form-check-custom form-check-solid mx-5">
                                                        <!-- <input class="form-check-input" type="checkbox" value="" /> -->
                                                    </div>
                                                    <!--end::Checkbox-->
                                                    <!--begin::Description-->
                                                    <div class="flex-grow-1">
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">Customers Update</a>
                                                        <span class="text-muted fw-bold d-block">Due in 1 week</span>
                                                    </div>
                                                    <!--end::Description-->
                                                    <span class="badge badge-light-success fs-8 fw-bolder">New</span>
                                                </div>
                                                <!--end:Item-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end:List Widget 3-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-xl-8">
                                        <div class="card card-xl-stretch mb-5 mb-xl-8">
                                            <div class="card-header border-0 pt-5">
                                                <h3 class="card-title align-items-start flex-column">
                                                    <span class="card-label fw-bolder fs-3 mb-1">Invoices</span>
                                                    <span class="text-muted mt-1 fw-bold fs-7">Recents Invoices</span>
                                                </h3>
                                                <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to add a new Invoice">
                                                    <a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                                                    <span class="svg-icon svg-icon-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                                            <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="black" />
                                                        </svg>
                                                    </span>
                                                    New Invoice</a>
                                                </div>
                                            </div>
                                            <div class="card-body py-3">
                                                <div class="table-responsive">
                                                    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                                                        <thead>
                                                            <tr class="fw-bolder text-muted">
                                                                <th class="w-25px">
                                                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                                    </div>
                                                                </th>
                                                                <th class="min-w-150px">Invoice</th>
                                                                <th class="min-w-140px">Payer</th>
                                                                <th class="min-w-120px">Status</th>
                                                                <th class="min-w-100px text-end">Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="d-flex justify-content-start flex-column">
                                                                            <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">STORE RENT</a>
                                                                            <span class="text-muted fw-bold text-muted d-block fs-7">20230002</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">MOHAMMED ALHASSAN</a>
                                                                    <!-- <span class="text-muted fw-bold text-muted d-block fs-7">Web, UI/UX Design</span> -->
                                                                </td>
                                                                <td class="text-end">
                                                                    <div class="d-flex flex-column w-100 me-2">
                                                                        <div class="d-flex flex-stack mb-2">
                                                                            <span class="text-primary me-2 fs-7 fw-bold">Generated</span>
                                                                        </div>
                                                                        <!-- <div class="progress h-6px w-100">
                                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                        </div> -->
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex justify-content-end flex-shrink-0">
                                                                        <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                            <span class="svg-icon svg-icon-3">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                    <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black" />
                                                                                    <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black" />
                                                                                </svg>
                                                                            </span>
                                                                        </a>
                                                                        <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                            <span class="svg-icon svg-icon-3">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                    <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                                                                    <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                                                                                </svg>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="d-flex justify-content-start flex-column">
                                                                            <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">FILLING STATION</a>
                                                                            <span class="text-muted fw-bold text-muted d-block fs-7">202301001</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">FRANCIS NKANSAH</a>
                                                                </td>
                                                                <td class="text-end">
                                                                    <div class="d-flex flex-column w-100 me-2">
                                                                        <div class="d-flex flex-stack mb-2">
                                                                            <span class="text-primary me-2 fs-7 fw-bold">GENERATED</span>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex justify-content-end flex-shrink-0">
                                                                        <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                                                            <span class="svg-icon svg-icon-3">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                    <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black" />
                                                                                    <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black" />
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->
                                                                        </a>
                                                                        <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                                            <span class="svg-icon svg-icon-3">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                    <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                                                                    <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="d-flex justify-content-start flex-column">
                                                                            <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">SIGNBOARD</a>
                                                                            <span class="text-muted fw-bold text-muted d-block fs-7">20231121</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <a href="#" class="text-dark fw-bolder text-hover-primary d-block fs-6">ALHASSAN MOHAMMED</a>
                                                                    <!-- <span class="text-muted fw-bold text-muted d-block fs-7">Art Director</span> -->
                                                                </td>
                                                                <td class="text-end">
                                                                    <div class="d-flex flex-column w-100 me-2">
                                                                        <div class="d-flex flex-stack mb-2">
                                                                            <span class="text-primary me-2 fs-7 fw-bold">GENERATED</span>
                                                                        </div>
                                                                        <!-- <div class="progress h-6px w-100">
                                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                                        </div> -->
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex justify-content-end flex-shrink-0">
                                                                        <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                            <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                                                            <span class="svg-icon svg-icon-3">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                    <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black" />
                                                                                    <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black" />
                                                                                </svg>
                                                                            </span>
                                                                            <!--end::Svg Icon-->
                                                                        </a>
                                                                        <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                                            <span class="svg-icon svg-icon-3">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                    <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                                                                    <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                                                                                </svg>
                                                                            </span>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        <!--end::Table body-->
                                                    </table>
                                                    <!--end::Table-->
                                                </div>
                                                <!--end::Table container-->
                                            </div>
                                            <!--begin::Body-->
                                        </div>
                                        <!--end::Tables Widget 9-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <div class="row gy-5 g-xl-8">
                                    <div class="col-xl-4">
                                        <div class="card card-xl-stretch mb-xl-8">
                                            <div class="card-header border-0">
                                                <h3 class="card-title fw-bolder text-dark">Collectors</h3>
                                                <div class="card-toolbar">
                                                    
                                                </div>
                                            </div>
                                            <div class="card-body pt-2">
                                                <div class="d-flex align-items-center mb-7">
                                                    <div class="symbol symbol-50px me-5">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Emma Smith</a>
                                                        <span class="text-muted d-block fw-bold">Collector 1</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center mb-7">
                                                    <div class="symbol symbol-50px me-5">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Sean Bean</a>
                                                        <span class="text-muted d-block fw-bold">Collector 2</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center mb-7">
                                                    <div class="symbol symbol-50px me-5">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Brian Cox</a>
                                                        <span class="text-muted d-block fw-bold">Collector 3</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center mb-7">
                                                    <div class="symbol symbol-50px me-5">
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Francis Mitcham</a>
                                                        <span class="text-muted d-block fw-bold">Collector</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="symbol symbol-50px me-5">
                                                        
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <a href="#" class="text-dark fw-bolder text-hover-primary fs-6">Dan Wilson</a>
                                                        <span class="text-muted d-block fw-bold">PHP, SQLite, Artisan CLI</span>
                                                    </div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::List Widget 2-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-xl-4">
                                        <!--begin::List Widget 6-->
                                        <div class="card card-xl-stretch mb-xl-8">
                                            <!--begin::Header-->
                                            <div class="card-header border-0">
                                                <h3 class="card-title fw-bolder text-dark">Notifications</h3>
                                                <div class="card-toolbar">
                                                    
                                                </div>
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Body-->
                                            <div class="card-body pt-0">
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center bg-light-warning rounded p-5 mb-7">
                                                    <!--begin::Icon-->
                                                    <span class="svg-icon svg-icon-warning me-5">
                                                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                                        <span class="svg-icon svg-icon-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
                                                                <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <!--end::Icon-->
                                                    <!--begin::Title-->
                                                    <div class="flex-grow-1 me-2">
                                                        <a href="#" class="fw-bolder text-gray-800 text-hover-primary fs-6">Group lunch celebration</a>
                                                        <span class="text-muted fw-bold d-block">Due in 2 Days</span>
                                                    </div>
                                                    <!--end::Title-->
                                                    <!--begin::Lable-->
                                                    <span class="fw-bolder text-warning py-1">+28%</span>
                                                    <!--end::Lable-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center bg-light-success rounded p-5 mb-7">
                                                    <!--begin::Icon-->
                                                    <span class="svg-icon svg-icon-success me-5">
                                                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                                        <span class="svg-icon svg-icon-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
                                                                <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <!--end::Icon-->
                                                    <!--begin::Title-->
                                                    <div class="flex-grow-1 me-2">
                                                        <a href="#" class="fw-bolder text-gray-800 text-hover-primary fs-6">Navigation optimization</a>
                                                        <span class="text-muted fw-bold d-block">Due in 2 Days</span>
                                                    </div>
                                                    <!--end::Title-->
                                                    <!--begin::Lable-->
                                                    <span class="fw-bolder text-success py-1">+50%</span>
                                                    <!--end::Lable-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center bg-light-danger rounded p-5 mb-7">
                                                    <!--begin::Icon-->
                                                    <span class="svg-icon svg-icon-danger me-5">
                                                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                                        <span class="svg-icon svg-icon-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
                                                                <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <!--end::Icon-->
                                                    <!--begin::Title-->
                                                    <div class="flex-grow-1 me-2">
                                                        <a href="#" class="fw-bolder text-gray-800 text-hover-primary fs-6">Rebrand strategy planning</a>
                                                        <span class="text-muted fw-bold d-block">Due in 5 Days</span>
                                                    </div>
                                                    <!--end::Title-->
                                                    <!--begin::Lable-->
                                                    <span class="fw-bolder text-danger py-1">-27%</span>
                                                    <!--end::Lable-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center bg-light-info rounded p-5">
                                                    <!--begin::Icon-->
                                                    <span class="svg-icon svg-icon-info me-5">
                                                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                                        <span class="svg-icon svg-icon-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
                                                                <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <!--end::Icon-->
                                                    <!--begin::Title-->
                                                    <div class="flex-grow-1 me-2">
                                                        <a href="#" class="fw-bolder text-gray-800 text-hover-primary fs-6">Product goals strategy</a>
                                                        <span class="text-muted fw-bold d-block">Due in 7 Days</span>
                                                    </div>
                                                    <!--end::Title-->
                                                    <!--begin::Lable-->
                                                    <span class="fw-bolder text-info py-1">+8%</span>
                                                    <!--end::Lable-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::List Widget 6-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-xl-4">
                                        <!--begin::List Widget 4-->
                                        <div class="card card-xl-stretch mb-5 mb-xl-8">
                                            <!--begin::Header-->
                                            <div class="card-header border-0 pt-5">
                                                <h3 class="card-title align-items-start flex-column">
                                                    <span class="card-label fw-bolder text-dark">Trends</span>
                                                    <span class="text-muted mt-1 fw-bold fs-7">Latest tech trends</span>
                                                </h3>
                                                <div class="card-toolbar">
                                                    
                                                    
                                                </div>
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Body-->
                                            <div class="card-body pt-5">
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-sm-center mb-7">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-50px me-5">
                                                        <span class="symbol-label">
                                                            <img src="{{ asset('media/svg/brand-logos/plurk.svg') }}" class="h-50 align-self-center" alt="" />
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <div class="flex-grow-1 me-2">
                                                            <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Top Authors</a>
                                                            <span class="text-muted fw-bold d-block fs-7">Mark, Rowling, Esther</span>
                                                        </div>
                                                        <span class="badge badge-light fw-bolder my-2">+82$</span>
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-sm-center mb-7">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-50px me-5">
                                                        <span class="symbol-label">
                                                            <img src="{{ asset('media/svg/brand-logos/telegram.svg') }}" class="h-50 align-self-center" alt="" />
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <div class="flex-grow-1 me-2">
                                                            <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Popular Authors</a>
                                                            <span class="text-muted fw-bold d-block fs-7">Randy, Steve, Mike</span>
                                                        </div>
                                                        <span class="badge badge-light fw-bolder my-2">+280$</span>
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-sm-center mb-7">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-50px me-5">
                                                        <span class="symbol-label">
                                                            <img src="{{ asset('media/svg/brand-logos/vimeo.svg') }}" class="h-50 align-self-center" alt="" />
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <div class="flex-grow-1 me-2">
                                                            <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">New Users</a>
                                                            <span class="text-muted fw-bold d-block fs-7">John, Pat, Jimmy</span>
                                                        </div>
                                                        <span class="badge badge-light fw-bolder my-2">+4500$</span>
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-sm-center mb-7">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-50px me-5">
                                                        <span class="symbol-label">
                                                            <img src="{{ asset('media/svg/brand-logos/bebo.svg') }}" class="h-50 align-self-center" alt="" />
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <div class="flex-grow-1 me-2">
                                                            <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Active Customers</a>
                                                            <span class="text-muted fw-bold d-block fs-7">Mark, Rowling, Esther</span>
                                                        </div>
                                                        <span class="badge badge-light fw-bolder my-2">+686$</span>
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-sm-center mb-7">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-50px me-5">
                                                        <span class="symbol-label">
                                                            <img src="{{ asset('media/svg/brand-logos/kickstarter.svg') }}" class="h-50 align-self-center" alt="" />
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                        <div class="flex-grow-1 me-2">
                                                            <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Bestseller Theme</a>
                                                            <span class="text-muted fw-bold d-block fs-7">Disco, Retro, Sports</span>
                                                        </div>
                                                        <span class="badge badge-light fw-bolder my-2">+726$</span>
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::List Widget 4-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row g-5 g-xl-8">
                                    <!--begin::Col-->
                                    <div class="col-xl-4">
                                        <!--begin::Mixed Widget 5-->
                                        <div class="card card-xxl-stretch mb-xl-8">
                                            <!--begin::Beader-->
                                            <div class="card-header border-0 py-5">
                                                <h3 class="card-title align-items-start flex-column">
                                                    <span class="card-label fw-bolder fs-3 mb-1">Trends</span>
                                                    <span class="text-muted fw-bold fs-7">Latest trends</span>
                                                </h3>
                                                <div class="card-toolbar">
                                                    
                                                </div>
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Body-->
                                            <div class="card-body d-flex flex-column">
                                                <!--begin::Chart-->
                                                <div class="mixed-widget-5-chart card-rounded-top" data-kt-chart-color="success" style="height: 150px"></div>
                                                <!--end::Chart-->
                                                <!--begin::Items-->
                                                <div class="mt-5">
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack mb-5">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-50px me-3">
                                                                <div class="symbol-label bg-light">
                                                                    <img src="{{ asset('media/svg/brand-logos/plurk.svg') }}" class="h-50" alt="" />
                                                                </div>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Title-->
                                                            <div>
                                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Top Authors</a>
                                                                <div class="fs-7 text-muted fw-bold mt-1">Ricky Hunt, Sandra Trepp</div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::Label-->
                                                        <div class="badge badge-light fw-bold py-4 px-3">+82$</div>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack mb-5">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-50px me-3">
                                                                <div class="symbol-label bg-light">
                                                                    <img src="{{ asset('media/svg/brand-logos/figma-1.svg')}}" class="h-50" alt="" />
                                                                </div>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Title-->
                                                            <div>
                                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Top Sales</a>
                                                                <div class="fs-7 text-muted fw-bold mt-1">PitStop Emails</div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::Label-->
                                                        <div class="badge badge-light fw-bold py-4 px-3">+82$</div>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-50px me-3">
                                                                <div class="symbol-label bg-light">
                                                                    <img src="{{ asset('media/svg/brand-logos/vimeo.svg') }}" class="h-50" alt="" />
                                                                </div>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Title-->
                                                            <div class="py-1">
                                                                <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Top Engagement</a>
                                                                <div class="fs-7 text-muted fw-bold mt-1">KT.com</div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->
                                                        <!--begin::Label-->
                                                        <div class="badge badge-light fw-bold py-4 px-3">+82$</div>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Items-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Mixed Widget 5-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-xl-8">
                                        <!--begin::Tables Widget 5-->
                                        <div class="card card-xxl-stretch mb-5 mb-xl-8">
                                            <!--begin::Header-->
                                            <div class="card-header border-0 pt-5">
                                                <h3 class="card-title align-items-start flex-column">
                                                    <span class="card-label fw-bolder fs-3 mb-1">Latest Products</span>
                                                    <span class="text-muted mt-1 fw-bold fs-7">More than 400 new products</span>
                                                </h3>
                                                <div class="card-toolbar">
                                                    <ul class="nav">
                                                        <li class="nav-item">
                                                            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bolder px-4 me-1 active" data-bs-toggle="tab" href="#kt_table_widget_5_tab_1">Month</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bolder px-4 me-1" data-bs-toggle="tab" href="#kt_table_widget_5_tab_2">Week</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-secondary fw-bolder px-4" data-bs-toggle="tab" href="#kt_table_widget_5_tab_3">Day</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Body-->
                                            <div class="card-body py-3">
                                                <div class="tab-content">
                                                    <!--begin::Tap pane-->
                                                    <div class="tab-pane fade show active" id="kt_table_widget_5_tab_1">
                                                        <!--begin::Table container-->
                                                        <div class="table-responsive">
                                                            <!--begin::Table-->
                                                            <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                                                <!--begin::Table head-->
                                                                <thead>
                                                                    <tr class="border-0">
                                                                        <th class="p-0 w-50px"></th>
                                                                        <th class="p-0 min-w-150px"></th>
                                                                        <th class="p-0 min-w-140px"></th>
                                                                        <th class="p-0 min-w-110px"></th>
                                                                        <th class="p-0 min-w-50px"></th>
                                                                    </tr>
                                                                </thead>
                                                                <!--end::Table head-->
                                                                <!--begin::Table body-->
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="symbol symbol-45px me-2">
                                                                                <span class="symbol-label">
                                                                                    <img src="{{ asset('media/svg/brand-logos/plurk.svg') }}" class="h-50 align-self-center" alt="" />
                                                                                </span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad Simmons</a>
                                                                            <span class="text-muted fw-bold d-block">Movie Creator</span>
                                                                        </td>
                                                                        <td class="text-end text-muted fw-bold">React, HTML</td>
                                                                        <td class="text-end">
                                                                            <span class="badge badge-light-success">Approved</span>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                                <span class="svg-icon svg-icon-2">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
                                                                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
                                                                                    </svg>
                                                                                </span>
                                                                                <!--end::Svg Icon-->
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="symbol symbol-45px me-2">
                                                                                <span class="symbol-label">
                                                                                    <img src="{{ asset('media/svg/brand-logos/telegram.svg') }}" class="h-50 align-self-center" alt="" />
                                                                                </span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular Authors</a>
                                                                            <span class="text-muted fw-bold d-block">Most Successful</span>
                                                                        </td>
                                                                        <td class="text-end text-muted fw-bold">Python, MySQL</td>
                                                                        <td class="text-end">
                                                                            <span class="badge badge-light-warning">In Progress</span>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                                <span class="svg-icon svg-icon-2">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
                                                                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
                                                                                    </svg>
                                                                                </span>
                                                                                <!--end::Svg Icon-->
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="symbol symbol-45px me-2">
                                                                                <span class="symbol-label">
                                                                                    <img src="{{ asset('media/svg/brand-logos/vimeo.svg') }}" class="h-50 align-self-center" alt="" />
                                                                                </span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">New Users</a>
                                                                            <span class="text-muted fw-bold d-block">Awesome Users</span>
                                                                        </td>
                                                                        <td class="text-end text-muted fw-bold">Laravel,Metronic</td>
                                                                        <td class="text-end">
                                                                            <span class="badge badge-light-primary">Success</span>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                                <span class="svg-icon svg-icon-2">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
                                                                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
                                                                                    </svg>
                                                                                </span>
                                                                                <!--end::Svg Icon-->
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="symbol symbol-45px me-2">
                                                                                <span class="symbol-label">
                                                                                    <img src="{{ asset('media/svg/brand-logos/bebo.svg') }}" class="h-50 align-self-center" alt="" />
                                                                                </span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active Customers</a>
                                                                            <span class="text-muted fw-bold d-block">Movie Creator</span>
                                                                        </td>
                                                                        <td class="text-end text-muted fw-bold">AngularJS, C#</td>
                                                                        <td class="text-end">
                                                                            <span class="badge badge-light-danger">Rejected</span>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                                <span class="svg-icon svg-icon-2">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
                                                                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
                                                                                    </svg>
                                                                                </span>
                                                                                <!--end::Svg Icon-->
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="symbol symbol-45px me-2">
                                                                                <span class="symbol-label">
                                                                                    <img src="{{ asset('media/svg/brand-logos/kickstarter.svg') }}" class="h-50 align-self-center" alt="" />
                                                                                </span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Bestseller Theme</a>
                                                                            <span class="text-muted fw-bold d-block">Best Customers</span>
                                                                        </td>
                                                                        <td class="text-end text-muted fw-bold">ReactJS, Ruby</td>
                                                                        <td class="text-end">
                                                                            <span class="badge badge-light-warning">In Progress</span>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                                <span class="svg-icon svg-icon-2">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
                                                                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
                                                                                    </svg>
                                                                                </span>
                                                                                <!--end::Svg Icon-->
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                                <!--end::Table body-->
                                                            </table>
                                                        </div>
                                                        <!--end::Table-->
                                                    </div>
                                                    <!--end::Tap pane-->
                                                    <!--begin::Tap pane-->
                                                    <div class="tab-pane fade" id="kt_table_widget_5_tab_2">
                                                        <!--begin::Table container-->
                                                        <div class="table-responsive">
                                                            <!--begin::Table-->
                                                            <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                                                <!--begin::Table head-->
                                                                <thead>
                                                                    <tr class="border-0">
                                                                        <th class="p-0 w-50px"></th>
                                                                        <th class="p-0 min-w-150px"></th>
                                                                        <th class="p-0 min-w-140px"></th>
                                                                        <th class="p-0 min-w-110px"></th>
                                                                        <th class="p-0 min-w-50px"></th>
                                                                    </tr>
                                                                </thead>
                                                                <!--end::Table head-->
                                                                <!--begin::Table body-->
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="symbol symbol-45px me-2">
                                                                                <span class="symbol-label">
                                                                                    <img src="{{ asset('media/svg/brand-logos/plurk.svg') }}" class="h-50 align-self-center" alt="" />
                                                                                </span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad Simmons</a>
                                                                            <span class="text-muted fw-bold d-block">Movie Creator</span>
                                                                        </td>
                                                                        <td class="text-end text-muted fw-bold">React, HTML</td>
                                                                        <td class="text-end">
                                                                            <span class="badge badge-light-success">Approved</span>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                                <span class="svg-icon svg-icon-2">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
                                                                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
                                                                                    </svg>
                                                                                </span>
                                                                                <!--end::Svg Icon-->
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="symbol symbol-45px me-2">
                                                                                <span class="symbol-label">
                                                                                    <img src="{{ asset('media/svg/brand-logos/telegram.svg') }}" class="h-50 align-self-center" alt="" />
                                                                                </span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular Authors</a>
                                                                            <span class="text-muted fw-bold d-block">Most Successful</span>
                                                                        </td>
                                                                        <td class="text-end text-muted fw-bold">Python, MySQL</td>
                                                                        <td class="text-end">
                                                                            <span class="badge badge-light-warning">In Progress</span>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                                <span class="svg-icon svg-icon-2">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
                                                                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
                                                                                    </svg>
                                                                                </span>
                                                                                <!--end::Svg Icon-->
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="symbol symbol-45px me-2">
                                                                                <span class="symbol-label">
                                                                                    <img src="{{ asset('media/svg/brand-logos/bebo.svg') }}" class="h-50 align-self-center" alt="" />
                                                                                </span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active Customers</a>
                                                                            <span class="text-muted fw-bold d-block">Movie Creator</span>
                                                                        </td>
                                                                        <td class="text-end text-muted fw-bold">AngularJS, C#</td>
                                                                        <td class="text-end">
                                                                            <span class="badge badge-light-danger">Rejected</span>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                                <span class="svg-icon svg-icon-2">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
                                                                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
                                                                                    </svg>
                                                                                </span>
                                                                                <!--end::Svg Icon-->
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                                <!--end::Table body-->
                                                            </table>
                                                        </div>
                                                        <!--end::Table-->
                                                    </div>
                                                    <!--end::Tap pane-->
                                                    <!--begin::Tap pane-->
                                                    <div class="tab-pane fade" id="kt_table_widget_5_tab_3">
                                                        <!--begin::Table container-->
                                                        <div class="table-responsive">
                                                            <!--begin::Table-->
                                                            <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                                                <!--begin::Table head-->
                                                                <thead>
                                                                    <tr class="border-0">
                                                                        <th class="p-0 w-50px"></th>
                                                                        <th class="p-0 min-w-150px"></th>
                                                                        <th class="p-0 min-w-140px"></th>
                                                                        <th class="p-0 min-w-110px"></th>
                                                                        <th class="p-0 min-w-50px"></th>
                                                                    </tr>
                                                                </thead>
                                                                <!--end::Table head-->
                                                                <!--begin::Table body-->
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="symbol symbol-45px me-2">
                                                                                <span class="symbol-label">
                                                                                    <img src="{{ asset('media/svg/brand-logos/kickstarter.svg') }}" class="h-50 align-self-center" alt="" />
                                                                                </span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Bestseller Theme</a>
                                                                            <span class="text-muted fw-bold d-block">Best Customers</span>
                                                                        </td>
                                                                        <td class="text-end text-muted fw-bold">ReactJS, Ruby</td>
                                                                        <td class="text-end">
                                                                            <span class="badge badge-light-warning">In Progress</span>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                                <span class="svg-icon svg-icon-2">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
                                                                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
                                                                                    </svg>
                                                                                </span>
                                                                                <!--end::Svg Icon-->
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="symbol symbol-45px me-2">
                                                                                <span class="symbol-label">
                                                                                    <img src="{{ asset('media/svg/brand-logos/bebo.svg') }}" class="h-50 align-self-center" alt="" />
                                                                                </span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active Customers</a>
                                                                            <span class="text-muted fw-bold d-block">Movie Creator</span>
                                                                        </td>
                                                                        <td class="text-end text-muted fw-bold">AngularJS, C#</td>
                                                                        <td class="text-end">
                                                                            <span class="badge badge-light-danger">Rejected</span>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                                <span class="svg-icon svg-icon-2">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
                                                                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
                                                                                    </svg>
                                                                                </span>
                                                                                <!--end::Svg Icon-->
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="symbol symbol-45px me-2">
                                                                                <span class="symbol-label">
                                                                                    <img src="{{ asset('media/svg/brand-logos/vimeo.svg') }}" class="h-50 align-self-center" alt="" />
                                                                                </span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">New Users</a>
                                                                            <span class="text-muted fw-bold d-block">Awesome Users</span>
                                                                        </td>
                                                                        <td class="text-end text-muted fw-bold">Laravel,Metronic</td>
                                                                        <td class="text-end">
                                                                            <span class="badge badge-light-primary">Success</span>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                                <span class="svg-icon svg-icon-2">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
                                                                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
                                                                                    </svg>
                                                                                </span>
                                                                                <!--end::Svg Icon-->
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="symbol symbol-45px me-2">
                                                                                <span class="symbol-label">
                                                                                    <img src="{{ asset('media/svg/brand-logos/telegram.svg') }}" class="h-50 align-self-center" alt="" />
                                                                                </span>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular Authors</a>
                                                                            <span class="text-muted fw-bold d-block">Most Successful</span>
                                                                        </td>
                                                                        <td class="text-end text-muted fw-bold">Python, MySQL</td>
                                                                        <td class="text-end">
                                                                            <span class="badge badge-light-warning">In Progress</span>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                                                <span class="svg-icon svg-icon-2">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                        <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
                                                                                        <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
                                                                                    </svg>
                                                                                </span>
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bolder text-dark">My Calendar</span>
                                            <span class="text-muted mt-1 fw-bold fs-7">Preview monthly events</span>
                                        </h3>
                                        <div class="card-toolbar">
                                            <a href="../../demo1/dist/apps/calendar.html" class="btn btn-primary">Manage Calendar</a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="kt_calendar_widget_1"></div>
                                    </div>
                                </div> -->
                                <div class="modal fade" id="kt_modal_add_event" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered mw-650px">
                                        <div class="modal-content">
                                            <form class="form" action="#" id="kt_modal_add_event_form">
                                                <div class="modal-header">
                                                    <h2 class="fw-bolder" data-kt-calendar="title">Add Event</h2>
                                                    <div class="btn btn-icon btn-sm btn-active-icon-primary" id="kt_modal_add_event_close">
                                                        <span class="svg-icon svg-icon-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="modal-body py-10 px-lg-17">
                                                    <div class="fv-row mb-9">
                                                        <label class="fs-6 fw-bold required mb-2">Event Name</label>
                                                        <input type="text" class="form-control form-control-solid" placeholder="" name="calendar_event_name" />
                                                    </div>
                                                    <div class="fv-row mb-9">
                                                        <label class="fs-6 fw-bold mb-2">Event Description</label>
                                                        <input type="text" class="form-control form-control-solid" placeholder="" name="calendar_event_description" />
                                                    </div>
                                                    <div class="fv-row mb-9">
                                                        <label class="fs-6 fw-bold mb-2">Event Location</label>
                                                        <input type="text" class="form-control form-control-solid" placeholder="" name="calendar_event_location" />
                                                    </div>
                                                    <div class="fv-row mb-9">
                                                        <label class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox" value="" id="kt_calendar_datepicker_allday" />
                                                            <span class="form-check-label fw-bold" for="kt_calendar_datepicker_allday">All Day</span>
                                                        </label>
                                                    </div>
                                                    <div class="row row-cols-lg-2 g-10">
                                                        <div class="col">
                                                            <div class="fv-row mb-9">
                                                                <label class="fs-6 fw-bold mb-2 required">Event Start Date</label>
                                                                <input class="form-control form-control-solid" name="calendar_event_start_date" placeholder="Pick a start date" id="kt_calendar_datepicker_start_date" />
                                                            </div>
                                                        </div>
                                                        <div class="col" data-kt-calendar="datepicker">
                                                            <div class="fv-row mb-9">
                                                                <label class="fs-6 fw-bold mb-2">Event Start Time</label>
                                                                <input class="form-control form-control-solid" name="calendar_event_start_time" placeholder="Pick a start time" id="kt_calendar_datepicker_start_time" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row row-cols-lg-2 g-10">
                                                        <div class="col">
                                                            <div class="fv-row mb-9">
                                                                <label class="fs-6 fw-bold mb-2 required">Event End Date</label>
                                                                <input class="form-control form-control-solid" name="calendar_event_end_date" placeholder="Pick a end date" id="kt_calendar_datepicker_end_date" />
                                                            </div>
                                                        </div>
                                                        <div class="col" data-kt-calendar="datepicker">
                                                            <div class="fv-row mb-9">
                                                                <label class="fs-6 fw-bold mb-2">Event End Time</label>
                                                                <input class="form-control form-control-solid" name="calendar_event_end_time" placeholder="Pick a end time" id="kt_calendar_datepicker_end_time" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer flex-center">
                                                    <button type="reset" id="kt_modal_add_event_cancel" class="btn btn-light me-3">Cancel</button>
                                                    <button type="button" id="kt_modal_add_event_submit" class="btn btn-primary">
                                                        <span class="indicator-label">Submit</span>
                                                        <span class="indicator-progress">Please wait...
                                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="kt_modal_view_event" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered mw-650px">
                                        <div class="modal-content">
                                            <div class="modal-header border-0 justify-content-end">
                                                <div class="btn btn-icon btn-sm btn-color-gray-400 btn-active-icon-primary me-2" data-bs-toggle="tooltip" data-bs-dismiss="click" title="Edit Event" id="kt_modal_view_event_edit">
                                                    <span class="svg-icon svg-icon-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="black" />
                                                            <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="black" />
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="btn btn-icon btn-sm btn-color-gray-400 btn-active-icon-danger me-2" data-bs-toggle="tooltip" data-bs-dismiss="click" title="Delete Event" id="kt_modal_view_event_delete">
                                                    <span class="svg-icon svg-icon-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black" />
                                                            <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black" />
                                                            <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Edit-->
                                                <!--begin::Close-->
                                                <div class="btn btn-icon btn-sm btn-color-gray-500 btn-active-icon-primary" data-bs-toggle="tooltip" title="Hide Event" data-bs-dismiss="modal">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                    <span class="svg-icon svg-icon-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Close-->
                                            </div>
                                            <!--end::Modal header-->
                                            <!--begin::Modal body-->
                                            <div class="modal-body pt-0 pb-20 px-lg-17">
                                                <!--begin::Row-->
                                                <div class="d-flex">
                                                    <!--begin::Icon-->
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                                    <span class="svg-icon svg-icon-1 svg-icon-muted me-5">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="black" />
                                                            <path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="black" />
                                                            <path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="black" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                    <!--end::Icon-->
                                                    <div class="mb-9">
                                                        <!--begin::Event name-->
                                                        <div class="d-flex align-items-center mb-2">
                                                            <span class="fs-3 fw-bolder me-3" data-kt-calendar="event_name"></span>
                                                            <span class="badge badge-light-success" data-kt-calendar="all_day"></span>
                                                        </div>
                                                        <!--end::Event name-->
                                                        <!--begin::Event description-->
                                                        <div class="fs-6" data-kt-calendar="event_description"></div>
                                                        <!--end::Event description-->
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center mb-2">
                                                    <span class="svg-icon svg-icon-1 svg-icon-success me-5">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <circle fill="#000000" cx="12" cy="12" r="8" />
                                                        </svg>
                                                    </span>
                                                    <div class="fs-6">
                                                        <span class="fw-bolder">Starts</span>
                                                        <span data-kt-calendar="event_start_date"></span>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center mb-9">
                                                    <span class="svg-icon svg-icon-1 svg-icon-danger me-5">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <circle fill="#000000" cx="12" cy="12" r="8" />
                                                        </svg>
                                                    </span>
                                                    <div class="fs-6">
                                                        <span class="fw-bolder">Ends</span>
                                                        <span data-kt-calendar="event_end_date"></span>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Icon-->
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                    <span class="svg-icon svg-icon-1 svg-icon-muted me-5">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="black" />
                                                            <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="black" />
                                                        </svg>
                                                    </span>
                                                    <div class="fs-6" data-kt-calendar="event_location"></div>
                                                    <!--end::Event location-->
                                                </div>
                                                <!--end::Row-->
                                            </div>
                                            <!--end::Modal body-->
                                        </div>
                                    </div>
                                </div>
                                <!--end::Modal - New Product-->
                                <!--end::Modals-->
                            </div>
                        </div>
                    </div>
                    <!--begin::Footer-->
                     @include('inc.footercontent')
                    <!--end::Footer-->
                </div>
            </div>
        </div>
        <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
            <span class="svg-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
                    <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
                </svg>
            </span>
        </div>
        <script src="{{ asset('plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('js/scripts.bundle.js') }}"></script>
        <script src="{{ asset('plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
        <script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}"></script>
        <script src="{{ asset('js/widgets.bundle.js') }}"></script>
        <script src="{{ asset('js/custom/widgets.js') }}"></script>
        <script src="{{ asset('js/custom/apps/chat/chat.js') }}"></script>
        <script src="{{ asset('js/custom/utilities/modals/upgrade-plan.js') }}"></script>
        <script src="{{ asset('js/custom/utilities/modals/create-app.js') }}"></script>
        <script src="{{ asset('js/custom/utilities/modals/users-search.js') }}"></script>
        <script type="text/javascript">
            var cTime = moment().format('LLLL');
            // console.log(cTime);
             document.getElementById('formattedTime').innerText = cTime;
        </script>
    </body>
    <!--end::Body-->
</html>