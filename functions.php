<?php
//Enqueue the Dashicons script
add_action('wp_enqueue_scripts', 'load_dashicons_front_end');
function load_dashicons_front_end()
{
    wp_enqueue_style('dashicons');
}

//Enqueue the Styles
wp_enqueue_style('topic-map-style', get_theme_file_uri('/assets/css/topic-map.css'));

//Enqueue the Scripts
wp_enqueue_script('topic-map-expand-toggle', get_theme_file_uri('/assets/js/topic-map.js'), array(
    'jquery'
), '1.0', true);

add_filter('discourse_replies_html', 'add_topic_map');
function add_topic_map($content)
{
    $topic_map = '
<div class="topic-map">
    <section class="map map-collapsed">
        <nav class="buttons">
            <button class="widget-button btn btn no-text btn-icon" id="toggle-expand">
                <span id="arrow" class="dashicons dashicons-arrow-down-alt2"></span>
            </button>
        </nav>
        <ul class="clearfix">
            <li>
                <h4>created</h4>
                <div class="topic-map-post created-at">
                    <a class="trigger-user-card " data-user-card="joebuhlig">
                        <img alt="" width="20" height="20" src="{post_created_user_avatar}" title="{post_created_user_username}" class="avatar">
                    </a>
                    <span class="relative-date">{post_created_relative_time}</span>
                </div>
            </li>
            <li>
                <div>
                    <h4>last reply</h4>
                    <div class="topic-map-post last-reply">
                        <a class="trigger-user-card ">
                            <img alt="" width="20" height="20" src="{last_reply_user_avatar}" title="{last_reply_user_username}" class="avatar">
                        </a>
                        <span class="relative-date">{last_reply_relative_time}</span>
                    </div>
                </div>
            </li>
            <li>
                <span class="number">{replies_count}</span>
                <h4>replies</h4>
            </li>
            <li class="secondary">
                <span class="number">{participants_count}</span>
                <h4>users</h4>
            </li>
            <li class="secondary">
                <span class="number">{links_count}</span>
                <h4>links</h4>
            </li>
        </ul>
    </section>
    <section class="map-expanded" id="map-expanded" style="display:none">
        <div class="frequent-posters">
            <span class="topic-map-span">Frequent Posters</span>
            <p>{participants}</p>
        </div>
        <div class="popular-links">
            <span class="topic-map-span">Popular Links</span>
            <p class="popular-links-p">{popular_links}</p>
        </div>

    </section>
<script>

</script>
</div>
';

    return $topic_map_styles . $topic_map . $content;
}
?>
