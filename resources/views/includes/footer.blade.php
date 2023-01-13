<div class="footer-content-area ">
    <div class="container">
        <div class="row ">
            <div class="col-12 col-lg-4 col-md-6">
                <div class="footer-copywrite-info">
                    <!-- Copywrite -->
                    <div class="copywrite_text fadeInUp" data-wow-delay="0.2s">
                        <div class="footer-logo"><a href="#"><img src="{{ isset($navbar->logo) ? asset('storage/' . $navbar->logo) : 'img/core-img/logopng.png'}}"  style="width: 30%; height: 30px; " alt="logo">  </a></div>
                        <p>Raqamli ta'lim texnologiyalar markazi o'ziga belgilangan vazifani sitqidildan amalga oshirishga harakat qiladi.</p>
                    </div><!-- Social Icon -->
                    <div class="footer-social-info fadeInUp" data-wow-delay="0.4s"><a href="{{$footer->facebook}}"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="{{$footer->twitter}}"> <i class="fa fa-twitter" aria-hidden="true"></i></a><a href="{{$footer->google_plus}}"><i
                              class="fa fa-google-plus" aria-hidden="true"></i></a><a href="{{$footer->instagram}}"><i class="fa fa-instagram" aria-hidden="true"></i></a><a href="{{$footer->linkedin}}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-6">
                <div class="contact_info_area d-sm-flex justify-content-between">
                    <!-- Content Info -->
                    <div class="contact_info mt-x text-center fadeInUp" data-wow-delay="0.3s">
                        <h5>{{__('MAXFIYLIK')}}</h5><a href="">
                            <p>{{__('Reklama beruvchi shartnomasi')}}</p>
                        </a><a href="">
                            <p>{{__('Qabul qilinadigan foydalanish siyosati')}}</p>
                        </a><a href="">
                            <p>{{__('Maxfiylik siyosati')}}</p>
                        </a><a href="">
                            <p>{{__('Texnologiyaning maxfiyligi')}}</p>
                        </a><a href="">
                            <p>{{__('Dasturchi shartnomasi')}}</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-2 col-md-6 ">
                <!-- Content Info -->
                <div class="contact_info_area d-sm-flex justify-content-between">
                    <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.2s">
                        <h5>{{__('Navigatsiya')}}</h5><a href="">
                      <a href="{{ route('home-page.index_1') }}">
                          <p>{{$navbar->home ?? ''}}</p>
                      </a>
                      <a href="{{ route('about-us-page') }}">
                          <p>{{$navbar->about_us ?? ''}}</p>
                      </a>
                      <a href="{{ route('services-page') }}">
                          <p>{{$navbar->services ?? ''}}</p>
                      </a>
                      <a href="{{ route('faq-page') }}">
                          <p>{{$navbar->faq ?? ''}}</p>
                      </a>
                      <a href="{{ route('contact-us-page') }}">
                          <p>{{$navbar->contact ?? ''}}</p>
                      </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-6 ">
                <div class="contact_info_area d-sm-flex justify-content-between">
                    <!-- Content Info -->
                    <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.4s">
                        <h5>{{__('BIZ BILAN BOGLANISH')}}</h5>
                        <p>{{$footer->mail_address ?? ''}}</p>
                        <p>{{$footer->address ?? ''}}</p>
                        <p>{{$footer->phone ?? ''}}</p>
                        <p>{{$footer->email ?? ''}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
