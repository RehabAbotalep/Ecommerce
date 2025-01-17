@extends('admin.layout.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="alert alert-success" role="alert">
                            <p>You are Logged In As Adminstrator</p>
                            <p>{{ sayhello('Admin') }}</p>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
