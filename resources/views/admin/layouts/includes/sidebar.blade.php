  <!-- Main Sidebar Container -->
  <aside class="main-sidebar elevation-4 sidebar-light-info">
    <!-- Brand Logo -->
    <a href="{{url('/')}}/admin" class="brand-link">
      <!-- <img src="{{url('/')}}/{{$info->logo}}"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8;max-width:100%"> -->
      <span class="brand-text font-weight-light">{{$info->name}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
       <!-- Sidebar user (optional) -->
       <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('/')}}/{{Auth::user()->avatar?Auth::user()->avatar:'public/site/assets/images/user.png'}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block" >{{Auth::user()->name}}</a>
          <a onclick="$('#logout').submit()" style="cursor:pointer">@lang('site.logout')</a>
          <form method="post" id="logout" action="{{route('logout')}}">
                    @csrf
                </form>

        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          @permission(['access_roles_permissions','browse_users'])
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user-cog"></i>
                <p>
                  @lang('site.users')
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
            
                @permission('browse_users')
                    <li class="nav-item">
                      <a href="{{url('/')}}/admin/users" class="nav-link">
                        <i class="fas fa-users nav-icon"></i>
                        <p>@lang('site.users')</p>
                      </a>
                    </li>
                @endpermission
                 @permission('access_roles_permissions')
                    <li class="nav-item">
                      <a href="{{url('/')}}/admin/roles" class="nav-link">
                        <i class="fas fa-genderless nav-icon"></i>
                        <p>@lang('site.roles')</p>
                      </a>
                    </li>
                @endpermission
                
              </ul>
            </li>
          @endpermission
       

           
       

           @permission('browse_areas')
              <li class="nav-item">
                <a href="{{url('/')}}/admin/areas" class="nav-link">
                <i class="fas fa-map"></i>
                 <p>@lang('site.areas')</p>
                </a>
              </li>
           @endpermission

           @permission('browse_categories')
              <li class="nav-item">
                <a href="{{url('/')}}/admin/categories" class="nav-link">
                <i class="fas fa-layer-group"></i>
                 <p>@lang('site.categories')</p>
                </a>
              </li>
           @endpermission

       
           @permission('browse_posts')
              <li class="nav-item">
                <a href="{{url('/')}}/admin/posts" class="nav-link">
                <i class="fas fa-paste"></i>
                 <p>@lang('site.posts')</p>
                </a>
              </li>
           @endpermission
           @permission('browse_contact')
              <li class="nav-item">
                <a href="{{url('/')}}/admin/contact" class="nav-link">
                <i class="fas fa-phone"></i>
                <p>@lang('site.contact_us')</p>
                @if($contact>0)
                <span class="badge badge-info right">{{$contact}}</span>
                @endif
                </a>
              </li>
           @endpermission
           @permission('browse_news_letter')
              <li class="nav-item">
                <a href="{{url('/')}}/admin/news_letter" class="nav-link">
                <i class="fa fa-envelope"></i>
                <p>@lang('site.newsLetter')</p>
                
                </a>
              </li>
           @endpermission
           @permission('browse_common_questions')
              <li class="nav-item">
                <a href="{{url('/')}}/admin/common_questions" class="nav-link">
                <i class="fas fa-question"></i>
                <p>@lang('site.common_questions')</p>
               
                </a>
              </li>
           @endpermission
       
         
           @permission('site_setting')
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-cogs"></i>
                <p>
                  @lang('site.site_setting')
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                 <li class="nav-item">
                  <a href="{{url('/')}}/admin/setting/info" class="nav-link">
                  <i class="fas fa-cog nav-icon"></i>
                   <p>@lang('site.site_info')</p>
                  </a>
                </li> 
                <li class="nav-item">
                  <a href="{{url('/')}}/admin/setting/about" class="nav-link">
                  <i class="fas fa-cog nav-icon"></i>
                   <p>@lang('site.about_us')</p>
                  </a>
                </li>    
                <!-- <li class="nav-item">
                  <a href="{{url('/')}}/admin/setting/pages" class="nav-link">
                  <i class="fas fa-paste nav-icon"></i>
                   <p>@lang('site.pages')</p>
                  </a>
                </li> -->
                <li class="nav-item">
                  <a href="{{url('/')}}/admin/setting/slidear" class="nav-link">
                  <i class="fas fa-images nav-icon"></i>
                   <p>@lang('site.gallery')</p>
                  </a>
                </li>           
                <!-- <li class="nav-item">
                  <a href="{{url('/')}}/admin/setting/breadcrumb" class="nav-link">
                    <i class="fas fa-photo-video nav-icon"></i>
                    <p>@lang('site.breadcrumb')</p>
                  </a>
                </li> -->
              </ul>
            </li>
          @endpermission

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
