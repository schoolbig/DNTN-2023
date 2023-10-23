</div>
    <!-- wrap @e -->
</div>
    <!-- main @e -->
</div>
<!-- app-root @e -->
<!-- Edit Post-->
<div class="modal fade" tabindex="-1" role="dialog" id="editPost">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body modal-body-md">
                <h5 class="modal-title">Quick Edit</h5>
                <form action="#" class="mt-4">
                    <div class="row g-gs">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="editTitle">Title</label>
                                <input type="text" class="form-control" id="editTitle" placeholder="Title" value="Hello World!">
                            </div>
                        </div><!-- .col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="editSlug">Slug</label>
                                <input type="text" class="form-control" id="editSlug" placeholder="Slug" value="hello-world">
                            </div>
                        </div><!-- .col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Date</label>
                                <div class="form-control-wrap">
                                    <div class="form-icon form-icon-right">
                                        <em class="icon ni ni-calendar"></em>
                                    </div>
                                    <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Categories</label>
                                <div class="form-control-wrap">
                                    <select class="form-select js-select2" multiple="multiple" data-placeholder="Categories">
                                        <option value="uncategorized">Uncategorized</option>
                                        <option value="covid">Covid</option>
                                        <option value="seo">SEO</option>
                                        <option value="website">Website</option>
                                    </select>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="editTags">Tags</label>
                                <input type="text" class="form-control" id="editTags" placeholder="Tags" value="—">
                            </div>
                        </div><!-- .col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Status</label>
                                <div class="form-control-wrap">
                                    <select class="form-select js-select2" data-placeholder="Status">
                                        <option value="published">Published</option>
                                        <option value="pending">Pending</option>
                                        <option value="draft">Draft</option>
                                    </select>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-md-6">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="editComment">
                                <label class="custom-control-label" for="editComment">Allow Comments</label>
                            </div>
                        </div><!-- .col -->
                        <div class="col-md-6">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="editPings">
                                <label class="custom-control-label" for="editPings">Allow Pings</label>
                            </div>
                        </div><!-- .col -->
                        <div class="col-12">
                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                <li>
                                    <button type="submit" data-bs-dismiss="modal" class="btn btn-primary">Update</button>
                                </li>
                                <li>
                                    <a href="#" class="link link-light" data-bs-dismiss="modal">Cancel</a>
                                </li>
                            </ul>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </form>
            </div><!-- .modal-body -->
        </div><!-- .modal-content -->
    </div><!-- .modal-dialog -->
</div><!-- .modal -->
<!-- JavaScript -->
<script src="./assets/js/bundle.js?ver=3.2.2"></script>
<script src="./assets/js/scripts.js?ver=3.2.2"></script>
<link rel="stylesheet" href="./assets/css/editors/quill.css?ver=3.2.2">
<script src="./assets/js/libs/editors/quill.js?ver=3.2.2"></script>
<script src="./assets/js/editors.js?ver=3.2.2"></script>
<script src="./assets/js/libs/datatable-btns.js?ver=3.2.2"></script>
</body>

</html>