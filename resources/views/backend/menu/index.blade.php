@extends('admin.admin_master')
@section('main_content')


<div class="container-full">
   <div class="row">
     <div class="col-12">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Heading</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Price</th>
      
    </tr>
  </thead>
  <tbody>
     {{-- @php($i = 1) --}}
    {{-- @foreach ($banners as $banner) --}}
        
  
    <tr>
      {{-- <th scope="row">{{$i++}}</th> --}}
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      {{-- <td><img src="{{asset($banner->image)}}" alt="" style="width:200px; height:100px;"></td> --}}
     
    </tr>
    {{-- @endforeach --}}
  </tbody>
</table>
    </div>

			
   </div>
        

        @endsection