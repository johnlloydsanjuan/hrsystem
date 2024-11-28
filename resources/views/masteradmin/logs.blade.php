@extends('boilerplate')

@section('content')
    @include('components.navbar')
    <div class="wrapper d-flex">
        @include('components.sidebar')
        <div class="main p-3 justify-content-center">
            <div class="container-xl">

            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush
