<?php
include('header.php')
?>

<div class="container-fluid" >
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <form action="" method="POST">
                <div class="container p-5">
                    <div><h2> Enter Your Delivery Details</h2></div>
                    <div class=" row p-2">
                        <div class="col-md-12">
                            <label for="name"> Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                        </div>
                    </div>
                    <div class=" row p-2">
                        <div class="col-md-6 col-sm-12">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="@yourmail.com">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="phone"> Phone number</label>
                            <input type="text" class="form-control" id="phone" name="phone">
                        </div> 
                    </div> 
                        <div class=" row p-2">
                            <div class="col-md-6 col-sm-12">
                                <label for="location">Location</label>
                                <input type="text" name="location" id="location" class="form-control">
                            </div>
                        </div>
                        <div class="p-2"> 
                        <input type="submit" class="btn btn-primary" value="Submit" name="submit"></button>
                        </div>  
                </div>
            </form>
        </div>
</div>

        <?php
        include('footer.php')

        ?>