<!-- ========== Blog - 1 Column ========== -->
<div id="blog" class="section container blog-classic" style="padding-top: 80px; padding-bottom: 30px">
    <div class="row">
        <div class="col-md-8">
            <cms:pages masterpage='news_template.php' paginate='1' limit='3'>
                <!-- Blog Post -->
                <div class="col-md-12">
                    <div class="blog-post wow fadeIn" data-wow-delay=".1s" data-wow-duration="2s">
                        <!-- Image -->
                        <a href="<?php echo $my_page_link; ?>" class="post-img"><img src="<cms:show news_image />" ></a>
                        <div class="bp-content">
                            <!-- Meta data -->
                            <div class="post-meta">
                                <div class="post-date">
                                    <i class="fa fa-calendar-o"></i>
                                    <span><cms:date k_page_date format='F d.Y'/></span>
                                </div>
                            </div>
                            <!-- / .meta -->
                            <!-- Post Title -->
                            <a href="<?php echo $my_page_link; ?>" class="post-title">
                                <h3><?php echo $my_title; ?></h3>
                            </a>
                            <!-- Blurb -->
                            <cms:excerptHTML count='75' ignore='img'>
                                <?php echo $my_content; ?>
                            </cms:excerptHTML>
                            <!-- Link -->
                            <a href="<?php echo $my_page_link; ?>" class="btn btn-small">Read More</a>
                        </div>
                        <!-- / .bp-content -->
                    </div>
                    <!-- / .blog-post -->
                </div>
                <!-- / .col-md-12 -->
                <!-- Pagination -->
                <cms:if k_paginated_bottom>
                    <nav class="blog-pagination mb-sm-100">
                        <ul class="pagination">
                            <cms:if k_paginator_required>
                                <li>
                                    <a href="<cms:show k_paginate_link_prev />" aria-label="Previous">
                                        <span aria-hidden="true"><i class="fa fa-angle-double-left"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <cms:show k_current_page />
                                    </a>
                                </li>
                                <li>
                                    <a href="<cms:show k_paginate_link_next />" aria-label="Next">
                                        <span aria-hidden="true"><i class="fa fa-angle-double-right"></i></span>
                                    </a>
                                </li>
                            </cms:if>
                        </ul>
                    </nav>
                </cms:if>
            </cms:pages>
        </div>
        <!-- / .col-md-8 -->
    </div>
    <!-- / .row -->
</div>
