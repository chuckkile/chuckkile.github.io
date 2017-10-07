<?php
/*
Plugin Name: GR Lorem Ipsum Generator
Plugin URI: http://wordpress.org/plugins/gr-lorem-ipsum-generator/
Description: Generates one or more randomly selected paragraphs of Lorem Ipsum text from shortcode. Use shortcode [lorem] for one paragraph. Or add para= X to generate X number of paragraphs. Example [lorem para=3] for 3 paragraphs.
Version: 2.1
Author: John Wierenga
Author URI: http://johnwierenga.com

/*  Copyright 2014 John Wierenga (email : john@grandrapidsweb.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/        
function gr_sc_lorem_function($gr_sc_lorem_gratts) {
   extract(shortcode_atts(array(
      'para' => 1,
   ), $gr_sc_lorem_gratts));
   $gr_sc_lorem_gr_sc_lorem_loop = 1;
   $gr_sc_lorem_imsum=null;
while ($gr_sc_lorem_gr_sc_lorem_loop <= $para) {
$gr_sc_lorem_num =rand ( 1 , 16 );
if ($gr_sc_lorem_num == 1)
{
$gr_sc_lorem_imsum .= "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec nulla vitae lacus mattis volutpat eu at sapien. Nunc interdum congue libero, quis laoreet elit sagittis ut. Pellentesque lacus erat, dictum condimentum pharetra vel, malesuada volutpat risus. Nunc sit amet risus dolor. Etiam posuere tellus nisl. Integer lorem ligula, tempor eu laoreet ac, eleifend quis diam. Proin cursus, nibh eu vehicula varius, lacus elit eleifend elit, eget commodo ante felis at neque. Integer sit amet justo sed elit porta convallis a at metus. Suspendisse molestie turpis pulvinar nisl tincidunt quis fringilla enim lobortis. Curabitur placerat quam ac sem venenatis blandit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam sed ligula nisl. Nam ullamcorper elit id magna hendrerit sit amet dignissim elit sodales. Aenean accumsan consectetur rutrum.</p>";
}
else if ($gr_sc_lorem_num == 2)
{
$gr_sc_lorem_imsum .= "<p>Nam laoreet laoreet magna et volutpat. Donec sodales massa ac egestas viverra. Maecenas leo urna, malesuada ac vulputate nec, porta sit amet felis. Vestibulum a ornare nisi. Cras vel ultricies nulla. Fusce sagittis, purus ac lacinia euismod, magna erat consequat leo, id consequat lectus dui non nisi. In posuere turpis nec vulputate accumsan. Etiam ut fermentum mi. Vivamus id mattis sem. Mauris in magna nisl. Suspendisse ac lacus in ante vehicula accumsan sit amet sed augue. Sed vestibulum pellentesque posuere. Curabitur imperdiet sapien at facilisis molestie.</p>";
}
else if ($gr_sc_lorem_num == 3)
{
$gr_sc_lorem_imsum .= "<p>Sed nec bibendum turpis. Aliquam vel egestas neque. Mauris sit amet odio vitae tortor varius adipiscing. Duis nec est in elit facilisis lobortis. Nullam eget erat ut sem porttitor condimentum. Aliquam sed dolor magna. Donec commodo nibh pellentesque, consequat massa sed, suscipit lectus. Nullam tristique molestie tempor. Aliquam ut orci nec magna porttitor eleifend et ut orci. Sed scelerisque quam ut lectus eleifend dapibus. Aliquam posuere pharetra mi. Phasellus ac mauris at nibh lacinia pellentesque ut non felis. Ut commodo elit enim, id rhoncus dolor blandit quis. Praesent magna arcu, luctus sit amet suscipit at, rhoncus id eros. Donec in sem consequat, pharetra odio ac, sodales est. Maecenas consectetur bibendum leo eget accumsan.</p>";
}
else if ($gr_sc_lorem_num == 4)
{
$gr_sc_lorem_imsum .= "<p>Curabitur in enim eu sem tempus imperdiet vitae a nunc. Duis sit amet magna eget nibh tristique lacinia a id lorem. Nam posuere nulla feugiat ipsum scelerisque, feugiat pharetra lectus pellentesque. Donec et hendrerit augue, at egestas mauris. Duis scelerisque ultricies accumsan. Ut semper urna sed nulla pharetra eleifend. Etiam quis eros eget metus viverra tincidunt sit amet eu ante.</p>";
}
else if ($gr_sc_lorem_num == 5)
{
$gr_sc_lorem_imsum .= "<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque adipiscing nisi non pellentesque congue. Vivamus risus ipsum, blandit et egestas a, blandit a lorem. Sed tempus dapibus felis, ac vestibulum est luctus sit amet. Nam aliquam iaculis enim, sed mollis mi suscipit gravida. Mauris in tellus sem. Morbi tempus ante id libero dignissim ultricies. Maecenas quam sem, porttitor at leo eget, fringilla consequat leo. Duis malesuada vulputate tortor, id eleifend arcu posuere vel. Donec eleifend malesuada elit, vitae egestas elit mattis vitae. Maecenas tristique accumsan sagittis. Cras justo lorem, rutrum quis faucibus non, consequat euismod neque. Aliquam a tortor in velit facilisis elementum. Curabitur ac nunc ac nulla aliquet tristique et nec orci. Vivamus neque neque, malesuada laoreet lectus nec, sagittis sodales metus.</p>";
}
else if ($gr_sc_lorem_num == 6)
{
$gr_sc_lorem_imsum .= "<p>Fusce sed nisi pharetra, hendrerit dolor vel, faucibus enim. Vivamus at venenatis arcu. Nullam viverra metus sapien, ac tempus ante eleifend et. Nam at commodo diam. Integer et placerat arcu, sit amet venenatis est. Praesent id dolor turpis. Pellentesque dui dolor, euismod et pharetra nec, egestas a ante. Curabitur pretium nisl a interdum fringilla. Nam ullamcorper mi ut varius blandit. Integer pretium elit eget nibh tincidunt, sed lacinia nisl scelerisque.</p>";
}
else if ($gr_sc_lorem_num == 7)
{
$gr_sc_lorem_imsum .= "<p>Cras consectetur quam vitae felis varius auctor. Aenean sagittis, nulla et varius suscipit, ligula odio suscipit est, sit amet hendrerit leo augue nec lorem. Donec commodo metus nec arcu tempus, at elementum neque suscipit. Fusce non bibendum lacus, nec porta mi. Vivamus et rutrum risus, et suscipit quam. Vivamus posuere dui eget elit suscipit, id malesuada arcu sollicitudin. Nulla blandit erat purus, nec posuere nisl vulputate vel. Suspendisse potenti. Nam ut nisi vel dui mollis elementum. Donec porta hendrerit velit, volutpat varius elit consectetur vel.</p>";
}
else if ($gr_sc_lorem_num == 8)
{
$gr_sc_lorem_imsum .= "<p>Vestibulum vestibulum arcu in adipiscing tempor. Phasellus in tortor quis tortor pellentesque eleifend. Aenean posuere libero eu nisl vestibulum, non elementum eros lacinia. Duis quis lorem venenatis, vehicula augue a, molestie lorem. Praesent non sapien elit. Mauris aliquet convallis leo, eu scelerisque mi consectetur eget. Curabitur posuere eget nisi sit amet congue. Suspendisse auctor blandit dui. Nullam eget nisi lobortis, semper dui vitae, sagittis urna.</p>";
}
else if ($gr_sc_lorem_num == 9)
{
$gr_sc_lorem_imsum .= "<p>Phasellus feugiat odio ac eros volutpat tempor. Cras egestas, purus nec viverra varius, est eros cursus neque, ac iaculis est arcu et mi. Nunc dictum porta vestibulum. In auctor ornare velit dapibus malesuada. Quisque sodales varius risus, eu pretium velit porttitor sed. Cras nulla ipsum, placerat a eros eu, imperdiet tincidunt metus. Morbi sagittis ligula ut ante lobortis eleifend. Curabitur fermentum, justo sit amet mollis fringilla, ante felis dignissim felis, quis sagittis felis justo ac nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent vel eleifend lacus, nec ultrices erat. Integer porttitor hendrerit ipsum. Suspendisse potenti. Interdum et malesuada fames ac ante ipsum primis in faucibus. In quis sapien consectetur, placerat ante vitae, congue lacus. Pellentesque interdum vitae arcu a dignissim. Integer vehicula turpis posuere orci laoreet tincidunt.</p>";
}
else if ($gr_sc_lorem_num == 10)
{
$gr_sc_lorem_imsum .= "<p>Duis nec pretium velit, id hendrerit urna. Ut vulputate dolor id nulla vestibulum gravida. Maecenas massa risus, dapibus in faucibus at, scelerisque et velit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut tincidunt erat libero, at sollicitudin nisl porta eget. Curabitur id nibh sit amet nibh lacinia tincidunt et in mi. Nam ornare malesuada porta. Nullam vitae purus quis purus molestie porttitor eu et nisi.</p>";
}
else if ($gr_sc_lorem_num == 11)
{
$gr_sc_lorem_imsum .= "<p>Nullam ultrices lorem turpis, id scelerisque lorem commodo vitae. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc eu nulla nisl. Maecenas hendrerit neque eget tortor sodales eleifend. Morbi pharetra ultricies tortor, eu pellentesque lorem lobortis sit amet. Pellentesque facilisis urna sed nisl volutpat, in cursus lorem aliquam. Nam quis erat magna. Sed quam tellus, gravida vel fermentum ultricies, adipiscing at lorem.</p>";
}
else if ($gr_sc_lorem_num == 12)
{
$gr_sc_lorem_imsum .= "<p>Quisque eu interdum lacus. Aenean eget turpis ac elit pharetra scelerisque vel quis diam. Etiam eleifend vulputate interdum. In vel nisl tellus. Sed euismod ipsum sit amet enim sollicitudin laoreet. Vestibulum ac adipiscing mi, sit amet sollicitudin elit. In eget volutpat nisi. Mauris id euismod eros. Maecenas pretium augue nulla, quis pharetra metus rhoncus eget. Vivamus ut felis eu orci lobortis convallis. Quisque id ornare lacus, at dapibus arcu. In et pharetra nibh, semper vulputate sem.</p>";
}
else if ($gr_sc_lorem_num == 13)
{
$gr_sc_lorem_imsum .= "<p>Aliquam sodales lorem nec pretium aliquam. Nam in tempus elit. Nunc gravida nunc at lacinia iaculis. Nulla porta tortor id dolor iaculis euismod. Vestibulum rutrum feugiat mollis. Duis condimentum lacus sed pharetra condimentum. Nulla vitae porttitor nunc. Curabitur sit amet quam tellus. Suspendisse suscipit ipsum nec varius lobortis. Nunc laoreet, ipsum nec porttitor mollis, neque sem mollis odio, id molestie eros erat vel enim.</p>";
}
else if ($gr_sc_lorem_num == 14)
{
$gr_sc_lorem_imsum .= "<p>Nunc porta blandit aliquam. Aliquam molestie vel sem id aliquet. Etiam cursus dignissim leo in egestas. Morbi rutrum pharetra magna ac rhoncus. Proin urna ligula, dapibus quis venenatis in, varius a purus. Mauris tincidunt non ligula ac volutpat. Nulla augue arcu, euismod in elementum vel, ultricies sit amet felis. Suspendisse ac ligula eu libero vulputate gravida. Etiam venenatis suscipit auctor.</p>";
}
else if ($gr_sc_lorem_num == 15)
{
$gr_sc_lorem_imsum .= "<p>Pellentesque tincidunt arcu a urna ullamcorper, id malesuada justo porttitor. Vestibulum eu aliquet orci. Mauris tellus nulla, pellentesque ut metus sed, dignissim consequat quam. Nunc luctus, nulla sed tempor congue, ante lectus sollicitudin ante, a malesuada felis nisl eu mauris. Aenean velit lorem, pellentesque quis volutpat non, lacinia vel velit. Vivamus imperdiet felis faucibus augue semper, sed auctor quam ornare. Quisque tortor enim, mattis eu lobortis laoreet, varius fermentum enim. Ut mattis quis sapien eget imperdiet. Etiam sed consectetur mauris. Ut scelerisque mollis erat, interdum semper lorem malesuada vitae. Mauris nisl tellus, cursus eu libero et, congue commodo velit. Praesent mollis ultrices tincidunt. Cras eleifend ante id mauris pulvinar, sit amet interdum nunc convallis. In ante metus, consequat ut ligula sit amet, imperdiet ornare justo.</p>";
}
else if ($gr_sc_lorem_num == 16)
{
$gr_sc_lorem_imsum .= "<p>Vorbi Aitae Lrat Ot Relis Oehicula Uharetra. Sras Cel Ist Raximus, Codales Lrci Eget, Sorttitor Uugue. Cenean Kurpis Sx, egestas quis risus at, varius lobortis sem. In tincidunt pellentesque ante, vitae ullamcorper eros porttitor at. Cras sit amet ante eros. Nulla facilisi. Fusce cursus, leo at porttitor bibendum, risus mauris vulputate mi, at dignissim augue lacus id metus. Nullam eleifend rhoncus aliquam.</p>";
}
$gr_sc_lorem_gr_sc_lorem_loop++;
}
  return $gr_sc_lorem_imsum;
}
add_shortcode('lorem', 'gr_sc_lorem_function');
?>
