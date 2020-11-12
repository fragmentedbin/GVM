@extends('layout/templateMaster')
@section('content')
<div class="container-content">
    <div class="wrapper-content">
        <div class="container">
            <form class="" action="" method="POST" enctype="multipart/form-data">
                <div class="banner-c">
                    <div class="d-flex justify-content-center" style="background: url('/img/form/form-sony-warner.png')no-repeat center center;">
                        <div class="jumbotron-fluid jumbotron-c"></div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="first-name">First Name</label>
                        <input type="text" id="first-name" class="form-control form-control-lg" placeholder="First name">
                    </div>
                    <div class="col">
                        <label for="last-name">Last Name</label>
                        <input type="text" id="last-name" class="form-control form-control-lg" placeholder="Last name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control form-control-lg" id="inputEmail4" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control form-control-lg" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Address 2</label>
                    <input type="text" class="form-control form-control-lg" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control form-control-lg" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control form-control-lg">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control form-control-lg" id="inputZip">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
