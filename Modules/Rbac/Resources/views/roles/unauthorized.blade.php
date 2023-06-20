@include('admin-panel.header')
@include('admin-panel.sidebar')
<!-- users content  -->
<div class="container-xxl flex-grow-1 container-p-y p-3">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Unauthorized</span>
        {{--<a class="btn btn-primary btn-sm pull-right mb-lg-n2" href="{{route('roles.index')}}">Roles</a>--}}
    </h4>
    <div class="card my-3 mx-3 px-4">
        @foreach($roles as $role)
            <div class="alert alert-danger" role="alert">
                Your role <span class="text text-bold">'{{$role}}'</span> is not authorized to do this task
            </div>
        @endforeach
    </div>
</div>
<!-- users content end  -->



@include('admin-panel.footer')

