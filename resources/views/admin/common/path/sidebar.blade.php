
<li class="treeview active">
    <a href="{{ route('order.index') }}">
        <i class="fa fa-dashboard"></i> <span>Menu</span>
    </a>
</li>
<li class="treeview">
    <a href="#">
        <i class="fa fa-dashboard"></i> <span>Product</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li><a href="{{ route('product.create') }}"><i class="fa fa-circle-o"></i> Product Add</a></li>
        <li><a href="{{ route('product.index') }}"><i class="fa fa-circle-o"></i> Product List</a></li>
    </ul>
</li>
<li class="active">
    <a href="{{ route('order.index') }}">
        <i class="fa fa-dashboard"></i> <span>Order List</span>
    </a>
</li>
<li class="active">
    <a href="{{ route('comment.index') }}">
        <i class="fa fa-dashboard"></i> <span>Comment</span>
    </a>
</li>