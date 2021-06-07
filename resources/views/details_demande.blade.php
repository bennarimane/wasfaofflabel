@extends('layouts.master')
@section('contenu')

    
    <!-- Start home -->
    <section class="bg-half page-next-level"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
               
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- EMPLOYERS DETAILS START -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-sm-center">
                        <img src="images/featured-job/img-3.png" alt="" class="img-fluid mx-md-auto d-block">
                        <h4 class="mt-3"><a href="#" class="text-dark">{{$post->title}}</a></h4>
                        <h4 class="mt-3"><a href="#" class="text-dark">Information du patient <p></p></a></h4>
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item mr-3">
                                <p class="text-muted mb-0">L'age du patient {{$post->age}}{{$post->unite}} </p>
                            </li>

                            <li class="list-inline-item">
                                <p class="text-success mb-0">Pathologie :{{$pathologie->name}}</p>
                            </li>
                        </ul>

                        <ul class="list-inline mb-2">
                            <li class="list-inline-item mr-3 ">
                                <p class="text-muted"><i class="mdi mdi-earth mr-2"></i>{{$user->name}}
                                {{$user->lastname}}</p>
                            </li>

                            <li class="list-inline-item mr-3">
                                <p class="text-muted"><i class="mdi mdi-email mr-2"></i></p>
                            </li>

                            <li class="list-inline-item">
                                <p class="text-muted">Publié le :{{$post->created_at}}</p>
                            </li>
                            <li class="list-inline-item">Maladie chroniques
                            @foreach($post->tags as $tag)
                                        <span class="badge badge-info">{{$tag->name}}</span>
                                    @endforeach</li>
                        </ul>
                    </div>
                </div>
            </div>

         

            <div class="row">
                <div class="col-lg-12 mt-4 pt-2">
                    <h4>Description  :</h4>
                    <div class="rounded border p-4 mt-3">
                        <p class="text-muted">{{ $post->description }}.</p>
                    </div>
                </div>
            </div>
<br><br><br><br>
           

            <div class="col-lg-12">
                    <div class="faq-content">
                        <h4 class="text-dark"> Propositions:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <!--<a href="" class="btn btn-primary-outline btn-sm" data-toggle="modal" data-target="#exampleModal-modal-xl" >Proposer</a>-->
                        @if(Auth::user()->isban=="valide") 
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl">Proposer une prescription</button></h4>
                        @endif
                        @foreach($propositions as $proposition)
                        <div class="faq-content mt-3">

                            <div class="accordion" id="accordionExample">
                                <div class="card border rounded shadow mb-3">
                                    <a data-toggle="collapse" href="#collapseOne" class="faq position-relative" aria-expanded="true" aria-controls="collapseOne">
                                        <div class="card-header bg-light p-3" id="headingOne">
                                            <h4 class="title mb-0 faq-question">Titre de la proposition: {{ $proposition->titre }}</h4>
                                        </div>
                                    </a>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                            <p class="text-muted mb-0 faq-ans">Médicament : {{ $proposition->nom_commercial }}</p><br>
                                            <p class="text-muted mb-0 faq-ans">Posologie : {{ $proposition->quantite }} {{ $proposition->unite }}</p>
                                            <h6> Le temps d'administration : 
                                            @if($proposition->matin == 1) 
                                           <span class="badge badge-pill badge-danger">Matin</span>@endif
                                            @if($proposition->midi == 1) 
                                          <span class="badge badge-pill badge-danger">Midi</span> @endif
                                            @if($proposition->soir == 1) 
                                            <span class="badge badge-pill badge-danger">Soir</span> @endif
                                            @if($proposition->avant_coucher == 1) 
                                            <span class="badge badge-pill badge-danger">Avant de se coucher</span> @endif</h6>
                                            
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
                                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Le : {{ $proposition->created_at }}</p><br>
                                        </div>
                                    </div>
                                </div>

                        

                              
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                
                </div>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
    <form action="{{route('proposition.store',[$post->id])}}"   method="post">
      		{{csrf_field()}}
  <div class="form-row">
  <div class="form-group col-md-12">
      <label for="inputEmail4">Titre</label>
      <input type="text" class="form-control" id="inputEmail4"  name="titre" required>
    </div>
    <div class="form-group col-md-6">
    <?php   $medicaments =DB::table('medicaments')->get();    ?>
      <label for="inputEmail4">Médicament</label>
      <select id="inputState" class="form-control" name="medicament" required>
      @foreach($medicaments as $medicament)
      <option value="{{$medicament->id}}">{{$medicament->nom_commercial}}</option>
               
               @endforeach
      </select>
    </div>
    <div class="form-group col-md-6">
    <?php   $classifications =DB::table('classifications')->get();    ?>
      <label for="inputPassword4">Classification</label>
      <select id="inputState" class="form-control" name="classification" required>
      @foreach($classifications as $classification)
      <option value="{{$classification->id}}">{{$classification->name}}</option>
               
               @endforeach
      </select>
    </div>
  </div>
  <div class="form-group">
  <?php   $categories =DB::table('categories')->get();    ?>
    <label for="inputAddress">Catégorie</label>
    <select id="inputState" class="form-control"name="categorie" required>
    @foreach($categories as $categorie)
      <option value="{{$categorie->id}}">{{$categorie->name}}</option>
               
               @endforeach
      </select>
  </div>
 
  <div class="form-row">
    <div class="form-group col-md-2">
      <label for="inputCity">Quantité</label>
      <select id="inputState" class="form-control" name="quantite" required>
      <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="1/4">1/4</option>
                                                        <option value="1/2">1/2</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputCity">Unité</label>
      <select id="inputState" class="form-control" name="unite" required>
      <option value="CAS">CAS</option>
                                                        <option value="CAC">CAC</option>
                                                        <option value="Mg">Mg</option>
                                                        <option value="Ml">Ml</option>
                                                        <option value="Sch">Sch</option>
                                                        <option value="Cp">Cp</option>
                                                        <option value="Supp">Supp</option>
      </select>
    </div>
    <div class="form-group col-md-1">
    <input class="form-check-input" type="checkbox" id="gridCheck" name="matin" >
      <label class="form-check-label" for="gridCheck">Matin </label>
    </div>
    <div class="form-group col-md-1">
    <input class="form-check-input" type="checkbox" id="gridCheck"  name="midi" >
      <label class="form-check-label" for="gridCheck">Midi </label>
    </div>
    <div class="form-group col-md-1">
    <input class="form-check-input" type="checkbox" id="gridCheck"  name="soir" >
      <label class="form-check-label" for="gridCheck">Soir </label>
    </div>
    <div class="form-group col-md-1">
    <input class="form-check-input" type="checkbox" id="gridCheck"  name="avant_coucher" >
      <label class="form-check-label" for="gridCheck">Av coucher </label>
    </div>
    <div class="form-group col-md-1">
    <label for="inputEmail4"></label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="duré" name="dures" required>
    </div>
    <div class="form-group col-md-1">
    <label for="inputEmail4"></label>
    <select id="inputState" class="form-control" name="dure" required>
    <option value="Jour">Jour</option>
                                                        <option value="Semaine">Semaine</option>
                                                        <option value="Mois">Mois</option>
                                                      
      </select>
    </div>
   
  </div>
  <div class="form-group">
  <div class="form-group col-md-6">
      <label for="inputPassword4">Type hors AMM</label>
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
      <label for="inputPassword4">Description</label>
      <textarea  id="" cols="30" rows="10" class="form-control resume"  name ="description" required></textarea>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <input  class="btn btn-primary" type="submit" value="envoyer">
      </div>
   
  </div>

</form>
    </div>
  </div>
</div>

    <!-- EMPLOYERS DETAILS END -->

    <!-- subscribe start -->
 
    <!-- subscribe end -->

 
    <!-- Footer End -->

    <!-- Back to top -->
    <a href="#" class="back-to-top rounded text-center" id="back-to-top"> 
        <i class="mdi mdi-chevron-up d-block"> </i> 
    </a>
    <!-- Back to top -->

    <!-- javascript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/plugins.js"></script>

    <!-- selectize js -->
    <script src="js/selectize.min.js"></script>

    <script src="js/jquery.nice-select.min.js"></script>

    <script src="js/app.js"></script>
@endsection