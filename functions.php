<?php
add_filter( 'discourse_replies_html', 'add_topic_map' );
function add_topic_map($content){
	$topic_map_styles = '
<styles>
	
</styles>
	';
	$topic_map = '
<div class="topic-map">
	<section class="map map-collapsed">
		<nav class="buttons">
			<button class="widget-button btn btn no-text btn-icon" aria-label="toggle topic details" title="toggle topic details">
				<i class="fa fa-chevron-down d-icon d-icon-chevron-down" aria-hidden="true"></i>
			</button>
		</nav>
		<ul class="clearfix">
			<li>
				<h4>created</h4>
				<div class="topic-map-post created-at">
					<a class="trigger-user-card " data-user-card="joebuhlig">
						<img alt="" width="20" height="20" src="/user_avatar/team.procourse.co/joebuhlig/20/3_1.png" title="joebuhlig" class="avatar">
					</a>
					<span title="Jun 8, 2018 12:23 am" data-time="1528397631731" data-format="tiny" class="relative-date">Jun 8</span>
				</div>
			</li>
			<li>
				<a href="/t/rstudio-discourse-theme-to-show-user-custom-fields-as-columns-on-group-page/187/16">
					<h4>last reply</h4>
					<div class="topic-map-post last-reply">
						<a class="trigger-user-card " data-user-card="sudaraka">
							<img alt="" width="20" height="20" src="/user_avatar/team.procourse.co/sudaraka/20/16_1.png" title="sudaraka" class="avatar">
						</a>
						<span title="Aug 24, 2018 9:54 pm" data-time="1535127861266" data-format="tiny" class="relative-date">23h</span>
					</div>
				</a>
			</li>
			<li>
				<span class="number">15</span>
				<h4>replies</h4>
			</li>
			<li class="secondary">
				<span class="number">27</span>
				<h4>views</h4>
			</li>
			<li class="secondary">
				<span class="number">2</span>
				<h4>users</h4>
			</li>
			<li class="secondary">
				<span class="number">9</span>
				<h4>likes</h4>
			</li>
			<li class="secondary">
				<span class="number">4</span>
				<h4>links</h4>
			</li>
			<li class="avatars">
				<div>
					<a class="poster trigger-user-card" title="joebuhlig" data-user-card="joebuhlig">
						<img alt="" width="32" height="32" src="/user_avatar/team.procourse.co/joebuhlig/32/3_1.png" title="joebuhlig" class="avatar">
						<span class="post-count">8</span>
					</a>
				</div>
				<div>
					<a class="poster trigger-user-card" title="sudaraka" data-user-card="sudaraka">
						<img alt="" width="32" height="32" src="/user_avatar/team.procourse.co/sudaraka/32/16_1.png" title="sudaraka" class="avatar">
						<span class="post-count">8</span>
					</a>
				</div>
			</li>
		</ul>
	</section>
</div>
';

	return $topic_map . $content;
}

?>
