@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome User <a href="{{ route('user.dealership.index') }}" class ="btn btn-primary">View vehicles</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
