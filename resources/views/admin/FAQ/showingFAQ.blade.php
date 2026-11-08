
@extends('admin.FAQ.faqs')



@section('showing_faqs')


    <table class="table table-hover">
        <thead>
            <tr>
                <th style="min-width: 220px;">Question</th>
                <th style="min-width: 280px;">Answer</th>
                <th>Status</th>
                <th class="text-right">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $faq)
                <tr>
                    <td class="font-weight-bold">{{ $faq->question }}</td>
                    <td class="text-muted">{{ $faq->answer }}</td>
                    <td>
                        <span class="badge {{ $faq->is_active ? 'badge-outline-success' : 'badge-outline-warning' }}">
                            {{ $faq->is_active ? 'Active' : 'Inactive' }}
                        </span>
                    </td>
                    <td class="text-right">
                        <form action="{{ route('admin.faqs.destroy', $faq->id) }}" method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this FAQ?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger btn-sm"
                                aria-label="Delete {{ $faq->question }}">
                                <i class="mdi mdi-delete-outline mr-1"></i>Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center text-muted">No FAQs found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>



@endsection
