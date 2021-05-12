<?php $__env->startSection('content'); ?>
<script src="<?php echo e(asset('js/lib/jquery.js')); ?>"></script>
<script src="<?php echo e(asset('js/dist/jquery.validate.js')); ?>"></script>

<link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/style_for_quantity.css')); ?>" />
<style>
label.error {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1;
  padding:1px 20px 1px 20px;
}

    .rTable {
        
    display: block;
    width:100%;
    
}
.rTableHeading, .rTableBody, .rTableFoot, .rTableRow{
    clear: both;
}
.rTableHead, .rTableFoot{
    background-color: #DDD;
    font-weight: bold;
}
.rTableCell, .rTableHead {
    
    float: left;
    overflow: hidden;
    padding: 3px 1.8%;
    width:20%;
    
}
.rTable:after {
    visibility: hidden;
    display: block;
    font-size: 0;
    content: " ";
    clear: both;
    height: 0;
}

</style>             

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        

            <!-- Order Details -->
            <div class="col-md-5 order-details" style="width: 100%;">
                <div class="section-title text-center">
                    <h3 class="title">Pesanan Anda</h3>
                </div>
                <div id="order_summary" class="order-summary">
                   
                   
                   
                    <?php if($all != null): ?>
                    <div class="rTable">
                        <div class="rTableRow">
                            <div class="rTableHead"><strong>PRODUCT</strong></div>
                            <div class="rTableHead"><strong>QUANTITY</strong></div>
                            <div class="rTableHead"><strong>PRICE</strong></div>

                        </div>
					<?php $__currentLoopData = $all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php $__currentLoopData = $prod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($c[0]==$p->intProductID): ?>
                        <div  class="rTableRow" id="deleteItem_<?php echo e($c[3]); ?>">
							<div class="rTableCell"><img src="img/<?php echo e($p->image_name); ?>" height="50px" width="50px"> <?php echo e($p->txtProductName); ?></div>
                            
                            <!--quantity-->
                                                                <!--c[1] is pid and c[3] is order serial-->
                            <div class="rTableCell">
                          <label id="quantity" style="width:25%" class="text-right" name=<?php echo e($p->intProductID); ?>> <?php echo e($c[1]); ?> </label>
                            </div>			
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
                        <div><strong>TOTAL</strong></div>
                        <div ><strong class="order-total" id="totalCost">Rp. <?php echo e(number_format(Session::get('decPrice'),0,'.',',')); ?></strong></div>
                    </div>
                    <?php else: ?>
                    <div class="order-col">
                        <h1>Your Cart is Empty</h1>
                    </div>
                    <?php endif; ?>
                    
                </div>
                <div class="payment-method">
                    <div class="input-radio">
                        <input type="radio" name="payment" id="payment-2" checked disabled>
                        <label for="payment-2">
                            <span></span>
                            Transfer Bank BCA
                        </label>
                        <div class="caption">
                            <p>Transfer nominal Total Pesanan Anda ke No Rekening <b> Bank Mandiri 1560002713966 </b> a/n <b>Abdrob Dermawan</b></p>
                            <p>Setelah Transfer nominal di atas kemudian Tekan <img style="width:10%!important" src="<?php echo e(asset('img/konfirmasi bayar.png')); ?>" alt=""></p>
                        </div>
                    </div>
                </div>
                <?php if(session('user')): ?>
                    <?php if($all != null): ?>
                   <center> <form method="post" name="cart">
                        <?php echo e(csrf_field()); ?>

                        <input type="submit" id="confirm_order"  name="order" class="primary-btn order-submit" value="Konfirmasi Bayar">
                    </form></center>

                    <?php else: ?>
                        <a href="<?php echo e(route('user.home')); ?>"><input type="button"  class="primary-btn order-submit" value="Order Now"></a>
                    <?php endif; ?>
                
                <?php else: ?>
                 <?php if(!session('user')): ?>
        <div class="row">
        <form method="post" id="signupForm">
            <?php echo e(csrf_field()); ?>

            <div class="col-md-7">
                <!-- Billing Details -->
                <div class="billing-details">
                    <div class="section-title">
                        <h3 class="title">Billing address</h3>
                    </div>
                    <div class="form-group">
                        <input class="input" type="text" id="name" name="name" placeholder="Full Name">
                    </div>
                    <div class="form-group">
                        <input class="input" type="email" name="email" id="email" placeholder="Email" onkeyup="myFunction()">
                    </div>
                    <div id="for_duplicate-email"></div>
                    <div class="form-group">
                        <input class="input" type="text" name="address" id="address" placeholder="Address">
                    </div>
                    <div class="form-group">
                        <input class="input" type="text" name="city" id="city" placeholder="City">
                    </div>
                    <div class="form-group">
                        <input class="input" type="text" name="zip" id="zip" placeholder="ZIP Code">
                    </div>
                    <div class="form-group">
                        <select class="input" name="prov" id="prov">
                        <?php $__currentLoopData = $prov; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($pv->id); ?>"><?php echo e($pv->nm_prov); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input class="input" type="tel" name="tel" id="tel" placeholder="Telephone">
                    </div>
                    <div class="form-group">
                        <input class="input" type="password" name="pass" id="pass" placeholder="Enter Your Password">
                    </div>
                    <div class="form-group">
                        <input class="input" type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password">
                    </div>
                    
                        
                        <input type="submit"  name="signup" class="primary-btn order-submit" value="Registrasi">
               
                    </div>
                <!-- /Billing Details -->
            </div></form>
               </div>      
                
            <?php endif; ?>  
                    
                <?php endif; ?>
                

                
           
            <!-- /Order Details -->
        
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<script>
    
   //TO DO: ajax will take place
    
    $('.add').click(function () {

    var url="<?php echo e(route('user.editCart')); ?>";
    var product_id= $(this).val(); 
    $(this).prev().val(+$(this).prev().val() + 1);
    var x=$(this).prev().val(); 
    var token=$("input[name=_token]").val();
    var order_serial=this.getAttribute('data-rel');
    var product_price=this.getAttribute('data-rel2');


    $.ajax({
            type:'post',
            url:url,
            dataType: "JSON",
            async: false,
            data:{pid: product_id, newQ:x, oSerial:order_serial, _token: token},
            success:function(msg)
            {
                document.getElementById("individualPrice_"+order_serial).innerHTML=x*product_price+" TK";
                document.getElementById("totalCost").innerHTML = msg[2]+" TK";
            }
            });
        
   
    });
    $('.sub').click(function () {
        
        var url="<?php echo e(route('user.editCart')); ?>";
        var product_id= $(this).val();
        var order_serial=this.getAttribute('data-rel');
        var product_price=this.getAttribute('data-rel2');
        if ($(this).next().val() > 1) 
        {
            $(this).next().val(+$(this).next().val() - 1);
            var x=$(this).next().val();
            var token=$("input[name=_token]").val();
            
            
            $.ajax({
            type:'post',
            url:url,
            dataType: "JSON",
            async: false,
            data:{pid: product_id, newQ:x, oSerial:order_serial, _token: token},
            success:function(msg)
            {
                document.getElementById("individualPrice_"+order_serial).innerHTML=x*product_price+" TK";
                document.getElementById("totalCost").innerHTML = msg[2]+" TK";

            }
            });
            
        
        }
    });
    
    $('.delete_item').click(function () {
        var url="<?php echo e(route('user.deleteCartItem')); ?>";
        var serial= $(this).val();   //serial is the forth element of sale coloumn
        var token=$("input[name=_token]").val();
        var id_holder="deleteItem_"+serial;
        $.ajax({
                type:'post',
                url:url,
                dataType: "JSON",
                async: false,
                data:{serial:serial, _token: token},
                success:function(msg)
                {
                    if(msg=="Empty")
                        {
                        document.getElementById("order_summary").innerHTML = "<div class='order-col'><h1>Your Cart is Empty</h1></div>";
                        document.getElementById("confirm_order").style.visibility = "hidden";
                        }
                   
                    //$("#deleteItem_".$p->id").load(location.href+" #refresh_div","");
                    document.getElementById(id_holder).innerHTML  = "";
                    document.getElementById("totalCost").innerHTML = msg[2];
                }
                });


    });
	
    
    //validation
    
    $(document).ready(function() {
		// validate the comment form when it is submitted
		//$("#commentForm").validate();

		// validate signup form on keyup and submit
		$("#signupForm").validate({
			rules: {
				name: "required",
				email: {
					required: true,
					email: true
				},
                address: "required",
                city: "required",
                zip: {
					required: true,
					number: true
				},
                prov: "required",
                tel: "required",
				pass: {
					required: true,
					minlength: 5
				},
				confirm_password: {
					required: true,
					minlength: 5,
					equalTo: "#pass"
				}
				
				
				
			},
			messages: {
				name: "Please enter your Fullname",
				email: "Please enter a valid email address",
                address: "Please enter your Address",
                city: "Please enter your City",
                address: "Please enter your Address",
				zip: {
					required: "Please enter Zipcode",
					number: "Invalid Zipcode"
				},
                prov: "Please enter your Province",
                tel: "Please enter your Phone number",
				pass: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long"
				},
				confirm_password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long",
					equalTo: "Please enter the same password as above"
				}
				
				
			}
            
            
        
		});

		
	});
   
</script>
<script>
function myFunction() {
    //var token=<?php echo e(csrf_token()); ?>;
    var email=$("#email").val();
    var token=$("input[name=_token]").val();
    var url="<?php echo e(route('user.signup.check_email')); ?>";
    

            $.ajax({
                type:'post',
                url:url,
                dataType: "JSON",
                async: false,
                data:{email: email, _token: token},
                success:function(msg){
                        
                         
                        if(msg == "1")
                            {
                                document.getElementById("for_duplicate-email").innerHTML = "<label class='error'>This Email Address is Already taken</label>";
                                                    

                            }
                    else
                        {
                            document.getElementById("for_duplicate-email").innerHTML = "";

                        }
                    }
             });
    
}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('store.storeLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-shopping\resources\views/store/confirm_payment.blade.php ENDPATH**/ ?>