@extends('common.master')

@section('content')
    l
        <div class="hero-body">
            <div class="container">
                <p class="title is-1">{{$company->name}}</p>
                <p class="subtitle is-3"></p>
            </div>
        </div>


    <section class="section">
        <div class="container">
            <div class="columns">

                <div class="column is-12">

                    <div class="content">
                        <h4>Country:</h4> {{ $company->country }}
                        <br><br>
                        <h4>Founded at: </h4> {{ $company->founded_at }}
                        <br><br>
                        <br><br>
                        <h4>History:</h4> {!! $company->history !!}

                    </div>

                    <td><br><br>
                        <a href="/companies/{{$company->id}}/edit" class="button is-primary">Edit Company</a>
                        <br><br>
                        <form action="/companies/{{$company->id}}?_method=DELETE" method="POST">
                            @csrf
                            <button class="ui red basic button">DELETE</button></form></td>
                </div>
            </div>
        </div>
    </section>

@endsection
