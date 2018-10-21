@extends('admin.common.layout')

@section('content')

     <section class="content-header">
            <h1>
                Add BPC Product
                <small>Entry</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Add Pannel</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @include('admin.product.common.form')

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->

                </div>
                <!--/.col (left) -->
            </div>

        </section>
        <!-- /.content -->

@endsection