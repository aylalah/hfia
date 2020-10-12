@extends('admin-layout.master')

@section('content')
<div style="overflow: auto; height:83vh;">

    <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Banner</a>
        </li>
        <li class="nav-item" role="presentation">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">About Church</a>
        </li>
        <li class="nav-item" role="presentation">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">About Bishop</a>
        </li>
        <li class="nav-item" role="presentation">
        <a class="nav-link" id="gallery-tab" data-toggle="tab" href="#gallery" role="tab" aria-controls="gallery" aria-selected="false">Gallery</a>
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
                              <h3 class="modal-title" id="myModalLabel35"> Edit banner</h3>
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
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
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
                  data-backdrop="false" data-target="#church">
                  Edit <i class="ft-edit"></i>
                </button>

                <div class="modal fade text-left" id="church" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8"
                  aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h3 class="modal-title" id="myModalLabel35">About Church</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form>
                              <div class="modal-body">
                                <fieldset class="form-group floating-label-form-group">
                                  <label for="text">About Church</label>
                                  <textarea type="text" class="form-control" id="text" placeholder="Church"></textarea>
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
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
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
                  data-backdrop="false" data-target="#bishop">
                  Edit <i class="ft-edit"></i>
                </button>

                <div class="modal fade text-left" id="bishop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8"
                  aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h3 class="modal-title" id="myModalLabel35">About Bishop</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <form>
                              <div class="modal-body">
                                <fieldset class="form-group floating-label-form-group">
                                  <label for="text">About Bishop</label>
                                  <textarea type="text" class="form-control" id="text" placeholder="Church"></textarea>
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
        <div class="tab-pane fade" id="gallery" role="tabpanel" aria-labelledby="gallery-tab">

          <section id="photos">
            <div class="row">
              <div class="col-12">
                <div class="content-header">Gallery</div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-content">
                    <div class="card-body">
                      <div class="row">
                        <figure class="col-lg-3 col-md-6 col-12">
                          <img class="img-thumbnail img-fluid" src="app-assets/img/gallery/1.jpg" itemprop="thumbnail" alt="Image description" />
                        </figure>
                        <figure class="col-lg-3 col-md-6 col-12">
                          <img class="img-thumbnail img-fluid" src="app-assets/img/gallery/2.jpg" itemprop="thumbnail" alt="Image description" />
                        </figure>
                        <figure class="col-lg-3 col-md-6 col-12">
                          <img class="img-thumbnail img-fluid" src="app-assets/img/gallery/3.jpg" itemprop="thumbnail" alt="Image description" />
                        </figure>
                        <figure class="col-lg-3 col-md-6 col-12">
                          <img class="img-thumbnail img-fluid" src="app-assets/img/gallery/4.jpg" itemprop="thumbnail" alt="Image description" />
                        </figure>
                      </div>
                      <div class="row">
                        <figure class="col-lg-3 col-md-6 col-12">
                          <img class="img-thumbnail img-fluid" src="app-assets/img/gallery/5.jpg" itemprop="thumbnail" alt="Image description" />
                        </figure>
                        <figure class="col-lg-3 col-md-6 col-12">
                          <img class="img-thumbnail img-fluid" src="app-assets/img/gallery/6.jpg" itemprop="thumbnail" alt="Image description" />
                        </figure>
                        <figure class="col-lg-3 col-md-6 col-12">
                          <img class="img-thumbnail img-fluid" src="app-assets/img/gallery/7.jpg" itemprop="thumbnail" alt="Image description" />
                        </figure>
                        <figure class="col-lg-3 col-md-6 col-12">
                          <img class="img-thumbnail img-fluid" src="app-assets/img/gallery/8.jpg" itemprop="thumbnail" alt="Image description" />
                        </figure>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>  

          <div class="col-lg-6 m-auto mt-10">
            <div class="form-group">
              <button type="button" class="btn btn-outline-dark btn-block btn-lg" data-toggle="modal"
                data-backdrop="false" data-target="#gal">
                Edit <i class="ft-edit"></i>
              </button>

              <div class="modal fade text-left" id="gal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8"
                aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h3 class="modal-title" id="myModalLabel35">Gallery</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form>
                            <div class="modal-body">
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
                              <fieldset class="form-group floating-label-form-group">
                                <div class="col-12">
                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="inputGroupFile02"
                                        aria-describedby="inputGroupFileAddon02">
                                      <label class="custom-file-label" for="inputGroupFile02">Choose
                                        Image</label>
                                    </div>
                                  </div>
                                </div>
                              </fieldset>
                              <fieldset class="form-group floating-label-form-group">
                                <div class="col-12">
                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="inputGroupFileAddon03">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="inputGroupFile03"
                                        aria-describedby="inputGroupFileAddon03">
                                      <label class="custom-file-label" for="inputGroupFile03">Choose
                                        Image</label>
                                    </div>
                                  </div>
                                </div>
                              </fieldset>
                              <fieldset class="form-group floating-label-form-group">
                                <div class="col-12">
                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="inputGroupFileAddon04">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="inputGroupFile04"
                                        aria-describedby="inputGroupFileAddon04">
                                      <label class="custom-file-label" for="inputGroupFile04">Choose
                                        Image</label>
                                    </div>
                                  </div>
                                </div>
                              </fieldset>
                              <fieldset class="form-group floating-label-form-group">
                                <div class="col-12">
                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="inputGroupFileAddon05">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="inputGroupFile05"
                                        aria-describedby="inputGroupFileAddon05">
                                      <label class="custom-file-label" for="inputGroupFile05">Choose
                                        Image</label>
                                    </div>
                                  </div>
                                </div>
                              </fieldset>
                              <fieldset class="form-group floating-label-form-group">
                                <div class="col-12">
                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="inputGroupFileAddon06">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="inputGroupFile06"
                                        aria-describedby="inputGroupFileAddon06">
                                      <label class="custom-file-label" for="inputGroupFile06">Choose
                                        Image</label>
                                    </div>
                                  </div>
                                </div>
                              </fieldset>
                              <fieldset class="form-group floating-label-form-group">
                                <div class="col-12">
                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="inputGroupFileAddon07">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="inputGroupFile07"
                                        aria-describedby="inputGroupFileAddon07">
                                      <label class="custom-file-label" for="inputGroupFile07">Choose
                                        Image</label>
                                    </div>
                                  </div>
                                </div>
                              </fieldset>
                              <fieldset class="form-group floating-label-form-group">
                                <div class="col-12">
                                  <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="inputGroupFileAddon08">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input" id="inputGroupFile08"
                                        aria-describedby="inputGroupFileAddon08">
                                      <label class="custom-file-label" for="inputGroupFile08">Choose
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
          
            <section id="extended" style=" width:98%;">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="card">
                      <div class="card-header">
                        <h4 class="card-title">Gallery</h4>
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
    </div>





</div>
@endsection