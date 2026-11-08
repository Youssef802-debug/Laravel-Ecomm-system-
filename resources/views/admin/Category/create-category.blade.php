@extends('admin.layouts.mainlayout')



@section('title', 'Create Category')


@section('content')
    <style>
        .category-table-wrapper {
            border-radius: 4px;
        }

        .category-table-wrapper .table thead th {
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            color: #ffffff;
            font-weight: 600;
            white-space: nowrap;
        }

        .category-table-wrapper .table td {
            vertical-align: middle;
        }
    </style>

    <div class="row">
        <div class="col-md-12  grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create Category</h4>

                    <form class="forms-sample" action="{{ route('admin.create-category') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputUsername1"> Name of new category </label>
                            <input type="text" class="form-control" id="exampleInputUsername1"
                                placeholder="Category Name" name="name">
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Existing Categories</h4>
                    <div class="table-responsive category-table-wrapper">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $list)
                                    <tr>
                                        <td>{{ $list->id }}</td>
                                        <td class="font-weight-bold">{{ $list->name }}</td>
                                        <td class="font-weight-bold">  <form action="{{ route('admin.category.destroy', $list->id) }}" method="POST"
                                            onsubmit="return confirm('Are you sure you want to delete this category?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm">
                                                <i class="mdi mdi-delete-outline mr-1"></i>Delete
                                            </button>
                                        </form></td>

                                    </tr>
                                   
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
