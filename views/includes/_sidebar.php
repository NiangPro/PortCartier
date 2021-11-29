<!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav ">
                    <ul id="sidebarnav">
                        <?php if($_SESSION['user']->type == "membre"): ?>
                        <li class="sidebar-item active"> <a class="sidebar-link" href="{{route('home')}}"
                                aria-expanded="false"><i data-feather="file" class="feather-icon"></i><span
                                    class="hide-menu">Document</span></a>
                        </li>
                        <?php elseif($_SESSION['user']->type == "employe" || $_SESSION['user']->type == "admin"): ?>
                            <li class="sidebar-item"> <a class="sidebar-link active" href="{{route('home')}}"
                                aria-expanded="false"><i data-feather="file" class="feather-icon"></i><span
                                    class="hide-menu">Document</span></a>
                            </li>
                            <li class="list-divider"></li>
                            <li class="sidebar-item"> <a class="sidebar-link" href="{{route('home')}}"
                                aria-expanded="false"><i data-feather="users" class="feather-icon"></i><span
                                    class="hide-menu">Membres</span></a>
                            </li>
                                <?php endif; ?>
                        <?php if($_SESSION['user']->type == "admin"): ?>
                            <li class="sidebar-item"> <a class="sidebar-link" href="{{route('home')}}"
                                aria-expanded="false"><i data-feather="users" class="feather-icon"></i><span
                                    class="hide-menu">Employés</span></a>
                            </li>
                        <?php endif; ?>
            
           
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
