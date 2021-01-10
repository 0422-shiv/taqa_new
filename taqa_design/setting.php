<?php include( 'include/header.php');?>
<!-- Header Section-->
<section class="dashboard-header">
    <div class="container">
        <div class="form-card">
            <div class="add_category">
                <h4 class="add_name">Setting</h4>
            </div>
            <form action="#" method="post">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="name">Change Logo</label>
                            <input type="file" class="form-control" id="name" placeholder="Category name">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="icon">Admin Email</label>
                            <input type="email" class="form-control" id="name" placeholder="user@gmail.com">
                        </div>
                    </div>
                    <hr>
                    <div class="add_category">
                        <h4 class="add_name">SMTP Setting</h4>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="name">SMTP Host</label>
                            <input type="text" class="form-control" id="name" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="icon">SMTP Port</label>
                            <input type="text" class="form-control" id="name" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="name">SMTP Username</label>
                            <input type="text" class="form-control" id="name" placeholder="">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="icon">SMTP Password</label>
                            <input type="password" class="form-control" id="name" placeholder="">
                        </div>
                    </div>
                    <hr>
                    <div class="add_category">
                        <h4 class="add_name">AD POST Setting</h4>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="name">Ads Auto Approval</label>
                            <select class="form-control">
                                <option selected disabled value>Select One</option>
                                <option>Disable</option>
                                <option>Enable</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="icon">Max Image Upload</label>
                            <input type="number" class="form-control" id="name" placeholder="3">
                        </div>
                    </div>
                      <div class="col-md-12">
                        <div class="form-group">
                            <label for="icon">Add Expiry</label>
                            <input type="text" class="form-control" id="name" placeholder="3 months">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="View-btn btn">Save</button>
                        <button type="submit" class="View-btn btn">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<?php include( 'include/footer.php');?>