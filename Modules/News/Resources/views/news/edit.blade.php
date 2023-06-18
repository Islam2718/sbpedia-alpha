@include('admin-panel.header')
@include('admin-panel.sidebar')
<!-- users content  -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">News /</span> Add Edit
        <a href="{{ route('news.news.list') }}" class="btn btn-sm btn-primary">Back to List</a>
    </h4>
    //news form..
</div>
<!-- users content end  -->
@include('admin-panel.footer')
