<!-- header-section-->
 <div class="header-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                    <div class="logo">
                        <a href="{{ url('/') }}"><img src="images/logo.png" alt=""> </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-10 col-sm-12 col-xs-12">
                    <!-- navigations-->
                    <div class="navigation">
                        <div id="navigation">
                            <ul class="menu">
                                <li class="active"><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('/about') }}">About</a></li>
                                <li><a href="{{ url('/team') }}">Team</a></li>
                                 <li ><a href="{{ url('/services') }}">Services</a></li>
                                {{-- <li ><a href="{{ url('/careers') }}">Careers</a></li> --}}
                                <li><a href="{{ url('/contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.navigations-->
                </div>
                <div class="col-lg-3 hidden-md hidden-sm hidden-xs ">
                    <div class="header-info">
                        <ul>
                            <li>Call us : 0120-6846100</li>
                            <li><a href="{{ url('/contact') }}#contact" class="btn-link">Get A Quote</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /. header-section-->
