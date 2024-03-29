<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="icon" type="image/x-icon" href="/assets/new-age/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;900&display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset(\App\Helpers\Dpaz\UrlFingerprint::fingerprint('css/new-age.css')) }}" rel="stylesheet" />
        @if(strtolower(env('APP_ENV')) == 'prod')
            <script async src="https://www.googletagmanager.com/gtag/js?id={{env('GOOGLE_TAG_ID', '123')}}"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());
                gtag('config', '{{env('GOOGLE_TAG_ID', '123')}}');
            </script>
        @endif
        {{ !empty($style) ? $style : '' }}
    </head>
    <body id="page-top">
        <!-- Navigation-->
        @include('components.new-age.partials.header.base')
        <main id="main" class="{{ empty($hero) ? 'hero-buffer' : '' }}">
            @auth
                <section id="breadcrumbs">
                    <div class="container">
                        <div id="breadcrumb-wrapper" class="row">
                            <div class="col">
                                <nav id="breadcrumbs" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        {{ !empty($breadcrumb) ? $breadcrumb : '' }}
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </section>
            @endauth

            @if ($message = Session::get('success'))
                <section id="success-alert">
                    <div class="container">
                        <div class="row">
                            <div class="alert alert-success alert-block">
                                <span class="ri-close-circle-fill" data-dismiss="alert"></span>
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    </div>
                </section>
            @endif

            @if ($message = Session::get('error'))
                <section id="error-alert">
                    <div class="container">
                        <div class="row">
                            <div class="alert alert-danger alert-block">
                                <span class="ri-close-circle-fill" data-dismiss="alert"></span>
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    </div>
                </section>
            @endif

            @if ($message = Session::get('warning'))
                <section id="warning-alert">
                    <div class="container">
                        <div class="row">
                            <div class="alert alert-warning alert-block">
                                <span class="ri-close-circle-fill" data-dismiss="alert"></span>
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    </div>
                </section>
            @endif

            @if ($message = Session::get('info'))
                <section id="info-alert">
                    <div class="container">
                        <div class="row">
                            <div class="alert alert-info alert-block">
                                <span class="ri-close-circle-fill" data-dismiss="alert"></span>
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    </div>
                </section>
            @endif

            @if ($errors->any())
                <section id="error-alert">
                    <div class="container">
                        <div class="row">
                            <div class="alert alert-danger">
                                <span class="ri-close-circle-fill" data-dismiss="alert"></span>
                                Check the following errors :(
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
            @endif
            {{ $content }}
        </main>
        <!-- Footer-->
        @include('components.new-age.partials.footer.base')
        <!-- Feedback Modal-->
        <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-gradient-primary-to-secondary p-4">
                        <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Send feedback</h5>
                        <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body border-0 p-4">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Full name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Phone number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary rounded-pill btn-lg disabled" id="submitButton" type="submit">Submit</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset(\App\Helpers\Dpaz\UrlFingerprint::fingerprint('js/new-age.js')) }}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        {{ !empty($script) ? $script : '' }}
    </body>
</html>
