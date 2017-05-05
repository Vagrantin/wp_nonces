<?php 
get_header();

$bar = new mdu_myveryfirstclass;
$nonceobj = new mdu_class_create_nonce;

echo the_title();
echo "<br/>";
$bar->hello_world(); 
$nonceresult = $nonceobj -> mdu_wp_create_nonce('mdu_nonce');
echo "<pre>";
echo "<br/>";
print_r ($nonceobj);
echo "<br/>";
print_r ($nonceresult);
echo "</pre>";


get_footer();
?>
