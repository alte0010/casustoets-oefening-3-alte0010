@extends('common.master')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">Update Company</h1>

            <form method="POST" action="/companies/{{$company->id}}">
                @csrf
                @method('PUT')

                <div class="field">
                    <label class="label" for="name">Name</label>

                    <div class="control">
                        <input class="input" type="name" name="name" id="name" value="{{$company->name}}">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="country">Country</label>

                    <div class="control">
                        <textarea class="country" name="country" id="country">{{$company->country}}</textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="history">History</label>

                    <div class="control">
                        <textarea class="textarea" name="history" id="history">{{$company->history}}</textarea>
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>
        </div>
@endsection
