<x-app-layout>
    
    <x-slot name="header">
      
    </x-slot>

  
</x-app-layout>



<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
     @include("admin.navbar")
     <div style="position: relative; top: 60px; right: -150px">

<form action="{{url('uploadchefs')}}" method="post" enctype="multipart/form-data">
    <div>
    @csrf
    <div>

    <label>Name</label>
    <input style="color:blue" type="text" name="name" placeholder="Enter  a Name" required>

     </div>
     <br></br>

     <label>Speciality</label>
    <input style="color:blue" type="text" name="speciality" placeholder="Enter the Speciality" required>

     </div>
     <br></br>

     <div>
        <label>Image</label>
        <input  type="file" name="image" placeholder="" required>
    </div>

    <br></br>
    <div>
    <input type="submit" value="save" class="btn btn-outline-danger">
                 
    </div>

</div>
</form>



     @include("admin.adminscript")
</div>
  </body>
</html>


