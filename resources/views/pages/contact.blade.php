@extends('layouts.welcome')
@section('content')
<!-- page-header -->
<div class="page-header">
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
                <a name="contact"></a>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 mb30">
                    <div class="mb30">
                        <h2>The future is yours, Let’s talk.</h2>
                        <p>If you have any questions, just fill in the contact form.</p>
                    </div>
                    <div class="row">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                                @endif
                            @if(session()->has('message.level'))
                            <div class="alert alert-{{ session('message.level') }}">
                            {!! session('message.content') !!}
                            </div>
                        @endif
                        <form method="post" action="{{ route('contact.store')}}">
                            <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label sr-only" ></label>
                                    <input type="text" name="fullname" placeholder="Name" class="form-control" value="{{ $_POST['fullname'] ?? ''}}{{ old('fullname')}}" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label sr-only"></label>
                                    <input type="number" name="phone" placeholder="Phone" class="form-control" value="{{$_POST['phone'] ?? ''}}{{ old('phone')}}"  required>

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label sr-only"></label>
                                    <input type="email" name="email" placeholder="Email" class="form-control" value="{{ $_POST['email'] ?? ''}}{{ old('email')}}" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label class="control-label sr-only"></label>

                                        <select id="select" name="insurance_type" class="  form-control">
                                                <option value="">Select Coverage Type</option>
                                                <option value="1" {{ (isset($_POST['insurance_type']) && $_POST['insurance_type'] ==1) ? 'selected' : '' }}{{ (old('insurance_type')==1)? 'selected' : ''}}>Life Insurance</option>
                                                <option value="2" {{ (isset($_POST['insurance_type']) && $_POST['insurance_type'] ==2) ? 'selected' : '' }}{{ (old('insurance_type')==2)? 'selected' : ''}}>General Insurance</option>
                                             </select>
                                    </div>
                                </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                <div class="form-group">
                                    <label class="control-label sr-only"></label>
                                    <textarea class="form-control" name="message" rows="4" placeholder="Messages">{{ old('message')}}</textarea>
                                </div>
                                <button type="submit" name="singlebutton" class="btn btn-default">submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                    <div class="contact-block">
                        <div class="contact-title">
                            <h4 class="mb0">How to Find Us</h4></div>
                        <div class="">
                            <div class="contact-content">
                                <span class="contact-icon"><i class="fa fa-map-marker"></i></span>
                                <span class="contact-text">@include('includes.address')</span></div>

                            <div class="contact-content"> <span class="contact-icon"><i class="fa fa-phone"></i></span>
                                <span class="contact-text">0120-6846100</span></div>
                            <div class="contact-content"> <span class="contact-icon"><i class="fa fa-envelope"></i></span>
                                <span class="contact-text"><a href="mailto:contact@djtinsurance.in"> contact@djtinsurance.in</a></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
