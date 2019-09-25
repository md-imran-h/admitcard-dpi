 @extends('dashboard.master.master')
@section('main-content')
 <div class="container-fluid">
          <div class="animated fadeIn">
            <div class="card">
              <div class="card-header">
                <i class="fa fa-align-justify"></i> Popovers
                <div class="card-header-actions">
                  <a href="http://coreui.io/docs/components/bootstrap-popover/popovers.html" class="card-header-action" target="_blank">
                    <small class="text-muted">docs</small>
                  </a>
                </div>
              </div>
              <div class="card-body">
                <button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover
                </button>
                <hr/>
                <a tabindex="0" class="btn btn-lg btn-danger" role="button" data-toggle="popover" data-trigger="focus" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover
                </a>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <i class="fa fa-align-justify"></i> Popovers
                <small>directions</small>
              </div>
              <div class="card-body">
                <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                  Popover on top
                </button>

                <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                  Popover on right
                </button>

                <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                  Popover on bottom
                </button>

                <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                  Popover on left
                </button>
              </div>
            </div>
          </div>

        </div>
        @endsection

 @push('scripts')
   <script src="{{asset('dashboard/js/popper.min.js')}}"></script>
   <script>
       $('[data-toggle="popover"]').popover();$('.popover-dismiss').popover({trigger:'focus'});
   </script>

 @endpush