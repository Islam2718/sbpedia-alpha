@include('admin-panel.header')
@include('admin-panel.sidebar')
<!-- users content  -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light"><a hef="#">News</a> /</span> <a href="#">Category</a>        
        <a href="{{ route('news.category.list') }}" class="btn btn-sm btn-primary">Back to List</a>
    </h4>

    <form method="post" action="{{ route('news.category.store') }}">
        @csrf
        <!-- news category INFO -->
        <div class="card my-3 px-4">
            <h5 class="card-header">Add:</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="mb-2">
                            <label class="form-label" for="name">Name</label>
                            <input required name="name" type="text" class="form-control" id="name" placeholder="Enter Category Name !" onChange="setAlias()">
                            <span class="text-danger font-weight-bold">{{$errors->has('name') ? $errors->first('name') : ' '}}</span>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="mb-2">
                            <label class="form-label" for="alias">Alias</label>
                            <input required name="alias" type="text" class="form-control" id="alias" placeholder="Enter Alias !">
                            <span class="text-danger font-weight-bold">{{$errors->has('alias') ? $errors->first('alias') : ' '}}</span>
                        </div>
                    </div>
                    <div class="col-xl">
                        <div class="mb-2">
                            <label class="form-label" for="language">Language</label>
                            <select id="language" name="language_id" class="form-control">
                                @foreach($languageArray as $languageData)
                                <option value="{{ $languageData->id }}">{{ $languageData->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">                    
                    <div class="col-xl-10">
                        <div class="mb-2">
                            <label class="form-label" for="description">Description</label>
                            <textarea name="description" rows="3" class="form-control" id="description" placeholder="Desription !"></textarea>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="description">Parent</label>
                            <select class="form-control" id="parent" name="parent_id">
                                <option value="">--Select Parent Category--</option>
                                @foreach($newsCategoryArray as $categoryData)
                                <option value="{{ $categoryData->id }}">{{ $categoryData->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="mb-2 my-2 pb-3">
                            <label class="form-label" for="status">Status</label>
                            <div class="form-check">
                                <input name="status" class="form-check-input"  checked type="radio" value="1" id="active">
                                <label class="form-check-label" for="active"> Active </label>
                            </div>
                            <div class="form-check">
                                <input name="status" class="form-check-input" type="radio" value="0" id="inactive">
                                <label class="form-check-label" for="inactive"> In Active </label>
                            </div>
                        </div>
                        <div class="mb-2 my-3">
                            <label class="form-label" for="order">Order</label>
                            <input type="number" class="form-control" id="order" name="order">
                        </div>
                    </div>
                    <div class="my-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{ route('news.category.list') }}" class="btn btn-danger">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
        <!--/ news category END -->
    </form>
</div>
<script>
    // set to alias field 
    function setAlias(){
        var name = document.getElementById('name').value;
        var alias = name.replace(" ", "-");
        document.getElementById("alias").value = alias;
    }
</script>
<!-- users content end  -->
@include('admin-panel.footer')