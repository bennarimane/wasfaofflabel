@extends('layouts.master')
@section('contenu')

    
    <!-- Start home -->
    <section class="bg-half page-next-level"> 
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                
                </div>
            </div>
        </div>
    </section>
   
    <!-- end home -->

    

    <!-- CANDIDATES LISTING START -->
    <section class="section pt-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="show-results">
                       
                        <div class="sort-button text-center float-sm-right">
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="left-sidebar">
                        <div class="accordion" id="accordionExample">
                           

                            
                           

                           
                            <!-- collapse one end -->

                            <!-- collapse one end -->

                            <div class="card rounded mt-4">
                                
                                <div id="collapsesix" class="collapse" aria-labelledby="headingsix">
                                    <div class="card-body p-0">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio9" name="customRadio2" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted" for="customRadio9">$1k - $20k</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio10" name="customRadio2" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted" for="customRadio10">$21k - $30k</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio11" name="customRadio2" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted" for="customRadio11">$31k - $40k</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio12" name="customRadio2" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted" for="customRadio12">$41k - $50k</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio13" name="customRadio2" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted" for="customRadio13">$51k - $60k</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- collapse one end -->


                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-8">
                    <div class="candidates-listing-item">
                    @if($posts->count())
                    @foreach($posts as $post)
                        <div class="border mt-4 rounded p-3">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="float-left mr-4">
                                        <img src="https://via.placeholder.com/400X400//88929f/5a6270C/O https://placeholder.com/" alt="" class="d-block rounded" height="90">
                                    </div>
                                    <div class="candidates-list-desc overflow-hidden job-single-meta  pt-2">
                                        <h5 class="mb-2"><a href="#" class="text-dark">{{ $post->title }}</a></h5>
                                        <ul class="list-unstyled">
                                           
                                          
                                            <li class="text-muted"><i class="fas fa-clock"></i>{{ $post->created_at }}</li>
                                        </ul>
                                        <p class="text-muted mt-1 mb-0">{{ $post->description }}</p>
                                        @foreach($post->tags as $tag)
                                        <span class="badge badge-info">{{$tag->name}}</span>
                                    @endforeach
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="candidates-list-fav-btn text-right">
                                        
                                        <div class="candidates-listing-btn mt-4">
                                            <a href="{{ url('/avis/details/'.$post->id) }}" class="btn btn-primary-outline btn-sm">Consulter</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        @endforeach
                    @endif
                    </div>

                    <nav aria-label="Page navigation example">
                        <ul class="pagination job-pagination justify-content-center mb-0 mt-4 pt-2">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                    <i class="mdi mdi-chevron-double-left"></i>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="mdi mdi-chevron-double-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- CANDIDATES LISTING END -->

    <!-- subscribe start -->
    <section class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="float-left position-relative notification-icon mr-2">
                        <i class="mdi mdi-bell-outline text-primary"></i>
                        <span class="badge badge-pill badge-danger">1</span>
                    </div>
                    <h5 class="mt-2 mb-0">Your Job Notification</h5>
                </div>
                <div class="col-lg-8 col-md-7 mt-4 mt-sm-0">
                    <form>
                        <div class="form-group mb-0">
                            <div class="input-group mb-0">
                                <input name="email" id="email" type="email" class="form-control" placeholder="Your email :" required="" aria-describedby="newssubscribebtn">
                                <div class="input-group-append">
                                    <button class="btn btn-primary submitBnt" type="submit" id="newssubscribebtn">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe end -->

    <!-- footer start -->

    <!-- footer end -->
    <hr>
  
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