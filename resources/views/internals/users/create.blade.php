<!-- resources/views/auth/register.blade.php -->
@extends('layouts.main')

    @section('content')
        <div class="container-fluid">
            <div class="content">
                <div class="title">Login Page</div>
            </div>
            <div class="content">
               <form method="POST" action="/admin/users/store">
                    {!! csrf_field() !!}

                    <div class="form-group">
                        <div class="form-label"> Name </div>
                        <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                    </div>

                    <div class="form-group">
                        <div class="form-label"> Email</div>
                        <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                    </div>

                    <div class="form-group">
                        <div class="form-label"> Password </div>
                        <input class="form-control" type="password" name="password">
                    </div>

                    <div class="form-group">
                        <div class="form-label"> Confirm Password </div>
                        <input class="form-control" type="password" name="password_confirmation">
                    </div>


                    <div class="form-group">
                        <div class="form-label"> Choose Role </div>
                        {!! Form::select("role", $roles,null, ["class" => "form-control"]) !!}
                    </div>

                    @if(@currentUserIsSuperAdmin())
                    <div class="form-group">
                        <div class="form-label"> Choose School</div>
                        {!! Form::select("school_id", $schools,null, ["class" => "form-control"]) !!}
                    </div>
                    @endif

                    <div class="form-group">
                        <button type="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    @stop


