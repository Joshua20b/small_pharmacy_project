@extends('frontend.layouts.master')
@section('content')

<!-- hero-area start -->
<section class="hero-area">
    <div class="hero-slider">
        <div class="slider-active">
            <div class="single-slider slider-height d-flex align-items-center"
                data-background="/frontend/img/slider/slider-bg-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-8 col-md-10">
                            <div class="hero-text">
                                <div class="hero-slider-caption ">
                                    <h5 data-animation="fadeInUp" data-delay=".2s">We are here for your care.
                                    </h5>
                                    <h1 data-animation="fadeInUp" data-delay=".4s">Best Care & Better Doctor.
                                    </h1>
                                    <p data-animation="fadeInUp" data-delay=".6s">Innovations in Cancer Treatment: From
                                        immunotherapy to targeted therapies, exploring cutting-edge treatments in
                                        oncology.</p>
                                </div>
                                <div class="hero-slider-btn">
                                    <a data-animation="fadeInLeft" data-delay=".6s" href="{{ route('product') }}"
                                        class="btn btn-icon ml-0"><span>+</span>Make Appointment</a>
                                    {{-- Video link --}}
                                    <a data-animation="fadeInRight" data-delay="1.0s" href="#"
                                        class="play-btn popup-video"><i class="fas fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-height d-flex align-items-center"
                data-background="/frontend/img/slider/slider-bg-2in1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-8 col-md-10">
                            <div class="hero-text">
                                <div class="hero-slider-caption ">
                                    <h5 data-animation="fadeInUp" data-delay=".2s">We are here for your care.
                                    </h5>
                                    <h1 data-animation="fadeInUp" data-delay=".4s">Best Care & Better Doctor.
                                    </h1>
                                    <p data-animation="fadeInUp" data-delay=".6s">Pandemics Through History: Examining
                                        major pandemics throughout history and lessons learned for modern healthcare.
                                    </p>
                                </div>
                                <div class="hero-slider-btn">
                                    <a data-animation="fadeInLeft" data-delay=".6s" href="{{ route('product') }}"
                                        class="btn btn-icon ml-0"><span>+</span>Make Appointment</a>
                                    <a data-animation="fadeInRight" data-delay="1.0s"
                                        href="https://www.youtube.com/watch?v=eXQgPCsd83c"
                                        class="play-btn popup-video"><i class="fas fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- hero-area end -->
<!-- about-area start -->
<section class="about-area pt-120 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-5">
                <div class="medical-icon-brand-2">
                    <img src="/frontend/img/about/medical-brand-icon-border.png" alt="">
                </div>
                <div class="about-left-side pos-rel mb-30">
                    <div class="about-front-/frontend/img">
                        <img src="/frontend/img/about/about-/frontend/img.jpg" alt="">
                    </div>
                    <div class="about-shape">
                        <img src="/frontend/img/about/about-shape.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-7">
                <div class="about-right-side pt-55 mb-30">
                    <div class="about-title mb-20">
                        <h5>About Us</h5>
                        <h1>Short Story About MediDove Clinic.</h1>
                    </div>
                    <div class="about-text">
                        <p>Dr. Emily Turner, a compassionate physician with a warm smile, was the heart and soul of
                            MediDove. Her dream was to create a sanctuary where patients felt cared for beyond their
                            ailments. The clinic itself was a converted heritage building, its old brick façade now
                            adorned with vibrant flowers and a welcoming sign that read, "Healing Starts Here."</p>
                        <p>Inside, the atmosphere was serene yet bustling with activity. Nurses hurried between rooms,
                            patients waited patiently in the cozy waiting area adorned with artwork from local artists,
                            and the scent of freshly brewed herbal tea wafted from the small café corner.</p>
                        <p>One rainy morning, Mrs. Thompson, an elderly widow with a persistent cough, arrived at
                            MediDove. She had been hesitant to seek medical attention, fearing the impersonal nature of
                            larger hospitals. Dr. Turner greeted her with a gentle handshake and led her to a
                            comfortable consultation room.</p>
                        <br>
                    </div>
                    <div class="about-author d-flex align-items-center">
                        <div class="author-ava">
                            <img src="/frontend/img/about/author-ava.png" alt="">
                        </div>
                        <div class="author-desination">
                            <h4>Rosalina D. Williamson</h4>
                            <h6>founder</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-area end -->
<!-- services-area start -->
<section class="servcies-area gray-bg pt-115 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                <div class="section-title text-center pos-rel mb-75">
                    <div class="section-icon">
                        <img class="section-back-icon" src="/frontend/img/section/section-back-icon.png" alt="">
                    </div>
                    <div class="section-text pos-rel">
                        <h5>Departments</h5>
                        <h1>Managed Your Heathcare Services</h1>
                    </div>
                    <div class="section-line pos-rel">
                        <img src="/frontend/img/shape/section-title-line.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="service-box text-center mb-30">
                    <div class="service-thumb">
                        <img src="/frontend/img/services/service1.png" alt="">
                    </div>
                    <div class="service-content">
                        <h3><a href="#">Body Surgery</a></h3>
                        <p>Medical procedures altering physical appearance or function, such as liposuction or breast
                            augmentation, often elective for aesthetic enhancement.</p>
                        <a class="service-link" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="service-box text-center mb-30">
                    <div class="service-thumb">
                        <img src="/frontend/img/services/service2.png" alt="">
                    </div>
                    <div class="service-content">
                        <h3><a href="#">Dental Care</a></h3>
                        <p>Maintenance of oral health through regular cleanings, treatments, and hygiene practices to
                            prevent tooth decay and gum disease.</p>
                        <a class="service-link" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="service-box text-center mb-30">
                    <div class="service-thumb">
                        <img src="/frontend/img/services/service3.png" alt="">
                    </div>
                    <div class="service-content">
                        <h3><a href="#">Eye Care</a></h3>
                        <p>Maintenance and treatment to preserve vision, including regular exams, corrective lenses, and
                            surgical interventions like cataract removal or LASIK.</p>
                        <a class="service-link" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="service-box text-center mb-30">
                    <div class="service-thumb">
                        <img src="/frontend/img/services/service4.png" alt="">
                    </div>
                    <div class="service-content">
                        <h3><a href="#">Blood Cancer</a></h3>
                        <p>A group of diseases affecting blood cells, including leukemia, lymphoma, and myeloma,
                            characterized by abnormal cell growth in the bone marrow or lymphatic system.</p>
                        <a class="service-link" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="service-box text-center mb-30">
                    <div class="service-thumb">
                        <img src="/frontend/img/services/service5.png" alt="">
                    </div>
                    <div class="service-content">
                        <h3><a href="#">Neurology Sargery</a></h3>
                        <p>Procedures involving the nervous system, such as brain or spinal cord surgeries, performed to
                            treat conditions like tumors, trauma, or neurological disorders.</p>
                        <a class="service-link" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="service-box text-center mb-30">
                    <div class="service-thumb">
                        <img src="/frontend/img/services/service6.png" alt="">
                    </div>
                    <div class="service-content">
                        <h3><a href="#">Allergic Issue</a></h3>
                        <p>Reactions triggered by allergens, causing symptoms like hives, itching, or respiratory
                            distress, managed through avoidance, medications, or immunotherapy.</p>
                        <a class="service-link" href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- services-area end -->
<!-- team-area start -->
<section class="team-area pt-115 pb-55">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-7 col-md-10">
                <div class="section-title pos-rel mb-75">
                    <div class="section-icon">
                        <img class="section-back-icon back-icon-left" src="/frontend/img/section/section-back-icon.png"
                            alt="">
                    </div>
                    <div class="section-text pos-rel">
                        <h5>Our Team</h5>
                        <h1>A Professional & Care Provider</h1>
                    </div>
                    <div class="section-line pos-rel">
                        <img src="/frontend/img/shape/section-title-line.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-5">
                <div class="section-button text-right d-none d-lg-block pt-80">
                    <a data-animation="fadeInLeft" data-delay=".6s" href="{{ route('product') }}"
                        class="btn btn-icon ml-0"><span>+</span>Make Appointment</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="team-box text-center mb-60">
                    <div class="team-thumb mb-45 pos-rel">
                        <img src="/frontend/img/team/member1.png" alt="">
                        <a class="team-link" href="#">+</a>
                    </div>
                    <div class="team-content">
                        <h3>Rosalina D. Williamson</h3>
                        <h6>Founder</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="team-box text-center mb-60">
                    <div class="team-thumb mb-45 pos-rel">
                        <img src="/frontend/img/team/member2.png" alt="">
                        <a class="team-link" href="#">+</a>
                    </div>
                    <div class="team-content">
                        <h3>Diconda PIran Will</h3>
                        <h6>dentist</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="team-box text-center mb-60">
                    <div class="team-thumb mb-45 pos-rel">
                        <img src="/frontend/img/team/member3.png" alt="">
                        <a class="team-link" href="#">+</a>
                    </div>
                    <div class="team-content">
                        <h3>Hulk M. Kenbon</h3>
                        <h6>neurologist</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="team-box text-center mb-60">
                    <div class="team-thumb mb-45 pos-rel">
                        <img src="/frontend/img/team/member4.png" alt="">
                        <a class="team-link" href="#">+</a>
                    </div>
                    <div class="team-content">
                        <h3>Haliam Z. Dicolaz</h3>
                        <h6>Consultant</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="team-box text-center mb-60">
                    <div class="team-thumb mb-45 pos-rel">
                        <img src="/frontend/img/team/member5.png" alt="">
                        <a class="team-link" href="#">+</a>
                    </div>
                    <div class="team-content">
                        <h3>Nicolas D. Case</h3>
                        <h6>dentist</h6>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="team-box text-center mb-60">
                    <div class="team-thumb mb-45 pos-rel">
                        <img src="/frontend/img/team/member6.png" alt="">
                        <a class="team-link" href="#">+</a>
                    </div>
                    <div class="team-content">
                        <h3>Phumdon H. Norman</h3>
                        <h6>neurologist</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- team-area end -->
<!-- fact-area start -->
<section class="fact-area fact-map primary-bg pos-rel pt-115 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-10">
                <div class="section-title pos-rel mb-45">
                    <div class="section-text section-text-white pos-rel">
                        <h5>We are available 24/7</h5>
                        <h1 class="white-color">We Always Ready For A Challenge.</h1>
                    </div>
                </div>
                <div class="section-button section-button-left mb-30">
                    <a data-animation="fadeInLeft" data-delay=".6s" href="{{ route('product') }}"
                        class="btn btn-icon ml-0"><span>+</span>Make Appointment</a>
                </div>
            </div>
            <div class="col-lg-6 col-lg-6 col-md-8">
                <div class="cta-satisfied">
                    <div class="single-satisfied mb-50">
                        <h1>1M+</h1>
                        <h5> <i class="fas fa-user"></i>Global Health Initiatives</h5>
                        <p>Efforts to improve healthcare in developing countries and address global health disparities..
                        </p>
                    </div>
                    <div class="single-satisfied mb-50">
                        <h1>100+</h1>
                        <h5><i class="far fa-thumbs-up"></i>Medical Education and Training</h5>
                        <p>The evolving landscape of medical education, focusing on practical skills and ethical
                            principles..</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- fact-area end -->
<!-- pricing-area start -->
<section class="pricing-area gray-bg pt-115 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-12">
                <div class="section-title pos-rel mb-75">
                    <div class="section-icon">
                        <img class="section-back-icon back-icon-left" src="/frontend/img/section/section-back-icon.png"
                            alt="">
                    </div>
                    <div class="section-text pos-rel">
                        <h5>Our Plans</h5>
                        <h1>Pricing &amp; Plans</h1>
                    </div>
                    <div class="section-line pos-rel">
                        <img src="/frontend/img/shape/section-title-line.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6 col-md-12">
                <div class="pricing-menu f-right">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                role="tab" aria-controls="pills-home" aria-selected="true">monthly</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                role="tab" aria-controls="pills-profile" aria-selected="false">yearly</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="pricing-box mb-30">
                                    <div class="pricing-thumb mb-45">
                                        <img src="/frontend/img/pricing/pricing-thumb-1.png" alt="">
                                    </div>
                                    <div class="pricing-content">
                                        <h1>Professional</h1>
                                        <p>Conducting oneself with expertise, integrity, and skill in a specific
                                            occupation or field, often involving advanced training, ethical standards,
                                            and competence.</p>
                                        <a data-animation="fadeInLeft" data-delay=".6s" href="#"
                                            class="btn btn-icon ml-0"><span>+</span>Price:
                                            $489.00</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="pricing-box mb-30">
                                    <div class="pricing-thumb mb-45">
                                        <img src="/frontend/img/pricing/pricing-thumb-2.png" alt="">
                                    </div>
                                    <div class="pricing-content">
                                        <h1>Advanced</h1>
                                        <p>Refers to a high level of development, complexity, or proficiency beyond
                                            basic or intermediate stages, often indicating specialized knowledge or
                                            skills.</p>
                                        <a data-animation="fadeInLeft" data-delay=".6s" href="#"
                                            class="btn btn-icon ml-0"><span>+</span>Price:
                                            $489.00</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="pricing-box mb-30">
                                    <div class="pricing-thumb mb-45">
                                        <img src="/frontend/img/pricing/pricing-thumb-3.png" alt="">
                                    </div>
                                    <div class="pricing-content">
                                        <h1>Advantage</h1>
                                        <p>A favorable or beneficial condition or circumstance that gives someone an
                                            edge or superiority in a particular situation or context.</p>
                                        <a data-animation="fadeInLeft" data-delay=".6s" href="#"
                                            class="btn btn-icon ml-0"><span>+</span>Price:
                                            $489.00</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="pricing-box mb-30">
                                    <div class="pricing-thumb mb-45">
                                        <img src="/frontend/img/pricing/pricing-thumb-1.png" alt="">
                                    </div>
                                    <div class="pricing-content">
                                        <h1>Professional</h1>
                                        <p>Conducting oneself with expertise, integrity, and skill in a specific
                                            occupation or field, often involving advanced training, ethical standards,
                                            and competence.</p>
                                        <a data-animation="fadeInLeft" data-delay=".6s" href="#"
                                            class="btn btn-icon ml-0"><span>+</span>Price:
                                            $489.00</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="pricing-box mb-30">
                                    <div class="pricing-thumb mb-45">
                                        <img src="/frontend/img/pricing/pricing-thumb-2.png" alt="">
                                    </div>
                                    <div class="pricing-content">
                                        <h1>Advanced</h1>
                                        <p>Refers to a high level of development, complexity, or proficiency beyond
                                            basic or intermediate stages, often indicating specialized knowledge or
                                            skills.</p>
                                        <a data-animation="fadeInLeft" data-delay=".6s" href="#"
                                            class="btn btn-icon ml-0"><span>+</span>Price:
                                            $489.00</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="pricing-box mb-30">
                                    <div class="pricing-thumb mb-45">
                                        <img src="/frontend/img/pricing/pricing-thumb-3.png" alt="">
                                    </div>
                                    <div class="pricing-content">
                                        <h1>Advantage</h1>
                                        <p>A favorable or beneficial condition or circumstance that gives someone an
                                            edge or superiority in a particular situation or context.</p>
                                        <a data-animation="fadeInLeft" data-delay=".6s" href="#"
                                            class="btn btn-icon ml-0"><span>+</span>Price:
                                            $489.00</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- pricing-area end -->
<!-- cta-area start -->
<section class="cta-area pos-rel pt-115 pb-120" data-background="/frontend/img/slider/slider-bg-1.jpg">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 offset-xl-1 col-md-12">
                <div class="cta-text text-center">
                    <div class="section-title pos-rel mb-50">
                        <div class="section-text section-text-white pos-rel">
                            <h5>Stay healthy & strong to enjoy life</h5>
                            <h1 class="white-color">Trust Us To Be There To Help All & Make Things Well Again.
                            </h1>
                        </div>
                    </div>
                    <div class="section-button section-button-left">
                        <a data-animation="fadeInLeft" data-delay=".6s" href="{{ route('product') }}"
                            class="btn btn-icon btn-icon-green ml-0"><span>+</span>get a consultant</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- cta-area end -->
<!-- latest-news-area start -->
<section class="latest-news-area pt-115 pb-20">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-7">
                <div class="section-title pos-rel mb-75">
                    <div class="section-icon">
                        <img class="section-back-icon back-icon-left" src="/frontend/img/section/section-back-icon.png"
                            alt="">
                    </div>
                    <div class="section-text pos-rel">
                        <h5>News</h5>
                        <h1>Get Every Single Updates Here.</h1>
                    </div>
                    <div class="section-line pos-rel">
                        <img src="/frontend/img/shape/section-title-line.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-5 d-none d-lg-block">
                <div class="section-button text-right pt-80">
                    <a data-animation="fadeInLeft" data-delay=".6s" href="#" class="btn btn-icon ml-0"><span>+</span>our
                        blog</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="latest-news-box mb-30">
                    <div class="latest-news-thumb mb-35">
                        <img src="/frontend/img/blog/blog-thumb-1.jpg" alt="">
                    </div>
                    <div class="latest-news-content">
                        <div class="news-meta mb-10">
                            <span><a href="#" class="news-tag">Medical,</a></span>
                            <span><a href="#" class="news-tag">Medicine</a></span>
                        </div>
                        <h3><a href="#">Efforts to improve healthcare in developing countries and address global health
                                disparities.</a></h3>
                        <p>Ensuring Child Wellness: From vaccinations to developmental milestones, promoting children's
                            health.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="latest-news-box mb-30">
                    <div class="latest-news-thumb mb-35">
                        <img src="/frontend/img/blog/blog-thumb-2.jpg" alt="">
                    </div>
                    <div class="latest-news-content">
                        <div class="news-meta mb-10">
                            <span><a href="#" class="news-tag">Medical,</a></span>
                            <span><a href="#" class="news-tag">Medicine</a></span>
                        </div>
                        <h3><a href="#">Geriatric Medicine: Addressing Aging Populations: Challenges and advancements in
                                caring for elderly patients</a></h3>
                        <p>Nutrition and Disease Prevention: How dietary habits impact health outcomes and disease
                            prevention strategies</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12 col-md-12">
                <div class="recent-news-list mb-120">
                    <div class="latest-news-content singl-news news-border-bottom">
                        <h3><a href="#">How dietary habits impact health outcomes and disease prevention strategies.</a>
                        </h3>
                        <span class="meta-date"><i class="far fa-calendar"></i>23rd Jan 2019</span>
                        <span class="meta-date"><a href="#"><i class="far fa-comments"></i>33
                                Comments</a></span>
                    </div>
                    <div class="latest-news-content singl-news news-border-bottom">
                        <h3><a href="#">From vaccinations to developmental milestones, promoting children's health.</a>
                        </h3>
                        <span class="meta-date"><i class="far fa-calendar"></i>2nd Jan 2019</span>
                        <span class="meta-date"><a href="#"><i class="far fa-comments"></i>33
                                Comments</a></span>
                    </div>
                    <div class="latest-news-content singl-news ">
                        <h3><a href="#">Addressing Aging Populations: Challenges and advancements in caring for elderly
                                patients.</a></h3>
                        <span class="meta-date"><i class="far fa-calendar"></i>1st Jan 2019</span>
                        <span class="meta-date"><a href="#"><i class="far fa-comments"></i>33
                                Comments</a></span>
                    </div>
                </div>
                <div class="mk-call-btn f-right mb-30">
                    <a data-animation="fadeInLeft" data-delay=".6s" href="{{ route('product') }}"
                        class="btn btn-icon btn-icon-green ml-0"><span><i class="fas fa-phone"></i></span>make
                        call</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- latest-news-area end -->

@endsection