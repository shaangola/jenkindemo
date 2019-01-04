@extends('layouts.welcome')
@section('content')
<!-- page-header -->
<div class="page-header-services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-caption">

                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.page-header-->
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                <div class="service-data  mb30">
                        <h2>Services</h2>
                    <ul id="nestedlist">
                        <li>

                            <ul>
                                <li>
                                    <a href="#"><h4>Life Insurance</h4></a>
                                    <ul>
                                        <li><a href="#">Endowment Policies </a></li>
                                        <li><a href="#">Term Policies</a></li>
                                        <li><a href="#">Money Back Policies</a></li>
                                        <li><a href="#">Annuities Plans</a></li>

                                    </ul>
                                </li>
                                <li><h4></h4></li>
                                <li>
                                    <a href="#"><h4>General Insurance</h4></a>
                                    <ul>
                                        <li><a href="#">Fire Insurance </a></li>
                                        <li><a href="#">Marine Insurance</a></li>
                                        <li><a href="#">Project Insurance</a></li>
                                        <li><a href="#">Motor Insurance</a></li>
                                        <li><a href="#">Health Insurance</a></li>
                                        <li><a href="#">Accident Insurance</a></li>
                                        <li><a href="#">Overseas Mediclaim/Travel Insurance</a></li>
                                        <li><a href="#">Householders Insurance</a></li>
                                        <li><a href="#">Liability Insurance</a></li>
                                        <li><a href="#">Money Insurance</a></li>
                                        <li><a href="#">Business related Insurance</a></li>
                                        <li><a href="#">Consequential Loss Insurance</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

                <!-- Form-section -->
                <div class="form-widget mb30">
                    <h3>Get A Quote Now</h3>
                    <form method="post" action="{{url('submit')}}#contact">
                        <div class="form-group">
                            <label class="control-label sr-only "></label>
                            <input id="name" name="fullname" type="text" placeholder="Name" class="form-control"
                                required>
                        </div>
                        <div class="form-group">
                            <label class="control-label sr-only "></label>
                            <input type="email" name="email" placeholder="Email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label sr-only"></label>
                            <input id="phone" type="number" name="phone" placeholder="Moble" class="form-control"
                                required>
                        </div>
                        <div class="form-group">
                            <label class="control-label required sr-only"></label>
                            <div class="select">
                                <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                                <select id="select" name="insurance_type" class="  form-control">
                                    <option value="">Select Coverage Type</option>
                                    <option value="1" {{ (isset($_POST['insurance_type']) &&
                                        $_POST['insurance_type']==1) ? 'selected' : '' }}>Life Insurance</option>
                                    <option value="2" {{ (isset($_POST['insurance_type']) &&
                                        $_POST['insurance_type']==2) ? 'selected' : '' }}>General Insurance</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" name="singlebutton" class="btn btn-primary btn-block ">Submit</button>
                    </form>
                    <!-- /.form-section -->
                </div>
                <div class="contact-block">
                    <div class="contact-title">
                        <h4 class="mb0">How to Find Us</h4>
                    </div>
                    <div class="">
                        <div class="contact-content">
                            <span class="contact-icon"><i class="fa fa-map-marker"></i></span>
                            <span class="contact-text">@include('includes.address')</span></div>

                        <div class="contact-content"> <span class="contact-icon"><i class="fa fa-phone"></i></span>
                            <span class="contact-text">0120-6846100</span></div>
                        <div class="contact-content"> <span class="contact-icon"><i class="fa fa-envelope"></i></span>
                            <span class="contact-text"><a href="mailto:contact@djtinsurance.in">contact@djtinsurance.in</a></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
