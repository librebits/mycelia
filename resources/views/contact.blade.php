
@extends('layouts.app')



@section('content')

  <h1>Contact</h1>

  {!! Form::open(['url' => 'contact/submit']) !!}


    <div class="form-group">

      {{Form::label('name', 'Name')}}
      {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter name'])}}
    </div>


    <div class="form-group">

      {{Form::label('email', 'E-Mail Address')}}
      {{Form::text('email', 'elzn@riseup.net')}}

    </div>

    <div class="form-group">

      {{Form::label('message', 'Message')}}
      {{Form::textarea('email', 'Omnia Sunt Communia ? bla,bla...')}}

    </div>


  {!! Form::close() !!}

@endsection


