<html lang="en">
<head>
    <title>Laravel Tag System Tutorial Example</title>
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
</head>
<body>
    <div class="row mt-5 mb-5 mr-0">
        <div class="col-md-10 offset-1">
            <div class="card">
                <div class="card-header bg-info text-white">
                    <h4>Laravel Tag System Tutorial Example - Nicesnippets.com</h4>
                </div>
                <div class="card-body">
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                            @php
                            Session::forget('success');
                            @endphp
                        </div>
                    @endif
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
                            <input type="text" name="unite" class="form-control">
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
                            <label>Tags : <span class="text-danger">*</span></label>
                            <br>
                            <input type="text" data-role="tagsinput" name="tags" class="form-control tags">
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
                    @if($posts->count())
                        @foreach($posts as $post)
                            <div class="post-section">
                                <div class="post-title">
                                    <h4>{{ $post->title }}</h4>
                                </div>
                                <div class="post-description">
                                    <p style="margin-bottom: 5px !important;">{{ $post->description }}</p>
                                </div>
                                <div class="post-tags mb-4">
                                    <strong>Tags : </strong>
                                    @foreach($post->tags as $tag)
                                        <span class="badge badge-info">{{$tag->name}}</span>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>
</html>