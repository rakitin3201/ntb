@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mb-3">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif
        </div>

        <div class="col-md-8 mb-3">
            <div class="card shadow-sm">
                <div class="card-header">{{ __('Qui sommes nous ?') }}</div>

                <div class="card-body">
                    {{ __('Section en cours de developppement') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
