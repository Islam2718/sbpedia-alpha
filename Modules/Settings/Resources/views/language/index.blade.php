@include('admin-panel.header')
@include('admin-panel.sidebar')
<!-- users content  -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light"><a hef="#">Settings</a> /</span> <a href="#">Language</a>
        <a href="{{ route('settings.language.create') }}" class="btn btn-sm btn-primary">+ Add New</a>
    </h4>

    <!-- Basic Bootstrap Table -->
    <div class="card p-3">
        <h5 class="card-header">Language</h5>
        <div class="table-responsive m-2">
            <table class="table table-border border">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Name</th>
                        <th>Alias</th>
                        <th>Flag</th>
                        <th>Status</th>
                        <th>Is Default?</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                @if(count($languageArray) > 0)
                <tbody class="table-border-bottom-0">     
                    @foreach($languageArray as $languageData)                                   
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>1</strong></td>
                        <td>{{$languageData->name}}</td>
                        <td>{{$languageData->alias}}</td>
                        <td>{{$languageData->flag}}</td>
                        <td>{{$languageData->status}}</td>
                        <td>{{$languageData->is_default == 1 ? 'Yes': 'No'}}</td>
                        <td>
                            <a href="{{ route('settings.language.edit', $languageData->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="{{ route('settings.language.delete', $languageData->id) }}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                @else
                <tbody>
                    <tr>
                        <td colspan="7"><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>No Data Found !</strong></td>
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