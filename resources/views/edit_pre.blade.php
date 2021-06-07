
   @extends('layouts.master')
@section('contenu')
    <section class="bg-half page-next-level"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">Modifier cette prescription</h4>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->

    <!-- POST A JOB START -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="rounded shadow bg-white p-4">
                        <div class="custom-form">
                            <div id="message3"></div>
                            <form method="post" action="{{ route('prescription.update_pres',[$prescription->id]) }}" name="contact-form" id="contact-form3">
                            {{ csrf_field() }}
                                <h4 class="text-dark mb-3">Modifier la prescription</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Titre de la prescription</label>
                                            <input id="company-name" type="text" class="form-control resume" placeholder="" name="titre"value="{{ $prescription->titre}}"> 
                                        </div>
                                    </div>
                                </div>
                                
 
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Poids</label>
                                            <input  class="form-control" placeholder="" name ="poids" value="{{ $prescription->poids}}"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Age</label>
                                            <input class="form-control" placeholder="" name ="age" value="{{ $prescription->age}}"/>
                                        </div>
                                    </div>
                                </div>
 
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Pathologie</label>
                                            <div class="form-button">
                                                <select id="select-country" class="demo-default" name="pathologie" value="{{$prescription->pathologie_id}}">
                                            
                                                <option value="{{$prescription->pathologie_id}}">{{$prescription->pathologie_id}}</option>
                                                      
                                                    
                                                      @foreach($pathologies as $pathologie)
                                                    <option value="{{$pathologie->id}}">{{$pathologie->name}}</option>
           
                                                    @endforeach

                                                    
                                                   

                                                    </select>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Médicament</label>
                                            <div class="form-button">
                                           <select id="select-category" class="demo-default" name="medicament">
                                                 
                                             
                                           @foreach($medicaments as $medicament)
                                                    <option value="{{$medicament->id}}">{{$medicament->nom_commercial}}</option>
           
                                                    @endforeach
                                                        
                                                    </select>
                                            </div>
                                        </div>
                                    </div>
                                  
                                </div>

                                <div class="row">
                                 <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Classification</label>
                                            <div class="form-button">
                                                 <select id="select-country" class="demo-default" name="classification">
                                              
                                                            
                                           @foreach($classifications as $classification)
                                                    <option value="{{$classification->id}}">{{$classification->name}}</option>
           
                                                    @endforeach
                                                    </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Catégorie</label>
                                            <div class="form-button">
                                         <select id="select-country" class="demo-default" name="categorie">
                                                        
                                         @foreach($categories as $categorie)
                                                    <option value="{{$categorie->id}}">{{$categorie->name}}</option>
           
                                                    @endforeach
                                                       

                                                    </select>
                                            </div>
                                        </div>
                                    </div>
                                              
                                    <div class="col-md-4">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Indication</label>
                                            <div class="form-button">
                                         <select id="select-country" class="demo-default" name="indication">
                                                        
                                         @foreach($indications as $indication)
                                                    <option value="{{$indication->id}}">{{$indication->name}}</option>
           
                                                    @endforeach
                                                       

                                                    </select>
                                            </div>
                                        </div>
                                    </div>
                              
                                </div>

                            
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Quantité</label>
                                            <div class="form-button">
                                                        <select id="select-country" class="demo-default" name="quantite"  value="{{ $prescription->quantite}}">
                                              
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="1/4">1/4</option>
                                                        <option value="1/2">1/2</option>
                                                        
                                                   

                                                    </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Unité</label>
                                            <div class="form-button">
                                                        <select id="select-country" class="demo-default" name="unite" value="{{ $prescription->unite}}">
                                              
                       
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
                                    </div>
                                  <div class="col-md-1">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Matin</label>
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
                                           <div class="col-md-1">
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
                                                        <select id="select-country" class="demo-default"  name="du"value="{{ $prescription->dures}}">
                                              
                                                        <option value="Jour">Jour</option>
                                                        <option value="Semaine">Semaine</option>
                                                        <option value="Mois">Mois</option>
                                                      
                                                        
                                                   

                                                    </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                   

                               
                                    <div class="col-md-6">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Type hors AMM</label>
                                            <div class="form-button">
                                                        <select id="select-country" class="demo-default" name="type" value="{{ $prescription->type}}">
                                              
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
                                </div>


                            
                             

                        
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group app-label mt-2">
                                            <label class="text-muted">Description</label>
                                            <textarea id="description" rows="6" class="form-control resume" placeholder="" name ="descr"value="{{ $prescription->descr}}">{{ $prescription->descr}}</textarea>
                                        </div>
                                    </div>
                                </div>



        
   

             
                                <div class="row">
                                    <div class="col-lg-12 mt-2">
                                        <input Type="submit" class="btn btn-primary"></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- POST A JOB END -->



   
    <script type="text/javascript">
        $(document).ready(function () {
    var next = 0;
    $("#add-more").click(function(e){
        e.preventDefault();
        var addto = "#field" + next;
        var addRemove = "#field" + (next);
        next = next + 1;
        var newIn = '<div id="field'+ next +'" name="field'+ next +'"><!-- Text input--><div class="form-group"> <label class="text-muted" for="Nom">Réference</label>'
        +'<div class="col-md-8"> <input id="Nom" name="Nom" type="text" placeholder="" class="form-control resume"> </div></div>'
        
       
       
        
        var newInput = $(newIn);
        var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me btn-xs pull-right" >x</button></div></div>'
        +'<div id="field"><br>';
        var removeButton = $(removeBtn);
        $(addto).after(newInput);
        $(addRemove).after(removeButton);
        $("#field" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);  
        
            $('.remove-me').click(function(e){
                e.preventDefault();
                var fieldNum = this.id.charAt(this.id.length-1);
                var fieldID = "#field" + fieldNum;
                $(this).remove();
                $(fieldID).remove();
            });
    });
});
    </script>

@endsection