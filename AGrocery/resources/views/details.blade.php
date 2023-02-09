@extends('layout')
@section('headline', 'Amazing E-Grocery')

@section('content')
    <div class="container-fluid gx-0 px-4 px-lg-5 mt-5" style="min-height: 76vh;max-width: 540px;display: flex; flex-direction: row; justify-content: space-evenly;align-items: center;">
        <div class="container mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="..." class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->item_name}}</h5>
                        <p class="card-text">{{$item->item_desc}}</p>
                        <p class="card-text">${{$item->price}}</p>
                        <a class="btn btn-outline-dark mt-auto" href="/cart/add/{{$item->id}}">Add To Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
