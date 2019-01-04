<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="row">
            <!-- footer-contact -->
            <div class=" col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="footer-widget">
                    <h3 class="footer-title">Contact us</h3>
                    <div class="ft-contact-info">
                        <span class="ft-contact-icon"><i class="fa fa-map-marker"></i></span>
                        <span class="ft-contact-text">@include('includes.address')</span></div>
                    <div class="ft-contact-info"> <span class="ft-contact-icon"><i class="fa fa-phone"></i></span>
                        <span class="ft-contact-text">0120-6846100</span></div>
                    <div class="ft-contact-info"> <span class="ft-contact-icon"><i class="fa fa-paper-plane"></i></span>
                        <span class="ft-contact-text"><a href="mailto:contact@djtinsurance.in">contact@djtinsurance.in</a></span></div>

                </div>
            </div>
            <!-- /.footer-contact -->
            <!-- footer-quick-links -->
            <div class=" col-lg-offset-1 col-lg-3 col-md-offset-1 col-md-3 col-sm-12 col-xs-12">
                <div class="footer-widget">
                    <h3 class="footer-title">DJT License Information</h3>
                    <ul>
                        <li>Broking Company name : <br><span class="highlighted">DJT Insurance Brokers Pvt. Ltd.</span></li>
                        <li>License no. : <span class="highlighted">625<span></li>
                        <li>Categories of insurance provided :<br> <span class="highlighted">Direct ( Life & General)</span></li>
                        <li>License To- From dates : <br><span class="highlighted">26 OCT 2017 to 25 OCT 2020</span></li>
                        <li>CIN : <br><span class="highlighted">U66020UP2017PTC092043</span></li>
                    </ul>
                </div>
            </div>
            <!-- /.footer-quick-links  -->
            <!-- footer-quick-links -->
            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                <div class="footer-widget hide">
                    <h3 class="footer-title">Insurance</h3>
                    <ul>
                        <li><a href="#">Home Insurance</a></li>
                        <li><a href="#">Car Insurance</a></li>
                        <li><a href="#">Business Insurance</a></li>
                        <li><a href="#">Health Insurance</a></li>
                        <li><a href="#">Travel Insurance</a></li>
                        <li><a href="#">Investment Insurance</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.footer-quick-links  -->
            <!-- newsletter -->
            <div class="col-lg-offset-1 col-lg-3 col-md-offset-1 col-md-3 col-sm-12 col-xs-12">
                    <div class="footer-widget">
                            <h3 class="footer-title">Quick Links</h3>
                            <ul>
                                    <li><a href="{{ url('/careers') }}">Careers</a></li>
                                </ul>
                        </div>
                <div class="footer-widget">
                    <h3 class="footer-title">Want to receive free advice?</h3>
                    @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                                @endif
                    @if(session()->has('message.sublevel'))
                            <div class="alert alert-{{ session('message.sublevel') }}">
                            {!! session('message.subcontent') !!}
                            </div>
                        @endif
                    <form method="POST" action="{{action('ContactController@subscriber')}}">
                            <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                        <!-- input-group -->
                        <div class="form-group">
                            <input type="email" class="form-control footer-form mb10" name="contact_email"  placeholder="Enter email id">
                            <button type="submit" name="singlebutton" class="btn btn-default btn-xs">submit</button>
                        </div>
                        <!-- /.input-group -->
                    </form>
                </div>
            </div>
            <!-- /.newsletter -->
        </div>
        <!-- tiny-footer -->
    </div>
    <div class="tiny-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <span class="mb10">Insurance is a subject matter of solicitation.</span>
                    <p>Copyright © All Rights Reserved
                        <?php echo date('Y')?> Website Design by
                        <a href="{{ url('/') }}" class="copyrightlink">DJT CORP</a>
                        <a href="https://easetemplate.com/" target="_blank" class="copyrightlink hide">EaseTemplate</a></p>
                </div>
            </div>
            <!-- /. tiny-footer -->
        </div>
    </div>
</div>
<!-- /.footer -->
