
@extends('layouts.app')



@section('content')

  <h1>Contact</h1>

  {!! Form::open(['url' => 'contact/submit']) !!}


    <div class="form-group">

      {{Form::label('name', 'Name')}}
      {{Form::text('name', ' Subcomandante Marcos')}}

    </div>


    <div class="form-group">

      {{Form::label('email', 'E-Mail Address')}}
      {{Form::text('email', 'elzn@riseup.net')}}

    </div>

  {!! Form::close() !!}

@endsection


