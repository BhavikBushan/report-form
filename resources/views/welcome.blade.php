@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="card">
                        <div class="card-header text-center bg-primary text-light">Report Generation </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <a class="nav-link btn btn-block bg-primary text-light" href="{{ route('reports.create') }}">{{ __('Create New Report') }}</a>
                            </div>
                            <div class="col-md-3">
                                <a class="nav-link btn btn-block bg-success text-light" href="{{ route('reports.index') }}">{{ __('View Reports') }}</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection