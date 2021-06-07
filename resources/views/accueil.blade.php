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
                                    <form class="registration-form">
                                        <div class="row">
                                           <div class="col-lg-3 col-md-6">
                                                <div class="registration-form-box">
                                                    <i class="fas fa-bacterium"></i> 
                                                    <select id="select-country" class="demo-default">
                                                          <option value="">Pathologie</option>
                                                         <optgroup label="A">
                                                        <option value="">Acidose tubulaire distale</option>
                                                        <option value="AF">Amélogenése imparfaite et néphrocalcinose</option>
                                                        <option value="AX">Anévrisme de l’aorte thoracique</option>
                                                             </optgroup>
                                                         <optgroup label="C">
                                                        <option value="AL">Cystinose</option>

                                                        <option value="DZ">Cystinurie</option>
                                                        <option value="AS">Cytopathies mitochondriales MELAS et Autres</option>
                                                    </optgroup>
                                                     <optgroup label="D">
                                                        <option value="AD">Déficience en lécithine-cholestérol-acyl-transférase</option>
                                                        <option value="AO">Diabète Insipide Central</option>
                                                        <option value="AI">Diabète insipide néphrogénique</option></optgroup>
                                                    
                                                   

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="registration-form-box">
                                                    <i class="fa fa-list-alt"></i>
                                                    <select id="select-country" class="demo-default">
                                                        <option value="">Classification</option>
                                                        <option value="AF">Appareil digestif et métabolisme</option>
                                                        <option value="AX">&Aring;Sang et organes hématopoïétiques</option>
                                                        <option value="AL">Système Cardio-vasculaire</option>
                                                        <option value="DZ">Dermatologie</option>
                                                        <option value="AS">Système Génito-urinaire et hormones sexuelles</option>
                                                        <option value="AD">Préparations systémiques hormonales à l’exception des
hormones sexuelles et de l’insuline</option>
                                                        <option value="AO">Anti-infectieux à usage systémique</option>
                                                        <option value="AI">Antinéoplasiques et agents immunomodulateurs</option>
                                                        <option value="AQ">Système musculo-squelettique</option>
                                                        <option value="AG">Système nerveux</option>
                                                        <option value="AR">Produits antiparasitaires, insecticides et révulsifs</option>
                                                        <option value="AM">Système respiratoire</option>
                                                        <option value="AW">Organes sensoriels</option>
                                                        <option value="AU">Divers</option>
                                                   

                                                    </select>
                                                </div>
                                            </div>
                                              <div class="col-lg-3 col-md-6">
                                                <div class="registration-form-box">
                                                    <i class="fas fa-capsules"></i>
                                                    <select id="select-category" class="demo-default">
                                                        <option value="">Médicaments...</option>
                                                        <option value="4">Aspirine</option>
                                                        <option value="1">Amoxicilline</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                                 <div class="col-lg-3 col-md-6">
                                                <div class="registration-form-box">
                                                    <i class="fa fa-list-alt"></i>
                                                    <select id="select-country" class="demo-default">
                                                        <option value="">Catégorie</option>
                                                        <option value="AF">Tranche d'age non conforme</option>
                                                        <option value="AX">&Aring;Posologie non spécifié par l'AMM</option>
                                                        <option value="AL">Absence d'indication</option>
                                                        <option value="DZ">Absence de population pédiatrique</option>
                                                        <option value="AS">Médicament reconditionné</option>
                                                        <option value="AD">Absence d'AMM en Algérie</option>
                                                       

                                                    </select>
                                                </div>
                                            </div>
                                          

                                             <div class="col-lg-2 col-md-4">
                                                 <br>
                                                <div class="registration-form-box">
                                                    <i class="fas fa-child"></i>
                                                    <input type="text" id="exampleInputName1" class="form-control rounded registration-input-box" placeholder="Age">
                                                </div>
                                            </div>
                                            
                                             <div class="col-lg-2 col-md-3">
                                                <br>
                                                <div class="registration-form-box">
                                                    <i class="fas fa-weight"></i>
                                                    <input type="text" id="exampleInputName1" class="form-control rounded registration-input-box" placeholder="Poids">
                                                </div>
                                            </div>
                                             <div class="col-lg-3 col-md-3">
                            <div class="component-wrapper ">
                              

                              
                            </div>
                        </div><!--end col-->
                                            <div class="col-lg-3 col-md-3">
                                                <br>
                                               <div class="buy-button">
                <a href="prescriptions-list.html" class="btn btn-primary"> Rechercher</a>
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