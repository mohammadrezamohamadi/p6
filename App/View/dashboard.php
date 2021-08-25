<link href="../assets/css/profile.css" rel="stylesheet" >
<link href="../assets/css/style.css" rel="stylesheet" >


<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://images.pexels.com/photos/614810/pexels-photo-614810.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                       Dashboard 
                                    </h5>
                                    <br>
                                    
                                    
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" id="home-tab" data-toggle="tab" href="/profile/index" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  active" id="dashboard-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Dashboard</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>Name :</p>
                            <p>Email :</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row mb-3">
                                            <div class="col-md-6">File size : </div>
                                            <div class="col-md-6"> </div>

                                        </div>
            
                                        <div class="row mb-3">
                                           <div class="col-md-6">Credit : </div>
                                           <div class="col-md-6"> </div>
                                        </div>
                                        <div class="row mb-3">
                                           <div class="col-md-6">Downloads : </div>
                                           <div class="col-md-6"> </div>
                                        </div>
                            </div>
        
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>