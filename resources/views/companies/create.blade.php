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
                        <input class="input @error('name') is-danger @enderror" type="name" name="name" id="name" value="{{old('name') }}">

                    @error('name')
                    <p class="help is-danger">{{ $errors->first('name') }}</p>
                    @enderror

                    </div>
                </div>

                <div class="field">
                    <label class="label" for="country">Country</label>

                    <div class="control">
                        <input class="input @error('country') is-danger @enderror" type="country" name="country" id="country" value="{{old('country') }}">

                        @error('country')
                        <p class="help is-danger">{{ $errors->first('country') }}</p>
                        @enderror

                    </div>
                </div>

                <div class="field">
                    <label class="label" for="founded_at">Founded At</label>

                    <div class="control">
                        <label for="founded_at">Enter an exact Date and Time (YYYY-MM-DD_HH:MM:SS):</label>
                        <input class="input @error('founded_at') is-danger @enderror" type="founded_at" name="founded_at" id="founded_at" value="{{old('founded_at')  }}">

                        @error('founded_at')
                        <p class="help is-danger">{{ $errors->first('founded_at') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="history">History</label>

                    <div class="control">
                        <input class="input @error('history') is-danger @enderror" type="history" name="history" id="history" value="{{old('history') }}">

                        @error('history')
                        <p class="help is-danger">{{ $errors->first('history') }}</p>
                        @enderror

                    </div>
                </div>


                <label class="label" for="email">Email</label>

                <div class="control">
                    <input class="input @error('email') is-danger @enderror" type="email" name="email" id="email" value="{{old('email') }}">

                    @error('email')
                    <p class="help is-danger">{{ $errors->first('email') }}</p>
                    @enderror

                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>

@endsection


                {{-- <div class="field">
                     <label class="label" for="email">Email</label>

                     <div class="control">
                     <input class="input @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                     @error('email')
                     <p class="help is-danger">
                         p class="help is-danger">{{ $errors->first('history') }}</p>
                                     </p>
                     @enderror

                 </div>--}}


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
