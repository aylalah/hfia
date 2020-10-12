@extends('admin-layout.master')

@section('content')

<div style="overflow: auto; height:83vh;">


        <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Members</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Add New Member</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"></div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

            <div class="col-md-8 m-auto">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title" id="from-actions-bottom-right">Add Members</h4>
                  
                <div class="card-body">
                  <div class="px-3">
        
                    <form class="form">
                      <div class="form-body">
                        <h4 class="form-section"><i class="ft-info"></i> About User</h4>
                        <div class="row">
                          <div class="form-group col-md-6 mb-2">
                            <label for="userinput1">First Name</label>
                            <input type="text" id="userinput1" class="form-control border-primary" placeholder="Name" name="name">
                          </div>
                          <div class="form-group col-md-6 mb-2">
                            <label for="userinput2">Last Name</label>
                            <input type="text" id="userinput2" class="form-control border-primary" placeholder="Last Name" name="company">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-12 mb-2">
                            <label for="issueinput5">Gender</label>
                            <select id="issueinput5" name="gender" class="form-control" data-toggle="tooltip" data-trigger="hover"
                              data-placement="top" data-title="Gender">
                              <option value="low">Male</option>
                              <option value="medium">Female</option>
                            </select>
                          </div>
                        </div>
        
                        <h4 class="form-section"><i class="ft-mail"></i> Contact Info & Bio</h4>
                        <div class="row">
                          <div class="form-group col-12 mb-2">
                            <label for="userinput5">Email</label>
                            <input class="form-control border-primary" type="email" placeholder="email" id="userinput5">
                          </div>
                        </div>
                        {{-- <div class="row">
                          <div class="form-group col-12 mb-2">
                            <label for="userinput6">Website</label>
                            <input class="form-control border-primary" type="url" placeholder="http://" id="userinput6">
                          </div>
                        </div> --}}
                        <div class="row">
                          <div class="form-group col-12 mb-2">
                            <label>Contact Number</label>
                            <input class="form-control border-primary" type="number" placeholder="Contact Number" id="userinput7">
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-12 mb-2">
                            <label for="userinput8">Bio</label>
                            <textarea id="userinput8" rows="5" class="form-control border-primary" name="bio" placeholder="Bio"></textarea>
                          </div>
                        </div>
                      </div>
        
                      <div class="form-actions center">
                        <button type="button" class="btn btn-raised btn-warning mr-1">
                          <i class="ft-x"></i> Cancel
                        </button>
                        <button type="button" class="btn btn-raised btn-primary">
                          <i class="fa fa-check-square-o"></i> Save
                        </button>
                      </div>
                    </form>
        
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>


        <section id="extended" style=" width:98%;">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Members</h4>
                </div>
                <div class="card-content">
                  <div class="card-body table-responsive">
                    <table class="table text-center">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th></th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Gender</th>
                          <th>Email</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>
                            <div class="custom-control custom-checkbox m-0">
                              <input type="checkbox" class="custom-control-input" id="item1">
                              <label class="custom-control-label" for="item1"></label>
                            </div>
                          </td>
                          <td>John</td>
                          <td>Carter</td>
                          <td>Male</td>
                          <td>johncarter@mail.com</td>
                          <td>
                            <a class="info p-0" data-original-title="" title="">
                              <i class="ft-user font-medium-3 mr-2"></i>
                            </a>
                            <a class="success p-0" data-original-title="" title="">
                              <i class="ft-edit-2 font-medium-3 mr-2"></i>
                            </a>
                            <a class="danger p-0" data-original-title="" title="">
                              <i class="ft-x font-medium-3 mr-2"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>
                            <div class="custom-control custom-checkbox m-0">
                              <input type="checkbox" class="custom-control-input" id="item2">
                              <label class="custom-control-label" for="item2"></label>
                            </div>
                          </td>
                          <td>Peter</td>
                          <td>Parker</td>
                          <td>Male</td>
                          <td>peterparker@mail.com</td>
                          <td>
                            <a class="info p-0" data-original-title="" title="">
                              <i class="ft-user font-medium-3 mr-2"></i>
                            </a>
                            <a class="success p-0" data-original-title="" title="">
                              <i class="ft-edit-2 font-medium-3 mr-2"></i>
                            </a>
                            <a class="danger p-0" data-original-title="" title="">
                              <i class="ft-x font-medium-3 mr-2"></i>
                            </a>
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>
                            <div class="custom-control custom-checkbox m-0">
                              <input type="checkbox" class="custom-control-input" id="item3">
                              <label class="custom-control-label" for="item3"></label>
                            </div>
                          </td>
                          <td>John</td>
                          <td>Rambo</td>
                          <td>Male</td>
                          <td>johnrambo@mail.com</td>
                          <td>
                            <a class="info p-0" data-original-title="" title="">
                              <i class="ft-user font-medium-3 mr-2"></i>
                            </a>
                            <a class="success p-0" data-original-title="" title="">
                              <i class="ft-edit-2 font-medium-3 mr-2"></i>
                            </a>
                            <a class="danger p-0" data-original-title="" title="">
                              <i class="ft-x font-medium-3 mr-2"></i>
                            </a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>



</div>
@endsection
