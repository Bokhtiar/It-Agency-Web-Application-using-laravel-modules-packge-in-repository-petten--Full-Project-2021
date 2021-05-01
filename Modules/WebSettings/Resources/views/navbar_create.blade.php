@extends('layouts.admin.app')
@section('admin_content')

<section class="container">
    <h2 class="text-center">Footer and Header Menu Create Daynamic</h2><hr>
    <form action="{{url('navbar/store')}}" method="POST">
        @csrf
    <div>
        <label for="">Select Position Position</label>
        <select class="form-control" name="position" required id="">
            <option value="1">Navbar</option>
            <option value="2">Footer</option>
        </select>
    </div>
    <div>
        <label for="">Enter Menus Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter Menus Name" required id="">
    </div>


    <div class="row">
        <div class="col-md-6">
            <h2>Navbar Menu Create Form</h2>
            <div>
                <label for="">Navbar Indexing Create</label>
                <input type="number" class="form-control"  name="sl" placeholder="Enter Your Header Indexing" id="">
            </div>
        </div>


        <div class="col-md-6">
            <h2>Footer Menu Create Form</h2>
            <div>
                <label for="">Footer colum index</label>
                <input type="number" class="form-control" name="footerSl" placeholder="Enter Your Footer Indexing" id="">
            </div>

            <div>
                <label for="">Footer colum under menu indexing</label>
                <input type="number" class="form-control" name="footerCulUnderMenu" placeholder="Enter Your Footer Culome under menu Indexing" id="">
            </div>
        </div>
    </div>
    <div>
        <label for="">Menu Description</label>
        <textarea class="form-control" name="description" id="" cols="30" rows="10" required></textarea>
    </div>
        <input type="submit" class="btn btn-success" name="" value="Create Navbar Menus" id="">
    </form>
</section>

@endsection
