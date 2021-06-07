
    @extends('layouts.master')
@section('contenu')
    
    <!-- Start home -->
    <section class="bg-half page-next-level"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">Prescription</h4>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- BLOG LIST START -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="sidebar mt-sm-30 p-4 rounded shadow">
                        <!-- SEARCH -->
                   
                        <!-- SEARCH -->

                        <!-- CATAGORIES -->
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
                        <!-- CATAGORIES -->

                  
                        <!-- RECENT POST -->

                        <!-- TAG CLOUDS -->
                       
                        <!-- TAG CLOUDS -->
                        
                        <!-- SOCIAL -->
                    </div>
                </div><!--end col-->

                <div class="col-lg-8 col-md-6 col-12 order-1 order-md-2">
                    <div class="shadow rounded p-4">
                        <div class="blog-details-img">
                        @if( $diff = Carbon\Carbon::parse($prescription->created_at)->diffInYears()>="5 years ago")
                        <a href="" > <span class="badge light badge-danger">  {{ $diff = Carbon\Carbon::parse($prescription->created_at)->diffForHumans()}} A vérifier</span></a>@endif
                           <h4>{{$prescription->titre}} &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;@if($prescription->demande == 0 and $prescription->user_id == Auth::id())&nbsp; &nbsp;<a href="{{ url('/valider/prescription/'.$prescription->id) }}">&nbsp; &nbsp;&nbsp; &nbsp;<i class="fa fa-paper-plane" aria-hidden="true" title="demander la validation"></i>
                            </a> <a href="{{ url('/modifier/prescription/'.$prescription->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                  </a>  @endif
                                  @if($prescription->demande ==1 and $prescription->etat==0)  <span class="badge badge-warning">En attente</span>  @endif
                                    @if($prescription->user_id == Auth::id()) <a href="{{ url('/modifier/prescription/'.$prescription->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>  @endif</h4>
                        </div>
                        <div class="blog-details meta mt-3">
                            <ul class="list-inline mb-1">
                                <li class="list-inline-item mr-4">
                                    <p class="text-muted mb-0"><i class="fas fa-user-nurse"></i> {{$user->name}} {{$user->lastname}} de {{$user->etablissement}}</p>
                                </li>
                                <li class="list-inline-item mr-4">
                                    <p class="text-muted mb-0"><i class="mdi mdi-calendar-range mr-1"></i>{{$prescription->created_at}}</p>
                               
                                <li class="list-inline-item mr-4">
                             <?php   $co =DB::table('prescriptions')
                                 ->join('commentaires', 'prescriptions.id', '=', 'commentaires.prescription_id')
                                 ->where('commentaires.prescription_id', '=',$prescription->id) ->get();        ?>
                                    <p class="text-muted mb-0"><i class="mdi mdi-message-reply-text mr-1"></i> {{$co->count()}} Discussions</p>
                                </li>

                        
                            </ul>
                        </div>

                        <div class="blog-details-desc p-2">
                            <h5 class="mb-3"><a href="#" class="text-dark">Description de la prescription</a></h5>

                            <p class="text-muted mb-3 f-13">{{$prescription->descr}}</p>

                            

                          
                            
                        
                        </div>
                        <div class="row">
                        <div class="col-lg-12">
                            <h5 class="text-dark mt-4">Les références</h5>
                        </div>
                    </div>
                    @if(Auth::user())
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="job-detail border rounded mt-2 p-4">
                                <div class="job-detail-desc">
                                @foreach($references as $reference)
                                    <div class="job-details-desc-item">
                                        <div class="float-left mr-3">
                                            <i class="mdi mdi-send text-primary"></i>
                                        </div>
                                        <p class="text-muted mb-2">{{$reference->name}},{{$reference->qty}},<a href="">{{$reference->price}}</a></p>
                                    </div>

                                  
@endforeach
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if(!Auth::user())
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="job-detail border rounded mt-2 p-4">
                                <div class="job-detail-desc">
                              
                                        <p class="text-muted mb-2">Vous etes en mode alternaute</p>
                                    
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    </div>

                    <div class="rounded border mt-4 p-4">
                        <h5 class="text-dark"><i class="mdi mdi-comment-multiple mr-2"></i>discussions</h5>
                        @foreach($commentaires as $commentaire)
                        <div class="media mt-4 pt-2">
                            <div class="blog-comment-img">
                                <img class="d-block mx-auto rounded-pill" height="60" alt="" src="https://via.placeholder.com/400X400//88929f/5a6270C/O https://placeholder.com/">
                            </div>
                            <div class="media-body ml-3">
                                <h6 class="mb-0"><a href="#" class="text-dark">{{$commentaire->name}} {{$commentaire->lastname}}</a></h6>
                                <p class="text-muted mb-0">{{$commentaire->created_at}} </p>
                                <p class="text-muted f-14 mb-2">{{$commentaire->contenu}}</p>
                              
                                

                              
                            </div>
                        </div>
                        
                       

                        @endforeach
                     
                    </div>
                    @if(Auth::user()->isban=="valide") 
                    <div class="rounded border mt-4 p-4">
                        <h5 class="text-dark"><i class="mdi mdi-pencil mr-2"></i>Ajouter une discussion</h5>
                        <div class="custom-form mt-4 pt-2">
                            <form name="contact-form" action="{{route('commentaire.store',[$prescription->id])}}"   method="post">
      	                 	{{csrf_field()}}
                           
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group blog-details-form">
                                            <i class="mdi mdi-comment-processing text-muted f-17"></i>
                                            <textarea name="contenu" id="comments" rows="4" class="form-control blog-details" placeholder="......"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary" value="Ajouter">
                                    </div>
                                </div>
                            </form>
                            <!-- /form -->
                        </div>
                    </div>

@endif

                </div>
                
            </div>
        </div>
    </section>
   
    @endsection