@extends('admin.admin_master')
@section('main_content')


<div class="container-full">
   <div class="row">
  

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Menu</h3>
				</div>
        <div class="box-body">
            <div class="table-responsive">
	<form action="{{route('menu.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
    
		<div class="form-group">
        <h5>Heading<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="heading"  class="form-control"  value=""  > 
	@error('heading')
		<span class="text-danger">{{$message}}</span>
		@enderror
	</div>
    </div>
    <div class="form-group">
        <h5>Description<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="text" name="description"  class="form-control"  value=""  > 
	@error('description')
		<span class="text-danger">{{$message}}</span>
		@enderror
	</div>
    </div>
	<div class="form-group">
        <h5>Image<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="file" name="image"  class="form-control"  value=""  > 
	@error('image')
		<span class="text-danger">{{$message}}</span>
		@enderror
	</div>
    </div>
    <div class="form-group">
        <h5>Price<span class="text-danger">*</span></h5>
        <div class="controls">
        <input type="number" name="price"  class="form-control"  value=""  > 
	@error('price')
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