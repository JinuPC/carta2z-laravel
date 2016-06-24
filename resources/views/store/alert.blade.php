<div class="row flash-message">                         

	@if(Session::has('flash_sucess'))
		<div class="x_content bs-example-popovers">

	          <div class="alert alert-success alert-dismissible fade in flashalert" role="alert">
	            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
	            </button>
	            <p style="text-align:center; color:black; font-size:15px;"><span class="glyphicon glyphicon-ok"></span> {!! session('flash_sucess') !!}</p>
	          </div> 
	    </div>
	@endif
	@if(Session::has('flash_warning'))
		<div class="x_content bs-example-popovers">
		<div class="alert alert-warning alert-dismissible fade in flashalert" role="alert">
	            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
	            </button>
	            <p style="text-align:center; color:black; font-size:15px;"><span class="glyphicon glyphicon-warning-sign"></span> {!! session('flash_warning') !!}</p>
	          </div> 
		</div>
	@endif
	@if(Session::has('flash_danger'))
		<div class="x_content bs-example-popovers">
		<div class="alert alert-danger alert-dismissible fade in flashalert" role="alert">
	            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
	            </button>
	            <p style="text-align:center; color:black; font-size:15px;"><span class="glyphicon glyphicon-exclamation-sign"></span> {!! session('flash_danger') !!}</p>
	          </div> 
		</div>
	@endif
	@if(Session::has('flash_info'))
		<div class="x_content bs-example-popovers">
		<div class="alert alert-info alert-dismissible fade in flashalert" role="alert">
	            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
	            </button>
	            <p style="text-align:center; color:black; font-size:15px;"><span class="glyphicon glyphicon-info-sign"></span> {!! session('flash_info') !!}</p>
	          </div> 
		</div>
	@endif               


</div>
                       

