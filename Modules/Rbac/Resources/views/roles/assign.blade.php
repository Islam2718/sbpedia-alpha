@include('admin-panel.header')
@include('admin-panel.sidebar')
<!-- users content  -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">News /</span> List
        <a class="btn btn-primary btn-sm pull-right mb-lg-n2" href="{{route('roles.index')}}">Roles</a>
    </h4>

    <div class="card my-3 px-4">
        <h5 class="card-header">Add Role</h5>
        <div class="card-body row">
            <div class="col-xl">
                <div class="mb-2">
                    Role : {{$role->name}}
                </div>
            </div>
        </div>
        <div class="card-body row mt-4">
            <div class="col-xl">
                <h2>Role Permissions</h2>
                <div class="mb-2">
                    @if(count($role->permissions) > 0)
                        @if($role->permissions)
                            @foreach($role->permissions as $rp)
                                <spa>{{$rp->name}}</spa>
                            @endforeach
                        @endif
                    @else
                        <tbody>
                        <tr>
                            <td colspan="6"><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Not yet assigned !</strong></td>
                        </tr>
                        </tbody>
                    @endif
                </div>
            </div>
        </div>
        <div class="card-body row">
            <div class="col-xl">
                <div class="mb-2">
                    <form method="post" action="{{route('roles.assign.permissions', $role->id)}}">
                        @csrf
                        <div class="col-xl">
                            <div class="mb-2">
                                <label class="form-label" for="permission">Name</label>
                                <select name="permission" class="form-select" aria-label="Default select example">
                                    <option selected>Choose Permission</option>
                                    @foreach($permissions as $permission)
                                        <option value="{{$permission->name}}">{{$permission->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xl">
                            <button class="btn btn-success" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- users content end  -->



@include('admin-panel.footer')

