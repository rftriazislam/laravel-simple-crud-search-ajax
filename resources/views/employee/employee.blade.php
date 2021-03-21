@extends('welcome')

@section('style')

<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">

@endsection

@section('content')
<div style="margin-top: 89px;
"></div>
<div class="section-heading text-center">
    <h2>Employee</h2>

<b> Search Employee name :</b>

<div class="row">
<div class="col-sm-12">
<div class="form-group" style="    margin-left: 40%;">
<input id="employee" style="background: #dd7def;height: 37px;" name="name" required  type="text" placeholder="Search key" />
</div>
</div>
</div>


</div>



<div class="limitfer">
		<div class="container">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110"  id="employee_list">
                  

                    
				</div>
				</div>
				</div>
				</div>
                





                <div class="container" id="form_list" style="background: rebeccapurple;display: none;">
				<div class="contact-content">
					<div class="row">
						<div class="col-md-offset-1 col-md-5 col-sm-8">
							<div class="single-contact-box">
								<div class="contact-form">
									<form action="{{ route('save_employee') }}" method="post">
                                        @csrf
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group">
												  <input class="form-control" type="text" name="name" placeholder="Name">
                                                
                                                </div><!--/.form-group-->
											</div><!--/.col-->
									
										</div><!--/.row-->
                                        <div class="row">
											<div class="col-sm-12">
                                                <div class="form-group">
                                                    <input  class="form-control" name="email"  type="email" placeholder="email">
                    
                                                </div><!--/.form-group-->
											</div><!--/.col-->
										</div><!--/.row-->
                                        <div class="row">
											<div class="col-sm-12">
                                                <div class="form-group">
                                                    <input  class="form-control" name="phone"  type="text" placeholder="phone">
                    
                                                </div><!--/.form-group-->
											</div><!--/.col-->
										</div><!--/.row-->
                                        <div class="row">
											<div class="col-sm-12">
                                                <div class="form-group">
                                                    <input class="form-control" name="address" type="text" placeholder="address">
                    
                                                </div><!--/.form-group-->
											</div><!--/.col-->
										</div><!--/.row-->


<div id="ids">
</div>
										
									
										<div class="row">
											<div class="col-sm-12 submit">
												<div class="single-contact-btn">
													<button class="contact-btn" type="submit">submit</button>
												</div><!--/.single-single-contact-btn-->
											</div><!--/.col-->
										</div><!--/.row-->
									</form><!--/form-->
								</div><!--/.contact-form-->
							</div><!--/.single-contact-box-->
						</div><!--/.col-->
					
					</div><!--/.row-->
				</div><!--/.contact-content-->
			</div><!--/.container-->













			<script type="text/javascript">

                $(document).ready(function () {
             
                $('#employee').on('keyup',function() {
                    var query = $(this).val(); 
                    $.ajax({
                       
                        url:"{{ route('search') }}",
                        type:"GET",
                        data:{'employee':query},
                        success:function (data) {
                          
                            $('#employee_list').html(data);
                        }
                    })
                    // end of ajax call
                });

                
                $(document).on('click', 'a', function(){
                  
                  var value =$("#form").attr("value");
               
           
               
                 $('#ids').append('<input type="hidden" name="employee_id" value="'+value+'" />');
                  $('#form_list').css("display","block");
                
           
                  
             
              });
         
            });
        </script>
@endsection