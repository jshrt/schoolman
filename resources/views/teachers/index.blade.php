<!-- resources/views/organisms/index.blade.php -->
<!DOCTYPE html>
@extends('layouts.main')

    @section('content')
    <h1>tenants</h1>
      <td>{!! Html::linkRoute('tenants.teachers.create', "New teacher") !!}</td>
        <div class="container">
            <div class="content">
                <div class="title">tenants</div>
                <div class="content">
                   <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#ID</th>
                          <th>Name</th>
                          <th>CODE</th>
                          <th>Controls</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($all as $teacher)
                        <tr>
                          <td>{!! Html::linkRoute('tenants.teachers.show', $teacher->id, array('id' => $teacher->id, 'school_id' => CurrentTenantSchoolId()) ) !!}</td>
                          <td><?= $teacher->first_name ?></td>
                          <td><?= $teacher->last_name ?></td>
                          <td><?= $teacher->serialcode ?></td>
                          <td><?= $teacher->birthdate ?></td>
                          <td><?= $teacher->hiredate ?></td>
                          <td>
                             {!! Form::open( array(
                                                    'route' => array('tenants.teachers.destroy', "school_id" => CurrentTenantSchoolId(), "id" => $teacher->id )
                                                    , 'method' => 'DELETE')) !!}
                            {!! csrf_field() !!}

                          <a href="#"><button><i class="glyphicon glyphicon-plus"></i>Delete</button></a>
                            {!! Form::close() !!}

                          </td>
                          <td>
                  <a href="#"><button><i class="glyphicon glyphicon-plus"></i>Edit</button></a>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    @stop
