<!-- ========== Sidebar ========== -->
<aside class="col-md-offset-1 col-md-3 sidebar">
    <!-- Recent Posts - Widget -->
    <cms:if k_is_page>
        <div class="col-md-12 ws-s recent-posts-widget">
            <h5 class="header-widget">Latest News</h5>
            <div class="widget-item">
                <cms:pages masterpage='news_template.php' limit='4'>
                    <a href="<?php echo $my_page_link; ?>">
                        <h6 class="h-alt">          
                            <?php echo $my_title; ?>
                        </h6>
                    </a>
                    <span><cms:date k_page_date format='F d.Y'/></span>
                </cms:pages>
            </div>
        </div>
    </cms:if>
    <!-- / .recent-posts-widget -->
</aside>
<!-- / .sidebar -->
