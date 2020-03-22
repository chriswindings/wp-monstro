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

<a href="<?php echo $facebook['icon'] ?>" class="ml-1 mr-1"><img src="<?php echo $facebook['icon'] ?>" alt="<?php echo $facebook['alt'] ?>"></img></a>
<a href="<?php echo $twitter['icon'] ?>" class="ml-1 mr-1"><img src="<?php echo $twitter['icon'] ?>" alt="<?php echo $twitter['alt'] ?>"></img></a>
<a href="<?php echo $linkedIn['icon'] ?>" class="ml-1 mr-1"><img src="<?php echo $linkedIn['icon'] ?>" alt="<?php echo $linkedIn['alt'] ?>"></img></a>
<a href="<?php echo $instagram['icon'] ?>" class="ml-1 mr-1"><img src="<?php echo $instagram['icon'] ?>" alt="<?php echo $instagram['alt'] ?>"></img></a>