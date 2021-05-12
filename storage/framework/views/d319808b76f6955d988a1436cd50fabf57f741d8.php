<?php $__env->startSection('content'); ?>
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- STORE -->
            <div id="store" class="col-md-12">
                <!-- store products -->
                <div class="row">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!-- product -->
                    <div class="col-md-4 col-xs-6">
                        <div class="product">
                            <div class="product-img">
                                <img src="<?php echo e(asset('img')); ?>/<?php echo e($product->image_name); ?>" alt="">
                                <div class="product-label">
                                    <span class="sale">offer</span>
                                    <span class="new"><?php echo e($product->tag); ?></span>
                                </div>
                            </div>
                            <div class="product-body">
                                <h3 class="product-name"><a href="product/<?php echo e($product->intProductID); ?>"><?php echo e($product->txtProductName); ?></a></h3>
                                <h4 class="product-price">Rp. <?php echo e(number_format($product->discount,0,'.',',')); ?>  <del class="product-old-price">Rp. <?php echo e(number_format($product->decPrice,0,'.',',')); ?> </del></h4>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                
                            </div>
                            <div class="add-to-cart">
                                <a class="add-to-cart-btn" href="<?php echo e(route('user.view',['id'=>$product->intProductID])); ?>"><i class="fa fa-shopping-cart"></i>Purchase</a>
                            </div>
                        </div>
                    </div>
                    <!-- /product -->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <!-- /STORE -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('store.storeLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-shopping\resources\views/store/search.blade.php ENDPATH**/ ?>