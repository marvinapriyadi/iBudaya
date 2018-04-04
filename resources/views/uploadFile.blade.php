@extends('layouts.app')

@section('content')
<html>
   <body>
      <form action="/upload" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        Name:
        <br />
        <input type="text" name="name" />
        <br /><br />
        Image:
        <br />
        <input type="file" name="image" />
        <br /><br />
        <input type="submit" value="Upload" />
       </form>
   </body>
</html>
@endsection