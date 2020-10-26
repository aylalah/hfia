@extends('admin-layout.master')

@section('content')

<div style="overflow: auto; height:83vh;">

    <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Banner</a>
        </li>
        <li class="nav-item" role="presentation">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">HFIA</a>
        </li>
        <li class="nav-item" role="presentation">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Youth</a>
        </li>
        <li class="nav-item" role="presentation">
        <a class="nav-link" id="class-tab" data-toggle="tab" href="#class" role="tab" aria-controls="class" aria-selected="false">Class</a>
        </li>
        <li class="nav-item" role="presentation">
        <a class="nav-link" id="crusade-tab" data-toggle="tab" href="#crusade" role="tab" aria-controls="crusade" aria-selected="false">Crusade</a>
        </li>
        <li class="nav-item" role="presentation">
        <a class="nav-link" id="ht-tab" data-toggle="tab" href="#ht" role="tab" aria-controls="ht" aria-selected="false">HT</a>
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
                                  <h3 class="modal-title" id="myModalLabel35"> Edit Ministry</h3>
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
            <div class="form-group col-8 ml-auto mr-auto mt-5 mb-5">
                <label for="userinput8" class="sr-only">HFIA</label>
                <textarea id="userinput8" rows="5" class="form-control" name="bio" placeholder="" disabled></textarea>
            </div>
              <div class="col-lg-6 m-auto mt-10">
                <div class="form-group">
                  <button type="button" class="btn btn-outline-dark btn-block btn-lg" data-toggle="modal"
                    data-backdrop="false" data-target="#hfia">
                    Edit <i class="ft-edit"></i>
                  </button>
      
                  <div class="modal fade text-left" id="hfia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3"
                    aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h3 class="modal-title" id="myModalLabel35"> Edit HFIA</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <form>
                                <div class="modal-body">
                                  <fieldset class="form-group floating-label-form-group">
                                    <label for="prophesy">Change Text</label>
                                    <textarea type="text" class="form-control" id="hfia" placeholder="Text"> </textarea>
                                  </fieldset>
                                  <br>
                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01"
                                      aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose
                                      Image</label>
                                  </div>
                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile02"
                                      aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile02">Choose
                                      Image</label>
                                  </div>
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
            <div class="form-group col-8 ml-auto mr-auto mt-5 mb-5">
                <label for="userinput8" class="sr-only">Youth</label>
                <textarea id="userinput8" rows="5" class="form-control" name="bio" placeholder="" disabled></textarea>
            </div>
              <div class="col-lg-6 m-auto mt-10">
                <div class="form-group">
                  <button type="button" class="btn btn-outline-dark btn-block btn-lg" data-toggle="modal"
                    data-backdrop="false" data-target="#youth">
                    Edit <i class="ft-edit"></i>
                  </button>
      
                  <div class="modal fade text-left" id="youth" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3"
                    aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h3 class="modal-title" id="myModalLabel35"> Edit Youth</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <form>
                                <div class="modal-body">
                                  <fieldset class="form-group floating-label-form-group">
                                    <label for="prophesy">Change Text</label>
                                    <textarea type="text" class="form-control" id="youth" placeholder="Text"> </textarea>
                                  </fieldset>
                                  <br>
                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01"
                                      aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose
                                      Image</label>
                                  </div>
                                  <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile02"
                                      aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile02">Choose
                                      Image</label>
                                  </div>
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
        <div class="tab-pane fade" id="class" role="tabpanel" aria-labelledby="class-tab">
            <div class="form-group col-8 ml-auto mr-auto mt-5 mb-5">
                <label for="userinput8" class="sr-only">HT</label>
                <textarea id="userinput8" rows="5" class="form-control" name="bio" placeholder="" disabled></textarea>
            </div>
            <div class="col-lg-6 m-auto mt-10">
                <div class="form-group">
                  <button type="button" class="btn btn-outline-dark btn-block btn-lg" data-toggle="modal"
                    data-backdrop="false" data-target="#classs">
                    Edit <i class="ft-edit"></i>
                  </button>
  
                  <div class="modal fade text-left" id="classs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8"
                    aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h3 class="modal-title" id="myModalLabel35">Class</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <form>
                                <div class="modal-body">
                                  <fieldset class="form-group floating-label-form-group">
                                    <label for="text">Change text</label>
                                    <input type="text" class="form-control" id="htt" placeholder="Text">
                                  </fieldset>
                                  <br>
                                  <fieldset class="form-group floating-label-form-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01"
                                          aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose
                                          Image</label>
                                      </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01"
                                          aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose
                                          Image</label>
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
        <div class="tab-pane fade" id="crusade" role="tabpanel" aria-labelledby="crusade-tab">
            <div class="form-group col-8 ml-auto mr-auto mt-5 mb-5">
                <label for="userinput8" class="sr-only">HT</label>
                <textarea id="userinput8" rows="5" class="form-control" name="bio" placeholder="" disabled></textarea>
            </div>
            <div class="col-lg-6 m-auto mt-10">
                <div class="form-group">
                  <button type="button" class="btn btn-outline-dark btn-block btn-lg" data-toggle="modal"
                    data-backdrop="false" data-target="#crud">
                    Edit <i class="ft-edit"></i>
                  </button>
  
                  <div class="modal fade text-left" id="crud" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8"
                    aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h3 class="modal-title" id="myModalLabel35">Crusade</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <form>
                                <div class="modal-body">
                                  <fieldset class="form-group floating-label-form-group">
                                    <label for="text">Change text</label>
                                    <input type="text" class="form-control" id="htt" placeholder="Text">
                                  </fieldset>
                                  <br>
                                  <fieldset class="form-group floating-label-form-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01"
                                          aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose
                                          Image</label>
                                      </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01"
                                          aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose
                                          Image</label>
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
        <div class="tab-pane fade" id="ht" role="tabpanel" aria-labelledby="ht-tab">
            <div class="form-group col-8 ml-auto mr-auto mt-5 mb-5">
                <label for="userinput8" class="sr-only">HT</label>
                <textarea id="userinput8" rows="5" class="form-control" name="bio" placeholder="" disabled></textarea>
            </div>
            <div class="col-lg-6 m-auto mt-10">
                <div class="form-group">
                  <button type="button" class="btn btn-outline-dark btn-block btn-lg" data-toggle="modal"
                    data-backdrop="false" data-target="#het">
                    Edit <i class="ft-edit"></i>
                  </button>
  
                  <div class="modal fade text-left" id="het" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8"
                    aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h3 class="modal-title" id="myModalLabel35">HT</h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <form>
                                <div class="modal-body">
                                  <fieldset class="form-group floating-label-form-group">
                                    <label for="text">Change text</label>
                                    <input type="text" class="form-control" id="htt" placeholder="Text">
                                  </fieldset>
                                  <br>
                                  <fieldset class="form-group floating-label-form-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01"
                                          aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose
                                          Image</label>
                                      </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="inputGroupFile01"
                                          aria-describedby="inputGroupFileAddon01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose
                                          Image</label>
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