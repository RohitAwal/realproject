<div class="box-body">
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" value="{{ $product->name or '' }}" name="name" id="exampleInputEmail1" placeholder="Name">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Price</label>
        <input type="number" class="form-control" value="{{ $product->price or '' }}" name="price" id="exampleInputPassword1" placeholder="Price">
    </div>
    <div class="form-group">
        <label for="exampleInputFile">File input</label><br>
        <label for="exampleInputFile" class="btn btn-sm btn-primary"><i class="fa fa-image"></i> Choose Image</label>
        <input type="file" name="image" style="display: none;" id="exampleInputFile">

    </div>
    @if(isset($product->image) && $product->image != null)
    <div class="form-group">
        <img src="{{ asset('image/image/'.$product->image) }}" width="200px;" alt="">
    </div>
        @endif
</div>
<!-- /.box-body -->