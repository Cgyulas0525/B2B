@if (md5(myUser::user()->megjegyzes) != myUser::user()->password )
    <li class="nav-item">
        <a href="{{ route('dIndex') }}"
           class="nav-link {{ (Request::is('dIndex*') || Request::is('login*')) ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p> Vezérlő</p>
        </a>
    </li>

    @if ( myUser::user()->rendszergazda === 0 )

{{--        <li class="nav-item">--}}
{{--            <a href="{{ route('customerOrders.create') }}"--}}
{{--               class="nav-link">--}}
{{--            </a>--}}
{{--        </li>--}}
        <li class="nav-item">
            <a href="{{ route('editShoppingCart') }}"
               class="nav-link {{ Request::is('editShoppingCart*') ? 'active' : '' }}">
                <i class="fas fa-cart-plus"></i>
                <p> Új Kosár</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('shoppingCarts.index') }}"
               class="nav-link {{ Request::is('shoppingCarts*') ? 'active' : '' }}">
                <i class="fas fa-shopping-cart"></i>
                <p> Kosár</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('customerOrders.index') }}"
               class="nav-link {{ Request::is('customerOrders*') ? 'active' : '' }}">
                <i class="fas fa-cart-arrow-down"></i>
                <p> Megrendelések</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('profil', myUser::user()->id) }}"
               class="nav-link {{ Request::is('profil*') ? 'active' : '' }}">
                <i class="fas fa-user-cog"></i>
                <p> Profil</p>
            </a>
        </li>
    @endif

    @if ( myUser::user()->rendszergazda > 0 )
        <li class="nav-item">
            <a href="{{ route('B2BCustomerUserIndex') }}"
               class="nav-link {{ Request::is('B2BCustomerUserIndex') ? 'active' : '' }}">
                <i class="fas fa-people-arrows"></i>
                <p> B2B felhasználók</p>
            </a>
        </li>
        @if ( myUser::user()->rendszergazda === 2 )
            <li class="nav-item">
                <a href="{{ route('B2BUserIndex') }}"
                   class="nav-link {{ Request::is('B2BUserIndex*') ? 'active' : '' }}">
                    <i class="fas fa-user-tie"></i>
                    <p> Belső felhasználók</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('logItems.index') }}"
                    class="nav-link {{ Request::is('logItems*') ? 'active' : '' }}">
                    <i class="fas fa-database"></i>
                    <p> Log adatok</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('settingIndex') }}"
                    class="nav-link {{ Request::is('settingIndex*') ? 'active' : '' }}">
                    <i class="fas fa-user-cog"></i>
                    <p> Beállítások</p>
                </a>
            </li>
            <li class="nav-item" id="xmlImport">
                <a href="{{ route('XMLImport') }}"
                   class="nav-link">
                    <i class="nav-icon fas fa-file-import"></i>
                    <p>XML Import</p>
                </a>
            </li>
        @endif
    @endif
@endif

{{--<li class="nav-item">--}}
{{--    <a href="{{ route('shoppingCartDetails.index') }}"--}}
{{--       class="nav-link {{ Request::is('shoppingCartDetails*') ? 'active' : '' }}">--}}
{{--        <p>Shopping Cart Details</p>--}}
{{--    </a>--}}
{{--</li>--}}
