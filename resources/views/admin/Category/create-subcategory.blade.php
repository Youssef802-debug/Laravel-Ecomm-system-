@extends('admin.layouts.mainlayout')



@section('title', 'Create SubCategory')


@section('content')
    <style>
        .subcategory-table-wrapper {
            border-radius: 4px;
        }

        .subcategory-table-wrapper .table thead th {
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            color: #ffffff;
            font-weight: 600;
            white-space: nowrap;
        }

        .subcategory-table-wrapper .table td {
            vertical-align: middle;
        }

        .subcategory-table-wrapper .category-name {
            font-size: 0.95rem;
            font-weight: 600;
        }

        .subcategory-table-wrapper .subcategory-name {
            font-size: 0.95rem;
            font-weight: 500;
        }
    </style>

    <div class="row">
        <div class="col-md-12  grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create SubCategory</h4>

                    <form class="forms-sample" method='post' action="{{ route('admin.create-subcategory') }}"> 
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Category</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="category_id">
                                            @foreach($data as $list)
                                            <option value="{{$list->id}}" >{{$list->name}}</option>
                                            @endforeach
                                        
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="exampleInputUsername1" class="col-sm-3 col-form-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="exampleInputUsername1"
                                            placeholder="SubCategory Name" name="name">
                                    </div>
                                </div>
                            </div>
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
                    <h4 class="card-title">Existing Subcategories</h4>
                    <div class="table-responsive subcategory-table-wrapper">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Subcategory</th>
                                    <th scope="col" class="text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $list )
                                    
                                <tr>
                                    <td>{{ $list->id }}</td>
                                    <td><span class="category-name">{{ $list->category->name }}</span></td>
                                    <td><span class="subcategory-name">{{ $list->name }}</span></td>
                                    <td class="text-right">
                                         <form action="{{ route('admin.subcategory.destroy', $list->id) }}" method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this subcategory?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger btn-sm"
                                aria-label="Delete {{ $list->name }}">
                                <i class="mdi mdi-delete-outline mr-1"></i>Delete
                            </button>
                        </form>
                                    </td>
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
