        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ url('dashboard')}}">
                        <!-- Logo icon -->
                        <b>
                            @if(file_exists(public_path().'/uploads/images/'.config('sximo')['cnf_logo']) && config('sximo')['cnf_logo'] !='')
                              <img src="{{ asset('uploads/images/'.config('sximo')['cnf_logo'])}}" alt="{{ config('sximo')['cnf_appname'] }}" width="40" />
                            @else
                              <img src="{{ asset('')}}assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            @endif

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="dark-logo" style=" font-weight: 500; padding-left: 10px;">
                            {{ config('sximo.cnf_appname') }} 
                        </span> 
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item "> 
                            <a class="nav-link  waves-effect waves-dark" target="_blank" href="{{  url('')}}">
                                <i class="icon-globe"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        

                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>
                                <?php $notes = SiteHelpers::getNotification();?>
                                @if($notes['total'] >=1)
                                <div class="notify"> 
                                <span class="heartbit"></span> <span class="point"></span> 
                                </div>
                                @endif
                            </a> 
                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            @foreach($notes['rows'] as $note)
                                            <a href="{{ url( $note->url ) }}">
                                                <div class="btn btn-danger btn-circle">
                                                    @if($note->icon =='')
                                                    <i class="ti-bell"></i>
                                                    @else 
                                                    <i class="{{ $note->icon }}"></i>
                                                    @endif
                                                </div>
                                                <div class="mail-contnet">
                                                    <h5>{{ $note->title }}</h5> <span class="mail-desc">
                                                        {{ $note->note }}
                                                    </span> <span class="time"> {{ date("M, d  H:i",strtotime($note->created)) }} </span> </div>
                                            </a>
                                             @endforeach
                                            
                                        </div>
                                    </li>
                                   
                                    <li>
                                        <a class="nav-link text-center" href="{{ url('notification') }}"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                         @if(Auth::user()->group_id == 1 or Auth::user()->group_id == 2 )
                        <li class="nav-item dropdown mega-dropdown"> <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-view-grid"></i></a>
                            <div class="dropdown-menu animated bounceInDown">
                                <ul class="mega-dropdown-menu row">
                                     @if(Auth::user()->group_id == 1 )
                                    <li class="col-lg-4 col-xlg-2 m-b-30">
                                        <h4 class="m-b-20"> Control Panel</h4>
                                        <!-- CAROUSEL -->
                                        <ul class="list-style-none">                                   
                                             <li><a href="{{ url('sximo/config')}}"><i class="icon-screen-desktop"></i> {{ Lang::get('core.tab_siteinfo') }}</a> </li> 
                                             <li><a href="{{ url('sximo/config/email')}}"><i class="icon-link"></i> {{ Lang::get('core.tab_email') }}</a> </li> 
                                             <li><a href="{{ url('sximo/config/security')}}"><i class="icon-lock"></i> {{ Lang::get('core.tab_loginsecurity') }}</a> </li> 
                                             <li><a href="{{ url('sximo/config/translation')}}"><i class="icon-map"></i> {{ Lang::get('core.tab_translation') }}</a> </li>  
                                             <li> <a href="{{ url('sximo/config/clearlog')}}" class="clearCache"><i class="icon-trash"></i> Clear Log & Caches </a> </li>
                                        </ul>                                       
                                        <!-- End CAROUSEL -->
                                    </li>
                                    @endif
                                    @if(Auth::user()->group_id == 1 or Auth::user()->group_id == 2 )
                                    <li class="col-lg-4 m-b-30">
                                        <h4 class="m-b-20">Administrator</h4>
                                        <ul class="list-style-none">
                                             <li ><a href="{{ url('core/users')}}"><i class="icon-user"></i> 
                                                {{ Lang::get('core.m_users') }} </a> </li> 
                                                <li ><a href="{{ url('core/groups')}}"><i class="icon-people"></i>  {{ Lang::get('core.m_groups') }}</a> </li>
                                                <li><a href="{{ url('core/users/blast')}}"><i class="icon-envelope"></i> Send Mail</a></li> 
                                                <li><a href="{{ url('cms/pages')}}"><i class="icon-notebook"></i> {{ Lang::get('core.m_pagecms')}}</a></li> 
                                                <li ><a href="{{ url('cms/posts')}}"><i class="icon-docs"></i> Post Management</a></li>   
                                                 <li><a href="{{ url('core/logs')}}"><i class="icon-clock"></i> {{ Lang::get('core.m_logs') }}</a></li>
                                        </ul>
                                        
                                    </li>
                                    @endif
                                    @if(Auth::user()->group_id == 1  )
                                    <li class="col-lg-4  m-b-30">
                                        <h4 class="m-b-20">Supeadmin</h4>
                                        <!-- Contact -->
                                        <ul class="list-style-none">

                                    <li><a href="{{ url('sximo/module')}}"><i class="icon-fire"></i> Module {{ Lang::get('core.m_codebuilder') }}</a>  </li>
                                    <li><a href="{{ url('sximo/menu')}}"><i class="icon-menu"></i> {{ Lang::get('core.m_menu') }}</a> </li>              
                                    <li><a href="{{ url('sximo/tables')}}"><i class="ti-view-list"></i> {{ Lang::get('core.m_database') }} </a> </li>
                                    <li> <a href="{{ url('sximo/code')}}"><i class="icon-note"></i> {{ Lang::get('core.m_sourceeditor') }}</a>  </li>  
                                    <!--          
                                    <li><a href="{{ url('core/forms')}}"><i class="icon-list"></i> {{ Lang::get('core.m_formbuilder') }}</a> </li> -->
                                     <li><a href="{{ url('core/elfinder')}}"><i class="icon-folder"></i>  File Manager</a>  </li>
                                    <!--
                                    <li ><a href="{{ url('sximo/rac')}}"><i class="icon-shuffle"></i> RestAPI Generator </a> </li> -->
                                        </ul>
                                    </li>
                               
                                   
                                   
                                     @endif
                                </ul>
                            </div>
                        </li>
                         @endif
                        @if($sximoconfig['cnf_multilang'] ==1)
                         <li class="nav-item dropdown  hidden-xs-down">
                          <?php 
                          $flag ='en';
                          $langname = 'English'; 
                          foreach(SiteHelpers::langOption() as $lang):
                            if($lang['folder'] == session('lang') or $lang['folder'] == $sximoconfig['cnf_lang']) {
                              $flag = $lang['folder'];
                              $langname = $lang['name']; 
                            }
                            
                          endforeach;?>
                          <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="flag-lang" src="{{ asset('assets/plugins/images/flags/'.$flag.'.png') }}" width="16" height="16" alt="lang" /> </a>

                          <div class="dropdown-menu dropdown-menu-right animated bounceInDown">
                             @foreach(SiteHelpers::langOption() as $lang)
                             <a class="dropdown-item" href="{{ url('home/lang/'.$lang['folder'])}}">
                                <img class="flag-lang" src="{{ asset('assets/plugins/images/flags/'. $lang['folder'].'.png')}}" width="16" height="16" alt="lang"  /> {{  $lang['name'] }}
                               </a>

                            @endforeach 


                          </div>
                        </li>  
                        @endif 

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{!! SiteHelpers::avatar( 36 ) !!}</a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img">{!! SiteHelpers::avatar( 20 ) !!}</div>
                                            <div class="u-text">
                                                <h4>{{ Session::get('fid')}}</h4>
                                                <p class="text-muted"><a >{{ Session::get('eid')}}</a></p><a href="pages-profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="{{ url('user/profile')}}"><i class="ti-user"></i> My Profile</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="{{ url('user/logout')}}" class="confirmLogout"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>