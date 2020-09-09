@extends('backendtemplate')
@section('content')

<div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-3">
            <h1 class="h3 mb-0 text-gray-800">Item List</h1>
                <div class="text-right">
                  <a href="{{route('items.create')}}" class="btn btn-secondary" >Add New</a>
                </div>
          	
     </div>
         
          		
           <table class="table table-bordered">
            <thead class="thead-dark">
              <tr>
                <th>No</th>
                <th>Codeno</th>
                <th>Name</th>
                <th>Price</th>
                <th>Action</th>
              </tr>
              
            </thead>
             <tbody>
              @php $i=1; @endphp
              @foreach($items as $item)
               <tr>
                 <td>{{$i++}}</td>
                 <td>{{$item->codeno}}</td>
                 <td>{{$item->name}}</td>
                 <td>{{$item->price}}</td>
                 <td>
                   <a href="#" class="btn btn-primary">Detail</a>
                   <a href="{{route('items.edit',$item->id)}}" class="btn btn-secondary" >Edit</a>
                   <a href="#" class="btn btn-danger">Delete</a>
                 </td>
               </tr>
               @endforeach
             </tbody>
           </table>

            
@endsection