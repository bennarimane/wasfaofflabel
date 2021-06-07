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
                <h4>Liste de prescriptions </h4>
                </div>
                <!-- row -->


					<div class="col-12">
                        <div class="card">
                         
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example4" class="display min-w850">
                                        <thead>
                                            <tr>
                                                
                                                <th>Titre</th>
                                                <th>Pathologie</th>
                                                <th>Classification</th>
												<th>Par</th>
												<th>Duré </th>
                                                <th>Validité</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($prescriptions as $prescription)
                                            <tr>
                                                
                                                <td>{{$prescription->titre}}</td>
                                                <td>{{$prescription->path}}</td>
                                                <td>{{$prescription->class}}</td>
                                                <td>{{$prescription->name}}</td>
                                                <td>{{ $prescription->created_at}}</td>
                                              <td>
                                                    @if( $diff = Carbon\Carbon::parse($prescription->created_at)->diffInYears()>="5 years ago")
                                                  <a href="{{ url('/admin/prescriptions/forvalidation/'.$prescription->id) }}" > <span class="badge light badge-danger">  {{ $diff = Carbon\Carbon::parse($prescription->created_at)->diffForHumans()}} A vérifier</span></a>
                                                    @else
                                                    <span class="badge light badge-success">valide</span>
                                                    @endif
                                                </td>
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
@endsection