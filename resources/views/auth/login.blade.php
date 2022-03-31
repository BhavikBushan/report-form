@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <a class="nav-link" href="{{ route('report.create') }}">{{ __('Create New Report') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
