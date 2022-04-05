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
<div class="container-scroller content-wrapper">
     @include("admin.navbar")

     <div style="position: relative; top: 0px; right: -150px">
        <div class="col-lg-12 stretch-card">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Users</h2>
                <div class="table-responsive">
        <table class="table table-bordered table-contextual">
             <tr>
                 <th scope="col" style="padding: 30px" >#</th>
                 <th scope="col" style="padding: 30px">Name</th>
                 <th scope="col" style="padding: 30px">Email</th>
                 <th scope="col" style="padding: 30px">Action</th>
             </tr>

             @foreach($data as $data)
             <tr class="table-info">
                 <td class="table-warning">{{$data->id}}</td>
                 <td class="table-success">{{$data->name}}</td>
                 <td>{{$data->email}} </td>
                 @if($data->usertype=="0")
                 <td class="table-danger"> <a href="{{url('/deleteuser',$data->id)}}">Delete</a></td>
                 @else
                 <td> <a>Not Allowed</a></td>
                 @endif
             </tr>
            @endforeach
        </table>
     </div>
  </div>
</div>
</div>
</div>


     @include("admin.adminscript")
</div>
  </body>
</html>


</body>
</html>