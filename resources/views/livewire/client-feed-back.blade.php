<div class="u-s-p-b-90 u-s-m-b-30">

    <!--====== Section Intro ======-->
    <div class="section__intro u-s-m-b-46">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section__text-wrap">
                        <h1 class="section__heading u-c-secondary u-s-m-b-12">CLIENTS FEEDBACK</h1>

                        <span class="section__span u-c-silver">WHAT OUR CLIENTS SAY</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Section Intro ======-->


    <!--====== Section Content ======-->
    <div class="section__content">
        <div class="container">

            <!--====== Testimonial Slider ======-->
            <div>
                <div class="owl-carousel owl-loaded owl-drag" id="testimonial-slider">




                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2040px;">
                            @forelse ($Feeds as $feed)
                            <div class="owl-item active" style="width: 510px;">
                                <div class="testimonial">
                                    <div class="testimonial__img-wrap">
                                        <img class="testimonial__img" src="{{ asset('avatar.svg') }}" alt="">
                                    </div>
                                    <div class="testimonial__content-wrap">
                                        <span class="testimonial__double-quote"><i
                                                class="fas fa-quote-right"></i></span>
                                        <blockquote class="testimonial__block-quote">
                                            <p>{{ $feed->message }}
                                            <p>
                                        </blockquote>
                                        <span class="testimonial__author">{{ $feed->name }}</span>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <div class="owl-item active" style="width: 510px;">
                                <div class="testimonial">
                                    <div class="testimonial__img-wrap">
                                        <img class="testimonial__img" src="{{ asset('avatar.svg') }}" alt="">
                                    </div>
                                    <div class="testimonial__content-wrap">
                                        <span class="testimonial__double-quote"><i
                                                class="fas fa-quote-right"></i></span>
                                        <span class="testimonial__author">No Feedbacks Right Now</span>
                                    </div>
                                </div>
                            </div>
                            @endforelse


                        </div>
                    </div>
                    <div class="owl-nav disabled">
                        <button type="button" role="presentation" class="owl-prev"><span
                                aria-label="Previous">‹</span></button><button type="button" role="presentation"
                            class="owl-next"><span aria-label="Next">›</span></button>
                    </div>
                    <div class="owl-dots">
                        @forelse ( $Feeds as $key => $feed )
                        <button role="button" class="owl-dot {{ $key == 0 ? 'active' :'' }}"><span></span></button>
                        @empty
                        <button role="button" class="owl-dot"><span></span></button>
                        @endforelse</div>
                </div>
            </div>
            <!--====== End - Testimonial Slider ======-->
        </div>
    </div>
    <!--====== End - Section Content ======-->
</div>
