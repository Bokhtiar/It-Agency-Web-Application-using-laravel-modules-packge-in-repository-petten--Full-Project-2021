@extends('layouts.user.app')
@section('container')

<section class="container my-2">
    <div>
        <p class="text-center h5">Your Choice Software Please Checkout... </p>
    </div>
    <table class="table text-center">
        <thead>
          <tr>
            <th scope="col">Indexing</th>
            <th scope="col">product Title</th>
            <th scope="col">Price</th>
            <th scope="col">Image</th>
            <th scope="col">Quantity</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

            @php
                $total = 0;
            @endphp
        @foreach ($carts as $cart)
        <tr>
            <th scope="row">{{ $loop->index + 1 }}</th>
            <td>{{ $cart->product->name }}</td>
            <td>{{ $cart->product->price * $cart->quantity }}</td>
            <?php
            $total += $cart->product->price * $cart->quantity;
            ?>
            <td>
                <img src="{{ asset($cart->product->image)  }}" height="80px" width="80px" alt="">
            </td>
            <td>
                <form action="{{ url('cart/quantity-store',$cart->id) }}" method="POST" class="form-inline">
                    @csrf
                    <input class="form-control" type="number" class="" name="quantity" value="{{ $cart->quantity }}" id="">
                    <input class="btn btn-info btn-sm" type="submit" name="" value="Submit" id="">
                    <button style="submit" class="btn btn-sm"><i class="fas fa-user-edit"></i></button>
                </form>
            </td>



            <td>
                <a class="btn btn-danger btn-sm" href="{{ url('cart/delete',$cart->id) }}">Remove Item</a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
      <div class="my-5">

        <a class="" href="{{ url('/all-shop') }}">Continue Shopping</a><br><br>
        <span>Total Taka: {{$total}} Tk</span><br><br>
        <a class="btn btn-primary btn-sm" href="{{ url('order/create') }}">Checkout Shopping</a>
      </div>
 </section>
 @endsection
