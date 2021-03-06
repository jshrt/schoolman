<!-- resources/views/organisms/index.blade.php -->
<!DOCTYPE html>
@extends('layouts.main')

    @section('content')
    <h1>tenants</h1>
      <td>{!! Html::linkRoute('schools.students.create', "New student") !!}</td>
        <div class="container">

          @if(! count($all) )
          <p>No student record has been made so far.</p>
          @else

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

                @foreach($all as $student)
                <tr>
                  <td>{!! Html::linkRoute('schools.students.show', $student->id, array('id' => $student->id, 'school_id' => CurrentUserSchoolId()) ) !!}</td>
                  <td><?= $student->first_name ?></td>
                  <td><?= $student->last_name ?></td>
                  <td><?= $student->serialcode ?></td>
                  <td><?= $student->birthdate ?></td>
                  <td>
                    {!! Form::open( array(
                    'route' => array('schools.students.destroy', "school_id" => CurrentUserSchoolId(), "id" => $student->id )
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
          @endif
    @stop



                   