
@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
  @include('Admin/include/header-form')

  <div class="content">

<div class="panel panel-flat">


<div class="panel-heading">
							<h5 class="panel-title">Edit Reclamation : {{$reclame->user->name}}</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

                        <div class="panel-body">
                        <form class="form-horizontal form-validate-jquery" method="POST" action="{{route('reclame.update',$reclame->id)}}">
                        {{ csrf_field() }}

	<fieldset class="content-group">
									<legend class="text-bold">Basic inputsvsvsv</legend>

									<!-- Basic text input -->
									<div class="form-group">
										<label class="control-label col-lg-3">Description <span class="text-danger">*</span></label>
										<div class="col-lg-9">
											<input type="text" name="title" value="{{$reclame->description}}" class="form-control" required="required" placeholder="Text input validation"readonly>
										</div>
									</div>
									<!-- /basic text input -->
				


									
                                    <div class="form-group">
										<label class="control-label col-lg-3">Basic inline radio group <span class="text-danger">*</span></label>
										<div class="col-lg-9">
											<label class="radio-inline">
												<input type="radio" name="statu" value="0"{{ ($reclame->statu=="0")? "checked" : "" }}>
												Encours 
											</label>

											<label class="radio-inline">
												<input type="radio" name="statu" value="-1"{{ ($reclame->statu=="-1")? "checked" : "" }}>
                               Refus											</label>

                                            <label class="radio-inline">
												<input type="radio" name="statu" value="1"{{ ($reclame->statu=="1")? "checked" : "" }}>
												Termine
											</label>
										</div>
									</div>

								</fieldset>
                                <div class="text-right">
									<button type="reset" class="btn btn-default" id="reset">Reset <i class="icon-reload-alt position-right"></i></button>
									<button type="submit" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
								</div>


                        </form>


                        </div>



</div>
 
 
 
 <div class="footer text-muted">
						&copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</div>
 
 
  </div>

</div>

@endsection