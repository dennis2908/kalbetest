<?php $__env->startSection('content'); ?>


<style>
label.error {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1;
  padding:1px 20px 1px 20px;
}


</style>
    <!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

        <form id="signupForm" method="post" >
            <?php echo e(csrf_field()); ?>

            <div class="col-md-12">
                <!-- Billing Details -->
                <div class="billing-details">
                    <div class="section-title">
                        <h3 class="title">Registrasi</h3>
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
                <!-- /Billing Details -->
            </div>

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>

<!--JQUERY Validation-->
<!--/JQUERY Validation-->



<!--Duplicate Email Validation-->
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
<!--/Duplicate Email Validation-->

<!-- /SECTION -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('store.storeLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-shopping\resources\views/store/signup.blade.php ENDPATH**/ ?>