@extends('layout.admin')


@section('content')
    @if (session('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <strong>Nice! </strong> {{ session('message') }}
        </div>
    @endif
@endsection
