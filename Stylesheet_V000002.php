<?php 
ob_start(); 
$header_margin	=	50;

if(isset($_SESSION['user_viewport_width']))
{
	if($_SESSION['user_viewport_width'] >= 1001)
	{
		$user_viewport_width										=	$_SESSION['user_viewport_width'];
		$user_viewport_width_height									=	$_SESSION['user_viewport_width'] / 16 * 9;
		$user_settings_delay										=	$_SESSION['user_settings_delay']->value;
		$user_settings_delay2										=	$_SESSION['user_settings_delay']->value * 2;
		$user_viewport_width_quarter_height							=	$_SESSION['user_viewport_width'] / 4;
		$user_viewport_width_quarter_width  						=	$_SESSION['user_viewport_width'] / 4;
		$ret														=	$user_viewport_width_height	+ $header_margin;
		$qawqwda													=	$user_viewport_width / 2;
		$templates_res_user_pic_left								=	$qawqwda + ($user_viewport_width_quarter_width / 2);
		$zxcxz														=	$user_viewport_width_quarter_width / 2;
		$templates_res_user_pic_left								=	'calc(50% - '.$zxcxz.'px)';
		$asd														=	$ret / 2;
		$templates_res_user_pic_top									=	$asd - $user_viewport_width_quarter_height / 2;
		
		$object_1													=	$user_viewport_width / 2;
		$object_2													=	$user_viewport_width / 2;
		$object_3													=	$user_viewport_width / 3;
		$object_4													=	$user_viewport_width / 4;
		$object_5													=	$user_viewport_width / 5;
		$height														=	$user_viewport_width / 16 * 9;
		$object_1_height											=	$height / 2;
		$object_2_height											=	$height / 2;
		$object_3_height											=	$height / 3;
		$object_4_height											=	$height / 4;
		$object_5_height											=	$height / 5;
		$user_settings_margin										=	0;
		
	}
	else
	{
		$user_viewport_width										=	$_SESSION['user_viewport_width'];
		$object_1													=	$user_viewport_width;
		$object_2													=	$user_viewport_width / 2;
		$object_3													=	$user_viewport_width / 3;
		$object_4													=	$user_viewport_width / 2;
		$object_5													=	$user_viewport_width / 3;
		$height														=	$user_viewport_width / 16 * 9;
		$object_1_height											=	$height;
		$object_2_height											=	$height / 2;
		$object_3_height											=	$height / 3;
		$object_4_height											=	$height / 2;
		$object_5_height											=	$height / 3;
		$user_viewport_width										=	$_SESSION['user_viewport_width'];
		$user_viewport_width_height									=	$_SESSION['user_viewport_width'] / 16 * 9;
		$user_settings_delay										=	$_SESSION['user_settings_delay']->value;
		$user_settings_delay2										=	$_SESSION['user_settings_delay']->value * 2;
		$user_viewport_width_quarter_height							=	$_SESSION['user_viewport_width'];
		$user_viewport_width_quarter_width  						=	$_SESSION['user_viewport_width'];
		$ret														=	$user_viewport_width_height	+ $header_margin;
		$qawqwda													=	$user_viewport_width / 2;
		$templates_res_user_pic_left								=	$qawqwda + ($user_viewport_width_quarter_width / 2);
		$zxcxz														=	$user_viewport_width_quarter_width / 2;
		$templates_res_user_pic_left								=	'calc(50% - '.$zxcxz.'px)';
		$asd																		=	$ret / 2;
		$templates_res_user_pic_top									=	$asd - $user_viewport_width_quarter_height / 2;
		$user_settings_margin										=	0;
	}
}
else
{
	$user_settings_margin		=	4;
	$user_viewport_width		=	$_SESSION['user_viewport_width'];
	$user_viewport_width_height	=	$_SESSION['user_viewport_width'] / 16 * 9;
	$user_settings_delay		=	400;
	$user_settings_delay2		=	$user_settings_delay * 2;
}
	
if($_SESSION['user_viewport_width'] >= 1001)
{
	$user_settings_main2		=	$_SESSION['user_settings_main2']->value;
	$user_settings_main2_height	=	$_SESSION['user_settings_main2']->value / 16 * 9;
}
else
{
	$user_settings_main2		=	$_SESSION['user_viewport_width'];
	$user_settings_main2_height	=	$_SESSION['user_viewport_width'] / 16 * 9;
}

$font_family					=	'Roboto, pt sans narrow, Sans Serif';
$font_size						=	'16';
//remove html scrollbar so that the buttons don't do that odd pixel shift to the right when they load list menus. It's the fucking scrollbar.

?>
<style>
html{
	--font-size:<?= $font_size; ?>px;
	--font-family: <?= $font_family; ?>;
	--font-weight: 300;
	--line-height: 32px;
	--lines-to-show: 2;
	--text-shadow: 0px 0px 1px #bbb;
    --color: #555;
	scroll-behavior: smooth;
	overflow: scroll;
	-ms-overflow-style: none;  
    scrollbar-width: none; 
	
}
html {
    overflow: scroll;
    overflow-x: hidden;
}
::-webkit-scrollbar {
    width: 0;  /* Remove scrollbar space */
    background: transparent;  /* Optional: just make scrollbar invisible */
}
/* Optional: show position indicator in red */
::-webkit-scrollbar-thumb {
    background: #FF0000;
}
html::-webkit-scrollbar { 

	display: none; 

}
:root{
	/*--aBox-background1: #0F2027;
    --aBox-background2: -webkit-linear-gradient(to right, #2C5364, #203A43, #0F2027);
    --abox-background3: linear-gradient(to right, #2C5364, #203A43, #0F2027);*/
	font-family:<?= $font_family; ?>;
	font-size:<?= $font_size; ?>;
	font-weight:var(--font-weight);
	color:var(--color);
	text-shadow:var(--text-shadow);
}
#Run{
	display: inline-grid;
    font-size: 0.8rem;
    text-align: left;
    width: 100%;
    font-family: system-ui;
}
body{
	
	margin:0;
	opacity:1;
	
	
	/*
	overflow-y: hidden;
	*/

	/*
	background: #ad5389; 
	background: -webkit-linear-gradient(to bottom, #3c1053, #ad5389); 
	background: linear-gradient(to bottom, #3c1053, #ad5389);
	background: rgba(0,0,0,0.06);
	*/
	
	/*
	background: #4568DC; 
	background: -webkit-linear-gradient(to right, #B06AB3, #4568DC); 
	background: linear-gradient(to right, #B06AB3, #4568DC);
	*/
	
	/*
	background: #8E2DE2; 
	background: -webkit-linear-gradient(to right, #4A00E0, #8E2DE2);  
	background: linear-gradient(to right, #4A00E0, #8E2DE2);
	*/
/*	
	background: #314755; 
	background: -webkit-linear-gradient(to bottom, #26a0da, #314755);  
	background: linear-gradient(to bottom, #26a0da, #314755);
*/
/*
	background-image:url(<?= $GLOBALS['HTTP_DOMAIN_'].$GLOBALS['Domain_Config']->Dbn__uid .'/'.$GLOBALS['Css_body_background-image']; ?>);
	background-attachment: fixed;
	background-size: cover;
*/

	background-position:center;
	background-size:cover;
	background-repeat: no-repeat;
	background-attachment: fixed;
	/*
	background-image:url(<?= $GLOBALS['HTTP_DIR_DEV_PLATFORM_THEMES_'].$_SESSION['user_settings_theme']->value.'/templates/covers/'.$GLOBALS['default_profile_background']; ?>);
	*/
	
}
article{
    display: inline-block;
}
.h2{
	font-size:1.3rem;
	font-weight: 300;
	font-family:<?= $font_family; ?>;
}
.p_normal{
	color:#000;
	font-family:<?= $font_family; ?>;
	font-size:1.2rem;
	/*margin-right: 30px;
    margin-left: 30px;*/
}
.title_div{
	display: inline-flex;
    align-items: center;
    text-align: center;
    justify-content: center;
    vertical-align: text-top;
}
.templates_html_folder_button_wall_button_grid_div{
	display: inline-block;
    /* line-height: 44px; */
    height: 40px;
    width: 40px;
    background-position: center;
    background-size: cover;
	vertical-align: middle;
}
.title_p{
	color: #111;
    font-size: 1.2rem;
    font-family: <?= $font_family; ?>;
    vertical-align: middle;
    display: inline-block;
}
.title_list_p{
	color:#eee;
	font-size: 1.5rem;
    font-family: <?= $font_family; ?>;
    vertical-align: middle;
    display: inline-block;
}
.p_faded{
	color: #AAA;
    font-size: 1rem;
    vertical-align: text-bottom;
	font-family:<?= $font_family; ?>;
}
.p_focused, .p_link, .p_text{
	/*line-height: 30px;*/
	font-family:<?= $font_family; ?>;
	
}
.p_focused{
	color:green;
	font-family:<?= $font_family; ?>;
}
.p_link, .p_active, .p_highlight{
	color: #222;
    font-size: 1rem;
    line-height: 44px;
    font-family: <?= $font_family; ?>;
    text-decoration: none;
    text-shadow: 0px 0px 1px #aaa;
    vertical-align: middle;
    word-break: break-word;
    margin-left: 6px;
	text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
    width: auto;
}
.p_highlight{
	color:#EEE;
}
.p_inactive{
	color:brown;
	font-size:1.3rem;
	font-family:<?= $font_family; ?>;
}
.p_grid_button{
	width:100%;
}
.list_button_p{
	color:#111;
	font-size:1.3rem;
	font-family:<?= $font_family; ?>;
	text-align:center;
	width: 100%;
}
.button_p{
	color:#eee;
	font-size: 1.3rem;
}
.grid_button{
	width:25%;
	
}
img{
	border-radius: 2px;
	height: -moz-available;          /* WebKit-based browsers will ignore this. */
	height: -webkit-fill-available;  /* Mozilla-based browsers will ignore this. */
	height: fill-available;
	width: 100%;
	border-radius:2.5px;
}
img{

}
.float_right{
	float:right;
}
.lineheight_42{
	line-height:42px;
}
.spacer_32{
	margin-top:32px;
}
.object_1{
	display:inline-block;
	aspect-ratio: 16 / 9;
	margin:<?= $user_settings_margin; ?>;
	width: 	<?= $object_1; ?>px;
}
.object_2{
	aspect-ratio: 16 / 9;
	display:inline-block;
	margin:<?= $user_settings_margin; ?>;
	width: 	<?= $object_2; ?>px;
}
.object_3{
	aspect-ratio: 16 / 9;
	display:inline-block;
	margin:<?= $user_settings_margin; ?>;
	width: 	<?= $object_3; ?>px;
}
.object_4{
	aspect-ratio: 16 / 9;
	display:inline-block;
	margin:<?= $user_settings_margin; ?>;
	width: <?= $object_4; ?>px;
}
.object_5{
	aspect-ratio: 16 / 9;
	display:inline-block;
	margin:<?= $user_settings_margin; ?>;
	width: <?= $object_5; ?>px;
}
.wall_object_1{
	display:inline-block;
	aspect-ratio: 16 / 9;
	margin:<?= $user_settings_margin; ?>;
	width: 	<?= $object_1; ?>px;
}
/*
.object_2 img{
	display:inline-block;
	width: 	<?= $user_viewport_width; ?>px;
	height:	<?= $user_viewport_width_height; ?>px;
}
*/

/*
.object_3 img{
	display:inline-block;
	width: 	<?= $user_viewport_width / 3 - 8; ?>px;
	height:	<?= $user_viewport_width_height / 3 - 8; ?>px;
}
*/

/*
.object_4 img{
	display:inline-block;
	width: 	<?= $user_viewport_width / 4 - 16; ?>px;
	height:	<?= $user_viewport_width_height / 4 - 16; ?>px;
}
*/

/*
.object_5 img{
	display:inline-block;
	width: 	<?= $user_viewport_width / 5 - 20; ?>px;
	height:	<?= $user_viewport_width_height / 5 - 20; ?>px;
}
*/
.templates_html_file_band_res{
	margin-top:0px;
}
section, .section, .pseudo, .section2{
	display: inline-block;
    line-height: 32px;
	height:auto;
    text-align: center;
    box-sizing: border-box;
    /* background: rgba(255,255,255,0.85); */
    /* box-shadow: 0px 0px 4px #888; */
    border-top-left-radius: 48px;
    border-top-right-radius: 48px;
    border-bottom-right-radius: 48px;
    border-bottom-left-radius: 48px;
	/*margin-top: 48px;*/
	width:100%;
	text-align:left;
}
.templates_html_file_header_div{
	
}
.section2{
	margin-top:0px;
}
.section_widthed{
	width: 	<?= $user_viewport_width; ?>px;
	height:	<?= $user_viewport_width_height; ?>px;
}
.display_inlineblock{
	display:inline-block;
}
.display_flex{
	justify-content: space-around;
    align-content: center;
    flex-wrap: wrap;
    flex-direction: row;
    display: flex;
    align-items: stretch;
}
.display_inlineflex{
	display:inline-flex;
}
.position_relative{
	position:relative;
}
.position_absolute{
	position:absolute;
}
.img32{
	margin: 0px;
    width: 44px;
    height: 44px;
    vertical-align: middle;
	/*-moz-box-shadow:    inset 0 0 2px #555;
   -webkit-box-shadow: inset 0 0 2px #555;
   box-shadow:         inset 0 0 2px #555;*/
   /*border-radius: 44px;*/
   display:inline-block;
}
.img20{
	margin: 0px;
    width: 20px;
    height: 20px;
    vertical-align: text-bottom;
}
.img30{
	margin: 0px;
    width: 30px;
    height: 30px;
    vertical-align: middle;
    border-radius: 36px;
}
.img32_right{
	position: absolute;
    right: 5px;
    bottom: 5px;
}
.img100pc{
	width:100%;
	height: auto;
}
.width50pc{
	width:50%;
	height:auto;
}
.height100pc{
	height:100%;
}
.spacer_bottom{
	height:40px;
}
.spacer400{
	height:400px;
}
.spacer200{
	height:200px;
}
.spacer1000{
	height:1000px;
}
.toggle_down{
	position:absolute;
	right:0px;
	top:0px;
	width: 32px;
    height: 32px;
	background-position: center;
    background-size: contain;
}
.user_viewport_width{
	width: <?= $user_viewport_width; ?>px;
}
.display_block{
	display:block;
}
.inline_block{
	display:inline-block;
}
.inline_flex{
	display: inline-flex;
	width:100%;
    justify-content: space-evenly;
}
.flex{
	display:flex;
}
.background_1{
	/*
	background: azure;
    border-radius: 8px;
	box-shadow: 0px 0px 2px #aaa;
	*/
}
.background_2{
	background: honeydew;
    border-radius: 8px;
	box-shadow: 0px 0px 2px #aaa;
}
.background_3{
	border-radius: 8px;
    background: ivory;
	box-shadow: 0px 0px 2px #aaa;
}

.modal{
	background:rgba(0,0,0,0.3);
	height:10%;
	width:100%;
	position:absolute;
	display:block;
}	

/*
.templates_res{
	width:<?= $user_settings_main2; ?>px;
	display:inline-block;
}*/
.templates_collection{
	width:<?= $user_viewport_width; ?>px;
}

.templates_collection_wall{
	text-align: center;
	display:inline-block;
}
.templates_collection_img{
	width:20%;
	height:200px;
}
.templates_collection_wrapper{
	display:inline-block;
}
.templates_collection_image_content_select{
	position:absolute;
	bottom:0px;
	left:0px;
	width:calc(50% - 2px);
	height:calc(50% - 2px);
	border:1px solid yellow;
	color:yellow;
	display: -webkit-box;
    -webkit-box-align: center;
	opacity: 0;
	border-radius:2px;
}
.templates_collection_image_content_select:hover{
	opacity:1;
	background: rgba(255,215,1, 0.5);
}
.templates_collection_image_content_select_p{
	width:100%;
	color:yellow;
}
.templates_res_page{
	width: <?= $user_viewport_width; ?>;
	display:inline-block;
}
.templates_res_user_div{
	display: -webkit-box;
    -webkit-box-align: center;
}
.templates_res_user_cover{
	width:100%;
	height:<?= $user_viewport_width_height; ?>px;
}
.templates_res_user_pic{
	position:absolute;
	width:<?= $user_viewport_width_quarter_width; ?>px;
	display: -webkit-box;
    -webkit-box-align: center;
	height:<?= $user_viewport_width_quarter_height; ?>px;
	left: <?= $templates_res_user_pic_left; ?>;
	top: <?= $templates_res_user_pic_top; ?>px;
}
.templates_res_user_div2{
	/*justify-content: space-evenly;
    width: 100%;*/
	left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
}
.templates_res_user_img{
	box-shadow: 0px 0px 20px #555;
}
.templates_res_user_section_div{
	display:inline-block;
	/*
	background-color: rgba(66,118,145, 0.94);
	*/
}
.templates_page_ins_user_profile_section_nav{
	text-align:left;
}
.templates_res_user_img{
	width:200px;
	height:200px;
}
.templates_res_user_edit{
	/*position: absolute;
    right: 0px;
    top: 0px;*/
	display:inline-block;
}
.templates_header_section_div{
	justify-content: space-evenly;
	display:inline-block;
	height: 44px;
	width:calc(50% - 44px);
	text-align:right;
}
/*
.templates_header_section_div_button{
	width:100%;
	display:inline-block;
	border-radius: 20px;
    /*
	border: 1px solid #778;
	**/
	/*line-height: 42px;
}
*/
button{
	height: 100%;
    width: 100%;
    background-color: rgba(0,0,0,0);
    -webkit-appearance: none;
    -webkit-writing-mode: horizontal-tb !important;
    text-rendering: auto;
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    box-sizing: border-box;
    margin: 0em;
    font-family: var(--font-family);
    font-size: var(--font-size);
    border: none;
    /* box-shadow: #555 5px 5px 10px; */
    line-height: 42px;
    transform: scale(1);
    color: dodgerblue;
    text-shadow: none;
    display: inline-block;
    text-align: inherit;
    align-items: flex-start;
    cursor: pointer;
    padding: 0px;
    text-align: center;
    /* border-radius: 20px; */
    /* box-shadow: 0px 0px 1.2px #555;*/
}
button:focus {
	outline:0;
}

.button{
	width:100%;
}
button{
	font:var(--font-family);
	font-family:var(--font-family);
}
.header_list_button:hover, .templates_header_section_div_button:hover{
	background: rgb(249,159,248);
	background: -moz-linear-gradient(top,  rgba(249,159,248,1) 0%, rgba(225,109,232,1) 100%); 
	background: -webkit-linear-gradient(top,  rgba(249,159,248,1) 0%,rgba(225,109,232,1) 100%); 
	background: linear-gradient(to bottom,  rgba(249,159,248,1) 0%,rgba(225,109,232,1) 100%); 
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f99ff8', endColorstr='#e16de8',GradientType=0 );
	 background: -moz-linear-gradient(top, rgba(0,183,234,1) 0%, rgba(0,146,183,1) 100%);
    background: -webkit-linear-gradient(top, rgba(0,183,234,1) 0%,rgba(0,146,183,1) 100%);
    background: linear-gradient(to bottom, rgba(0,183,234,1) 0%,rgba(0,146,183,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00b7ea', endColorstr='#0092b7',GradientType=0 );

	background: #71A9C9;	
background: linear-gradient(to bottom, rgba(0,183,234,1) 0%,rgba(0,146,183,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00b7ea', endColorstr='#0092b7',GradientType=0 );
	/* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#00b7ea+0,009ec3+100;Blue+3D+%2315 */
background: rgb(0,183,234); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(0,183,234,1) 0%, rgba(0,158,195,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  rgba(0,183,234,1) 0%,rgba(0,158,195,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  rgba(0,183,234,1) 0%,rgba(0,158,195,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00b7ea', endColorstr='#009ec3',GradientType=0 ); /* IE6-9 */
/* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#7abcff+0,60abf8+44,4096ee+100;Blue+3D+%2314 */
background: rgb(122,188,255); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(122,188,255,1) 0%, rgba(96,171,248,1) 44%, rgba(64,150,238,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  rgba(122,188,255,1) 0%,rgba(96,171,248,1) 44%,rgba(64,150,238,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  rgba(122,188,255,1) 0%,rgba(96,171,248,1) 44%,rgba(64,150,238,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#7abcff', endColorstr='#4096ee',GradientType=0 ); /* IE6-9 */
/* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#51b0e2+0,258dc8+100 */
background: rgb(81,176,226); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(81,176,226,1) 0%, rgba(37,141,200,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  rgba(81,176,226,1) 0%,rgba(37,141,200,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  rgba(81,176,226,1) 0%,rgba(37,141,200,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#51b0e2', endColorstr='#258dc8',GradientType=0 ); /* IE6-9 */

background: rgb(81,176,226);
    background: -moz-linear-gradient(top, rgba(81,176,226,1) 0%, rgba(37,141,200,1) 100%);
    background: -webkit-linear-gradient(top, rgba(81,176,226,1) 0%,rgba(37,141,200,1) 100%);
    background: linear-gradient(to bottom, rgba(81,176,226,1) 0%,rgba(37,141,200,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#51b0e2', endColorstr='#258dc8',GradientType=0 );
	
	background: rgb(81,176,226);
    background: -moz-linear-gradient(top, rgba(81,176,226,1) 0%, rgba(37,141,200,1) 100%);
    background: -webkit-linear-gradient(top, rgba(81,176,226,1) 0%,rgba(37,141,200,1) 100%);
    background: linear-gradient(to bottom, rgba(81,176,226,1) 0%,rgba(37,141,200,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#51b0e2', endColorstr='#258dc8',GradientType=0 );

	    background: linear-gradient(to bottom, rgba(242,245,246,1) 0%,rgba(234,234,234,1) 56%,rgba(201,201,201,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f2f5f6', endColorstr='#c9c9c9',GradientType=0 );
}
.button_list_button_img, .folder_list_button_img, .list_button_img{
    width: 27px;
    height: 27px;
    vertical-align: middle;
	margin:2 4 2 0;
}
.button_list_button_p, .folder_list_button_p, .list_button_p, .clip_button_p{
	line-height:42px;
	
}
.label_input{
	padding-left: 20px;
}	
.header_div{
	right:0px;
	display: inline-flex;
}
.header_img{
}
.header_res, .header_tiles, .header_wall{
	width: calc(100% - 2px);
    position: relative;
    display: inline-block;
    margin: 0;
    /* 
	background: linear-gradient(to bottom, rgba(250,250,255,1) 0%,rgba(247,247,247,1) 56%,rgb(234 234 234) 100%); 
	*/
    /* 
	border: 1px solid #ddd; 
	*/
    /* 
	background: #FFF; 
	*/
	/*
    box-shadow: 0px 0px 2px #888;
	*/
    /* 
	background: none; 
	*/
    background: #FFF;
    /* 
	margin-bottom: 96px; 
	*/
    /*
	border-radius: 24px;
	*/
	/*
    margin-bottom: 2px;
	*/
    /*
	margin-top: 2px;
	*/
}
.header_res, .header_wall{
	/*
	background:#0086B2;
	*/
}
.header_tiles{
	/*
	background:rgba(0,0,0,0.2);
	background: #0086B2;
	*/
	
	box-shadow:none;
	background:none;
	
}
.header_tiles button{
	margin-left:0px;
}
.header_tiles img{
	display:none;
}
.header_wall{
	/*
	background: #0086B2;
	*/
}
.node_line{
	line-height:44px;
}
.header_p{
	line-height: 44px;
    text-shadow: 0px 0px 1px #aaa;
    font-size: 1.3rem;
    margin-left: 6px;
    font-family: <?= $font_family; ?>;
}
.header_section_div{
    position: relative;
    text-align: center;
    display: inline-flex;
	width:100%;
}
.templates_page_ins_user_profile_section_div{
	height: <?= $user_viewport_width_height; ?>;
	box-shadow: 0px 0px 10px #000 inset;
}

.list_inner_button, .header_div_button{
	display: inline-block;
    border: none;
    vertical-align: middle;
    line-height: 44px;
    padding: 5px;
    margin: 1px;
    text-align: center;
    text-align: left;
    width: 10%;
    height: 54px;
    /* max-width: 300px; */
    word-break: break-word;
    /* margin-left: 6px; */
    text-overflow: clip;
    white-space: nowrap;
    overflow: hidden;
	border-right: 1px solid #003852;
	/*box-shadow: -5px 0px 10px 0px #005577 inset;*/
}
.header_div_button:hover{
	transform: scale(1.05);
    transition: 0.2s ease-out;
    background: rgba(0,200,255,0.3);
}
.list{
	letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    box-sizing: border-box;
    font-size:1.3rem;
	font-family:var(--font-family);
	transform: scale(1);
	text-shadow: none;
    align-items: flex-start;
    cursor: pointer;
	display: inline-block;
	width:100%;
	height:56px;
	margin:1px;
}
.list:hover{
	/*
	background: rgb(255,254,252); 
	background: -moz-linear-gradient(top,  rgba(255,254,252,1) 0%, rgba(244,243,235,1) 69%, rgba(234,233,222,1) 100%); 
	background: -webkit-linear-gradient(top,  rgba(255,254,252,1) 0%,rgba(244,243,235,1) 69%,rgba(234,233,222,1) 100%);
	background: linear-gradient(to bottom,  rgba(255,254,252,1) 0%,rgba(244,243,235,1) 69%,rgba(234,233,222,1) 100%); 
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fffefc', endColorstr='#eae9de',GradientType=0 );
	box-shadow: 1px 1px 2px #ddd;
	*/
}
.list_heading{
	background:rgba(255,255,255,0.1);
	background:#4283A9;
/*		
	background: #00B4DB;  
	background: -webkit-linear-gradient(to right, #0083B0, #00B4DB); 
	background: linear-gradient(to right, #0083B0, #00B4DB);

	background: rgb(176,212,227); 
	background: -moz-linear-gradient(top,  rgba(176,212,227,1) 0%, rgba(136,186,207,1) 100%); 
	background: -webkit-linear-gradient(top,  rgba(176,212,227,1) 0%,rgba(136,186,207,1) 100%); 
	background: linear-gradient(to bottom,  rgba(176,212,227,1) 0%,rgba(136,186,207,1) 100%); 
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b0d4e3', endColorstr='#88bacf',GradientType=0 ); 

	background: rgb(242,246,248); 
	background: -moz-linear-gradient(top,  rgba(242,246,248,1) 0%, rgba(216,225,231,1) 50%, rgba(181,198,208,1) 51%, rgba(224,239,249,1) 100%); 
	background: -webkit-linear-gradient(top,  rgba(242,246,248,1) 0%,rgba(216,225,231,1) 50%,rgba(181,198,208,1) 51%,rgba(224,239,249,1) 100%); 
	background: linear-gradient(to bottom,  rgba(242,246,248,1) 0%,rgba(216,225,231,1) 50%,rgba(181,198,208,1) 51%,rgba(224,239,249,1) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f2f6f8', endColorstr='#e0eff9',GradientType=0 ); 

	background: #56CCF2;  
	background: -webkit-linear-gradient(to right, #2F80ED, #56CCF2); 
	background: linear-gradient(to right, #2F80ED, #56CCF2);
	
	background: #4B79A1;  
	background: -webkit-linear-gradient(to right, #283E51, #4B79A1); 
	background: linear-gradient(to right, #283E51, #4B79A1); 
	
	background: #136a8a;  
	background: -webkit-linear-gradient(to right, #267871, #136a8a); 
	background: linear-gradient(to right, #267871, #136a8a); 

	background: #7474BF; 
	background: -webkit-linear-gradient(to right, #348AC7, #7474BF); 
	background: linear-gradient(to right, #348AC7, #7474BF); 

	background: #614385;  
	background: -webkit-linear-gradient(to right, #516395, #614385);
	background: linear-gradient(to right, #516395, #614385); 
	
	background: linear-gradient(to bottom, #3A6073, #203B4E);
	
	background: linear-gradient(to bottom, #3A6073, #294B63);

	background: #16222A;  
	background: -webkit-linear-gradient(to left, #3A6073, #16222A); 
	background: linear-gradient(to left, #3A6073, #16222A);
*/
		

	border:none;
	padding:3 20 3 20;

}
.list_heading:hover{

	/* , button:hover */
	
	background: rgb(0,183,234);
    background: -moz-linear-gradient(top, rgba(0,183,234,1) 0%, rgba(0,146,183,1) 100%);
    background: -webkit-linear-gradient(top, rgba(0,183,234,1) 0%,rgba(0,146,183,1) 100%);
    background: linear-gradient(to bottom, rgba(0,183,234,1) 0%,rgba(0,146,183,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00b7ea', endColorstr='#0092b7',GradientType=0 );

	background: #71A9C9;	
background: linear-gradient(to bottom, rgba(0,183,234,1) 0%,rgba(0,146,183,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00b7ea', endColorstr='#0092b7',GradientType=0 );
/*
background: rgb(249,159,248);
background: -moz-linear-gradient(top,  rgba(249,159,248,1) 0%, rgba(225,109,232,1) 100%); 
background: -webkit-linear-gradient(top,  rgba(249,159,248,1) 0%,rgba(225,109,232,1) 100%); 
background: linear-gradient(to bottom,  rgba(249,159,248,1) 0%,rgba(225,109,232,1) 100%); 
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f99ff8', endColorstr='#e16de8',GradientType=0 );
*/
background: rgba(55,205,255,0.4);
/* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#51b0e2+0,258dc8+100 */
background: rgb(81,176,226); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(81,176,226,1) 0%, rgba(37,141,200,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  rgba(81,176,226,1) 0%,rgba(37,141,200,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  rgba(81,176,226,1) 0%,rgba(37,141,200,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#51b0e2', endColorstr='#258dc8',GradientType=0 ); /* IE6-9 */

}
.width20{
	width:20%;
}
.width60{
	width:60%;
}
.width100{
	width:100px;
}
.width100pc{
	width:100%;
}
.backgroundimage{
	/*
	background-position:center;
	background-size:cover;
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-image:url(<?= $GLOBALS['HTTP_DOMAIN_THEMES_ThemeUID_'].'templates/covers/'.$GLOBALS['default_profile_background']; ?>);
	*/
}
form{
	margin-block-end: 0;
}
.button_list_button, .folder_list_button, .admin_button, .header_list_button{
	text-align:center;
	width:100%;
	color:#008CDC;
	border:1px solid transparent;
	letter-spacing: normal;
    word-spacing: normal;
    text-transform: none;
    text-indent: 0px;
    box-sizing: border-box;
    font-size:1.3rem;
	font-family:var(--font-family);
	transform: scale(1);
	width: 100%;
	text-shadow: none;
    align-items: flex-start;
    cursor: pointer;
	background-color: rgb(233 255 255);
    border: 1px transparent #047df94d;
    display: inline-block;
	line-height:44px;
	padding:5px;
	margin:1px;
	
	background: rgb(81,176,226);
    /*
	background: -moz-linear-gradient(top, rgba(81,176,226,1) 0%, rgba(37,141,200,1) 100%);
    background: -webkit-linear-gradient(top, rgba(81,176,226,1) 0%,rgba(37,141,200,1) 100%);
    background: linear-gradient(to bottom, rgba(81,176,226,1) 0%,rgba(37,141,200,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#51b0e2', endColorstr='#258dc8',GradientType=0 );
	background:-webkit-linear-gradient(top, rgb(47 142 197) 0%,rgb(4 88 106) 100%);
	background:-webkit-linear-gradient(top, rgb(46 123 167) 0%,rgb(6 79 96) 100%);;
	*/
	background:#ADDDFF;
}

.button_list_button:hover, .folder_list_button:hover, .list_button:hover, header_list_button:hover{
	/*
	background: rgb(255,255,255); 
	background: -moz-linear-gradient(top,  rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%); 
	background: -webkit-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(246,246,246,1) 47%,rgba(237,237,237,1) 100%);
	background: linear-gradient(to bottom,  rgba(255,255,255,1) 0%,rgba(246,246,246,1) 47%,rgba(237,237,237,1) 100%); 
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ededed',GradientType=0 );
	*/
	
	background: rgb(255,254,252); 
	background: -moz-linear-gradient(top,  rgba(255,254,252,1) 0%, rgba(244,243,235,1) 69%, rgba(234,233,222,1) 100%); 
	background: -webkit-linear-gradient(top,  rgba(255,254,252,1) 0%,rgba(244,243,235,1) 69%,rgba(234,233,222,1) 100%);
	background: linear-gradient(to bottom,  rgba(255,254,252,1) 0%,rgba(244,243,235,1) 69%,rgba(234,233,222,1) 100%); 
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fffefc', endColorstr='#eae9de',GradientType=0 );
	
	box-shadow: 1px 1px 1px #ddd;
/*
	text-shadow:0.5px 0.5px 1px #aaa;
*/
	background:rgba(255,255,255,1);
	
	background: linear-gradient(to bottom, rgb(154 241 255 / 46%) 0%,rgb(184 247 247 / 55%) 56%,rgb(116 234 249 / 34%) 100%);
	background:-webkit-linear-gradient(top, rgb(140 213 255) 0%,rgb(109 216 241) 100%);
/*
	background:-webkit-linear-gradient(top, rgb(47 142 197) 0%,rgb(4 88 106) 100%);
*/
}
.active_inactive_button{
	background-color: #d9d9d9;
    background-image: linear-gradient(180deg, #d9d9d9 0%, #f6f2f2 74%);
    position: absolute;
    top: 0px;
    right: 0px;
    z-index: 100;
    width: auto;
    height: auto;
    padding: 5px;
}
.folder_grid_button, .wall_grid_button{
	margin:2px;
	height: 240px;
	cursor: pointer;
	display:inline-block;
}
.folder_grid_button_div, .wall_grid_button_div{
	position: absolute;
    bottom: 0px;
    width: 100%;
	text-align:center;
}
.header_list_button{
	background:rgba(0,0,0,0.2);
}
.folder_list_button{
	width: 100%;
}
.list_p{
	color:#EEE;
	line-height: 44px;
    vertical-align: middle;
    margin-top: -3px;
}
.list_right{
	text-align:right;
	padding-right:20px;
}
.list_left{
	text-align:left;
}
.list_search{
	background-color:#E1FFD1;
	color:green;
}

.clip_button, .label_input{
	margin: 2px 0px 2px 0px;
	color:#EEE;
	height:44px;
	bottom: 0px;
    left: 0px;
	box-shadow: none;
	border-radius: 22px;
	border:none;
	background: rgba(255,255,255,0.1);
	text-align: center;
	/*
	border: 1px solid #4283A9;
	**/
	
	background:rgba(155,205,255,0.2);
	
	background:#4283A9;
	
/*
	background: rgb(0,183,234);
    background: -moz-linear-gradient(top, rgba(0,183,234,1) 0%, rgba(0,146,183,1) 100%);
    background: -webkit-linear-gradient(top, rgba(0,183,234,1) 0%,rgba(0,146,183,1) 100%);
    background: linear-gradient(to bottom, rgba(0,183,234,1) 0%,rgba(0,146,183,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00b7ea', endColorstr='#0092b7',GradientType=0 );	
	

background: rgb(129,201,234); 
background: -moz-linear-gradient(top,  rgba(129,201,234,1) 0%, rgba(74,170,214,1) 85%, rgba(5,143,168,1) 100%); 
background: -webkit-linear-gradient(top,  rgba(129,201,234,1) 0%,rgba(74,170,214,1) 85%,rgba(5,143,168,1) 100%);
background: linear-gradient(to bottom,  rgba(129,201,234,1) 0%,rgba(74,170,214,1) 85%,rgba(5,143,168,1) 100%);

*/
}
.clip_button{
	width:100%;
}
.clip_button:hover, .label_input:hover{
	box-shadow: none;
	
	/*
	box-shadow: 0px 0px 5px #add9e4;
	border:1px solid #add9e4;
	background:#FFF;
	*/
	
	background: rgb(109,179,242); 
	background: -moz-linear-gradient(top,  rgba(109,179,242,1) 0%, rgba(84,163,238,1) 50%, rgba(54,144,240,1) 51%, rgba(30,105,222,1) 100%); 
	background: -webkit-linear-gradient(top,  rgba(109,179,242,1) 0%,rgba(84,163,238,1) 50%,rgba(54,144,240,1) 51%,rgba(30,105,222,1) 100%); 
	background: linear-gradient(to bottom,  rgba(109,179,242,1) 0%,rgba(84,163,238,1) 50%,rgba(54,144,240,1) 51%,rgba(30,105,222,1) 100%); 
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#6db3f2', endColorstr='#1e69de',GradientType=0 );

}
.clip_button{
		background: rgb(109,179,242); 
	background: -moz-linear-gradient(top,  rgba(109,179,242,1) 0%, rgba(84,163,238,1) 50%, rgba(54,144,240,1) 51%, rgba(30,105,222,1) 100%); 
	background: -webkit-linear-gradient(top,  rgba(109,179,242,1) 0%,rgba(84,163,238,1) 50%,rgba(54,144,240,1) 51%,rgba(30,105,222,1) 100%); 
	background: linear-gradient(to bottom,  rgba(109,179,242,1) 0%,rgba(84,163,238,1) 50%,rgba(54,144,240,1) 51%,rgba(30,105,222,1) 100%); 
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#6db3f2', endColorstr='#1e69de',GradientType=0 );
	background: rgba(0,0,0,0.5);
	padding: 0 20 0 20;
}
.clip_button:hover{
	background: rgb(0,183,234);
    background: -moz-linear-gradient(top, rgba(0,183,234,1) 0%, rgba(0,146,183,1) 100%);
    background: -webkit-linear-gradient(top, rgba(0,183,234,1) 0%,rgba(0,146,183,1) 100%);
    background: linear-gradient(to bottom, rgba(0,183,234,1) 0%,rgba(0,146,183,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00b7ea', endColorstr='#0092b7',GradientType=0 );

background: rgb(81,176,226);
    background: -moz-linear-gradient(top, rgba(81,176,226,1) 0%, rgba(37,141,200,1) 100%);
    background: -webkit-linear-gradient(top, rgba(81,176,226,1) 0%,rgba(37,141,200,1) 100%);
    background: linear-gradient(to bottom, rgba(81,176,226,1) 0%,rgba(37,141,200,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#51b0e2', endColorstr='#258dc8',GradientType=0 );	
}
.field{
	height:42px;
	display:inline-block;
}
.section_nav{
	height:44px;
	margin:2 0 2 0;
	width: 100%;
    font-weight: 300;
    border-radius: 20px;
    outline: none;
    font-size: 1.1rem;
    cursor: auto;
    background-color: rgba(255,255,255, 0.1);
	vertical-align:middle;
	border: 1px solid transparent;
	display: inline-block;
}
video{
    border-radius: 3px;
    object-fit: fill;
	object-fit:cover;
	width: 100%;
	height: 100%;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
}

#Nav_37{
	height: 40px;
    width: 1100px;
    background: azure;
    display: inline-block;
}
#Nav_1{
	left:0px;
}
#Nav_5{
	right:0px;
}
#Nav_26{
	width: 12.50%;
}
#Nav_19{
	width: 12.50%;
}
#Nav_20{
	display:none;
}
p{
    margin-block-start: 0;
    margin-block-end: 0;
	font-family:<?= $font_family; ?>;
	font-size:<?= $font_size; ?>;
	font-size: 1.1rem;
	color:var(--color);
	/*height: 33px;*/
	/*height: 40px;*/
    /*padding: 0 8 0 8;*/
    /*padding-top: 7px;*/
	display: inline-block;
	position: relative;
	/*vertical-align: bottom;*/
	line-height: 32px;
	
	-webkit-text-stroke: .005em rgba(201,201,201,0.10);
	
    -webkit-font-smoothing: antialiased !important;
    text-rendering: optimizeLegibility !important;
    vertical-align: middle;
	/*
	-webkit-text-stroke: .05em rgba(201,201,201,0.3);
	*/
}
.height_48{
	height:48px;
}
footer{
	position: fixed;
    bottom: 0px;
    width: 100%;
}
.Footer_1{
	display:none;
	height: 40px;
    width: 100%;
	text-align: center;
}
.Footer_2{
	display:inline-flex;
	height: 50px;
    width: 100%;
	/*
	background: rgba(235,232,225,0.87);
	*/
	/*
    background: rgb(0,183,234);
    background: -moz-linear-gradient(top, rgba(0,183,234,1) 0%, rgba(0,146,183,1) 100%);
    background: -webkit-linear-gradient(top, rgba(0,183,234,1) 0%,rgba(0,146,183,1) 100%);
    background: linear-gradient(to bottom, rgba(0,183,234,1) 0%,rgba(0,146,183,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00b7ea', endColorstr='#0092b7',GradientType=0 );
	*/
	background: rgb(242,245,246); /* Old browsers */
	background: -moz-linear-gradient(top,  rgba(242,245,246,1) 0%, rgba(234,234,234,1) 56%, rgba(201,201,201,1) 100%); /* FF3.6-15 */
	background: -webkit-linear-gradient(top,  rgba(242,245,246,1) 0%,rgba(234,234,234,1) 56%,rgba(201,201,201,1) 100%); /* Chrome10-25,Safari5.1-6 */
	background: linear-gradient(to bottom,  rgba(242,245,246,1) 0%,rgba(234,234,234,1) 56%,rgba(201,201,201,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f2f5f6', endColorstr='#c9c9c9',GradientType=0 ); /* IE6-9 */
	background: linear-gradient(to bottom, rgba(242,245,246,1) 0%,rgba(224,224,224,1) 56%,rgba(191,191,191,0.95) 100%);
	    background: linear-gradient(to bottom, #50507c, #2e2b48, #0d0b1a);
		background: #0f2027;
}
.Namdons{
	width:100%;
}
.Namdons:hover{
	background:rgba(0,200,255,0.1);
}
/*
.Namdon:hover{
background-color:#ccc;
background: linear-gradient(to bottom, rgba(161,161,161,1) 0%,rgba(204,204,204,1) 56%,rgba(212,215,216,1) 100%);
}
*/
.Footer_Nav{
	width: 12.50%;
}
.Nav_Corner{
	width:50px;
	height:50px;
	display: inline-block;
}
.Main_1_Nav_button{
    border-radius: 50%;
    width: 50px;
    height: 40px;
    background-position: center;
    background-size: 35px;
    background-repeat: no-repeat;
    margin: 0px 0px 0px 0px;
}
.Main_3_Nav_button{
	/*border-radius: 50%;
    width: 50px;
    height: 50px;
    background-position: center;
    background-size: contain;*/
	
    border-radius: 50%;
    width: 50px;
    height: 40px;
    background-position: center;
    background-size: 35px;
    background-repeat: no-repeat;
    margin: 0px 5px 0px 0px;
}
.Main_1_Nav, .Main_3_Nav{
	/*
	height: 10%;
	*/
}
main::-webkit-scrollbar {
  display: none;
}
main{
  -ms-overflow-style: none;
}
.main{
	width: 100%;
    text-align: left;
	height: 100%;
	display:flex;
	overflow: unset;
	
	
}
.main::-webkit-scrollbar { 
	display: none; 
}
.main1{
	width: 50%;
    display: inline-block;
    left: 0px;
    display: inline-block;
    border-right: 1px solid #aaa;
	height:10000px;
	height: 0px;
	width: 0px;
    overflow: hidden;
}
.main2{
	text-align: center;
	width: 100%;
	
	/*
	margin-top: <?= $header_margin; ?>px;
	*/
	
	height: auto;
	
	/*
	display: -webkit-box;
	*/
	
	/*
	display: inline-block;
	*/
    
	-webkit-box-align: center;
	
	/*
	background: rgba(0,147,184,0.05);
	*/
	
	overflow-y: scroll;
	
	    text-align: center;
    width: 50%;
    margin-left: 25%;
    /* margin-top: 50px; */
    height: auto;
    display: -webkit-box;
    /* display: inline-block; */
    /* -webkit-box-align: center; */
    /* background: rgba(0,147,184,0.05); */
    overflow-y: scroll;
    display: flex;
    align-content: center;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    flex-direction: row;
}
.main3{
	width: 50px;
    display: inline-block;
    position: fixed;
    right: 0px;
    top: 0px;
    height: calc(100% - 40px);
	display: none;
}
.contents{
    justify-content: space-evenly;
    display: inline-flex;	/* inline-block */
    /*width: 1800;*/
	/*display: -webkit-box;*/
    /* vertical-align: middle; */
    -webkit-box-align: center;
    /*height: 100%;*/
	width: 100%;
	/*
	margin-top: 48px;
	*/
}
.templates_wall{
	margin-top:48px;
}
.img_right_middle{
	float:right;
	margin-top:8px;
	margin-right:4px;
}
input[type="text" i]{
	/*padding:0px;*/
	/*padding-top: 4px;*/
}
input:focus {
	color: cornflowerblue;
    outline-color: cornflowerblue;
	outline-border-style:1px solid cornflowerblue;
}
input{
	height: 2rem;
	color:limegreen;
}
input[type=text]:hover, input[type=password]:hover{
	background-color: rgba(168,255,1, 0.1);
}
input[type=text], input[type=password]{
	text-align: center;
	color:green;
	width: 100%;
	padding: 5px;
    font-weight: 300;
    /*border-radius: 24px;*/
    outline: none;
	cursor: auto;
	background-color: rgba(168,255,1, 0.1);
	font-size:1.3rem;
	line-height: 44px;
	/*
	box-shadow: 0 0 20px 13px rgba(168,255,1, 0.2) inset;
	*/
	/*
	box-shadow:0 0 0 23px rgb(178 255 1 / 60%) inset;
	*/
	/*
	border:1px solid rgb(199 228 128);
	*/
	border:none;
	box-shadow:0px 0px 1.4px yellowgreen;
    /*
	border-bottom: 1px solid yellowgreen;
	*/
	border: 1px solid transparent;
	font-family: var(--font-family);
	box-shadow: 0px 0px 1px yellowgreen inset;
	margin:1px;
}
.templates_res_ok{
	margin:1;
}
input:-webkit-autofill{
	color:green !important;
	background-color:rgba(168,255,1, 0.15) !important;
}
input:-webkit-autofill:focus{
	color:green !important;
	background-color:rgba(168,255,1, 0.15) !important;
}
#input{
	/*
	color:green !important;
	background-color:rgba(168,255,1, 0.15) !important;
	*/
}
input:-internal-autofill-selected {
    appearance: menulist-button;
    /*
	background-color: rgba(255,255,255,0.1);
	*/
    /*
	color: -internal-light-dark(black, white);
	*/
	color:green !important;
	background-color:rgba(168,255,1, 0.15) !important;
}
#templates_res_page_join_div_input_Email:-webkit-autofill {
    background-color: rgba(255,255,255,0.2) !important;
}
#templates_res_page_join_div_input_Password:-webkit-autofill {
    background-color: rgba(255,255,255,0.2) !important;
}
::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: green;
  opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: green;
  opacity: 1;
}

::-ms-input-placeholder { /* Microsoft Edge */
  color:green;;
  opacity: 1;
}
.templates_header_section_toggle_div{
	overflow: scroll;
    overflow-x: hidden;
	-ms-overflow-style: none;  
    scrollbar-width: none; 
	transition-duration: 200ms;
    transition:max-height 200ms;
    transition-timing-function: ease;
}

input:-webkit-autofill
{
	-webkit-text-fill-color: darkseagreen !important;
	font-size: -webkit-xx-large;
	-webkit-text-fill-color:rgba(168,255,1, 0.1);
	-webkit-box-shadow:0 0 0px 30px rgba(168,255,1, 0.13) inset;
	-webkit-background-clip: text;
	border:1px solid rgba(199, 251, 98, 0.6);

}
input:-webkit-autofill:active,
input:-webkit-autofill:focus, 
input:-webkit-autofill:hover
{
	-webkit-text-fill-color: darkseagreen !important;
	font-size: -webkit-xx-large;
	-webkit-text-fill-color:rgba(168,255,1, 0.1);
	-webkit-box-shadow:0 0 0px 30px rgba(168,255,1, 0.13) inset;
	-webkit-background-clip: text;
	border:1px solid rgba(199, 251, 98, 0.6);
}


select{
	display:inline-block;
}
#event_type, #location, .select{
	width: 100%;
    font-size: 1.3rem;
    margin: 1px;
    border: none;
    padding: 14px;
    padding-top: 13px;
    line-height: 54px;
    height: 54px;
    border-radius: 2px;
    outline: none;
	font-family:<?= $font_family; ?>;
}
.option{
	padding: 14px;
	padding-top: 13px;
	line-height: 54px;
    height: 54px;
}
.select:hover option{
	/*
	background: rgb(81,176,226);
	*/
	/*background:#ADDDFF;*/
}
select::-ms-expand {
    display: none; /* Remove default arrow in Internet Explorer 10 and 11 */
}

option{
	font-size: 1.2rem;
}
select:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}
.list_section{
	background:rgba(254,254,254,0.8);
}






































































.templates_res_video_viewsratingsdatepublished_datepublished, .templates_res_video_viewsratingsdatepublished_ratings, .templates_res_video_viewsratingsdatepublished_views{
	width:33%;
	display:inline-block;
	float:left;
}
.templates_res_video{
	display: inline-block;
	width: <?= $user_viewport_width; ?>;
}
.templates_res_video_content_video{
	width: <?= $user_viewport_width; ?>;
	height:<?= $user_viewport_width_height; ?>;
}
.button_inlay_2x2_bottom_left{
	position: absolute;
    bottom: 0;
    left: 0;
    width: 50%;
    height: 50%;
	opacity:0;
}
.button_inlay_2x2_bottom_left:hover{
	background:none;
	opacity:1;
}
.full_width{
	width: <?= $user_viewport_width; ?>;
	display:inline-block;
}
.width2{
	width: <?= $user_settings_main2; ?>;
	display:inline-block;
}

.div_16x9{
	width: <?= $user_settings_main2 - $user_settings_margin; ?>;
	height:<?= $user_settings_main2_height; ?>;
	display:inline-block;
}

.toggle_maxheight{
	position:relative;
}
.templates_element_image{
}
.templates_header_section_article{
	display: inline-block;
    width: 50%;
}
.templates_header_section_article_left{
	text-align: left;
    width:90%;
    display: inline-block;
}

.templates_header_section_article_right{
	width:10%;
	display:inline-block;
}
.spacer_50{
	margin-top:50px;
}

.button50{
	padding: 0;
    width: 48;
	height: 48;
	/*
	background: rgba(0,0,0,0.03);
	*/
}

.header{
	background:linear-gradient(to bottom, rgba(252,255,256,1) 0%,rgba(244,244,244,1) 56%,rgba(241,241,241,1) 100%);
}
























































































.progress-wrp {
    border: 1px solid #ccc;
    position: relative;
    height: 42px;
    border-radius: 20px;
    width: 100%;
    text-align: center;
    background: none;
}

.progress-bar {
	height: 100%;
    border-radius: 20px;
    background-color: #00BC00;
    width: 0;
    color: #eee;
}

.status {
	top: 6px;
	left: 49%;
	position: absolute;
	display: inline-block;
	color: #eee;
}














































.templates_html{
    /*
	display: inline-flex;
	width:calc(100% - 10px);
	*/
	width:100%;
	display: inline-block;
	/*
	background: rgba(0,147,184,0.05);
	*/
}
.templates_html_folder_band_wall{
    width:calc(25% - 2px);
    display: inline-flex;
    margin-top: 1px;
    margin-right: 1px;
}
.div_height_70pc{
	    aspect-ratio: 16 / 9;
}
.div_height_30pc{
	line-height: 32px;
    display: inline-block;
    vertical-align: middle;
    margin-left: 2px;
}
.templates_html_folder_button_wall_button_grid_div_height_30pc_title{
	
}
.templates_html_folder{
	/*display: flex;
    flex-direction: row;
    justify-content: center;*/
	display:block;
}
.templates_html_file_header_topbar_header_p, .templates_html_folder_header_topbar{
	color:#eee;
}
.templates_html_file_header{
   /*position: fixed;
    top: 0px;
    left: 0px;*/
    width: 100%;
    display: inline-block;
    margin-top: 1px;
	/*background: linear-gradient(to bottom, rgba(250,250,255,1) 0%,rgba(247,247,247,1) 56%,rgb(234 234 234) 100%); 
	background: #0F2027;  
	background: -webkit-linear-gradient(to bottom, #2C5364, #203A43, #0F2027);  
	background: linear-gradient(to bottom, #2C5364, #203A43, #0F2027); */
}
.templates_html_folder_header_wall, .templates_html_file_header_res{
	background: linear-gradient(to bottom, #2C5364, #203A43, #0F2027);
	background:#19313B;
	/*background:rgba(255,255,255,1);*/
}
.templates_html_folder_header_wall_header_p, .templates_html_file_header_res_header_p{
	/*color:#111;*/
	color:#eee;
}
.templates_html_folder_header_tile, .templates_html_folder_header_songlist{
	margin-top:54px;
}
.templates_html_folder_header_tile_header_p, .templates_html_folder_header_list_header_p{
	margin-left:5px;
	/*color:#111;*/
}
.button50_right{
	padding:5px;	
}
.button50_right:hover{
	background: rgba(255,255,255,0.2);
}
.button50:hover{
	background: rgba(255,255,255,1);
}
.templates_html_file_contents{
	margin-top: 1px;
}
.templates_html_folder_image_tile{
	width:19%;
	aspect-ratio:16 / 10;
	/*width: 248px;
    height: 160px;*/
    display: inline-block;
    /* margin-left: 1px; */
    margin-right: 1px;
    margin-top: 1px;
}
.templates_html_folder_contents{
	/*display: inline-flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;*/
	/*max-height:384px;
	overflow:hidden;*/
	width:100%;
	display: inline-block;
}
.templates_html_folder_text_list{
    line-height: 44px;
    background: rgba(0,0,0,0.1);
    border-radius: 2px;
	padding:5px;
    /* border: 1px solid transparent; */
    margin: 1px;
	margin-right: 0px;
	/*width:498px;*/
	display: inline-block;
	padding: 5px 10px 5px 10px;
}
.templates_html_folder_text_list:hover{
	background: rgb(0,0,0,0.34);
}
.templates_html_folder_text_list:hover .templates_html_folder_text_list_width_list_text_songlist_a{
	
    color: #eee;
	text-shadow:0px 1px 0px #aaa;
}
.width_auto{
	padding:0px 12px 0px 12px;
}
.width_list{
}
section{
	/*margin-top:48px;*/
}
.templates{
	display: inline-block;
    width: 60%;
    margin-left: 20%;
    margin-right: 20%;
}
.templates_html_folder_button_wall_button_grid, .list_button, .templates_html_folder_button_list_button_grid{

	width: 50%;
    height: auto;
	text-align:left;
    display: inline-block;
    vertical-align: middle;
	line-height:64px;
    border-radius: 2px;
    margin:1px;
	border:1px solid transparent;
    padding: 5px;
    /*background: darkslategray;
	background: linear-gradient(to bottom, #1f4a5c, #203A43, #0F2027);*/
	background: rgba(255,255,255,0.7);
	/*border-radius: 40px;*/
	background:#104A62;
	/*background:rgba(255,255,255,0.95);*/
	
	/*
	display: inline-block;
    width: 70%;
    line-height: 44px;
    padding: 10px 10px 8px 10px;
    margin: 2px;
    border: 1px solid transparent;
    text-align: left;
    transition: transform .2s;
    border-left: 2px double dodgerblue;
    border-right: 1px double dodgerblue;
    display: inline-block;
    border-radius: 50px 0px 50px 0px;
    margin: 2px;
    padding: 10px 0px 10px 0px;
    border-top: 0px;
    border-bottom: 0px;
    background: rgba(0,0,0,0.2);
	*/
}
.mid_button{
	width: 50%;
    height: auto;
	text-align:left;
    display: inline-block;
    vertical-align: middle;
	line-height:44px;
    border-radius: 2px;
    margin:1px;
	border:1px solid transparent;
    padding: 5px;
    /*background: darkslategray;
	background: linear-gradient(to bottom, #1f4a5c, #203A43, #0F2027);*/
	background: rgba(255,255,255,0.7);
	/*border-radius: 40px;*/
	background:#00568C;
	background:rgba(255,255,255,0.6);
}
.templates_html_folder_button_wall_button_grid:hover, .mid_button:hover, .templates_html_folder_button_list_button_grid:hover{
	/*background: linear-gradient(to bottom, #4e89a3, #407183, #3e7f9b);
	background:#C7EBFF;*/
	box-shadow:0px 0px 2px #555;
	
	background:#005D9E;
	/*
	background:rgba(255,255,255,1);*/
	transform:scale(1.05);
	transition: all 0.2s ease;
}
.templates_html_folder_button_wall_button_grid_img, .templates_html_folder_button_list_button_grid_img{
	/*
	width: 40px;
    height: 40px;
    display: inline-flex;
    vertical-align: middle;
	*/
	
	width: 25px;
    padding-left: 15px;
    padding-top: 15px;
    height: 25px;
    display: inline-flex;
    vertical-align: middle;
}
.templates_html_folder_button_wall{
	width: auto;
    height: auto;
    display: block;
}
.templates_html_folder_file_wall_button_grid_img{
	width:44px;
	height:44px;
	vertical-align: middle;
}
.templates_html_folder_file_wall_button_grid{
	text-align:left;
}
.templates_html_folder_folder_list_text_list:hover, .templates_html_folder_title_list_text_list:hover, .button:hover{
	transform:scale(1.05);
	transition: 0.2s ease-out;
	background:rgba(0,200,255,0.1);
}
.templates_html_folder_folder_wall{
	width: 240px;
    height: 240px;
	display:inline-block;
}
.templates_html_folder_folder_wall_button_grid:hover, .templates_html_folder_file_list_text_list:hover, .templates_html_folder_file_wall_button_grid:hover{
	transition: 0.2s ease-out;
	transform: scale(1.05);
	background-color:rgba(0,200,255,0.1);
}
.templates_html_folder_folder_wall_button_grid_img{
	width: 200px;
    height: 200px;
	display:inline-block;
}
.p_title{
	width: auto;
	color: #222;
    font-size: 1rem;
    line-height: 44px;
    font-family: Roboto, pt sans narrow, Sans Serif;
    text-decoration: none;
    text-shadow: 0px 0px 1px #aaa;
    vertical-align: middle;
    word-break: break-word;
    margin-left: 6px;
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
}
.templates_html_folder_image_wall_img_poster{
	width:25%;
	aspect-ratio: 16 / 10;
	height: auto;
}
.templates_html_folder_image_wall{
	display: inline-block;
    margin: 1px;
}
.templates_html_folder_file_wall{
	width: 50%;
    height: 44px;
    /* margin-left: 8px; */
    height: 44px;
    text-align: left;
    padding: 2px;
}
/*
.templates_html_folder_title_res_img{
	width: 70%;
    aspect-ratio: 16 / 10;
}
*/
/*
.templates_html_folder_title_res, .templates_html_folder_subtitle_res{
	
}
*/
.section{
	padding:20px;
}
.templates_html_folder_folder_list, 
.templates_html_folder_file_list, 
.templates_html_folder_title_list, 
.templates_html_folder_subtitle_list, 
.templates_html_folder_list_list, 
.templates_html_folder_paragraph_list, 
.templates_html_folder_paragraph_left_list, 
.templates_html_folder_paragraph_right_list, 
.templates_html_folder_paragraph_image_right_list,
.templates_html_folder_lecture_list,
.templates_html_file_title_list, 
.templates_html_file_subtitle_list,
.templates_html_file_paragraph_list,
.templates_html_file_paragraph_left_list, 
.templates_html_file_paragraph_right_list, 
.templates_html_file_paragraph_image_right_list,
.templates_html_file_lecture_list{
	width: calc(100% - 20px);
    margin-left: 8px;
    height: 44px;
    text-align: left;
    padding: 2px;
}
.templates_html_folder_folder_list_text_list_div, 
.templates_html_folder_file_list_text_list_div, 
.templates_html_folder_title_list_text_list_div, 
.templates_html_folder_subtitle_list_text_list_div, 
.templates_html_folder_list_list_text_list_div, 
.templates_html_folder_paragraph_list_text_list_div, 
.templates_html_folder_paragraph_left_list_text_list_div, 
.templates_html_folder_paragraph_image_right_list_text_list_div, 
.templates_html_folder_lecture_list_text_list_div,
.templates_html_file_file_list_text_list_div, 
.templates_html_file_file_list_text_list_div, 
.templates_html_file_title_list_text_list_div, 
.templates_html_file_subtitle_list_text_list_div, 
.templates_html_file_list_list_text_list_div, 
.templates_html_file_paragraph_list_text_list_div, 
.templates_html_file_paragraph_left_list_text_list_div, 
.templates_html_file_paragraph_image_right_list_text_list_div, 
.templates_html_file_lecture_list_text_list_div{
	text-align:left;
	display: inline-flex;
	width: 100%;
	vertical-align: middle;
}
.templates_html_folder_title_res_img_res, .templates_html_folder_subtitle_res_img{
	aspect-ratio: 16 /10;
}
.subtitle{
	font-size:2rem;
	font-family:'Roboto', sans serif;
	font-style:italic;
}
.div_background_img{
	background-position:contain;
	background-size:100% 100%;
	height:100%;
	aspect-ratio: 16 / 10;
	display: inline-block;
}
.div_title{
	height:calc(100% - 216px);
	width:100%;
	text-align: center;
	position: relative;
}
.title{
    position: absolute;
    color: #eee;
    font-size: 5rem;
    line-height: 5rem;
    padding: 5%;
    top: 0px;
    left: 0px;
}
.paragraph_left, .paragraph_right{
	width:49%;
	display:inline-block;
	vertical-align:middle;
	text-align: left;
}
.paragraph_image_right{
	aspect-ratio:16 / 10;
	vertical-align:middle;
	width:49%;
	display:inline-block;
}
.templates_html_folder_lecture_wall{
    width: 24%;
    aspect-ratio: 16 /10;
    display:inline-grid;
    margin: 0.5%;
	margin-left: 0px;
    margin-bottom: 0px;
}
.title_wall{
	height: 64px;
}
.img_wall{
	aspect-ratio:16 / 10;
}















































.caption{
    position: absolute;
    width: calc(100% - 8%);
    top: 40%;
    left: 2%;
    font-size: 1.4rem;
    color: #eee;
    padding: 2%;
    border-radius: 4px;
    /*
	background-color: rgba(0,0,0,0.6);
	*/
}
.masonry {
	width:32%;
	aspect-ratio: 16 / 10;
	display:inline-block;
	position:relative;
	transition: 0.2s ease-in-out;
    transform: scale(1);
}
.masonry:hover{
    background: rgba(0,0,0,0.4);
    transition: 0.2s ease-in-out;
    transform: scale(1.1);
    box-shadow: 0px 0px 10px #222;
}
/*
.templates_masonry_folder_img{
	height:100%;
	width:100%;
}
*/

audio{
	position: absolute;
    width: 100%;
    bottom: 0px;
    left: 0px;
}



















.h2, .p_normal{
	color:#555;
}
.p_text{
	/*
	color:inherit;
	**/
	color:#eee;
}
.p_focused{
	/*
	color:#00C4EE;
	-webkit-text-stroke: 0.005em rgba(0,165,206,0.30);
	*/
}
.p_faded{
	color:#CCC;
}
.button_list_button, .folder_list_button{
	color:#eee;
}
.button_list_button:hover, .folder_list_button:hover, .header_section_div_button:hover{
}
.header_upload{
	color:chartreuse;
}
.header_addnew{
	color:#B3EAFF;
}
.header_paste{
	color:yellow /*#FEA3FF*/;
}
.header_section_div_button{
	color: inherit;
    height: 42px;
    vertical-align: middle;
}
.header_section_div_button {
    position:relative;
    height: 42;
	padding-right: 5px;
}
/*
.header_section_div_button:before {
    content: "";
    position: absolute;
    bottom: -1px;
    left: -20px;
    border-radius: 20px;
    border-style: solid;
	opacity: 0.4;
	border: 21px solid background;
}
*/


.animate_opacity{
	animation-name: opacity;
	animation-duration: <?= $user_settings_delay; ?>ms;
    animation-timing-function: ease-in-out;
    animation-delay: 0s;
    animation-iteration-count: 1;
    animation-fill-mode: none;
    animation-play-state: running;
}
@keyframes opacity {
	0% {
		opacity: 0.1;
	}
	50% {
	}
	100% {
		opacity: 1;
	}
}

.animate_opacity_half_speed{
	animation-name: opacity_half_speed;
	animation-duration: <?= $user_settings_delay2; ?>ms;
    animation-timing-function: ease-in-out;
    animation-delay: 0s;
    animation-iteration-count: 1;
    animation-fill-mode: none;
    animation-play-state: running;
}
@keyframes opacity_half_speed {
	0% {
		opacity: 0.1;
	}
	50% {
	}
	100% {
		opacity: 1;
	}
}

.animate_stretch{
	animation-name: stretch;
    animation-duration: <?= $user_settings_delay; ?>ms;
    animation-timing-function: ease-in-out;
    animation-delay: 0s;
    animation-iteration-count: 1;
    animation-fill-mode: none;
    animation-play-state: running;
	transition: max-height 200ms ease-in-out;
	-ms-overflow-style: none;  
    scrollbar-width: none; 
	
}
.animate_stretch::-webkit-scrollbar{
	display:none;
}
@keyframes stretch {
	0% {
		transform: scale(0.8);
		opacity: 0.1;
	}
	50% {
	}
	100% {
		transform: scale(1);
		opacity: 1;
	}
}

.animate_transform{
	animation-name: transform;
    animation-duration: <?= $user_settings_delay; ?>ms;
    animation-timing-function: ease-in-out;
    animation-delay: 0s;
    animation-iteration-count: 1;
    animation-fill-mode: none;
    animation-play-state: running;
}
@keyframes transform {
	0% {
		transform: scale(0.8);
		opacity: 0.1;
	}
	50% {
	}
	100% {
		transform: scale(1);
		opacity: 1;
	}
}




	 /*
	animation-direction: alternate;
	*/

@keyframes flickerAnimation {
	0%   	{ opacity:0;background: rgba(0,0,0,0); }
	50% 	{ opacity:1;background: rgba(255,215,1, 0.5); }
	100%   	{ opacity:0;background: rgba(0,0,0,0); }
}
@-o-keyframes flickerAnimation{
	0%   	{ opacity:0;background: rgba(0,0,0,0); }
	50% 	{ opacity:1;background: rgba(255,215,1, 0.5); }
	100%   	{ opacity:0;background: rgba(0,0,0,0); }
}
@-moz-keyframes flickerAnimation{
	0%   	{ opacity:0;background: rgba(0,0,0,0); }
	50% 	{ opacity:1;background: rgba(255,215,1, 0.5); }
	100%   	{ opacity:0;background: rgba(0,0,0,0); }
}
@-webkit-keyframes flickerAnimation{
	0%   	{ opacity:0;background: rgba(0,0,0,0); }
	50% 	{ opacity:1;background: rgba(255,215,1, 0.5); }
	100%   	{ opacity:0;background: rgba(0,0,0,0); }
}
.fade_in_fade_out {
   -webkit-animation: flickerAnimation 1.6s infinite;
   -moz-animation: flickerAnimation 1.6s infinite;
   -o-animation: flickerAnimation 1.6s infinite;
    animation: flickerAnimation 1.6s infinite;
}
@keyframes hover_in {
	0%   { opacity:0;background: rgba(0,0,0,0); }
	100% { opacity:1;background: rgba(255,215,1, 0.5); }
}
@-o-keyframes hover_in{
	0%   { opacity:0;background: rgba(0,0,0,0); }
	100% { opacity:1;background: rgba(255,215,1, 0.5); }
}
@-moz-keyframes hover_in{
	0%   { opacity:0;background: rgba(0,0,0,0); }
	100% { opacity:1;background: rgba(255,215,1, 0.5); }
}
@-webkit-keyframes hover_in{
	0%   { opacity:0;background: rgba(0,0,0,0); }
	100% { opacity:1;background: rgba(255,215,1, 0.5); }
}
.hover_in {
   -webkit-animation: hover_in 0.2s;
   -moz-animation: hover_in 0.2s;
   -o-animation: hover_in 0.2s;
    animation: hover_in 0.2s;
}
.fade_in_fade_out:hover 
{
    -webkit-animation-play-state:step-end;
    -moz-animation-play-state:step-end;
    -o-animation-play-state: step-end;
    animation-play-state: step-end;
    animation: step-end;
}

</style>
<?php

return ob_get_clean();

?>












