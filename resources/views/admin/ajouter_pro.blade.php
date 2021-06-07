@extends('layouts.ad')

@section('content')
<div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Ajouter un professionnels de santé</h3>
                            
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Tableau de bord</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Ajouter utilisateur</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>


                

                       
                <!-- // Basic Vertical form layout section end -->


                <!-- // Basic multiple Column Form section start -->
                <section id="multiple-column-form">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form">
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">Nom</label>
                                                        <input type="text" id="first-name-column" class="form-control"
                                                            placeholder="Nom" name="fname-column">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="last-name-column">Prénom</label>
                                                        <input type="text" id="last-name-column" class="form-control"
                                                            placeholder="Prénom" name="lname-column">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="city-column">Wilaya</label>
                                                        <input type="text" id="city-column" class="form-control"
                                                            placeholder="Wilaya" name="city-column">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="country-floating">Etablissement</label>
                                                        <input type="text" id="country-floating" class="form-control"
                                                            name="country-floating" placeholder="Etablissement">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="company-column">Profession</label>
                                                        <input type="text" id="company-column" class="form-control"
                                                            name="company-column" placeholder="Profession">
                                                    </div>
                                                </div>
                                                    <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="company-column">Specialité</label>
                                                        <input type="text" id="company-column" class="form-control"
                                                            name="company-column" placeholder="Specialité">
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="email-id-column">Email</label>
                                                        <input type="email" id="email-id-column" class="form-control"
                                                            name="email-id-column" placeholder="Email">
                                                    </div>
                                                </div>
                                                 <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="email-id-column">Mot de passe</label>
                                                        <input type="password" id="email-id-column" class="form-control"
                                                            name="email-id-column" placeholder="Mot de passe">
                                                    </div>
                                                </div>
                                             
                                                <div class="col-12 d-flex justify-content-end">
                                                    <button type="submit"
                                                        class="btn btn-primary me-1 mb-1">Ajouter</button>
                                                    <button type="reset"
                                                        class="btn btn-light-secondary me-1 mb-1">Annuler</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic multiple Column Form section end -->
            </div>

        </div>
    </div>
    @endsection