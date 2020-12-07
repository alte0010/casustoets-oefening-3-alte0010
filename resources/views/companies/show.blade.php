@extends('common.master')

@section('content')
    l
        <div class="hero-body">
            <div class="container">
                <p class="title is-1">{{$company->name}}</p>
                <p class="subtitle is-3"></p>

            </div>

    <a href="/companies/{{$company->id}}/edit" class="button is-primary">Edit Company</a>
            <form action="/companies/{{$company->id}}?_method=DELETE" method="POST">
                @csrf
                <button class="ui red basic button">DELETE</button>
            </form>

    </section>


    <section class="section">
        <div class="container">
            <div class="columns">

                <div class="column is-12">

                    <div class="content">
                        <p>Country: {{ $company->country }}</p>
                        <p>Founded at: {{ $company->founded_at }}</p>

                        {!! $company->history !!}
                    </div>
                </div>
            </div>
    </section>

@endsection
