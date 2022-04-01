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
@csrf
    
   
    <div>

    <label>Name</label>
    <input style="color:blue" type="text" name="name" placeholder="Enter  a Name" required>

     </div>
     <br></br>
     <div>
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

</form>
<div>

<table bgcolor="black" >
             
             <tr>
                 <th style="padding: 30px">Chef Name</th>
                 <th style="padding: 30px">Speciality</th>
                 <th style="padding: 30px">Image</th>
                 <th style="padding: 30px">Action</th>
                 <th style="padding: 30px">Action2</th>
              </tr>
               
               @foreach($data as $data)
               <tr align="center">
                   <td>{{$data->name}}</td>
                   <td>{{$data->speciality}}</td>
                   <td><img style="height: 100px; width: 100px;" src="/foodchefsimage/{{$data->image}}" alt=""></td>
                   <td><a href="{{url('/deletefoodchefs',$data->id)}}">Delete</a></td>
                   <td><a href="{{url('/updatechef',$data->id)}}">Update</a></td>
  
               </tr>
              @endforeach
            
             </table>
             <br></br>
             </div>
            
      </div>

@include("admin.adminscript")
</div>
  </body>
</html>


