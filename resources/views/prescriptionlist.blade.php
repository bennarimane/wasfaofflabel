@extends('layouts.master')
@section('contenu')
<section class="bg-half page-next-level"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">Prescriptions</h4>
                        <ul class="page-next d-inline-block mb-0">
                            <li><a href="index.html" class="text-uppercase font-weight-bold">Accueil</a></li>
                            <li><a href="#" class="text-uppercase font-weight-bold">Presciptions</a></li> 
                            <li>
                                <span class="text-uppercase text-white font-weight-bold">liste de prescriptions</span> 
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <div class="container">
        <div class="home-form-position">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="home-registration-form job-list-reg-form bg-light shadow p-4 mb-3">
                    <form class="registration-form" action="{{ route('recherche') }}" method="GET">
                                    {{   csrf_field()}}
                                        <div class="row">
                                           <div class="col-lg-2 col-md-4">
                                                <div class="registration-form-box">
                                                    <i class="fas fa-bacterium"></i> 
                                                    <select id="select-country" class="demo-default" name="pathologie" required>
                                                          <option value="">Pathologie</option>
                                                      
                                                    
                                                          @foreach($pathologies as $pathologie)
                                                        <option value="{{$pathologie->id}}">{{$pathologie->name}}</option>
               
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-4">
                                                <div class="registration-form-box">
                                                    <i class="fa fa-list-alt"></i>
                                                    <select id="select-country" class="demo-default" name="classification"  required>
                                                        <option value="">Classification</option>
                                                        @foreach($classifications as $classification)
                                                        <option value="{{$classification->id}}">{{$classification->name}}</option>
               
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                              <div class="col-lg-2 col-md-4">
                                                <div class="registration-form-box">
                                                    <i class="fas fa-capsules"></i>
                                                    <select id="select-category" class="demo-default" name="medicament"  required>
                                                        <option value="">Médicaments...</option>
                                                        @foreach($medicaments as $medicament)
                                                        <option value="{{$medicament->id}}">{{$medicament->nom_commercial}}</option>
               
                                                        @endforeach
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                                 <div class="col-lg-2 col-md-4">
                                                <div class="registration-form-box">
                                                    <i class="fa fa-list-alt"></i>
                                                    <select id="select-country" class="demo-default" name="categorie"  required>
                                                        <option value="">Catégorie</option>
                                                        @foreach($categories as $categorie)
                                                        <option value="{{$categorie->id}}">{{$categorie->name}}</option>
               
                                                        @endforeach
                                                       

                                                    </select>
                                                </div>
                                            </div>
                                          

                                             <div class="col-lg-1 col-md-2">
                                          
                                                <div class="registration-form-box">
                                                    <i class="fas fa-child"></i>
                                                    <input type="text" id="exampleInputName1" class="form-control rounded registration-input-box" placeholder="Age" name="age"  required> 
                                                </div>
                                            </div>
                                            
                                             <div class="col-lg-1 col-md-2">
                                          
                                                <div class="registration-form-box">
                                                    <i class="fas fa-weight"></i>
                                                    <input type="text" id="exampleInputName1" class="form-control rounded registration-input-box" placeholder="Poids" name="poids"  required>
                                                </div>
                                            </div>
                                  
                                            <div class="col-lg-2 col-md-1">
                                         
                                               <div class="buy-button">
                                               <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary btn-block"  value="Chercher">
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

    <!-- JOB LIST START -->
    <section class="section pt-0">
        <div class="container">
  

            <div class="row">
                <div class="col-lg-3">
                    <div class="left-sidebar">
                        <div class="accordion" id="accordionExample">
                        <form class="registration-form" action="{{ route('type') }}" method="GET" id="idForm">
                        <div class="card rounded mt-4">
                                <a data-toggle="collapse" href="#collapsetwo" class="job-list" aria-expanded="true" aria-controls="collapsetwo">
                                    <div class="card-header" id="headingtwo">
                                        <h6 class="mb-0 text-dark f-18">Forme galénique</h6>
                                    </div>
                                </a>
                                <div id="collapsetwo" class="collapse show" aria-labelledby="headingtwo">
                                    <div class="card-body p-0">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio7" name="customRadio1" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="customRadio7">Comprimé</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio8" name="customRadio1" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="customRadio8">suspension injectable</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio9" name="customRadio1" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="customRadio9">gélules</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio10" name="customRadio1" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="customRadio10">Sirops</label>
                                        </div>

                                 
                                    </div>
                                </div>
                            </div>
                            
                             <div class="card rounded mt-4">
                                <a data-toggle="collapse" href="#collapseOne" class="job-list" aria-expanded="true" aria-controls="collapseOne">
                                    <div class="card-header" id="headingOne">
                                        <h6 class="mb-0 text-dark f-18">Indication</h6>
                                    </div>
                                </a>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
                                    <div class="card-body p-0">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" value="adces_dentaire" onchange="document.getElementById('idForm').submit();">
                                            <label class="custom-control-label ml-1 text-muted" for="customRadio1">abces dentaire</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" value="Angine" onchange="document.getElementById('idForm').submit();">
                                            <label class="custom-control-label ml-1 text-muted" for="customRadio2">Angine</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input" value="bacteriemie" onchange="document.getElementById('idForm').submit();">
                                            <label class="custom-control-label ml-1 text-muted" for="customRadio3">bacteriemie</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input" value="Fievre" onchange="document.getElementById('idForm').submit();">
                                            <label class="custom-control-label ml-1 text-muted" for="customRadio4">Fievre</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input" value="infection" onchange="document.getElementById('idForm').submit();">
                                            <label class="custom-control-label ml-1 text-muted" for="customRadio5">infection</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="card rounded mt-4">
                                <a data-toggle="collapse" href="#collapsetwo" class="job-list" aria-expanded="true" aria-controls="collapsetwo">
                                    <div class="card-header" id="headingtwo">
                                        <h6 class="mb-0 text-dark f-18">Dose</h6>
                                    </div>
                                </a>
                                <div id="collapsetwo" class="collapse show" aria-labelledby="headingtwo">
                                    <div class="card-body p-0">
                                        <div class="registration-form-box">
                                            <input type="text" d="exampleInputName1" class="form-control rounded registration-input-box">
                                            
                                        </div>

                                    
                                    </div>
                                </div>
                            </div>
                             <div class="card rounded mt-4">
                                <a data-toggle="collapse" href="#collapsetwo" class="job-list" aria-expanded="true" aria-controls="collapsetwo">
                                    <div class="card-header" id="headingtwo">
                                        <h6 class="mb-0 text-dark f-18">Durée de traitement</h6>
                                    </div>
                                </a>
                                <div id="collapsetwo" class="collapse show" aria-labelledby="headingtwo">
                                    <div class="card-body p-0">
                                        <div class="registration-form-box">
                                            <input type="text" d="exampleInputName1" class="form-control rounded registration-input-box">
                                            
                                        </div>

                                    
                                    </div>
                                </div>
                            </div>
                                <div class="card rounded mt-4">
                                <a data-toggle="collapse" href="#collapsethree" class="job-list" aria-expanded="true" aria-controls="collapsethree">
                                    <div class="card-header" id="headingthree">
                                        <h6 class="mb-0 text-dark f-18">Voie d'administration</h6>
                                    </div>
                                </a>
                                <div id="collapsethree" class="collapse show" aria-labelledby="headingthree">
                                    <div class="card-body p-0">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio13" name="customRadio2" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="customRadio13">Voie orale</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio14" name="customRadio2" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="customRadio14">Voies d'injection</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio15" name="customRadio2" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="customRadio15">Voie rectale</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio16" name="customRadio2" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="customRadio16">Voie oculaire</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                              <div class="card rounded mt-4">
                                <a data-toggle="collapse" href="#collapsefour" class="job-list" aria-expanded="true" aria-controls="collapsefour">
                                    <div class="card-header" id="headingfour">
                                        <h6 class="mb-0 text-dark f-18">Mode d'administration</h6>
                                    </div>
                                </a>
                                <div id="collapsefour" class="collapse show" aria-labelledby="headingfour">
                                    <div class="card-body p-0">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio17" name="customRadio3" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="customRadio17">Avalés</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio18" name="customRadio3" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="customRadio18">vaporisés dans le nez</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio19" name="customRadio3" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="customRadio19">Autre</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                   
                       
                            </form>
                            <!-- collapse one end -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-9 mt-4 pt-2">
                   

                    <div class="row">
          
                    @foreach($prescriptions as $prescription)
                
                        <div class="col-lg-12 mt-4 pt-2">
                            <div class="job-list-box border rounded">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                       
                                       <div class="col-lg-7 col-md-9">
                                            <div class="job-list-desc">
                                                <h6 class="mb-2"><a href="#" class="text-dark">Titre: {{$prescription->titre}}</a></h6>
                                                <p class="text-muted mb-0"></i>  {{$prescription->class}} </p>
                                                <p class="text-muted mb-0"><i class="fas fa-bacterium"></i>  {{$prescription->path}} </p>
                                                   <p class="text-muted mb-0"><i class="fas fa-capsules"></i>  {{$prescription->nom_commercial}} </p>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item mr-3">
                                                        <p class="text-muted mb-0"><i class="fas fa-user-nurse"></i> Publié par ::{{$prescription->name}}{{$prescription->lastname}}  </p>
                                                    </li>

                                                    <li class="list-inline-item">
                                                        <p class="text-muted mb-0"><i class="mdi mdi-clock-outline mr-2"></i>{{$prescription->created_at}} </p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3">
                                            <div class="job-list-button-sm text-right">
                                           <?php  if ($prescription->etat==1){ ?> 
                                                <span class="badge badge-success">Valide</span>
                                          <?php   }?>

                                          <?php  if ($prescription->etat==0 && $prescription->demande== 1 ){ ?> 
                                                <span class="badge badge-warning">En attente</span>
                                          <?php   }?>
                                          <?php  if ($prescription->etat==0 && $prescription->demande== 0 ){ ?> 
                                                <span class="badge badge-primary">En discussion</span>
                                          <?php   }?>
                                                <div class="mt-3">
                                                    <a href="{{ url('prescriptions/'.$prescription->id) }}" class="btn btn-sm btn-primary">Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="col-lg-12 mt-4 pt-2">
                        <nav aria-label="Page navigation example">
                                <ul class="pagination job-pagination mb-0 justify-content-center">
                                  
                                    <li class="page-item ">{{$prescriptions->links()}}</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection