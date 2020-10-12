@extends('admin-layout.master')

@section('content')


    <div style="overflow: auto; height:83vh;">
 
    <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <div class="card-content">
            <div class="card-body my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
                <div class="row">
                  <div class="col-8 m-auto">
                    <figure class="effect-lily">
                      <img src="app-assets/img/gallery/12.jpg" alt="img12" />
                      <figcaption>
                        <div>
                          <h2>Nice
                            <span>Lily</span>
                          </h2>
                          <p>Lily likes to play with crayons and pencils</p>
                        </div>
                      </figcaption>
                    </figure>
                  </div>
                </div>
            </div>
          </div>
          <div class="col-lg-6 m-auto mt-10">
              <div class="form-group">
                <button type="button" class="btn btn-outline-dark btn-block btn-lg" data-toggle="modal"
                  data-backdrop="false" data-target="#primary">
                  Edit <i class="ft-edit"></i>
                </button>

                <div class="modal fade text-left" id="primary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8"
                  aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h3 class="modal-title" id="myModalLabel35"> Modal Title</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form>
                              <div class="modal-body">
                                <fieldset class="form-group floating-label-form-group">
                                  <label for="text">Change text</label>
                                  <input type="text" class="form-control" id="text" placeholder="Text">
                                </fieldset>
                                <br>
                                <fieldset class="form-group floating-label-form-group">
                                  <div class="col-12">
                                    <div class="input-group mb-3">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                      </div>
                                      <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01"
                                          aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose
                                          Image</label>
                                      </div>
                                    </div>
                                  </div>
                                </fieldset>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn grey btn-outline-danger" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-outline-primary">Save changes</button>
                              </div>
                            </form>
                          </div>
                        </div>
                  </div>
                </div>
          </div>
      </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"></div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"></div>
      </div>


      <section id="extended" style=" width:98%;">
        <div class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Events</h4>
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