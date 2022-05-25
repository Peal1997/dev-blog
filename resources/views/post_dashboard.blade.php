@extends('layouts.layout')
@section('main')
<h2 class="text-center mt-5">All Staff admin pannel</h2>
	<div class="wrap-table  shadow">
    
	<a class="btn btn-primary btn-sm" href="{{route('dashboard')}}">All Developer</a>
        <br>
        <br>
		<div class="card">
			<div class="card-body">

          <h2>All Data</h2>		
		  @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{Session::get('success')}}</strong>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div> 
                @endif  
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>							
							<th>Email</th>
							<th>photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody> 
						@forelse ($all_post as $item)
						<tr>
							<td>1</td>
							<td>{{$item -> title}}</td>  
							<td>{{$item -> auther}}</td>
							<td><img style="width:100px" src="{{url('images/post_img/' . $item -> image)}}" alt=""></td>
							<td>
								{{-- <a class="btn btn-sm btn-info" href="{{route('staff.show',$item->id)}}">View</a>
								<a class="btn btn-sm btn-warning" href="{{route('user.update',$item->id)}}">Edit</a> --}}
								<a class="btn btn-sm btn-danger delete_btn" href="{{route('post.destroy',$item->id)}}">Delete </a>
							</td>
						</tr> 
		                @empty
			                 <tr>
								 <td colspan="6" style="text-align: center">No data found</td>
							 </tr>
		                @endforelse              
                                              
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- JS FILES  -->
	<script src ="assets/js/jquery-3.6.0.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	
	<script src="assets/js/scripts.js"></script>
	<script>
		$('.delete_btn').click(function(){
            
          let conf =  confirm('Are you sure ??');
		  if(conf){
			  return true;
		  }else{
			  return false;
		  }
		});
	</script>

@endsection