@extends('admin-layout.master')

@section('content')

<div style="overflow: auto; height:83vh;">

        <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Banner</a>
            </li>
            <li class="nav-item" role="presentation">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Word</a>
            </li>
            <li class="nav-item" role="presentation">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact Info</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              {{$contacts->location_address}}
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
                                      <h3 class="modal-title" id="myModalLabel35"> Banner</h3>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <form action='contactcontroller' method='post'>
                                      {{ @csrf_field() }}
                                      <div class="modal-body">
                                        <fieldset class="form-group floating-label-form-group">
                                          <label for="text">Change text</label>
                                        <input type="text" class="form-control" id="text" name="name" value="{{$contacts->location_address}}" placeholder="Text">
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
                                        <button type="submit" class="btn btn-outline-primary">Save changes</button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                          </div>
                        </div>
                  </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="form-group col-8 ml-auto mr-auto mt-5 mb-5">
                    <label for="userinput8" class="sr-only">Word</label>
                    <textarea id="userinput8" rows="5" class="form-control" name="bio" placeholder="" disabled>{{$contacts->location_address}}</textarea>
                </div>
                  <div class="col-lg-6 m-auto mt-10">
                    <div class="form-group">
                      <button type="button" class="btn btn-outline-dark btn-block btn-lg" data-toggle="modal"
                        data-backdrop="false" data-target="#word">
                        Edit <i class="ft-edit"></i>
                      </button>
          
                      <div class="modal fade text-left" id="word" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3"
                        aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h3 class="modal-title" id="myModalLabel35"> Edit Word</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <form action='contactForm' method='post'>
                                    {{ @csrf_field() }}
                                    <div class="modal-body">
                                      <fieldset class="form-group floating-label-form-group">
                                        <label for="">Change Word</label>
                                        <textarea type="text" class="form-control" id="word" placeholder=""> {{$contacts->location_address}}</textarea>
                                      </fieldset>
                                      <br>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn grey btn-outline-danger" data-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-outline-primary">Save changes</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                        </div>
                      </div>
                  </div>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="row">
                    <div class="col-8 m-auto">
                      <ul class="no-list-style">
                        <li class="mb-2">
                            <span class="text-bold-500 primary"><a><i class="ft-globe font-small-3"></i></a> Address: <span class="d-block overflow-hidden"></span>{{$contacts->location_address}}</span>
                          </li>
                        <li class="mb-2">
                            <span class="text-bold-500 primary"><a><i class="ft-smartphone font-small-3"></i></a> Phone Number: <span class="d-block overflow-hidden"></span>{{$contacts->phone_number}}</span>
                          </li>
                        <li class="mb-2">
                          <span class="text-bold-500 primary"><a><i class="ft-mail font-small-3"></i></a> Email: <span class="d-block overflow-hidden"></span>{{$contacts->email}}</span>
                        </li>
                        <li class="mb-2">
                          <span class="text-bold-500 primary"><a><i class="ft-monitor font-small-3"></i></a> Website: <span class="d-block overflow-hidden"></span>{{$contacts->facebook}}</span>
                        </li>
                      </ul>
                    </div>
                    </div>
                <div class="col-lg-6 m-auto mt-10">
                    <div class="form-group">
                      <button type="button" class="btn btn-outline-dark btn-block btn-lg" data-toggle="modal"
                        data-backdrop="false" data-target="#cont">
                        Edit <i class="ft-edit"></i>
                      </button>
          
                      <div class="modal fade text-left" id="cont" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3"
                        aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h3 class="modal-title" id="myModalLabel35"> Edit Contact</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <form action='contactForm2' method='post'>
                                    {{ @csrf_field() }}
                                    <div class="modal-body">
                                      <fieldset class="form-group floating-label-form-group">
                                        <label for="">Address</label>
                                        <input type="text" class="form-control" name="address" id="word" value="{{$contacts->location_address}}" placeholder="">
                                      </fieldset>
                                      <fieldset class="form-group floating-label-form-group">
                                        <label for="">Phone Number</label>
                                        <input type="text" class="form-control" name="phone" id="word" value="{{$contacts->phone_number}}" placeholder="">
                                      </fieldset>
                                      <fieldset class="form-group floating-label-form-group">
                                        <label for="">Email</label>
                                        <input type="text" class="form-control" name="email" id="word" value="{{$contacts->email}}" placeholder="">
                                      </fieldset>
                                      <fieldset class="form-group floating-label-form-group">
                                        <label for="">Website</label>
                                        <input type="text" class="form-control" name="website" id="word" value="{{$contacts->facebook}}" placeholder="">
                                      </fieldset>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn grey btn-outline-danger" data-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-outline-primary">Save changes</button>
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