
  $page_id = 0;
  if (isset($_REQUEST['post']) || isset($_REQUEST['post_ID'])) {
    $page_id = empty($_REQUEST['post_ID']) ? $_REQUEST['post'] : $_REQUEST['post_ID'];

  }

  $current_page_template = get_post_meta($page_id,'_wp_page_template',true);
  if(! in_array($current_page_template, array('templet-part/lendin.php'))){
    return $prefix ;
  }
