@extends('common.master')

@section('content')
    <section class="hero  is-medium  is-bold is-primary">
        <div class="hero-body">
            <div class="container">
                <p class="title is-2">Users</p>
                <p class="subtitle is-3">exciting tagline</p>
            </div>
        </div>
    </section>

    <section class="hero  is-medium  is-light is-fullwidth">
        <div class="hero-body">
            <div class="container">
                <a href="/users/create" class="button is-primary">Create Users</a>
                <br><br>
                <table class="table is-fullwidth">
                    <tr>
                        <th style="width: 5%">Username</th>
                        <th style="width: 5%">Name</th>
                        <th style="width: 1%">Email</th>
                        <th style="width: 1%">Confirmed Email at</th>
                        <th style="width: 10%">Role</th>
                        <th style="width: 10%">Created at</th>
                        <th style="width: 10%">Updated at</th>
                        <th style="width: 10%">Actions</th>

                    </tr>

                    @foreach($users as $user)
                        <tr>
                            <td><a href= "{{ URL("/admin/users/{$user->id}") }}"> {{$user->name}}</a></td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->email_verified_at}}</td>
                            <td>{{implode(',',$user->roles()->get()->pluck('name')->toArray()) }}</td>
                            <td>{{$user->created_at}}</td>
                            <td>{{$user->updated_at}}</td>
                            <td><a href="/admin/users/{{$user->id}}/edit" class="button is-primary">Edit User</a>
                                <br><br>
                                <form action="/admin/users/{{$user->id}}?_method=DELETE" method="POST">
                                    @csrf
                                    <button class="ui red basic button">DELETE</button></form></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </section>
@endsection

