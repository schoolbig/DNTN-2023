<?php
include 'shared/header.php'
?>
    <!-- content @s -->
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block">
                        <div class="row g-gs">
                            <div class="col-12">
                                <div class="card card-bordered">
                                    <div class="card-inner">
                                        <div class="card-title mb-4">
                                            <h3 class="title">Welcome to CMS Dashboard!</h3>
                                        </div>
                                        <div class="row g-gs">
                                            <div class="col-xxl-3">
                                                <div class="fake-class">
                                                    <h5 class="title">Get Started</h5>
                                                    <div class="nk-block-des text-soft">
                                                        <p>You can customize your site from here.</p>
                                                    </div>
                                                    <a href="#" class="btn btn-primary btn-lg mt-4">Customize Site</a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-xxl-3">
                                                <div class="fake-class">
                                                    <h5 class="title">Next Steps</h5>
                                                    <ul class="link-list is-compact pb-0">
                                                        <li><a href="post-add.html"><em class="icon ni ni-file-text"></em><span>Write a blog post</span></a></li>
                                                        <li><a href="page-add.html"><em class="icon ni ni-property-add"></em><span>Add an about page</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-laptop"></em><span>View your site</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-xxl-3">
                                                <div class="fake-class">
                                                    <h5 class="title">At a Glance</h5>
                                                    <ul class="link-list is-compact pb-0">
                                                        <li><a href="post-list.html"><em class="icon ni ni-edit-fill"></em><span>35 Posts</span></a></li>
                                                        <li><a href="page-list.html"><em class="icon ni ni-files"></em><span>21 Pages</span></a></li>
                                                        <li><a href="comments.html"><em class="icon ni ni-comments"></em><span>18 Comments</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-4 col-xxl-3">
                                                <div class="fake-class">
                                                    <h5 class="title">More Actions</h5>
                                                    <ul class="link-list is-compact pb-0">
                                                        <li><a href="#"><em class="icon ni ni-grid-fill"></em><span>Manage widgets or menu</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-comments"></em><span>Trun comments off or on</span></a></li>
                                                        <li><a href="#"><em class="icon ni ni-more-h"></em><span>More about getting started</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .row -->
                                    </div><!-- .card-inner -->
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-12 col-xxl-6">
                                <div class="card card-bordered h-100">
                                    <div class="card-inner border-bottom">
                                        <div class="card-title-group g-2">
                                            <div class="card-title card-title-sm">
                                                <h6 class="title">Quick Draft</h6>
                                            </div>
                                        </div>
                                    </div><!-- .card-inner -->
                                    <div class="card-inner">
                                        <form action="#">
                                            <div class="row g-gs align-center">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <label class="form-label" for="title">Title</label>
                                                            <input type="text" class="form-control" id="title" placeholder="Title">
                                                        </div>
                                                    </div>
                                                </div><!-- col -->
                                                <div class="col-12">
                                                    <div class="form-control-wrap">
                                                        <label class="form-label" for="content">Content</label>
                                                        <textarea class="form-control form-control-sm no-resize" id="content" placeholder="What's on your mind?!"></textarea>
                                                    </div>
                                                    <div class="form-group mt-4">
                                                        <button type="submit" class="btn btn-primary">Save Draft</button>
                                                    </div>
                                                </div><!-- col -->
                                            </div><!-- .row -->
                                        </form><!-- form -->
                                    </div>
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-md-6 col-xxl-3">
                                <div class="card card-bordered h-100">
                                    <div class="card-inner mb-n2">
                                        <div class="card-title-group">
                                            <div class="card-title card-title-sm">
                                                <h6 class="title">Viewed pages by users</h6>
                                            </div>
                                            <div class="card-tools">
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle dropdown-indicator btn btn-sm btn-outline-light btn-white" data-bs-toggle="dropdown">30 Days</a>
                                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><span>7 Days</span></a></li>
                                                            <li><a href="#"><span>15 Days</span></a></li>
                                                            <li><a href="#"><span>30 Days</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-tb-list is-compact">
                                        <div class="nk-tb-item nk-tb-head">
                                            <div class="nk-tb-col"><span>Page</span></div>
                                            <div class="nk-tb-col text-end"><span>Page Views</span></div>
                                        </div><!-- .nk-tb-head -->
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <span class="tb-sub"><span>/</span></span>
                                            </div>
                                            <div class="nk-tb-col text-end">
                                                <span class="tb-sub tb-amount"><span>2,879</span></span>
                                            </div>
                                        </div><!-- .nk-tb-item -->
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <span class="tb-sub"><span>/subscription/index.php</span></span>
                                            </div>
                                            <div class="nk-tb-col text-end">
                                                <span class="tb-sub tb-amount"><span>2,094</span></span>
                                            </div>
                                        </div><!-- .nk-tb-item -->
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <span class="tb-sub"><span>/general/index.php</span></span>
                                            </div>
                                            <div class="nk-tb-col text-end">
                                                <span class="tb-sub tb-amount"><span>1,634</span></span>
                                            </div>
                                        </div><!-- .nk-tb-item -->
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <span class="tb-sub"><span>/crypto/index.php</span></span>
                                            </div>
                                            <div class="nk-tb-col text-end">
                                                <span class="tb-sub tb-amount"><span>1,497</span></span>
                                            </div>
                                        </div><!-- .nk-tb-item -->
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <span class="tb-sub"><span>/invest/index.php</span></span>
                                            </div>
                                            <div class="nk-tb-col text-end">
                                                <span class="tb-sub tb-amount"><span>1,349</span></span>
                                            </div>
                                        </div><!-- .nk-tb-item -->
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <span class="tb-sub"><span>/subscription/profile.html</span></span>
                                            </div>
                                            <div class="nk-tb-col text-end">
                                                <span class="tb-sub tb-amount"><span>984</span></span>
                                            </div>
                                        </div><!-- .nk-tb-item -->
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <span class="tb-sub"><span>/general/index-crypto.html</span></span>
                                            </div>
                                            <div class="nk-tb-col text-end">
                                                <span class="tb-sub tb-amount"><span>879</span></span>
                                            </div>
                                        </div><!-- .nk-tb-item -->
                                    </div><!-- .nk-tb-list -->
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-md-6 col-xxl-3">
                                <div class="card card-bordered h-100">
                                    <div class="card-inner border-bottom">
                                        <div class="card-title-group g-2">
                                            <div class="card-title card-title-sm">
                                                <h6 class="title">Recent Activities</h6>
                                            </div>
                                        </div>
                                    </div><!-- .card-inner -->
                                    <ul class="nk-activity">
                                        <li class="nk-activity-item">
                                            <div class="nk-activity-media user-avatar bg-success"><img src="./images/avatar/c-sm.jpg" alt=""></div>
                                            <div class="nk-activity-data">
                                                <div class="label">Keith Jensen posted a comment.</div>
                                                <span class="time">2 hours ago</span>
                                            </div>
                                        </li>
                                        <li class="nk-activity-item">
                                            <div class="nk-activity-media user-avatar bg-warning">HS</div>
                                            <div class="nk-activity-data">
                                                <div class="label">Harry Simpson posted a comment.</div>
                                                <span class="time">2 hours ago</span>
                                            </div>
                                        </li>
                                        <li class="nk-activity-item">
                                            <div class="nk-activity-media user-avatar bg-azure">SM</div>
                                            <div class="nk-activity-data">
                                                <div class="label">Stephanie edited his post.</div>
                                                <span class="time">2 hours ago</span>
                                            </div>
                                        </li>
                                        <li class="nk-activity-item">
                                            <div class="nk-activity-media user-avatar bg-pink">TM</div>
                                            <div class="nk-activity-data">
                                                <div class="label">Timothy Moreno add a new post.</div>
                                                <span class="time">2 hours ago</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div><!-- .card -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
    <!-- content @e -->
<?php
include 'shared/footer.php'
?>