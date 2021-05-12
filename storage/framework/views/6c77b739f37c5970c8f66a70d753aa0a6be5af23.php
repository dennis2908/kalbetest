Hai <i><?php echo e($BarangLunas->receiver); ?></i>,
<p>Terima kasih sudah belanja di <?php echo e($BarangLunas->sender); ?>.</p>
<p>Kode Transaksi Anda <h3><?php echo e($BarangLunas->id_trans); ?></h3></p>
 
<p><u>Barang anda menunggu konfirmasi pembayaran.</u></p>
 
                <div class="section-title text-center">
                    <h3 class="title">Pesanan Anda : </h3>
                </div>
                <div id="order_summary" class="order-summary">
                   
                   
                   
                    <?php if($BarangLunas->all != null): ?>
                    <div class="rTable">
                        <div class="rTableRow">
                            <div class="rTableHead"><strong>PRODUCT</strong></div>
                            <div class="rTableHead"><strong>QUANTITY</strong></div>
                            <div class="rTableHead"><strong>PRICE</strong></div>

                        </div>
					<?php $__currentLoopData = $BarangLunas->all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php $__currentLoopData = $BarangLunas->prod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($c[0]==$p->id): ?>
                        <div  class="rTableRow" id="deleteItem_<?php echo e($c[3]); ?>">
							<div class="rTableCell"><?php echo e($p->name); ?></div>
                            
                            <!--quantity-->
                                                                <!--c[1] is pid and c[3] is order serial-->
                            <div class="rTableCell">
                          <label id="quantity" class="text-right" name=<?php echo e($p->id); ?>> <?php echo e($c[1]); ?> </label>
                            </div>
                            
<!--                            -->
							
							<div class="rTableCell text-right"><div id="individualPrice_<?php echo e($c[3]); ?>">
                                <?php
                                $tot = $p->discount* $c[1];
                                echo number_format($tot,0,'.',',');
                                ?>
                                
                                Rp.</div></div>
                                
						</div>
                        
						<?php break; ?>
					<?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    
                    </div>
                    <div class="order-col">
                        <div>Ongkos Kirim</div>
                        <div><strong>Rp. <?php echo e(number_format(Session::get('ongkir'),0,'.',',')); ?></strong></div>
                    </div>
                    <div class="order-col">
                        <div><strong>TOTAL</strong></div>
                        <div ><strong class="order-total" id="totalCost">Rp. <?php echo e(number_format(Session::get('price'),0,'.',',')); ?></strong></div>
                    </div>
                    <?php endif; ?>
                    
                </div>
 
Terima Kasih,
<br/>
<i><?php echo e($BarangLunas->sender); ?></i><?php /**PATH C:\xampp\htdocs\laravel-shopping\resources\views/mails/BarangLunas.blade.php ENDPATH**/ ?>