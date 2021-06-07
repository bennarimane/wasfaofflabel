@extends('layouts.ad')

@section('content')

<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="form-head d-flex align-items-center mb-sm-4 mb-3">
					<div class="mr-auto">
						<h2 class="text-black font-w600">Tableau de bord</h2>
						<p class="mb-0">Le tableau de bord de l'administrateur</p>
					</div>
					
				</div>
				<div class="row">
					<div class="col-xl-4 col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body mr-3"> <?php   $co =DB::table('prescriptions')->
                                 where('etat','=',1)->get();    ?>
										<h2 class="fs-34 text-black font-w600">{{$co->count()}}</h2>
										<span>Prescriptions valides</span>
									</div>
									<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0)">
										<path d="M32.04 4.08H31.24V2.04C31.24 0.8 30.4 0 29.2 0C28 0 27.16 0.8 27.16 2.04V4.08H13.88V2.04C13.88 0.8 13.08 0 11.84 0C10.6 0 9.80002 0.8 9.80002 2.04V4.08H7.96002C4.08002 4.08 0.800018 7.36 0.800018 11.24V32.88C0.800018 36.76 4.08002 40.04 7.96002 40.04H32.04C35.92 40.04 39.2 36.76 39.2 32.88V11.24C39.2 7.36 35.92 4.08 32.04 4.08ZM7.96002 8.16H32.04C33.68 8.16 35.12 9.6 35.12 11.24V14.08H4.88002V11.24C4.88002 9.6 6.32002 8.16 7.96002 8.16ZM32.04 35.92H7.96002C6.32002 35.92 4.88002 34.48 4.88002 32.84V18.16H35.08V32.84C35.12 34.48 33.68 35.92 32.04 35.92Z" fill="#007A64"/>
										<path d="M16.12 20.6H14.48C13.44 20.6 12.84 21.4 12.84 22.24V24.08C12.84 25.12 13.64 25.72 14.48 25.72H16.12C17.16 25.72 17.76 24.92 17.76 24.08V22.44C17.96 21.44 17.16 20.6 16.12 20.6Z" fill="#007A64"/>
										<path d="M25.52 20.6H23.88C22.84 20.6 22.24 21.4 22.24 22.24V24.08C22.24 25.12 23.04 25.72 23.88 25.72H25.52C26.56 25.72 27.16 24.92 27.16 24.08V22.44C27.16 21.44 26.32 20.6 25.52 20.6Z" fill="#007A64"/>
										<path d="M16.12 28.56H14.48C13.44 28.56 12.84 29.36 12.84 30.2V31.84C12.84 32.88 13.64 33.48 14.48 33.48H16.12C17.16 33.48 17.76 32.68 17.76 31.84V30.2C17.96 29.4 17.16 28.56 16.12 28.56Z" fill="#007A64"/>
										</g>
										<defs>
										<clipPath id="clip0">
										<rect width="40" height="40" fill="white"/>
										</clipPath>
										</defs>
									</svg>
								</div>
							</div>


							
							
							<div class="progress  rounded-0" style="height:4px;">
								<div class="progress-bar rounded-0 bg-secondary progress-animated" style="width: 50%; height:4px;" role="progressbar">
									<span class="sr-only">50% Complete</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4  col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body mr-3">
									<?php   $co =DB::table('users')->
                                 where('admin','=',0)->get();    ?>
										<h2 class="fs-34 text-black font-w600">{{$co->count()}}</h2>
										<span>Professionnels de santé </span>
									</div>
									<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M38.3334 16.6667C38.3384 15.7489 38.0907 14.8474 37.6174 14.061C37.1441 13.2746 36.4635 12.6337 35.6501 12.2084C34.8368 11.7832 33.9221 11.59 33.0062 11.6501C32.0904 11.7101 31.2087 12.0211 30.4579 12.5489C29.707 13.0768 29.116 13.8011 28.7494 14.6426C28.3829 15.484 28.2551 16.4101 28.3799 17.3194C28.5047 18.2287 28.8774 19.0861 29.4572 19.7976C30.0369 20.5092 30.8014 21.0474 31.6667 21.3534V26.6667C31.6667 28.8768 30.7887 30.9964 29.2259 32.5592C27.6631 34.122 25.5435 35 23.3334 35C21.1232 35 19.0036 34.122 17.4408 32.5592C15.878 30.9964 15 28.8768 15 26.6667V24.8667C17.7735 24.4643 20.3097 23.0778 22.1456 20.9604C23.9815 18.8429 24.9947 16.1359 25 13.3334V3.33335C25 2.89133 24.8244 2.4674 24.5119 2.15484C24.1993 1.84228 23.7754 1.66669 23.3334 1.66669H18.3334C17.8913 1.66669 17.4674 1.84228 17.1548 2.15484C16.8423 2.4674 16.6667 2.89133 16.6667 3.33335C16.6667 3.77538 16.8423 4.1993 17.1548 4.51186C17.4674 4.82443 17.8913 5.00002 18.3334 5.00002H21.6667V13.3334C21.6667 15.5435 20.7887 17.6631 19.2259 19.2259C17.6631 20.7887 15.5435 21.6667 13.3334 21.6667C11.1232 21.6667 9.0036 20.7887 7.4408 19.2259C5.87799 17.6631 5.00002 15.5435 5.00002 13.3334V5.00002H8.33335C8.77538 5.00002 9.1993 4.82443 9.51186 4.51186C9.82442 4.1993 10 3.77538 10 3.33335C10 2.89133 9.82442 2.4674 9.51186 2.15484C9.1993 1.84228 8.77538 1.66669 8.33335 1.66669H3.33335C2.89133 1.66669 2.4674 1.84228 2.15484 2.15484C1.84228 2.4674 1.66669 2.89133 1.66669 3.33335V13.3334C1.67205 16.1359 2.68517 18.8429 4.52109 20.9604C6.357 23.0778 8.89322 24.4643 11.6667 24.8667V26.6667C11.6667 29.7609 12.8959 32.7283 15.0838 34.9163C17.2717 37.1042 20.2392 38.3334 23.3334 38.3334C26.4275 38.3334 29.395 37.1042 31.5829 34.9163C33.7709 32.7283 35 29.7609 35 26.6667V21.3534C35.9723 21.0132 36.8152 20.3797 37.4122 19.5403C38.0093 18.7008 38.3311 17.6968 38.3334 16.6667Z" fill="#007A64"/>
									</svg>
								</div>
							</div>
							<div class="progress  rounded-0" style="height:4px;">
								<div class="progress-bar rounded-0 bg-secondary progress-animated" style="width: 90%; height:4px;" role="progressbar">
									<span class="sr-only">90% Complete</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4  col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body mr-3">
									<?php   $co =DB::table('prescriptions')->
                                 where('demande','=',1)->get();    ?>
										<h2 class="fs-34 text-black font-w600">{{$co->count()}}</h2>
										<span>Prescriptions en attente </span>
									</div>
									<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0)">
										<path d="M32.04 4.08H31.24V2.04C31.24 0.8 30.4 0 29.2 0C28 0 27.16 0.8 27.16 2.04V4.08H13.88V2.04C13.88 0.8 13.08 0 11.84 0C10.6 0 9.80002 0.8 9.80002 2.04V4.08H7.96002C4.08002 4.08 0.800018 7.36 0.800018 11.24V32.88C0.800018 36.76 4.08002 40.04 7.96002 40.04H32.04C35.92 40.04 39.2 36.76 39.2 32.88V11.24C39.2 7.36 35.92 4.08 32.04 4.08ZM7.96002 8.16H32.04C33.68 8.16 35.12 9.6 35.12 11.24V14.08H4.88002V11.24C4.88002 9.6 6.32002 8.16 7.96002 8.16ZM32.04 35.92H7.96002C6.32002 35.92 4.88002 34.48 4.88002 32.84V18.16H35.08V32.84C35.12 34.48 33.68 35.92 32.04 35.92Z" fill="#007A64"/>
										<path d="M16.12 20.6H14.48C13.44 20.6 12.84 21.4 12.84 22.24V24.08C12.84 25.12 13.64 25.72 14.48 25.72H16.12C17.16 25.72 17.76 24.92 17.76 24.08V22.44C17.96 21.44 17.16 20.6 16.12 20.6Z" fill="#007A64"/>
										<path d="M25.52 20.6H23.88C22.84 20.6 22.24 21.4 22.24 22.24V24.08C22.24 25.12 23.04 25.72 23.88 25.72H25.52C26.56 25.72 27.16 24.92 27.16 24.08V22.44C27.16 21.44 26.32 20.6 25.52 20.6Z" fill="#007A64"/>
										<path d="M16.12 28.56H14.48C13.44 28.56 12.84 29.36 12.84 30.2V31.84C12.84 32.88 13.64 33.48 14.48 33.48H16.12C17.16 33.48 17.76 32.68 17.76 31.84V30.2C17.96 29.4 17.16 28.56 16.12 28.56Z" fill="#007A64"/>
										</g>
										<defs>
										<clipPath id="clip0">
										<rect width="40" height="40" fill="white"/>
										</clipPath>
										</defs>
									</svg>
								</div>
							</div>
							<div class="progress  rounded-0" style="height:4px;">
								<div class="progress-bar rounded-0 bg-secondary progress-animated" style="width: 30%; height:4px;" role="progressbar">
									<span class="sr-only">30% Complete</span>
								</div>
							</div>
						</div>
					</div>
				
				</div>
				<div class="row">
					<div class="col-xl-6">
						<div class="row">
							<div class="col-xl-12">	
								<div class="card">
									<div class="card-header d-sm-flex d-block pb-0 border-0">
										<div class="mr-auto pr-3">
											<h4 class="text-black fs-20 mb-0">Patient Percentage</h4>
										</div>
										<div class="card-action card-tabs mt-3 mt-sm-0 mt-3 mb-sm-0 mb-3 mt-sm-0">
											<ul class="nav nav-tabs" role="tablist">
												<li class="nav-item">
													<a class="nav-link active" data-toggle="tab" href="#Daily" role="tab">
														Daily
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#Weekly" role="tab">
														Weekly
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#Monthly" role="tab">
														Monthly
													</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="card-body">
										<div class="tab-content">
											<div class="tab-pane fade show active" id="Daily" role="tabpanel">
												<div class="d-flex flex-wrap align-items-center px-4 bg-light">
													<div class="mr-auto d-flex align-items-center py-3">
														<span class="heart-ai bg-primary mr-3">
															<i class="fa fa-heart-o" aria-hidden="true"></i>
														</span>
														<div>
															<p class="fs-18 mb-2">Total Patient</p>
															<span class="fs-26 text-primary font-w600">562,084</span>
														</div>
													</div>
													<ul class="users pl-3 py-2">
														<li><img src="images/users/1.png" alt=""></li>
														<li><img src="images/users/2.png" alt=""></li>
														<li><img src="images/users/3.png" alt=""></li>
														<li><img src="images/users/4.png" alt=""></li>
														<li><img src="images/users/5.png" alt=""></li>
													</ul>
												</div>
												<div class="row align-items-center">
													<div class="col-xl-6 col-xxl-12 col-md-6">
														<div id="radialBar"></div>
													</div>
													<div class="col-xl-6 col-xxl-12 col-md-6">
														<div class="d-flex mb-4 align-items-center">
															<span class="mr-auto pr-3 font-w500 fs-30 text-black">
																<svg class="mr-3" width="8" height="30" viewBox="0 0 8 30" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="7.65957" height="30" fill="#BDA25C"/>
																</svg>
																64%
															</span>
															<span>New Patient</span>
														</div>
														<div class="d-flex  mb-4 align-items-center">
															<span class="mr-auto pr-3 font-w500 fs-30 text-black">
																<svg class="mr-3" width="8" height="30" viewBox="0 0 8 30" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="7.65957" height="30" fill="#209F84"/>
																</svg>
																73%
															</span>
															<span>Recovered</span>
														</div>
														<div class="d-flex align-items-center">
															<span class="mr-auto pr-3 font-w500 fs-30 text-black">
																<svg class="mr-3" width="8" height="30" viewBox="0 0 8 30" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="7.65957" height="30" fill="#323232"/>
																</svg>
																48%
															</span>
															<span>In Treatment</span>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="Weekly" role="tabpanel">
												<div class="d-flex flex-wrap align-items-center px-4  bg-light">
													<div class="mr-auto py-3 d-flex align-items-center">
														<span class="heart-ai bg-primary mr-3">
															<i class="fa fa-heart-o" aria-hidden="true"></i>
														</span>
														<div>
															<p class="fs-18 mb-2">Total Patient</p>
															<span class="fs-26 text-primary font-w600">786,360</span>
														</div>
													</div>
													<ul class="users pl-3 py-2">
														<li><img src="images/users/2.png" alt=""></li>
														<li><img src="images/users/4.png" alt=""></li>
														<li><img src="images/users/1.png" alt=""></li>
														<li><img src="images/users/4.png" alt=""></li>
														<li><img src="images/users/3.png" alt=""></li>
													</ul>
												</div>
												<div class="row align-items-center">
													<div class="col-xl-6 col-xxl-12 col-md-6">
														<div id="radialBar2"></div>
													</div>
													<div class="col-xl-6 col-xxl-12 col-md-6">
														<div class="d-flex mb-4 align-items-center">
															<span class="mr-auto pr-3 font-w500 fs-30 text-black">
																<svg class="mr-3" width="8" height="30" viewBox="0 0 8 30" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="7.65957" height="30" fill="#BDA25C"/>
																</svg>
																40%
															</span>
															<span>New Patient</span>
														</div>
														<div class="d-flex  mb-4 align-items-center">
															<span class="mr-auto pr-3 font-w500 fs-30 text-black">
																<svg class="mr-3" width="8" height="30" viewBox="0 0 8 30" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="7.65957" height="30" fill="#209F84"/>
																</svg>
																81%
															</span>
															<span>Recovered</span>
														</div>
														<div class="d-flex align-items-center">
															<span class="mr-auto pr-3 font-w500 fs-30 text-black">
																<svg class="mr-3" width="8" height="30" viewBox="0 0 8 30" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="7.65957" height="30" fill="#323232"/>
																</svg>
																50%
															</span>
															<span>In Treatment</span>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="Monthly" role="tabpanel">
												<div class="d-flex flex-wrap align-items-center px-4  bg-light">
													<div class="mr-auto py-3 d-flex align-items-center">
														<span class="heart-ai bg-primary mr-3">
															<i class="fa fa-heart-o" aria-hidden="true"></i>
														</span>
														<div>
															<p class="fs-18 mb-2">Total Patient</p>
															<span class="fs-26 text-primary font-w600">356,730</span>
														</div>
													</div>
													<ul class="users pl-3 py-2">
														<li><img src="images/users/2.png" alt=""></li>
														<li><img src="images/users/4.png" alt=""></li>
														<li><img src="images/users/1.png" alt=""></li>
														<li><img src="images/users/4.png" alt=""></li>
														<li><img src="images/users/3.png" alt=""></li>
													</ul>
												</div>
												<div class="row align-items-center">
													<div class="col-xl-6 col-xxl-12 col-md-6">
														<div id="radialBar3"></div>
													</div>
													<div class="col-xl-6 col-xxl-12 col-md-6">
														<div class="d-flex mb-4 align-items-center">
															<span class="mr-auto pr-3 font-w500 fs-30 text-black">
																<svg class="mr-3" width="8" height="30" viewBox="0 0 8 30" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="7.65957" height="30" fill="#BDA25C"/>
																</svg>
																90%
															</span>
															<span>New Patient</span>
														</div>
														<div class="d-flex  mb-4 align-items-center">
															<span class="mr-auto pr-3 font-w500 fs-30 text-black">
																<svg class="mr-3" width="8" height="30" viewBox="0 0 8 30" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="7.65957" height="30" fill="#209F84"/>
																</svg>
																75%
															</span>
															<span>Recovered</span>
														</div>
														<div class="d-flex align-items-center">
															<span class="mr-auto pr-3 font-w500 fs-30 text-black">
																<svg class="mr-3" width="8" height="30" viewBox="0 0 8 30" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect width="7.65957" height="30" fill="#323232"/>
																</svg>
																30%
															</span>
															<span>In Treatment</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-xxl-12 col-md-6">	
								<div class="card">
									<div class="card-header d-block border-0 pb-0">
										<div class="d-flex mb-3">
											<h3 class="fs-20 text-black mb-0">Patient Overview</h3>
											<div class="dropdown ml-auto">
												<div class="btn-link" data-toggle="dropdown">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M13.0001 12C13.0001 11.4477 12.5523 11 12.0001 11C11.4478 11 11.0001 11.4477 11.0001 12C11.0001 12.5523 11.4478 13 12.0001 13C12.5523 13 13.0001 12.5523 13.0001 12Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M6.00006 12C6.00006 11.4477 5.55235 11 5.00006 11C4.44778 11 4.00006 11.4477 4.00006 12C4.00006 12.5523 4.44778 13 5.00006 13C5.55235 13 6.00006 12.5523 6.00006 12Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
														<path d="M20.0001 12C20.0001 11.4477 19.5523 11 19.0001 11C18.4478 11 18.0001 11.4477 18.0001 12C18.0001 12.5523 18.4478 13 19.0001 13C19.5523 13 20.0001 12.5523 20.0001 12Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
													</svg>
												</div>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item text-black" href="javascript:;">Info</a>
													<a class="dropdown-item text-black" href="javascript:;">Details</a>
												</div>
											</div>
										</div>
										<div class="d-flex">
											<div class="d-flex mr-auto align-items-center">
												<svg width="12" height="54" viewBox="0 0 12 54" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect width="12" height="54" fill="#BDA25C"/>
												</svg>
												<div class="ml-2">
													<p class="mb-1">New</p>
													<span class="text-black font-w500">451</span>
												</div>
											</div>
											<div class="d-flex align-items-center">
												<svg width="12" height="54" viewBox="0 0 12 54" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect width="12" height="54" fill="#209F84"/>
												</svg>
												<div class="ml-2">
													<p class="mb-1">Recovered</p>
													<span class="text-black font-w500">623</span>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body p-0">
										<div id="chartTimeline"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-xxl-12 col-md-6">	
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h3 class="fs-20 text-black mb-0">Visitors</h3>
										<div class="dropdown ml-auto">
											<div class="btn-link" data-toggle="dropdown">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M13.0001 12C13.0001 11.4477 12.5523 11 12.0001 11C11.4478 11 11.0001 11.4477 11.0001 12C11.0001 12.5523 11.4478 13 12.0001 13C12.5523 13 13.0001 12.5523 13.0001 12Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
													<path d="M6.00006 12C6.00006 11.4477 5.55235 11 5.00006 11C4.44778 11 4.00006 11.4477 4.00006 12C4.00006 12.5523 4.44778 13 5.00006 13C5.55235 13 6.00006 12.5523 6.00006 12Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
													<path d="M20.0001 12C20.0001 11.4477 19.5523 11 19.0001 11C18.4478 11 18.0001 11.4477 18.0001 12C18.0001 12.5523 18.4478 13 19.0001 13C19.5523 13 20.0001 12.5523 20.0001 12Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
												</svg>
											</div>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item text-black" href="javascript:;">Info</a>
												<a class="dropdown-item text-black" href="javascript:;">Details</a>
											</div>
										</div>
									</div>
									<div class="card-body pb-0">
										<ul class="users-sm mb-3">
											<li><img src="images/users/6.png" alt=""></li>
											<li><img src="images/users/7.png" alt=""></li>
											<li><img src="images/users/8.png" alt=""></li>
											<li><img src="images/users/9.png" alt=""></li>
											<li><img src="images/users/10.png" alt=""></li>
										</ul>
										<div class="d-flex align-items-center">
											<svg class="mr-3" width="30" height="19" viewBox="0 0 30 19" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M28.8124 0.990788C29.6459 1.71558 29.734 2.97884 29.0092 3.81236L20.2578 13.8765C18.859 15.4851 16.4444 15.7141 14.7681 14.397L10.6176 11.1359L3.37074 17.9564C2.56639 18.7134 1.30064 18.6751 0.543606 17.8707C-0.213427 17.0664 -0.175071 15.8006 0.629276 15.0436L7.8761 8.22306C9.317 6.86692 11.5329 6.76809 13.0888 7.99059L17.2394 11.2517L25.9908 1.18764C26.7156 0.354128 27.9788 0.265993 28.8124 0.990788Z" fill="#007A64"/>
											</svg>
											<div>
												<p class="fs-12 mb-0">Customer</p>
												<span class="fs-22 text-black font-w600">765 Person</span>
											</div>
										</div>
										<div id="lineChart"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">	
								<div class="card rated-doctors">
									<div class="card-header border-0 pb-0">
										<h3 class="fs-20 text-black mb-0 mr-auto">Top Rated Doctors</h3>
										<a href="javascript:void(0)" class="btn-link">More >></a>
									</div>
									<div class="card-body">
										<div class="d-sm-flex pb-sm-4 pb-3 border-bottom mb-sm-4 mb-3 align-items-center">
											<div class="d-flex align-items-center mr-auto pr-2">
												<span class="num mr-sm-4 mr-3">#1</span>
												<img src="images/users/1.jpg" class="img-1 mr-sm-4 mr-3" alt="">
												<div>
													<h4 class="mb-sm-2 mb-1"><a href="doctor.html" class="text-black">Dr. Samantha Queque</a></h4>
													<span class="fs-14 text-primary font-w600">Gynecologist</span>
												</div>
											</div>
											<div class="text-sm-right mt-sm-0 mt-3 star-review">
												<ul>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
												</ul>
												<span class="fs-14 text-black">315 reviews</span>
											</div>
										</div>
										<div class="d-sm-flex pb-sm-4 pb-3 border-bottom mb-sm-4 mb-3 align-items-center">
											<div class="d-flex align-items-center mr-auto pr-2">
												<span class="num mr-sm-4 mr-3">#2</span>
												<img src="images/users/2.jpg" class="img-1 mr-sm-4 mr-3" alt="">
												<div>
													<h4 class="mb-sm-2 mb-1"><a href="doctor.html" class="text-black">Dr. Samuel Jr.</a></h4>
													<span class="fs-14 text-primary font-w600">Gynecologist</span>
												</div>
											</div>
											<div class="text-sm-right mt-sm-0 mt-3 star-review">
												<ul>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
												</ul>
												<span class="fs-14 text-black">221 reviews</span>
											</div>
										</div>
										<div class="d-sm-flex pb-sm-4 pb-3 border-bottom mb-sm-4 mb-3 align-items-center">
											<div class="d-flex align-items-center mr-auto pr-2">
												<span class="num mr-sm-4 mr-3">#3</span>
												<img src="images/users/3.jpg" class="img-1 mr-sm-4 mr-3" alt="">
												<div>
													<h4 class="mb-sm-2 mb-1"><a href="doctor.html" class="text-black">Dr. Jennifer Ruby</a></h4>
													<span class="fs-14 text-primary font-w600">Gynecologist</span>
												</div>
											</div>
											<div class="text-sm-right mt-sm-0 mt-3 star-review">
												<ul>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
												</ul>
												<span class="fs-14 text-black">181 reviews</span>
											</div>
										</div>
										<div class="d-sm-flex pb-sm-4 pb-3 border-bottom mb-sm-4 mb-3 align-items-center">
											<div class="d-flex align-items-center mr-auto pr-2">
												<span class="num mr-sm-4 mr-3">#4</span>
												<img src="images/users/4.jpg" class="img-1 mr-sm-4 mr-3" alt="">
												<div>
													<h4 class="mb-sm-2 mb-1"><a href="doctor.html" class="text-black">Dr. Abdul Aziz Lazis</a></h4>
													<span class="fs-14 text-primary font-w600">Gynecologist</span>
												</div>
											</div>
											<div class="text-sm-right mt-sm-0 mt-3 star-review">
												<ul>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
												</ul>
												<span class="fs-14 text-black">315 reviews</span>
											</div>
										</div>
										<div class="d-sm-flex pb-sm-4 pb-3 border-bottom mb-sm-4 mb-3 align-items-center">
											<div class="d-flex align-items-center mr-auto pr-2">
												<span class="num mr-sm-4 mr-3">#5</span>
												<img src="images/users/5.jpg" class="img-1 mr-sm-4 mr-3" alt="">
												<div>
													<h4 class="mb-sm-2 mb-1"><a href="doctor.html" class="text-black">Dr. Alex Siauw</a></h4>
													<span class="fs-14 text-primary font-w600">Gynecologist</span>
												</div>
											</div>
											<div class="text-sm-right mt-sm-0 mt-3 star-review">
												<ul>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
												</ul>
												<span class="fs-14 text-black">176 reviews</span>
											</div>
										</div>
										<div class="d-sm-flex pb-0 align-items-center">
											<div class="d-flex align-items-center mr-auto pr-2">
												<span class="num mr-sm-4 mr-3">#6</span>
												<img src="images/users/1.jpg" class="img-1 mr-sm-4 mr-3" alt="">
												<div>
													<h4 class="mb-sm-2 mb-1"><a href="doctor.html" class="text-black">Dr. Abdul Aziz Lazis</a></h4>
													<span class="fs-14 text-primary font-w600">Gynecologist</span>
												</div>
											</div>
											<div class="text-sm-right mt-sm-0 mt-3 star-review">
												<ul>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
													<li><i class="fa fa-star" aria-hidden="true"></i></li>
												</ul>
												<span class="fs-14 text-black">315 reviews</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="row">
							<div class="col-xl-12">	
								<div class="card appointment-schedule">
									<div class="card-header pb-0 border-0">
										<h3 class="fs-20 text-black mb-0">Appointment Schedule</h3>
										<div class="dropdown ml-auto">
											<div class="btn-link p-2 bg-light" data-toggle="dropdown">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
													<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
													<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
												</svg>
											</div>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item text-black" href="javascript:;">Info</a>
												<a class="dropdown-item text-black" href="javascript:;">Details</a>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-xl-6 col-xxl-12 col-md-6">
												<div class="appointment-calender">
													<input type='text' class="form-control d-none" id='datetimepicker1' />
												</div>
											</div>
											<div class="col-xl-6 col-xxl-12  col-md-6 height415 dz-scroll" id="appointment-schedule">
												<div class="d-flex pb-3 border-bottom mb-3 align-items-end">
													<div class="mr-auto">
														<p class="text-black font-w600 mb-2">Wednesday, June 3th</p>
														<ul>
															<li><i class="las la-clock"></i>09:00 - 10:30 AM</li>
															<li><i class="las la-user"></i>Dr. Samantha</li>
														</ul>
													</div>
													<a href="javascript:void(0)" class="text-success mr-3 mb-2">
														<i class="las la-check-circle scale5"></i>
													</a>
													<a href="javascript:void(0)" class="text-danger mb-2">
														<i class="las la-times-circle scale5"></i>
													</a>
												</div>
												<div class="d-flex pb-3 border-bottom mb-3 align-items-end">
													<div class="mr-auto">
														<p class="text-black font-w600 mb-2">Tuesday,  June 16th</p>
														<ul>
															<li><i class="las la-clock"></i>09:00 - 10:30 AM</li>
															<li><i class="las la-user"></i>Dr. Samantha</li>
														</ul>
													</div>
													<a href="javascript:void(0)" class="text-success mr-3 mb-2">
														<i class="las la-check-circle scale5"></i>
													</a>
													<a href="javascript:void(0)" class="text-danger mb-2">
														<i class="las la-times-circle scale5"></i>
													</a>
												</div>
												<div class="d-flex pb-3 border-bottom mb-3 align-items-end">
													<div class="mr-auto">
														<p class="text-black font-w600 mb-2">Saturday, June 27th</p>
														<ul>
															<li><i class="las la-clock"></i>09:00 - 10:30 AM</li>
															<li><i class="las la-user"></i>Dr. Samantha</li>
														</ul>
													</div>
													<a href="javascript:void(0)" class="text-success mr-3 mb-2">
														<i class="las la-check-circle scale5"></i>
													</a>
													<a href="javascript:void(0)" class="text-danger mb-2">
														<i class="las la-times-circle scale5"></i>
													</a>
												</div>
												<div class="d-flex pb-3 border-bottom mb-3 align-items-end">
													<div class="mr-auto">
														<p class="text-black font-w600 mb-2">Wednesday, June 3th</p>
														<ul>
															<li><i class="las la-clock"></i>09:00 - 10:30 AM</li>
															<li><i class="las la-user"></i>Dr. Samantha</li>
														</ul>
													</div>
													<a href="javascript:void(0)" class="text-success mr-3 mb-2">
														<i class="las la-check-circle scale5"></i>
													</a>
													<a href="javascript:void(0)" class="text-danger mb-2">
														<i class="las la-times-circle scale5"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">	
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h3 class="fs-20 text-black mb-0 mr-2">Revenue Summary</h3>
										<div class="dropdown mt-sm-0 mt-3">
											<button type="button" class="btn bg-light text-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
												2020
											</button>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="javascript:void(0);">2020</a>
												<a class="dropdown-item" href="javascript:void(0);">2021</a>
												<a class="dropdown-item" href="javascript:void(0);">2022</a>
											</div>
										</div>
									</div>
									<div class="card-body pt-0">
										<div id="chartBar"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">	
								<div class="card patient-activity">
									<div class="card-header border-0 pb-0">
										<h3 class="fs-20 text-black mb-0">Recent Patient Activity</h3>
										<div class="dropdown ml-auto">
											<div class="btn-link" data-toggle="dropdown">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M13.0001 12C13.0001 11.4477 12.5523 11 12.0001 11C11.4478 11 11.0001 11.4477 11.0001 12C11.0001 12.5523 11.4478 13 12.0001 13C12.5523 13 13.0001 12.5523 13.0001 12Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													<path d="M6.00006 12C6.00006 11.4477 5.55235 11 5.00006 11C4.44778 11 4.00006 11.4477 4.00006 12C4.00006 12.5523 4.44778 13 5.00006 13C5.55235 13 6.00006 12.5523 6.00006 12Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
													<path d="M20.0001 12C20.0001 11.4477 19.5523 11 19.0001 11C18.4478 11 18.0001 11.4477 18.0001 12C18.0001 12.5523 18.4478 13 19.0001 13C19.5523 13 20.0001 12.5523 20.0001 12Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
											</div>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item text-black" href="javascript:;">Info</a>
												<a class="dropdown-item text-black" href="javascript:;">Details</a>
											</div>
										</div>
									</div>
									<div class="card-body pb-0" >
										<div class="table-responsive height720 dz-scroll" id="patient-activity">
											<table class="table table-responsive-sm">
												<tbody>
													<tr>
														<td>
															<div class="d-flex">
																<img src="images/users/6.jpg" alt="" class="img-2 mr-3">
																<div>
																	<h6 class="fs-16 mb-1"><a href="patient.html" class="text-black">Roby Romeo</a></h6>
																	<span class="fs-14">41 Years Old</span>
																</div>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Disease</p>
																<span class="text-primary font-w600 mb-auto">Allergies & Asthma</span>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Status</p>
																<span class="text-primary font-w600 mb-2 d-block text-nowrap">Recovered</span>
																<p class="mb-0 fs-12">22/03/2020 12:34 AM</p>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex">
																<img src="images/users/7.jpg" alt="" class="img-2 mr-3">
																<div>
																	<h6 class="fs-16 mb-1"><a href="patient.html" class="text-black">Angela Nurhayati</a></h6>
																	<span class="fs-14">21 Years Old</span>
																</div>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Disease</p>
																<span class="text-primary font-w600 mb-auto">Sleep Problem</span>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Status</p>
																<span class="text-danger font-w600 mb-2 text-nowrap d-block">New Patient</span>
																<p class="mb-0 fs-12">22/03/2020 12:34 AM</p>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex">
																<img src="images/users/8.jpg" alt="" class="img-2 mr-3">
																<div>
																	<h6 class="fs-16 mb-1"><a href="patient.html" class="text-black">James Robinson</a></h6>
																	<span class="fs-14">41 Years Old</span>
																</div>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Disease</p>
																<span class="text-primary font-w600 mb-auto">Dental Care</span>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Status</p>
																<span class="text-warning font-w600 mb-2 text-nowrap d-block">In Treatment</span>
																<p class="mb-0 fs-12">22/03/2020 12:34 AM</p>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex">
																<img src="images/users/9.jpg" alt="" class="img-2 mr-3">
																<div>
																	<h6 class="fs-16 mb-1"><a href="patient.html" class="text-black">Thomas Jaja</a></h6>
																	<span class="fs-14">7 Years Old</span>
																</div>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Disease</p>
																<span class="text-primary font-w600 mb-auto">Diabetes</span>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Status</p>
																<span class="text-danger font-w600 mb-2 text-nowrap d-block">New Patient</span>
																<p class="mb-0 fs-12">22/03/2020 12:34 AM</p>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex">
																<img src="images/users/10.jpg" alt="" class="img-2 mr-3">
																<div>
																	<h6 class="fs-16 mb-1"><a href="patient.html" class="text-black">Cindy Brownleee</a></h6>
																	<span class="fs-14">71 Years Old</span>
																</div>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Disease</p>
																<span class="text-primary font-w600 mb-auto">Covid-19 Suspect</span>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Status</p>
																<span class="text-warning font-w600 text-nowrap mb-2 d-block">In Treatment</span>
																<p class="mb-0 fs-12">22/03/2020 12:34 AM</p>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex">
																<img src="images/users/11.jpg" alt="" class="img-2 mr-3">
																<div>
																	<h6 class="fs-16 mb-1"><a href="patient.html" class="text-black">Oconner Jr.</a></h6>
																	<span class="fs-14">17 Years Old</span>
																</div>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Disease</p>
																<span class="text-primary font-w600 mb-auto">Dental Care</span>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Status</p>
																<span class="text-primary font-w600 mb-2 text-nowrap d-block">Recovered</span>
																<p class="mb-0 fs-12">22/03/2020 12:34 AM</p>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex">
																<img src="images/users/7.jpg" alt="" class="img-2 mr-3">
																<div>
																	<h6 class="fs-16 mb-1"><a href="patient.html" class="text-black">Angela Nurhayati</a></h6>
																	<span class="fs-14">21 Years Old</span>
																</div>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Disease</p>
																<span class="text-primary font-w600 mb-auto">Sleep Problem</span>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Status</p>
																<span class="text-danger font-w600 mb-2 text-nowrap d-block">New Patient</span>
																<p class="mb-0 fs-12">22/03/2020 12:34 AM</p>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex">
																<img src="images/users/8.jpg" alt="" class="img-2 mr-3">
																<div>
																	<h6 class="fs-16 mb-1"><a href="patient.html" class="text-black">James Robinson</a></h6>
																	<span class="fs-14">41 Years Old</span>
																</div>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Disease</p>
																<span class="text-primary font-w600 mb-auto">Dental Care</span>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Status</p>
																<span class="text-warning font-w600 mb-2 d-block text-nowrap">In Treatment</span>
																<p class="mb-0 fs-12">22/03/2020 12:34 AM</p>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex">
																<img src="images/users/9.jpg" alt="" class="img-2 mr-3">
																<div>
																	<h6 class="fs-16 mb-1"><a href="patient.html" class="text-black">Thomas Jaja</a></h6>
																	<span class="fs-14">7 Years Old</span>
																</div>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Disease</p>
																<span class="text-primary font-w600 mb-auto">Diabetes</span>
															</div>
														</td>
														<td>
															<div>
																<p class="fs-14 mb-1">Status</p>
																<span class="text-danger font-w600 mb-2 d-block text-nowrap">New Patient</span>
																<p class="mb-0 fs-12">22/03/2020 12:34 AM</p>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="card-footer text-center border-0">
										<a href="patient.html" class="btn-link">See More >></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
    @endsection