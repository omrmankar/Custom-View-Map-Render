<?php global $language; 
if($language->language =='zh-hans'){
   echo '<script type="text/javascript" src="http://maps.google.cn/maps/api/js?key=AIzaSyCY88yWZw0rhL2BmXGZuBlJgpfo2huPoU4&language=zh-CN&region=cn"></script>';
}else{
   echo '<script type="text/javascript" src="http://maps.google.cn/maps/api/js?key=AIzaSyCY88yWZw0rhL2BmXGZuBlJgpfo2huPoU4"></script>';
}

?>


<div class="<?php print $classes; ?>">
  <?php print render($title_prefix); ?>
  <?php if ($title): ?>
    <?php print $title; ?>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  <?php if ($header): ?>
    <div class="view-header">
      <?php print $header; ?>
    </div>
  <?php endif; ?>

  <?php if ($exposed): ?>
    <div class="view-filters">
      <?php print $exposed; ?>
    </div>
  <?php endif; ?>

  <?php if ($attachment_before): ?>
    <div class="attachment attachment-before">
      <?php print $attachment_before; ?>
    </div>
  <?php endif; ?>

  <?php if ($rows): ?>
    <div class="view-content">
       <div id="map" style="height: 500px; width: auto;"></div>
       <?php print $rows; ?>

       <script type="text/javascript">
         InitMap();
       </script>
    </div>
  <?php elseif ($empty): ?>
    <div class="view-empty">
      <?php print $empty; ?>
    </div>
  <?php endif; ?>

  <?php if ($pager): ?>
    <?php print $pager; ?>
  <?php endif; ?>

  <?php if ($attachment_after): ?>
    <div class="attachment attachment-after">
      <?php print $attachment_after; ?>
    </div>
  <?php endif; ?>

  <?php if ($more): ?>
    <?php print $more; ?>
  <?php endif; ?>

  <?php if ($footer): ?>
    <div class="view-footer">
      <?php print $footer; ?>
    </div>
  <?php endif; ?>

  <?php if ($feed_icon): ?>
    <div class="feed-icon">
      <?php print $feed_icon; ?>
    </div>
  <?php endif; ?>

</div><?php /* class view */ ?>

<style type="text/css">
  #block-views-department-gh-mogh-map {
    padding-top: 30px;
  }
  .infobox {
    max-width: 160px;
  }
  .infobox * {
    color: #004181;
    font-size: 14px !important;
    font-family: Roboto, Arial !important;
    letter-spacing: 1px;
    font-weight: 400;
  }
  .infobox h3 {
    margin: 0px;
  }
  .gm-style-iw + div {display: none;}
  .gm-style-iw {text-align:center;}
</style>