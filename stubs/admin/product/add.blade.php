@extends('layouts.admin')

@section('content')
<div class="pcoded-content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Basic Component</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="form-label" for="inputEmail4">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label" for="inputPassword4">Password</label>
                                <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="inputAddress">Address</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="inputAddress2">Address 2</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="inputState">State</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>select</option>
                                        <option>Large select</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="inputState">Image</label>
                                    <input type="file" name="comsoon_image" id="comsoon_image" class="dropify" accept=".png, .jpg, .jpeg, .gif, .svg .mp4">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="inputState">Description</label>
                                    <textarea name="about_us_bottom_2_btm" id="about_us_bottom_2_btm" class="about_us_bottom_2_btm form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn  btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
       CKEDITOR.replace( 'about_us_bottom_2_btm' );
</script>
@endsection