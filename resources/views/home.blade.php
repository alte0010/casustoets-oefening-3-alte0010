{{--@extends('layouts.app')--}}
@extends('common.master')

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

                    You are logged in! Welcome, {{Auth::user()->name}}

                        <form method="get" style="margin-right: 16px" action="/welcome">
                            <button type="submit">Go to the Home page</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
