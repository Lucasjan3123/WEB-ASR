 <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="#" aria-expanded="false"><i class="mdi mdi-speedometer" aria-hidden="true"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="/AdminArea/kategori" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Categori & Tags</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="/AdminArea/blog" aria-expanded="false"><i class="mdi mdi-file"></i><span
                                class="hide-menu">Blog</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="/AdminArea/news" aria-expanded="false"><i class="mdi mdi-file"></i><span
                                class="hide-menu">News</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href='/AdminArea/DaftarUser' aria-expanded="false"><i
                                    class="mdi mdi-account-network"></i><span class="hide-menu">User</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="/" aria-expanded="false"><i class="mdi mdi-home-outline "></i><span class="hide-menu">Home</span></a></li>

                        @if (Auth::check())
                        <li class="text-center p-40 upgrade-btn">
                            <a  href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                                class="btn d-block w-100 btn-danger text-white" target="_blank">Logout</a>
                        </li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                        @endif
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
