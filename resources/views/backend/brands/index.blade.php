@extends('backendtemplate')
@section('content')

<div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-3">
            <h1 class="h3 mb-0 text-gray-800">Brand List</h1>
                <div class="text-right">
                  <a href="{{route('brands.create')}}" class="btn btn-secondary" >Add New</a>
                </div>
          	
     </div>
         
          		
           <table class="table table-bordered">
            <thead class="thead-dark">
              <tr>
                
                <th>Name</th>
                <th>Photo</th>
                
              </tr>
              
            </thead>
             <tbody>
              @php $i=1; @endphp
              @foreach($brands as $brand)
               <tr>
                 
                 <td>{{$brand->name}}</td>
                 <td><img src="{{asset($brand->photo)}}" class="img-fluid w-30"></td>
                 <td>
                   <a href="#" class="btn btn-primary">Detail</a>
                   <a href="{{route('brands.edit',$brand->id)}}" class="btn btn-secondary" >Edit</a>
                   <a href="#" class="btn btn-danger">Delete</a>
                 </td>
               </tr>
               @endforeach
             </tbody>
           </table>

            
@endsection