<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="{{ Request::is('admin') ? 'active' : '' }}">
                <a href="/admin">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            @can('view_categories')
                <li class="{{Request::is('admin/categories*') ? 'active' : ''}}">
                    <a href="{{route('categories.index')}}">
                      <i class="fa fa-list"></i><span>Category</span>
                    </a>
                </li>
            @endcan
            @can('view_sub_categories')
                <li class="{{Request::is('admin/sub-categories*') ? 'active' : ''}}">
                    <a href="{{route('sub-categories.index')}}">
                      <i class="fa fa-list-alt"></i><span>SubCategory</span>
                    </a>
                </li>
            @endcan
            @can('view_products')
                <li class="{{Request::is('admin/products*') ? 'active' : ''}}">
                    <a href="{{route('products.index')}}">
                      <i class="fa fa-shopping-cart"></i><span>Product</span>
                    </a>
                </li>
            @endcan
            @can('view_buyer_questions')
                <li class="{{Request::is('admin/buyer-questions*') ? 'active' : ''}}">
                    <a href="{{route('buyer-questions.index')}}">
                      <i class="fa fa-question-circle"></i><span>Buyer Questions</span>
                    </a>
                </li>
            @endcan
            @can('view_users')
                <li class="{{Request::is('admin/users*') ? 'active' : ''}}">
                    <a href="{{route('users.index')}}">
                      <i class="fa fa-user"></i><span>User</span>
                    </a>
                </li>
            @endcan
            <li class="{{Request::is('admin/contact-us*') ? 'active' : ''}}">
                <a href="{{route('contact-us.edit')}}">
                  <i class="fa fa-phone"></i><span>Contact Us</span>
                </a>
            </li>
            <li class="header">Misc</li>
            @can('view_faqs')
                <li class="{{ Request::is('admin/faqs*') ? 'active' : '' }}">
                    <a href="{{ route('faqs.index') }}">
                        <i class="fa fa-question-circle"></i><span>FAQ</span>
                    </a>
                </li>
            @endcan
            @can('view_cities')
                <li class="{{Request::is('admin/cities*') ? 'active' : ''}}">
                    <a href="{{route('cities.index')}}">
                      <i class="fa fa-map-marker"></i><span>City</span>
                    </a>
                </li>
            @endcan
            @can('view_countries')
                <li class="{{Request::is('admin/countries*') ? 'active' : ''}}">
                    <a href="{{route('countries.index')}}">
                      <i class="fa fa-globe"></i><span>Country</span>
                    </a>
                </li>
            @endcan
            @can('view_roles')
                <li class="{{ Request::is('admin/roles*') ? 'active' : '' }}">
                    <a href="{{ route('roles.index') }}">
                        <i class="fa fa-adn"></i><span>Roles</span>
                    </a>
                </li>
            @endcan
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
