@if (md5(myUser::user()->megjegyzes) != myUser::user()->password )
    <li class="nav-item">
        <a href="{{ route('dIndex') }}"
           class="nav-link {{ (Request::is('dIndex*') || Request::is('login*')) ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p> {{ \App\Classes\langClass::trans('Vezérlő') }}</p>
        </a>
    </li>

    @if ( myUser::user()->rendszergazda === 0 )

{{--        <li class="nav-item">--}}
{{--            <a href="{{ route('customerOrders.create') }}"--}}
{{--               class="nav-link">--}}
{{--            </a>--}}
{{--        </li>--}}
        <li class="nav-item">
            <a href="{{ route('customerContactFavoriteProducts.index') }}"
               class="nav-link {{ Request::is('customerContactFavoriteProducts*') ? 'active' : '' }}">
                <i class="fas fa-heart"></i>
                <p>{{ \App\Classes\langClass::trans('Kedvenc termékek') }} ({{ \App\Models\CustomerContactFavoriteProduct::count() }}) </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('editShoppingCart') }}"
               class="nav-link {{ Request::is('editShoppingCart*') ? 'active' : '' }}">
                <i class="fas fa-cart-plus"></i>
                <p> {{ \App\Classes\langClass::trans('Új Kosár') }}</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('shoppingCarts.index') }}"
               class="nav-link {{ Request::is('shoppingCarts*') ? 'active' : '' }}">
                <i class="fas fa-shopping-cart"></i>
                <p> {{ \App\Classes\langClass::trans('Kosár') }}</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('customerOrders.index') }}"
               class="nav-link {{ Request::is('customerOrders*') ? 'active' : '' }}">
                <i class="fas fa-cart-arrow-down"></i>
                <p> {{ \App\Classes\langClass::trans('Megrendelések') }}</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('profil', myUser::user()->id) }}"
               class="nav-link {{ Request::is('profil*') ? 'active' : '' }}">
                <i class="fas fa-user-cog"></i>
                <p> {{ \App\Classes\langClass::trans('Profil') }}</p>
            </a>
        </li>
    @endif

    @if ( myUser::user()->rendszergazda > 0 )
        <li class="nav-item">
            <a href="{{ route('B2BCustomerUserIndex') }}"
               class="nav-link {{ Request::is('B2BCustomerUserIndex') ? 'active' : '' }}">
                <i class="fas fa-people-arrows"></i>
                <p> {{ \App\Classes\langClass::trans('B2B felhasználók') }}</p>
            </a>
        </li>
        @if ( myUser::user()->rendszergazda === 2 )
            <li class="nav-item">
                <a href="{{ route('B2BUserIndex') }}"
                   class="nav-link {{ Request::is('B2BUserIndex*') ? 'active' : '' }}">
                    <i class="fas fa-user-tie"></i>
                    <p> {{ \App\Classes\langClass::trans('Belső felhasználók') }}</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('logItems.index') }}"
                    class="nav-link {{ Request::is('logItems*') ? 'active' : '' }}">
                    <i class="fas fa-database"></i>
                    <p> {{ \App\Classes\langClass::trans('Log adatok') }}</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('settingIndex') }}"
                    class="nav-link {{ Request::is('settingIndex*') ? 'active' : '' }}">
                    <i class="fas fa-user-cog"></i>
                    <p> {{ \App\Classes\langClass::trans('Beállítások') }}</p>
                </a>
            </li>
            <li class="nav-item" id="xmlImport">
                <a href="{{ route('XMLImport') }}"
                   class="nav-link">
                    <i class="nav-icon fas fa-file-import"></i>
                    <p>{{ \App\Classes\langClass::trans('XML Import') }}</p>
                </a>
            </li>
        @endif
        <li class="nav-item">
            <a href="{{ route('languages.index') }}"
               class="nav-link {{ Request::is('languages*') ? 'active' : '' }}">
                <i class="fas fa-globe"></i>
                <p>{{ \App\Classes\langClass::trans('Nyelvek') }}</p>
            </a>
        </li>
    @endif
@endif

{{--<li class="nav-item">--}}
{{--    <a href="{{ route('shoppingCartDetails.index') }}"--}}
{{--       class="nav-link {{ Request::is('shoppingCartDetails*') ? 'active' : '' }}">--}}
{{--        <p>Shopping Cart Details</p>--}}
{{--    </a>--}}
{{--</li>--}}



