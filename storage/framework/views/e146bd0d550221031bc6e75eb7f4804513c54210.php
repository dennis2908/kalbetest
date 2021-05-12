 
<?php $__env->startSection('content'); ?>
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">New Products</h3>

                    </div>
                </div>
                <!-- /section title -->

                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">


                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!-- product -->
                        <div class="col-md-3">
                            <div class="product">
                                <div class="product-img">
                                    <img src="img/<?php echo e($product->image_name); ?>" alt="">
                                    <div class="product-label">
                                        <span class="sale">Offer!!</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category"><?php echo e($product->category->name); ?></p>
                                    <h3 class="product-name"><a href="<?php echo e(route('user.view',['id'=>$product->intProductID])); ?>"><?php echo e($product->txtProductName); ?></a></h3>
                                    <h4 class="product-price">Rp. <?php echo e(number_format($product->discount,0,'.',',')); ?> <del class="product-old-price">Rp. <?php echo e(number_format($product->decPrice,0,'.',',')); ?> </del></h4>
                                    <div class="product-rating">
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
                    
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('store.storeLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-shopping\resources\views/store/index.blade.php ENDPATH**/ ?>