@include('admin-panel.header')
@include('admin-panel.sidebar')
<!-- users content  -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"><a href="{{ route('users.index') }}">Rbac</a> /</span> <Users href="{{ route('users.create') }}">Users/Create</a></h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
        <h5 class="card-header">Rbac User create form</h5>
    </div>
    <!--/ Basic Bootstrap Table -->

</div>
<!-- users content end  -->
@include('admin-panel.footer')