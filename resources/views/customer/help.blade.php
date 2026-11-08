@extends('customer.FAQ-mainlayout')

@section('support-content')
    <div class="container-fluid bg-primary py-5">
        <div class="row px-xl-5">
            <div class="col-12 text-center text-white">
                <p class="text-uppercase mb-2">Your shopping guide</p>
                <h1 class="font-weight-semi-bold mb-2">How Can We Help?</h1>
                <p class="mb-0">A few simple steps for a smoother shopping experience.</p>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5 pb-3">
        <div class="row px-xl-5">
            <div class="col-12 text-center mb-4">
                <h2 class="section-title px-5"><span class="px-2">Shopping made simple</span></h2>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-secondary rounded-circle mb-3"
                            style="width: 70px; height: 70px;">
                            <i class="fa fa-search text-primary fa-2x"></i>
                        </div>
                        <h5 class="font-weight-semi-bold">Find your favorites</h5>
                        <p class="text-muted mb-0">Explore the shop and browse product categories to discover something
                            you love.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-secondary rounded-circle mb-3"
                            style="width: 70px; height: 70px;">
                            <i class="fa fa-shopping-cart text-primary fa-2x"></i>
                        </div>
                        <h5 class="font-weight-semi-bold">Review your cart</h5>
                        <p class="text-muted mb-0">Add products to your cart, then review your selections before
                            continuing to checkout.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-secondary rounded-circle mb-3"
                            style="width: 70px; height: 70px;">
                            <i class="fa fa-check text-primary fa-2x"></i>
                        </div>
                        <h5 class="font-weight-semi-bold">Complete checkout</h5>
                        <p class="text-muted mb-0">Follow the checkout steps and check your order confirmation for
                            purchase details.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row px-xl-5 justify-content-center">
            <div class="col-lg-8">
                <div class="bg-secondary p-4 p-md-5 text-center">
                    <h3 class="font-weight-semi-bold mb-3">Need an answer right away?</h3>
                    <p class="text-muted mb-4">Visit our FAQs for answers to common questions about orders, payments,
                        and getting support.</p>
                    <a href="{{ route('customer.faqs') }}" class="btn btn-primary py-2 px-4 mr-2">Browse FAQs</a>
                    <a href="{{ route('customer.support') }}" class="btn btn-outline-primary py-2 px-4">Get Support</a>
                </div>
            </div>
        </div>
    </div>
@endsection
