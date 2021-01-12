@extends('common.master')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">Create Company</h1>

            <form method="POST" action="/companies">
                @csrf

                <div class="field">
                    <label class="label" for="name">Name</label>

                    <div class="control">
                        <input class="input" type="name" name="name" id="name">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="country">Country</label>

                    <div class="control">
                        <input class="country" name="country" id="country">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="history">History</label>

                    <div class="control">
                        <input class="textarea" name="history" id="history">
                    </div>
                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>

@endsection
    {{--<section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-12">
                    <form method="POST" action="/companies">
                        <div class="card">
                            <header class="card-header">
                                <p class="card-header-title">
                                    Create a New Company
                                </p>
                            </header>

                            <div class="card-content">
                                <div class="content">
                                    @csrf
                                     Fill in the form fields

                                    <div class="field">
                                        <label class="label">Name</label>
                                        <div class="control">
                                            <input name="name" class="input @error('name') is-danger @enderror"
                                                   type="text" placeholder="name" value="{{old('name')}}">
                                        </div>
                                        @error('name')
                                        <p class="help is-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="field">
                                        <label class="label">Country</label>
                                        <div class="control">
                                            <input name="name" class="input @error('name') is-danger @enderror"
                                                   type="text" placeholder="name" value="{{old('name')}}">
                                        </div>
                                        @error('name')
                                        <p class="help is-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="field">
                                        <label class="label">History</label>
                                        <div class="control">
                                            <textarea class="textarea @error('comment') is-invalid @enderror" placeholder="Comment" name="comment">{{old('comment')}}</textarea>
                                        </div>
                                        @error('comment')
                                        <p class="help is-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                </div>
                                <div class="field is-grouped">
                                     Here are the form buttons: save, reset and cancel
                                        <div class="control">
                                            <button class="button is-link" type="save">Save</button>
                                        </div>
                                    </div>
                                    <div class="control">
                                        <button type="reset" class="button is-warning">Reset</button>
                                    </div>
                                        <div class="control">
                                            <button class="button is-link" type="cancel">Cancel</button>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    --}}{{--.--}}{{--
@endsection
--}}
