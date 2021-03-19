@extends('master')

@section('content')
<div class="custom-product">
    <div class="col-sm-">
        <div class="trending-wrapper">
            <h4>Result for Products</h4>
            @foreach ($products as $item)
            <div class="searched-item">
                <div class="row serached-item">
                    <div class="col-sm-3">
                        <a href="detail/{{$item->id}}">
                            <img class="trending-image" src="{{$item->gallery}}">
                        </a>
                    </div>

                </div>
            </div>
            <div class="searched-item">
                <div class="row serached-item">
                    <div class="col-sm-3">
                        <a href="detail/{{$item->id}}">
                            <div class="">
                                <h2>{{$item->name}}</h2>
                                <h5>{{ $item->description }}</h5>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
            <div class="searched-item">
                <div class="row serached-item">
                    <div class="col-sm-3">
                        <a href="detail/{{$item->id}}">
                            <img class="trending-image" src="{{$item->gallery}}">
                            <div class="">
                                <h2>{{$item->name}}</h2>
                                <h5>{{ $item->description }}</h5>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>
@endsection
