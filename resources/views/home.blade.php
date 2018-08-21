@extends('layouts.app')



@section('content')


    <h1> Home </h1>

    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla magna nisl, luctus in semper nec, pretium sed sem. Aenean eget porttitor tortor. Fusce id semper justo. Quisque mattis turpis sed justo rutrum tempus. Proin mauris tortor, mattis in ligula eget, euismod vehicula augue. Suspendisse nec risus tellus. Sed felis arcu, pretium non eleifend id, rutrum vitae dolor. Phasellus nunc purus, lobortis sit amet dui nec, mattis lobortis ante. Aenean sit amet ultricies eros, tempor porta lacus. </p>

@endsection


@section('sidebar')

    @parent 
    <p>This is appended to the sidebar</p>

@endsection

