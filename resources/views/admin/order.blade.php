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
    <div style="position: relative; top: 0px; right: -10px">
     <div class="col-12 grid-margin stretch-card">
        <div class="container card ">
          <div class="card-body">
            <h2 class="card-title ">Search</h2>
                <form action="{{url('/search')}}" method="get" class="forms-sample">
                @csrf
                    <input type="text" class="form-control" style="width:300px;" id="search" name="search" placeholder="Search">
                    
                </form>
          </div>
        </div>
      </div>

      <div>
         <div class="col-lg-12 stretch-card">
            <div class="card">
               <div class="card-body">
                  <h4 class="card-title">Costumer Oders</h4>
                    <div class="table-responsive">
                      <table class="table table-bordered table-contextual">    
        
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Phone</hd>
                            <th>Address</th>
                            <th>Food Name</th>
                            <th>Price</hd>
                            <th>Quantity</th>
                            <th>Total Price</th>
                        </tr>
         
                         @foreach($data as $data)

                         <tr class="table-info">
                             <td >{{$data->id}}</td>
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
                </div>
              </div>
            </div>
         </div>
@include("admin.adminscript")
</div>
</body>
</html>