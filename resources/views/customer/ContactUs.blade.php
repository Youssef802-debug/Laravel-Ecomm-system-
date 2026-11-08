@extends('customer.FAQ-mainlayout')

@section('support-content')
    <style>
        .contact-page .contact-hero {
            background:
                radial-gradient(circle at 15% 20%, rgba(255, 255, 255, .18), transparent 25%),
                linear-gradient(120deg, #c98782, #d9a7a1);
        }

        .contact-page .contact-card {
            border: 0;
            border-radius: 12px;
            box-shadow: 0 8px 30px rgba(42, 52, 69, .08);
        }

        .contact-page .contact-icon {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: #fbf0ef;
            color: var(--primary);
        }

        .contact-page .contact-field {
            min-height: 48px;
            border: 1px solid #e8eaf0;
            border-radius: 6px;
            box-shadow: none;
        }

        .contact-page .contact-field:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 .2rem rgba(209, 156, 151, .16);
        }

        .contact-page textarea.contact-field {
            min-height: 150px;
            resize: vertical;
        }

        .question-toast {
            position: fixed;
            top: 10%;
            left: 50%;
            z-index: 1050;
            min-width: 360px;
            max-width: 460px;
            border: 0;
            border-radius: 8px;
            box-shadow: 0 12px 35px rgba(0, 0, 0, .18);
            transform: translate(-50%, -50%);
        }

        .question-toast .toast-icon {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: #e8f5ec;
            color: #28a745;
        }

        @media (max-width: 575.98px) {
            .question-toast {
                min-width: 0;
                max-width: none;
                width: calc(100% - 24px);
            }
        }
    </style>

    <main class="contact-page">
        @if (session('success'))
            <div class="toast question-toast show d-flex align-items-center p-3" role="status" aria-live="polite"
                aria-atomic="true" id="question-sent-toast">
                <span class="toast-icon d-inline-flex align-items-center justify-content-center mr-3">
                    <i class="fa fa-check" aria-hidden="true"></i>
                </span>
                <div class="mr-auto font-weight-bold">{{ session('success') }}</div>
                <button class="close ml-3" type="button" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <section class="contact-hero py-5">
            <div class="container py-4">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center text-white">
                        <span class="text-uppercase small font-weight-bold">We'd love to hear from you</span>
                        <h1 class="display-4 font-weight-bold mt-2 mb-3">Let's talk</h1>
                        <p class="lead mb-0">Have a question about your order or our products? Send us a note and our
                            customer care team will be happy to help.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="container py-5">
            <div class="row align-items-stretch">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="h-100 pr-lg-4">
                        <span class="text-primary text-uppercase small font-weight-bold">Get in touch</span>
                        <h2 class="font-weight-bold mt-2 mb-3">We're here to help.</h2>
                        <p class="text-muted mb-4">Choose the way that works best for you, or send us a message using
                            the form. For order questions, please include your order reference.</p>

                        <div class="card contact-card mb-3">
                            <div class="card-body d-flex align-items-center p-4">
                                <span class="contact-icon d-inline-flex align-items-center justify-content-center mr-3">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </span>
                                <div>
                                    <h3 class="h6 font-weight-bold mb-1">Email us</h3>
                                    <a class="text-muted" href="mailto:info@example.com">info@example.com</a>
                                </div>
                            </div>
                        </div>

                        <div class="card contact-card mb-3">
                            <div class="card-body d-flex align-items-center p-4">
                                <span class="contact-icon d-inline-flex align-items-center justify-content-center mr-3">
                                    <i class="fa fa-phone-alt" aria-hidden="true"></i>
                                </span>
                                <div>
                                    <h3 class="h6 font-weight-bold mb-1">Call us</h3>
                                    <a class="text-muted" href="tel:+01234567890">+012 345 67890</a>
                                </div>
                            </div>
                        </div>

                        <div class="card contact-card">
                            <div class="card-body d-flex align-items-center p-4">
                                <span class="contact-icon d-inline-flex align-items-center justify-content-center mr-3">
                                    <i class="fa fa-map-marker-alt" aria-hidden="true"></i>
                                </span>
                                <div>
                                    <h3 class="h6 font-weight-bold mb-1">Visit us</h3>
                                    <p class="text-muted mb-0">123 Street, New York, USA</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <a href="{{ route('customer.faqs') }}" class="text-primary font-weight-bold">
                                Looking for a quick answer? Browse our FAQs
                                <i class="fa fa-arrow-right ml-1" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="card contact-card h-100">
                        <div class="card-body p-4 p-md-5">
                            <h2 class="h3 font-weight-bold mb-2">Send us a message</h2>
                            <p class="text-muted mb-4">Fill in the details below and your email app will open with your
                                message ready to send.</p>

                            <form action="{{ route('customer.contactus.send') }}" method="post">
                                @csrf
                                <div class="form-group mb-4">
                                    <label class="font-weight-bold" for="contact-name">Your name</label>
                                    <input class="form-control contact-field" id="contact-name" name="Name" type="text"
                                        placeholder="Jane Smith" autocomplete="name" required>
                                </div>

                                <div class="form-group mb-4">
                                    <label class="font-weight-bold" for="contact-email">Email address</label>
                                    <input class="form-control contact-field" id="contact-email" name="Email" type="email"
                                        placeholder="you@example.com" autocomplete="email" required>
                                </div>

                                <div class="form-group mb-4">
                                    <label class="font-weight-bold" for="contact-message">How can we help?</label>
                                    <textarea class="form-control contact-field" id="contact-message" name="Question"
                                        placeholder="Write your question or message here..." required></textarea>
                                </div>

                                <button class="btn btn-primary btn-lg px-4" type="submit">
                                    Send message <i class="fa fa-paper-plane ml-2" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var toast = document.getElementById('question-sent-toast');

                if (!toast) {
                    return;
                }

                var closeButton = toast.querySelector('[data-dismiss="toast"]');
                var hideToast = function() {
                    toast.classList.remove('show');

                    window.setTimeout(function() {
                        toast.remove();
                    }, 150);
                };

                closeButton.addEventListener('click', hideToast);
                window.setTimeout(hideToast, 4000);
            });
        </script>
    @endif
@endsection