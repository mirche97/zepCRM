<!DOCTYPE html>
<html lang="en">
    <head>
        @include('private.layouts.head')
    </head>    
    <body>
        <!-- section header -->
        <header class="header" data-spy="affix" data-offset-top="0">
            @include('private.layouts.header')
        </header>
        <nav>
            @include('private.layouts.nav')
        </nav>
        <!-- section content -->
        <section class="section">
             @yield('content')
        </section>

        <!-- section footer -->
        <footer>
            <a rel="to-top" href="#top"><i class="icofont-circle-arrow-up"></i></a>
        </footer>
        <aside class="side-left">
            @include('private.layouts.aside')
        </aside>
         </body>
</html>
