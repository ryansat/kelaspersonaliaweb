<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 *
 * @package   theme_mb2nl
 * @copyright 2017 - 2019 Mariusz Boloz (www.mb2themes.com)
 * @license   Commercial https://themeforest.net/licenses
 *
 */

defined('MOODLE_INTERNAL') || die();

$sidePre = theme_mb2nl_isblock($PAGE, 'side-pre');
$sidePost = theme_mb2nl_isblock($PAGE, 'side-post');
$sidebarPos = theme_mb2nl_theme_setting($PAGE, 'sidebarpos', 'right');
$sidebars = theme_mb2nl_theme_setting($PAGE, 'fpsidebars');
$sidebar = ($sidePre || $sidePost);
$contentCol = 'col-md-12';
$sidePreCol = 'col-md-3';
$sidePostCol = 'col-md-3';

if ($sidePre && $sidePost)
{
	$contentCol = 'col-md-6';

	if ($sidebarPos === 'classic')
	{
		$contentCol .= ' order-2';
		$sidePreCol .= ' order-1';
		$sidePostCol .= ' order-3';
	}
	elseif ($sidebarPos === 'left')
	{
		$contentCol .= ' order-3';
		$sidePreCol .= ' order-1';
		$sidePostCol .= ' order-2';
	}

}
elseif($sidePre || $sidePost)
{
	$contentCol = 'col-md-9';

	if ($sidebarPos === 'classic')
	{
		$contentCol .= ' order-2';
		$sidePreCol .= ' order-1';
		$sidePostCol .= ' order-3';
	}
	elseif ($sidebarPos === 'left')
	{
		$contentCol .= ' order-3';
		$sidePreCol .= ' order-1';
		$sidePostCol .= ' order-2';
	}
}

?>
<?php echo $OUTPUT->theme_part('head'); ?>
<?php echo $OUTPUT->theme_part('header'); ?>
<?
    //php echo $OUTPUT->theme_part('region_slider'); 
?>

<div class="theme-title color: #ffa500; title-center title-s style-1" style="margin:0 0 30px 0;"><h1 class="title"><span>SELAMAT DATANG DI KELAS PERSONALIA</span></h1>
    <h3 style="margin:0 0 30px 0;">
       BERGABUNGLAH BERSAMA KAMI SEGERA DAFTARKAN DIRI ANDA 
    </h3>
    <h5>
       PT KELAS PERSONALIA INDONESIA
    </h5>
    <br>
    <h5>
      (SK MENKUMHAM NOMOR: AHU-0002916 AH.01.01 TAHUN 2020)
    </h5>
</div>


<aside id="block-region-slider" class="slider style-none block-region" data-blockregion="slider" data-droptarget="1"><section id="inst78" class=" block_mb2slider block  card mb-3" role="complementary" data-block="mb2slider" aria-label="Mb2 Slider Block">

    <div class="card-body p-3">
        <div class="card-text content mt-3">
            <div class="mb2slider mb2slider125 nocarousel navtype1 mb2slider-mobile" style=""><div class="mb2slider-inner"><div class="lSSlideOuter "><div class="lSSlideWrapper usingCss" style="transition-duration: 800ms; transition-timing-function: ease;"><ul class="mb2slider-slide-list lightSlider lsGrab lSSlide" data-mode="slide" data-auto="0" data-aspeed="800" data-apause="3000" data-loop="1" data-pager="0" data-control="1" data-items="1" data-moveitems="1" data-margin="0" data-aheight="1" data-kpress="1" data-modid="125" data-slidescount="5" style="width: 3332px; transform: translate3d(-1428px, 0px, 0px); height: 132.031px; padding-bottom: 0%;"><li class="mb2slider-slide-item slide_125_5 clone left" style="width: 476px; margin-right: 0px;"><a href="https://play.google.com/store/apps/details?id=com.webview.newkelaspersonalia" target="_blank"><div class="mb2slider-slide-item-inner"><div class="mb2slider-slide-media"><div class="mb2slider-bgimg" style="background-image:url('https://kelaspersonalia.id/pluginfile.php/1/block_mb2slider/configimages/5.jpg');background-repeat:no-repeat;background-position:50% 50%;background-size:cover;"></div><img class="mb2slider-slide-img" src="https://kelaspersonalia.id/pluginfile.php/1/block_mb2slider/configimages/5.jpg" alt="5.jpg" style="z-index:0;max-width:100%;"></div></div></a></li><li class="mb2slider-slide-item slide_125_1 lslide" style="width: 476px; margin-right: 0px;"><div class="mb2slider-slide-item-inner"><div class="mb2slider-slide-media"><div class="mb2slider-bgimg" style="background-image:url('https://kelaspersonalia.id/pluginfile.php/1/block_mb2slider/configimages/1.jpg');background-repeat:no-repeat;background-position:50% 50%;background-size:cover;"></div><img class="mb2slider-slide-img" src="https://kelaspersonalia.id/pluginfile.php/1/block_mb2slider/configimages/1.jpg" alt="1.jpg" style="z-index:0;max-width:100%;"></div></div></li><li class="mb2slider-slide-item slide_125_2 lslide" style="width: 476px; margin-right: 0px;"><div class="mb2slider-slide-item-inner"><div class="mb2slider-slide-media"><div class="mb2slider-bgimg" style="background-image:url('https://kelaspersonalia.id/pluginfile.php/1/block_mb2slider/configimages/2.jpg');background-repeat:no-repeat;background-position:50% 50%;background-size:cover;"></div><img class="mb2slider-slide-img" src="https://kelaspersonalia.id/pluginfile.php/1/block_mb2slider/configimages/2.jpg" alt="2.jpg" style="z-index:0;max-width:100%;"></div><div class="mb2slider-caption hor-center ver-center anim1" style="top: 15px; bottom: -15px; opacity: 0;"><div class="mb2slider-caption1" style="width:0px;margin:0 auto;"><div class="mb2slider-caption2"><div class="mb2slider-caption3"><div class="mb2slider-caption-content fromtheme isnoshadow" style="max-width:550px;"><div class="mb2slider-description" style="color:rgb(17, 107, 142);"><div class="mb2slider-text" style="font-size:1rem;line-height:1.65rem;"><div style="text-align:left;"><span lang="en-id" xml:lang="en-id"></span><br></div></div></div></div></div></div></div></div></div></li><li class="mb2slider-slide-item slide_125_3 lslide active" style="width: 476px; margin-right: 0px;"><div class="mb2slider-slide-item-inner"><div class="mb2slider-slide-media"><div class="mb2slider-bgimg" style="background-image:url('https://kelaspersonalia.id/pluginfile.php/1/block_mb2slider/configimages/3.jpg');background-repeat:no-repeat;background-position:50% 50%;background-size:cover;"></div><img class="mb2slider-slide-img" src="https://kelaspersonalia.id/pluginfile.php/1/block_mb2slider/configimages/3.jpg" alt="3.jpg" style="z-index:0;max-width:100%;"></div><div class="mb2slider-caption hor-right ver-top anim1" style="top: 0px; bottom: 0px; opacity: 1;"><div class="mb2slider-caption1" style="width:0px;margin:0 auto;"><div class="mb2slider-caption2"><div class="mb2slider-caption3"><div class="mb2slider-caption-content fromtheme isnoshadow" style="max-width:550px;"><div class="mb2slider-description" style="color:rgb(17, 107, 142);"><div class="mb2slider-text" style="font-size:1rem;line-height:1.65rem;"><p style="text-align:left;"></p><p><br></p><p><br></p></div></div></div></div></div></div></div></div></li><li class="mb2slider-slide-item slide_125_4 lslide" style="width: 476px; margin-right: 0px;"><div class="mb2slider-slide-item-inner"><div class="mb2slider-slide-media"><div class="mb2slider-bgimg" style="background-image:url('https://kelaspersonalia.id/pluginfile.php/1/block_mb2slider/configimages/4.jpg');background-repeat:no-repeat;background-position:50% 50%;background-size:cover;"></div><img class="mb2slider-slide-img" src="https://kelaspersonalia.id/pluginfile.php/1/block_mb2slider/configimages/4.jpg" alt="4.jpg" style="z-index:0;max-width:100%;"></div></div></li><li class="mb2slider-slide-item slide_125_5 lslide" style="width: 476px; margin-right: 0px;"><a href="https://play.google.com/store/apps/details?id=com.webview.newkelaspersonalia" target="_blank"><div class="mb2slider-slide-item-inner"><div class="mb2slider-slide-media"><div class="mb2slider-bgimg" style="background-image:url('https://kelaspersonalia.id/pluginfile.php/1/block_mb2slider/configimages/5.jpg');background-repeat:no-repeat;background-position:50% 50%;background-size:cover;"></div><img class="mb2slider-slide-img" src="https://kelaspersonalia.id/pluginfile.php/1/block_mb2slider/configimages/5.jpg" alt="5.jpg" style="z-index:0;max-width:100%;"></div></div></a></li><li class="mb2slider-slide-item slide_125_1 clone right" style="width: 476px; margin-right: 0px;"><div class="mb2slider-slide-item-inner"><div class="mb2slider-slide-media"><div class="mb2slider-bgimg" style="background-image:url('https://kelaspersonalia.id/pluginfile.php/1/block_mb2slider/configimages/1.jpg');background-repeat:no-repeat;background-position:50% 50%;background-size:cover;"></div><img class="mb2slider-slide-img" src="https://kelaspersonalia.id/pluginfile.php/1/block_mb2slider/configimages/1.jpg" alt="1.jpg" style="z-index:0;max-width:100%;"></div></div></li></ul></div><div class="lSAction"><a class="lSPrev"><span class="mb2slider_icon-left-open"></span></a><a class="lSNext"><span class="mb2slider_icon-right-open"></span></a></div></div></div></div>
            <div class="footer"></div>
            
        </div>

    </div>

</section></aside>

<?php //echo is_siteadmin() ? $OUTPUT->theme_part('page_header') : ''; ?>
<?php echo $OUTPUT->theme_part('site_menu'); ?>
<?php echo $OUTPUT->theme_part('course_banner'); ?>
<?php echo $OUTPUT->theme_part('region_after_slider'); ?>
<?php echo $OUTPUT->theme_part('region_before_content'); ?>
<div id="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="content-col <?php echo $contentCol; ?>">
                <div id="page-content">
					<?php if (theme_mb2nl_frontpage_courses() && theme_mb2nl_theme_setting($PAGE, 'courseswitchlayout')) : ?>
						<?php echo theme_mb2nl_course_layout_switcher(); ?>
					<?php endif; ?>
					<?php if (is_siteadmin()) : ?>
                    	<?php echo theme_mb2nl_check_plugins(); ?>
                    <?php endif; ?>
                	<?php echo $OUTPUT->course_content_header(); ?>
					<?php if (theme_mb2nl_isblock($PAGE, 'content-top')) : ?>
                		<?php echo $OUTPUT->blocks('content-top', theme_mb2nl_block_cls($PAGE, 'content-top','none')); ?>
             		<?php endif; ?>
                	<?php echo $OUTPUT->main_content(); ?>
                    <?php if (theme_mb2nl_isblock($PAGE, 'content-bottom')) : ?>
                		<?php echo $OUTPUT->blocks('content-bottom', theme_mb2nl_block_cls($PAGE, 'content-bottom','none')); ?>
             		<?php endif; ?>
                    <?php echo theme_mb2nl_moodle_from(2017111300) ? $OUTPUT->activity_navigation() : ''; ?>
                	<?php echo $OUTPUT->course_content_footer(); ?>
                </div>
            </div>
     		<?php if ($sidePre) : ?>
            	<div class="sidebar-col <?php echo $sidePreCol; ?>">
                	<?php echo $OUTPUT->blocks('side-pre', theme_mb2nl_block_cls($PAGE, 'side-pre')); ?>
                </div>
       		<?php endif; ?>
     		<?php if ($sidePost) : ?>
            	<div class="sidebar-col <?php echo $sidePostCol; ?>">
                	<?php echo $OUTPUT->blocks('side-post', theme_mb2nl_block_cls($PAGE, 'side-post')); ?>
                </div>
        	<?php endif; ?>
        </div>
    </div>
</div>
<!--kepingan pemikiran untuk indonesia-->
<div class="mb2-pb-fpsection pre-bg0 light"><div class="section-inner" style="padding-top:0px;padding-bottom:0px;background-color:rgb(255, 255, 255);"><div class="mb2-pb-fprow pre-bg0 light"><div class="section-inner mb2-pb-row-inner " style="padding-top:0px;padding-bottom:0px;background-color:rgb(247, 242, 242);"><div class="container-fluid"><div class="row"><div class="mb2-pb-fpcol col-md-12 noempty"><div class="column-inner"><div class="border-hor custom" style="border-bottom-color:rgb(247, 242, 242);border-bottom-style:solid;border-bottom-width:20px;height:1px;"></div></div></div></div></div></div></div><div class="mb2-pb-fprow pre-bg0 light"></div><div class="mb2-pb-fprow pre-bg0 light"><div class="section-inner mb2-pb-row-inner " style="padding-top:0px;padding-bottom:0px;background-color:rgb(247, 242, 242);"><div class="container-fluid"><div class="row"><div class="mb2-pb-fpcol col-md-12 noempty"><div class="column-inner"><div class="border-hor custom" style="border-bottom-color:rgb(247, 242, 242);border-bottom-style:solid;border-bottom-width:40px;height:1px;"></div></div></div></div></div></div></div><div class="mb2-pb-fprow pre-bg0 light"><div class="section-inner mb2-pb-row-inner " style="padding-top:0px;padding-bottom:0px;background-color:rgb(255, 255, 255);"><div class="container-fluid"><div class="row"><div class="mb2-pb-fpcol col-md-12 noempty"><div class="column-inner"><div class="border-hor custom" style="border-bottom-color:rgb(255, 255, 255);border-bottom-style:solid;border-bottom-width:40px;height:1px;"></div></div></div></div></div></div></div><div class="mb2-pb-fprow pre-bg0 light"><div class="section-inner mb2-pb-row-inner " style="padding-top:0px;padding-bottom:0px;background-color:rgb(255, 255, 255);"><div class="container-fluid"><div class="row"><div class="mb2-pb-fpcol col-md-12 noempty"><div class="column-inner"><div class="theme-title color: #ffa500; title-center title-s style-1" style="margin:0 0 30px 0;"><h1 class="title"><span>Kelas Prakerja Anda Disini</span></h1></div></div></div></div></div></div></div><div class="mb2-pb-fprow pre-bg0 light"><div class="section-inner mb2-pb-row-inner " style="padding-top:0px;padding-bottom:0px;background-color:rgb(255, 255, 255);"><div class="container-fluid"><div class="row"><div class="mb2-pb-fpcol col-md-4 noempty"><div class="column-inner"><div class="theme-boxes col-1 clearfix"><div class="theme-box"><a href="https://kelaspersonalia.id/prakerja/" target=""><div class="theme-boximg useimg type-1"><div class="vtable-wrapp"><div class="vtable"><div class="vtable-cell"><h4><span class="theme-title-text">KURSUS ONLINE PRAKERJA</span></h4></div></div></div><img src="https://kelaspersonalia.id/pluginfile.php/1/local_mb2builder/images/Prakerja.jpg" alt=""><div class="theme-boximg-color" style="background-color:rgb(255, 255, 255);"></div><div class="theme-boximg-img" style="background-image:url('https://kelaspersonalia.id/pluginfile.php/1/local_mb2builder/images/Prakerja.jpg');background-repeat:no-repeat;background-position:50% 50%;background-size:cover;"></div></div></a></div></div></div></div><div class="mb2-pb-fpcol col-md-4 noempty"><div class="column-inner"><div class="theme-boxes col-1 clearfix"></div></div></div><div class="mb2-pb-fpcol col-md-4 noempty"><div class="column-inner"><div class="theme-boxes col-1 clearfix"><div class="theme-box"><a href="https://kelaspersonalia.id/static/Mall-Konsultasi.html" target=""></a></div></div></div></div></div></div></div></div></div></div>

<div class="mb2-pb-fpsection pre-bg0 light"><div class="section-inner" style="padding-top:0px;padding-bottom:0px;background-color:rgb(255, 255, 255);"><div class="mb2-pb-fprow pre-bg0 light"><div class="section-inner mb2-pb-row-inner " style="padding-top:0px;padding-bottom:0px;background-color:rgb(255, 255, 255);"><div class="container-fluid"><div class="row"><div class="mb2-pb-fpcol col-md-12 noempty"><div class="column-inner"><div class="border-hor custom" style="border-bottom-color:rgb(255, 255, 255);border-bottom-style:solid;border-bottom-width:20px;height:1px;"></div></div></div></div></div></div></div><div class="mb2-pb-fprow pre-bg0 light"><div class="section-inner mb2-pb-row-inner " style="padding-top:0px;padding-bottom:0px;background-color:rgb(255, 255, 255);"><div class="container-fluid"><div class="row"><div class="mb2-pb-fpcol col-md-6 noempty"><div class="column-inner"><div class="theme-title color: #ffa500; title-center title-s style-1" style="margin:0 0 20px 0;">
    
    
<!--    <h1 class="title"><span>BELAJAR MENJADI CEO</span></h1></div><div class="theme-text text- text-n text-"><p align="center" class="MsoNormal" style="text-align:center;line-height:normal;margin-bottom:0pt;"><b style="font-size:20pt;"><a href="https://kelaspersonalia.id/course/index.php?categoryid=17" class="active">Kelas Khusus Pelajar</a></b></p><p>-->

<!--</p><p class="MsoNormal" style="text-align:justify;">Kelas ini dipersembahkan untuk-->
<!--Pelajar seluruh Indonesia yang ingin mempersiapkan diri atau ingin meningkatkan-->
<!--kemampuan serta wawasan ilmu guna memulai suatu usaha dan menjadi seorang CEO-->
<!--yang handal. Setiap kelas terdiri dari berbagai cabang ilmu pengetahuan dasar yang-->
<!--sangat diperlukan pada dunia usaha diantaranya adalah: tentang Leadership/Kepemimpinan, Pengantar Ilmu Bisnis, Komunikasi Bisnis, Teori Marketing, Managing Human Resource, Ilmu tentang Produksi, Logistik dan Material Planing, Perilaku Organisasi dan Akutansi Dasar. Harapannya selepas menyelesaikan masa-->
<!--sebagai Pelajar dan/atau sedang sebagai Pelajar sudah dapat memulai wirausaha-->
<!--baru. Selain itu ilmu dan teori yang didapat ini dapat diterapkan dalam keseharian-->
<!--terutama jika mengikuti organisasi tingkat sekolah.</p><p class="MsoNormal" style="text-align:justify;line-height:normal;margin-bottom:0pt;"><span style="font-size:12pt;"></span></p></div></div></div><div class="mb2-pb-fpcol col-md-6 noempty"><div class="column-inner"><div class="theme-tabs tabs top" style="min-height:100px;margin:0 0 20px 0px;"><ul class="nav nav-tabs"><li class="nav-item active"><a class="nav-link active" id="tab_321321949_0_tab" href="#tab_321321949_0" data-toggle="tab" role="tab" aria-controls="tab_321321949_0" aria-selected="true">KELAS 1</a></li><li class="nav-item"><a class="nav-link" id="tab_321321949_1_tab" href="#tab_321321949_1" data-toggle="tab" role="tab" aria-controls="tab_321321949_1" aria-selected="false">KELAS 2</a></li><li class="nav-item"><a class="nav-link" id="tab_321321949_2_tab" href="#tab_321321949_2" data-toggle="tab" role="tab" aria-controls="tab_321321949_2" aria-selected="false">KELAS 3</a></li><li class="nav-item"><a class="nav-link" id="tab_321321949_3_tab" href="#tab_321321949_3" data-toggle="tab" role="tab" aria-controls="tab_321321949_3" aria-selected="false">KELAS 4</a></li><li class="nav-item"><a class="nav-link" id="tab_321321949_4_tab" href="#tab_321321949_4" data-toggle="tab" role="tab" aria-controls="tab_321321949_4" aria-selected="false">KELAS 5</a></li><li class="nav-item"><a class="nav-link" id="tab_321321949_5_tab" href="#tab_321321949_5" data-toggle="tab" role="tab" aria-controls="tab_321321949_5" aria-selected="false">KELAS 6</a></li><li class="nav-item"><a class="nav-link" id="tab_321321949_6_tab" href="#tab_321321949_6" data-toggle="tab" role="tab" aria-controls="tab_321321949_6" aria-selected="false">KELAS 7</a></li><li class="nav-item"><a class="nav-link" id="tab_321321949_7_tab" href="#tab_321321949_7" data-toggle="tab" role="tab" aria-controls="tab_321321949_7" aria-selected="false">KELAS 8</a></li></ul><div class="tab-content"><div class="tab-pane active" id="tab_321321949_0" role="tabpanel" aria-labelledby="tab_321321949_0"><p style="text-align:center;"><img src="https://kelaspersonalia.id/pluginfile.php/1/local_mb2builder/images/31.png" alt="Kelas Personalia" class="img-align-center active"><br></p><h2 align="center"><a href="https://kelaspersonalia.id/course/view.php?id=25">LEADERSHIP</a></h2>-->
<!--</div><div class="tab-pane" id="tab_321321949_1" role="tabpanel" aria-labelledby="tab_321321949_1"><p style="text-align:center;"><img src="https://kelaspersonalia.id/pluginfile.php/1/local_mb2builder/images/32.png" class="img-align-center" alt="32.png"><br></p><h2 align="center"><a href="https://kelaspersonalia.id/course/view.php?id=26">PENGANTAR ILMU BISNIS</a><br></h2></div><div class="tab-pane" id="tab_321321949_2" role="tabpanel" aria-labelledby="tab_321321949_2"><p style="text-align:center;"><img src="https://kelaspersonalia.id/pluginfile.php/1/local_mb2builder/images/33.png" class="img-align-center" alt="33.png"><br></p><h2 align="center"><a href="https://kelaspersonalia.id/course/view.php?id=27">KOMUNIKASI BISNIS</a><br></h2></div><div class="tab-pane" id="tab_321321949_3" role="tabpanel" aria-labelledby="tab_321321949_3"><h2 align="center"><img src="https://kelaspersonalia.id/pluginfile.php/1/local_mb2builder/images/34.png" class="img-align-center" alt="34.png"><br></h2><h2 align="center"><a href="https://kelaspersonalia.id/course/view.php?id=28">TEORI MARKETING</a><br></h2></div><div class="tab-pane" id="tab_321321949_4" role="tabpanel" aria-labelledby="tab_321321949_4"><h2 align="center"><img src="https://kelaspersonalia.id/pluginfile.php/1/local_mb2builder/images/35.png" class="img-align-center" alt="35.png"><br></h2><h4 style="text-align:center;"><a href="https://kelaspersonalia.id/course/view.php?id=29">MANAGING HUMAN RESOURCE</a></h4></div><div class="tab-pane" id="tab_321321949_5" role="tabpanel" aria-labelledby="tab_321321949_5"><p style="text-align:center;"><img src="https://kelaspersonalia.id/pluginfile.php/1/local_mb2builder/images/36.png" class="img-align-center" alt="36.png"><br></p><h5 style="text-align:center;"><a href="https://kelaspersonalia.id/course/view.php?id=30">PRODUKSI, LOGISTIK, DAN MATERIAL PLANING</a></h5></div><div class="tab-pane" id="tab_321321949_6" role="tabpanel" aria-labelledby="tab_321321949_6"><h2 align="center"><img src="https://kelaspersonalia.id/pluginfile.php/1/local_mb2builder/images/37.png" class="img-align-center" alt="37.png"><br></h2><h2 align="center"><a href="https://kelaspersonalia.id/course/view.php?id=31">PERILAKU ORGANISASI</a><br></h2></div><div class="tab-pane" id="tab_321321949_7" role="tabpanel" aria-labelledby="tab_321321949_7"><h2 align="center"><img src="https://kelaspersonalia.id/pluginfile.php/1/local_mb2builder/images/38.png" class="img-align-center" alt="38.png"><br></h2><h2 align="center"><a href="https://kelaspersonalia.id/course/view.php?id=32">AKUTANSI DASAR</a>-->


<br></h2></div></div></div></div></div></div></div></div></div><div class="mb2-pb-fprow pre-bg0 light"><div class="section-inner mb2-pb-row-inner " style="padding-top:0px;padding-bottom:0px;background-color:rgb(247, 242, 242);"><div class="container-fluid"><div class="row"><div class="mb2-pb-fpcol col-md-12 noempty"><div class="column-inner"><div class="border-hor custom" style="border-bottom-color:rgb(247, 242, 242);border-bottom-style:solid;border-bottom-width:40px;height:1px;"></div></div></div></div></div></div></div><div class="mb2-pb-fprow pre-bg0 light"><div class="section-inner mb2-pb-row-inner " style="padding-top:0px;padding-bottom:0px;background-color:rgb(247, 242, 242);"><div class="container-fluid"><div class="row"><div class="mb2-pb-fpcol col-md-12 noempty"><div class="column-inner"><div class="theme-title color: #ffa500; title-center title-s style-1" style="margin:0 0 30px 0;"><h1 class="title"><span>TINGKATKAN KOMPETENSI ANDA DISINI</span></h1></div></div></div></div></div></div></div><div class="mb2-pb-fprow pre-bg0 light"><div class="section-inner mb2-pb-row-inner " style="padding-top:0px;padding-bottom:0px;background-color:rgb(247, 242, 242);"><div class="container-fluid"><div class="row"><div class="mb2-pb-fpcol col-md-4 noempty"><div class="column-inner"><div class="theme-boxes col-1 clearfix"><div class="theme-box"><a href="https://kelaspersonalia.id/static/ruang_baca.html" target=""><div class="theme-boximg useimg type-1"><div class="vtable-wrapp"><div class="vtable"><div class="vtable-cell"><h4><span class="theme-title-text">RUANG BACA</span></h4></div></div></div><img src="https://kelaspersonalia.id/pluginfile.php/1/local_mb2builder/images/RUANG BACA.jpg" alt=""><div class="theme-boximg-color" style="background-color:rgb(243, 234, 234);"></div><div class="theme-boximg-img" style="background-image:url('https://kelaspersonalia.id/pluginfile.php/1/local_mb2builder/images/RUANG BACA.jpg');background-repeat:no-repeat;background-position:50% 50%;background-size:cover;"></div></div></a></div></div></div></div><div class="mb2-pb-fpcol col-md-4 noempty"><div class="column-inner"><div class="theme-boxes col-1 clearfix"><div class="theme-box"><a href="https://kelaspersonalia.id/static/GudangDokumenK3.html" target=""><div class="theme-boximg useimg type-1"><div class="vtable-wrapp"><div class="vtable"><div class="vtable-cell"><h4><span class="theme-title-text">GUDANG DOKUMEN K3</span></h4></div></div></div><img src="https://kelaspersonalia.id/pluginfile.php/1/local_mb2builder/images/PUBLIKASI.jpg" alt=""><div class="theme-boximg-color" style="background-color:rgb(243, 234, 234);"></div><div class="theme-boximg-img" style="background-image:url('https://kelaspersonalia.id/pluginfile.php/1/local_mb2builder/images/PUBLIKASI.jpg');background-repeat:no-repeat;background-position:50% 50%;background-size:cover;"></div></div></a></div></div></div></div></div></div></div></div><div class="mb2-pb-fprow pre-bg0 light"><div class="section-inner mb2-pb-row-inner " style="padding-top:0px;padding-bottom:0px;background-color:rgb(247, 242, 242);"><div class="container-fluid"><div class="row"><div class="mb2-pb-fpcol col-md-12 noempty"><div class="column-inner"><div class="border-hor custom" style="border-bottom-color:rgb(247, 242, 242);border-bottom-style:solid;border-bottom-width:20px;height:1px;"></div></div></div></div></div></div></div><div class="mb2-pb-fprow pre-bg0 light"><div class="section-inner mb2-pb-row-inner " style="padding-top:0px;padding-bottom:0px;background-color:rgb(247, 242, 242);"><div class="container-fluid"><div class="row"><div class="mb2-pb-fpcol col-md-12 noempty"><div class="column-inner"><div class="theme-title color: #ffa500; title-center title-s style-1" style="margin:0 0 30px 0;"><h1 class="title"><span>PERSEMBAHAN DARI KAMI</span></h1></div></div></div></div></div></div></div><div class="mb2-pb-fprow pre-bg0 light"><div class="section-inner mb2-pb-row-inner " style="padding-top:0px;padding-bottom:0px;background-color:rgb(247, 242, 242);"><div class="container-fluid"><div class="row"><div class="mb2-pb-fpcol col-md-4 noempty"><div class="column-inner"><div class="theme-boxes col-1 clearfix"><div class="theme-box"><a href="https://kelaspersonalia.id/static/CATATAN-TOPIK-HANGAT.html" target=""><div class="theme-boximg useimg type-1"><div class="vtable-wrapp"><div class="vtable"><div class="vtable-cell"><h4><span class="theme-title-text">CATATAN TOPIK HANGAT</span></h4></div></div></div><img src="https://kelaspersonalia.id/pluginfile.php/1/local_mb2builder/images/1.png" alt=""><div class="theme-boximg-color" style="background-color:rgb(243, 234, 234);"></div><div class="theme-boximg-img" style="background-image:url('https://kelaspersonalia.id/pluginfile.php/1/local_mb2builder/images/1.png');background-repeat:no-repeat;background-position:50% 50%;background-size:cover;"></div></div></a></div></div></div></div></div></div></div></div><div class="mb2-pb-fprow pre-bg0 light"><div class="section-inner mb2-pb-row-inner " style="padding-top:0px;padding-bottom:0px;background-color:rgb(255, 255, 255);"><div class="container-fluid"><div class="row"><div class="mb2-pb-fpcol col-md-12 noempty"><div class="column-inner"><div class="border-hor custom" style="border-bottom-color:rgb(255, 255, 255);border-bottom-style:solid;border-bottom-width:20px;height:1px;"></div></div></div></div></div></div></div><div class="mb2-pb-fprow pre-bg0 light"></div>
    
   
<?php

//  	$builder = get_config('local_mb2builder');
	$builderfptext = isset($builder->builderfptext) ? json_decode($builder->builderfptext) : array();
	echo theme_mb2nl_page_builder_content($builderfptext);
?>
<?php echo theme_mb2nl_moodle_from(2018120300) ? $OUTPUT->standard_after_main_region_html() : '' ?>
<?php echo $OUTPUT->theme_part('region_after_content'); ?>
<?php echo $OUTPUT->theme_part('region_adminblock'); ?>
<?php echo $OUTPUT->theme_part('region_bottom'); ?>
<?php 
//echo $OUTPUT->theme_part('region_bottom_abcd'); 
?>
 <div id="bottom-abcd" class="dark1">
	<div class="container-fluid">
		<div class="row">
			            	                	<div class="col-md-3">
						<aside id="block-region-bottom-a" class="bottom-a style-bottom block-region" data-blockregion="bottom-a" data-droptarget="1"><a href="#sb-3" class="sr-only sr-only-focusable">Abaikan Tautan</a>

<section id="inst37" class=" block_html block  card mb-3" role="complementary" data-block="html" aria-labelledby="instance-37-header">

    <div class="card-body p-3">

            <h5 id="instance-37-header" class="card-title d-inline">Tautan</h5>


        <div class="card-text content mt-3">
            <div class="no-overflow"><ul>
    <li>
        <h5><strong><a href="/static/TENTANG-KAMI.html"><span style="color: #C0C0C0;">Tentang Kami</span></a></strong></h5><a href="/static/TENTANG-KAMI.html">
</a></li><a href="/static/TENTANGKAMI.html">
</a>
    <li><a href="/static/TENTANGKAMI.html">
</a>
        <h5><a href="/static/TENTANGKAMI.html"><strong></strong></a><strong><a href="/static/kontak.html"><span style="color: #C0C0C0;">Pusat Bantuan</span></a></strong></h5>
    </li>
    <!--<li>-->
    <!--    <h5><strong><a href="/static/cara_bayar.html"><span style="color: #C0C0C0;">Pembayaran</span></a></strong></h5>-->
    <!--</li>-->
    <li>
        <h5><strong><a href="/static/kebijakan-privasi.html"><span style="color: #C0C0C0;">Kebijakan Privasi</span></a></strong></h5>
    </li>
</ul></div>
            <div class="footer"></div>
            
        </div>

    </div>

</section>

  <span id="sb-3"></span></aside>                    </div>                 
                                           
                        	                	<div class="col-md-3">
						<aside id="block-region-bottom-b" class="bottom-b style-bottom block-region" data-blockregion="bottom-b" data-droptarget="1"><a href="#sb-4" class="sr-only sr-only-focusable">Abaikan Kontak Kami</a>

<section id="inst38" class=" block_html block  card mb-3" role="complementary" data-block="html" aria-labelledby="instance-38-header">

    <div class="card-body p-3">

            <h5 id="instance-38-header" class="card-title d-inline">Kontak Kami</h5>


        <div class="card-text content mt-3">
            <div class="no-overflow"><ul>
    <li>
        <h5><strong><span style="color: #C0C0C0;">PT KELAS PERSONALIA INDONESIA</span></strong></h5>
    </li>
    <!--<li>-->
    <!--    <h5><strong><span style="color: #C0C0C0;">Jl. Mulyosari Mas blok E No.5 Surabaya</span></strong></h5>-->
    <!--</li>-->
    <li>
        <h5><strong><span style="color: #C0C0C0;">phone: +6281357088184</span></strong></h5>
    </li>
    <li>
        <h5><strong><span style="color: #C0C0C0;">admin@kelaspersonalia.id</span></strong></h5>
    </li>
    <li>
        <a href="https://play.google.com/store/apps/details?id=com.webview.newkelaspersonalia&amp;hl=en"> <img src="https://kelaspersonalia.id/gambar/Google2.jpg" width="150px"> </a></li>

</ul></div>
            <div class="footer"></div>
            
        </div>

    </div>

</section>

  <span id="sb-4"></span></aside>                    </div>                 
                                           
                        	                           
                        	                           
                       
		<div class="col-md-6">
						<aside id="block-region-bottom-b" class="bottom-b style-bottom block-region" data-blockregion="bottom-b" data-droptarget="1">

<section id="inst38" class=" block_html block  card mb-3" role="complementary" data-block="html" aria-labelledby="instance-38-header">

    <div class="card-body p-3">

            


        <div class="card-text content mt-3">
            
            <!--<div class="footer"><div class="theme-slide-content3" id="yui_3_17_2_1_1595662784379_30">-->
            <!--    <img src="https://kelaspersonalia.id/pluginfile.php/1/local_mb2builder/images/SAVE_20191125_094420.jpg" alt="Gede Arya Wiryana, SH, MH, MHRM.">-->
            <!--<div class="theme-slide-content4" id="yui_3_17_2_1_1595662784379_49"><h4 class="theme-slide-title" id="yui_3_17_2_1_1595662784379_48">Gede Arya Wiryana, SH, MH, MHRM.</h4><div class="theme-slider-item-details"><div class="theme-slider-desc">Founder </div></div></div></div></div>-->
            
        </div>

    </div>

</section>

  <span id="sb-4"></span></aside>                    </div></div>
	</div>
</div> 
<?php echo $OUTPUT->theme_part('footer', array('sidebar'=>$sidebar)); ?>
