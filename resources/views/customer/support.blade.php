@extends('customer.FAQ-mainlayout')

@section('support-content')
    <div class="container-fluid bg-primary py-5">
        <div class="row px-xl-5">
            <div class="col-12 text-center text-white">
                <p class="text-uppercase mb-2">We’re here to help</p>
                <h1 class="font-weight-semi-bold mb-2">Customer Support</h1>
                <p class="mb-0">Tell us what you need and we’ll help you find the next step.</p>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5 pb-3">
        <div class="row px-xl-5 justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-4">
                    <h2 class="section-title px-5"><span class="px-2">How can we assist?</span></h2>
                    <p class="text-muted mt-3">For help with an existing order, include the order details in your
                        message so we can understand the issue.</p>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body text-center p-4">
                                <i class="fa fa-envelope text-primary fa-2x mb-3"></i>
                                <h5 class="font-weight-semi-bold">Email us</h5>
                                <p class="text-muted">Send your question and order details to our customer care inbox.</p>
                                <a href="{{ route('customer.contactus') }}" class="btn btn-outline-primary px-4">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <div class="card-body text-center p-4">
                                <i class="fa fa-question-circle text-primary fa-2x mb-3"></i>
                                <h5 class="font-weight-semi-bold">Check the FAQs</h5>
                                <p class="text-muted">Find quick guidance for common questions about shopping and orders.</p>
                                <a href="{{ route('customer.faqs') }}" class="btn btn-outline-primary px-4">View FAQs</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-secondary p-4 p-md-5">
                    <h3 class="font-weight-semi-bold mb-3">To help us help you</h3>
                    <ul class="list-unstyled text-muted mb-0">
                        <li class="mb-2"><i class="fa fa-check text-primary mr-2"></i>Tell us what you need help with.</li>
                        <li class="mb-2"><i class="fa fa-check text-primary mr-2"></i>Include your order reference when your question is about a purchase.</li>
                        <li><i class="fa fa-lock text-primary mr-2"></i>Never include your password or full payment-card details.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
