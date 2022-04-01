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
     <div class="container">
       <h1>Costumer Order</h1>
<form action="{{url('/search')}}" method="get">
@csrf
<input type="text" name="search" style="color:blue;">
<input type="submit" value="search" class="btn btn-outline-success" >

</form>
     <table class="table">     
        
         <tr>
             <th scope="col" style="padding: 30px">#</th>
             <th scope="col" style="padding: 30px">Name</th>
             <th scope="col" style="padding: 30px">Phone</hd>
             <th scope="col" style="padding: 30px">Address</th>
             <th scope="col" style="padding: 30px">Food Name</th>
             <th scope="col" style="padding: 30px">Price</hd>
             <th scope="col" style="padding: 30px">Quantity</th>
             <th scope="col" style="padding: 30px">Total Price</th>
         </tr>
         
@foreach($data as $data)
         <tr align="center" style="background-color:black">
         <th scope="row">{{$data->id}}</th>
             <td >{{$data->name}}</td>
             <td>{{$data->phone}}</td>
             <td>{{$data->address}}</td>
             <td>{{$data->foodname}}</td>
             <td>{{$data->price}}RS</td>
             <td>{{$data->quantity}}</td>
             <td>{{$data->price * $data->quantity}}</td>
         </tr>
         @endforeach
     </table>
     
</div>
     </div>
     
     @include("admin.adminscript")

  </body>
</html>