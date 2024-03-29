<footer class="page-foot text-center text-lg-left footer-light context-dark">
    <section class="section-top-45 section-bottom-40">
        <div class="shell">
            <div class="range range-xs-center">
                <div class="cell-sm-8 cell-md-10 cell-lg-6">
                    <div class="group-md">
                        <h5 class="text-italic font-secondary">Subscribe</h5>
                        <span>Get the latest updates and offers</span>
                    </div>
                    <div class="offset-top-15">
                        <div class="form-box-shadow">
                            <form data-form-output="form-output-global" data-form-type="subscribe" method="post"
                                  action="#"
                                  class="rd-mailform form-subscribe form-inline-flex-xs">
                                <div class="form-group">
                                    <input placeholder="Your Email" type="email" name="email"
                                           class="form-control">
{{--                                    <input placeholder="Your Email" type="email" name="email"--}}
{{--                                           data-constraints="@Required @Email" class="form-control">--}}
                                </div>
                                <button type="submit" class="btn btn-primary btn-shape-circle">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="cell-sm-6 cell-md-4 cell-lg-3 offset-top-30 offset-top-50 offset-lg-top-0">
                    <h5 class="text-italic font-secondary">Follow Us</h5>
                    <ul class="list-inline offset-top-15">
                        <li><a href="{{$siteSetting->instagramUrl}}"><span
                                    class="icon icon-sm icon-circle icon-gray icon-social fa-instagram"></span></a>
                        </li>
                        <li><a href="{{$siteSetting->facebookUrl}}"><span
                                    class="icon icon-sm icon-circle icon-gray icon-social fa-facebook"></span></a>
                        </li>
                        <li><a href="{{$siteSetting->yelpUrl}}"><span
                                    class="icon icon-sm icon-circle icon-gray icon-social fa-yelp"></span></a>
                        </li>
                    </ul>
                </div>
                <div class="cell-sm-6 cell-md-4 cell-lg-3 offset-top-50 offset-lg-top-0">
                    <h5 class="text-italic font-secondary">Contact Us</h5>
                    <div class="unit unit-sm-horizontal unit-sm-top unit-spacing-xs offset-top-15">
                        <div class="unit-left"><span
                                class="icon icon-md-mod-1 icon-default mdi mdi-phone text-middle"></span></div>
                        <div class="unit-body">
                            <address class="contact-info"><a href="callto:#" class="link-white link-lg">{{$siteSetting->forOrder}}</a></address>
                            <span class="contact-info">We work  {!!  $siteSetting->openingHours!!}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="shell">
            <hr>
        </div>
        <div class="shell section-20">
            <div class="range range-xs-center">
                <div class="cell-md-5 text-center">
                    <p class="copyright">
                        {{config('app.name')}}
                        &nbsp;&#169;&nbsp;<span id="copyright-year"></span>&nbsp;<br class="veil-sm">Powered By
                        <a href="https://techbizzsoft.com">Techbizz</a>
                        <!-- {%FOOTER_LINK}-->
                    </p>
                </div>
            </div>
        </div>
    </section>

</footer>
