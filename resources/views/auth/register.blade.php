@extends('welcome')
@section('content')

<div style="margin-top: 89px;
"></div>
		<!--contact start -->
		<section id="contact" class="contact">
			<div class="section-heading text-center">
				<h2>Register</h2>
			</div>
			<div class="container">
				<div class="contact-content">
					<div class="row">
						<div class="col-md-offset-1 col-md-5 col-sm-8">
							<div class="single-contact-box">
								<div class="contact-form">
									<form action="{{ route('save_register') }}" method="post">
                                        @csrf
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group">
												  <input id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus required type="text" name="name" placeholder="Name">
                                                  @error('name')
                                                  <span class="invalid-feedback" role="alert">
                                                      <strong>{{ $message }}</strong>
                                                  </span>
                                                  @enderror
                                                </div><!--/.form-group-->
											</div><!--/.col-->
									
										</div><!--/.row-->

                                        <div class="row">
											<div class="col-sm-12">
                                                <div class="form-group">
                                                    <input id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" required  type="email" placeholder="Email">
                    
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div><!--/.form-group-->
											</div><!--/.col-->
										</div><!--/.row-->


										<div class="row">
											<div class="col-sm-12">
												<div class="form-group">
													
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                   
                                                  @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                       <strong>{{ $message }}</strong>
                                                     </span>
                                                   @enderror
                                                </div><!--/.form-group-->
											</div><!--/.col-->
										</div><!--/.row-->
                                        <div class="row">
											<div class="col-sm-12">
												<div class="form-group">
													
                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="confirm Password">
												  
                                                </div><!--/.form-group-->
											</div><!--/.col-->
										</div><!--/.row-->

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

		</section><!--/.contact-->
		<!--contact end -->
@endsection