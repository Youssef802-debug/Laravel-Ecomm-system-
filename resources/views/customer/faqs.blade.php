@extends('customer.FAQ-mainlayout')

@section('support-content')
    <div class="container-fluid bg-primary py-5">
        <div class="row px-xl-5">
            <div class="col-12 text-center text-white">
                <p class="text-uppercase mb-2">Customer care</p>
                <h1 class="font-weight-semi-bold mb-2">Frequently Asked Questions</h1>
                <p class="mb-0">Quick answers to help make shopping with us easier.</p>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5 pb-3">
        <div class="row px-xl-5 justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-4">
                    <h2 class="section-title px-5"><span class="px-2">How can we help?</span></h2>
                </div>

                <div id="faqAccordion">

                    @foreach ($faq as $data )
                        
                    <div class="card border-0 shadow-sm mb-3">
                        <div class="card-header bg-secondary border-0 p-0" id="faqHeadingOne">
                            <h3 class="mb-0">
                                <button class="btn btn-link text-dark text-left font-weight-semi-bold w-100 p-4"
                                    type="button" data-toggle="collapse" data-target="#faqOne" aria-expanded="true"
                                    aria-controls="faqOne">
                                    {{$data->question}}
                                </button>
                            </h3>
                        </div>
                        <div id="faqOne" class="collapse show" aria-labelledby="faqHeadingOne"
                            data-parent="#faqAccordion">
                            <div class="card-body text-muted">
                                {{$data->answer}}
                            </div>
                        </div>
                    </div>
                    @endforeach

            
                </div>

                <div class="text-center mt-5">
                    <p class="text-muted mb-3">Still need a hand?</p>
                    <a href="{{ route('customer.support') }}" class="btn btn-primary py-2 px-4">Contact Support</a>
                </div>
            </div>
        </div>
    </div>
@endsection
