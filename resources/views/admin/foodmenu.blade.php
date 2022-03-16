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
   <div class="container-fluid page-body-wrapper">
    <div class="" align="center">
      <h1 class="title">Add product</h1>

 @if(session()->has('message')) 

<div class="alert alert-success">
<button type="button" class="close"  data-dismiss="alert">X</button>
{{session()->get('message')}}
</div>

@endif
     <div style="position: relative; top: 60px; right: -150px">

     <form action="{{url('uploadfood')}}" method="post" enctype="multipart/form-data">
             
             @csrf
             <div>
                 <label>Title</label>
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
                 <input style="color:blue" type="file" name="image" placeholder="" required>
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
           <table bgcolor="black">
             <tr>
               <th style="padding: 30px">Food Name</th>
               <th style="padding: 30px">Price</th>
               <th style="padding: 30px">Description</th>
               <th style="padding: 30px">Image</th>
             </tr>
           </table>
         </div>
</div>

     </div>
     @include("admin.adminscript")
</div>
  </body>
</html>