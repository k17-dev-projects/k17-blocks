## What are Klick17 Blocks?

It is a developer friendly system for rapidly creating blocks in backend and frontend using ACF technology. System is inspired by WordPress plugin system. Blocks can be installed*, updated*, activated, deactivated, overwritten (like a child theme system), and removed just as WordPress plugins do.

* not fully implemented

## Requirement

- ACF Pro Plugin
- Klick17 Core Plugin
- Minimum WordPress version 5.4
- WordPress Theme with Bootstrap v5

## Block Installation

After successful install of Klick17 Core Plugin, add blocks files into the /wp-content/k17-blocks/

## Block Structure

- block folder:
    - block.php (mandatory) - php file which has block headers
    - group_*.php (mandatory) - export of k17-acf-block field in php variable
    - block.css (optional) - structural css for the block
    - preview_image *.[JPEG, PNG, WEBP] (optional)
    - assets (optional) - anything else the block is supposed to need

## Block Headers

- **Block Name:** (required, mandatory) - the name of the block which will identify it
- **Block Slug:** (required, optional) - block unique identifier
    - If not defined, the slug will be defined by [name-of-the-block-file].php file name
- **Block Version:** (required, optional) - defines the version of the block
    - Default version: 0.0.0
    - If the block has the same slug as some already defined block, block with higher version will be registered, and the previous block discarded.
- **ACF:** (required, optional) - acf group field key group_[uniqueID] - given by ACF Plugin
    - if defined:
        - The system will take a look into the block directory for group_*.php file. The file needs to represent k17_acf_block type. If it is not k17_acf_block type, then the system will discard the block
        - If defined block is not present in the block directory, then the block will be registered, but it will not be able to activate it unless there is a group_*.php exists in the block directory. This feature is useful in the initial stage of block creation. User would define acf fields, save the field in database, then copy the key, and after next save, system will export field into block directory
    - if NOT defined
        - If not defined, the system will scan the block directory for group_*.php file. The first file which is an k17_acf_block type will be take as representative.
        - If no group_*.php file with k17_acf_block type is present in the block directory the block will not be registered
- **Type:** (required, optional) - block type
    - if not set the value will be 'general'. If set to 'custom', then the block will not have wrapper section class in html, neither will have 'padding options' added to block options
- **Options:** (required, optional) - additional field groups added to block
    - default values: *paddings, grid, alignment*
    - *paddings* - will be added in each block which is not type of ‘custom’
        - Top Padding, Bottom Padding (Custom Top Padding, Custom Bottom Padding) fields
    - *gird* - bootstrap classes in 12 col layout
        - Grid Size, Grid Offset
    - *alignment* - Aligning content center horizontally, or vertically
- **Description:** (optional) - human readable block description
- **Author:** (optional) - Author of the block
- **Author URI:** (optional) - Author URL page
- **Include JS:** (optional) - Include JavaScript libraries with standard WordPress Enqueue Script function
    - Example: `slick.min.js (jquery,), something.else.js, https://unpkg.com/scrollreveal`
    - Including libraries follows a special syntax: library files are separated by commas (,), and optional dependencies are denoted within parenthesis
    - `slick.min.js` and `something.else.js` must be file names in block folder
    - Every file name is converted to string name with the following procedure:
        - .js will be removed, and all dots (.) will be replaced with dash (-)
        - i.e.: `slick.min.js` will be named *slick-min*, `https://unpkg.com/scrollreveal` will be named *scrollreveal*
        - this is important if there are nested dependencies from multiple blocks
    - If multiple blocks have the same file name, then only one file will be enqueued
- **Include CSS**: (optional) - Include styles with standard WordPress Enqueue Styles function
    - Example: `slick.css, something.css, https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css`
    - Including libraries follows a special syntax: library files are separated by commas (,)
    - `slick.css, something.css` must be file names in block folder
    - Every file name is converted to string name with the following procedure:
        - .css will be removed, and all dots (.) will be replaced with dash (-)
        - i.e.: `slick.css` will be named *slick*
    - If multiple blocks have the same file name, then only one file will be enqueued

## Block Render

![*block render wrapper logic*]([https://s3-us-west-2.amazonaws.com/secure.notion-static.com/29c79829-de11-41c0-a972-250f56192bfa/Untitled.png](https://file.notion.so/f/s/29c79829-de11-41c0-a972-250f56192bfa/Untitled.png?spaceId=a4777fd7-7865-466d-b0d4-cb837b1a3f88&table=block&id=d57caa30-04f2-41c9-922d-cb341a3ac48b&expirationTimestamp=1678659778502&signature=BlpoqxjjP7XmtZL52tpjqqjx-NQbo8nCL1J8ObtZdsI&downloadName=Untitled.png))

*block render wrapper logic*

### Hooks:

**section_classes**

```php
$section_classes = apply_filters( 'k17/block/render/section_classes/all', $section_classes, $block_data, $block);
$section_classes = apply_filters( 'k17/block/render/section_classes/slug=' . $block->slug, $section_classes, $block_data, $block);
$section_classes = apply_filters( 'k17/block/render/section_classes/block_id=' . $block_data['block_id'], $section_classes, $block_data, $block);
```

**section_styles**

```php
$section_styles = apply_filters( 'k17/block/render/section_styles/all', $section_styles, $block_data, $block);
$section_styles = apply_filters( 'k17/block/render/section_styles/slug=' . $block->slug, $section_styles, $block_data, $block);
$section_styles = apply_filters( 'k17/block/render/section_styles/block_id=' . $block_data['block_id'], $section_styles, $block_data, $block);
```

**section_html_inline**

```php
$section_html_inline = apply_filters( 'k17/block/render/section_html_inline/all', $section_html_inline, $block_data, $block);
$section_html_inline = apply_filters( 'k17/block/render/section_html_inline/slug=' . $block->slug, $section_html_inline, $block_data, $block);
$section_html_inline = apply_filters( 'k17/block/render/section_html_inline/block_id=' . $block_data['block_id'], $section_html_inline, $block_data, $block);
```

**row_classes**

```php
$row_classes = apply_filters( 'k17/block/render/row_classes/all', $row_classes, $block_data, $block);
$row_classes = apply_filters( 'k17/block/render/row_classes/slug=' . $block->slug, $row_classes, $block_data, $block);
$row_classes = apply_filters( 'k17/block/render/row_classes/block_id=' . $block_data['block_id'], $row_classes, $block_data, $block);
```

**row_styles**

```php
$row_styles = apply_filters( 'k17/block/render/row_styles/all', $row_styles, $block_data, $block);
$row_styles = apply_filters( 'k17/block/render/row_styles/slug=' . $block->slug, $row_styles, $block_data, $block);
$row_styles = apply_filters( 'k17/block/render/row_styles/block_id=' . $block_data['block_id'], $row_styles, $block_data, $block);
```

**row_html_inline**

```php
$row_html_inline = apply_filters( 'k17/block/render/row_html_inline/all', $row_html_inline, $block_data, $block);
$row_html_inline = apply_filters( 'k17/block/render/row_html_inline/slug=' . $block->slug, $row_html_inline, $block_data, $block);
$row_html_inline = apply_filters( 'k17/block/render/row_html_inline/block_id=' . $block_data['block_id'], $row_html_inline, $block_data, $block);
```

**header**

```php
do_action('k17/block/render/header/all', $block_data, $block);
do_action('k17/block/render/header/slug='. $block->slug, $block_data, $block);
do_action('k17/block/render/header/block_id=' . $block_data['block_id'], $block_data, $block);
```

**footer**

```php
do_action('k17/block/render/footer/block_id='. $block_data['block_id'], $block_data, $block);
do_action('k17/block/render/footer/slug='. $block->slug, $block_data, $block);
do_action('k17/block/render/footer/all', $block_data, $block);
```

## Block Options

Adding extra option hook

1. Create Klick17 Block in ACF, and copy the group_* key
2. Add options by hook function

```php
add_filter('k17/blocks/register_options', 'register_extra_block_options');
function register_extra_block_options($block_options) {
	$block_options['extra']   = 'group_62f62e9c6824d';
	return $block_options;
}
```

In example above, the option name is called ‘extra’ and group is ‘group_62f62e9c6824d’

1. In desired block option add option name. i.e. ‘extra’

## Registering Blocks on custom location

You can also register block on custom location by calling the following hook

```php
apply_filters( 'k17/blocks/register/block', $extra_block_paths );
```

$extra_block_paths should return filepath of a block on custom location.

## Displaying Block Builder

Klick17 Block Builder is a Custom ACF Field. Let’s say we have a block builder on block posts, with the name “content_builder”. We display the content builder in post.php file by invoking

```php
k17_dipslay_block_builder(get_field('content_builder'));
```
