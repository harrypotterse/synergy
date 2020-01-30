<div class="height-emulator fl-wrap"></div>
<footer class="main-footer fixed-footer">
    <div class="container">
        <div class="footer-inner fl-wrap">
            <div class="row">
                <div class="col-md-6">

                    <form action="{{ route('contact') }}" id="contactform" method="post" enctype="multipart/form-data" class="custom-form" >

                        @csrf
                        <fieldset>
                            <div class="row">
                                <div class="col-md-6">
                                    <label><i class="fal fa-user"></i></label>
                                    <input type="text" name="Name" id="name"
                                        placeholder="{{trans('programming.name')}} *" value="">
                                </div>
                                <div class="col-md-6">
                                    <label><i class="fal fa-envelope"></i> </label>
                                    <input type="text" name="Email" id="email"
                                        placeholder="{{trans('programming.Email')}} *" value="">
                                </div>
                            </div>
                            <textarea name="message" id="comments" cols="40" rows="3"
                                placeholder="{{trans('programming.message')}}:"></textarea>
                            <div class="clearfix"></div>
                            <button class="" type="submit" id="submit">{{trans('programming.Send')}}</button>
                        </fieldset>
                    </form>
                    <div class="container">
                        @if(session()->has('alert-success'))
                        <div class="alert alert-success">
                            {{ session()->get('alert-success') }}
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer-title fl-wrap">
                        <span>002.</span>
                        {{trans('programming.Connect with us')}}
                    </div>
                    <div class="footer-box-item fl-wrap">
                        <p>{{trans('programming.Response')}}.</p>
                        <div class="subcribe-form fl-wrap">
                        </div>
                        <!-- footer-contacts-->
                        <div class="footer-contacts fl-wrap">
                            <ul>
                                <li><i class="fal fa-phone"></i><span>{{trans('programming.mobile')}} :</span><a
                                        href="#">+123344444</a></li>
                                <li><i class="fal fa-envelope"></i><span>{{trans('programming.Email')}} :</span><a
                                        href="#">INFO@RAYAAN.com</a>
                                </li>
                                <li><i class="fal fa-map-marker"></i><span>{{trans('programming.Address')}}</span><a
                                        href="#">KSA</a></li>
                            </ul>
                        </div>
                        <!-- footer end -->
                    </div>
                </div>
            </div>
        </div>
        <div class="subfooter fl-wrap">
            <!-- policy-box-->
            <div class="policy-box">
                <span>&#169; 2019 شركه ريان - جميع الحقوق محفوظه. </span>
            </div>
            <!-- policy-box end-->
            <div class="to-top to-top-btn color-bg"><span>{{trans('programming.top')}}</span></div>
        </div>
    </div>
    <div class="sec-lines"></div>
    <div class="footer-canvas">
        <div class="dots gallery__dots" data-dots=""></div>
    </div>
</footer>