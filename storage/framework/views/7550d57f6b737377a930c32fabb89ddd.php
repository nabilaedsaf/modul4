<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,
initial-scale=1.0">
<title><?php echo e($pageTitle); ?></title>
<?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-primary">
<div class="container">
<a href="<?php echo e(route('home')); ?>" class="navbar-brand mb-0 h1"><i
class="bi-hexagon-fill me-2"></i> Data Master</a>
<button type="button" class="navbar-toggler"
data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse"
id="navbarSupportedContent">
<hr class="d-lg-none text-white-50">
<ul class="navbar-nav flex-row flex-wrap">
<li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('home')); ?>" class="nav-link">Home</a></li>
<li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('employees.index')); ?>" class="nav-link">Employee List</a></li>
</ul>
<hr class="d-lg-none text-white-50">
<a href="<?php echo e(route('profile')); ?>" class="btn
btn-outline-light my-2 ms-md-auto"><i class="bi-person-circle me-1"></i>
My Profile</a>
</div>
</div>
</nav>
<div class="container-sm mt-5">
<form action="<?php echo e(route('employees.store')); ?>" method="POST">
<?php echo csrf_field(); ?>
<div class="row justify-content-center">
<div class="p-5 bg-light rounded-3 border col-xl-6">
<?php if($errors->any()): ?>
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="alert alert-danger
alert-dismissible fade show">
<?php echo e($error); ?>

<button type="button" class="btn-close"
data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<div class="mb-3 text-center">
<i class="bi-person-circle fs-1"></i>
<h4>Create Employee</h4>
</div>
<hr>
<div class="row">
<div class="col-md-6 mb-3">
    <label for="firstName" class="form-label">First Name</label>
    <input class="form-control  <?php if($errors->has('firstName')): ?> is-invalid <?php endif; ?>" type="text" placeholder="Enter First Name">
    <?php if($errors->has('firstName')): ?>
        <small class="text-danger"><?php echo e($errors->first('firstName')); ?>

    <?php endif; ?>
</div>
<div class="col-md-6 mb-3">
    <label for="lastName" class="form-label">Last Name</label>
    <input class="form-control <?php if($errors->has('lastName')): ?> is-invalid <?php endif; ?>" type="text" placeholder="Enter Last Name">
    <?php if($errors->has('lastName')): ?>
        <small class="text-danger"><?php echo e($errors->first('lastName')); ?>

    <?php endif; ?>
</div>
<div class="col-md-6 mb-3">
    <label for="email" class="form-label">Email</label>
    <input class="form-control <?php if($errors->has('email')): ?> is-invalid <?php endif; ?>" type="text" placeholder="Enter Email">
    <?php if($errors->has('email')): ?>
    <small class="text-danger"><?php echo e($errors->first('email')); ?>

    <?php endif; ?>
</div>
<div class="col-md-6 mb-3">
    <label for="age" value="<?php echo e(old('age')); ?>" class="form-label">Age</label>
    <input class="form-control <?php if($errors->has('email')): ?> is-invalid <?php endif; ?>" type="text" placeholder="Enter Age">
    <?php if($errors->has('age')): ?>
    <small class="text-danger"><?php echo e($errors->first('age')); ?>

    <?php endif; ?>
</div>
</div>
<hr>
<div class="row">
<div class="col-md-6 d-grid">
<a href="<?php echo e(route('employees.index')); ?>"
class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle
me-2"></i> Cancel</a>
</div>
<div class="col-md-6 d-grid">
<button type="submit" class="btn btn-dark
btn-lg mt-3"><i class="bi-check-circle me-2"></i> Save </button>
</div>
</div>
</div>
</div>
</form>
</div>
<?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>
</html>
<?php /**PATH D:\laravel\praktikum4\resources\views/employee/create.blade.php ENDPATH**/ ?>