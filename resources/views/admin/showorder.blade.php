<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
  </head>
  <body>
    
      <!-- partial -->
    

      @include('admin.sidebar')


      @include('admin.navbar')

      <div class="container-fluid page-body-wrapper">
        <div class="container" align="center">
      <h1 class="title">
        All Orders
    </h1>
<table>
    <tr style="background-color:gray; margin-top: 20px;">
        <td style="padding: 20px;">Customer Name</td>
        <td style="padding: 20px;" >Phone</td>
        <td style="padding: 20px;">Address</td>
        <td style="padding: 20px;">Product title</td>
        <td style="padding: 20px;">Price</td>
        <td style="padding: 20px;">Quantity</td>
        <td style="padding: 20px;">Status</td>
        <td style="padding: 20px;">Action</td>
    </tr>
@foreach ($order as $orders )
    

    <tr style="background-color:black; margin-top: 20px;">
        <td style="padding: 20px;">{{ $orders->name }}</td>
        <td style="padding: 20px;" >{{ $orders->phone }}</td>
        <td style="padding: 20px;">{{ $orders->address }}</td>
        <td style="padding: 20px;">{{ $orders->product_name }}</td>
        <td style="padding: 20px;">{{ $orders->price }}</td>
        <td style="padding: 20px;">{{ $orders->quantity }}</td>
        <td style="padding: 20px;">{{ $orders->status }}</td>
        <td>
<a class="btn btn-success" href="{{url('updatestatus',$orders->id )}}">Delivered</a>
</td>
    </tr>
    @endforeach
</table>


        </div>
      </div>
       
      @include('admin.script')
        <!-- partial -->
                <!-- partial -->
       
  </body>
</html>
