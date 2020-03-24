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
  'facebook' => $facebook,
  'twitter' => $twitter,
  'linkedIn' => $linkedIn,
  'instagram' => $instagram
] = $content;
?>

<a target="_blank" href="<?php echo $facebook['link'] ?>" class="ml-1 mr-1"><img src="<?php echo $facebook['icon'] ?>" alt="<?php echo $facebook['alt'] ?>"></img></a>
<a target="_blank" href="<?php echo $twitter['link'] ?>" class="ml-1 mr-1"><img src="<?php echo $twitter['icon'] ?>" alt="<?php echo $twitter['alt'] ?>"></img></a>
<a target="_blank" href="<?php echo $linkedIn['link'] ?>" class="ml-1 mr-1"><img src="<?php echo $linkedIn['icon'] ?>" alt="<?php echo $linkedIn['alt'] ?>"></img></a>
<a target="_blank" href="<?php echo $instagram['link'] ?>" class="ml-1 mr-1"><img src="<?php echo $instagram['icon'] ?>" alt="<?php echo $instagram['alt'] ?>"></img></a>