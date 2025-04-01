@extends('layouts.main')
@section('title', 'Main')

@section('content')
    <!-- Start: Hero Parallax -->
    <section id="hero_section">
        <!-- Start: Parallax Background -->
        <div data-bss-parallax-bg="true"
             style="height: 600px;background: linear-gradient(rgba(255,255,255,0) 37%, rgba(0,0,0,0.65) 99%), url( {{ asset('img/01.jpg') }}) center / cover;">
            <div class="container h-100">
                <div class="row h-100" style="opacity: 1;">
                    <div
                        class="col-md-6 text-center text-md-start d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center">
                        <div style="max-width: 350px;">
                            <h1 class="text-uppercase fw-bold"
                                style="color: var(--bs-black);font-size: 42.88px;font-family: Carlito, sans-serif;">
                                Running
                                a business has never been</h1><span class="hero_header_text"
                                                                    style="font-size: 42.88px;line-height: 51.456px;font-family: Carlito, sans-serif;color: var(--bs-light);background: var(--bs-black);">EASER</span>
                            <p class="my-3"
                               style="color: var(--bs-light);font-family: 'Arsenal SC', sans-serif;font-size: 22px;">
                                Manage
                                your staff, merchandise, tasks and vendors with no extra steps - all in one tool!</p><a
                                class="btn btn-primary btn-lg me-2" role="button" href="#"
                                style="font-family: 'Arsenal SC', sans-serif;">Start working</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End: Parallax Background -->
    </section><!-- End: Hero Parallax -->
    <section id="features_section">
        <!-- Start: Features Image -->
        <div class="container py-4 py-xl-5">
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col"><img class="rounded img-fluid object-fit-cover w-100 h-100 fit-cover"
                                      style="min-height: 300px;" src="{{ asset('img/pexels-ivan-samkov-4240497.jpg') }}"></div>
                <div class="col d-flex flex-column justify-content-center p-4">
                    <div
                        class="text-center text-md-start d-flex flex-column align-items-center align-items-md-start mb-5">
                        <div
                            class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon md">
                            <i class="fa fa-user"></i></div>
                        <div>
                            <h4 style="font-family: 'BIZ UDPGothic', sans-serif;font-weight: bold;">Work as
                                "Worker"</h4>
                            <p>Manage your tasks easily and flexibly. Track their status and stay up-to-date with the
                                latest
                                information!</p><a href="#">Start working&nbsp;<svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="1em" height="1em"
                                                                                    fill="currentColor"
                                                                                    viewBox="0 0 16 16"
                                                                                    class="bi bi-arrow-right">
                                    <path fill-rule="evenodd"
                                          d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div
                        class="text-center text-md-start d-flex flex-column align-items-center align-items-md-start mb-5">
                        <div
                            class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-3 bs-icon md">
                            <i class="fa fa-user-secret"></i></div>
                        <div>
                            <h4 style="font-family: 'BIZ UDPGothic', sans-serif;font-weight: bold;">Work as "Admin"</h4>
                            <p>The enterprise - customers, suppliers, staff, goods - is on your screen! Simple,
                                flexible,
                                beautiful)</p><a href="#">Start working&nbsp;<svg xmlns="http://www.w3.org/2000/svg"
                                                                                  width="1em" height="1em"
                                                                                  fill="currentColor"
                                                                                  viewBox="0 0 16 16"
                                                                                  class="bi bi-arrow-right">
                                    <path fill-rule="evenodd"
                                          d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End: Features Image -->
    </section><!-- Start: Lightbox Gallery No Gutters -->
    <section class="photo-gallery py-4 py-xl-5" style="padding: 0px;">
        <div class="container-fluid p-0">
            <div class="row g-0 mb-5" style="margin: 0px;">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 style="font-family: 'BIZ UDPGothic', sans-serif;font-weight: bold;font-size: 39.44px;">We works
                        with
                        leaders</h2>
                </div>
            </div><!-- Start: Photos -->
            <div
                class="row g-0 row-cols-1 row-cols-md-2 row-cols-xl-3 d-flex d-md-flex d-lg-flex justify-content-center align-items-center justify-content-md-center justify-content-lg-center photos"
                data-bss-baguettebox="">
                <div
                    class="col d-flex d-lg-flex justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center item"
                    style="padding: 20px;width: 170px;"><a
                        href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid"
                                                                                             src="{{ asset('img/Google__G__logo.svg.png') }}"></a>
                </div>
                <div
                    class="col d-flex d-lg-flex justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center item"
                    style="padding: 20px;width: 170px;"><a
                        href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid"
                                                                                             src="{{ asset('img/Microsoft_logo.svg.png') }}"></a>
                </div>
                <div
                    class="col d-flex d-lg-flex justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center item"
                    style="padding: 20px;width: 170px;"><a
                        href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid"
                                                                                             src="{{ asset('img/Logo_Bayer.svg.png') }}"></a>
                </div>
                <div
                    class="col d-flex d-lg-flex justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center item"
                    style="padding: 20px;width: 170px;"><a
                        href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid"
                                                                                             src="{{ asset('img/COMFY_logo.svg.png') }}"></a>
                </div>
                <div
                    class="col d-flex d-lg-flex justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center item"
                    style="padding: 20px;width: 170px;"><a
                        href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid"
                                                                                             src="{{ asset('img/LOréal_logo.svg.png') }}"></a>
                </div>
                <div
                    class="col d-flex d-lg-flex justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center item"
                    style="padding: 20px;width: 170px;"><a
                        href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid"
                                                                                             src="{{ asset('img/IDS_Ukraine_LOGO_2022.png') }}"></a>
                </div>
                <div
                    class="col d-flex d-lg-flex justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center item"
                    style="padding: 20px;width: 170px;"><a
                        href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid"
                                                                                             src="{{ asset('img/Логотип_Kernel_Group.png') }}"></a>
                </div>
                <div
                    class="col d-flex d-lg-flex justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center item"
                    style="padding: 20px;width: 170px;"><a
                        href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid"
                                                                                             src="{{ asset('img/Nestlé.svg.png') }}"></a>
                </div>
                <div
                    class="col d-flex d-lg-flex justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center item"
                    style="padding: 20px;width: 170px;"><a
                        href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid"
                                                                                             src="{{ asset('img/Varus_logo.svg.png') }}"></a>
                </div>
                <div
                    class="col d-flex d-lg-flex justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center item"
                    style="padding: 20px;width: 170px;"><a
                        href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid"
                                                                                             src="{{ asset('img/Novus_Ukraina_logo.svg.png') }}"></a>
                </div>
            </div><!-- End: Photos -->
        </div>
    </section><!-- End: Lightbox Gallery No Gutters -->
    <section id="testimonials_section">
        <!-- Start: Testimonials -->
        <div class="container py-4 py-xl-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 style="font-family: 'BIZ UDPGothic', sans-serif;font-weight: bold;font-size: 39.44px;">
                        Testimonials</h2>
                </div>
            </div>
            <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-lg-3">
                <div class="col">
                    <div>
                        <p class="bg-body-tertiary border rounded border-0 p-4">Nisi sit justo faucibus nec ornare amet,
                            tortor torquent. Blandit class dapibus, aliquet morbi.</p>
                        <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50"
                                                 height="50"
                                                 src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                            <div>
                                <p class="fw-bold text-primary mb-0">John Smith</p>
                                <p class="text-muted mb-0">Erat netus</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <p class="bg-body-tertiary border rounded border-0 p-4">Nisi sit justo faucibus nec ornare amet,
                            tortor torquent. Blandit class dapibus, aliquet morbi.</p>
                        <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50"
                                                 height="50"
                                                 src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                            <div>
                                <p class="fw-bold text-primary mb-0">John Smith</p>
                                <p class="text-muted mb-0">Erat netus</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <p class="bg-body-tertiary border rounded border-0 p-4">Nisi sit justo faucibus nec ornare amet,
                            tortor torquent. Blandit class dapibus, aliquet morbi.</p>
                        <div class="d-flex"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="50"
                                                 height="50"
                                                 src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                            <div>
                                <p class="fw-bold text-primary mb-0">John Smith</p>
                                <p class="text-muted mb-0">Erat netus</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End: Testimonials -->
    </section><!-- Start: Banner Color -->
    <section id="call_section" class="py-4 py-xl-5">
        <div class="container">
            <div
                class="text-white text-bg-primary bg-primary border rounded border-0 border-primary d-flex flex-column justify-content-between flex-lg-row p-4 p-md-5">
                <div class="pb-2 pb-lg-1">
                    <h2 class="fw-bold mb-2" style="font-family: 'BIZ UDPGothic', sans-serif;">Don't waste time -
                        optimize
                        your event now.</h2>
                    <p class="mb-0">Imperdiet consectetur dolor, tristique himenaeos ultrices tristique neque.</p>
                </div>
                <div class="my-2"><a class="btn btn-light fs-5 py-2 px-4" role="button" href="#"
                                     style="font-family: 'Arsenal SC', sans-serif;">Start use</a></div>
            </div>
        </div>
    </section><!-- End: Banner Color -->
@endsection


