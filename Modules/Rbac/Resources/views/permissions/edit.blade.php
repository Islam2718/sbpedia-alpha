@include('admin-panel.header')
@include('admin-panel.sidebar')

<div class="card my-3 px-4">
    <div>
        <a class="btn btn-primary mb-lg-n2" href="{{route('permissions.index')}}">Permissions</a>
    </div>
    <h5 class="card-header">Update Permissions</h5>
    <div class="card-body row">
        <form method="POST" action="{{route('permissions.update', $permission->id)}}">
            {{--{{route('roles.store')}}--}}
            @csrf
            <div class="col-xl">
                <div class="mb-2">
                    <label class="form-label" for="basic-default-fullname">Name</label>
                    <input name="name" value="{{$permission->name}}" type="text" class="form-control" required id="basic-default-fullname" placeholder="permission name">
                </div>
            </div>
            <div class="col-xl">
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>


@include('admin-panel.footer')
