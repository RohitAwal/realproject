@extends('layout')

@section('content')

    <div class="container" style="min-height: 500px;">
        <div class="row">
            <div class="col-md-12">
                <div class="well well-sm">
                    <form method="post" action="{{ url('send/email') }}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="font-size: 18px;" for="name">
                                        Name</label>
                                    <input style="font-size: 16px;" type="text" class="form-control" id="name" name="name" placeholder="Enter name" required="required" />
                                </div>
                                <div class="form-group">
                                    <label style="font-size: 18px;" for="email">
                                        Email Address</label>
                                    <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                        <input style="font-size: 16px;" type="email" class="form-control" id="email" name="email" placeholder="Enter email" required="required" /></div>
                                </div>
                                <div class="form-group">
                                    <label style="font-size: 18px;" for="name">
                                        Name</label>
                                    <input style="font-size: 16px;" type="text" class="form-control" id="name" name="subject" placeholder="Subject" required="required" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label style="font-size: 18px;" for="name">
                                        Message</label>
                                    <textarea style="font-size: 16px;" name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                              placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" style="font-size: 16px;" class="btn btn-primary pull-right" id="btnContactUs">
                                    Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="contact">

    </div>

@endsection
