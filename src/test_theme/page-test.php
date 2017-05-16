<?php 
get_header();

$tag = 'wp_verify_nonce_failed';
$bar            = new mdu_myveryfirstclass;
$createNonceObj = new mdu_class_create_nonce;
$nonceUrlObj    = new mdu_class_nonce_url;
$nonceTickObj   = new mdu_class_nonce_tick;
$nonceFieldObj  = new mdu_class_nonce_field;
$nonceAysObj    = new mdu_class_nonce_ays;

$nonceName   = 'mdu_nonce';
$nonceUrl    = 'admin_url';
$doSomeThing = "i'm doing something";
$logOut = 'log out';

echo the_title();
echo "<br/>";

# my first test calling an object
echo "# my first test calling an object";
echo "<pre>";
print_r ($bar->hello_world());
echo "</pre>";

# Calling the create nonce
echo "# Calling the create nonce";
$createNonceResult = $createNonceObj -> mdu_wp_create_nonce($nonceName);
echo "<pre>";
print_r ($createNonceResult);
echo "</pre>";

# Calling the nonce_url
echo "# Calling the nonce_url";
$nonceUrl = $nonceUrlObj -> mdu_wp_nonce_url($nonceUrl, $doSomeThing, $nonceName);
echo "<pre>";
print_r ($nonceUrl);
echo "</pre>";

# Calling the nonce_tick
echo "# Calling the nonce_tick";
$nonceTick = $nonceTickObj -> mdu_wp_nonce_tick();
echo "<pre>";
echo "In Seconds";
echo "<br/>";
print_r ($nonceTick);
echo "<br/>";
echo "In Minutes";
echo "<br/>";
$nonceTickMin = $nonceTick / 60;
print_r ($nonceTickMin);
echo "<br/>";
echo "In Hours";
echo "<br/>";
$nonceTickHour = $nonceTickMin / 60;
print_r ($nonceTickHour);
echo "</pre>";

# Calling the nonce_field
echo "# Calling the nonce_field";
echo "<pre>";
# the retrun value is an hidden input !!
$nonceField = $nonceFieldObj -> mdu_wp_nonce_field($doSomeThing, $nonceName);
echo "</pre>";

# Calling the nonce_ays
#echo "# Calling the nonce_ays";
#$nonceAys = $nonceAysObj -> mdu_wp_nonce_ays($logOut);
#echo "<pre>";
#print_r ($nonceAys);
#echo "</pre>";

# Calling the did_action function
echo "# Calling the did_action function";
echo "<pre>";
print_r ($tag);
echo "<br/>";
print_r (my_did_action($tag));
echo "<br/>";
print_r ($wp_actions);
echo "</pre>";


get_footer();
?>
