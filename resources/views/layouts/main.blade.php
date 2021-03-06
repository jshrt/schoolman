<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard for Organisations</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendor/twitter-bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/twitter-bootstrap/docs/examples/dashboard/dashboard.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>

  @include('layouts.header')

    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
            
            <div class="col-sm-3 col-md-2 sidebar">          
              @include('layouts.sidebar')
            </div>

            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            @include('layouts.flash_messages')
             <div class="row">
                @include('layouts.database_controls')
                @yield('content')
             </div>
            </div>

      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/twitter-bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script>


function currentDatabaseFieldUpdate()
{
  $('p#current_database').replaceWith('<?php echo ActualDatabase() ?>');
}
var model;

@if( ActionIsCreateTeachersFromFiles() )
  model = 'teachers';

  $(document).ready(function() {


            $("#create-"+model).submit(function(e) {
              e.preventDefault();
                 $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('input[name="_token"]').attr('value')
                    }
                });
                
                $.ajax({
                    url: '/schools/{school_id}/files/store_'+model,
                    type: 'POST',
                    dataType: 'JSON',
                    data: $('form#create-'+model).serialize(),
                    success: function()
                    {
                      showSuccessButton();
                    }
                });
              e.preventDefault();

            });

        });

@else
  @if( ActionIsCreateStudentsFromFiles() )
    model = 'students';

  $(document).ready(function() {


            $("#create-"+model).submit(function(e) {
              e.preventDefault();
                 $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('input[name="_token"]').attr('value')
                    }
                });
                
                $.ajax({
                    url: '/schools/{school_id}/files/store_'+model,
                    type: 'POST',
                    dataType: 'JSON',
                    data: $('form#create-'+model).serialize(),
                    success: function()
                    {
                      showSuccessButton();
                    }
                });
              e.preventDefault();

            });

        });

  @else
    @if( ActionIsCreateClassesFromFiles() )
      model = 'classes';

     $(document).ready(function() {


            $("#create-"+model).submit(function(e) {
              e.preventDefault();
                 $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('input[name="_token"]').attr('value')
                    }
                });
                
                $.ajax({
                    url: '/schools/{school_id}/files/store_'+model,
                    type: 'POST',
                    dataType: 'JSON',
                    data: $('form#create-'+model).serialize(),
                    success: function()
                    {
                      showSuccessButton();
                    }
                });
              e.preventDefault();

            });

        });

    @endif
  @endif
@endif

</script>
  </body>
</html>
