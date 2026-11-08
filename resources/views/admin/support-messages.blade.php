@extends('admin.layouts.mainlayout')

@section('title', 'Support Messages')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
                <div>
                    <h3 class="font-weight-bold mb-2">Support Messages</h3>
                    <p class="text-muted mb-0">A dedicated space for customer email and support conversations.</p>
                </div>
                <span class="badge badge-outline-primary mt-3 mt-md-0">
                    <i class="mdi mdi-email-outline mr-1"></i> Message center
                </span>
            </div>
        </div>

        <div class="col-lg-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body text-center py-5">
                    <div class="icon icon-box-primary mx-auto mb-4">
                        <span class="mdi mdi-email-open-outline icon-item"></span>
                    </div>
                    <h4 class="font-weight-bold">No messages to display</h4>
                    <p class="text-muted mx-auto mb-0" style="max-width: 500px;">
                        Support conversations will show here after a customer message channel is connected. You can
                        currently reach customers through the contact details on the Contact page.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Inbox overview</h4>
                    <div class="d-flex justify-content-between align-items-center border-bottom py-3">
                        <span class="text-muted">Unread</span>
                        <span class="badge badge-outline-secondary">0</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center border-bottom py-3">
                        <span class="text-muted">Awaiting reply</span>
                        <span class="badge badge-outline-secondary">0</span>
                    </div>
                    <div class="d-flex justify-content-between align-items-center pt-3">
                        <span class="text-muted">Resolved</span>
                        <span class="badge badge-outline-secondary">0</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
