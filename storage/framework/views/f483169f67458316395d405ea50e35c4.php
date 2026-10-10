
<?php $__env->startSection('title', 'Daftar Post'); ?>

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between mb-3">
    <a href="<?php echo e(route('posts.create')); ?>" class="btn btn-primary">+ Tambah Post</a>

    
    <form action="<?php echo e(route('posts.index')); ?>" method="GET" class="d-flex gap-2">
        <input type="text" name="search" class="form-control"
               placeholder="Cari judul..." value="<?php echo e(request('search')); ?>">
        <button class="btn btn-outline-dark">Cari</button>
    </form>
</div>

<?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <?php if (isset($component)) { $__componentOriginal53747ceb358d30c0105769f8471417f6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53747ceb358d30c0105769f8471417f6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card','data' => ['title' => $post->title]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($post->title)]); ?>
        <p><?php echo e(Str::limit($post->content, 120)); ?></p>

        <a href="<?php echo e(route('posts.show', $post)); ?>" class="btn btn-info btn-sm">Lihat</a>
        <a href="<?php echo e(route('posts.edit', $post)); ?>" class="btn btn-warning btn-sm">Edit</a>

        <form action="<?php echo e(route('posts.destroy', $post)); ?>" method="POST" class="d-inline"
              onsubmit="return confirm('Yakin hapus post ini?')">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button class="btn btn-danger btn-sm">Hapus</button>
        </form>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53747ceb358d30c0105769f8471417f6)): ?>
<?php $attributes = $__attributesOriginal53747ceb358d30c0105769f8471417f6; ?>
<?php unset($__attributesOriginal53747ceb358d30c0105769f8471417f6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53747ceb358d30c0105769f8471417f6)): ?>
<?php $component = $__componentOriginal53747ceb358d30c0105769f8471417f6; ?>
<?php unset($__componentOriginal53747ceb358d30c0105769f8471417f6); ?>
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <p class="text-center text-muted">Belum ada post.</p>
<?php endif; ?>

<?php echo e($posts->links()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\code\TugasWeb-PW10\resources\views/posts/index.blade.php ENDPATH**/ ?>