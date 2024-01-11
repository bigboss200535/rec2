		<div class="modal fade" id="kt_modal_create_account" tabindex="-1" aria-hidden="true">
			<div class="modal-dialog mw-1000px">
				<div class="modal-content">
					<div class="modal-header">
						<h2>Create Tax Payer Account</h2>
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
							<span class="svg-icon svg-icon-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
								</svg>
							</span>
						</div>
					</div>
					<div class="modal-body scroll-y m-5">
						<div class="stepper stepper-links d-flex flex-column" id="kt_create_account_stepper">
							<div class="stepper-nav py-5">
								<div class="stepper-item current" data-kt-stepper-element="nav">
									<h3 class="stepper-title">New Account</h3>
								</div>
								<div class="stepper-item" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Bio Info</h3>
								</div>
								<div class="stepper-item" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Geographical Location</h3>
								</div>
								<div class="stepper-item" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Completed</h3>
								</div>
							</div>
							<form class="mx-auto mw-600px w-100 py-10" novalidate="novalidate" id="kt_create_account_form">
								<div class="current" data-kt-stepper-element="content">
									<div class="w-100">
										<div class="pb-10 pb-lg-15" align="center">
										</div>
										<div class="fv-row" align="center">
											<div class="row" align="center">
												<div class="col-lg-12" align="center">
													<input type="radio" class="btn-check" name="account_type" value="personal" checked="checked" id="kt_create_account_form_account_type_personal" />
													<label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center mb-10" for="kt_create_account_form_account_type_personal">
														<span class="d-block fw-bold text-start">
															<span class="text-dark fw-bolder d-block fs-4 mb-2">
															Personal Tax Payer
															</span>
															<span class="text-muted fw-bold fs-6">
																This Account forms allows you to set up an account for a Tax Payer
															</span>
														</span>
													</label>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div data-kt-stepper-element="content">
									<div class="w-100">
										<div class="pb">
											<!-- <h2 class="fw-bolder text-dark">Bio Info</h2> -->
											<div class="text-muted fw-bold fs-12">All field marked (<a href="#" style="color:red">*</a>) is mandatory.
											</div> 
										</div>
										<br>
										<div class="row mb-12">
											<div class="col-md-6 fv-row">
												<label class="required fs-6 fw-bold form-label mb-2">Surname 
												</label>
												<div class="row fv-row">
													<div class="position-relative">
														<input type="text" class="form-control form-control-solid" minlength="3" maxlength="50" placeholder="Surname" name="surname" />
													</div>
												</div>
											</div>
											<div class="col-md-6 fv-row">
												<label class="required fs-6 fw-bold form-label mb-2">Othername </label>
												<div class="position-relative">
													<input type="text" class="form-control form-control-solid" minlength="3" maxlength="50" placeholder="Othername" name="othername" />
												</div>
											</div>
										</div>
										<div class="row mb-12">
											<div class="col-md-6 fv-row">
												<!--begin::Label-->
												<label class="required fs-6 fw-bold form-label mb-2">Gender </label>
												<div class="row fv-row">
													<div class="position-relative">
														<select class="form-control form-control-solid" name="gender" id="gender">
															<option disabled selected>-Select-</option>
															<option>FEMME</option>
															<option>HOMME</option>
														</select>
														<!-- <input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" /> -->
													</div>
													
												</div>
											</div>
											<div class="col-md-6 fv-row">
												<label class="required fs-6 fw-bold form-label mb-2">National Id </label>
												<div class="position-relative">
													<input type="text" class="form-control form-control-solid" minlength="3" maxlength="50" placeholder="Telephone" name="national_id" id="national_id"/>
												</div>
											</div>
										</div>
										<div class="row mb-10">
											<div class="col-md-6 fv-row">
												<!--begin::Label-->
												<label class="required fs-6 fw-bold form-label mb-2">Email </label>
												<div class="row fv-row">
													<div class="position-relative">
														<input type="text" class="form-control form-control-solid" minlength="3" maxlength="50" placeholder="Email" name="email" id="email" />
													</div>
												</div>
											</div>
											<div class="col-md-6 fv-row">
												<label class="required fs-6 fw-bold form-label mb-2">File Number</label>
												<div class="position-relative">
													<input type="text" class="form-control form-control-solid" minlength="3" maxlength="50" placeholder="File Number" name="file_number" id="file_number" />
												</div>
											</div>
										</div>
										<div class="row mb-10">
											<div class="col-md-6 fv-row">
												<!--begin::Label-->
												<label class="required fs-6 fw-bold form-label mb-2">Voter's Id </label>
												<div class="row fv-row">
													<div class="position-relative">
															<input type="text" class="form-control form-control-solid" minlength="3" maxlength="50" placeholder="File Number" name="voter_id"  id="voter_id"/>
													</div>
												</div>
											</div>
											<div class="col-md-6 fv-row">
												<label class="required fs-6 fw-bold form-label mb-2">Telephone</label>
												<div class="position-relative">
													<input type="text" class="form-control form-control-solid" minlength="3" maxlength="50" placeholder="Telephone" name="telephone_1" id="telephone_1" />
												</div>
											</div>
										</div>
										<div class="row mb-10">
											<div class="col-md-6 fv-row">
												<!--begin::Label-->
												<label class="required fs-6 fw-bold form-label mb-2">Telephone 2 </label>
												<div class="row fv-row">
													<div class="position-relative">
														<input type="text" class="form-control form-control-solid" minlength="3" maxlength="50"  name="telephone_2" id="telephone_2" />
													</div>
												</div>
											</div>
											<div class="col-md-6 fv-row">
												<label class="required fs-6 fw-bold form-label mb-2">Telephone 3</label>
												<div class="position-relative">
													<input type="text" class="form-control form-control-solid" minlength="3" maxlength="50"  name="telephone_3" id="telephone_3" />
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end::Step 2-->
								<!--begin::Step 3-->
								<div data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-10 pb-lg-12">
											<!--begin::Title-->
											<!-- <h2 class="fw-bolder text-dark">Geographical Location</h2> -->
											<div class="text-muted fw-bold fs-6">Add geographical information of Tax payer
											</div>
										</div>
										<div class="d-flex flex-column mb-7 fv-row">
											<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
												<span class="required">Geolocation</span>
												<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify Geolocation of the Tax payer"></i>
											</label>
											<input type="text" class="form-control form-control-solid" placeholder="" name="geolocation" id="geolocation" maxlength="50" />
										</div>
										<div class="row mb-10">
											<div class="col-md-6 fv-row">
												<!--begin::Label-->
												<label class="required fs-6 fw-bold form-label mb-2">Latitude</label>
												<div class="row fv-row">
													<div class="position-relative">
														<input type="text" class="form-control form-control-solid" minlength="3" maxlength="50" placeholder="" name="latitude" id="latitude" />
													</div>
												</div>
											</div>
											<div class="col-md-6 fv-row">
												<label class="required fs-6 fw-bold form-label mb-2">Longitude</label>
												<div class="position-relative">
													<input type="text" class="form-control form-control-solid" minlength="3" maxlength="50" placeholder="" name="longitude" id="longitute" />
												</div>
											</div>
										</div>
										<div class="row mb-10">
											<div class="col-md-6 fv-row">
												<!--begin::Label-->
												<label class="required fs-6 fw-bold form-label mb-2">Precision</label>
												<div class="row fv-row">
													<div class="position-relative">
														<input type="text" class="form-control form-control-solid" minlength="3" maxlength="50" placeholder="" name="precision" id="precision" />
													</div>
												</div>
											</div>
											<div class="col-md-6 fv-row">
												<label class="required fs-6 fw-bold form-label mb-2">Altitute</label>
												<div class="position-relative">
													<input type="text" class="form-control form-control-solid" minlength="3" maxlength="50" placeholder="Altitute" name="altitude" id="altitude" />
												</div>
											</div>
										</div>
										<div class="d-flex flex-column mb-7 fv-row">
											<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
												<span class="required">Address</span>
												<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify the address of the tax payer"></i>
											</label>
											<input type="text" class="form-control form-control-solid" placeholder="" name="address" id="address" />
										</div>
										<div class="row mb-10">
											<div class="col-md-6 fv-row">
												<!--begin::Label-->
												<label class="required fs-6 fw-bold form-label mb-2">Village</label>
												<div class="row fv-row">
													<div class="position-relative">
														<input type="text" class="form-control form-control-solid" minlength="3" maxlength="100" placeholder="" name="village" id="village" />
													</div>
												</div>
											</div>
											<div class="col-md-6 fv-row">
												<label class="required fs-6 fw-bold form-label mb-2">City</label>
												<div class="position-relative">
													<input type="text" class="form-control form-control-solid" minlength="3" maxlength="100" placeholder="" name="city" id="city" />
												</div>
											</div>
										</div>
										<div class="d-flex flex-column mb-7 fv-row">
											<label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
												<span class="required">Neighborhood</span>
												<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify the address of the tax payer"></i>
											</label>
											<input type="text" class="form-control form-control-solid" placeholder="" name="neighborhood" id="neighborhood" />
										</div>
										<div class="row mb-10">
											<div class="col-md-6 fv-row">
												<label class="required fs-6 fw-bold form-label mb-2">Municipal</label>
												<div class="row fv-row">
													<div class="position-relative">
														<select name="business_type" class="form-select form-select-lg form-select-solid" placeholder="Select..." name="municipal" id="municipal">
															<option disabled selected>-Select -</option>
															<option value="1">Municipal One</option>
															<option value="1">Corporation</option>
															<option value="2">Proprietorship</option>
															<option value="3">rofit</option>
															<option value="4">Limited Liability</option>
															<option value="5">General Partnership</option>
														</select>
													</div>
												</div>
											</div>
											<div class="col-md-6 fv-row">
												<label class="required fs-6 fw-bold form-label mb-2">Zone</label>
												<div class="position-relative">
													<select name="business_type" class="form-select form-select-lg form-select-solid"  placeholder="Select..." name="zone_name" id="zone_name">
														<option disabled selected>-Select -</option>
														<option value="1">Zone 1</option>
														<option value="1">Zone 2</option>
														<option value="2">Zone 3</option>
														<option value="3">Zone 4</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div data-kt-stepper-element="content">
									<div class="w-100">
										<div class="pb-8 pb-lg-10">
											<h2 class="fw-bolder text-dark" align="center">Sucess!</h2>
											<div class="text-muted fw-bold fs-6" align="center">If you need more info, please
											</div>
										</div>
										<div class="mb-0">
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
														<h4 class="text-gray-900 fw-bolder">102515415511</h4>
														<div class="fs-6 text-gray-700">Kindly take note
														<a href="#" class="fw-bolder">of the account number</a></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="d-flex flex-stack pt-15">
									<div class="mr-2">
										<button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
										<span class="svg-icon svg-icon-4 me-1">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="black" />
												<path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="black" />
											</svg>
										</span>
										Back</button>
									</div>
									<div>
										<button type="button" class="btn btn-lg btn-primary me-3" data-kt-stepper-action="submit">
											<span class="indicator-label">Submit
											<span class="svg-icon svg-icon-3 ms-2 me-0">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
													<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
												</svg>
											</span>
											</span>
											<span class="indicator-progress">Please wait...
											<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										</button>
										<button type="button" class="btn btn-lg btn-success" data-kt-stepper-action="next">Continue
										<span class="svg-icon svg-icon-4 ms-1 me-0">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
												<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
											</svg>
										</span>
									</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>