<?php
if (! defined('ABSPATH')) exit;

do_action('wplms_single_course_content_end');

?>
<style>
    .theTabsSide {
        max-width: 370px;
        width: 100%;
        padding: 23px 16px;
        border-radius: 12px;
        box-shadow: 0px 0px 8px 0px #0000001A;
        background: #fff;
    }

    .theTabsSide .srs_title_tab {
        display: flex;
        border: none;
        gap: 10px;
        justify-content: center;
        align-items: center;
    }

    .theTabsSide .srs_title_tab a {
        text-align: center !important;
        width: 145px;
        padding: 12px !important;
        border-radius: 65px;
        background: #70479B1A;
        border: 0.5px solid #70479B;
        color: #70479B;
        font-family: "Plus Jakarta Sans", Sans-serif;
        font-size: 18px;
        letter-spacing: normal;
        font-weight: 600;
        line-height: 21.6px;
        text-align: left;
        text-transform: capitalize !important;
    }

    .theTabsSide .srs_title_tab a:hover {
        background: #70479B !important;
        border: 0.5px solid #70479B !important;
        color: #fff;
    }

    .theTabsSide .srs_title_tab .active a:hover {
        background: #70479B1A !important;
        border: 0.5px solid #70479B !important;
        color: #70479B;
    }

    .theTabsSide .srs_title_tab .active a {
        width: 145px;
        border-radius: 65px;
        background: #70479B;
        border: 0.5px solid #70479B;
    }
</style>
<div class="theTabsSide">
    <ul class="nav nav-tabs srs_title_tab">
        <li class="active"><a data-toggle="tab" href="#menu0" aria-expanded="true">For You</a></li>
        <li class=""><a data-toggle="tab" href="#menu1" aria-expanded="false">For Business</a></li>
    </ul>

    <div class="tab-content">
        <div id="menu0" class="tab-pane fade active in">
        </div>
        <div id="menu1" class="tab-pane fade">
            <div class="the-bulk-purchase-box">
                <?php
                echo do_shortcode('[bulk_purchase_single]');
                ?>
                <div class="the-feautures-bluck-purchase">
                    <h2>Buying more than one of the same courses?</h2>
                    <ul>
                        <li>50% discount for orders of 10+ courses</li>
                        <li>65% discount for orders of 25+ courses</li>
                        <li>75% discount for orders of 50+ courses</li>
                    </ul>
                    <h2>Looking for a more personalised package?</h2>
                    <a href="<?php echo site_url(); ?>/business/"><u>contact us now</u></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>