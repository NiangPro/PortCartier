<!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav ">
                    <ul id="sidebarnav">
                        <li class="sidebar-item @if($page === 'home') active @endif"> <a class="sidebar-link sidebar-link" href="{{route('home')}}"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Tableau de bord</span></a>
                        </li>
                        
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Utilisateur</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link" href="{{route('parent')}}"
                                aria-expanded="false"><i class="fas fa-user-secret"></i><span
                                    class="hide-menu">Tuteur
                                </span></a>
                        </li>
                        <li class="sidebar-item"><a href="{{route('users')}}" class="sidebar-link"><i class="fas fa-diagnoses"></i><span
                                            class="hide-menu"> Surveillant
                                        </span></a>
                                </li>

                        <li class="list-divider"></li>
                        <li class="nav-small-cap "><span class="hide-menu">Authentication</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('classe')}}"
                                aria-expanded="false"><i class="fas fa-university"></i><span
                                    class="hide-menu">Classe
                                </span></a>
                        </li>

                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
