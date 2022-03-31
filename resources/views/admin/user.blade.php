<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
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
         <table class="table table-bordered" style="background-color:white">
             <tr>
                 <th scope="col" style="padding: 30px" >#</th>
                 <th scope="col" style="padding: 30px">Name</th>
                 <th scope="col" style="padding: 30px">Email</th>
                 <th scope="col" style="padding: 30px">Action</th>
             </tr>

             @foreach($data as $data)
             <tr align="center" style="background-color:black">
                 <td>{{$data->id}}</td>
                 <td>{{$data->name}}</td>
                 <td>{{$data->email}} </td>
                 @if($data->usertype=="0")
                 <td> <a href="{{url('/deleteuser',$data->id)}}">Delete</a></td>
                 @else
                 <td> <a>Not Allowed</a></td>
                 @endif
             </tr>
            @endforeach

         </table>
     </div>

</div>
     @include("admin.adminscript")
    
  </body>
</html>


</body>
</html>