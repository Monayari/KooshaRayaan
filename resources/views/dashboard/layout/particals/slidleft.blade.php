<aside id="leftsidebar" class="sidebar">
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li>
                <div class="sidebar-profile clearfix">
                    <div class="profile-img">
                        <img src="{{asset('/images/dashboard/usrbig.jpg')}}" alt="profile">
                    </div>
                    <div class="profile-info">
                        <h3>آرش خادملو</h3>
                        <p>خوش آمدید !</p>
                    </div>
                </div>
            </li>
            <li class="header"> اصلی</li>
            <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i class="menu-icon ti-home"></i>
                    <span>خانه</span>
                </a>
                <ul class="ml-menu">

                    <li>
                        <a href="{{route('dashboard')}}">داشبورد </a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i class="menu-icon ti-shopping-cart-full"></i>
                    <span>فروشگاه</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="{{route('products')}}">محصولات</a>
                    </li>
                    <li>
                        <a href="{{route('products-detail')}}">جزئیات محصول</a>
                    </li>

                </ul>
            </li>

            <li class="active">
                <a href="{{route('chat')}}">
                    <i class="menu-icon ti-comment"></i>
                    <span>چت</span>
                </a>

            <li>
                <a href="{{route('portfolio')}}">
                    <i class="menu-icon ti-briefcase"></i>
                    <span>نمونه کارها</span>
                </a>
            </li>
            <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i class="menu-icon ti-user"></i>
                    <span>مدیریت کاربران</span>
                </a>
                <ul class="ml-menu">
                    @can('ismodir')
                    <li>
                        <a href="{{route('architects.list')}}">معمار</a>
                    </li>

                    <li>
                        <a href="{{route('users.list')}}">کاربر</a>
                    </li>


                    <li>
                        <a href="{{route('admins.list')}}">ادمین</a>
                    </li>


                    @endcan

                    @can('isadmin')
                    <li>
                        <a href="{{route('architects.list')}}">معمار</a>
                    </li>

                    <li>
                        <a href="{{route('users.list')}}">کاربر</a>
                    </li>
                    @endcan

                    <!-- @can('isuser')
                    <li>
                        <a href="{{route('user.index')}}">کاربر</a>
                    </li>
                    @endcan

                    @can('isarchitect')
                    <li>
                        <a href="{{route('user.index')}}">معمار</a>
                    </li>
                    @endcan -->

                </ul>
            </li>

            <li>

                <a href="{{route('profile.index')}}">
                    <span>پروفایل</span>
                    <i class="menu-icon ti-receipt"></i>
                </a>
            </li>



        </ul>
    </div>
    <!-- #Menu -->
</aside>
