@extends('layouts.ad')

@section('content')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<h4>Validation</h4>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Modifier</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                    @if ($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Formulaire de modification de prescription</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="{{ route('prescription.update_pres',[$prescription->id]) }}" method="post">
                                    {{ csrf_field() }}
                                    
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-username">Titre
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="val-username" name="titre"value="{{ $prescription->titre}}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-email">Poids <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="val-email" name ="poids" value="{{ $prescription->poids}}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-email">Age <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="form-control" id="val-email" name ="age" value="{{ $prescription->age}}">
                                                    </div>
                                                </div>
                                               
                                               
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-suggestions">Description <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                    <textarea id="descr" rows="6" class="form-control resume"  name ="descr" value="{{ $prescription->descr}}">{{ $prescription->descr}}</textarea>
                                                    </div>
                                                </div>
                                               
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-skill">Pathologie
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <select class="form-control default-select" id="val-skill" name="pathologie">
                                                        
                                                            @foreach($pathologies as $pathologie)
                                                            <option value="{{$pathologie->id}}">{{$pathologie->name}}</option>
           
                                                            @endforeach
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-skill">Medicament
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <select class="form-control default-select" id="val-skill" name="medicament">
                                                        
                                                        @foreach($medicaments as $medicament)
                                                        <option value="{{$medicament->id}}">{{$medicament->DCI}}</option>
           
                                                            @endforeach
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-skill">Classification
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <select class="form-control default-select" id="val-skill" name="classification">
                                                        
                                                        @foreach($classifications as $classification)
                                                    <option value="{{$classification->id}}">{{$classification->name}}</option>
           
                                                    @endforeach
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-skill">Categorie
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <select class="form-control default-select" id="val-skill"  name="categorie">
                                                        
                                                        @foreach($categories as $categorie)
                                                    <option value="{{$categorie->id}}">{{$categorie->name}}</option>
           
                                                    @endforeach
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-skill">Indication
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <select class="form-control default-select" id="val-skill" name="indication">
                                                        
                                                        @foreach($indications as $indication)
                                                    <option value="{{$indication->id}}">{{$indication->name}}</option>
           
                                                    @endforeach
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-skill">Quantité
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <select class="form-control default-select" id="val-skill" name="quantite"  value="{{ $prescription->quantite}}">
                                                        
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="1/4">1/4</option>
                                                        <option value="1/2">1/2</option>
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-skill">Unité
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-6">
                                                        <select class="form-control default-select" id="val-skill" name="unite" value="{{ $prescription->unite}}">
                                                        
                                                       
                                                        <option value="CAS">CAS</option>
                                                        <option value="CAC">CAC</option>
                                                        <option value="Mg">Mg</option>
                                                        <option value="Ml">Ml</option>
                                                        <option value="Sch">Sch</option>
                                                        <option value="Cp">Cp</option>
                                                        <option value="Supp">Supp</option>
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                <div class="col-md-1">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Matin </label>
                                          <div class="custom-control custom-checkbox">
                                          @if( $prescription->matin ==1)
                                                <input type="checkbox" class="custom-control-input" id="customCheck1" style="color: white; " name="matin"checked>
                                                <label class="custom-control-label"  style="color: white;" for="customCheck1"></label>
                                                @else
                                                <input type="checkbox" class="custom-control-input" id="customCheck1" style="color: white; " name="matin">

                                                <label class="custom-control-label"  style="color: white;" for="customCheck1"></label>
                                              @endif
                                        </div>
                                        </div>
                                    </div>
                                 <div class="col-md-1">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">&nbsp;Midi</label>
                                          <div class="custom-control custom-checkbox">
                                          @if( $prescription->midi ==1)
                                                <input type="checkbox" class="custom-control-input" id="customCheck2" style="color: white; " name="midi" checked>
                                                <label class="custom-control-label"  style="color: white;" for="customCheck2"></label>
                                                @else
                                                <input type="checkbox" class="custom-control-input" id="customCheck2" style="color: white; " name="midi" >
                                                <label class="custom-control-label"  style="color: white;" for="customCheck2"></label>
                                         @endif
                                        </div>
                                        </div>
                                    </div>
                                      <div class="col-md-1">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Soir</label>
                                          <div class="custom-control custom-checkbox">
                                          @if( $prescription->soir ==1)
                                                <input type="checkbox" class="custom-control-input" id="customCheck3" style="color: white; "  name="soir"checked>
                                                <label class="custom-control-label"  style="color: white;" for="customCheck3"></label>
                                                @else
                                                <input type="checkbox" class="custom-control-input" id="customCheck3" style="color: white; "  name="soir">
                                                <label class="custom-control-label"  style="color: white;" for="customCheck3"></label>
                                                @endif
                              
                                        </div>
                                        </div>
                                    </div>
                                      <div class="col-md-1">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Av.coucher</label>
                                          <div class="custom-control custom-checkbox">
                                          @if( $prescription->av ==1)
                                                <input type="checkbox" class="custom-control-input" id="customCheck4" style="color: white; " name="av"  checked>
                                                <label class="custom-control-label"  style="color: white;" for="customCheck4"></label>
                                                @else
                                                <input type="checkbox" class="custom-control-input" id="customCheck4" style="color: white; " name="av">
                                                <label class="custom-control-label"  style="color: white;" for="customCheck4"></label>
                                                @endif
                              
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">      </label>

                                            <div class="form-button">
                                                        
                                              <input type="text" class="form-control resume" placeholder="5"  name="dure" value="{{ $prescription->dure}}">           
                                                        
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">      &nbsp;Durée</label>

                                            <div class="form-button">
                                                        <select id="select-country" class="form-control default-select"  name="du" value="{{ $prescription->dures}}">
                                              
                                                        <option value="Jour">Jour</option>
                                                        <option value="Semaine">Semaine</option>
                                                        <option value="Mois">Mois</option>
                                                      
                                                        
                                                   

                                                    </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                                    <label class="col-lg-4 col-form-label" for="val-skill">Type hors AMM
                                                        <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="col-lg-12">
                                                    <select id="select-country" class="form-control default-select" name="type" value="{{ $prescription->type}}">
                                              
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
                                                </div>
                                        
                                                </div>
                                              
                                                
                                                
                                               
                                               
                                               
                                                <div class="form-group row">
                                                    <div class="col-lg-8 ml-auto">
                                                        <button type="submit" class="btn btn-primary">Valider</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
	
    



    <!-- Jquery Validation -->
    <script src="./vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Form validate init -->
    <script src="./js/plugins-init/jquery.validate-init.js"></script>


@endsection