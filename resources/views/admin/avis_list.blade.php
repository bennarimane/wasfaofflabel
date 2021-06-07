@extends('layouts.ad')

@section('content')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<h4>Les demandes</h4>
				
                </div>
                <!-- row -->


					<div class="col-12">
                        <div class="card">
                           
                            <div class="card-body">
                                <div class="table-responsive">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
               
                <th>Titre de la demande</th>
                <th>Age du patient</th>
                <th>Poids du patient</th>
                <th>Mladies chroniques</th>
                <th>Date de publication</th>
                <th>Action</th>
                
                
            </tr>
        </thead>
                                        <tbody>
                                        @if($posts->count())
                    @foreach($posts as $post)
                                            <tr>
                                                
                                                <td>{{ $post->title }}</td>
                                                <td>{{ $post->age }}</td>
                                                <td>{{ $post->poids }}</td>
                                                <td> @foreach($post->tags as $tag)
                                        <span class="badge badge-info">{{$tag->name}}</span>
                                    @endforeach</td>
                                                <td>{{ $post->created_at }}</td>
                                                <td><a href="{{ url('/admin/avis/details/'.$post->id) }}" class="btn btn-primary-outline btn-sm">Consulter</a></td>
                                            
                                                
                                            </tr>
                                           @endforeach
                                         
                                           @endif
                                           
                                           
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
					
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
     
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
	<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="./js/custom.min.js"></script>
	<script src="./js/deznav-init.js"></script>
	
    <!-- Datatable -->
    <script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="./js/plugins-init/datatables.init.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script><link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script></script>
@endsection