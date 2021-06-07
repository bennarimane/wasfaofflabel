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
												<p>Envoyé le: <span class="item">{{$prescription->created_at}} </span></p>
                                                <p>Par: <span class="item">{{$user->name}} {{$user->lastname}} de {{$user->etablissement}}</span> </p>
                                                
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
                                <li><a href="jvascript:void(0)">       <i class="fas fa-child"></i></i> Age</a> <span class="float-right">{{$prescription->age}}</span></li>
                                <li><a href="jvascript:void(0)">     <i class="fas fa-weight"></i> Poids</a> <span class="float-right">{{$prescription->poids}}</span></li>
                                <li><a href="jvascript:void(0)">  <i class="fas fa-capsules"></i> Médicament/DCI</a> <span class="float-right">{{$medicament->DCI}}</span></li>
                                <li><a href="jvascript:void(0)">  <i class="fas fa-capsules"></i> Médicament/nom commercial</a> <span class="float-right">{{$medicament->nom_commercial}}</span></li>
                                   <li><a href="jvascript:void(0)"><i class="fas fa-search"></i> Indication</a> <span class="float-right">{{$indication->name}}</span></li>
                                  <li><a href="jvascript:void(0)"><i class="fas fa-tablets"></i>  Forme galénique<span class="float-right">{{$medicament->forme_gal}}</span></li>
                                <li><a href="jvascript:void(0)"><i class="fas fa-mortar-pestle"></i> Dose</a> <span class="float-right">{{$prescription->quantite}} {{$prescription->unite}}</span></li>
                                <li><a href="jvascript:void(0)"><i class="fas fa-clock"></i> Durée</a> <span class="float-right">{{$prescription->dure}} {{$prescription->dures}}</span></li>
                                <li><a href="jvascript:void(0)">  <div class="post-tags mb-4">

                                @if($prescription->matin==1)
                                        <span class="badge badge-info">Matin</span>
                                        @endif
                                        @if($prescription->midi==1)
                                        <span class="badge badge-info">Midi</span>
                                        @endif
                                        @if($prescription->soir==1)
                                        <span class="badge badge-info">Soir</span>
                                        @endif
                                        @if($prescription->avant_coucher==1)
                                        <span class="badge badge-info">Avant coucher</span>
                                        @endif
                                </div></li>
                              <li><a href="jvascript:void(0)"><i class="fas fa-glass-whiskey"></i> Voie d'administration</a> <span class="float-right">{{$medicament->voie_admin}}</span></li>
                              <li><a href="jvascript:void(0)"><i class="fas fa-book-medical"></i> Mode d'administration</a> <span class="float-right">{{$medicament->mode_admin}}</span></li>
                             
                             
                            </ul>
                        </div>
                                                @if($prescription->demande==1)
                                                <div >
                                                    <a href="{{ url('/admin/active_deactive_pres/'.$prescription->id) }}" class="btn btn-primary btn-lg" href="javascript:void(0)">Valider la prescription 
                                                       </a>
                                                       <a href="" class="btn btn-primary btn-lg" href="javascript:void(0)" data-toggle="modal"  data-target="#exampleModal">refuser la prescription 
                                                       </a>
                                                       <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                           <div class="modal-dialog" role="document">
                                                              <div class="modal-content">
                                                                 <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Motif de refus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="custom-form mt-4 pt-2">
                            <form name="contact-form"    action="{{route('motif.store',[$prescription->id])}}" method="post">
      	                 	{{csrf_field()}}
                           
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group blog-details-form">
                                            <i class="mdi mdi-comment-processing text-muted f-17"></i>
                                            <textarea name="motif" id="motif" rows="4" class="form-control blog-details" placeholder="......"></textarea>
                                        </div>
                                        <input type="hidden" value="{{$prescription->id}}" name="id">
                                    </div>
                                </div>
                                <div class="modal-footer">
        
                                <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary" value="Ajouter">

      </div>
                               
                            </form>
                            <!-- /form -->
                        </div>
                    </div>
      
    
    </div>
  </div>
</div>
</div>
                                                </div>
                                                @endif
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