

<?php $__env->startSection('content'); ?>
<div class="max-w-4xl mx-auto px-6 py-10 text-center">
    <h1 class="text-4xl font-bold mb-4"><?php echo e($modul->judul); ?></h1>
    
    <?php if($modul->gambar): ?>
        <img src="<?php echo e(asset('storage/' . $modul->gambar)); ?>" class="w-full h-auto rounded-xl mb-8 shadow-sm">
    <?php endif; ?>

    <p class="text-gray-600 mb-8"><?php echo e($modul->deskripsi); ?></p>

    <?php if($firstPage): ?>
        <a href="<?php echo e(route('user.modul.read', ['slug' => $modul->slug, 'page' => $firstPage->urutan])); ?>" 
           class="bg-blue-500 text-white px-8 py-3 rounded-full font-bold hover:bg-blue-600 transition">
            Mulai Baca Materi
        </a>
    <?php else: ?>
        <div class="bg-yellow-100 text-yellow-800 p-4 rounded-lg">
            Materi belum tersedia untuk modul ini.
        </div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Acer\Documents\ilmu-pedia\resources\views/user/modul/show.blade.php ENDPATH**/ ?>