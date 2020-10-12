@extends('admin-layout.master')

@section('content')
<div class="content-wrapper" style="height:84vh; overflow:auto;">
    <div class="row">
      <div class="col-xl-3 col-lg-6 col-md-6 col-12">
        <div class="card gradient-blackberry">
          <div class="card-content">
            <div class="card-body pt-2 pb-0">
              <div class="media">
                <div class="media-body white text-left">
                  <h3 class="font-large-1 mb-0">0</h3>
                  <span>Total Members</span>
                </div>
                <div class="media-right white text-right">
                  <i class="icon-users  font-large-1"></i>
                </div>
              </div>
            </div>
            <div id="Widget-line-chart" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6 col-12">
        <div class="card gradient-ibiza-sunset">
          <div class="card-content">
            <div class="card-body pt-2 pb-0">
              <div class="media">
                <div class="media-body white text-left">
                  <h3 class="font-large-1 mb-0">{{Auth::user()->count()}}</h3>
                  <span>Total Admin</span>
                </div>
                <div class="media-right white text-right">
                  <i class="icon-user  font-large-1"></i>
                </div>
              </div>
            </div>
            <div id="Widget-line-chart1" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
            </div>
    
          </div>
        </div>
      </div>
    
      <div class="col-xl-3 col-lg-6 col-md-6 col-12">
        <div class="card gradient-green-tea">
          <div class="card-content">
            <div class="card-body pt-2 pb-0">
              <div class="media">
                <div class="media-body white text-left">
                  <h3 class="font-large-1 mb-0">0</h3>
                  <span> Total messages </span>
                </div>
                <div class="media-right white text-right">
                  <i class="icon-envelope font-large-1"></i>
                </div>
              </div>
            </div>
            <div id="Widget-line-chart2" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6 col-12">
        <div class="card gradient-pomegranate">
          <div class="card-content">
            <div class="card-body pt-2 pb-0">
              <div class="media">
                <div class="media-body white text-left">
                  <h3 class="font-large-1 mb-0">0</h3>
                  <span>Total Order</span>
                </div>
                <div class="media-right white text-right">
                  <i class="icon-note font-large-1"></i>
                </div>
              </div>
            </div>
            <div id="Widget-line-chart3" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">TRAFFIC VISITS</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <div class="chart-info mb-3 ml-3">
                <span class="gradient-blackberry d-inline-block rounded-circle mr-1" style="width:15px; height:15px;"></span>
                Male
                <span class="gradient-mint d-inline-block rounded-circle mr-1 ml-2" style="width:15px; height:15px;"></span>
                Female
              </div>
              <div id="line-area" class="height-350 lineArea">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="row match-height">
      <div class="col-12">
        <div class="card">
          <div class="card-header pb-2">
            <h4 class="card-title">Order Transits</h4>
          </div>
          <div class="card-content">
            <table class="table table-responsive-sm text-center">
              <thead>
                <tr>
                  <th>Image</th>
                  <th>Product</th>
                  <th>Quantity</th>
                  <th>Status</th>
                  <th>Amount</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><img class="media-object round-media height-50" src="app-assets/img/elements/01.png" alt="Generic placeholder image" /></td>
                  <td>Ferrero Rocher</td>
                  <td>1</td>
                  <td>
                    <a class="btn white btn-round btn-primary">Active</a>
                  </td>
                  <td>$19.94</td>
                  <td>
                    <a class="danger" data-original-title="" title="">
                      <i class="ft-x"></i>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td><img class="media-object round-media height-50" src="app-assets/img/elements/07.png" alt="Generic placeholder image" /></td>
                  <td>Headphones</td>
                  <td>2</td>
                  <td>
                    <a class="btn white btn-round btn-danger">Disabled</a>
                  </td>
                  <td>$99.00</td>
                  <td>
                    <a class="danger" data-original-title="" title="">
                      <i class="ft-x"></i>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td><img class="media-object round-media height-50" src="app-assets/img/elements/11.png" alt="Generic placeholder image" /></td>
                  <td>Camera</td>
                  <td>1</td>
                  <td>
                    <a class="btn white btn-round btn-info">Paused</a>
                  </td>
                  <td>$299.00</td>
                  <td>
                    <a class="danger" data-original-title="" title="">
                      <i class="ft-x"></i>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td><img class="media-object round-media height-50" src="app-assets/img/elements/14.png" alt="Generic placeholder image" /></td>
                  <td>Beer</td>
                  <td>2</td>
                  <td>
                    <a class="btn white btn-round btn-success">Active</a>
                  </td>
                  <td>$24.51</td>
                  <td>
                    <a class="danger" data-original-title="" title="">
                      <i class="ft-x"></i>
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
@endsection

