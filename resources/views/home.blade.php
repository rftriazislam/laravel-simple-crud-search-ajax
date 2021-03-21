@extends('welcome')

@section('style')

<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">

@endsection

@section('content')
<div style="margin-top: 95px;
"></div>
<div class="section-heading text-center">
    <h2>Employee Crud without loading page</h2>

</div>
<div class="limitfer">
		<div class="container">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110"  id="data">
                  

                    
				</div>
				</div>
				</div>
				</div>
                



<script type="text/javascript">

$(document).ready(function () {


    load_cart_data();
function load_cart_data()
{
  $.ajax({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
   url:"{{ route('load_data') }}",
   method:"get",

   success:function(data)
   {
    $('#data').html(data);

   }
  });
}



$(document).on('click', 'a', function(){
                  


                  var value =$("#del_data").attr("value");
           
                  $.ajax({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
   url:"{{ route('del_data') }}",
   method:"get",
   data:{'id':value},
   success:function(data)
   {
    load_cart_data();

   }
  });
                
           
                  
             
              });

});
</script>
@endsection