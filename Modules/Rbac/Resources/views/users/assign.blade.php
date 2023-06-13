@include('admin-panel.header')
@include('admin-panel.sidebar')
<!-- users content  -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Users /</span> List
        <a class="btn btn-primary btn-sm pull-right mb-lg-n2" href="{{route('users.index')}}">Users</a>
    </h4>
    <div class="card my-3 px-4">
        <h5 class="card-header">user info</h5>
        <div class="card-body row">
            <div class="col-xl">
                <div class="mb-2">
                    username : {{$user->username}} <br>
                    mail : {{$user->email}}
                </div>
            </div>
        </div>
        <div class="card-body row mt-4">
            <div class="col-xl">
                <h2>User Role</h2>
                <div class="mb-2">
                    @if(count($user->roles) > 0)
                        @if($user->roles)
                            @foreach($user->roles as $ur)
                                <spa>{{$ur->name}}</spa>
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
                    <form method="post" action="{{route('user.assign.roles', $user->id)}}">
                        @csrf
                        <div class="col-xl">
                            <div class="mb-2">
                                <label class="form-label" for="permission">Name</label>
                                <select name="role" class="form-select" aria-label="Default select example">
                                    <option selected>Choose Permission</option>
                                    @foreach($roles as $role)
                                        <option value="{{$role->name}}">{{$role->name}}</option>
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


