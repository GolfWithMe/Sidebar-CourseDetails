<?php
//GWMFile
/**
* @copyright (C) 2015 iJoomla, Inc. - All rights reserved.
* @license GNU General Public License, version 2 (http://www.gnu.org/licenses/gpl-2.0.html)
* @author iJoomla.com <webmaster@ijoomla.com>
* @url https://www.jomsocial.com/license-agreement
* The PHP code portions are distributed under the GPL license. If not otherwise stated, all images, manuals, cascading style sheets, and included JavaScript *are NOT GPL, and are released under the IJOOMLA Proprietary Use License v1.0
* More info at https://www.jomsocial.com/license-agreement
*/
defined('_JEXEC') or die();
//print_r($course);
?>
 <?php if ($course) {  ?> 
    <div class="joms-blankslate"><?php echo $course->Name ?></div>
  
       <div class="joms-media__body">
          <p><?php echo $course->Address1; ?>
          <?php if($course->Address2!='') { ?>
          <br /><?php echo $course->Address2; ?>
          <?php } ?>
          <br /><?php echo $course->City; ?>, <?php echo $course->State; ?> <?php echo $course->ZipCode; ?></p>
          <p>Course Type : <?php echo $course->CourseType; ?></p>
          <p>Main : <?php echo $course->Phone; ?> 
          <?php if($course->BPhone!='') { ?>
          <br />Booking : <?php echo $course->BPhone; ?>
          <?php } ?>
          </p>
          <p>Holes : <?php echo $course->Holes; ?></p>
          <p>Price Range : <?php echo $course->priceRange; ?></p>
          <p>Web Site : <a href="<?php echo $course->URL; ?>" target="_blank"><?php echo $course->URL; ?></a></p>
          <?php if($course->BURL!='') { ?>
          <p style="text-align:center;"><a href="<?php echo $course->BURL; ?>" target="_blank">Book a Tee Time</a></p>
          <?php } ?>
          <?php if($course->locMap!='') { ?>
          <p style="text-align:center;"><a href="<?php echo $course->locMap; ?>" target="_blank">MAP</a></p>
          <?php } ?>
          
       </div>
<?php } else { ?>
    <small>Not Avaialable</small>
<?php } ?>

    
   
   