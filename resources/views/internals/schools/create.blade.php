<!-- resources/views/organisms/register.blade.php -->
@extends('layouts.main')

    @section('content')
        <div class="container-fluid">
            <div class="content">
                <div class="title">Create School</div>
            </div>
            <div class="content">
            {!! 
                Form::open([
                    'route'  => 'admin.schools.store',
                    'method' => 'POST'
                            ]) 
            !!}
            
                    {!! csrf_field() !!}

                    <div class="form-groups">
                        <div class="form-label"> Name </div>
                        <input class="form-controls" type="text" name="name">
                    </div>

                    <div class="form-groups">
                        <div class="form-label"> Code </div>
                        <input class="form-controls" type="text" name="code">
                    </div>

                    <div class="form-groups">
                        <button type="submit">Create</button>
                    </div>

            {!! Form::close() !!}
            </div>
        </div>
    @stop


