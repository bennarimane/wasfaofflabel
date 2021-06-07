@extends('layouts.master')
@section('contenu')
    <!-- Start Home -->
    <section class="bg-home">
        <div class="bg-overlay"></div>
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="title-heading text-center text-white">
                               
                                <h2 class="heading font-weight-bold mb-4">Wasfa,l'outil d’aide à la prescription médicamenteuse hors AMM en pédiatrie</h2>
                            </div>
                        </div>
                    </div>
                    <div class="home-form-position">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="home-registration-form p-4 mb-3">
                                    <form class="registration-form" action="{{ route('recherche') }}" method="GET">
                                    {{   csrf_field()}}
                                        <div class="row">
                                           <div class="col-lg-3 col-md-6">
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
                                            <div class="col-lg-3 col-md-6">
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
                                              <div class="col-lg-3 col-md-6">
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
                                                 <div class="col-lg-3 col-md-6">
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
                                          

                                             <div class="col-lg-2 col-md-4">
                                                 <br>
                                                <div class="registration-form-box">
                                                    <i class="fas fa-child"></i>
                                                    <input type="text" id="exampleInputName1" class="form-control rounded registration-input-box" placeholder="Age" name="age"  required> 
                                                </div>
                                            </div>
                                            
                                             <div class="col-lg-2 col-md-3">
                                                <br>
                                                <div class="registration-form-box">
                                                    <i class="fas fa-weight"></i>
                                                    <input type="text" id="exampleInputName1" class="form-control rounded registration-input-box" placeholder="Poids" name="poids"  required>
                                                </div>
                                            </div>
                                             <div class="col-lg-3 col-md-3">
                            <div class="component-wrapper ">
                              

                              
                            </div>
                        </div><!--end col-->
                                            <div class="col-lg-3 col-md-3">
                                                <br>
                                               <div class="buy-button">
                                               <input type="submit" id="submit" name="send" class="submitBnt btn btn-primary btn-block" value="Rechercher">
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
    </section>
    <!-- end home -->

    <!-- popular category start -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="">
                        <center><h1 class="" style="color: #707172;"><strong>Wasfa vous apporte les réponses pour prendre la meilleure décision.</strong></h1></center>
                     
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <a href="javascript:void(0)">
                        <div class="popu-category-box bg-light rounded text-center p-4">
                            <div class="popu-category-icon mb-3">
                                <img src="images/une.png" alt="">
                            </div>
                            <div class="popu-category-content">
                                <h5 class="mb-2 text-dark title">Médicament hors AMM</h5>
                                <p class="text-muted mb-0 rounded">Consulter les prescription des médicament hors AMM en pédiatrie (Posologie,Traitement, ...)</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <a href="javascript:void(0)">
                        <div class="popu-category-box bg-light rounded text-center p-4">
                            <div class="popu-category-icon mb-3">
                                <img src="images/deux.png" alt="">
                            </div>
                            <div class="popu-category-content">
                                <h5 class="mb-2 text-dark title">Discussion</h5>
                                <p class="text-muted mb-0 rounded">Participer avec les professionnels de santé à des collaborations nationnales dans le contexte de prescription médicamenteuse hors AMM en pédiatrie</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mt-4 pt-2">
                    <a href="javascript:void(0)">
                        <div class="popu-category-box bg-light rounded text-center p-4">
                            <div class="popu-category-icon mb-3">
                                  <img src="images/three.png" alt="">
                            </div>
                            <div class="popu-category-content">
                                <h5 class="mb-2 text-dark title">Réponse rapide et exploitable</h5>
                                <p class="text-muted mb-0 rounded">Obtenir une réponse rapide et exploitable selon les critéres de votre patient</p>
                            </div>
                        </div>
                    </a>
                </div>
                
                
                
                
             
            </div>

          
        </div>
    </section>
    <!-- popular category end -->



    <!-- How it Work start -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title title-line pb-5">Comment ça marcher</h4>
                        <p class="text-muted para-desc mx-auto mb-1">.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                  <div class="col-md-4 mt-4 pt-2">
                    <div class="how-it-work-box bg-light p-4 text-center rounded shadow">
                        <div class="how-it-work-img position-relative rounded-pill mb-3">
                            <img src="images/how-it-work/img-3.png" alt="" class="mx-auto d-block" height="50">
                        </div>
                        <div>
                            <h5>Ajouter une prescription</h5>
                       
                            <a href="#" class="text-primary">Détails <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
             
                <div class="col-md-4 mt-4 pt-2">
                    <div class="how-it-work-box bg-light p-4 text-center rounded shadow">
                        <div class="how-it-work-img position-relative rounded-pill mb-3">
                            <img src="images/how-it-work/img-2.png" alt="" class="mx-auto d-block" height="50">
                        </div>
                        <div>
                            <h5>Discuter une prescription</h5>
                            
                            <a href="#" class="text-primary">Read more <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                 <div class="col-md-4 mt-4 pt-2">
                    <div class="how-it-work-box bg-light p-4 text-center rounded shadow">
                        <div class="how-it-work-img position-relative rounded-pill mb-3">
                            <img src="images/how-it-work/img-1.png" alt="" class="mx-auto d-block" height="50">
                        </div>
                        <div>
                            <h5>Consulter les prescriptions</h5>
                            <p class="text-muted"></p>
                            <a href="#" class="text-primary">Read more <i class="mdi mdi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- How it Work end -->
    @endsection