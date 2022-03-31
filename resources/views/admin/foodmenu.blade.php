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

    
         
         <br></br>
          <div style="position: relative; top: 60px; right: -150px">

     <form action="{{url('uploadfood')}}" method="post" enctype="multipart/form-data">
             
             @csrf
             <div class="mb-3 mt-3">
                 <label for="title" class="form-label">Title</label>
                 <input style="color:blue" type="text" name="title" placeholder="Write a Title" required>
             </div>
             <br></br>
             <div>
                 <label>Price</label>
                 <input style="color:blue" type="number" name="price" placeholder="Price" required>
             </div>
             <br></br>
             <div>
                 <label>Image</label>
                 <input  type="file" name="image" placeholder="" required>
             </div>
             <br></br>
             <div>
                 <label>Description</label>
                 <input style="color:blue" type="text" name="description" placeholder="Write a Description" required>
             </div>
             <br></br>
             <div>
                 <input type="submit" value="save" class="btn btn-outline-danger">
                 
             </div>
         </form>
         <br></br>
         
         <div>
           <table class="table table-bordered" style="background-color:white" >
             
           <tr>
               <th scope="col" style="padding: 30px">Title</th>
               <th scope="col" style="padding: 30px">Price</th>
               <th scope="col" style="padding: 30px">Description</th>
               <th scope="col" style="padding: 30px">Image</th>
               <th scope="col" style="padding: 30px">Delete</th>
               <th scope="col" style="padding: 30px">Update</th>
            </tr>
             
             @foreach($data as $data)
             <tr align="center" style="background-color:black">
                 <td>{{$data->title}}</td>
                 <td>{{$data->price}}</td>
                 <td>{{$data->description}}</td>
                 <td><img style="height: 100px; width: 100px;" src="/foodimage/{{$data->image}}" alt=""></td>
                 <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
                 <td><a href="{{url('/updateview',$data->id)}}">Update</a></td>

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