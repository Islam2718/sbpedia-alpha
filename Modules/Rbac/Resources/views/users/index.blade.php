@include('admin-panel.header')
@include('admin-panel.sidebar')
<!-- users content  -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"><a hef="{{ route('users.index') }}">Rbac</a> /</span> <a href="{{ route('users.index') }}">Users</a></h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
        <h5 class="card-header">Table Basic</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                @if(count($users) > 0)
                <tbody class="table-border-bottom-0">
                    @foreach($users as $userData)
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>1</strong></td>
                        <td>
                            <img src="../admin-assets/img/avatars/5.png" alt="Avatar" class="rounded-circle"
                                style="width:22px;">
                            &nbsp;
                            {{$userData->name}}
                        </td>
                        <td>{{$userData->email}}</td>
                        <td><span class="badge bg-label-primary me-1"></span></td>
                        <td><span class="badge bg-label-success me-1">Active</span></td>
                        <td>
                            <a href="{{route('users.assign-role', $userData->id)}}" class="btn btn-sm btn-primary">Assign</a>
                            <a class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                @else
                <tbody>
                    <tr>
                        <td colspan="6"><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>No Data Found !</strong></td>
                    </tr>
                </tbody>
                @endif
            </table>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->

</div>
<!-- users content end  -->
@include('admin-panel.footer')
