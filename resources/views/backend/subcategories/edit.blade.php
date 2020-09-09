@extends('backendtemplate')
@section('content')

<div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          	<div class="row">
          		<div class="col">
          			<h1 class="h3 mb-0 text-gray-800">Subcategory Edit Form</h1>
          		</div>
          	</div>
           </div> 
            <div class="row">
            	<div class="col-md-12">
            		<form action="{{route('subcategories.update',$subcategory->id)}}" method="post" enctype="multipart/form-data">
            			@csrf
            			@method('PUT')
  
  <div class="form-group row">
    <label for="inputName" class="col-sm-2 col-form-label" >Name</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" id="inputname" name="name"value="{{$subcategory->name}}">
    </div>
  </div>
  
  
  
  
 
 <div class="form-group row">
 	<div class="col-sm-10">
 		<label for="category">Category</label>
 	<select class="form-control-md" id="inputCategory" name="category">
 		<optgroup label="Choose Category">
 			@foreach($categories as $category)
 			<option value="{{$category->id}}">{{$category->name}}</option>
 			@endforeach
 		</optgroup>
 	</select>
 </div>
    </div>

  
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </div>
</form>
            		
            	
            
        
            
@endsection