<?php
/**
 * The social sharing icons
 *
 *
 * @package wp-monstro
 * @subpackage wp-monstro
 * @since 1.0.0
 */
$content = require(get_template_directory() . "/models/social-sharing.php");
[
  'instagram' => $instagram,
  'facebook' => $facebook,
  'linkedIn' => $linkedIn,
  'twitter' => $twitter
] = $content;
?>

<a href="#" class="ml-1 mr-1"><img src="/wp-content/uploads/2020/03/faceook-icon.svg" alt="facebook"></img></a>
<a href="#" class="ml-1 mr-1"><img src="/wp-content/uploads/2020/03/twitter-icon.svg" alt="twitter"></img></a>
<a href="#" class="ml-1 mr-1"><img src="/wp-content/uploads/2020/03/linkedIn-icon.svg" alt="linkedIn"></img></a>
<a href="#" class="ml-1 mr-1"><img src="/wp-content/uploads/2020/03/instagram-icon.svg" alt="instagram"></img></a>
