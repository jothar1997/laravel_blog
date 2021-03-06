@extends('backend_master')

@section('content')
<main class="app-content">
	<div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Subcategory Create</h1>
          <p>A free and open source Bootstrap 4 admin template</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
   </div>
   <div class="container">
     <div class="row">
       <div class="col-12 col-md-10 offset-md-1 bg-light p-4">
          <h2>Edit Form</h2>
         <form method="POST" action="{{route('subcategories.update',$subcategory->id)}}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
           <div class="form-group">
             <label for="name">Name</label>
             <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{$subcategory->name}}">
             @error('name')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
           </div>
           <div class="form-group">
             <label for="category_id">Category</label>
             <select class="form-control" name="category_id" id="category_id">
               @foreach($subs as $row)
                <option value="{{$row->id}}">{{$row->name}}</option>
               @endforeach
             </select>
           </div>
           <div class="form-group">
             <button type="submit" class="btn btn-success">Update</button>
           </div>
         </form>
       </div>
     </div>
   </div>
</main>

@endsection

@section('script')
<script type="text/javascript">
  $(document).ready(function (argument) {
    // alert('oj');
    $("#category_id option[value={{$subcategory->category_id}}]").prop('selected',true);
  })
</script>
@endsection