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
                        <img src="../{{$user->avatar}}" height="150" alt="" class="d-block mx-auto shadow rounded-pill mb-4">
                        <h5 class="text-white mb-2"> {{$user->name}} {{$user->lastname}}</h5>
                        <p class="text-white-50 h6 mb-2"><i class="fas fa-envelope-open-text"></i> {{$user->email}}</p>
                        <p class="text-white-50 h6 mb-2"><i class="fas fa-phone"></i> {{$user->phone}}</p>
                        <p class="text-white-50 h6 mb-2"><i class="fas fa-user-nurse"></i> {{ $user->profession}}</p>
                        <p class="text-white-50 h6 mb-2"><i class="fas fa-hospital"></i> {{ $user->etablissement}}</p>

                      
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- CANDIDATES PROFILE START -->
    <section class="section">
        <div class="container">
         
        
     

            <div class="row">
                <div class="col-lg-12 mt-4 pt-2">
                    <h4 class="text-dark">Mes prescriptions rejetées</h4>
                </div>
            </div>

            <div class="row">
            @foreach($prescriptions as $prescription)
                <div class="col-md-12 mt-6 mt-md-0 pt-6">
                    <div class="border rounded job-list-box p-4">
                        <div class="row">
                       
<a  href="{{ url('prescriptions/'.$prescription->id) }}">
                            <div class="col-lg-10">
                                <div class="job-list-desc candidates-profile-exp-desc">
                                    <h5 class="f-19 mb-2">Titre: {{$prescription->titre}}   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                     &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                                      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                       &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; 
                                       &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                         &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                           @if($prescription->demande == 0) <a href="{{ url('/valider/prescription/'.$prescription->id) }}">&nbsp; &nbsp;&nbsp; &nbsp;<i class="fa fa-paper-plane" aria-hidden="true" title="demander la validation"></i></a>  @endif
                                           <a href="{{ url('/modifier/prescription/'.$prescription->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true" title="modifier la prescription"></i> </h5>
                                  
                                    <p class="text-muted mb-0 f-16"> {{$prescription->motif}} </p>
                                   
                                </div>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>

      
            
        
        </div>
    </section>
    @endsection