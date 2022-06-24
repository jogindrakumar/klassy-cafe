@extends('admin.admin_master')
@section('main_content')


<div class="container-full">
   <div class="row">
     <div class="col-8">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Banner Image</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach ($banners as $banner)
        
   
    <tr>
      <th scope="row">1</th>
      <td><img src="{{asset($banner->image)}}" alt="" style="width:200px; height:200px;"></td>
     
    </tr>
    @endforeach
  </tbody>
</table>
    </div>

			<div class="col-4">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Add Banner Image</h3>
				</div>
        <div class="box-body">
            <div class="table-responsive">
	<form action="{{route('image.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
    
	
	<div class="form-group">
        <h5>Image<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="file" name="image"  class="form-control"  value=""  > 
	@error('image')
		<span class="text-danger">{{$message}}</span>
		@enderror
	</div>
    </div>
	

             
   
    <div class="text-xs-right">
        <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add New">
       
    </div>
</form>
			</div>
			</div>
			
		  </div>
		  
		</section>
		
	  
	  </div>
   </div>
        

        @endsection