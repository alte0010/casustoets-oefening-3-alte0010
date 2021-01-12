@extends('common.master')

@section('content')
    <section class="hero  is-medium  is-bold is-primary">
        <div class="hero-body">
            <div class="container">
                <p class="title is-2">Companies</p>
                <p class="subtitle is-3">exciting tagline</p>
            </div>
        </div>
    </section>
{{-- --}}
    <section class="hero  is-medium  is-light is-fullwidth">
        <div class="hero-body">
            <div class="container">
                <a href="/companies/create" class="button is-primary">Create Company</a>
                <br><br>
                <table class="table is-fullwidth">
                    <tr>
                        <th style="width: 5%">Name</th>
                        <th style="width: 1%">Country</th>
                        <th style="width: 10%">Founded at</th>
                        <th style="width: 10%">History</th>
                        <th style="width: 10%">Created on</th>
                        <th style="width: 10%">Last edited</th>
                        <th style="width: 10%"></th>
                    </tr>

                    @foreach($company as $company)
                        <tr>
                            <td><a href= "{{ URL("/companies/{$company->id}") }}"> {{$company->name}}</a></td>
                            {{--<td>{{$company->name}}</td>--}}
                            <td>{{$company->country}}</td>
                            <td>{{$company->founded_at}}</td>
                            <td>{!!$company->history!!}</td>
                            <td>{{$company->created_at}}</td>
                            <td>{{$company->updated_at}}</td>
                            <td><a href="/companies/{{$company->id}}/edit" class="button is-primary">Edit Company</a>
                                <br><br>
                            <form action="/companies/{{$company->id}}?_method=DELETE" method="POST">
                                    @csrf
                                    <button class="ui red basic button">DELETE</button></td>
                        </tr>
                    @endforeach
                </table>
                </a>
            </div>
        </div>
        </div>
    </section>
@endsection
