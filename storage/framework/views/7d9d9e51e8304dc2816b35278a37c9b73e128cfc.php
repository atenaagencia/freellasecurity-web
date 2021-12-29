<?php $__env->startSection('title-page'); ?>
<!-- Page Heading -->
<?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4 border-bottom">
    <h1 class="h3 font-weight-bold text-dark">Dashboard</h1>
    <div class="row">
        <a href="" class="nav-link p-3" title="Profile Views">
            <h5 class="h5 font-weight-bold text-dark">20</h5>
            Trabalhos em Aberto
        </a>
        <a href="" class="nav-link p-3" title="Profile Views">
            <h5 class="h5 font-weight-bold text-dark">20</h5>
            Seguidores
        </a>
    </div>
</div>
<?php $__env->stopSection(); ?>  
                  
<?php $__env->startSection('content'); ?>
<div class="row mx-auto">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card h-100 shadow">
            <!-- Card Header - Dropdown -->
            <div class="card-header bg-white rounded-0 py-3">
                <h6 class="m-0 font-weight-bold text-dark">Meu Perfil</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body bg-white rounded-0">
                <p>
                    Edite suas informações pessoais como resumo, projetos, experiência, habilidades e outros.</p>
                <a href="<?php echo e(route('company.profile')); ?>" class="btn btn-primary">Editar</a>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card h-100 shadow">
            <!-- Card Header - Dropdown -->
            <div class="card-header bg-white rounded-0 py-3">
                <h6 class="m-0 font-weight-bold text-dark">Ver meu Perfil Público</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body bg-white rounded-0">
                <p>Edite suas informações pessoais como resumo, projetos, experiência, habilidades e outros.</p>
                <a href="<?php echo e(route('company.detail', Auth::guard('company')->user()->slug)); ?>" class="btn btn-primary">Ver</a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.company', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>