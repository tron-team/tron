@extends('/widget/layout')
@section('content')
    <div class="slider-container">
        <div class="slider" id="revolutionSlider" data-plugin-revolution-slider data-plugin-options='{"startheight": 700, "startwidth": 600}'>
            <ul>
                <li data-transition="fade" data-slotamount="13" data-masterspeed="300" >

                    <img src="img/slides/landing-page-slide-1.jpg" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" alt="">

                    <div class="tp-caption sft stb visible-lg"
                         data-x="center" data-hoffset="-150"
                         data-y="240"
                         data-speed="300"
                         data-start="1000"
                         data-easing="easeOutExpo"><img src="img/slides/slide-title-border.png" alt=""></div>

                    <div class="tp-caption top-label lfl stl"
                         data-x="center" data-hoffset="0"
                         data-y="240"
                         data-speed="300"
                         data-start="500"
                         data-easing="easeOutExpo">DO YOU NEED A NEW</div>

                    <div class="tp-caption sft stb visible-lg"
                         data-x="center" data-hoffset="150"
                         data-y="240"
                         data-speed="300"
                         data-start="1000"
                         data-easing="easeOutExpo"><img src="img/slides/slide-title-border.png" alt=""></div>

                    <div class="tp-caption main-label sft stb"
                         data-x="center" data-hoffset="0"
                         data-y="270"
                         data-speed="300"
                         data-start="1500"
                         data-easing="easeOutExpo">WEB DESIGN?</div>

                    <div class="tp-caption bottom-label sft stb"
                         data-x="center" data-hoffset="0"
                         data-y="340"
                         data-speed="500"
                         data-start="2000"
                         data-easing="easeOutExpo">Check out our options and features.</div>

                    <a class="tp-caption customin btn btn-lg btn-primary main-button" data-hash data-hash-offset="85" href="#home-intro"
                       data-x="center" data-hoffset="0"
                       data-y="390"
                       data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                       data-speed="800"
                       data-start="1700"
                       data-easing="Back.easeInOut"
                       data-endspeed="300">
                        Get Started Now!
                    </a>

                </li>
                <li data-slotamount="7" data-masterspeed="1000" data-fstransition="fade" data-fsmasterspeed="1000" data-fsslotamount="7">
                    <img src="video/landing.jpg" alt="landing" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" alt="">

                    <div class="tp-caption tp-fade fadeout fullscreenvideo"
                         data-x="0"
                         data-y="0"
                         data-speed="1000"
                         data-start="100"
                         data-easing="Power4.easeOut"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.1"
                         data-endspeed="1500"
                         data-endeasing="Power4.easeIn"
                         data-autoplay="true"
                         data-autoplayonlyfirsttime="false"
                         data-nextslideatend="true"
                         data-volume="mute"
                         data-forceCover="1"
                         data-aspectratio="16:9"
                         style="z-index: 1"
                         data-forcerewind="on">

                        <video preload="none" width="100%" height="100%" poster="video/landing.jpg">
                            <source src="video/landing.mp4" type="video/mp4" />
                            <source src="video/landing.ogv" type="video/ogg">
                        </video>

                    </div>

                    <div class="tp-caption sft stb visible-lg"
                         data-x="center" data-hoffset="-150"
                         data-y="240"
                         data-speed="300"
                         data-start="1000"
                         style="z-index: 5"
                         data-easing="easeOutExpo"><img src="img/slides/slide-title-border.png" alt=""></div>

                    <div class="tp-caption top-label lfl stl"
                         data-x="center" data-hoffset="0"
                         data-y="240"
                         data-speed="300"
                         data-start="500"
                         style="z-index: 5"
                         data-easing="easeOutExpo">START CREATING YOUR</div>

                    <div class="tp-caption sft stb visible-lg"
                         data-x="center" data-hoffset="150"
                         data-y="240"
                         data-speed="300"
                         data-start="1000"
                         style="z-index: 5"
                         data-easing="easeOutExpo"><img src="img/slides/slide-title-border.png" alt=""></div>

                    <div class="tp-caption main-label sft stb"
                         data-x="center" data-hoffset="0"
                         data-y="270"
                         data-speed="300"
                         data-start="1500"
                         style="z-index: 5"
                         data-easing="easeOutExpo">NEW WEBSITE</div>

                    <div class="tp-caption bottom-label sft stb"
                         data-x="center" data-hoffset="0"
                         data-y="340"
                         data-speed="500"
                         data-start="2000"
                         style="z-index: 5"
                         data-easing="easeOutExpo">Join The 18,000+ Happy Customers :)</div>

                    <a class="tp-caption customin btn btn-lg btn-primary main-button" data-hash data-hash-offset="85" href="#home-intro"
                       data-x="center" data-hoffset="0"
                       data-y="390"
                       data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                       data-speed="800"
                       data-start="1700"
                       data-easing="Back.easeInOut"
                       style="z-index: 5"
                       data-endspeed="300">
                        Get Started Now!
                    </a>

                    <div class="tp-dottedoverlay tp-opacity-overlay"></div>

                </li>
            </ul>
        </div>
    </div>
    <section>
        <div class="container strategy-list">
            <div class="row">
                @foreach( $data->items as $item)
                    <div class="col-md-6 strategy-item">

                        <a href="/strategy/{{ $item->id }}">
												<span class="thumb-info thumb-info-centered-info thumb-info-hide-info-hover">
													<span class="thumb-info-wrapper">
														<img src="{{ $item->bannerNotBorderImg }}" class="img-responsive" alt="">
														<span class="thumb-info-title">
															<span class="thumb-info-inner">{{ $item->title }}</span>
														</span>
													</span>
												</span>
                        </a>


                    </div>
                @endforeach
                    <div class="divider divider-solid divider-style-3 taller">
                        <i class="fa fa-chevron-down"></i>
                    </div>

            </div>
        </div>
    </section>
@stop