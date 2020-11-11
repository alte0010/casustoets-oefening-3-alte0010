@extends('common.master')

@section('content')
    <section class="hero  is-large  is-bold is-primary"  style="background: url('{{$company->img_url}}') no-repeat center center; background-size: cover;" >
        <div class="hero-body">
            <div class="container">
                <p class="title is-2">{{$company->name}}</p>
                <p class="subtitle is-3"></p>

            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="columns">

                <div class="column is-12">

                    <div class="content">
                        <p>Published: {{ $company->published_at }}</p>

                        {!! $company->history !!}
                    </div>

                </div>
            </div>
    </section>
@endsection<?php
