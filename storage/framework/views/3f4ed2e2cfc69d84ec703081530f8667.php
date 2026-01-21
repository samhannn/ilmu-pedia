
<?php $__env->startSection('title', 'Tambah Modul'); ?>

<?php $__env->startSection('content'); ?>
<div class="max-w-2xl mx-auto px-6 py-8">
    
    <!-- Breadcrumb -->
    <div class="text-sm font-bold text-gray-500 mb-6">
        Daftar Modul > <span class="text-blue-500">Tambah Modul</span>
    </div>

    <form action="<?php echo e(route('modul.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <!-- 1. INPUT JUDUL -->
        <div class="mb-6">
            <input type="text" name="judul" 
                   class="w-full text-2xl font-bold border-b-2 border-gray-300 focus:border-blue-500 outline-none py-2 placeholder-gray-400" 
                   placeholder="Masukkan Judul..." required>
        </div>

        <!-- 2. INPUT GAMBAR (Kotak Abu Besar) -->
        <div class="mb-6">
            <label class="w-full h-48 bg-gray-200 rounded-xl flex flex-col items-center justify-center cursor-pointer hover:bg-gray-300 transition dashed border-2 border-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-500 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                <span class="text-gray-500 font-bold">Masukkan Gambar</span>
                <input type="file" name="gambar" class="hidden">
            </label>
        </div>

        <!-- 3. INPUT DESKRIPSI -->
        <div class="mb-6">
            <textarea name="deskripsi" rows="3" 
                      class="w-full border-2 border-gray-200 rounded-xl p-4 focus:border-blue-500 focus:ring-0" 
                      placeholder="Deskripsi Modul..."></textarea>
        </div>

        <!-- 4. MENU TAMBAHAN (Materi, Quiz, Fakta) -->
        <!-- Note: Fitur ini biasanya aktif SETELAH modul disimpan pertama kali. 
             Jadi kita buat tombol simpan dulu di bawah. -->
        <div class="space-y-3 mb-10">
            <div class="p-4 bg-gray-50 rounded-xl border border-gray-200 flex justify-between items-center cursor-not-allowed opacity-60">
                <span class="font-bold text-gray-700">Tambahkan Materi</span>
                <span class="text-xs text-red-500">(Simpan modul dulu)</span>
            </div>
            <div class="p-4 bg-gray-50 rounded-xl border border-gray-200 flex justify-between items-center cursor-not-allowed opacity-60">
                <span class="font-bold text-gray-700">Tambahkan Quiz</span>
                <span class="text-xs text-red-500">(Simpan modul dulu)</span>
            </div>
             <div class="p-4 bg-gray-50 rounded-xl border border-gray-200 flex justify-between items-center cursor-not-allowed opacity-60">
                <span class="font-bold text-gray-700">Fakta Unik</span>
                <span class="text-xs text-red-500">(Simpan modul dulu)</span>
            </div>
        </div>

        <!-- 5. TOMBOL AKSI -->
        <div class="flex justify-between items-center pt-6 border-t border-gray-100">
            <a href="<?php echo e(route('dashboard')); ?>" class="text-gray-500 font-bold hover:text-gray-800">Batalkan</a>
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-10 rounded-full shadow-lg transition transform hover:scale-105">
                Konfirmasi
            </button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Acer\Documents\ilmu-pedia\resources\views/admin/modul/create.blade.php ENDPATH**/ ?>