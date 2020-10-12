@extends('admin-layout.master')

@section('content')

<div style="overflow: auto; height:83vh;">


        <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Account Settings</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

            <div class="col-md-8 m-auto">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title" id="from-actions-bottom-right">Settings</h4>
                  
                <div class="card-body">
                  <div class="px-3">
        
                    <form class="form">
                      <div class="form-body">
                        {{-- <h4 class="form-section"><i class="ft-settings"></i> About User</h4> --}}
                        <div class="row">
                          <div class="form-group col-12 mb-2">
                            <label for="userinput1">App Name</label>
                            <input type="text" id="userinput1" class="form-control border-primary" placeholder="App Name" name="name">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-12 mb-2">
                            <label for="userinput2">Short Name</label>
                            <input type="text" id="userinput2" class="form-control border-primary" placeholder="Short Name" name="company">
                          </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12 mb-2">
                              <label for="userinput5">Address</label>
                              <input class="form-control border-primary" type="email" placeholder="Address" id="userinput3">
                            </div>
                          </div>
                        <div class="row">
                          <div class="form-group col-12 mb-2">
                            <label for="userinput5">Email</label>
                            <input class="form-control border-primary" type="email" placeholder="Email" id="userinput4">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-12 mb-2">
                            <label for="userinput5">Facebook</label>
                            <input class="form-control border-primary" type="email" placeholder="Facebook" id="userinput5">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-12 mb-2">
                            <label for="userinput5">Twitter</label>
                            <input class="form-control border-primary" type="email" placeholder="Twitter" id="userinput6">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-12 mb-2">
                            <label for="userinput6">Website</label>
                            <input class="form-control border-primary" type="url" placeholder="http://" id="userinput7">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-12 mb-2">
                            <label>Phone Number</label>
                            <input class="form-control border-primary" type="number" placeholder="Phone Number" id="userinput8">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-12 mb-2">
                          <label>Upload Image</label>
                          <input type="file" class="form-control-file" id="userinput9">
                        </div>
                      </div>
        
                      <div class="form-actions center">
                        <button type="button" class="btn btn-raised btn-warning mr-1">
                          <i class="ft-x"></i> Cancel
                        </button>
                        <button type="button" class="btn btn-raised btn-primary">
                          <i class="fa fa-check-square-o"></i> Update
                        </button>
                      </div>
                    </form>
        
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>



</div>
@endsection
