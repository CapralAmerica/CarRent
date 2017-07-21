@extends('layouts.master')
@section('title')
    {{ 'Contact Us' }}
@endsection
@section('content')
    <h4 class="text-center">If you have question please contact us by the form below.<br>
        Sincerely yours CarRent</h4>
    <hr>
    <div class="contact">
    <form action="  " method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="name" class="col-md-4 control-label">Name</label>
            <div class="col-md-6">
                <input type="text" class="form-control" name="name" placeholder="Enter you'r name" value="">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-md-4 control-label">Email</label>
            <div class="col-md-6">
                <input type="text" class="form-control"  name="email" placeholder="Enter you'r email" value="">
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-md-4 control-label">You'r message</label>
            <div class="col-md-6">
                <textarea class="form-control" name="message" rows="3" placeholder="Enter you'r message"></textarea>
            </div>
        </div>
        <button class="btn btn-primary large center-block" type="submit">Submit</button>
    </form>
    </div>
@endsection