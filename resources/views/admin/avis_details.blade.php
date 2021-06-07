@extends('layouts.ad')

@section('content')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<h4>Details de la demande d'avis</h4>
                    <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target=".bd-example-modal-xl" >Transformer en prescription</button>
					
                </div>
                <div class="row">
                <div class="col-lg-12">
                @if(session('message'))
                    <div class="alert alert-success" role="alert">
                    {{session('message')}}
                    @endif
                    @if(session('error'))
                    <div class="alert alert-danger" role="alert">
                    {{session('error')}}
                    @endif
                    </div></div>
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
                                                <h4><p class="price float-left d-block">{{$post->title}}</h4>
                                                </div>
												
                                                <p>L'age du patient :{{$post->age}}{{$post->unite}} </p>
                                                <p>L'age du patient :{{$post->poids}} </p>
                                                <p>Pathologie :{{$pathologie->name}}</p>
                                                
                                               
                                                <p class="text-content">Maladie chroniques
                                                          @foreach($post->tags as $tag)
                                                      <span class="badge badge-rounded badge-primary">{{$tag->name}}</span>
                                                           @endforeach</li></p>
                                               
                                                    <ul class="list-inline mb-2">
                                                     <li class="list-inline-item mr-3 ">
                                                        <p class="text-muted"><i class="mdi mdi-earth mr-2"></i>Publié par :{{$user->name}}
                                                            {{$user->lastname}}</p>
                                                               </li>

                            

                                                      <li class="list-inline-item">
                                                             <p class="text-muted">Le :{{$post->created_at}}</p>
                                                           </li>
                           
                                                                </ul>    
                                             </div>
                                         </div>
                                         </div>
                                    </div>
                                                </div>
                                              
                                            </div>
                                        </div>
                                    </div>
                               
					<!-- review -->
                    <div class="row">
                    <!-- Column starts -->
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-header d-block">
                                <h4 class="card-title">Les propositions</h4>
                                
                            </div>
                            <div class="card-body">
                                <!-- Default accordion -->
                                <div id="accordion-one" class="accordion accordion-primary">
                                @foreach($propositions as $proposition)
                                    <div class="accordion__item">
                                        <div class="accordion__header rounded-lg" data-toggle="collapse" data-target="#default_collapse">
                                        
                                            <span class="accordion__header--text">{{ $proposition->titre }}</span>
                                            <span class="accordion__header--indicator"></span>
                                        </div>
                                        <div id="default_collapse" class="collapse accordion__body show" data-parent="#accordion-one">
                                            <div class="accordion__body--text">
                                            <div class="card-body">
                                            <p class="text-muted mb-0 faq-ans">Médicament : {{ $proposition->nom_commercial }}</p><br>
                                            <p class="text-muted mb-0 faq-ans">Posologie : {{ $proposition->quantite }} {{ $proposition->unite }}</p>
                                            <h6> Le temps d'administration : 
                                            @if($proposition->matin == 1) 
                                            <p class="text-muted mb-0 faq-ans"><span class="badge badge-rounded badge-outline-warning">Matin</span></p>@endif
                                            @if($proposition->midi == 1) 
                                            <p class="text-muted mb-0 faq-ans"><span class="badge badge-rounded badge-outline-warning">Midi</span></p> @endif
                                            @if($proposition->soir == 1) 
                                            <p class="text-muted mb-0 faq-ans"><span class="badge badge-rounded badge-outline-warning">Soir</span></p> @endif
                                            @if($proposition->avant_coucher == 1) 
                                            <p class="text-muted mb-0 faq-ans"><span class="badge badge-rounded badge-outline-warning">Avant de se coucher</span></p> @endif</h6>
                                            
                                            <p class="text-muted mb-0 faq-ans">Pendant :{{ $proposition->dures }}{{ $proposition->dure }} </p><br>
                                            <p class="text-muted mb-0 faq-ans">Description : {{ $proposition->descr }}</p><br>
                                            <p class="text-muted mb-0 faq-ans">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Publié par : {{ $proposition->name }}{{ $proposition->lastname }}</p><br>
                                            <p class="text-muted mb-0 faq-ans">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Publié par : {{ $proposition->created_at }}</p><br>
                                        </div>                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                   
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    
               
        <div class="row">
                <div class="col-lg-12 mt-3">
                    <div class="border rounded p-4">
                      
                    <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl"role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Transformer en prescription</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  action="{{ route('transfer.store',[$post->id]) }}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <script>function fun_showtextbox()
{
    var select_status=$('#messagetype').val();
    /* if select personal from select box then show my text box */
    
if(select_status == 'Personal')
    {
        $('#mobileno_textbox').show();// By using this id you can show your content    
        $('#mobileno_textbox2').hide();
    }
    else
    {   $('#mobileno_textbox2').show();
        $('#mobileno_textbox').hide();// otherwise hide   
    }
    
}</script>
           <div class="form-group" >
        <select name="messagetype" id="messagetype"  class="form-control"  data-style="select-wih-transition" title="News Type" data-size="7"  onchange="fun_showtextbox()">
        <option disabled="">Select</option>
        <option value="All">Parmi les propositions</option>
        <option value="Personal">proposer une prescription</option>
        </select>
       </div>
        <div class="form-group">
            <label for="recipient-name" class="col-form-label">Titre<span style="color: red;">*</span></label>
     <input type="text" name="nom" class="form-control" >
          </div>
          <div class="form-group" id="mobileno_textbox2">
            <label for="recipient-name" class="col-form-label">Les propositions<span style="color: red;">*</span></label>
     <select name="proposition" class="form-control"  > 
     <option value="0">choisir</option>
     @foreach($propositions as $proposition)
               <option value="{{$proposition->id}}">{{$proposition->titre}}</option>
               @endforeach

              
            </select>
          </div>
              
    
     
           <div  style="display: none;"  id="mobileno_textbox">
           <div class="form-group ">
    <?php   $medicaments =DB::table('medicaments')->get();    ?>
      <label for="inputEmail4">Médicament<span style="color: red;">*</span></label>
      <select id="inputState" class="form-control" name="medicament" >
      @foreach($medicaments as $medicament)
      <option value="{{$medicament->id}}">{{$medicament->nom_commercial}}</option>
               
               @endforeach
      </select>
    </div>
    <div class="form-group">
    <?php   $classifications =DB::table('classifications')->get();    ?>
      <label for="inputPassword4">Classification<span style="color: red;">*</span></label>
      <select id="inputState" class="form-control" name="classification" >
      @foreach($classifications as $classification)
      <option value="{{$classification->id}}">{{$classification->name}}</option>
               
               @endforeach
      </select>
    </div>
    <div class="form-group">
  <?php   $categories =DB::table('categories')->get();    ?>
    <label for="inputAddress">Catégorie<span style="color: red;">*</span></label>
    <select id="inputState" class="form-control"name="categorie" >
    @foreach($categories as $categorie)
      <option value="{{$categorie->id}}">{{$categorie->name}}</option>
               
               @endforeach
      </select>
  </div>
 


  <div class="form-row">
  <div class="form-group col-md-2">
      <label for="inputCity">Quantité<span style="color: red;">*</span></label>
      <select id="inputState" class="form-control" name="quantite">
      <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="1/4">1/4</option>
                                                        <option value="1/2">1/2</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputCity">Unité<span style="color: red;">*</span></label>
      <select id="inputState" class="form-control" name="unite">
      <option value="CAS">CAS</option>
                                                        <option value="CAC">CAC</option>
                                                        <option value="Mg">Mg</option>
                                                        <option value="Ml">Ml</option>
                                                        <option value="Sch">Sch</option>
                                                        <option value="Cp">Cp</option>
                                                        <option value="Supp">Supp</option>
      </select>
    </div>
    &nbsp; &nbsp; &nbsp; &nbsp;
    <div class="form-group col-md-1">
    <br> <br><input class="form-check-input" type="checkbox" id="gridCheck" name="matin" >
      <label class="form-check-label" for="gridCheck">Matin </label>
    </div>
    <div class="form-group col-md-1">
    <br> <br><input class="form-check-input" type="checkbox" id="gridCheck"  name="midi" >
      <label class="form-check-label" for="gridCheck">Midi </label>
    </div>
    <div class="form-group col-md-1">
    <br> <br><input class="form-check-input" type="checkbox" id="gridCheck"  name="soir" >
      <label class="form-check-label" for="gridCheck">Soir </label>
    </div>
    <div class="form-group col-md-1">
    <br> <br><input class="form-check-input" type="checkbox" id="gridCheck"  name="avant_coucher" >
      <label class="form-check-label" for="gridCheck">Av coucher </label>
    </div>
    <div class="form-group col-md-1">
    <label for="inputEmail4"></label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="duré" name="dures">
    </div>
    <div class="form-group col-md-1">
    <label for="inputEmail4"></label>
    <select id="inputState" class="form-control" name="dure">
    <option value="Jour">Jour</option>
                                                        <option value="Semaine">Semaine</option>
                                                        <option value="Mois">Mois</option>
                                                      
      </select>
    </div>
  </div>

  <div class="form-group col-md-6">
      <label for="inputPassword4">Type hors AMM <span style="color: red;">*</span></label>
      <select  name="type" class="form-control">
                                              
                                              <option value="Sans AMM/ Sous ATU/En essais clinique">Sans AMM/ Sous ATU/En essais clinique</option>
                                              <option value="Préparations hospitalières">Préparations hospitalières</option>
                                              <option value="Médicaments dilués/Reconditionnés">Médicaments dilués/Reconditionnés</option>
                                              <option value="Comprimé écrasé, gélule ouverte, solution diluée">Comprimé écrasé, gélule ouverte, solution diluée</option>
                                              <option value="Contre indiqué">Contre indiqué</option>

                                          <option value="L’absence de données pédiatriques">L’absence de données pédiatriques</option>
                                               <option value="Validée uniquement chez l’adulte">Validée uniquement chez l’adulte</option>
                                               <option value="Posologie non spécifiée par l’AMM<">Posologie non spécifiée par l’AMM</option>
                                               <option value="L’administration par une voie autre que celle spécifiée par l’AMM.">L’administration par une voie autre que celle spécifiée par l’AMM. </option>
                                               <option value="Manque d’un traitement complémentaire.">Manque d’un traitement complémentaire. </option>

                                         

                                          </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Description <span style="color: red;">*</span></label>
      <textarea  id="" cols="30" rows="10" class="form-control resume"  name ="description"></textarea>
    </div>

          </div>

           <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="submit" class="btn btn-primary">Envoyer</button>
      </div>
        </form>
      </div>
     
    </div>
  </div>
</div>

                    
                    </div>
                </div>
            </div>

					<div class="modal fade" id="reviewModal">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Review</h5>
									...
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