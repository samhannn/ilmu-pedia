
<?php $__env->startSection('title', 'Daftar Modul'); ?>

<?php $__env->startSection('content'); ?>
<div class="max-w-7xl mx-auto px-6 py-8">
    
    <div class="flex flex-col md:flex-row justify-between items-center mb-8">
        <div class="text-sm font-bold text-gray-500 mb-4 md:mb-0">
            <span class="text-black text-xl block mb-1">Daftar Modul</span>
            <a href="<?php echo e(route('dashboard')); ?>" class="hover:underline">Dashboard</a> > <span class="text-blue-500">Daftar Modul</span>
        </div>
        
        <a href="<?php echo e(route('modul.create')); ?>" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-full shadow-md transition transform hover:scale-105 flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" /></svg>
            Tambah Baru
        </a>
    </div>

    <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-200 mb-8 flex flex-col md:flex-row gap-4">
        <div class="flex-grow relative">
            <input type="text" placeholder="Cari modul..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 absolute left-3 top-2.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
        </div>
        
        <select class="px-4 py-2 border border-gray-300 rounded-lg text-gray-600 focus:outline-none cursor-pointer">
            <option>Kategori</option>
            <option>Sejarah</option>
            <option>Sains</option>
        </select>
        
        <select class="px-4 py-2 border border-gray-300 rounded-lg text-gray-600 focus:outline-none cursor-pointer">
            <option>Tingkat</option>
            <option>Mudah</option>
            <option>Sulit</option>
        </select>

        <button class="bg-blue-400 hover:bg-blue-500 text-white px-6 py-2 rounded-lg font-bold transition">Terapkan</button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        
        <?php $__empty_1 = true; $__currentLoopData = $moduls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $modul): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="bg-white rounded-2xl border border-gray-200 shadow-sm hover:shadow-md transition overflow-hidden flex flex-col">
            
            <div class="w-full aspect-video relative overflow-hidden bg-gray-100">
                <?php if($modul->gambar): ?>
                    <img src="<?php echo e(asset('storage/' . $modul->gambar)); ?>" alt="<?php echo e($modul->judul); ?>" class="w-full h-full object-cover">
                <?php else: ?>
                    <div class="flex items-center justify-center h-full text-gray-400 font-bold">No Image</div>
                <?php endif; ?>
            </div>

            <div class="p-5 flex-grow flex flex-col">
                <h3 class="font-bold text-lg text-gray-800 mb-2 line-clamp-1"><?php echo e($modul->judul); ?></h3>
                
                <p class="text-sm text-gray-500 mb-4 line-clamp-3 flex-grow">
                    <?php echo e(Str::limit($modul->deskripsi, 100)); ?>

                </p>

                <div class="flex gap-2 mt-auto">
                    <a href="<?php echo e(route('modul.edit', $modul->id)); ?>" class="flex-1 bg-blue-100 text-blue-600 text-center py-2 rounded-lg font-bold hover:bg-blue-200 transition text-sm">
                        Edit / Detail
                    </a>
                    
                    <form action="<?php echo e(route('modul.destroy', $modul->id)); ?>" method="POST" onsubmit="return confirm('Yakin ingin menghapus modul ini?');">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="bg-red-100 text-red-500 p-2 rounded-lg hover:bg-red-200 transition" title="Hapus">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="col-span-3 text-center py-20">
                <div class="text-gray-400 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" /></svg>
                </div>
                <h3 class="text-lg font-bold text-gray-600">Belum ada modul</h3>
                <p class="text-gray-500">Silakan tambahkan modul baru terlebih dahulu.</p>
            </div>
        <?php endif; ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Acer\Documents\ilmu-pedia\resources\views/admin/modul/index.blade.php ENDPATH**/ ?>