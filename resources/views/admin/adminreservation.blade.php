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

     <div style="position: relative; top: 0px; right: -30px">

     <div>
         <div class="col-lg-12 stretch-card">
            <div class="card">
               <div class="card-body">
                  <h2 class="card-title">Reservation</h2>
                    <div class="table-responsive">
                      <table class="table table-bordered table-contextual">
             
                        <tr>
                          <th >Name</th>
                          <th >Email</th>
                          <th >Phone</th>
                          <th >Guests</th>
                          <th >Date</th>
                          <th >Time</th>
                          <th >Message</th>
                        </tr>

                       @foreach($data as $data)

                         <tr class="table-info">
                             <td>{{$data->name}}</td>
                             <td>{{$data->email}}</td>
                             <td>{{$data->phone}}</td>
                             <td>{{$data->guest}}</td>
                             <td>{{$data->date}}</td>
                             <td>{{$data->time}}</td>
                             <td>{{$data->message}}</td>
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