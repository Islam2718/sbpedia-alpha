@include('admin-panel.header')
@include('admin-panel.sidebar')

<div class="card my-3 px-4">
    <div>
        <a class="btn btn-primary mb-lg-n2" href="{{route('roles.index')}}">Roles</a>
    </div>
    <h5 class="card-header">Add Role</h5>
    <div class="card-body row">
        <form method="POST" action="{{route('roles.store')}}">
            @csrf
        <div class="col-xl">
            <div class="mb-2">
                <label class="form-label" for="basic-default-fullname">Name</label>
                <input name="name" type="text" class="form-control" id="basic-default-fullname" placeholder="role name">
                <span class="text-danger font-weight-bold">{{$errors->has('name') ? $errors->first('name') : ' '}}</span>
            </div>
        </div>
            <div class="col-xl">
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>


@include('admin-panel.footer')
