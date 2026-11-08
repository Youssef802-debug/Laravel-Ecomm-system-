@include('customer.layouts.header')

    <style>
        .subcategory-sidebar {
            min-height: 420px;
        }

        .subcategory-sidebar .list-group-item {
            border-left: 0;
            border-right: 0;
        }

        .subcategory-sidebar .list-group-item:first-child {
            border-top: 0;
        }

        .product-grid-card {
            border-radius: 4px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .product-grid-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.12);
        }

        .product-grid-card .card-img-top {
            height: 180px;
            object-fit: cover;
        }
    </style>

    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <aside class="col-lg-3 col-md-4 mb-4">
                <div class="card border subcategory-sidebar">
                    <div class="card-header bg-primary border-0">
                        <h5 class="text-white mb-0">Subcategories</h5>
                    </div>
                    <div class="list-group list-group-flush">

                        @foreach($subdata as $sub)
                        <a href="{{route('customer.subcategoryPage' , $sub->id)}}" class="list-group-item list-group-item-action">{{$sub->name}}</a>
                       @endforeach
                    </div>
                </div>
            </aside>

            <main class="col-lg-9 col-md-8">
                <div class="row">
                    @foreach ($products as $pro )
                        
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                        <div class="card product-grid-card h-100">
                            <img src="{{ asset('storage/' . $pro->image) }}" class="card-img-top" alt="Product image">
                            <div class="card-body text-center p-3">
                                <h6 class="card-title mb-2">{{ $pro->name }}</h6>
                                <p class="text-primary font-weight-bold mb-0">${{ $pro->price }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach

              
                </div>
            </main>
        </div>
    </div>

