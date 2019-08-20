@extends('site::layouts.site')

@section('breadcrumbs')
    <li class="breadcrumb-item active">{{ $page->name }}</li>
@stop

@section('content')
    <div class="bg-purple w-full px-2">
        <div class="container mx-auto rounded-t shadow bg-cover bg-bottom m-4 p-24" style="background-image: url({{ asset('images/erasmus-bridge-rotterdam-1253021.jpg') }})">

            <div class="text-center text-white">
                <h1 class="font-sans borderedtext">{{ $page->subtitle }}</h1>
                <br />
                <h3 class="tracking-wide mt-2 mb-4 borderedtext">Your business rules, our code</h3>

            </div>
        </div>

    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12" id="exdeliver-home">
                {!! $page->translate()->transform() !!}
            </div>
        </div>
    </div>
@endsection
