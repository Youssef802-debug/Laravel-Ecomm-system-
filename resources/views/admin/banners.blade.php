@extends('admin.layouts.mainlayout')

@section('title', 'Manage Banners')

@section('content')
    <style>
        .banner-image-upload::file-selector-button,
        .banner-image-upload::-webkit-file-upload-button {
            height: 36px;
            margin-right: 12px;
            padding: 0 18px;
            border: 0;
            border-radius: 6px;
            background-color: #0090e7;
            color: #ffffff;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.2s ease, box-shadow 0.2s ease;
        }

        .banner-image-upload::file-selector-button:hover,
        .banner-image-upload::-webkit-file-upload-button:hover {
            background-color: #007bc5;
            box-shadow: 0 2px 8px rgba(0, 144, 231, 0.35);
        }
    </style>

    <div class="row">
        <div class="col-12 grid-margin">
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-4">
                <div>
                    <h3 class="font-weight-bold mb-2">Manage Homepage Banners</h3>
                    <p class="text-muted mb-0">Add promotional images and manage the slides shown on your homepage.</p>
                </div>
                <button type="button" class="btn btn-primary mt-3 mt-md-0" id="addBannerButton">
                    <i class="mdi mdi-plus mr-1"></i> Add Banner
                </button>
            </div>
        </div>

        <div class="col-12 grid-margin" id="bannerFormPanel" hidden>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                            <h4 class="card-title mb-1">Add a homepage banner</h4>
                            <p class="text-muted mb-0">Choose an image and add the text displayed over it.</p>
                        </div>
                        <button type="button" class="btn btn-outline-secondary btn-sm" id="closeBannerForm"
                            aria-label="Close banner form">
                            <i class="mdi mdi-close"></i>
                        </button>
                    </div>

                    @if (session('success'))
                        <div class="alert alert-success" role="status">{{ session('success') }}</div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            <p class="font-weight-bold mb-1">Please check the form and try again.</p>
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form id="bannerForm" action="{{ route('admin.banner.store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="bannerImage">Banner image</label>
                            <input type="file" name="image" class="form-control-file banner-image-upload"
                                id="bannerImage" accept="image/*"
                                required>
                            <small class="form-text text-muted">Select an image to upload. A temporary preview will
                                appear below.</small>
                            <div class="mt-3" id="bannerImagePreview" hidden>
                                <img src="" alt="Selected banner preview" class="img-fluid rounded"
                                    style="max-height: 240px;">
                            </div>
                        </div>
                        {{-- <div class="form-group">
                            <label for="bannerHeadline">Headline</label>
                            <input type="text" name="headline" class="form-control" id="bannerHeadline"
                                maxlength="100" placeholder="For example: New Season Collection">
                        </div>
                        <div class="form-group">
                            <label for="bannerSubtitle">Subtitle</label>
                            <input type="text" name="subtitle" class="form-control" id="bannerSubtitle"
                                maxlength="160" placeholder="For example: Discover the latest styles">
                        </div>
                        <div class="form-group">
                            <label for="bannerStatus">Visibility</label>
                            <select class="form-control" id="bannerStatus" name="is_active">
                                <option value="1">Active</option>
                                <option value="0">Draft</option>
                            </select>
                        </div> --}}
                        <button type="submit" class="btn btn-primary mr-2">
                            <i class="mdi mdi-content-save-outline mr-1"></i> Save Banner
                        </button>
                        <button type="button" class="btn btn-outline-secondary" id="cancelBannerForm">Cancel</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <h4 class="card-title mb-1">Homepage slides</h4>
                        <p class="text-muted mb-0">These banners are loaded from the server.</p>
                    </div>

                    @if (session('success'))
                        <div class="alert alert-success" role="status">{{ session('success') }}</div>
                    @endif

                    @yield('banners')
                    {{-- showing banners --}}
                    <p class="text-muted small mb-0 mt-3">
                        <i class="mdi mdi-information-outline mr-1"></i>
                        Banner changes are submitted to the server. The image preview is temporary and is not saved by
                        JavaScript.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script>
        (() => {
            const bannerFormPanel = document.getElementById('bannerFormPanel');
            const bannerForm = document.getElementById('bannerForm');
            const bannerImage = document.getElementById('bannerImage');
            const bannerImagePreview = document.getElementById('bannerImagePreview');
            const bannerPreviewImage = bannerImagePreview.querySelector('img');

            const closeForm = () => {
                bannerFormPanel.hidden = true;
                bannerForm.reset();
                bannerImagePreview.hidden = true;
                bannerPreviewImage.removeAttribute('src');
            };

            document.getElementById('addBannerButton').addEventListener('click', () => {
                bannerFormPanel.hidden = false;
                bannerImage.focus();
            });

            document.getElementById('closeBannerForm').addEventListener('click', closeForm);
            document.getElementById('cancelBannerForm').addEventListener('click', closeForm);

            bannerImage.addEventListener('change', () => {
                const file = bannerImage.files[0];
                if (!file) {
                    bannerImagePreview.hidden = true;
                    bannerPreviewImage.removeAttribute('src');
                    return;
                }

                if (!file.type.startsWith('image/')) {
                    bannerImage.value = '';
                    bannerImagePreview.hidden = true;
                    bannerPreviewImage.removeAttribute('src');
                    return;
                }

                bannerPreviewImage.src = URL.createObjectURL(file);
                bannerImagePreview.hidden = false;
            });
        })();
    </script>
@endsection
