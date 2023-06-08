@include('admin-panel.header')
@include('admin-panel.sidebar')

<div class="card my-3 px-4">
    <h5 class="card-header">User Info :)</h5>
    <div class="card-body row">
        <form method="POST" action="{{route('roles.store')}}">
            @csrf
        <div class="col-xl">
            <div class="mb-2">
                <label class="form-label" for="basic-default-fullname">Name</label>
                <input name="name" type="text" class="form-control" id="basic-default-fullname" placeholder="role name">
            </div>
        </div>
            <div class="col-xl">
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>


@include('admin-panel.footer')
