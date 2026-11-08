@extends('admin.layouts.mainlayout')



@section('title', 'Products')


@section('content')
    <style>
        .product-image-upload {
            height: 48px;
            padding: 5px;
            cursor: pointer;
        }

        .product-image-upload::file-selector-button,
        .product-image-upload::-webkit-file-upload-button {
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

        .product-image-upload::file-selector-button:hover,
        .product-image-upload::-webkit-file-upload-button:hover {
            background-color: #007bc5;
            box-shadow: 0 2px 8px rgba(0, 144, 231, 0.35);
        }
    </style>

    <div class="row">
        <div class="col-md-12  grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create Category</h4>

                    <form class="forms-sample" method="post" action="{{ route('admin.create-product') }}"
                        enctype="multipart/form-data">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="exampleInputUsername1"> Name</label>
                            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Name"
                                name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1"> Description</label>
                            <input type="text" class="form-control" id="exampleInputUsername1"
                                placeholder=" Description" name="description" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1"> Price</label>
                            <input type="text" class="form-control" id="exampleInputUsername1"
                                placeholder="Price" name="price" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputUsername1"> Amount</label>
                            <input type="text" class="form-control" id="exampleInputUsername1"
                                placeholder="Amount" name="amount" required>
                        </div>
                    
                        <div class="form-group">
                            <label for="exampleInputUsername1"> Image</label>
                            <input type="file" name="image" class="form-control product-image-upload" id="productImage"
                                accept="image/jpeg,image/png,image/webp" required>
                        </div>


                  
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"> Sub Category</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="subcategory_id" required>
                                        @foreach($subcategory as $Data)
                                        <option value="{{$Data->id}}">{{$Data->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>



                        <button type="submit" class="btn btn-primary mr-2">Submit</button>

                    </form>
                </div>
            </div>
        </div>


    </div>
    @endsection
