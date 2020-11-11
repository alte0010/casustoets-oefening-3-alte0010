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
                <table class="table is-fullwidth">
                    <tr>
                        <th style="width: 5%">Name</th>
                        <th style="width: 1%">Country</th>
                        <th style="width: 10%">Founded at</th>
                        <th>History</th>
                    </tr>

                    @foreach($company as $company)
                        <tr>
                            <td>{{$company->name}}</td>
                            <td>{{$company->country</td>
                            <td>{{$company->founded_at</td>
                            <td>{{$company->history}}</td>
                        </tr>
                    @endforeach
                </table>

                <a href="/../company/create">
                    <button class="button">
                        Create company
                    </button>
                </a>
            </div>
        </div>
    </section>
@endsection
