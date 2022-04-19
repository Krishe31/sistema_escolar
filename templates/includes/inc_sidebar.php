<?php 
    $slug = isset($d->slug) && !empty($d->slug) ? $d->slug : 'dashboard';
?>
<!-- Sidebar -->

<ul class="navbar-nav sidebar sidebar-dark accordion" style='background: #00005c; color: white;' id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo URL;?>">
    <div class="sidebar-brand-icon">
        <img src="<?php echo get_image('logo_white_1000.png')?>"alt="<?php echo get_sitename();?>" class="img-fluid"style="width: 300px;">
    </div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">
<?php if(is_admin(get_user_role())): ?>
    <li class ="nav-item <?php echo $slug === 'admin' ? 'active' : null; ?>">
        <a class="nav-link" href="admin">
        <i class="fas fa-fw fa-user-lock"></i>
        <span>Administración</span> </a>
    </li>
<?php endif; ?>

<!-- Nav Item-Dashboard -->
<li class ="nav-item <?php echo $slug === 'dashboard' ? 'active' : null; ?>">
        <a class="nav-link" href="dashboard">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span> </a>
</li>
<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Menú
</div>

<!-- Nav Item - Profesores -->
<li class ="nav-item <?php echo $slug === 'profesores' ? 'active' : null; ?>">
    <a class="nav-link" href="profesores">
    <i class="fas fa-fw fa-users"></i>
    <span>Profesores</span> </a>
</li>

<!-- Nav Item - Alumnos -->
<li class ="nav-item <?php echo $slug === 'alumnos' ? 'active' : null; ?>">
    <a class="nav-link" href="alumnos">
    <i class="fas fa-fw fa-book-reader"></i>
    <span>Alumnos</span> </a>
</li>

<!-- Nav Item - Materias -->
<li class ="nav-item <?php echo $slug === 'materias' ? 'active' : null; ?>">
    <a class="nav-link" href="materias">
    <i class="fas fa-fw fa-book"></i>
    <span>Materias</span> </a>
</li>

<!-- Nav Item - Grupos -->
<li class ="nav-item <?php echo $slug === 'grupos' ? 'active' : null; ?>">
    <a class="nav-link" href="grupos">
    <i class="fas fa-fw fa-graduation-cap"></i>
    <span>Grupos</span> </a>
</li>

<!-- Nav Item - Horarios -->
<li class ="nav-item <?php echo $slug === 'horarios' ? 'active' : null; ?>">
    <a class="nav-link" href="horarios">
    <i class="fas fa-fw fa-calendar-alt"></i>
    <span>Horarios</span> </a>
</li>

<!-- Nav Item - Lecciones -->
<li class ="nav-item <?php echo $slug === 'lecciones' ? 'active' : null; ?>">
    <a class="nav-link" href="lecciones">
    <i class="fas fa-fw fa-chalkboard-teacher"></i>
    <span>Lecciones</span> </a>
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Utilities</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
        </div>
    </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">


<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

<!-- Sidebar Message -->
<!--<div class="sidebar-card d-none d-lg-flex">
    <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
    <p class="text-center mb-2"><strong>SB Admin Pro</stropng> is packed with premium features, components, and more!</p>
    <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
</div>-->

</ul>
<!-- End of Sidebar -->