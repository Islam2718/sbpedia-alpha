@include('admin-panel.header')
@include('admin-panel.sidebar')
<!-- users content  -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">News /</span> List
        <a href="{{ route('news.news.create') }}" class="btn btn-sm btn-primary">Add News</a>
    </h4>
    <!-- Basic Bootstrap Table -->
    <div class="card px-3 pb-5 pt-3">
        <h5 class="card-header">List</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Name</th>
                        <th>Language</th>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                @if(count($newsArray) > 0)
                <tbody class="table-border-bottom-0">   
                    @foreach($newsArray as $newsData)                                   
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>1</strong></td>
                        <td>{{ $newsData->name }}</td>
                        <td>{{ $newsData->language }}</td>
                        <td>{{ $newsData->title }}</td>
                        <td>{{ $newsData->status == 0 ? 'In Active': 'Active' }}</td>
                        <td>
                            <a href="{{ route('news.category.edit', $newsData->id) }}" class="btn-sm btn btn-primary">Edit</a>
                            <a href="{{ route('news.category.delete', $newsData->id) }}" class="btn-sm btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <thead class="border-bottom-none">
                    <tr><th colspan="6" class=""> 6 of 123</th></tr>
                </thead>                
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
    <!--/ Basic Bootstrap Table-->
</div>
<!-- users content end  -->
@include('admin-panel.footer')
