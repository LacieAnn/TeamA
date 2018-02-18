@extends('Template')

@section('content')
@if(session("flash_success"))
<p class="alert alert-success">	
		{{session("flash_success")}}
	@endif
		</p>
<div style="text-align:center">
                  <div class="panel-heading"><h3>Dashboard</h3>
                    <dl>
                    You are logged in!

                  </dl>
              	</div>
              


                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

					<h2>Update Your Information!</h2>
					<form method="post">
					{{csrf_field()}}
					<p>First Name:<br><input type="text" name="First_Name" value="{{$contactDetails->First_Name}}"></p>
					<p>Last Name:<br><input type="text" name="Last_Name" value="{{$contactDetails->Last_Name}}"></p>
					<p>Address:<br><input type="text" name="Address" value="{{$contactDetails->Address}}"></p>
					<p>Phone Number:<br><input type="text" name="Phone_Num" value="{{$contactDetails->Phone_Num}}"></p>
					<p>City:<br><input type="text" name="City" value="{{$contactDetails->City}}"></p>
					<p>State:<br><input type="text" name="State" value="{{$contactDetails->State}}"></p>
					<p><input type="submit" value="Update" name="submit"></p>
					</form><br><br>

                </div>

            
        </div>

@endsection
