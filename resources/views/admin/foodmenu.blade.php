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
            <h2 class="card-title ">Input Food Menu </h2>
                <form action="{{url('uploadfood')}}" method="post" enctype="multipart/form-data" class="forms-sample">
                    @csrf 

                  <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                  </div>

                  <div class="form-group">
                      <label for="price">Price</label>
                      <input type="number" class="form-control" name="price" id="price" placeholder="Price">
                  </div>

                  <div class="form-group">
                      <label for="description">Description</label>
                      <input type="text" class="form-control" name="description" id="description" placeholder="Description">
                  </div>
                      
                  <div>
                       <label >Image</label>
                       <input class="form-control"  type="file" name="image" placeholder="" required>
                  </div>

                  <br></br>

                  <div>
                       <input  type="submit" value="save" class="btn btn-primary">
                  </div>

                </form>

            </div>
        </div>
      </div>
   
      <div>
         <div class="col-lg-12 stretch-card">
            <div class="card">
               <div class="card-body">
                  <h4 class="card-title">Food Menu</h4>
                    <div class="table-responsive">
                      <table class="table table-bordered table-contextual">
                          <tr>
                            <th> # </th>
                            <th> Title </th>
                            <th> Price </th>
                            <th> Description </th>
                            <th> Image </th>
                            <th> Delete </th>
                            <th> Update </th>
                          </tr>
                          
                        @foreach($data as $data)
                          <tr class="table-info">
                            <td > {{$data->id}} </td>
                            <td >{{$data->title}}</td>
                            <td >{{$data->price}}</td>
                            <td >{{$data->description}}</td>
                            <td><img style="height: 100px; width: 100px;" src="/foodimage/{{$data->image}}" alt=""></td>
                            <td ><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
                            <td ><a href="{{url('/updateview',$data->id)}}">Update</a></td>
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