
   @extends('layouts.master')
@section('contenu')
    <section class="bg-half page-next-level"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="text-center text-white">
                        <h4 class="text-uppercase title mb-4">Ajouter une nouvelle prescription</h4>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

   <br><br>
   <section class="section">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-lg-10">
                    <div class="rounded shadow bg-white p-4">
                        <div class="custom-form">
                            <div id="message3"></div>
    <form action="{{ route('addmorePost',[$prescription->id]) }}" method="POST">
    <h4 class="text-dark mb-3">Etape 02: Ajouter les références </h4>
        @csrf
   
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
   
        @if (Session::has('success'))
            <div class="alert alert-success text-center">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                <p>{{ Session::get('success') }}</p>
            </div>
        @endif
   
        <table class="table table-bordered" id="dynamicTable">  
            <tr>
                <th>Titre</th>
                <th>Auteur</th>
                <th>Lien Web</th>
                <th></th>
                <th>Action</th>
            </tr>
            <tr>  
                <td><input type="text" name="addmore[0][name]"  class="form-control" /></td>  
                <td><input type="text" name="addmore[0][qty]"  class="form-control" /></td>  
                <td><input type="text" name="addmore[0][price]" class="form-control" /></td> 
                <td><input type="hidden" name="addmore[0][pre_id]" placeholder="Enter your Price" class="form-control"  value="{{$prescription->id}}"/></td>  
                <td><button type="button" name="add" id="add" class="btn btn-primary">Ajouter</button></td>  
            </tr>  
        </table> 
    
        <button type="submit" class="btn btn-success">Envoyer</button>
    </form>
</div></div></div></div></div></div>
   <br><br><br>
<script type="text/javascript">
   
    var i = 0;
       
    $("#add").click(function(){
      
        ++i;
   if(i <3)
        $("#dynamicTable").append('<tr><td><input type="text" name="addmore['+i+'][name]"  class="form-control" /></td><td><input type="text" name="addmore['+i+'][qty]"  class="form-control" /></td><td><input type="text" name="addmore['+i+'][price]"  class="form-control" /></td> <td><input type="hidden" name="addmore['+i+'][pre_id]" class="form-control" value="{{$prescription->id}}"/></td><td><button type="button" class="btn btn-danger remove-tr">Supprimer</button></td></tr>');
  endif  });
   
    $(document).on('click', '.remove-tr', function(){  
        --i;
         $(this).parents('tr').remove();
       
    });  
   
</script>

@endsection