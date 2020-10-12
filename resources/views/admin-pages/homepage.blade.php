@extends('admin-layout.master')

@section('content')

<div style="overflow: auto; height:83vh;">

    <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Banner</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Event</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="prophesy-tab" data-toggle="tab" href="#prophesy" role="tab" aria-controls="prophesy" aria-selected="false">Prophesy</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="services-tab" data-toggle="tab" href="#services" role="tab" aria-controls="services" aria-selected="false">Our Services</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="ministers-tab" data-toggle="tab" href="#ministers" role="tab" aria-controls="ministers" aria-selected="false">Our Ministers</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="footer-tab" data-toggle="tab" href="#footer" role="tab" aria-controls="footer" aria-selected="false">Footer</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab" >
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
                              <h3 class="modal-title" id="myModalLabel35"> Edit banner content</h3>
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
                data-backdrop="false" data-target="#event">
                Edit <i class="ft-edit"></i>
              </button>

              <div class="modal fade text-left" id="event" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2"
                aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h3 class="modal-title" id="myModalLabel35"> Edit event</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form>
                            <div class="modal-body">
                              <fieldset class="form-group floating-label-form-group">
                                <label for="theme">Change theme</label>
                                <input type="text" class="form-control" id="theme" placeholder="Theme">
                              </fieldset>
                              <fieldset class="form-group floating-label-form-group">
                                <label for="date">Change date</label>
                                <input type="text" class="form-control" id="date" placeholder="Date,Time">
                              </fieldset>
                              <fieldset class="form-group floating-label-form-group">
                                <label for="minister">Change minister</label>
                                <input type="text" class="form-control" id="minister" placeholder="Minister">
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
      <div class="tab-pane fade" id="prophesy" role="tabpanel" aria-labelledby="prophesy-tab">
        <div class="form-group col-8 ml-auto mr-auto mt-5 mb-5">
          <label for="userinput8" class="sr-only">Prophesy</label>
          <textarea id="userinput8" rows="5" class="form-control" name="bio" placeholder="" disabled></textarea>
        </div>
        <div class="col-lg-6 m-auto mt-10">
          <div class="form-group">
            <button type="button" class="btn btn-outline-dark btn-block btn-lg" data-toggle="modal"
              data-backdrop="false" data-target="#proph">
              Edit <i class="ft-edit"></i>
            </button>

            <div class="modal fade text-left" id="proph" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3"
              aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h3 class="modal-title" id="myModalLabel35"> Edit Prophesy</h3>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <form>
                          <div class="modal-body">
                            <fieldset class="form-group floating-label-form-group">
                              <label for="prophesy">Change prophesy</label>
                              <textarea type="text" class="form-control" id="prophesy" placeholder="Prophesy"> </textarea>
                            </fieldset>
                            <br>
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
      <div class="tab-pane fade" id="services" role="tabpanel" aria-labelledby="services-tab">

          <section id="bordered-round-media-object d-flex mr-3">
            <div class="row">
              <div class="col-12 d-flex justify-content-between">
               
                <div class="col-lg-4 mt-10">
                  <div class="form-group">
                    <button type="button" class="btn btn-outline-dark btn-block btn-lg" data-toggle="modal"
                      data-backdrop="false" data-target="#ser">
                      Edit <i class="ft-edit"></i>
                    </button>
    
                    <div class="modal fade text-left" id="ser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel9"
                      aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h3 class="modal-title" id="myModalLabel35"> Edit Services</h3>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <form>
                                  <div class="modal-body">
                                    <fieldset class="form-group floating-label-form-group">
                                      <label for="text">Title</label>
                                      <input type="text" class="form-control" id="text" placeholder="Title">
                                    </fieldset>
                                    <br>
                                    <fieldset class="form-group floating-label-form-group">
                                      <label for="text">Content</label>
                                      <input type="text" class="form-control" id="text" placeholder="Content">
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
            <div class="row match-height">
              
              <div class="col-md-12 col-lg-6">
                <div class="card">
                  
                  <div class="card-content">
                    <div class="card-body">
                      <div class="media-list media-bordered">
                        <div class="media">
                          <a>
                            <img class="media-object d-flex mr-3 round-media" src="app-assets/img/portrait/small/avatar-s-24.png" alt="Generic placeholder image" style="width: 80px;height: 80px;" />
                          </a>
                          <div class="media-body">
                            <h4 class="media-heading">Cookie candy</h4>
                            <p>Cookie candy dragée marzipan gingerbread pie pudding. Brownie fruitcake wafer bonbon gummi bears apple pie. Brownie
                              lemon drops chocolate cake donut croissant candy.</p>
                          </div>
                        </div>
                        <div class="media">
                          <a>
                            <img class="media-object d-flex mr-3 round-media" src="app-assets/img/portrait/small/avatar-s-9.png" alt="Generic placeholder image" style="width: 80px;height: 80px;" />
                          </a>
                          <div class="media-body">
                            <h4 class="media-heading">Tootsie roll dessert </h4>
                            <p>Tootsie roll dessert tart candy canes ice cream gingerbread cookie. Jelly jelly-o bear claw bear claw halvah. Biscuit
                              icing pastry tootsie roll gingerbread croissant chupa chups. </p>
                          </div>
                        </div>
                        <div class="media">
                          <a>
                            <img class="media-object d-flex mr-3 round-media" src="app-assets/img/portrait/small/avatar-s-18.png" alt="Generic placeholder image" style="width: 80px;height: 80px;" />
                          </a>
                          <div class="media-body">
                            <h4 class="media-heading">Lemon drops ice cream</h4>
                            <p>Lemon drops ice cream chocolate cake marzipan ice cream. Gummi bears cotton candy cheesecake tootsie roll. Candy
                              sweet cake. Tiramisu cookie toffee donut.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
             
              <div class="col-md-12 col-lg-6">
                <div class="card">
                  
                  <div class="card-content">
                    <div class="card-body">
                      <div class="media-list media-bordered">
                        <div class="media">
                          <div class="media-body text-right mr-3">
                            <h4 class="media-heading">Oat cake </h4>
                            <p>Oat cake topping oat cake jelly soufflé donut jelly-o tootsie roll. Candy sweet cake. Tiramisu cookie toffee donut.
                              Chocolate pie croissant gummi bears muffin chocolate.</p>
                          </div>
                          <a>
                            <img class="media-object d-flex mr-3 round-media" src="app-assets/img/portrait/small/avatar-s-7.png" alt="Generic placeholder image" style="width: 80px;height: 80px;" />
                          </a>
                        </div>
                        <div class="media">
                          <div class="media-body text-right mr-3">
                            <h4 class="media-heading">Jelly chocolate cake</h4>
                            <p>Jelly chocolate cake lemon drops halvah dragée caramels jelly-o biscuit. Fruitcake jelly beans marzipan sesame snaps.Jelly
                              beans cake chocolate cake gummi bears lollipop.</p>
                          </div>
                          <a>
                            <img class="media-object d-flex mr-3 round-media" src="app-assets/img/portrait/small/avatar-s-8.png" alt="Generic placeholder image" style="width: 80px;height: 80px;" />
                          </a>
                        </div>
                        <div class="media">
                          <div class="media-body text-right mr-3">
                            <h4 class="media-heading">Pudding marshmallow</h4>
                            <p>Pudding marshmallow cheesecake. Chocolate cake apple pie jelly-o bear claw ice cream sugar plum biscuit. Lemon drops
                              brownie biscuit jelly-o biscuit gummies.</p>
                          </div>
                          <a>
                            <img class="media-object d-flex mr-3 round-media" src="app-assets/img/portrait/small/avatar-s-6.png" alt="Generic placeholder image" style="width: 80px;height: 80px;" />
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

        <section id="extended" style=" width:98%;">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Services</h4>
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
      <div class="tab-pane fade" id="ministers" role="tabpanel" aria-labelledby="ministers-tab">

        <section id="bordered-round-media-object d-flex mr-3">
          <div class="row">
            <div class="col-12 d-flex justify-content-between">
              <div class="col-lg-4 mt-10 ">
                <div class="form-group">
                  <button type="button" class="btn btn-outline-dark btn-block btn-lg" data-toggle="modal"
                    data-backdrop="false" data-target="#addminister">
                    Add Minister <i class="icon-user-follow"></i>
                  </button>
  
                  <div class="modal fade text-left" id="addminister" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8"
                    aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h3 class="modal-title" id="myModalLabel35"> Add Minister</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <form>
                                <div class="modal-body">
                                  <fieldset class="form-group floating-label-form-group">
                                    <label for="text">Name</label>
                                    <input type="text" class="form-control" id="text" placeholder="Name">
                                  </fieldset>
                                  <br>
                                  <fieldset class="form-group floating-label-form-group">
                                    <label for="text">Office</label>
                                    <input type="text" class="form-control" id="text" placeholder="Office">
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
              <div class="col-lg-4 mt-10">
                <div class="form-group">
                  <button type="button" class="btn btn-outline-dark btn-block btn-lg" data-toggle="modal"
                    data-backdrop="false" data-target="#mini">
                    Edit <i class="ft-edit"></i>
                  </button>
  
                  <div class="modal fade text-left" id="mini" tabindex="-1" role="dialog" aria-labelledby="myModalLabel9"
                    aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h3 class="modal-title" id="myModalLabel35"> Edit Minister</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <form>
                                <div class="modal-body">
                                  <fieldset class="form-group floating-label-form-group">
                                    <label for="text">Name</label>
                                    <input type="text" class="form-control" id="text" placeholder="Name">
                                  </fieldset>
                                  <br>
                                  <fieldset class="form-group floating-label-form-group">
                                    <label for="text">Office</label>
                                    <input type="text" class="form-control" id="text" placeholder="Office">
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
          <div class="row match-height">
            
            <div class="col-md-12 col-lg-6">
              <div class="card">
                
                <div class="card-content">
                  <div class="card-body">
                    <div class="media-list media-bordered">
                      <div class="media">
                        <a>
                          <img class="media-object d-flex mr-3 round-media" src="app-assets/img/portrait/small/avatar-s-24.png" alt="Generic placeholder image" style="width: 80px;height: 80px;" />
                        </a>
                        <div class="media-body">
                          <h4 class="media-heading">Cookie candy</h4>
                          <p>Cookie candy dragée marzipan gingerbread pie pudding. Brownie fruitcake wafer bonbon gummi bears apple pie. Brownie
                            lemon drops chocolate cake donut croissant candy.</p>
                        </div>
                      </div>
                      <div class="media">
                        <a>
                          <img class="media-object d-flex mr-3 round-media" src="app-assets/img/portrait/small/avatar-s-9.png" alt="Generic placeholder image" style="width: 80px;height: 80px;" />
                        </a>
                        <div class="media-body">
                          <h4 class="media-heading">Tootsie roll dessert </h4>
                          <p>Tootsie roll dessert tart candy canes ice cream gingerbread cookie. Jelly jelly-o bear claw bear claw halvah. Biscuit
                            icing pastry tootsie roll gingerbread croissant chupa chups. </p>
                        </div>
                      </div>
                      <div class="media">
                        <a>
                          <img class="media-object d-flex mr-3 round-media" src="app-assets/img/portrait/small/avatar-s-18.png" alt="Generic placeholder image" style="width: 80px;height: 80px;" />
                        </a>
                        <div class="media-body">
                          <h4 class="media-heading">Lemon drops ice cream</h4>
                          <p>Lemon drops ice cream chocolate cake marzipan ice cream. Gummi bears cotton candy cheesecake tootsie roll. Candy
                            sweet cake. Tiramisu cookie toffee donut.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-md-12 col-lg-6">
              <div class="card">
                
                <div class="card-content">
                  <div class="card-body">
                    <div class="media-list media-bordered">
                      <div class="media">
                        <div class="media-body text-right mr-3">
                          <h4 class="media-heading">Oat cake </h4>
                          <p>Oat cake topping oat cake jelly soufflé donut jelly-o tootsie roll. Candy sweet cake. Tiramisu cookie toffee donut.
                            Chocolate pie croissant gummi bears muffin chocolate.</p>
                        </div>
                        <a>
                          <img class="media-object d-flex mr-3 round-media" src="app-assets/img/portrait/small/avatar-s-7.png" alt="Generic placeholder image" style="width: 80px;height: 80px;" />
                        </a>
                      </div>
                      <div class="media">
                        <div class="media-body text-right mr-3">
                          <h4 class="media-heading">Jelly chocolate cake</h4>
                          <p>Jelly chocolate cake lemon drops halvah dragée caramels jelly-o biscuit. Fruitcake jelly beans marzipan sesame snaps.Jelly
                            beans cake chocolate cake gummi bears lollipop.</p>
                        </div>
                        <a>
                          <img class="media-object d-flex mr-3 round-media" src="app-assets/img/portrait/small/avatar-s-8.png" alt="Generic placeholder image" style="width: 80px;height: 80px;" />
                        </a>
                      </div>
                      <div class="media">
                        <div class="media-body text-right mr-3">
                          <h4 class="media-heading">Pudding marshmallow</h4>
                          <p>Pudding marshmallow cheesecake. Chocolate cake apple pie jelly-o bear claw ice cream sugar plum biscuit. Lemon drops
                            brownie biscuit jelly-o biscuit gummies.</p>
                        </div>
                        <a>
                          <img class="media-object d-flex mr-3 round-media" src="app-assets/img/portrait/small/avatar-s-6.png" alt="Generic placeholder image" style="width: 80px;height: 80px;" />
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </section>

        <section id="extended" style=" width:98%;">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Ministers</h4>
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
      <div class="tab-pane fade" id="footer" role="tabpanel" aria-labelledby="footer-tab">

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

         <div class="col-lg-6 m-auto mt-10 ">
                  <div class="form-group">
                    <button type="button" class="btn btn-outline-dark btn-block btn-lg" data-toggle="modal"
                      data-backdrop="false" data-target="#foot">
                      Edit <i class="icon-edit"></i>
                    </button>
    
                    <div class="modal fade text-left" id="foot" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8"
                      aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h3 class="modal-title" id="myModalLabel35"> Edit footer</h3>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <form>
                                  <div class="modal-body">
                                    <fieldset class="form-group floating-label-form-group">
                                      <label for="text">Address</label>
                                      <input type="text" class="form-control" id="text" placeholder="Address">
                                    </fieldset>
                                    <br>
                                    <fieldset class="form-group floating-label-form-group">
                                      <label for="text">Twitter</label>
                                      <input type="text" class="form-control" id="text" placeholder="Twitter">
                                    </fieldset>
                                    <br>
                                    <fieldset class="form-group floating-label-form-group">
                                      <label for="text">Facebook</label>
                                      <input type="text" class="form-control" id="text" placeholder="Facebook">
                                    </fieldset>
                                    <br>
                                    <fieldset class="form-group floating-label-form-group">
                                      <label for="text">IG</label>
                                      <input type="text" class="form-control" id="text" placeholder="IG">
                                    </fieldset>
                                    <br>
                                    <fieldset class="form-group floating-label-form-group">
                                      <label for="text">Sunday Service Time</label>
                                      <input type="text" class="form-control" id="text" placeholder="Sunday Service Time">
                                    </fieldset>
                                    <br>
                                    <fieldset class="form-group floating-label-form-group">
                                      <label for="text">Thursday Service Time</label>
                                      <input type="text" class="form-control" id="text" placeholder="Thursday Service Time">
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



  </div>
@endsection