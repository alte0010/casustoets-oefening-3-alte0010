@extends('common.master')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-12">  These divs are needed for proper layout
                    <form method="POST" action="/companies">
                        <div class="card">  The form is placed inside a Bulma Card component
                            <header class="card-header">
                                <p class="card-header-title">  The Card header content
                                    Create a New Company
                                </p>
                            </header>

                            <div class="card-content">
                                <div class="content">
                                    @csrf
                                     Here are all the form fields
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
                                        <button type="submit" class="button is-primary">Save</button>
                                    </div>
                                    <div class="control">
                                        <button type="reset" class="button is-warning">Reset</button>
                                    </div>
                                    <div class="control">
                                        <a type="button" href="/companies" class="button is-light">Cancel</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    {{--.--}}
@endsection
