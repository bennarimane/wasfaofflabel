@extends('layouts.ad')

@section('content')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<h4>Professionnels de santé</h4>
					<ol class="breadcrumb">
						
						<li class="breadcrumb-item active"><a href="javascript:void(0)">La liste des professionnels de santé</a></li>
					</ol>
                </div>
                <!-- row -->


                <div class="row">
                   
                   
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Liste des professionnels de santé</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display min-w850">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Nom</th>
                                                <th>Prénom</th>
                                                
                                                <th>Etablissement</th>
                                                <th>Profession</th>
                                                <th>Email</th>
                                                <th>Etat</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										@foreach($lists as $element)
                                            <tr>
												<td><img class="rounded-circle" width="35" src="images/profile/small/pic2.jpg" alt=""></td>
                                                <td>{{$element->name}}</td>
                                                <td>{{$element->lastname}}</td>
                                               
                                                <td>{{$element->etablissement}}</td>
                                                <td><a href="javascript:void(0);"><strong>{{$element->profession}}</a></strong></td>
												<td><a href="javascript:void(0);"><strong>{{$element->email}}</a></strong></td>
                                                <td>@if($element->isban == "nouveau")
													<span class="badge light badge-warning">
														<i class="fa fa-circle text-warning mr-1"></i>
														Nouveau
													</span>
													@elseif($element->isban == "valide")
													<span class="badge light badge-warning">
													<span class="badge light badge-success">
														<i class="fa fa-circle text-success mr-1"></i>
														Valide
													</span>
													@else
													<span class="badge light badge-danger">
														<i class="fa fa-circle text-danger mr-1"></i>
														bloqué
													</span>@endif
												</td>
                                                <td>
													<div class="d-flex">
														<a href="{{ url('/details_user/'.$element->id) }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-info-circle"></i></a>
														
													</div>
												</td>
                                            </tr>
											@endforeach
											
										
                                           
                                          
                                            
                                            
                                            
                    
                                          
                                           
                                          
                                           
                                            
                                      
                                          
                                         
                                           
                                            
                                           
                                          
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
@endsection