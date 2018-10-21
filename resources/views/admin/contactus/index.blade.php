@extends('admin.common.layout')

@section('content2')

     <section class="content-header">
            <h1>
                Comment and Suggestion
                <small>List</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Suggestion of Customers</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tbody><tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                </tr>
                                @if(isset($orders) && count($orders)>0)
                                    @php($i = 1)
                                    @foreach($orders as $product)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $product->name or '' }}</td>
                                    <td>{{ $product->email or '' }}</td>
                                    <td>{{ $product->subject or '' }}</td>
                                    <td>{{ $product->message or '' }}</td>
                                </tr>
                                @endforeach
                                @endif

                                </tbody></table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </section>
        <!-- /.content -->

@endsection