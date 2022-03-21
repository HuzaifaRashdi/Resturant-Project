<x-app-layout>
    
    <x-slot name="header">
      
    </x-slot>

  
</x-app-layout>



<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
    @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
     @include("admin.navbar")

     <div style="position: relative; top: 60px; right: -150px">

<form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">
        
        @csrf
        <div>
            <label>Title</label>
            <input style="color:blue" type="text" name="title" value="{{$data->title}}" required>
        </div>
        <br></br>
        <div>
            <label>Price</label>
            <input style="color:blue" type="number" name="price" value="{{$data->price}}" required>
        </div>
        <br></br>
           
        <div>
            <label>Description</label>
            <input style="color:blue" type="text" name="description" value="{{$data->description}}" required>
        </div>
        <br></br>
        <div>
        <label>Old Image</label>
            <img width="200px" height="200px" src="/foodimage/{{$data->image}}" >
        </div>
        <br></br>
        <div>
        <label>New Image</label>
            <input type="file" name="image" required>
        </div>
        <br></br>
      
        <div>
            <input type="submit" value="save" class="btn btn-outline-danger">
            
        </div>
    </form>
    
</div>
</div>
     

     @include("admin.adminscript")
  
  </body>
</html>