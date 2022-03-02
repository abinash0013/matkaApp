<?php include './../pages/header.php'; ?>
<?php include './../pages/sidebar.php'; ?>
<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">User Management</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="#">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">User</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">User Dashboard</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <div class="card-title">User Add Form</div>
                                <div class="ml-auto">
                                    <a href="./index.php">
                                        <button class="btn btn-primary btn-rounded">
                                            <i class="fa fa-arrow-left"></i>
                                            Back
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <label for="email2">Email Address</label>
                                        <input type="email" class="form-control" id="email2" placeholder="Enter Email">
                                        <small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" placeholder="Password">
                                    </div>
                                    <!-- <div class="form-group">
                                        <label for="disableinput">Disable Input</label>
                                        <input type="text" class="form-control" id="disableinput" placeholder="Enter Input" disabled>
                                    </div> -->
                                    <div class="form-check">
                                        <label>Gender</label><br/>
                                        <label class="form-radio-label">
                                            <input class="form-radio-input" type="radio" name="optionsRadios" value=""  checked="">
                                            <span class="form-radio-sign">Male</span>
                                        </label>
                                        <label class="form-radio-label ml-3">
                                            <input class="form-radio-input" type="radio" name="optionsRadios" value="">
                                            <span class="form-radio-sign">Female</span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Example select</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Example file input</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                    <div class="form-group">
                                        <label for="comment">Comment</label>
                                        <textarea class="form-control" id="comment" rows="5">
                                        </textarea>
                                    </div>                                    
                                    <div class="form-group">
                                        <button class="btn btn-success btn-rounded">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include './../pages/footer.php'; ?>