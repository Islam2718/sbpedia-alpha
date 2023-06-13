@include('admin-panel.header')
@include('admin-panel.sidebar')
<!-- users content  -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light"><a hef="#">News</a> /</span> <a href="#">Category</a>
        <a href="{{ route('news.category-create') }}" class="btn btn-sm btn-primary">+ Add New</a>
    </h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
        <h5 class="card-header">News Category</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>name</th>
                        <th>Language</th>
                        <th>Parent</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <!--  -->
                <tbody class="table-border-bottom-0">   
                    <?php
                        dd($newsCategoryArray);
                    ?>  
                    @foreach($newsCategoryArray as $newsCategoryData)                                   
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>1</strong></td>
                        <td>{{ $newsCategoryData->name }}</td>
                        <td>{{ $newsCategoryData->language_id }}</td>
                        <td>{{ $newsCategoryData->parent_id ? $newsCategoryData->parent_id: '--'}}</td>
                        <td>{{ $newsCategoryData->status == 0 ? 'In Active': 'Active' }}</td>
                        <td>
                            <a href="" class="btn-sm btn btn-primary">Edit</a>
                            <a href="" class="btn-sm btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                <!-- </tbody> -->
                <!-- <tbody>
                    <tr>
                        <td colspan="6"><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>No Data Found !</strong></td>
                    </tr>
                </tbody>
                
            </table>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->

</div>
<!-- users content end  -->
@include('admin-panel.footer')