Hai, <?php echo e($BarangLunas->receiver); ?>,
Terima kasih sudah belanja di <?php echo e($BarangLunas->sender); ?>.

Kode Transaksi Anda <?php echo e($BarangLunas->id_trans); ?>

 
Barang anda menunggu konfirmasi pembayaran.
 
Pesanan Anda :
                         
                   
                    <?php if($BarangLunas->all != null): ?>     
                    PRODUCT   QUANTITY   PRICE 

					<?php $__currentLoopData = $BarangLunas->all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php $__currentLoopData = $BarangLunas->prod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($c[0]==$p->id): ?>
                        <?php echo e($p->name); ?> <?php echo e($c[1]); ?> <?php
                                $tot = $p->discount* $c[1];
                                echo number_format($tot,0,'.',',');
                                ?> Rp.
                        
						<?php break; ?>
					<?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    Ongkos Kirim Rp. <?php echo e(number_format(Session::get('ongkir'),0,'.',',')); ?>

                    TOTAL Rp. <?php echo e(number_format(Session::get('price'),0,'.',',')); ?>

                    <?php endif; ?>
 
Terima Kasih,
<?php echo e($BarangLunas->sender); ?><?php /**PATH C:\xampp\htdocs\laravel-shopping\resources\views/mails/BarangLunasPlain.blade.php ENDPATH**/ ?>