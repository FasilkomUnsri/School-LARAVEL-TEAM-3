<?php $__env->startSection('content'); ?>
<!-- ##### Hero Area Start ##### -->
<section class="hero-area bg-img bg-overlay-2by5" style="background-image: url(<?php echo e(asset('img/bg')); ?>/bg1.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <!-- Hero Content -->
                <div class="hero-content text-center">
                    <h2>Selamat Datang di Garuda School</h2>
                    <a href="#" class="btn clever-btn">Sekolah Elit</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Hero Area End ##### -->

<div class="regular-page-area section-padding-100 mt-5 mb-4">
    <div class="col-lg-9 mx-auto">
        <div class="card">
            <div class="card-header">Garudaschool</div>
            <div class="card-body">
                <p class="lead">
                siswa menemukan minat dan gairah mereka untuk subjek akademis yang akrab atau
                bidang studi baru; untuk bentuk olahraga atau seni; untuk klub atau proyek layanan
                sambil memperdalam pemahaman mereka tentang minat dan hasrat itu, diri mereka sendiri
                dan dunia di sekitar mereka. Siswa, fakultas, dan staf kami menciptakan komunitas dan
                sistem pendukung yang inklusif, ramah, dan membumi yang mengenali setiap orang
                untuk siapa mereka.
                </p>
            </div>
        </div>
    </div>
</div>

<?php if($pengumuman->count() > 0): ?>
<section class="upcoming-events section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>Pengumuman Terbaru</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <?php $__currentLoopData = $pengumuman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="single-upcoming-events mb-50 wow fadeInUp" data-wow-delay="250ms">
                    <!-- Events Thumb -->
                    <div class="events-thumb">
                        <img src="<?php echo e(asset('img/bg')); ?>/pengumuman.png" alt="">
                        <h6 class="event-date"><?php echo e($pn->tgl); ?> | BY : <?php echo e($pn->user->name); ?></h6>
                        <h4 class="event-title"><?php echo e($pn->judul); ?></h4>
                    </div>
                    <div>
                        <a href="<?php echo e(route('pengumuman.show',$pn->slug)); ?>" class="btn btn-primary col-lg">Detail</a>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="row">
            <a href="<?php echo e(route('pengumuman')); ?>" class="alert alert-success alert-link mx-auto">Lihat Semua Pengumuman</a>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if($artikel->count() > 0): ?>
<!-- ##### Artikel ##### -->
<section class="blog-area section-padding-100-0 mb-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>Artikel Terbaru</h3>
                </div>
            </div>
        </div>

        <div class="row">
            
            <?php $__currentLoopData = $artikel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $art): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <?php echo e($art->judul); ?>


                            <span class="badge badge-danger float-right">Author : <?php echo e($art->user->name); ?></span>
                        </div>
                        <div class="card-body">
                            <img src="<?php echo e(asset($art->getThumbnail())); ?>" width="100%" style="height: 300px; object-fit: cover; object-position: center;">

                            <div class="card-text mt-3">
                                <?php echo Str::limit($art->deskripsi); ?>

                            </div>

                            <a href="<?php echo e(route('artikel.show',$art->slug)); ?>" class="btn btn-primary btn-sm">Selengkapnya</a>
                        </div>
                        <div class="card-footer">
                                <span class="badge badge-primary float-right">kategori : <?php echo e($art->kategoriArtikel->nama_kategori); ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="row mt-3">
            <a href="<?php echo e(route('artikel')); ?>" class="alert alert-success alert-link mx-auto mt-3">Lihat Semua Artikel</a>
        </div>
    </div>
</section>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend.app',[
    'title' => 'Home',
], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laraschool-master\resources\views/home/index.blade.php ENDPATH**/ ?>