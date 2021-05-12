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
                    <h3 class="title">Keranjang Belanja Anda</h3>
                </div>
                <div id="order_summary" class="order-summary">
                   
                   
                   
                    <?php if($all != null): ?>
                    <div class="rTable">
                        <div class="rTableRow">
                            <div class="rTableHead"><strong>HAPUS</strong></div>
                            <div class="rTableHead"><strong>PRODUK</strong></div>
                            <div class="rTableHead"><strong>JUMLAH</strong></div>
                            <div class="rTableHead"><strong>HARGA</strong></div>

                        </div>
					<?php $__currentLoopData = $all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php $__currentLoopData = $prod; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php if($c[0]==$p->intProductID): ?>
                        <div  class="rTableRow" id="deleteItem_<?php echo e($c[3]); ?>">
                         
                          <div class="rTableCell">  <button type="button" id="delete_item"  value=<?php echo e($c[3]); ?> name="delete_item"  class="delete_item">X</button></div>
							<div class="rTableCell"><img src="img/<?php echo e($p->image_name); ?>" height="50px" width="50px"> <?php echo e($p->name); ?></div>
                            
                            <!--quantity-->
                                                                <!--c[1] is pid and c[3] is order serial-->
                            <div class="rTableCell">
                           <button type="button" id="sub" value=<?php echo e($p->id); ?> data-rel=<?php echo e($c[3]); ?> data-rel2=<?php echo e($p->discount); ?> class="sub">-</button>   
                        <input type="number"  id="quantity" class="text-right" style="width:30%" name=<?php echo e($p->intProductID); ?> value=<?php echo e($c[1]); ?> min="1" max="100" readonly/>
                        <button type="button" id="add" value=<?php echo e($p->id); ?> data-rel=<?php echo e($c[3]); ?> data-rel2=<?php echo e($p->discount); ?>  class="add">+</button></div>
                            
<!--                            -->
							
							<div class="rTableCell"><div class="text-right" id="individualPrice_<?php echo e($c[3]); ?>">
                                <?php
                                $tot =$p->discount* $c[1];
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
                        
                    </div>
                    <div class="order-col">
                        <div><strong>TOTAL</strong></div>
                        <div ><strong class="order-total" id="totalCost">Rp. <?php echo e(number_format(Session::get('price'),0,'.',',')); ?></strong></div>
                    </div>
                    <?php else: ?>
                    <div class="order-col">
                        <h1>Keranjang Belanja Anda Kosong</h1>
                    </div>
                    <?php endif; ?>
                    
                </div>
                <?php if(session('user')): ?>
                    <?php if($all != null): ?>
                   <center> <form method="post" name="cart">
                        <?php echo e(csrf_field()); ?>

                        <input type="submit" id="confirm_order"  name="order" class="primary-btn order-submit" value="Lanjut Bayar">
                    </form></center>

                    <?php else: ?>
                        <a href="<?php echo e(route('user.home')); ?>"><input type="button"  class="primary-btn order-submit" value="Order Now"></a>
                    <?php endif; ?>
                
                <?php else: ?>
                 <?php if(!session('user')): ?>
        <div class="row">
        <form id="signupForm" action = "<?php echo e(route('user.signup')); ?>" method="post" >
            <?php echo e(csrf_field()); ?>

            <div class="col-md-12">
                <!-- Billing Details -->
                <div class="billing-details">
                    <div class="section-title">
                        <h3 class="title">Registrasikan Diri Anda</h3>
                    </div>
                    
                    <div class="form-group ">
                        <input class="input" type="text" name="txtCustomerName" id="txtCustomerName" placeholder="Full Name" required>
                    </div>
                    
                    <div class="form-group">
                        <input class="input" type="email" name="email" id="email" placeholder="Email" onkeyup="myFunction()" required>
                    </div>
                    <div id="for_duplicate-email"></div>
                    <div class="form-group">
                        <input class="input" type="text" name="txtCustomerAddress" id="txtCustomerAddress" placeholder="Address" required> 
                    </div>
                    <div class="form-group">
                        <input class="input" type="text" name="bitGender" id="bitGender" placeholder="Jenis Kelamin" required>
                    </div>
					 <div class="form-group">
                        <input class="input" type="date" name="dtmBirthDate" id="dtmBirthDate" placeholder="Tanggal Lahir" required>
                    </divd
                   
                    <div class="form-group">
                        <input class="input" type="password" name="password" id="password" placeholder="Enter Your Password" required>
                    </div>
                  
                    <br>
                        
                        <input type="submit"  name="signup" class="primary-btn order-submit" value="Registrasi">
                </form>
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
                document.getElementById("individualPrice_"+order_serial).innerHTML=x*product_price+" Rp.";
                document.getElementById("totalCost").innerHTML = msg[2]+" Rp.";
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
                document.getElementById("individualPrice_"+order_serial).innerHTML=x*product_price+" Rp.";
                document.getElementById("totalCost").innerHTML = msg[2]+" Rp.";

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
				email: {
					required: true,
					email: true
				},
				password: {
					required: true,
					minlength: 5
				},
				txtCustomerAddress: {
					required: true,
					minlength: 5
				},
				txtCustomerName: {
					required: true,
					minlength: 5
				},
				bitGender: {
					required: true,
					minlength: 5
				}
				
				
				
			},
			messages: {
				email: "Please enter a valid email address", 
				txtCustomerAddress: {
					required: "Please provide an address",
					minlength: "Your password must be at least 5 characters long"
				},
				password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long"
				},
				txtCustomerName: {
					required: "Please provide a name",
					minlength: "Your password must be at least 5 characters long"
				},
				bitGender: {
					required: "Please provide a gender",
					minlength: "Your password must be at least 5 characters long"
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

<?php echo $__env->make('store.storeLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-shopping\resources\views/store/cart.blade.php ENDPATH**/ ?>