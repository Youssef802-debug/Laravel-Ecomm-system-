@extends('admin.layouts.mainlayout')

@section('title', 'Answer Customer Question')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-10 col-xl-9 grid-margin">
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
                <div>
                    <h3 class="font-weight-bold mb-2">Answer Customer Question</h3>
                    <p class="text-muted mb-0">Review the customer's details and send a reply.</p>
                </div>
                <a href="{{ route('admin.support-questions.index') }}" class="btn btn-outline-secondary mt-3 mt-md-0">
                    <i class="mdi mdi-arrow-left mr-1"></i> Back to Questions
                </a>
            </div>
        </div>

        <div class="col-lg-10 col-xl-9 grid-margin">
            <div class="card">
                <div class="card-body p-4">
                    <div class="d-flex flex-wrap align-items-center mb-4 pb-3 border-bottom">
                        <div class="icon icon-box-info mr-3 mb-3 mb-sm-0">
                            <span class="mdi mdi-account-outline icon-item"></span>
                        </div>
                        <div>
                            <h4 class="card-title mb-1">{{ $data->name }}</h4>
                            <a class="text-muted" href="mailto:{{ $data->email }}">
                                <i class="mdi mdi-email-outline mr-1"></i>{{ $data->email }}
                            </a>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="font-weight-bold">Customer question</label>
                        <div class=" rounded border p-3">
                            <p class="mb-0">{{ $data->question }}</p>
                        </div>
                    </div>

                    <form>
                        <div class="form-group">
                            <label class="font-weight-bold" for="answer">Your answer</label>
                            <textarea class="form-control" id="answer" name="answer" rows="6"
                                placeholder="Write your answer here..." required></textarea>
                        </div>

                        <div class="d-flex flex-wrap justify-content-end mt-4">
                            <button class="btn btn-primary px-4" type="submit">
                                <i class="mdi mdi-send mr-1"></i> Send Answer
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
