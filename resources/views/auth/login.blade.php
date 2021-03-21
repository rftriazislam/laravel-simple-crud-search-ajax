@extends('welcome')
@section('content')

<div style="margin-top: 89px;
"></div>
		<!--contact start -->
		<section id="contact" class="contact">
			<div class="section-heading text-center">
				<h2>Login</h2>
			</div>
			<div class="container">
				<div class="contact-content">
					<div class="row">
						<div class="col-md-offset-1 col-md-5 col-sm-8">
							<div class="single-contact-box">
								<div class="contact-form">
									<form action="{{ route('login_user') }}" method="post">
                                        @csrf
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group">
												  <input id="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" required autocomplete="username" autofocus required type="text" name="username" placeholder="username">
                                                  @error('username')
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
											<div class="col-sm-12 submit">
												<div class="single-contact-btn">
													<button class="contact-btn" type="submit">Login</button>
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