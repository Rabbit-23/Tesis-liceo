
<!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas">                
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            
        <!-- search form -->
        
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            
            
            
                <li class="active">
                <?= $this->Html->link('<i class="fa fa-home"></i> <span>Inicio</span>', '/', array('escape' => false)); ?>
            </li>
                <ul class="treeview-menu">
                    <li> <?php echo $this->Html->Link('Lista de Usuarios', array('controller' => 'users', 'action' => 'index')); ?></li>
                    <li><?php echo $this->Html->Link('Nuevo Usuario', array('controller' => 'users', 'action' => 'add')); ?></li>
                </ul>
            </li>
                
             <li> </li>
                    
            
            </li>

          <li class="treeview">
                <a href="#">
                    <i class="fa fa-search"></i>
                    <span>Buscar</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li> <?php echo $this->Html->Link('Buscar', array('controller' => 'personas', 'action' => 'find')); ?></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Estudiantes</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li> <?php echo $this->Html->Link('Lista de Estudiantes', array('controller' => 'estudiantes', 'action' => 'index')); ?></li>
                    <li><?php echo $this->Html->Link('Nuevo Estudiante', array('controller' => 'personas', 'action' => 'add')); ?></li>
                </ul>
            </li>

             <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i>
                    <span>Inscripciones</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li> <?php echo $this->Html->Link('Lista de Inscritos', array('controller' => 'inscripciones', 'action' => 'index')); ?></li>
                    
                </ul>
            </li>



                 <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Representantes</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li> <?php echo $this->Html->Link('Lista de representantes', array('controller' => 'representantes', 'action' => 'index')); ?></li>
                    <li><?php echo $this->Html->Link('Nuevo representante', array('controller' => 'personas', 'action' => 'add3')); ?></li>
                </ul>

                 <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Docentes</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li> <?php echo $this->Html->Link('Lista de docente', array('controller' => 'docentes', 'action' => 'index')); ?></li>
                    <li><?php echo $this->Html->Link('Nuevo docente', array('controller' => 'personas', 'action' => 'add2')); ?></li>
                </ul>

                 <li class="treeview">
                <a href="#">
                    <i class="fa fa-upload"></i>
                    <span>Carga de notas</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li> <?php echo $this->Html->Link('Lista de notas', array('controller' => 'notas', 'action' => 'index')); ?></li>
                    <li><?php echo $this->Html->Link('Nueva nota', array('controller' => 'secciones', 'action' => 'index')); ?></li>
                </ul>
                 <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Usuarios</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li> <?php echo $this->Html->Link('Lista de Usuarios', array('controller' => 'users', 'action' => 'index')); ?></li>
                    <li><?php echo $this->Html->Link('Nuevo Usuario', array('controller' => 'users', 'action' => 'add')); ?></li>
                </ul>
            </li>
            
    </section>
    <!-- /.sidebar -->
</aside>