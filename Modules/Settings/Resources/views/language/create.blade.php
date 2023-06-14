@include('admin-panel.header')
@include('admin-panel.sidebar')
<!-- users content  -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light"><a hef="#">Settings</a> /</span> <a href="#">Language</a>        
        <a href="{{ route('settings.language') }}" class="btn btn-sm btn-primary">Back to List</a>
    </h4>

    <form method="post" action="{{ route('settings.language.store') }}">
        @csrf
        <!-- Profile INFO -->
        <div class="card my-3 px-4">
            <h5 class="card-header">Language Add:)</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="mb-2">
                            <label class="form-label" for="basic-default-fullname">Name</label>
                            <input name="name" type="text" class="form-control" id="basic-default-fullname" placeholder="Enter Langue Name !">
                            <span class="text-danger font-weight-bold">{{$errors->has('name') ? $errors->first('name') : ' '}}</span>
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="mb-2">
                            <label class="form-label" for="basic-default-fullname">Alias</label>
                            <input required name="alias" type="text" class="form-control" id="basic-default-fullname" placeholder="Alias !">
                            <span class="text-danger font-weight-bold">{{$errors->has('alias') ? $errors->first('alias') : ' '}}</span>
                        </div>
                    </div>
                    <div class="col-xl">
                        <div class="mb-2">
                            <label class="form-label" for="flag">Flag</label>
                            <input name="flag" type="text" class="form-control" id="flag" placeholder="flag !">
                        </div>
                    </div>
                </div>
                <div class="row">                    
                    <div class="col-xl-9">
                        <div class="mb-2">
                            <label class="form-label" for="basic-default-fullname">Description</label>
                            <textarea name="description" rows="4" class="form-control" id="basic-default-fullname" placeholder="Desription !"></textarea>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="mb-2 my-3">
                            <label class="form-label" for="basic-default-fullname">Status</label>
                            <div class="form-check">
                                <input name="status" class="form-check-input"  checked type="radio" value="1" id="active">
                                <label class="form-check-label" for="active"> Active </label>
                            </div>
                            <div class="form-check">
                                <input name="status" class="form-check-input" type="radio" value="0" id="inactive">
                                <label class="form-check-label" for="inactive"> In Active </label>
                            </div>
                        </div>
                        <div class="mb-2 mt-3">
                            <!-- <label class="form-label">Is Default: </label> -->
                            <input type="checkbox" id="is_default" name="is_default" value="1"> 
                            <label for="is_default">Set as Default</label>
                        </div>
                    </div>
                    <div class="my-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{ route('settings.language') }}" class="btn btn-danger">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
        <!--/ profile INFO END -->
        <!-- social INFO -->

        <!--/ social INFO END -->
    </form>

</div>
<!-- users content end  -->
@include('admin-panel.footer')