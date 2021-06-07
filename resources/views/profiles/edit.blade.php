@extends('layouts.master')
@section('contenu')
    <!-- Start Home -->
    
    <!-- Start home -->
    <section class="bg-half page-next-level"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="candidates-profile-details text-center">
                        <img src="../{{$info->avatar}}"height="150" alt="" class="d-block mx-auto shadow rounded-pill mb-4">
                        <h5 class="text-white mb-2"> {{$info->name}} {{$info->lastname}}</h5>
                        <p class="text-white-50 h6 mb-2"><i class="fas fa-envelope-open-text"></i> {{$info->email}}</p>
                        <p class="text-white-50 h6 mb-2"><i class="fas fa-phone"></i> {{$info->phone}}</p>
                        <p class="text-white-50 h6 mb-2"><i class="fas fa-user-nurse"></i> {{ $info->profession}}</p>
                        <p class="text-white-50 h6 mb-2"><i class="fas fa-hospital"></i> {{ $info->etablissement}}</p>

                      
                    </div>
                </div>
            </div>
        </div>
    </section>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
            <br><br>
              <div class="panel-heading"><h4 style="text-align:center;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Modifier vos informations personnels </h4></div>

                <div class="panel-body">
                    <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        
                        <div class="form-group">
                        <img src="../{{$info->avatar}}" height="150" alt="" class="d-block mx-auto shadow rounded-pill mb-4">
                              <label for="avatar">Ajouter une photo <i class="fas fa-image"></i></label>
                              <input type="file" name="avatar" class="form-control" accept="image/*">
                        </div>
                        <div class="form-group">
                              <label for="name">Nom</label>
                              <input type="text" name="name" value="{{ $info->name }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                              <label for="lastname">Prénom</label>
                              <input type="text" name="lastname" value="{{ $info->lastname }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                              <label for="phone"> <i class="fas fa-phone-square"></i> Numero de telephone</label>
                              <input type="text" name="phone" value="{{ $info->phone }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                              <label for="email"><i class="fas fa-envelope-open-text"></i> Email</label>
                              <input type="email" name="email" value="{{ $info->email }}" class="form-control" required>
                        </div>
                        <div class="form-group">
                              <label for="profession"> <i class="fas fa-user-nurse"></i> Profession</label>
                        <select id="profession" type="text" class="form-control " name="profession" value="{{ $info->profession}}" required autocomplete="profession" autofocus>
<option value="medecin">Medecin
</option>
<option value="pharmacien">Pharmacien
</option></select></div>
                        <div class="form-group">
                              <label for="location"> <i class="fas fa-hospital"></i> Etablissement</label>
                              <input type="text" name="etablissement" value="{{ $info->etablissement}}" class="form-control" required>
                        </div>
                       
                      
                        
                        <div class="form-group">
                              <p class="text-center">
                                    <button class="btn btn-primary" type="submit">
                                         Enregistrer vos informations
                                    </button>
                              </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
