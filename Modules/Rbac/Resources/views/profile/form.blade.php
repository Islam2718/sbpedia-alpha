@include('admin-panel.header')
@include('admin-panel.sidebar')
<!-- users content  -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Rbac /</span> Users/Create</h4>

    <!-- USER INFO -->
    <div class="card my-3 px-4">
        <h5 class="card-header">User Info :)</h5>
        <div class="card-body row">
            <div class="col-xl">
                <div class="mb-2">
                    <label class="form-label" for="basic-default-fullname">Username</label>
                    <input type="text" class="form-control" id="basic-default-fullname" placeholder="John Doe">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-phone">Phone No</label>
                    <input type="text" id="basic-default-phone" class="form-control phone-mask" placeholder="+880 XXXX XXXXXX">
                </div>
            </div>        
            <div class="col-xl">
                <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Email</label>
                    <input type="text" class="form-control" id="basic-default-fullname" placeholder="example@email.com">
                </div>
            </div>       
        </div> 
    </div>
    <!--/ USER INFO END -->
    <!-- Profile INFO -->
    <div class="card my-3 px-4">
        <h5 class="card-header">Profile Info :)</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-xl">
                    <div class="mb-2">
                        <label class="form-label" for="basic-default-fullname">First Name</label>
                        <input type="text" class="form-control" id="basic-default-fullname" placeholder="John Doe">
                    </div>
                </div>
                <div class="col-xl">
                    <div class="mb-2">
                        <label class="form-label" for="basic-default-fullname">Last Name</label>
                        <input type="text" class="form-control" id="basic-default-fullname" placeholder="John Doe">
                    </div>
                </div>
                <div class="col-xl">
                    <div class="mb-2">
                        <label class="form-label" for="basic-default-fullname">Sur Name</label>
                        <input type="text" class="form-control" id="basic-default-fullname" placeholder="John Doe">
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-xl">
                    <div class="mb-2">
                        <label class="form-label" for="gender">gender</label>
                        <div class="">
                            <div class="form-check form-check-inline mt-3">
                                <input class="form-check-input" type="radio" name="gender" id="gender_male" value="MALE">
                                <label class="form-check-label" for="gender_male">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="gender_female" value="FEMALE">
                                <label class="form-check-label" for="gender_female">Female</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="gender_others" value="OTHERS">
                                <label class="form-check-label" for="gender_others">Others</label>
                            </div>
                        </div>                         
                    </div>
                </div>
                <div class="col-xl">
                    <div class="mb-3 pt-3">
                        <label class="form-label" for="dob">Date of Birth</label>
                        <input type="date" id="dob" class="form-control phone-mask" placeholder="Date of Birth!">
                    </div>
                </div>
                <div class="col-xl">
                    .
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-xl">                                      
                    <div class="mb-3 ">
                        <label class="form-label" for="basic-default-phone">identity</label>
                        <input type="text" id="basic-default-phone" class="form-control phone-mask" placeholder="Identity !">
                    </div>
                </div>
                <div class="col-xl">                                      
                    <div class="mb-3">
                        <label class="form-label" for="organization_id">Organization Id</label>
                        <input type="text" id="organization_id" class="form-control phone-mask" placeholder="Job ID No!">
                    </div>
                </div>
                <div class="col-xl">                                      
                    <div class="mb-3">
                        <label class="form-label" for="organization_name">Organization Name</label>
                        <input type="text" id="organization_name" class="form-control phone-mask" placeholder="Organization Name !">
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-xl-4">                                      
                    <div class="mb-3">
                        <label class="form-label" for="profile_img">Profile</label>
                        <div class="my-2 text-center">
                            <img src="{{asset('admin-assets/img/c-thumb.png')}}" alt="" class="img-fluid" style="height:180px;"/>
                        </div>
                        <input type="file" id="profile_img" class="form-control">
                    </div>
                </div>
                <div class="col-xl-8">                                      
                    <div class="mb-3">
                        <label class="form-label" for="coverImg">Cover Photo</label>
                        <div class="my-2 text-center">
                            <img src="{{asset('admin-assets/img/c-thumb.png')}}" alt="" class="img-fluid " style="height:180px;"/>
                        </div>                        
                        <input type="file" id="coverImg" class="form-control" >
                    </div>
                </div>                
            </div>
            <div class="row mt-3">
                <div class="col-xl">          
                    <div class="mb-3">
                        <label class="form-label" for="basic-default-phone">Online Profule</label>
                        <input type="text" id="basic-default-phone" class="form-control phone-mask" placeholder="https://">
                    </div>
                </div>
                <div class="col-xl">          
                    <div class="mb-3">
                        <label class="form-label" for="interested_in">Interested In</label>
                        <input type="text" id="interested_in" class="form-control phone-mask" placeholder="Interested In !">
                    </div>
                </div>
                <div class="col-xl">                              
                    <div class="mb-3">
                        <label class="form-label" for="is_organization_root_user">If (then select) ?</label>
                        <div class="form-check mt-2" id="is_organization_root_user">
                            <input class="form-check-input" type="checkbox" value="1" id="defaultCheck2" checked="">
                            <label class="form-check-label" for="defaultCheck2"> Organization Root User </label>
                        </div>
                    </div>
                </div>
            </div>               
            <div class="row mt-3">
                <div class="col-xl">                              
                    <div class="mb-3">
                        <label class="form-label" for="about_myself">About Myself</label>
                        <textarea id="about_myself" rows="5" name="about_myself" class="form-control" placeholder="About !"></textarea>
                    </div>
                </div>
            </div>               
        </div> 
    </div>
    <!--/ profile INFO END -->
    <!-- social INFO -->
    <div class="card my-3 px-4">
        <h5 class="card-header">Links :)</h5>
        <div class="card-body row">
            <div class="col-xl">
                <div class="mb-2">
                    <label class="form-label" for="basic-default-fullname">facebook</label>
                    <input type="text" class="form-control" id="basic-default-fullname" placeholder="John Doe">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-phone">twitter</label>
                    <input type="text" id="basic-default-phone" class="form-control phone-mask" placeholder="+880 XXXX XXXXXX">
                </div>
            </div>
            <div class="col-xl">
                <div class="mb-3">
                    <label class="form-label" for="basic-default-phone">linkedin</label>
                    <input type="text" id="basic-default-phone" class="form-control phone-mask" placeholder="+880 XXXX XXXXXX">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="basic-default-phone">google</label>
                    <input type="text" id="basic-default-phone" class="form-control phone-mask" placeholder="+880 XXXX XXXXXX">
                </div>
            </div>
        </div> 
    </div>
    <!--/ social INFO END -->
    <!-- social INFO -->
    <div class="my-3">
        <button class="btn btn-lg btn-primary">Update Profile</button>
        <button class="btn btn-lg btn-danger">Cancel</button>
    </div>
    <!--/ social INFO END -->
</div>
<!-- users content end  -->
@include('admin-panel.footer')