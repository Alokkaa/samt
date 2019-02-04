@include('samt.header')

        <div class="container-wrapper">
            <div id="container">
                <!-- start container -->
                <div class="center">
                    <div class="page-wrapper">

                        <div id="post-410" class="post-410 page type-page status-publish hentry">
                            <div class="vc_row wpb_row vc_row-fluid boxed">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_content_element vc_portfolio_items">
                                                <ul id="filters" class="option-set" data-option-key="filter">
                                                    <li class="filter-cat"><a href="#filter" data-option-value="*" class="selected">All</a></li>
                                                    <li class="filter-cat"><a href="#filter" data-option-value=".art">art</a></li>
                                                    <li class="filter-cat"><a href="#filter" data-option-value=".business">business</a></li>
                                                    <li class="filter-cat"><a href="#filter" data-option-value=".design">design</a></li>
                                                    <li class="filter-cat"><a href="#filter" data-option-value=".wordpress">wordpress</a></li>
                                                </ul>
                                                <div class="clear"></div>
                                                <div class="pego-isotope-wrapper portfolio-items-wrapper portfolio-items-1180 portfolio-type2">
                                                   
                                                    
                                                    
                                                    
                                                    
                                                    @foreach($videos as $video)
                                                    <div class="portfolio-items-single portfolio-small-item portfolio-columns4 isotope-item business design">
                                                        <a class="portfolio-items-single-url shape-normal youtube" href="https://www.youtube.com/watch?v=dSLW6rihvpI" title="Camera and lens"><iframe width="600" max-height="35px" src="https://www.youtube.com/embed/dSLW6rihvpI" frameborder="0"></iframe>
                                                            <div class="portfolio-items-single-overlay-details shape- type-light">
                                                                <div class="portfolio-items-single-overlay-table">
                                                                    <div class="portfolio-items-single-overlay-table-cell">
                                                                        <h1 class="portfolio-items-single-overlay-details-title">Camera and lens</h1>
                                                                        <div class="clear"></div>
                                                                        <div class="portfolio-items-single-overlay-details-categories">business, design</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    @Endforeach
                                               
                                                   
                                                   
                                               
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
            <!-- end container -->
            <div class="clear"></div>
        </div>

@include('samt.footer')
  
    <script type="text/javascript">
        var search_placeholder = '';
        var post_comments_count = '0';
    </script>

</body>
</html>