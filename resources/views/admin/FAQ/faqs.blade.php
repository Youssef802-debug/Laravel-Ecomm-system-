@extends('admin.layouts.mainlayout')

@section('title', 'Manage FAQs')

@section('content')
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
                <div>
                    <h3 class="font-weight-bold mb-2">Manage FAQs</h3>
                    <p class="text-muted mb-0">Create and organize the answers shown to your customers.</p>
                </div>
                <button type="button" class="btn btn-primary mt-3 mt-md-0" id="addFaqButton">
                    <i class="mdi mdi-plus mr-1"></i> Add FAQ
                </button>
            </div>
        </div>

        <div class="col-12 grid-margin" id="faqFormPanel" hidden>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                            <h4 class="card-title mb-1" id="faqFormTitle">Add a frequently asked question</h4>
                            <p class="text-muted mb-0">Write a clear question and a helpful answer.</p>
                        </div>
                        <button type="button" class="btn btn-outline-secondary btn-sm" id="closeFaqForm"
                            aria-label="Close FAQ form">
                            <i class="mdi mdi-close"></i>
                        </button>
                    </div>

                    <form id="faqForm" action='{{ route("admin.faqs.store") }}'  method="post">
                        @csrf

                        <div class="form-group">
                            <label for="faqQuestion">Question</label>
                            <input type="text" name="question" class="form-control" id="faqQuestion" maxlength="180"
                                placeholder="For example: How can I track my order?" required>
                        </div>
                        <div class="form-group">
                            <label for="faqAnswer">Answer</label>
                            <textarea name="answer" class="form-control" id="faqAnswer" rows="4" maxlength="1200"
                                placeholder="Enter the answer customers will see..." required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="faqStatus">Visibility</label>
                            <select name="status" class="form-control" id="faqStatus">
                                <option value="published">Published</option>
                                <option value="draft">Draft</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2" id="saveFaqButton">
                            <i class="mdi mdi-content-save-outline mr-1"></i> Save FAQ
                        </button>
                        <button type="button" class="btn btn-outline-secondary" id="cancelFaqForm">Cancel</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
                        <div>
                            <h4 class="card-title mb-1">Your FAQs</h4>
                            <p class="text-muted mb-0">FAQs displayed to your customers.</p>
                        </div>
                    </div>

                    <div class="table-responsive">
                        @hasSection('showing_faqs')
                            @yield('showing_faqs')
                        @else
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th style="min-width: 220px;">Question</th>
                                        <th style="min-width: 280px;">Answer</th>
                                        <th>Status</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="faqTableBody"></tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        (() => {
            const faqFormPanel = document.getElementById('faqFormPanel');
            const faqQuestion = document.getElementById('faqQuestion');
            document.getElementById('addFaqButton').addEventListener('click', () => {
                faqFormPanel.hidden = false;
                faqQuestion.focus();
            });

            const closeForm = () => {
                faqFormPanel.hidden = true;
            };

            document.getElementById('closeFaqForm').addEventListener('click', closeForm);
            document.getElementById('cancelFaqForm').addEventListener('click', closeForm);
        })();
    </script>
@endsection
