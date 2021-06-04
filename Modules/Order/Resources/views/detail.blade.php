@extends('layouts.admin.app')
@section('admin_content')


<section class="my-5">
    <h3 class="text-center">Product Details</h3>
<hr>
<div class="scrapcar-main-section">
    <div class="container">
<table class="table container" >
<thead>
  <tr>
    <th scope="col">Sl</th>
    <th scope="col">Product Name</th>
    <th scope="col">Product Price</th>
    <th scope="col">Product Url</th>
    <th scope="col">Product Image</th>
    <th scope="col">Quantity</th>
    <th scope="col">Action</th>
  </tr>
</thead>
<tbody>
    @php
        $total_amount = 0;
    @endphp
    @foreach (Modules\Cart\Entities\Cart::where('order_id',$order->id)->get() as $cart)
        <tr>
            <th scope="row">{{$loop->index + 1}}</th>
            <td>{{$cart->product->name}}</td>
            <td>{{$cart->product->price*$cart->quantity}}</td>
            <?php
            $total_amount +=$cart->product->price*$cart->quantity;
            ?>
            <td>{{$cart->product->url}}</td>
            <td>
                <img height="80px" width="80px" src="{{asset($cart->product->image)}}" alt="">
            </td>
            <td>
                <form action="{{url('order/porduct-quantiy',$cart->id)}}" method="POST">
                @csrf
                <input type="text" class="form-control" name="quantity" id="" value="{{$cart->quantity}}">
                <input style="" class="btn btn-sm btn-success" type="submit" name="btn" value="Update" id="">
                </form>
            </td>
            <td>
                <a class="btn btn-sm btn-danger" style="" href="{{url('order/cart-delete',$cart->id)}}">Delete</a>
            </td>
        </tr>
    @endforeach

</tbody>
</table>
<a class="btn btn-info "><strong>Total Amount</strong>: {{$total_amount}} Taka</a>
<a class="btn btn-success" href="{{ url('order/index') }}">Back</a>


<div class="my-5">
    <p>

        <h3>
            @if($order->sendDoc == 1)
            <span>Status Send Source Code: Already Send</span>
            @else
            <h3>Status Send Source Code: Please Send the Source Code this email: {{ $order->email }}</h3>  <br>
            @endif
        </h3>
        <a href="{{ url('order/sendDoc/'.$order->id) }}" class="btn btn-info">Send Source Code</a>
    </p>



</div>
@endsection
