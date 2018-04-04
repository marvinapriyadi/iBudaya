@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('status_success'))
    <div class="alert alert-success">
        {{session('status_success')}}
    </div>
@endif

