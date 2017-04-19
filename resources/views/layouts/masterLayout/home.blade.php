<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
      <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <![endif]-->
      <meta name="description" content="">
      <meta name="author" content="ScriptsBundle">
      <title>सुनवल नगर</title>
      
      @include('layouts.masterLayout.styles')
      
   </head>
   <body>

      <!-- =-=-=-=-=-=-= Preloader =-=-=-=-=-=-= -->
      <!--
      <div id="loader-wrapper">
         <div id="loader"></div>
         <div class="loader-section section-left"></div>
         <div class="loader-section section-right"></div>
      </div>
      -->

      @include('layouts.masterLayout.colorSwitcher')

      @include('layouts.masterLayout.topBar')
      
      @include('layouts.masterLayout.topNavigation')
   
      @include('layouts.masterLayout.heroSection')

      
      @yield('categories')
      
      
      @include('layouts.masterLayout.footer')

      @include('layouts.masterLayout.sticky')

      @include('layouts.masterLayout.javascripts')

   </body>
</html>