@extends('layouts.ad')

@section('content')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<h4>Details de la prescriptions</h4>
                    @if ($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif
					
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                   
                                    <!--Tab slider End-->
                                    <div class="col-xl-12 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                        <div class="product-detail-content">
                                            <!--Product details-->
                                            <div class="new-arrival-content pr">
                                            
                                               
												<div class="d-table mb-2">
                                                <h4><p class="price float-left d-block">{{$prescription->titre}}</h4>
                                                </div>
												<p>Envoyé le: <span class="item">{{$prescription->created_at}} <i class="fa fa-shopping-basket"></i></span></p>
                                                <p>Par: <span class="item">{{$user->name}} {{$user->lastname}}</span> </p>
                                                
                                                <p>Pathologie traité:&nbsp;&nbsp;
                                                    <span class="badge badge-success light">{{$pathologie->name}}</span>
                                                    
                                                </p>
                                                <p class="text-content">{{$prescription->descr}}.</p>
                                               
                                                
                                                <!--Quantity start-->
												
                                                <!--Quanatity End-->
                                                <div class="widget mb-4 pb-2">
                            <h4 class="widget-title">Information</h4>
                            <ul class="list-unstyled mt-4 mb-0 catagories">
                                <li><a href="jvascript:void(0)">     <i class="fas fa-bacterium"></i> Pathologie</a> <span class="float-right">{{$pathologie->name}}</span></li>
                                <li><a href="jvascript:void(0)">  <i class="fas fa-capsules"></i> Médicament/DCI</a> <span class="float-right">{{$medicament->DCI}}</span></li>
                                <li><a href="jvascript:void(0)">  <i class="fas fa-capsules"></i> Médicament/nom commercial</a> <span class="float-right">{{$medicament->nom_commercial}}</span></li>
                                   <li><a href="jvascript:void(0)"><i class="fas fa-search"></i> Indication</a> <span class="float-right">{{$indication->name}}</span></li>
                                  <li><a href="jvascript:void(0)"><i class="fas fa-tablets"></i>  Forme galénique<span class="float-right">{{$medicament->forme_gal}}</span></li>
                                <li><a href="jvascript:void(0)"><i class="fas fa-mortar-pestle"></i> Dose</a> <span class="float-right">{{$prescription->quantite}} {{$prescription->unite}}</span></li>
                                <li><a href="jvascript:void(0)"><i class="fas fa-clock"></i> Durée</a> <span class="float-right">{{$prescription->dure}}</span></li>
                              <li><a href="jvascript:void(0)"><i class="fas fa-glass-whiskey"></i> Voie d'administration</a> <span class="float-right">{{$medicament->voie_admin}}</span></li>
                              <li><a href="jvascript:void(0)"><i class="fas fa-book-medical"></i> Mode d'administration</a> <span class="float-right">{{$medicament->mode_admin}}</span></li>
                             
                             
                            </ul>
                        </div>
                                              
                                                <div >
                                                @if($prescription->valide==0)
                                                    <a href="{{ url('/admin/active_presc/'.$prescription->id) }}" class="btn btn-primary btn-lg" href="javascript:void(0)">Valider
                                                       </a>
                                                       <a href="{{ url('/admin/modifier_pres/'.$prescription->id) }}" class="btn btn-warning btn-lg">Mettre à jour  
                                                       </a>
                                                       <a href="{{ url('/admin/supprimer/'.$prescription->id) }}" class="btn btn-danger btn-lg" href="javascript:void(0)"  >Retirer  
                                                       </a>
                                                       
                                                       @endif
                                                </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<!-- review -->
					<div class="modal fade" id="reviewModal">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Review</h5>
									<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form>
										<div class="text-center mb-4">
											<img class="img-fluid rounded" width="78" src="./images/avatar/1.jpg" alt="DexignZone">
										</div>
										<div class="form-group">
											<div class="rating-widget mb-4 text-center">
												<!-- Rating Stars Box -->
												<div class="rating-stars">
													<ul id="stars">
														<li class="star" title="Poor" data-value="1">
															<i class="fa fa-star fa-fw"></i>
														</li>
														<li class="star" title="Fair" data-value="2">
															<i class="fa fa-star fa-fw"></i>
														</li>
														<li class="star" title="Good" data-value="3">
															<i class="fa fa-star fa-fw"></i>
														</li>
														<li class="star" title="Excellent" data-value="4">
															<i class="fa fa-star fa-fw"></i>
														</li>
														<li class="star" title="WOW!!!" data-value="5">
															<i class="fa fa-star fa-fw"></i>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="form-group">
											<textarea class="form-control" placeholder="Comment" rows="5"></textarea>
										</div>
										<button class="btn btn-success btn-block">RATE</button>
									</form>
								</div>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
       
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

        
    </div>

    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
	<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="./js/custom.min.js"></script>
	<script src="./js/deznav-init.js"></script>
	
    
    <script src="./vendor/highlightjs/highlight.pack.min.js"></script>
    <!-- Circle progress -->

	<!-- Rating -->
	<script src="./vendor/star-rating/jquery.star-rating-svg.js"></script>

@endsection