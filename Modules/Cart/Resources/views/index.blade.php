@extends('layouts.user.app')
@section('container')

<section class="container my-2">
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
                {{ $cart->quantity }}
            </td>



            <td>
                <a class="btn btn-danger btn-sm" href="{{ url('cart/delete',$cart->id) }}">Remove Item</a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
 </section>
 @endsection
