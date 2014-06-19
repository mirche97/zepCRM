@include('layouts.private-head')

    <body>
        <!-- section header -->
        <header class="header" data-spy="affix" data-offset-top="0">
            <!--nav bar helper-->
            <div class="navbar-helper">
                <div class="row-fluid">
                    <!--panel site-name-->
                    <div class="span1">
                        <div class="panel-sitename">
                            
                            <h2><a href="/dashboard"><img src="../img/logo-sommite.png"></a></h2>
                             <h2><a href="/dashboard">{{HTML::image('/img/logo-sommite.png')}}</a></h2>
                        </div>
                    </div>
                    <!--/panel name-->

                    <div class="span10">
                       
                           <!--  @render('private.base.navigation') -->
                        
                        
                    </div>
                    <div class="span1 color-white">
                       <!--  {{ _t('User')}}: -->

                       <!--  @if(Session::has('o'))
                        <a href="#" title="{{_t('Back to own account')}}" id="logback"> {{ User::find(Session::get('o'))->username}}</a> (as <a href="#modal_login_as" data-toggle="modal" title="{{_t('Login as another user')}}">{{Session::get('u')}}</a>)
                        @else
                            @if (has_access('login', 'as', Session::get('i')))
                                <a href="#modal_login_as" data-toggle="modal" title="{{_t('Login as another user')}}">{{Session::get('u')}}</a>
                            @else
                                {{Session::get('u')}}
                            @endif
                        @endif -->

                    </div>

                </div>
            </div><!--/nav bar helper-->
        </header>

        <!-- section content -->
        <section class="section">
            <div class="row-fluid">
                <!-- span side-left -->
                <div class="span1">
                    
                      <!--   @include('layouts.private-sidebar-left') -->
                   
                </div><!-- span side-left -->

                <!-- span content -->
                <div class="span11" id="content-span">
                    <!-- content -->
                    <div class="content">
                        <!-- content-body -->
                        <div class="content-body">
                            @yield('content')
                        </div><!--/content-body -->
                    </div><!-- /content -->
                </div><!-- /span content -->



            </div>
        </section>

        <!-- section footer -->
        <footer>
            <a rel="to-top" href="#top"><i class="icofont-circle-arrow-up"></i></a>
        </footer>
       <!--  @include('layouts.private-footer')
         @render('private.base.csrf')
         @include('layouts.modal-busy')

         @if (has_access('login', 'as', Session::get('i')) || Session::has('o'))
           @include('private.login._modal_as')
         @endif -->
         </body>
</html>
