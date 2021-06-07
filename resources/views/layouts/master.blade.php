<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha256-aAr2Zpq8MZ+YA/D6JtRD3xtrwpEz2IqOS+pWD/7XKIw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" integrity="sha512-xmGTNt20S0t62wHLmQec2DauG9T+owP9e6VU8GigI0anN7OXLip9i7IwEhelasml2osdxX71XcYm6BQunTQeQg==" crossorigin="anonymous" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js" integrity="sha512-VvWznBcyBJK71YKEKDMpZ0pCVxjNuKwApp4zLF3ul+CiflQi6aIJR+aZCP/qWsoFBA28avL5T5HA+RE+zrGQYg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput-angular.min.js" integrity="sha512-KT0oYlhnDf0XQfjuCS/QIw4sjTHdkefv8rOJY5HHdNEZ6AmOh1DW/ZdSqpipe+2AEXym5D0khNu95Mtmw9VNKg==" crossorigin="anonymous"></script>
    <style type="text/css">
        .label-info{
            background-color: #17a2b8;

        }
        .label {
            display: inline-block;
            padding: .25em .4em;
            font-size: 75%;
            font-weight: 700;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: .25rem;
            transition: color .15s ease-in-out,background-color .15s ease-in-out,
            border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }
    </style>
     @if(Auth::check())
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Demande d'avis</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="{{ route('posts.store') }}">
                        @csrf
                        <div class="form-group">
                            <label>Title : <span class="text-danger">*</span></label>
                            <input type="text" name="title" class="form-control">
                            @if ($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>age : <span class="text-danger">*</span></label>
                            <input type="text" name="age" class="form-control">
                            @if ($errors->has('age'))
                                <span class="text-danger">{{ $errors->first('age') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>unite: <span class="text-danger">*</span></label>
                   
                            <select  class="form-control" name="unite">
                            <option value="jour">Jour</option>
                            <option value="semaine">Semaine</option>
                            <option value="mois">Mois</option>
                            <option value="ans">Ans</option>
                            </select>
                            @if ($errors->has('unite'))
                                <span class="text-danger">{{ $errors->first('unite') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>poids: <span class="text-danger">*</span></label>
                            <input type="text" name="poids" class="form-control">
                            @if ($errors->has('poids'))
                                <span class="text-danger">{{ $errors->first('poids') }}</span>
                            @endif
                        </div>
                        <?php   $pathologies =DB::table('pathologies')->get();    ?>
    <div class="form-group ">
      <label for="inputPassword4">Pathologie</label>
      <select id="inputState" class="form-control" name="pathologie_id">
      @foreach($pathologies as $pathologie)
      <option value="{{$pathologie->id}}">{{$pathologie->name}}</option>
               
               @endforeach
      </select>
    </div>
    <?php   $indications =DB::table('indications')->get();    ?>
    <div class="form-group ">
      <label for="inputPassword4">Indication</label>
      <select id="inputState" class="form-control" name="indication_id">
      @foreach($indications as $indication)
      <option value="{{$indication->id}}">{{$indication->name}}</option>
               
               @endforeach
      </select>
    </div>

                        <div class="form-group">
                            <label>Description : <span class="text-danger">*</span></label>
                            <textarea class="form-control" name="description"></textarea>
                            @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Maladies chroniques : <span class="text-danger">*</span></label>
                            <br>
                            <input type="text" data-role="tagsinput" name="tags" class="form-control tags" style="background-color: blue;">
                            <br>
                            @if ($errors->has('tags'))
                                <span class="text-danger">{{ $errors->first('tags') }}</span>
                            @endif
                        </div>
                        <input type="hidden" name="user_id" class="form-control" value="{{Auth::user()->id}}">
                        <div class="form-group">
                            <button class="btn btn-success store-data btn-sm">Envoyer</button>
                        </div>
                    </form>
      </div>
     
    </div>
  </div>
</div>
@endif
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>asfa</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Themesdesign" />

    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/materialdesignicons.min.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome.css')}}" />

    <!-- selectize css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/selectize.css')}}" />

    <!--Slider-->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{asset('css/owl.theme.css')}}" />
    <link rel="stylesheet" href="{{asset('css/owl.transitions.css')}}" />

    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />
      <script src="{{asset('https://kit.fontawesome.com/45e38e596f.js')}}" crossorigin="anonymous"></script>

</head>

<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- Loader -->

    <!-- Navigation Bar-->
    <header id="topnav" class="defaultscroll scroll-active">
        <!-- Tagline STart -->
        <div class="tagline">
            <div class="container">
                <div class="float-left">
                    <div class="phone">
                        <i class="mdi mdi-phone-classic"></i> +213 123 45 67
                    </div>
                    <div class="email">
                        <a href="#">
                            <i class="mdi mdi-email"></i> Support@wasfa.com
                        </a>
                    </div>
                </div>
               
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- Tagline End -->

        <!-- Menu Start -->
        <div class="container">
            <!-- Logo container-->
            <div>
                <a href="index.html" class="logo">
                    <img src="../images/1.png" alt="" class="logo-light" height="160" />
                    <img src="../images/2.png" alt="" class="logo-dark" height="160" />
                </a>
            </div>     
          
          
            <div class="buy-button">
            @guest
            
       
                                <a  href="{{ route('login') }}" class="text-light "> <i class="fas fa-sign-in-alt"></i> Se connecter  </a>
                          
                            @if (Route::has('register'))
                              
                                    <a class="btn btn-primary" href="{{ route('register') }}">S'inscrire</a>
                              
                            @endif
                        @else
                        <div id="navigation">
                <!-- Navigation Menu-->   
                <ul class="navigation-menu">
                @if(Auth::check())
                @if(Auth::user()->isban=="valide")   <a href="{{ route('ajouter.prescription') }}" class="btn btn-primary"><br><i class="fas fa-plus"></i> Ajouter une prescription</a>
                <unread></unread>&nbsp;&nbsp;
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  demandee d'avis
</button> @endif 

                        @endif
                    &nbsp; &nbsp;
                        <li class="has-submenu">
                        
                          <a href="javascript:void(0)">  <i class="mdi mdi-account mr-2"></i> {{ Auth::user()->name }}</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                        <li><a href="{{ route('profile', ['id' => Auth::user()->id ]) }}"><i class="mdi mdi-account mr-2"></i> Mon profile</a></li>
                        <li><a href="{{ route('profile.refus',['id' => Auth::user()->id ]) }}"> liste de refus</a></li>
                            <li><a href="{{ route('profile.edit') }}"><i class="fas fa-user-edit"></i>  Modifier profile</a></li>
                            <li><a href="{{ route('changepassword') }}"><i class="fas fa-lock"></i>  Changer de mot de passe</a></li>
                        
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                      <i class="fas fa-sign-out-alt"></i> Déconnecter  
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                       
                                        @csrf
                                        
                                    </form></li>
                        
                           
                        </ul>
                    </li>
    </ul></div>
                          
                            
                        @endguest

            </div><!--end login button-->
                
               
            </div><!--end login button-->
            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>
    
            <div id="navigation">
                <!-- Navigation Menu-->   
                <ul class="navigation-menu">
                    <li><a href="{{ url('/')}}">Accueil</a></li>
                    <li><a href="{{ route('liste') }}">Prescriptions</a></li>
                    <li><a href="{{ url('/avis') }}">Aide</a></li>
                   
                </ul><!--end navigation menu-->
            </div><!--end navigation-->
        </div><!--end container-->
        <!--end end-->
    </header><!--end header-->
    @yield('contenu')
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                    <a href="javascript:void(0)"><img src="../images/1.png" height="180" alt=""></a>
                    <p class="mt-4">Wasfa,l'outil d’aide à la prescription médicamenteuse hors AMM en pédiatrie</p>
                    <ul class="social-icon social list-inline mb-0">
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="rounded"><i class="mdi mdi-google"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <p class="text-white mb-4 footer-list-title">Wasfa</p>
                    <ul class="list-unstyled footer-list">
                        <li><a href="prescriptions-list.html" class="text-foot"><i class="mdi mdi-chevron-right"></i> Liste de prescription</a></li>
                        <li><a href="new.html" class="text-foot"><i class="mdi mdi-chevron-right"></i> Nouvelle prescription</a></li>
                       
                    </ul>
                </div>
                
            
                
            </div>
        </div>
    </footer>
    <hr>
    

    <!-- Back to top -->
    <a href="#" class="back-to-top rounded text-center" id="back-to-top"> 
        <i class="mdi mdi-chevron-up d-block"> </i> 
    </a>
    <!-- Back to top -->

    <!-- javascript -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('js/plugins.js')}}"></script>

    <!-- selectize js -->
    <script src="{{asset('js/selectize.min.js')}}"></script>
    <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>

    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/counter.int.js')}}"></script>

    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/home.js')}}"></script>

</body>
</html>