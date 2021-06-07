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
    <br><br>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                
              
                <div class="panel-body">
                    <form action="{{ route('profile.updatepassword') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                       
                        <div class="form-group">
                              <label for="current_password">Mot de passe</label>
                              <input type="password" name="current_password" id="current_password"  class="form-control" required>
                        </div>
                   
                        <div class="form-group">
                              <label for="new_password">nouveau mot de passe</label>
                              <input type="password" name="new_password" id="new_password"class="form-control" required>
                        </div>
                        <div class="form-group">
                              <label for="new_password_confirmation">confirmer</label>
                              <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="form-control" required>
                        </div>
                     
                        <div class="form-group">
                              <p class="text-center">
                                    <button class="btn btn-primary" type="submit">
                                        changer mot de passe
                                    </button>
                              </p>
                        </div>
                    </form>
                    @if(session('error'))
                    <div class="alert alert-danger" role="alert">
                    {{session('error')}}
                    @endif
                    @if(session('message'))
                    <div class="alert alert-success" role="alert">
                    {{session('message')}}
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                                     

                                                