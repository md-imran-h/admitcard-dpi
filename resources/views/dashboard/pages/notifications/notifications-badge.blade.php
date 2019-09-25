@extends('dashboard.master.master')
@section('main-content')
<div class="container-fluid">
          <div class="animated fadeIn">
            <div class="row">
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <i class="fa fa-align-justify"></i> Bootstrap Badges
                    <div class="card-header-actions">
                      <a href="http://coreui.io/docs/components/bootstrap-badge/" class="card-header-action" target="_blank">
                        <small class="text-muted">docs</small>
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <h1>Example heading
                      <span class="badge badge-secondary">New</span>
                    </h1>
                    <h2>Example heading
                      <span class="badge badge-secondary">New</span>
                    </h2>
                    <h3>Example heading
                      <span class="badge badge-secondary">New</span>
                    </h3>
                    <h4>Example heading
                      <span class="badge badge-secondary">New</span>
                    </h4>
                    <h5>Example heading
                      <span class="badge badge-secondary">New</span>
                    </h5>
                    <h6>Example heading
                      <span class="badge badge-secondary">New</span>
                    </h6>
                  </div>
                  <div class="card-footer">
                    <button type="link" class="btn btn-primary">Notifications
                      <span class="badge badge-light badge-pill" style="position: static;">9</span>
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <i class="fa fa-align-justify"></i> Bootstrap Badges
                    <small>contextual variations</small>
                  </div>
                  <div class="card-body">
                    <span class="badge badge-primary">Primary</span>
                    <span class="badge badge-secondary">Secondary</span>
                    <span class="badge badge-success">Success</span>
                    <span class="badge badge-danger">Danger</span>
                    <span class="badge badge-warning">Warning</span>
                    <span class="badge badge-info">Info</span>
                    <span class="badge badge-light">Light</span>
                    <span class="badge badge-dark">Dark</span>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <i class="fa fa-align-justify"></i> Bootstrap Badges
                    <small>pill badges</small>
                  </div>
                  <div class="card-body">
                    <span class="badge badge-pill badge-primary">Primary</span>
                    <span class="badge badge-pill badge-secondary">Secondary</span>
                    <span class="badge badge-pill badge-success">Success</span>
                    <span class="badge badge-pill badge-danger">Danger</span>
                    <span class="badge badge-pill badge-warning">Warning</span>
                    <span class="badge badge-pill badge-info">Info</span>
                    <span class="badge badge-pill badge-light">Light</span>
                    <span class="badge badge-pill badge-dark">Dark</span>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <i class="fa fa-align-justify"></i> Bootstrap Badges
                    <small>links</small>
                  </div>
                  <div class="card-body">
                    <a href="#" class="badge badge-primary">Primary</a>
                    <a href="#" class="badge badge-secondary">Secondary</a>
                    <a href="#" class="badge badge-success">Success</a>
                    <a href="#" class="badge badge-danger">Danger</a>
                    <a href="#" class="badge badge-warning">Warning</a>
                    <a href="#" class="badge badge-info">Info</a>
                    <a href="#" class="badge badge-light">Light</a>
                    <a href="#" class="badge badge-dark">Dark</a>
                  </div>
                </div>
              </div>

            </div>
            <!--/.row-->
          </div>

        </div>
        @endsection