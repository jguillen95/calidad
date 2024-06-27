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
            
            @if (auth()->user()->usertype_id==1)
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('responsable.index') }}">Encargados de procesos<span
                                class="sidebar-badge badge bg-primary"></span></a></li>
                @endif
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('cambio.index') }}"><strong>Control de cambios</strong><span
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
           
        </ul>
    </div>
</nav>
