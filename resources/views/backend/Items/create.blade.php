@extends('backendtemplate')
@section('content')

<div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
          	<div class="row">
          		<div class="col">
          			<h1 class="h3 mb-0 text-gray-800">Item Create Form</h1>
          		</div>
          	</div>
           </div> 
            <div class="row">
            	<div class="col-md-12">
            		<form action="{{route('items.store')}}" method="post" enctype="multipart/form-data">
            			@csrf
  <div class="form-group row">
    <label for="inputcode" class="col-sm-2 col-form-label">Codeno</label>
    <div class="col-sm-10">
      <input type="codeno" class="form-control" id="inputcode" name="codeno">
      <span class="text-danger">{{$errors->first('codeno')}}</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="name" class="form-control" id="inputname" name="name">
      <span class="text-danger">{{$errors->first('name')}}</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputphoto" class="col-sm-2 col-form-label">Photo</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" id="inputphoto" name="photo">
      <span class="text-danger">{{$errors->first('photo')}}</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputprice" class="col-sm-2 col-form-label">Price</label>
    <div class="col-sm-10">
      <input type="price" class="form-control" id="inputprice" name="price">
      <span class="text-danger">{{$errors->first('price')}}</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputproductcode" class="col-sm-2 col-form-label">Product Code</label>
    <div class="col-sm-10">
      <input type="productcode" class="form-control" id="inputproductcode" >
      <span class="text-danger">{{$errors->first('productcode')}}</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputdiscount" class="col-sm-2 col-form-label">Discount</label>
    <div class="col-sm-10">
      <input type="discount" class="form-control" id="inputdiscount" name="discount" value="0">
      <span class="text-danger">{{$errors->first('discount')}}</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputdescription" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
      <input type="description" class="form-control" id="inputdescription" name="description">
      <span class="text-danger">{{$errors->first('description')}}</span>
    </div>
 </div>
 <div class="form-group row">
 	<div class="col-sm-10">
 		<label for="brand">Brand</label>
 	<select class="form-control-md" id="inputBrand" name="brand">
 		<optgroup label="Choose Brand">
 			@foreach($brands as $brand)
 			<option value="{{$brand->id}}">{{$brand->name}}</option>
 			@endforeach
 		</optgroup>
 	</select>
 </div>
    </div>
<div class="form-group row">
 	<div class="col-sm-10">
 		<label for="subcategory">Subcategory</label>
 	<select class="form-control-md" id="inputSubcategory" name="subcategory">
 		<optgroup label="Choose Subcategory">
 			@foreach($subcategories as $subcategory)
 			<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
 			@endforeach
 		</optgroup>
 	</select>
 </div>
    </div>
  {{-- <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
          <label class="form-check-label" for="gridRadios1">
            First radio
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            Second radio
          </label>
        </div>
        <div class="form-check disabled">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
          <label class="form-check-label" for="gridRadios3">
            Third disabled radio
          </label>
        </div>
      </div>
    </div>
  </fieldset> --}}
  {{--  <div class="form-group row">
    <div class="col-sm-2">Checkbox</div>
    <div class="col-sm-10">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck1">
        <label class="form-check-label" for="gridCheck1">
          Example checkbox
        </label>
      </div>
    </div>
  </div> --}}
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Create</button>
    </div>
  </div>
</form>
            		
            	
            
        
            
@endsection