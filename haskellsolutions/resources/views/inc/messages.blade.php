<!-- Validation errors -->
@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif

<!-- Flash Success Message -->
@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif