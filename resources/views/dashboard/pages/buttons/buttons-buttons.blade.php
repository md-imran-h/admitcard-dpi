@extends('dashboard.master.master')
@section('main-content')
   <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="card">
              <div class="card-header">
                <strong>Standard Buttons</strong>
              </div>
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-12 col-xl mb-3 mb-xl-0">
                    Normal
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-primary">Primary</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-secondary">Secondary</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-success">Success</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-warning">Warning</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-danger">Danger</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-info">Info</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-light">Light</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-dark">Dark</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-link">Link</button>
                  </div>
                </div>
                <div class="row align-items-center mt-3">
                  <div class="col-12 col-xl mb-3 mb-xl-0">
                    Active State
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-primary active" aria-pressed="true">Primary</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-secondary active" aria-pressed="true">Secondary</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-success active" aria-pressed="true">Success</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-warning active" aria-pressed="true">Warning</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-danger active" aria-pressed="true">Danger</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-info active" aria-pressed="true">Info</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-light active" aria-pressed="true">Light</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-dark active" aria-pressed="true">Dark</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-link active" aria-pressed="true">Link</button>
                  </div>
                </div>
                <div class="row align-items-center mt-3">
                  <div class="col-12 col-xl mb-3 mb-xl-0">
                    Disabled
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-primary" disabled>Primary</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-secondary" disabled>Secondary</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-success" disabled>Success</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-warning" disabled>Warning</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-danger" disabled>Danger</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-info" disabled>Info</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-light" disabled>Light</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-dark" disabled>Dark</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-link" disabled>Link</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <strong>Outline Buttons</strong>
              </div>
              <div class="card-body">
                <p>
                  Use
                  <code>.btn-outline-*</code> class for outline buttons.
                </p>
                <div class="row align-items-center">
                  <div class="col-12 col-xl mb-3 mb-xl-0">
                    Normal
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-outline-primary">Primary</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-outline-secondary">Secondary</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-outline-success">Success</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-outline-warning">Warning</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-outline-danger">Danger</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-outline-info">Info</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-outline-light">Light</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-outline-dark">Dark</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0"></div>
                </div>
                <div class="row align-items-center mt-3">
                  <div class="col-12 col-xl mb-3 mb-xl-0">
                    Active State
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-outline-primary active" aria-pressed="true">Primary</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-outline-secondary active" aria-pressed="true">Secondary</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-outline-success active" aria-pressed="true">Success</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-outline-warning active" aria-pressed="true">Warning</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-outline-danger active" aria-pressed="true">Danger</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-outline-info active" aria-pressed="true">Info</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-outline-light active" aria-pressed="true">Light</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-outline-dark active" aria-pressed="true">Dark</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0"></div>
                </div>
                <div class="row align-items-center mt-3">
                  <div class="col-12 col-xl mb-3 mb-xl-0">
                    Disabled
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-outline-primary" disabled>Primary</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-outline-secondary" disabled>Secondary</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-outline-success" disabled>Success</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-outline-warning" disabled>Warning</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-outline-danger" disabled>Danger</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-outline-info" disabled>Info</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-outline-light" disabled>Light</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-outline-dark" disabled>Dark</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0"></div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <strong>Ghost Buttons</strong>
              </div>
              <div class="card-body">
                <p>
                  Use
                  <code>.btn-ghost-*</code> class for ghost buttons.
                </p>
                <div class="row align-items-center">
                  <div class="col-12 col-xl mb-3 mb-xl-0">
                    Normal
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-ghost-primary">Primary</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-ghost-secondary">Secondary</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-ghost-success">Success</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-ghost-warning">Warning</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-ghost-danger">Danger</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-ghost-info">Info</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-ghost-light">Light</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-ghost-dark">Dark</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0"></div>
                </div>
                <div class="row align-items-center mt-3">
                  <div class="col-12 col-xl mb-3 mb-xl-0">
                    Active State
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-ghost-primary active" aria-pressed="true">Primary</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-ghost-secondary active" aria-pressed="true">Secondary</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-ghost-success active" aria-pressed="true">Success</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-ghost-warning active" aria-pressed="true">Warning</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-ghost-danger active" aria-pressed="true">Danger</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-ghost-info active" aria-pressed="true">Info</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-ghost-light active" aria-pressed="true">Light</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-ghost-dark active" aria-pressed="true">Dark</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0"></div>
                </div>
                <div class="row align-items-center mt-3">
                  <div class="col-12 col-xl mb-3 mb-xl-0">
                    Disabled
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-ghost-primary" disabled>Primary</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-ghost-secondary" disabled>Secondary</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-ghost-success" disabled>Success</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-ghost-warning" disabled>Warning</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-ghost-danger" disabled>Danger</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-ghost-info" disabled>Info</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-ghost-light" disabled>Light</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-block btn-ghost-dark" disabled>Dark</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0"></div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <strong>Square Buttons</strong>
              </div>
              <div class="card-body">
                <p>
                  Use
                  <code>.btn-square</code> class for square buttons.
                </p>
                <div class="row align-items-center">
                  <div class="col-12 col-xl mb-3 mb-xl-0">
                    Normal
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-square btn-block btn-primary">Primary</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-square btn-block btn-secondary">Secondary</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-square btn-block btn-success">Success</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-square btn-block btn-warning">Warning</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-square btn-block btn-danger">Danger</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-square btn-block btn-info">Info</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-square btn-block btn-light">Light</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-square btn-block btn-dark">Dark</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-square btn-block btn-link">Link</button>
                  </div>
                </div>
                <div class="row align-items-center mt-3">
                  <div class="col-12 col-xl mb-3 mb-xl-0">
                    Active State
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-square btn-block btn-primary active" aria-pressed="true">Primary</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-square btn-block btn-secondary active" aria-pressed="true">Secondary</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-square btn-block btn-success active" aria-pressed="true">Success</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-square btn-block btn-warning active" aria-pressed="true">Warning</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-square btn-block btn-danger active" aria-pressed="true">Danger</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-square btn-block btn-info active" aria-pressed="true">Info</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-square btn-block btn-light active" aria-pressed="true">Light</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-square btn-block btn-dark active" aria-pressed="true">Dark</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-square btn-block btn-link active" aria-pressed="true">Link</button>
                  </div>
                </div>
                <div class="row align-items-center mt-3">
                  <div class="col-12 col-xl mb-3 mb-xl-0">
                    Disabled
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-square btn-block btn-primary" disabled>Primary</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-square btn-block btn-secondary" disabled>Secondary</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-square btn-block btn-success" disabled>Success</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-square btn-block btn-warning" disabled>Warning</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-square btn-block btn-danger" disabled>Danger</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-square btn-block btn-info" disabled>Info</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-square btn-block btn-light" disabled>Light</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-square btn-block btn-dark" disabled>Dark</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-square btn-block btn-link" disabled>Link</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <strong>Pill Buttons</strong>
              </div>
              <div class="card-body">
                <p>
                  Use
                  <code>.btn-pill</code> class for pill buttons.
                </p>
                <div class="row align-items-center">
                  <div class="col-12 col-xl mb-3 mb-xl-0">
                    Normal
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-pill btn-block btn-primary">Primary</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-pill btn-block btn-secondary">Secondary</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-pill btn-block btn-success">Success</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-pill btn-block btn-warning">Warning</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-pill btn-block btn-danger">Danger</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-pill btn-block btn-info">Info</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-pill btn-block btn-light">Light</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-pill btn-block btn-dark">Dark</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-pill btn-block btn-link">Link</button>
                  </div>
                </div>
                <div class="row align-items-center mt-3">
                  <div class="col-12 col-xl mb-3 mb-xl-0">
                    Active State
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-pill btn-block btn-primary active" aria-pressed="true">Primary</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-pill btn-block btn-secondary active" aria-pressed="true">Secondary</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-pill btn-block btn-success active" aria-pressed="true">Success</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-pill btn-block btn-warning active" aria-pressed="true">Warning</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-pill btn-block btn-danger active" aria-pressed="true">Danger</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-pill btn-block btn-info active" aria-pressed="true">Info</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-pill btn-block btn-light active" aria-pressed="true">Light</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-pill btn-block btn-dark active" aria-pressed="true">Dark</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-pill btn-block btn-link active" aria-pressed="true">Link</button>
                  </div>
                </div>
                <div class="row align-items-center mt-3">
                  <div class="col-12 col-xl mb-3 mb-xl-0">
                    Disabled
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-pill btn-block btn-primary" disabled>Primary</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-pill btn-block btn-secondary" disabled>Secondary</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-pill btn-block btn-success" disabled>Success</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-pill btn-block btn-warning" disabled>Warning</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-pill btn-block btn-danger" disabled>Danger</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-pill btn-block btn-info" disabled>Info</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-pill btn-block btn-light" disabled>Light</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-pill btn-block btn-dark" disabled>Dark</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <button type="button" class="btn btn-pill btn-block btn-link" disabled>Link</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <strong>Sizes</strong>
              </div>
              <div class="card-body">
                <p>Fancy larger or smaller buttons? Add
                  <code>.btn-lg</code> or
                  <code>.btn-sm</code> for additional sizes.</p>
                <div class="row align-items-center">
                  <div class="col-12 col-xl mb-3 mb-xl-0">
                    Small add
                    <code>.btn-sm</code>
                  </div>
                  <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                    <button type="button" class="btn btn-sm btn-primary">Standard Button</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Outline Button</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                    <button type="button" class="btn btn-sm btn-ghost-success">Ghost Button</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                    <button type="button" class="btn btn-sm btn-square btn-warning">Square Button</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                    <button type="button" class="btn btn-sm btn-pill btn-danger">Pill Button</button>
                  </div>
                </div>
                <div class="row align-items-center mt-3">
                  <div class="col-12 col-xl mb-3 mb-xl-0">
                    Normal
                  </div>
                  <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                    <button type="button" class="btn btn-primary">Standard Button</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                    <button type="button" class="btn btn-outline-secondary">Outline Button</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                    <button type="button" class="btn btn-ghost-success">Ghost Button</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                    <button type="button" class="btn btn-square btn-warning">Square Button</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                    <button type="button" class="btn btn-pill btn-danger">Pill Button</button>
                  </div>
                </div>
                <div class="row align-items-center mt-3">
                  <div class="col-12 col-xl mb-3 mb-xl-0">
                    Large add
                    <code>.btn-lg</code>.
                  </div>
                  <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                    <button type="button" class="btn btn-lg btn-primary">Standard Button</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                    <button type="button" class="btn btn-lg btn-outline-secondary">Outline Button</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                    <button type="button" class="btn btn-lg btn-ghost-success">Ghost Button</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                    <button type="button" class="btn btn-lg btn-square btn-warning">Square Button</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                    <button type="button" class="btn btn-lg btn-pill btn-danger">Pill Button</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <strong>With Icons</strong>
              </div>
              <div class="card-body">
                <div class="row align-items-center mt-3">
                  <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                    <button type="button" class="btn btn-primary">
                      <i class="fa fa-lightbulb-o"></i>&nbsp;Standard Button</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                    <button type="button" class="btn btn-outline-secondary">
                      <i class="fa fa-lightbulb-o"></i>&nbsp;Outline Button</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                    <button type="button" class="btn btn-ghost-success">
                      <i class="fa fa-lightbulb-o"></i>&nbsp;Ghost Button</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                    <button type="button" class="btn btn-square btn-warning">
                      <i class="fa fa-lightbulb-o"></i>&nbsp;Square Button</button>
                  </div>
                  <div class="col-6 col-sm-4 col-md mb-3 mb-xl-0 text-center">
                    <button type="button" class="btn btn-pill btn-danger">
                      <i class="fa fa-lightbulb-o"></i>&nbsp;Pill Button</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <strong>Block Level Buttons</strong>
                  </div>
                  <div class="card-body">
                    <p>Add this class
                      <code>.btn-block</code>
                    </p>
                    <button type="button" class="btn btn-secondary btn-lg btn-block">Block level button</button>
                    <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
                    <button type="button" class="btn btn-success btn-lg btn-block">Block level button</button>
                    <button type="button" class="btn btn-info btn-lg btn-block">Block level button</button>
                    <button type="button" class="btn btn-warning btn-lg btn-block">Block level button</button>
                    <button type="button" class="btn btn-danger btn-lg btn-block">Block level button</button>
                    <button type="button" class="btn btn-link btn-lg btn-block">Block level button</button>
                  </div>
                </div>
              </div>
              <!--/.col-->
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <strong>Block Level Buttons</strong>
                  </div>
                  <div class="card-body">
                    <p>Add this class
                      <code>.btn-block</code>
                    </p>
                    <button type="button" class="btn btn-outline-secondary btn-lg btn-block">Block level button</button>
                    <button type="button" class="btn btn-outline-primary btn-lg btn-block">Block level button</button>
                    <button type="button" class="btn btn-outline-success btn-lg btn-block">Block level button</button>
                    <button type="button" class="btn btn-outline-info btn-lg btn-block">Block level button</button>
                    <button type="button" class="btn btn-outline-warning btn-lg btn-block">Block level button</button>
                    <button type="button" class="btn btn-outline-danger btn-lg btn-block">Block level button</button>
                  </div>
                </div>
              </div>
              <!--/.col-->
            </div>
            <!--/.row-->
          </div>

        </div>
        @endsection