@extends('layout')
@section('headline', 'Amazing E-Grocery')

@section('content')
    <div class="container-fluid gx-0 px-4 px-lg-5 mt-5" style="min-height: 76vh;max-width: 540px;display: flex; flex-direction: column; justify-content: space-evenly;align-items: center;">
        <div class="container mb-3">
            @foreach ($items as $item)
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{$item->item_name}}</h5>
                            <p class="card-text">${{$item->price}}</p>
                            <a href="/cart/delete/{{$item->id}}">Delete</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="container shadow-sm p-3 rounded mx-5" style="max-width:300px; width">
            <h3>Total Purchase</h3>
            <div class="my-3">
                <h6 style="color: grey">Total : ${{$sum}}</h6>
                <a href="/checkout" class="btn btn-danger">Checkout</a>
            </div>
        </div>
    </div>
@endsection
