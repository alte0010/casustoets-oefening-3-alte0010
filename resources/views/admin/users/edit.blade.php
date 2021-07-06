@extends('common.master')

                @section('content')
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">Edit user </div>

                                    <div class="card-body">
                                        <form method="POST" action="admin.users.update{{$user->id}}">
                                        {{--<form action="{{route('admin.users.update', $user)}}" method="POST">--}}
                                            @csrf
                                            {{method_field('PUT')}}
                                            @foreach($roles as $role)
                                                <div class="form-check">
                                                    <input type="checkbox" name="roles[]" value="{{ $role->id }}">
                                                    <label>{{ $role->name }}</label>
                                                </div>
                                            @endforeach
                                            <button type="submit" class="btn btn-primary">
                                                Update
                                            </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endsection

{{--@extends('common.master')--}}

{{--@section('content')--}}
{{--    <div id="wrapper">--}}
{{--        <div id="page" class="container">--}}
{{--            <h1 class="heading has-text-weight-bold is-size-4">Update User</h1>--}}

{{--            <form method="POST" action="/admin/users/{{$users->id}}">--}}
{{--                @csrf--}}
{{--                @method('PUT')--}}

{{--                <div class="field">--}}
{{--                    <label class="label" for="name">{{$users->name}}</label>--}}


{{--                    <div class="card">--}}
{{--                    <label class="checkbox" for="name">{{$users->role}}</label>--}}
{{--                        <input type="checkbox" >--}}
{{--                        Remember me--}}
{{--                    </label>--}}
{{--                        <label class="checkbox">--}}
{{--                            <input type="checkbox">--}}
{{--                            Remember me--}}
{{--                        </label>--}}
{{--                        <label class="checkbox">--}}
{{--                            <input type="checkbox">--}}
{{--                            Remember me--}}
{{--                        </label>--}}


{{--                    <button type="submit" class="btn btn-primary">--}}
{{--                        Update--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                </div>--}}
{{--@endsection--}}
