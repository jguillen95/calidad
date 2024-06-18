<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ route('home') }}">
            <span class="align-middle">Laboratorios Dibar</span>
        </a>
        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>
            <li class="sidebar-item active">
                <a class="sidebar-link" href="#">
                    <i class="fa fa-house"></i>Docs Digitales
                    <span class="align-middle"></span>
                </a>
            </li>
            
            
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('responsable.index') }}">Encargados de procesos<span
                                class="sidebar-badge badge bg-primary"></span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('desviacion.create') }}">F-LDAC-058/Desviacion<span
                                    class="sidebar-badge badge bg-primary"></span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('envasado.create') }}">F-LDAC-009/Envasado<span
                                        class="sidebar-badge badge bg-primary"></span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('limpieza.create') }}">F-LDAC-066/Limpieza <span
                                class="sidebar-badge badge bg-primary"></span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('mezcla.create') }}">F-LDAC-010/Mezcla <span
                                    class="sidebar-badge badge bg-primary"></span></a></li> 
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('fichas.create') }}">F-LDAC-015/Ficha Técnica de PT <span
                        class="sidebar-badge badge bg-primary"></span></a></li>      
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('seguridad.index') }}">F-LDAC-025/Hoja de Seguridad<span
                            class="sidebar-badge badge bg-primary"></span></a></li> 
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('pterminado.create') }}">F-LDAC-026/Especificaciones de producto terminado<span
                        class="sidebar-badge badge bg-primary"></span></a></li>  
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('sanitizacion.create') }}">F-LDAC-014/Sanitización y Limpieza<span
                            class="sidebar-badge badge bg-primary"></span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('bpm.create') }}">F-LDAC-031/Bitacora bpms<span
                        class="sidebar-badge badge bg-primary"></span></a></li>
                        <li class="sidebar-item"><a class="sidebar-link" href="{{ route('criterio.create') }}">F-LDAC-055/Criterios de aceptación<span
                            class="sidebar-badge badge bg-primary"></span></a></li>
           

            {{-- <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    <i class="fa fa-user"></i>
                    <span class="align-middle">Profile</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="#">
                    <i class="fa-solid fa-envelope"></i>
                    <span class="align-middle">Invoice</span>
                </a>
            </li>

            <li class="sidebar-header">
                Components
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#ui" data-bs-toggle="collapse" class="sidebar-link collapsed"
                    aria-expanded="false">
                    <i class="fa-solid fa-layer-group"></i>
                    <span class="align-middle">UI Elements</span>
                </a>
                <ul id="ui" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="#">Alerts</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="#">Buttons</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="#">Cards</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="#">General</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="#">Grid</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="#">Modals</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="#">Offcanvas <span
                                class="sidebar-badge badge bg-primary">Pro</span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="#">Placeholders <span
                                class="sidebar-badge badge bg-primary">Pro</span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="#">Tabs <span
                                class="sidebar-badge badge bg-primary">Pro</span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="#">Typography</a></li>
                </ul>
            </li>

            <li class="sidebar-header">
                Plugins &amp; Addons
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#form-plugins" data-bs-toggle="collapse" class="sidebar-link collapsed"
                    aria-expanded="false">
                    <i class="fa-solid fa-file-lines"></i>
                    <span class="align-middle">Form Plugins</span>
                </a>
                <ul id="form-plugins" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="#">Advanced
                            Inputs <span class="sidebar-badge badge bg-primary">Pro</span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="#">Editors <span
                                class="sidebar-badge badge bg-primary">Pro</span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="#">Validation <span
                                class="sidebar-badge badge bg-primary">Pro</span></a></li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#datatables" data-bs-toggle="collapse" class="sidebar-link collapsed"
                    aria-expanded="false">
                    <i class="fa-solid fa-table-list"></i>
                    <span class="align-middle">DataTables</span>
                </a>
                <ul id="datatables" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link"
                            href="#">Responsive Table <span
                                class="sidebar-badge badge bg-primary">Pro</span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="#">Table with
                            Buttons <span class="sidebar-badge badge bg-primary">Pro</span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link"
                            href="#">Column Search <span
                                class="sidebar-badge badge bg-primary">Pro</span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="#">Fixed
                            Header <span class="sidebar-badge badge bg-primary">Pro</span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="#">Multi
                            Selection <span class="sidebar-badge badge bg-primary">Pro</span></a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="#">Ajax Sourced
                            Data <span class="sidebar-badge badge bg-primary">Pro</span></a></li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#charts" data-bs-toggle="collapse" class="sidebar-link collapsed"
                    aria-expanded="false">
                    <i class="fa-solid fa-chart-column"></i>
                    <span class="align-middle">Charts</span>
                </a>
                <ul id="charts" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="#">Chart.js</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="#">ApexCharts <span
                                class="sidebar-badge badge bg-primary">Pro</span></a></li>
                </ul>
            </li> --}}
        </ul>
    </div>
</nav>
