@include('admin-panel.header')
@include('admin-panel.sidebar')
<!-- users content  -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">News /</span> Add News
        <a href="{{ route('news.news.list') }}" class="btn btn-sm btn-primary">Back to List</a>
    </h4>
    <form method="post" action="{{ route('news.news.store') }}">
        @csrf
        <!-- news form start -->
        <div class="card my-3 px-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="mb-3">
                            <label class="form-label" for="title">Title</label>
                            <input name="title" type="text" class="form-control" id="title" placeholder="Enter title !" onChange="setAlias()">
                            <span class="text-danger font-weight-bold">{{$errors->has('title') ? $errors->first('title') : ' '}}</span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="sub_title">Sub Title</label>
                            <input name="sub_title" type="text" class="form-control" id="sub_title" placeholder="Enter sub-title !">
                            <span class="text-danger font-weight-bold">{{$errors->has('sub_title') ? $errors->first('sub_title') : ' '}}</span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="alias">Alias</label>
                            <input name="alias" type="text" class="form-control" id="alias" placeholder="Enter alias !">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="name">Name</label>
                            <input name="name" type="text" class="form-control" id="name" placeholder="Enter Name !">
                            <span class="text-danger font-weight-bold">{{$errors->has('name') ? $errors->first('name') : ' '}}</span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="content">Content</label>
                            <textarea name="content" rows="12" class="form-control" id="content" placeholder="Content !"></textarea>
                        </div>
                        <!-- <div class="mb-3">
                            <label class="form-label" for="description">Parent</label>
                            <select class="form-control" id="parent" name="parent_id">
                                <option value="">--Select Parent Category--</option>
                                @foreach($newsArray as $newsData)
                                <option value="{{ $newsData->id }}">{{ $newsData->title }}</option>
                                @endforeach
                            </select>
                        </div> -->
                    </div>
                    <div class="col-xl-4">
                        <div class="mb-2">
                            <label class="form-label" for="language">Language</label>
                            <select id="language" name="language_id" class="form-control">
                                @foreach($languageArray as $languageData)
                                <option value="{{ $languageData->id }}">{{ $languageData->name }}</option>
                                @endforeach
                            </select>
                        </div> 
                        <!-- collapse is file start  -->
                        <div class="my-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseIsFIleId" aria-expanded="false" aria-controls="collapseExampleIsFileId">
                            <input type="checkbox" id="is_file" name="is_file" value="1"> 
                            <label for="is_file">Is File?</label>
                        </div>
                        <div class="border p-2 collapse" id="collapseIsFIleId" style="">
                            <div class="mb-3">
                                <label class="form-label" for="file_type">File Type</label>
                                <input name="file_type" type="text" class="form-control" id="file_type" placeholder="Enter File Type !">                           
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="file_name">File Name</label>
                                <input name="file_name" type="text" class="form-control" id="file_name" placeholder="Enter Name !">                       
                            </div>
                        </div>                      
                        <!-- collapse is file end -->

                        <!-- collapse is link start  -->
                        <div class="my-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLink" aria-expanded="false" aria-controls="collapseExampleLink">
                            <input type="checkbox" id="link_type" name="link_type" value="1"> 
                            <label for="link_type">Link Type</label>
                        </div>
                        <div class="border p-2 collapse" id="collapseLink" style="">
                            <div class="mb-3">
                                <input type="checkbox" id="is_target_blank" name="is_target_blank" value="1"> 
                                <label for="is_target_blank">Is Target Blank?</label>             
                            </div>                        
                            <div class="mb-3">
                                <label class="form-label" for="custom_link">Custom Link</label>
                                <input name="custom_link" type="text" class="form-control" id="custom_link" placeholder="Enter Custom Url !">                          
                            </div>
                        </div>                      
                        <!-- collapse is link end -->

                        <!-- collapse is link start  -->
                        <div class="my-3 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOrganization" aria-expanded="false" aria-controls="collapseExampleOrganization">
                            <input type="checkbox" id="is_organization_news" name="is_organization_news" value="1"> 
                            <label for="is_organization_news">Is Organization News ?</label>
                        </div>
                        <div class="border p-2 collapse" id="collapseOrganization" style="">
                            <div class="mb-3">
                                <label class="form-label" for="organization_id">Organization Id</label>
                                <input name="organization_id" type="text" class="form-control" id="organization_id" placeholder="Enter Organization ID !">                         
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="name">Organization Name</label>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Enter Category Name !" onChange="setAlias()">
                                <span class="text-danger font-weight-bold">{{$errors->has('name') ? $errors->first('name') : ' '}}</span>                            
                            </div>
                        </div>                      
                        <!-- collapse is link end -->
                        <hr/>
                        <div class="mt-2">
                            <div class="mb-3">
                                <input type="checkbox" id="is_top_news" name="is_top_news" value="1"> 
                                <label for="is_top_news">Is Top News?</label>             
                            </div>                        
                            <div class="mb-3">
                                <input type="checkbox" id="is_featured" name="is_featured" value="1"> 
                                <label for="is_featured">Is Featured ?</label>             
                            </div>              
                        </div>
                        <hr/>
                        <!-- items  -->
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
                        <div class="mb-2 my-1">
                            <label class="form-label" for="order">Order</label>
                            <input type="number" class="form-control" id="order" name="order">
                        </div>                                  
                    </div>
                    <div class="my-2">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a href="{{ route('news.news.list') }}" class="btn btn-danger">Cancel</a>
                    </div>                    
                </div>
            </div>
        </div>
        <!--/ news END -->
    </form>
</div>
<!-- users content end  -->
@include('admin-panel.footer')