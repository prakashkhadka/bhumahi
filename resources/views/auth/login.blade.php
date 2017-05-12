@extends('layouts.masterLayout.home')


@section('content')
<div class="content-section">

      <!-- =-=-=-=-=-=-= Transparent Breadcrumb End =-=-=-=-=-=-= -->
      <!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
      <div class="main-content-area clearfix">
         <!-- =-=-=-=-=-=-= Latest Ads =-=-=-=-=-=-= -->
         <section class="section-padding error-page pattern-bg ">
            <!-- Main Container -->
            <div class="container">
               <!-- Row -->
               <div class="row">
                  <!-- Middle Content Area -->
                  <div class="col-md-5 col-md-push-7 col-sm-6 col-xs-12">
                     <!--  Form -->
                     <div class="form-grid">
                        <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                           
                           <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">Email (इमेल एड्रेस)</label>

                            <div>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>


                           

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password">(पासवर्ड)</label>

                                <div>
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                           <div class="form-group">
                              <div class="row">
                                 <div class="col-xs-12">
                                    <div class="skin-minimal">
                                       <ul class="list">
                                          <li>
                                             <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                             <label for="minimal-checkbox-1">Remember Me</label>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <button type="submit" class="btn btn-theme btn-lg btn-block">लगइन गर्नुहोस</button>
                           
                           <button class="btn btn-theme btn-sm btn-block">
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                           </button>
                        </form>
                     </div>
                     <!-- Form -->
                  </div>
                  <div class="col-md-7  col-md-pull-5  col-xs-12 col-sm-6">
                     <div class="heading-panel">
                        <h3 class="main-title text-left">
                           आफ्नो एकाउण्टमा लगइन गर्नुहोस    
                        </h3>
                     </div>
                     <div class="content-info">
                        <div class="features">
                           <div class="features-icons">
                              <img src="images/icons/chat.png" alt="img">
                           </div>
                           <div class="features-text">
                              <h3>Chat & Messaging</h3>
                              <p>
                                 Access your chats and account info from any device.
                              </p>
                           </div>
                        </div>
                        <div class="features">
                           <div class="features-icons">
                              <img src="images/icons/panel.png" alt="img">
                           </div>
                           <div class="features-text">
                              <h3>User Dashboard</h3>
                              <p>
                                 Maintain a wishlist by saving your favourite items.
                              </p>
                           </div>
                        </div>
                        <span class="arrowsign hidden-sm hidden-xs"><img src="images/arrow.png" alt="" ></span>
                     </div>
                  </div>
                  <!-- Middle Content Area  End -->
               </div>
               <!-- Row End -->
            </div>
            <!-- Main Container End -->
         </section>
         </div>
         </div>
         <!-- =-=-=-=-=-=-= Ads Archives End =-=-=-=-=-=-= -->
@stop
