<!--sidebar start-->
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

            <p class="centered"><a href="{{route('admin.index')}}"><img src="{{asset('assets')}}/admin/assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
            <h5 class="centered">{{Auth::user()->name}}</h5>

            <li class="nav-item">
                <a href="{{route('admin.index')}}" class="nav-link">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.category.index')}}" class="nav-link">
                    <i class="fa fa-cogs"></i>
                    <span>Categories</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.book.index')}}" class="nav-link">
                    <i class="fa fa-cogs"></i>
                    <span>Books</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.settings')}}" class="nav-link">
                    <i class="fa fa-cogs"></i>
                    <span>Settings</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.user.index')}}" class="nav-link">
                    <i class="fa fa-cogs"></i>
                    <span>User</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="admin/borrow;" class="nav-link" >
                    <i class="fa fa-cogs"></i>
                    <span>Borrow</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.comment.index')}}" class="nav-link" >
                    <i class="fa fa-cogs"></i>
                    <span>Comments</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.faq.index')}}" class="nav-link" >
                    <i class="fa fa-cogs"></i>
                    <span>Faq</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.message.index')}}" class="nav-link">
                    <i class="fa fa-cogs"></i>
                    <span>Message</span>
                </a>
            </li>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
