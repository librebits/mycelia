<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> ACME </title>
  </head>

  <body>

      @yield('content')

      @section('sidebar')
      <div class="sidebar">
         <h3> Sidebar </h3>
         This is the sidebar.
         @show 
      </div>
      
  </body>
</html>