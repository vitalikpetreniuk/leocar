<?php
function renderUploadsSVG($filename = '')
{
    if ($filename) {
        if (wp_upload_dir()['basedir'] . '/' . $filename['filename']) {
            echo file_get_contents(wp_upload_dir()['basedir'] . '/' . $filename['filename']);
        }
    }
}

function getHomeUrl()
{
    return rtrim(home_url(), '/');
}

function renderAssetsSVG($filename = '')
{
    if ($filename) {
        $path = get_template_directory() . '/assets/images/' . $filename . '.svg';
        if (is_readable($path)) {
            echo file_get_contents($path);
        }
    }
}

function loadAssetsSVG($filename = '')
{
    if ($filename) {
        $path = get_template_directory() . '/assets/images/' . $filename . '.svg';
        if (is_readable($path)) {
            return file_get_contents($path);
        }
    }
}

function renderBlock($name, $args = [])
{
    $slug = '/blocks/' . $name . '/index';
    get_template_part('/blocks/' . $name . '/index', $args);
}

function renderComponent($name, $args = [])
{
    locate_template('components/' . $name . '/index.php', true, false, $args);
}


function loadComponent($name, $args = [])
{
    ob_start();
    $slug = '/components/' . $name . '/index';
    get_template_part($slug, null, $args);
    $var = ob_get_contents();
    ob_end_clean();

    return $var;
}

function renderImages($filename)
{
    echo get_theme_file_uri('/assets/images/' . $filename);
}
function getImages($filename)
{
    return get_theme_file_uri('/assets/images/' . $filename);
}

function echoText($text)
{
    esc_attr_e($text, 'brainwave');
}

function renderReusableBlock($id)
{
    $gblock = get_post($id);
    echo apply_filters('the_content', $gblock->post_content);
}

function renderImageUpload($imageId, $size = 'full')
{
    if ($imageId) {
        $image_html = wp_get_attachment_image($imageId['id'], $size);
        $webp_image_html = apply_filters('webp_image_html', $image_html, $imageId['id']);
        echo $webp_image_html;
    } else { ?>
        <img src="<?php echo $date["image"]['url'] ?? renderImages("text-image.jpg") ?>"
             alt="<?php echo $date["image"]['alt'] ?? 'image'; ?>">
    <?php }
}