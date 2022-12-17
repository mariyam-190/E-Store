<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
  </head>
  <body>
    
      <!-- partial -->
    

      @include('admin.sidebar')


      @include('admin.navbar')

      <div style="padding-bottom:30px;" class="container-fluid page-body-wrapper">
        <div class="container" align="center">
            @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">X</button>
                {{ session()->get('message') }}
            </div>
            @endif
            <table>
<tr style="background-color:grey">
    <td style="padding:20px;">Title</td>
    <td style="padding:20px;">Description</td>
    <td style="padding:20px;">Quantity</td>
    <td style="padding:20px;">Price</td>
    <td style="padding:20px;">Image</td>
    <td style="padding:20px;">Update</td>
    <td style="padding:20px;">Delete</td>
</tr>

@foreach($data as $product)
<tr style="background-color:black; align-items:center;">
    <td style="padding:20px;">{{ $product->title }}</td>
    <td style="padding:20px;">{{ $product->description }}</td>
    <td style="padding:20px;">{{ $product->quantity }}</td>
    <td style="padding:20px;">{{ $product->price }}</td>
    <td height="100" width="100" style="padding:20px;"><img src="/productimage/{{ $product->image }}"></td>
<td>
    <a class="btn btn-primary" href="{{ url('updateview' , $product->id) }}">Update</a>
</td>

<td>
    <a class="btn btn-danger" onclick="return confirm('Are You Sure?')" href="{{ url('deleteproduct' , $product->id) }}">Delete</a>
</td>

</tr>
@endforeach

            </table>
       
      @include('admin.script')
        <!-- partial -->
                <!-- partial -->
       
  </body>
</html>
