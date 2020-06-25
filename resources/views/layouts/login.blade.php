<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{config('sximo.cnf_appname') }}</title>
<link rel="shortcut icon" href="{{ asset('favicon.ico')}}" type="image/x-icon">
    

    <link href="{{ asset('')}}assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('')}}assets/plugins/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" rel="stylesheet">
    <!--c3 CSS -->
    <link href="{{ asset('')}}assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('')}}assets/css/style.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="{{ asset('')}}assets/css/legacy.css" rel="stylesheet">

    <!-- Sximo 5 Main CSS -->



<!--<link href="{{ asset('sximo5/css/sximo.css')}}" rel="stylesheet"> -->
    <script src="{{ asset('')}}assets/plugins/moment/moment.js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/sximo.min.js') }}"></script>
    <script src="{{ asset('')}}assets/plugins/jquery-asColor/dist/jquery-asColor.js"></script>
    <script src="{{ asset('')}}assets/plugins/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>    
    <script type="text/javascript" src="{{ asset('assets/js/sximo5.js') }}"></script>


    <script src='https://www.google.com/recaptcha/api.js'></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->  

    
  
    </head>
<body >

     <section id="wrapper" class="login-register login-sidebar" style="background-image:url({{ asset('') }}assets/images/background/login.jpg);">

        <div class="login-box card" style="border-radius: 0; border:none;">
            <div class="card-body">
                 <a href="javascript:void(0)" class="text-center db">

                    @if(file_exists(public_path().'/uploads/images/'.config('sximo')['cnf_logo']) && config('sximo')['cnf_logo'] !='')
                            <img src="{{ asset('uploads/images/'.config('sximo')['cnf_logo'])}}" alt="{{ config('sximo')['cnf_appname'] }}" width="90" />
                            @else
                            <img src="{{ asset('uploads/logo.png')}}" alt="{{ config('sximo')['cnf_appname'] }}" width="100" />
                            @endif


                </a>
                <div class="p-2 text-center" >
                    <h3>{{ config('sximo.cnf_appname') }} </h3>
                    <b style="text-transform:uppercase " class="mt-2"  > {{ config('sximo.cnf_appdesc') }}  </b></div>
                  @yield('content') 
            </div>
        </div>    
    </section>    
    
<!--
    <div class="login-page">
        <div class="wrapper">
             <div class="login-box">
                
                        <div >
                        @if(file_exists(public_path().'/uploads/images/'.config('sximo')['cnf_logo']) && config('sximo')['cnf_logo'] !='')
                        <img src="{{ asset('uploads/images/'.config('sximo')['cnf_logo'])}}" alt="{{ config('sximo')['cnf_appname'] }}" width="90" />
                        @else
                        <img src="{{ asset('uploads/logo.png')}}" alt="{{ config('sximo')['cnf_appname'] }}" width="100" />
                        @endif
                            </div>
                        <div class="p-2"><b style="text-transform:uppercase " class="mt-2"  > {{ config('sximo.cnf_appdesc') }}  </b></div>    

                    @yield('content') 
                
            </div>
        </div>    
    </div>
-->

</body> 
</html>