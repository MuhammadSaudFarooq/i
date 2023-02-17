<div class="col-md-3">
    <ul class="list-unstyled">
        <li>
            <a href="javascript:void(0)">{{ auth()->user()->name }}</a>
        </li>
        <li>
            <a href="{{ url('dashboard') }}">Dashboard<i class="fa fa-tachometer"></i></a>
        </li>
        <li>
            <a href="{{ url('dashboard/orders') }}">Orders<i class="fa fa-shopping-cart"></i></a>
        </li>
        <li>
            <a href="{{ url('dashboard/address') }}">Address<i class="fa fa-home"></i></a>
        </li>
        <li>
            <a href="{{ url('dashboard/account-detail') }}">Account details<i class="fa fa-info-circle"></i></a>
        </li>
        <li>
            <a href="{{ url('logout') }}"
                onclick="event.preventDefault(); document.getElementById('dashboard-logout').submit();">Logout<i class="fa fa-sign-out"></i></a>
        </li>
        <form action="{{ url('logout') }}" method="post" id="dashboard-logout" style="display: none">
            @csrf
        </form>
    </ul>
</div>