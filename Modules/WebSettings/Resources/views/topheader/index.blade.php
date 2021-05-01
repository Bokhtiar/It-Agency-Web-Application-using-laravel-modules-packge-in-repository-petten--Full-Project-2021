@extends('layouts.admin.app')
@section('admin_content')


    <h2 class="text-center"> Top Header Setting</h2> <hr>
        <form action="{{url('topheader/store/'.$edit->id)}}" method="POST">
            @csrf
            <section class="row">
                <div class="col-md-6">
                    <h3 class="text-center">Company Info</h3> <hr>
                    <div class="form-gorup">
                        <label for=""><strong>Enter Compnay Name</strong></label>
                        <input type="text" class="form-control" value="{{$edit->company_name}}" name="company_name" id="" placeholder="Enter Display Email">
                    </div>
                    <div class="form-gorup">
                        <label for=""><strong>Enter Compnay Address</strong></label>
                        <input type="text" class="form-control" value="{{$edit->company_address}}" name="company_address" id="" placeholder="Enter Display phone Number">
                    </div>

                    <h3 class="text-center">Contact Info</h3> <hr>
                    <div class="form-gorup">
                        <label for=""><strong>Enter Display Email</strong></label>
                        <input type="email" class="form-control" name="email" id="" value="{{$edit->email}}" placeholder="Enter Display Email">
                    </div>
                    <div class="form-gorup">
                        <label for=""><strong>Enter Display Phone Number</strong></label>
                        <input type="number" class="form-control" name="phone" id="" value="{{$edit->phone}}" placeholder="Enter Display phone Number">
                    </div>
                </div><!--contact list end-->
                <div class="col-md-6">
                    <h3 class="text-center">Social Info</h3> <hr>
                    <div class="form-gorup">
                        <label for=""><strong>Enter Twitter Link</strong></label>
                        <input type="text" class="form-control" name="twitter" id="" value="{{$edit->twitter}}" placeholder="Enter Twitter Link">
                    </div>

                    <div class="form-gorup">
                        <label for=""><strong>Enter Facebook Link</strong></label>
                        <input type="text" class="form-control" name="facebook" id="" value="{{$edit->facebook}}" placeholder="Enter Facebook Link">
                    </div>

                    <div class="form-gorup">
                        <label for=""><strong>Enter Instagram Link</strong></label>
                        <input type="text" class="form-control" name="instagram" id="" value="{{$edit->instagram}}" placeholder="Enter Instagram Link">
                    </div>

                    <div class="form-gorup">
                        <label for=""><strong>Enter Skype Link</strong></label>
                        <input type="text" class="form-control" name="skype" id="" value="{{$edit->skype}}" placeholder="Enter Skype Link">
                    </div>

                    <div class="form-gorup">
                        <label for=""><strong>Enter Linkdin Link</strong></label>
                        <input type="text" class="form-control" name="linkdin" id="" value="{{$edit->linkdin}}" placeholder="Enter Linkdin Link">
                    </div>
                </div><!--social link list end-->
            </section>
            <div>
                <input type="submit" class=" text-center btn btn-success" name="btn" value="Submit" id="">
            </div>
        </form>
<hr>


@endsection
