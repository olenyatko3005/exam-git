<?php
function the_breadcrumb() {
		echo '<ul id="crumbs" class="breadcrumb-style">';
	if (!is_home()) {
		echo '<li class="breadcrumb-item"><a href="';
		echo get_option('home');
		echo '">';
		echo 'Home';
		echo "</a></li>";
		if (is_category() || is_single()) {
			echo '<li class="breadcrumb-item">';
			the_category(' </li><li> ');
			if (is_single()) {
				echo "</li><li>";
				the_title();
				echo '</li>';
			}
		} elseif (is_page()) {
			echo '<li class="breadcrumb-item">';
			echo the_title();
			echo '</li>';
		}
	}
	elseif (is_home()) { 
		echo '<li class="breadcrumb-item"><a href="';
		echo get_option('home');
		echo '">';
		echo 'Home';
		echo "</a></li>"; 
		single_post_title();
	}
	elseif (is_tag()) {single_tag_title();}
	elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
	elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
	elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
	elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
	elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
	elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
	echo '</ul>';
}
?>
