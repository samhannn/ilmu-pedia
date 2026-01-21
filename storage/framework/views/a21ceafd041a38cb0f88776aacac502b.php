
<?php $__env->startSection('title', 'Edit Modul'); ?>

<?php $__env->startSection('content'); ?>
<div class="max-w-2xl mx-auto px-6 py-8">
    
    <div class="text-sm font-bold text-gray-500 mb-6">
        <a href="<?php echo e(route('dashboard')); ?>" class="hover:underline">Daftar Modul</a> > 
        <span class="text-blue-500"><?php echo e($modul->judul); ?></span>
    </div>

    <?php if(session('success')): ?>
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6">
        <?php echo e(session('success')); ?>

    </div>
    <?php endif; ?>

    <div class="bg-gray-200 rounded-xl p-4 mb-6 text-center font-bold text-xl text-gray-800">
        <?php echo e($modul->judul); ?>

    </div>

    <div class="mb-6 relative group">
        <img src="<?php echo e(asset('storage/' . $modul->gambar)); ?>" alt="Cover Modul" class="w-full h-64 object-cover rounded-xl shadow-sm">
        
        <label class="absolute bottom-4 right-4 bg-blue-400 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded-lg cursor-pointer shadow-lg transition">
            Pilih Gambar
            <input type="file" class="hidden"> </label>
    </div>

    <div class="bg-gray-100 rounded-xl p-4 mb-8 text-gray-600 text-sm italic">
        "<?php echo e(Str::limit($modul->deskripsi, 100)); ?>"
    </div>

    <div class="space-y-4 mb-10">
        
        <a href="#" class="block w-full bg-gray-200 hover:bg-gray-300 rounded-xl p-4 flex justify-between items-center transition group">
            <span class="font-bold text-gray-700 group-hover:text-gray-900">Edit Materi</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500 group-hover:translate-x-1 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
        </a>

        <a href="#" class="block w-full bg-gray-200 hover:bg-gray-300 rounded-xl p-4 flex justify-between items-center transition group">
            <span class="font-bold text-gray-700 group-hover:text-gray-900">Edit Quiz</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500 group-hover:translate-x-1 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
        </a>

        <a href="#" class="block w-full bg-gray-200 hover:bg-gray-300 rounded-xl p-4 flex justify-between items-center transition group">
            <span class="font-bold text-gray-700 group-hover:text-gray-900">Fakta Unik</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500 group-hover:translate-x-1 transition" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
        </a>
    </div>

    <div class="flex justify-center pt-6">
        <a href="<?php echo e(route('dashboard')); ?>" class="text-gray-500 font-bold hover:text-red-500 transition">
            Kembali ke Dashboard
        </a>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Acer\Documents\ilmu-pedia\resources\views/admin/modul/edit.blade.php ENDPATH**/ ?>