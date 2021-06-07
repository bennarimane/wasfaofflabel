@extends('layouts.master')
@section('contenu')
<section class="bg-half page-next-level"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">demander l'aide</h4>
                        <ul class="page-next d-inline-block mb-0">
                            <li><a href="index.html" class="text-uppercase font-weight-bold">Accueil</a></li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="faq-content">
                        <h4 class="text-dark"> Questions Generales:</h4>
                        <div class="faq-content mt-3">
                            <div class="accordion" id="accordionExample">
                                <div class="card border rounded shadow mb-3">
                                    <a data-toggle="collapse" href="#collapseOne" class="faq position-relative" aria-expanded="true" aria-controls="collapseOne">
                                        <div class="card-header bg-light p-3" id="headingOne">
                                            <h4 class="title mb-0 faq-question"> demande N01 ?</h4>
                                        </div>
                                    </a>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                            <p class="text-muted mb-0 faq-ans">Age : 2ans</p><br>
                                            <p class="text-muted mb-0 faq-ans">Poids : 25kilos</p><br>
                                            <p class="text-muted mb-0 faq-ans">Pathologie : pathologie1</p><br>
                                            
                                            <p class="text-muted mb-0 faq-ans">Maladie chronique  : Non</p><br>
                                            <p class="text-muted mb-0 faq-ans">Description : aaaaaaaaaa</p><br>
                                        </div>
                                    </div>
                                </div>

                                <div class="card border rounded shadow mb-3">
                                    <a data-toggle="collapse" href="#collapseTwo" class="faq position-relative collapsed" aria-expanded="false" aria-controls="collapseTwo">
                                        <div class="card-header bg-light p-3" id="headingTwo">
                                            <h4 class="title mb-0 faq-question"> demande N02  ? </h4>
                                        </div>
                                    </a>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                            <p class="text-muted mb-0 faq-ans">Age : 2ans</p><br>
                                            <p class="text-muted mb-0 faq-ans">Poids : 25kilos</p><br>
                                            <p class="text-muted mb-0 faq-ans">Pathologie : pathologie1</p><br>
                                            
                                            <p class="text-muted mb-0 faq-ans">Maladie chronique  : Non</p><br>
                                            <p class="text-muted mb-0 faq-ans">Description : aaaaaaaaaa</p><br>
                                        </div>
                                    </div>
                                </div>

                                <div class="card border rounded shadow mb-3">
                                    <a data-toggle="collapse" href="#collapsethree" class="faq position-relative collapsed" aria-expanded="false" aria-controls="collapsethree">
                                        <div class="card-header bg-light p-3" id="headingthree">
                                            <h4 class="title mb-0 faq-question"> demande N03  ? </h4>
                                        </div>
                                    </a>
                                    <div id="collapsethree" class="collapse" aria-labelledby="headingthree data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text-muted mb-0 faq-ans">Age : 2ans</p><br>
                                            <p class="text-muted mb-0 faq-ans">Poids : 25kilos</p><br>
                                            <p class="text-muted mb-0 faq-ans">Pathologie : pathologie1</p><br>
                                            
                                            <p class="text-muted mb-0 faq-ans">Maladie chronique  : Non</p><br>
                                            <p class="text-muted mb-0 faq-ans">Description : aaaaaaaaaa</p><br>
                                        </div>
                                    </div>
                                </div>

                                <div class="card border rounded shadow mb-3">
                                    <a data-toggle="collapse" href="#collapsefour" class="faq position-relative collapsed" aria-expanded="false" aria-controls="collapsefour">
                                        <div class="card-header bg-light p-3" id="headingfour">
                                            <h4 class="title mb-0 faq-question"> demande N04 ? </h4>
                                        </div>
                                    </a>
                                    <div id="collapsefour" class="collapse" aria-labelledby="headingfoor" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text-muted mb-0 faq-ans">Age : 2ans</p><br>
                                            <p class="text-muted mb-0 faq-ans">Poids : 25kilos</p><br>
                                            <p class="text-muted mb-0 faq-ans">Pathologie : pathologie1</p><br>
                                            
                                            <p class="text-muted mb-0 faq-ans">Maladie chronique  : Non</p><br>
                                            <p class="text-muted mb-0 faq-ans">Description : aaaaaaaaaa</p><br>
                                        </div>
                                    </div>
                                </div>

                                <div class="card rounded shadow mb-0">
                                    <a data-toggle="collapse" href="#collapsefive" class="faq position-relative collapsed" aria-expanded="false" aria-controls="collapsefive">
                                        <div class="card-header bg-light p-3" id="headingfive">
                                            <h4 class="title mb-0 faq-question"> demande N05 ? </h4>
                                        </div>
                                    </a>
                                    <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="text-muted mb-0 faq-ans">Age : 2ans</p><br>
                                            <p class="text-muted mb-0 faq-ans">Poids : 25kilos</p><br>
                                            <p class="text-muted mb-0 faq-ans">Pathologie : pathologie1</p><br>
                                            
                                            <p class="text-muted mb-0 faq-ans">Maladie chronique  : Non</p><br>
                                            <p class="text-muted mb-0 faq-ans">Description : aaaaaaaaaa</p><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                
                </div>
            </div>
        </div>
    </section>
    @endsection