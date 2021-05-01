<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>


    <section class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{url('social/store/'.$social->id)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for=""><strong>Display Phone Number</strong></label>
                    <input type="number" class="form-control" name="phone"  value="{{$social? $social->phone: ''}}" id="">
                </div><!--phone-->
                <div class="form-group">
                    <label for=""><strong>Display Email Address</strong></label>
                    <input type="email" class="form-control" name="email"  value="{{$social? $social->email: ''}}" id="">
                </div><!--email-->
                <div class="form-group">
                    <label for=""><strong>Facebook Link</strong></label>
                    <input type="link" class="form-control" name="facebook" value="{{$social? $social->facebook: ''}}"  id="">
                </div><!--facebok-->
                <div class="form-group">
                    <label for=""><strong>Twitter Link</strong></label>
                    <input type="link" class="form-control" name="twitter" value="{{$social? $social->twitter: ''}}" id="">
                </div><!--twitter-->
                <div class="form-group">
                    <label for=""><strong>Linkdin Link</strong></label>
                    <input type="link" class="form-control" name="linkdin" value="{{$social? $social->linkdin: ''}}" id="">
                </div><!--linkdin-->
                <div class="form-group">
                    <label for=""><strong>Google+</strong></label>
                    <input type="link" class="form-control" name="google" value="{{$social? $social->google: ''}}" id="">
                </div><!--google-->
                <div class="form-group">
                    <label for=""><strong>instagram</strong></label>
                    <input type="link" class="form-control" name="instagram" value="{{$social? $social->instagram: ''}}" id="">
                </div><!--instagram-->
                <input type="submit" class="btn btn-info text-light" name="btn" value="Submit" id="">
            </form>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


  </body>
</html>
