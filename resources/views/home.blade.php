@extends('layout.master')

@section('content')
    @include('partials.slide')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    @include('partials.menu')
                </div>
                <div class="col-sm-9 padding-right">
                    @include('recomendados')
                    @include('agregados')
                </div>
            </div>
        </div>
    </section>

@endsection
