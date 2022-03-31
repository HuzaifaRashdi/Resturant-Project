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
     
     <form action="{{url('/updatefoodchef',$data->id)}}" method="post" enctype="multipart/form-data">
        
        @csrf
        <div>
            <label>Chef Name</label>
            <input style="color:blue" type="text" name="name" value="{{$data->name}}" required>
        </div>
        <br></br>
        <div>
            <label>Speciality</label>
            <input style="color:blue" type="text" name="speciality" value="{{$data->speciality}}" required>
        </div>
        <br></br>
           
        <div>
        <label>Old Image</label>
            <img width="200px" height="200px" src="/foodchefsimage/{{$data->image}}" >
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
     @include("admin.adminscript")

  </body>
</html>