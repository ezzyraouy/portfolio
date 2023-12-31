@extends('layouts.master')
@section('content')
    <section id="hero" class="d-flex flex-column justify-content-center">
        <div class="container" data-aos="zoom-in" data-aos-delay="100">
            <h1>Abdelilah Ezzyraouy</h1>
            <p><span class="typed" data-typed-items="{!!__('home.devweb')!!}, Freelancer"></span></p>
            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </section>
    <main id="main">
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2> {!! __('home.about.title') !!}</h2>
                    <p>{!! __('home.about.description') !!}</p>
                </div>
                <div class="row">
                    <div class="col-lg-10 m-auto pt-4 pt-lg-0 content">
                        <h3>{!! __('home.about.dvweb') !!}</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>{!! __('home.about.dte') !!} :</strong> <span>2001</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>{!! __('home.about.tele') !!} :</strong>
                                        <span>+212609109706</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>{!! __('home.about.vle') !!} :</strong>
                                        <span>Maroc,Casablanca</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>{!! __('home.about.age') !!} :</strong> <span>23</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>{!! __('home.about.dpl') !!} :</strong> <span>Bac +2</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Email :</strong>
                                        <span>abdelilahezzyraouy@gmail.com</span></li>
                                </ul>
                            </div>
                        </div>
                        <p>
                            {!! __('home.about.description2') !!}
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section id="skills" class="skills section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>{!! __('home.skills') !!}</h2>
                    {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
                </div>
                <div class="row skills-content">
                    @foreach ($skills as $skill)
                        <div class="col-lg-6">
                            <div class="progress">
                                <span class="skill">{{ $skill->langage }} <i
                                        class="val">{{ $skill->percent }}</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill->percent }}"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section id="resume" class="resume">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>{!! __('home.resume.title') !!}</h2>
                    <p>{!! __('home.resume.description') !!}</p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="resume-title">{!! __('home.resume.resume') !!}</h3>
                        <div class="resume-item pb-0">
                            <h4>ABDELILAH EZZYRAOUY</h4>
                            <p><em>{!! __('home.resume.description') !!}</em></p>
                            <ul>
                                <li>Maroc,Casablanca</li>
                                <li>12-01-01</li>
                                <li>abdelilahezzyraouy.com</li>
                            </ul>
                        </div>
                        <h3 class="resume-title">{!! __('home.resume.education') !!}</h3>
                        @foreach ($educations as $education)
                            <div class="resume-item">
                                <h4>{{ $education->{'title_'.app()->getLocale()} }}</h4>
                                <h5>{{ $education->datedebut }} - {{ $education->datefin }}</h5>
                                <p><em>{{ $education->lieu }}</em></p>
                            </div>
                        @endforeach
                        <h3 class="resume-title">{!! __('home.resume.attestation') !!}</h3>
                        <div class="resume-item">
                            <h4><a href="https://www.freecodecamp.org/certification/fcc3a2d010c-ca60-4c81-b82f-9c298cd70c57/javascript-algorithms-and-data-structures" target="_blanck">freeCodeCamp |Java Script</a></h4>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="resume-title">{!! __('home.resume.expprof') !!}</h3>
                        @foreach ($experiences as $experience)
                            <div class="resume-item">
                                <h4>{{ $experience->{'title_'.app()->getLocale()} }}</h4>
                                <h5>{{ $experience->datedebut }} - {{ $experience->datefin ?? "jusqu'à maintenant" }}</h5>
                                <p><em>{{ $experience->lieu }}</em></p>
                                <ul>
                                    {{ $experience->{'description_'.app()->getLocale()} }}
                                </ul>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section id="portfolio" class="portfolio section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>{!! __('home.portfolio.title') !!}</h2>
                    <p>{!! __('home.portfolio.description') !!}</p>
                </div>
                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($projects as $project)
                        <div class="col-lg-4 col-md-6 portfolio-item">
                            <div class="portfolio-wrap portfolio-img"
                                style="background-image: url('{{ 'storage/' . $project->image }}')">
                                <div class="portfolio-info">
                                    <p>{{ $project->{'title_'.app()->getLocale()} }}</p>
                                    <div class="portfolio-links">
                                        <a href="{{ 'storage/' . $project->image }}" data-gallery="portfolioGallery"
                                            class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                        <a href="{{ route('single.project', $project->id) }}"><i class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <section id="services" class="services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>{!! __('home.services.title') !!}</h2>
                    <p>{!! __('home.services.description') !!}</p>
                </div>

                <div class="row">
                    @foreach ($services as $service)
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box iconbox-blue">
                                <div class="icon">
                                    <svg width="100" height="100" viewBox="0 0 600 600"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke="none" stroke-width="0" fill="#f5f5f5"
                                            d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174">
                                        </path>
                                    </svg>
                                    <i class="bi bi-code"></i>
                                </div>
                                <h4><a href="">{{ $service->{'title_'.app()->getLocale()} }}</a></h4>
                                <p>{{ $service->{'description_'.app()->getLocale()} }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                </div>

                <div class="row mt-1">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>{!! __('home.Contact.place') !!} :</h4>
                                <p>Maroc, Casablanca</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email :</h4>
                                <p>abdelilahezzyraouy@gmail.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>{!! __('home.Contact.phone') !!} :</h4>
                                <p>+2120609109706</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="{!! __('home.Contact.name') !!}" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="{!! __('home.Contact.sub') !!}" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="{!! __('home.Contact.msg') !!}" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Chargement</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Votre message a été envoyé. Merci !</div>
                            </div>
                            <div class="text-center"><button type="submit">{!! __('home.Contact.btn') !!}</button></div>
                        </form>

                    </div>

                </div>

            </div>
        </section>
    </main>
    <style>
        .portfolio-img {
            background-position: center;
            background-size: contain;
            background-repeat: no-repeat;
            background-color: rgb(225 226 228);
            height: 300px;
        }
    </style>
@endsection
