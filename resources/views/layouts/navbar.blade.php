<div class="uis-navbar-container uis-navbar-sticky">
    <div class="uis-navbar-wrapper">
        <nav class="uis-navbar">
            <a href="/" class="uis-navbar-item uis-logo">
                Laravel101
            </a>

            <div class="uis-navbar-left">
                <ul class="uis-navbar-nav">
                    <li>
                        <a href="/about">
                            About
                        </a>
                    </li>

                    <li>
                        <a href="/services">
                            Services
                        </a>
                    </li>

                    <li>
                        <a href="/posts">
                            Blog
                        </a>
                    </li>
                </ul>
            </div>

            <div class="uis-navbar-right">
                <ul class="uis-navbar-nav">
                    

                    @if(Auth::guest())
                        <li>
                            <a href="/login">
                                Log in
                            </a>
                        </li>
                        <li>
                            <a href="/register">
                                Register
                            </a>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Sign Out
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>
    </div>
</div>