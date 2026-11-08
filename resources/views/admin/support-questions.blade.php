@extends('admin.layouts.mainlayout')

@section('title', 'Support Questions')

@section('content')
    <style>
        .support-inbox-scroll::-webkit-scrollbar {
            width: 4px;
            height: 4px;
        }

        .support-inbox-scroll::-webkit-scrollbar-button,
        .support-inbox-scroll::-webkit-scrollbar-button:vertical,
        .support-inbox-scroll::-webkit-scrollbar-button:vertical:decrement,
        .support-inbox-scroll::-webkit-scrollbar-button:vertical:increment,
        .support-inbox-scroll::-webkit-scrollbar-button:horizontal,
        .support-inbox-scroll::-webkit-scrollbar-button:horizontal:decrement,
        .support-inbox-scroll::-webkit-scrollbar-button:horizontal:increment {
            width: 0;
            height: 0;
            display: none;
            background: transparent;
        }

        .support-inbox-scroll::-webkit-scrollbar-corner {
            background: transparent;
        }

        .support-inbox-scroll::-webkit-scrollbar-track {
            background: #f4f5f7;
            border-radius: 10px;
            border: 0;
        }

        .support-inbox-scroll::-webkit-scrollbar-thumb {
            border-radius: 10px;
            border: 1px solid transparent;
            background-color: #5E50F9;
            background-clip: padding-box;
        }

        .support-inbox-scroll::-webkit-scrollbar-thumb:hover {
            background-color: #4d42d2;
        }

        .support-inbox-scroll thead th {
            position: sticky;
            top: 0;
            z-index: 2;
            color: #ffffff;
            background-color: #191C24;

        }
    </style>

    <div class="row">

        {{-- header --}}
        <div class="col-12 grid-margin">
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
                <div>
                    <h3 class="font-weight-bold mb-2">Support Questions</h3>
                    <p class="text-muted mb-0">Review questions submitted by customers from the help center.</p>
                </div>
                <span class="badge badge-outline-info mt-3 mt-md-0">Question inbox</span>
            </div>
        </div>




        {{-- inbox  --}}
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body py-4">
                    <div class="icon icon-box-info mx-auto mb-4">
                        <span class="mdi mdi-comment-question-outline icon-item"></span>
                    </div>
                    <h4 class="font-weight-bold text-center mb-4">Your question inbox is ready</h4>

                    <div class="table-responsive overflow-auto support-inbox-scroll" style="max-height: 228px;">
                        <table class="table table-hover mb-0">
                            <thead class="">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Question</th>
                                    <th scope="col">Date</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <td class="font-weight-bold">{{ $item->name }}</td>
                                        <td><a href="mailto:olivia@example.com">{{ $item->email }}</a></td>
                                        <td>{{ $item->question }}</td>
                                        <td>{{ $item->created_at->format('d-m-Y') }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('admin.support-questions.answer', $item->id) }}"
                                                class="btn btn-primary btn-sm">
                                                <i class="mdi mdi-email-send-outline mr-1"></i> Answer
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        {{-- check list --}}
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">A helpful reply checklist</h4>
                    <ul class="list-unstyled text-muted mb-0">
                        <li class="mb-2"><i class="mdi mdi-check-circle-outline text-success mr-2"></i>Understand the
                            customer's question before replying.</li>
                        <li class="mb-2"><i class="mdi mdi-check-circle-outline text-success mr-2"></i>Keep personal
                            and order information private.</li>
                        <li><i class="mdi mdi-check-circle-outline text-success mr-2"></i>Mark a question resolved
                            after the customer has a clear answer.</li>
                    </ul>
                </div>
            </div>
        </div>


        {{-- faq part --}}
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Looking for common answers?</h4>
                    <p class="text-muted">The FAQ page covers ordering, order updates, item issues, and payment
                        questions.</p>
                    <a href="{{ route('admin.faqs.index') }}" class="btn btn-outline-primary btn-sm">
                        <i class="mdi mdi-frequently-asked-questions mr-1"></i> View FAQs
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
