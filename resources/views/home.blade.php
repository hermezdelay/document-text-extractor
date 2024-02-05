<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

                        <!-- script de bootstrap 5 pour l'effet Hover Tooltip, ...etc -->
                        <script src="{{ asset('js/bootstrap_util.js')}}" type="text/javascript"></script>
                        
                        <!-- Fonts -->
                        <link rel="preconnect" href="https://fonts.bunny.net">
                        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
            
                        <!-- j'ajoute ici le style de tailwindcss -->                      
                        <link rel="stylesheet" href="{{ asset('css/tailwindcss.css') }}" type="text/css">
                        <!-- j'ajoute ici le style de bootstrap 5 -->                      
                        <link rel="stylesheet" href="{{ asset('/css/bootstrap_util.css') }}">


        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

</head>
<body>
    
    <div class="row">
        <div class="col-8">
          
          <div class="row">
            <div class="col-6">
                <div class="div">
                    @if(Session::has('text'))                                       
                        <img src="{{Session::get('fullUrl')}}" alt="votre image ici" class="mx-auto d-block img-fluid" style=" margin-top:10px; margin-left:20px !important; border:2px solid black;">
                    @else
                        <img src="images/upload-social-media.png" alt="votre image ici" style="max-width: 400px; max-height: 400px;"  class="mx-auto d-block img-fluid">
                    @endif
    
                </div>
                
            </div>
            <div class="col-6">
                <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
                    <div class="panel panel-info" >
                            <div class="panel-heading">
                                <div class="panel-title">Upload</div>
                            </div>     
        
                            <div style="padding-top:30px" class="panel-body" >
        
                                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                                    
                                <form method="post" action="{{route('upload')}}"  enctype="multipart/form-data" class="form-horizontal" role="form">
                                            @csrf
                                    <div style="margin-bottom: 25px" class="input-group">
                               <input type="file" name="image" />                                     
                                            </div>
                                        
                                  
        
                                        
                                  
        
        
                                        <div style="margin-top:10px" class="form-group">
                                            <!-- Button -->
        
                                            <div class="col-sm-12 controls">
                                             <input type="submit" class="btn btn-success">
                                        
        
                                            </div>
                                        </div>
        
                                        
        
                                         
                                    </form>     
        
        
        
                                </div>                     
                            </div>  
                </div>
            </div>
          </div>
        </div>

        <div class="col-4">
            
            <div style="margin-top:10px; margin-right:10px" class="form-group">
                <!-- Button -->

                <div class="col-sm-12 controls" style="border:2px solid black; min-height: 200px">
                    <label>Your Text:</label></br>
            
                    @if(Session::has('text'))
                   {{Session::get('text')}}
                    @endif

                </div>
            </div>

        </div>
      </div>   

</body>
</html>


   