
<section class="about-us-area section-padding-100 bub-right clearfix" id="about">

    <div class="container">
        <div class="row align-items-center">


            <div class="col-12 col-lg-12 offset-lg-0">
                <div class="who-we-contant mt-s">
                    <div class="more-dots text-left fadeInUp" data-wow-delay="0.2s">
                        <span class="gradient-text blue">{{$aboutsection->sub_title ?? ''}}</span>
                    </div>
                    <h4 class="wow bold fadeInUp" data-wow-delay="0.3s">{{$aboutsection->title ?? ''}}</h4>
                    <p class="fadeInUp"  data-wow-delay="0.4s">{!! $aboutsection->description ?? ''  !!}</p>
                    <div class="list-wrap align-items-center">
                        <div class="row">
                            @foreach ($aboutfeatures as $key => $feature)
                                <div class="col-md-6">
                                    <div class="side-feature-list-item">
                                        <i class="fa fa-check-square-o check-mark-icon-font" aria-hidden="true"></i>
                                        <div class="foot-c-info">{{$feature->title ?? ''}}</div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <a class="btn more-btn mt-30 fadeInUp" data-wow-delay="0.6s" href="{{ route('about-us-page') }}">Ko'proq o'qing</a>
                </div>
            </div>

        </div>
    </div>
</section>
