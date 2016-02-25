<?php
$upload_node = node_load(100);
$content = field_collection_item_load($upload_node->field_col_content[LANGUAGE_NONE][0]['value']);
?>
<div class="container-fluid ">
    <div class="container">
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <div class="left_col">
                <img src="/sites/all/themes/fdc_bootstrap/img/dogpark_form_legend.jpg" class="img-responsive" alt="" />
                <h2>Be a part of the dog park!</h2>
                <h3>Just send us your photo or video by filling the form below.</h3>
                <?php print render(drupal_get_form('skivers_review_form')); ?>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-9">
            <div class="right_col">
                <?php if (!empty($content->field_content_heading[LANGUAGE_NONE][0]['value'])) : ?>
                    <h1 class="page-header">
                        <?php echo $content->field_content_heading[LANGUAGE_NONE][0]['value']; ?>
                    </h1>
                <?php else: ?>
                    <?php if (!empty($title)): ?>
                        <h1 class="page-header">
                            <?php print $title; ?>
                        </h1>
                    <?php endif; ?>
                <?php endif; ?>

                <?php if (!empty($content->field_content_body[LANGUAGE_NONE][0]['value'])) : ?>
                    <?php echo $content->field_content_body[LANGUAGE_NONE][0]['value']; ?>
                <?php endif; ?>

                <div class="filters">
                    <p class="title">Filter results ></p>
                    <div class="btn btn-primary filter" data-filter="all">All</div>
                    <div class="btn btn-primary filter" data-filter=".photo"><span class="glyphicon glyphicon-picture"></span></div>
                    <div class="btn btn-primary filter" data-filter=".video"><span class="glyphicon glyphicon-facetime-video"></span></div>
                    <div class="btn btn-primary sort" data-sort="myorder:asc"><span class="glyphicon glyphicon-chevron-up"></span></div>
                    <div class="btn btn-primary sort" data-sort="myorder:desc"><span class="glyphicon glyphicon-chevron-down"></span></div>
                    <p class="title" style="padding-left:30px;">Search by keyword ></p>
                    <input type="text" id="input_mix" class="form-control" placeholder="Type your search here">
                </div>

                <div id="mix_container">
                    <?php $collection = skivers_review_mixitup(); ?>
                    <?php if (!empty($collection)) : ?>
                        <?php foreach ($collection as $items) : ?>
                            <?php $imgUrl = skivers_review_product_image($items->image_fid); ?>
                            <div class="col-md-4 mix all photo" data-myorder="<?php echo $items->uid; ?>">
<!--                                <img src="--><?php //echo image_style_url('dog_park', $imgUrl->uri); ?><!--"   class="img-responsive  " /> -->

                                <!-- <div class="product_name"></div> -->

                                <?php if (!empty($items->product_name)): ?>
                                    <div class="product_name"><strong><?php echo $items->product_name; ?></strong></div>
                                <?php endif; ?>

                                <?php if (!empty($items->first_name) && !empty($items->last_name)): ?>
                                    <div class="user_name">By <?php echo $items->first_name . " " . $items->last_name; ?></div>
                                <?php endif; ?>

                                <div class="share">Share buttons</div>

                            </div>
                            <?php if (!empty($items->youtube_url_id)): ?>
                                <div class="col-md-4 mix all video" data-myorder="<?php echo $items->uid; ?>">
                                    <?php if (!empty($items->youtube_url_id)): ?>

                                        <span class="youtube_play_btn"></span>
                                        <a href="//www.youtube.com/watch?v=<?php echo $items->youtube_url_id; ?>" target="_blank">
                                            <img class="img-responsive" src="http://img.youtube.com/vi/<?php echo $items->youtube_url_id; ?>/hqdefault.jpg"/>
                                        </a>
                                    <?php endif; ?>

                                    <!-- <div class="product_name"></div> -->

                                    <?php if (!empty($items->product_name)): ?>
                                        <div class="product_name"><strong><?php echo $items->product_name; ?></strong></div>
                                    <?php endif; ?>

                                    <?php if (!empty($items->first_name) && !empty($items->last_name)): ?>
                                        <div class="user_name">By <?php echo $items->first_name . " " . $items->last_name; ?></div>
                                    <?php endif; ?>

                                    <div class="share">Share buttons</div>

                                </div>
                            <?php endif; ?>

                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                <div class="pager-list">
                    <!-- Pagination buttons will be generated here -->
                </div>

            </div>
        </div>
    </div>
</div>
