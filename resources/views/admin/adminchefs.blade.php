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

     <div style="position: relative; top: 0px; right: -100px">
       <div class="col-12 grid-margin stretch-card">
          <div class="container card ">
            <div class="card-body">
              <h2 class="card-title ">Input Chefs</h2>

            <form action="{{url('uploadchefs')}}" method="post" enctype="multipart/form-data" class="forms-sample">
               @csrf
    
              <div class="form-group">
                  <label for="name">Name</label>
                  <input class="form-control" type="text" name="name" id="name" placeholder="Enter  a Name" required>
              </div>

              <div class="form-group">
                  <label for="speciality">Speciality</label>
                  <input class="form-control" type="text" name="speciality" id="speciality" placeholder="Enter the Speciality" required>
              </div>

              <div>
                  <label>Image</label>
                  <input class="form-control"  type="file" name="image" placeholder="" required>
              </div>

              <br></br>

              <div>
                  <input type="submit" value="save" class="btn btn-primary">
              </div>

            </form>
         </div>
       </div>
     </div>

     <div>
         <div class="col-lg-12 stretch-card">
            <div class="card">
               <div class="card-body">
                  <h4 class="card-title"> Chefs</h4>
                    <div class="table-responsive">
                      <table class="table table-bordered table-contextual">
             
                 <tr>
                     <th>Chef Name</th>
                     <th>Speciality</th>
                     <th>Image</th>
                     <th>Delete</th>
                     <th>Update</th>
                 </tr>
               
                  @foreach($data as $data)

                 <tr class="table-info">
                     <td>{{$data->name}}</td>
                     <td>{{$data->speciality}}</td>
                     <td><img style="height: 100px; width: 100px;" src="/foodchefsimage/{{$data->image}}" alt=""></td>
                     <td><a href="{{url('/deletefoodchefs',$data->id)}}">Delete</a></td>
                     <td><a href="{{url('/updatechef',$data->id)}}">Update</a></td>
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


