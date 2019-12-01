<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="{{ Auth::user()->nama }}">
      </div>
      <div class="pull-left info">
        <p>Administrator</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      @foreach (App\Menu::whereNull('parent')->with('sub')->get() as $_menu)
      @if(count($_menu->sub)>0)
      <li class="active treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>{{$_menu->nama}}</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
          <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
        </ul>
      </li>
      @else
      <li @if($aktif == $_menu->route) class="active" @endif>
        <a href="{{ route($_menu->route) }}">
          <i class="{{ $_menu->ikon }}"></i> <span>{{ $_menu->nama }}</span>
        </a>
      </li>
      @endif
      @endforeach
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>