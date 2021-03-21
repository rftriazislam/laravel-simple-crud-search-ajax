@extends('welcome')

@section('style')

<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">

@endsection

@section('content')
<div style="margin-top: 89px;
"></div>
<div class="section-heading text-center">
    <h2>Employee list Page Load </h2>

</div>



<div class="limitfer">
		<div class="container">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110" >
                  
                <div class="table100-head">
        <table>
            <thead>
                <tr class="row100 head">
                    <th class="cell100 column1">Name</th>
                    <th class="cell100 column1">Email</th>
                    <th class="cell100 column1">Phone</th>
                    <th class="cell100 column1">Address</th>

                    <th class="cell100 column5">Select</th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="table100-body js-pscroll">
        <table>
            <tbody id="employee_list">
                
            

    @foreach($employee_list as $data)

            <tr class="row100 body">
					<td class="cell100 column1">{{$data->name}}</td>
					<td class="cell100 column1">{{$data->email}}</td>
					<td class="cell100 column1">{{$data->phone}}</td>
					<td class="cell100 column1">{{$data->address}}</td>

					
					<td class="cell100 column5" >
                   
               <a href="{{route('remove',[$data->id])}}"  style="color:red" ><button style="background:aqua"> remove</button></a>
                   </td>
			  </tr> 
        @endforeach
</tbody>
                  </table>
          </div> 
                    
				</div>
				</div>
				</div>
				</div>
                





            @endsection