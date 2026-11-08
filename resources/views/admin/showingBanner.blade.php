

@extends('admin.banners')

@section('banners')



                    <div class="row">
                        @forelse ($data as $banner)
                            <div class="col-lg-6 grid-margin stretch-card">
                                <div class="card w-100">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="card-title mb-0">
                                               titel
                                            </h4>
                                            @if ($banner->is_active)
                                                <span class="badge badge-outline-success">Active</span>
                                            @else
                                                <span class="badge badge-outline-warning">not active</span>
                                            @endif
                                        </div>
                                        <div class="rounded overflow-hidden mb-3">
                                            <img src="{{ asset('storage/' . $banner->image) }}"
                                                alt="Homepage banner"
                                                class="img-fluid w-100">
                                        </div>
                                        <p class="text-muted mb-0">{{ $banner->created_at->format('F j, Y') }}</p>
                                        <form action="{{ route('admin.banners.destroy', $banner->id) }}" method="POST"
                                            class="mt-3"
                                            onsubmit="return confirm('Are you sure you want to delete this banner?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm">
                                                <i class="mdi mdi-delete-outline mr-1"></i> Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-12">
                                <div class="text-center text-muted py-5">
                                    <i class="mdi mdi-image-off-outline mdi-36px d-block mb-2"></i>
                                    <p class="mb-1 font-weight-bold">No banners have been added yet</p>
                                    <p class="mb-0">Add a banner to see it listed here.</p>
                                </div>
                            </div>
                        @endforelse
                    </div> 
@endsection


