@extends('layouts.welcome')
@section('content')
<div class="hero-section" style="background: url(images/hero_img.jpg) no-repeat;">
    <div class="container">
       <div class="row">
          <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
             <div class="hero-caption">
                <h1 class="hero-title">Get a Quick, Personalized
                   Insurance Quote Today.
                </h1>
                <p class="hero-text">Get instant policy.</p>
                <form method="post" action="{{url('submit')}}#contact">
                   <div class="row">
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 nopr">
                         <div class="form-group">
                            <label class="control-label sr-only  required" for="select"></label>
                            <div class="select">
                                  <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                               <select id="select" name="insurance_type" class="  form-control">
                                  <option value="">Select Coverage Type</option>
                                  <option value="1" >Life Insurance</option>
                                  <option value="2">General Insurance</option>
                               </select>
                            </div>
                         </div>
                      </div>
                      <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12">
                         <button type="submit" name="singlebutton" class=" btn-select btn btn-default">Get a Free Quote</button>
                      </div>
                   </div>
                </form>
             </div>
          </div>
       </div>
    </div>
 </div>
    <!-- service-section -->
    <div class="space-medium bg-light">
        <div class="container">
            <div class="row">
                <!-- section-title -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <h2>Insurance products</h2>
                        <p>So, choose your insurance you want to</p>
                    </div>
                </div>
                <!-- /.section-title -->
            </div>
            <!-- service-block -->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="service-block">
                    <div class="service-icon"><img src="images/home.svg" alt=""></div>
                    <div class="service-content">
                        <h4><a href="{{ url('/contact') }}#contact" class="service-title">Life Insurance</a></h4></div>
                </div>
                <div class="service-quote"><a href="{{ url('/contact') }}#contact" class="text-white">Get A Quote</a></div>
            </div>
            <!-- /.service-block -->
            <!-- service-block -->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="service-block">
                    <div class="service-icon"><img src="images/car.svg" alt=""></div>
                    <div class="service-content">
                        <h4><a href="{{ url('/contact') }}#contact" class="service-title">General Insurance</a></h4></div>
                </div>
                <div class="service-quote"><a href="{{ url('/contact') }}#contact" class="text-white">Get A Quote</a></div>
            </div>
            <!-- /.service-block -->

        </div>
    </div>
    <!-- /.service-section -->
    <!-- cta-section -->
    <div class="cta-wrapper" style="background: url(images/cta_wrapper.jpg) no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                    <div class="cta-section">
                        <h1 class="text-white">How can we help you?</h1>
                        <p class="cta-text"> You can always reach us at: <strong class="text-white">0120-6846100</strong></p>
                        <a href="{{ url('/contact') }}#contact" class="btn btn-primary btn-lg">contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.cta-section -->
            @stop
