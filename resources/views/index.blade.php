@extends('layouts.masterLayout.home')

@include('layouts.masterLayout.heroSection')

@section('content')
	<div class="main-content-area clearfix">
         <!-- =-=-=-=-=-=-= Categories =-=-=-=-=-=-= -->
         <section class="custom-padding gray">
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <!-- Heading Area -->
                  <div class="heading-panel">
                     <div class="col-xs-12 col-md-12 col-sm-12 text-center">
                        <!-- Main Title -->
                        <h1><span class="heading-color"> वर्गीकृत</span> सामाग्रीहरु हेर्नुहोस</h1>
                        <!-- Short Description -->
                        <p class="heading-text">तलका समुहारु मध्ये आफुले चाहेको समूह छनौट गर्नुहोस</p>
                     </div>
                  </div>
                  <!-- Middle Content Box -->
                  <div class="col-md-12 col-xs-12 col-sm-12 ">
                     <div class="row">
                        <!-- Category List -->
                        <ul class="category-list-style">
                           <!-- Category -->
                           @foreach($categories as $category)
                           <li class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                              <a href="#">{{$category->title}}<span>(897 Ads)</span>
                              <i><img height="60" src="{{URL::asset("categoryImages/{$category->categoryImg}")}}"" alt=""></i>
                              </a> 
                           </li>
                           @endforeach
                        </ul>
                        <!-- Category List End -->    
                     </div>
                  </div>
                  <!-- Middle Content Box End -->
               </div>
               <!-- Row End -->
            </div>
            <!-- Main Container End -->
         </section>
         <!-- =-=-=-=-=-=-= Categories End =-=-=-=-=-=-= -->
        
      </div>
      <!-- Main Content Area End --> 

@stop