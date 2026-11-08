@extends('admin.layouts.mainlayout')

@section('title', 'Contact Us')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="mb-4">
                <h3 class="font-weight-bold mb-2">Contact Us</h3>
                <p class="text-muted mb-0">Review the customer contact details currently shown in the storefront.</p>
            </div>
        </div>

        <div class="col-lg-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="icon icon-box-primary mb-3">
                        <span class="mdi mdi-email-outline icon-item"></span>
                    </div>
                    <h4 class="card-title">Email</h4>
                    <p class="text-muted mb-1">Customer care</p>
                    <a href="mailto:info@example.com">info@example.com</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="icon icon-box-success mb-3">
                        <span class="mdi mdi-phone-outline icon-item"></span>
                    </div>
                    <h4 class="card-title">Phone</h4>
                    <p class="text-muted mb-1">Customer care</p>
                    <a href="tel:+01234567890">+012 345 67890</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="icon icon-box-warning mb-3">
                        <span class="mdi mdi-map-marker-outline icon-item"></span>
                    </div>
                    <h4 class="card-title">Store address</h4>
                    <p class="text-muted mb-0">123 Street, New York, USA</p>
                </div>
            </div>
        </div>

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <i class="mdi mdi-information-outline text-info mdi-24px mr-3"></i>
                        <div>
                            <h4 class="card-title mb-2">Storefront contact information</h4>
                            <p class="text-muted mb-0">
                                These details mirror the customer-facing footer. Update the contact details in the
                                storefront layout to change what visitors see.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
