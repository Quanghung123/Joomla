<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_custom
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
JHtml::_('jquery.framework');
$doc = JFactory::getDocument();
$document =& $doc;
$document->addScript('modules/mod_tm_bg_youtube/assets/js/jquery.rd-youtube-bg.js');
?>


<div id="player"
     class="rd-youtube-bg"
     data-video-id="<?php echo $idVideo ?>"
     data-mute="<?php echo ($params->get('mute') == '1') ? 'true' : 'false'; ?>"
     data-image-url="<?php echo($params->get('mobile_image')); ?>"
     data-start="<?php echo($params->get('start')); ?>">

    <div class="row-container">
        <div class="<?php echo $containerClass; ?>">
            <div class="<?php echo $rowClass; ?>">
                <?php echo $module->content; ?>
            </div>
        </div>
    </div>
    <?php if($params->get("play_pause")==1):?>
        <a class="btn btn-player bg_pause" data-pausetitle="<?php echo $params->get('pause_text');?>" data-playtitle="<?php echo $params->get('play_text');?>">Pause video</a>
    <?php endif;?>
</div>