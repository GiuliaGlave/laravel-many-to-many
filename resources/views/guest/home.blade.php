@extends('layouts.guest')

@section('title', 'Guest')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Home') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Benvenuto') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    Utente ospite
                </div>
            </div>
        </div>
    </div>
</div>
@endsection