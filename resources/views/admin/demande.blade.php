            
   
    @extends('layouts.ad')
   
   @section('content')
   <div class="content-body">
            <div class="container-fluid">
                <div class="page-titles">
					<h4>Prescriptions en attente de validation</h4>
					<ol class="breadcrumb">
						
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Prescriptions en attente</a></li>
					</ol>
                </div>
                <!-- row -->

                <div class="row">
                   
					<div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Prescriptions</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example5" class="display min-w850">
                                        <thead>
                                            <tr>
                                              
                                                
                                                <th><strong>Titre de la prescription</strong></th>
                                                <th><strong>La Pathologie traité</strong></th>
                                                <th><strong>L'Auteur de la prescription</strong></th>
                                                <th><strong>L'Etat</strong></th>
                                                <th><strong>Plus</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          
                                        @foreach($lists as $element)
											<tr>
                                               
                                               
                                                <td><div class="d-flex align-items-center"><img src="images/avatar/3.jpg" class="rounded-lg mr-2" width="24" alt=""/> <span class="w-space-no">{{$element->titre}}</span></div></td>
                                                <td>{{$element->name}}	</td>
                                                <td>{{$element->lastname}}</td>
                                                <td><div class="d-flex align-items-center"><i class="fa fa-circle text-warning mr-1"></i> en attente</div></td>
                                                <td>
													<div class="d-flex">
													
                                                        <a href="{{ url('/admin/prescriptions/'.$element->id) }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-info-circle"></i></a>
														
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
					
                   
                        <!-- /# card -->
                   
                   
                   
                    
                   
             
              
                   
                </div>
            </div>
        </div>
        
        <script src="./vendor/global/global.min.js"></script>
	<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="./js/custom.min.js"></script>
	<script src="./js/deznav-init.js"></script>
	
    <!-- Datatable -->
    <script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="./js/plugins-init/datatables.init.js"></script>
        
              @endsection
              