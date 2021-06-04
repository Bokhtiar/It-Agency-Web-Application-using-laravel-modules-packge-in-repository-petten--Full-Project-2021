@extends('layouts.user.app')
@section('container')

    <div class="my-3 container">
        <h3 class="text-center">Please Create Your Order</h3>
        <hr>
        <form action="{{ url('order/store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6 col-sm-12 col-lg-6">
                    <h4>Personal Info...</h4>
                    <div class="form-group">
                        <label for="">Enter Your Name <span class="text-danger">*</span> </label>
                        <input type="text" class="form-control" value="{{Auth::user()->name}}" name="name" id="" placeholder="write here name">
                    </div>
                    <div class="form-group">
                        <label for="">Enter Your Phone <span class="text-danger">*</span> </label>
                        <input type="text" class="form-control" name="phone" id="" placeholder="write here phone number">
                    </div>
                    <div class="form-group">
                        <label for="">Enter Your Email <span class="text-danger">*</span> </label>
                        <input type="text" class="form-control" value="{{Auth::user()->email}}" name="email" id="" placeholder="write here email">
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 col-lg-6">
                    <h4>Payment Section</h4>
                    <div class="form-group">

                        <span class="btn btn-info">Islami Bank</span>


                        <div id="islamiBank" style=" color:white; display:none;background-color:rgb(74, 84, 88);">
                            <p>[NB]: If You want to payment Islami bank please send this account number 2837292372323 and
                                give transection id</p>
                            <label for="">Enter Your Acount Number</label>
                            <input type="text" name="islamibank" class="form-control"
                                placeholder="Enter Your Account Number" id="">
                            <label for="">Enter Your Transection Code</label>
                            <input type="text" name="islamibank_transection_id" placeholder="Enter Your Transection code"
                                class="form-control" id="">
                        </div><br>
                    </div>

                    <div class="form-group">
                        <p id="BRAC_Bank_Limited" class="btn btn-info">BRAC Bank Limited.</p>


                        <div id="brakband" style=" color:white; display:none;background-color:rgb(74, 85, 90);">
                            <p>[NB]: If You want to payment BRAC Bank Limited please send this account number 2837292372323 and
                                give transection id</p>
                            <label for="">Enter Your Acount Number</label>
                            <input type="text" name="brakbank" class="form-control"
                                placeholder="Enter Your Account Number" id="">
                            <label for="">Enter Your Transection Code</label>
                            <input type="text" name="brakbank_transection_id" placeholder="Enter Your Transection code"
                                class="form-control" id="">
                        </div><br>
                    </div>
                </div>

            </div>
            <div class="text-center">
                <input type="submit" name="btn"  value="Please Order" class="btn btn-info" id="">
            </div>
        </form>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("span").click(function() {
                $("#islamiBank").fadeToggle(3000);
            });
        });

        $(document).ready(function() {
            $("#BRAC_Bank_Limited").click(function() {
                $("#brakband").fadeToggle(3000);
            });
        });


    </script>

@endsection
