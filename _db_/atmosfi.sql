-- phpMyAdmin SQL Dump
-- version 4.3.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Aug 27, 2015 at 07:34 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `atmosfi`
--

-- --------------------------------------------------------

--
-- Table structure for table `wp_commentmeta`
--

CREATE TABLE IF NOT EXISTS `wp_commentmeta` (
  `meta_id` bigint(20) unsigned NOT NULL,
  `comment_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_comments`
--

CREATE TABLE IF NOT EXISTS `wp_comments` (
  `comment_ID` bigint(20) unsigned NOT NULL,
  `comment_post_ID` bigint(20) unsigned NOT NULL DEFAULT '0',
  `comment_author` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_author_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT '0',
  `comment_approved` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_comments`
--

INSERT INTO `wp_comments` (`comment_ID`, `comment_post_ID`, `comment_author`, `comment_author_email`, `comment_author_url`, `comment_author_IP`, `comment_date`, `comment_date_gmt`, `comment_content`, `comment_karma`, `comment_approved`, `comment_agent`, `comment_type`, `comment_parent`, `user_id`) VALUES
(1, 1, 'Mr WordPress', '', 'https://wordpress.org/', '', '2015-07-10 19:13:12', '2015-07-10 19:13:12', 'Hi, this is a comment.\nTo delete a comment, just log in and view the post&#039;s comments. There you will have the option to edit or delete them.', 0, '1', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_links`
--

CREATE TABLE IF NOT EXISTS `wp_links` (
  `link_id` bigint(20) unsigned NOT NULL,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_target` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_visible` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `link_owner` bigint(20) unsigned NOT NULL DEFAULT '1',
  `link_rating` int(11) NOT NULL DEFAULT '0',
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `link_notes` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_rss` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_options`
--

CREATE TABLE IF NOT EXISTS `wp_options` (
  `option_id` bigint(20) unsigned NOT NULL,
  `option_name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `option_value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `autoload` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB AUTO_INCREMENT=318 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_options`
--

INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1, 'siteurl', 'http://localhost/atmosfi', 'yes'),
(2, 'home', 'http://localhost/atmosfi', 'yes'),
(3, 'blogname', 'Welcome To AtmosFI', 'yes'),
(4, 'blogdescription', 'Just another WordPress site', 'yes'),
(5, 'users_can_register', '0', 'yes'),
(6, 'admin_email', 'moutushi82@gmail.com', 'yes'),
(7, 'start_of_week', '1', 'yes'),
(8, 'use_balanceTags', '0', 'yes'),
(9, 'use_smilies', '1', 'yes'),
(10, 'require_name_email', '1', 'yes'),
(11, 'comments_notify', '1', 'yes'),
(12, 'posts_per_rss', '10', 'yes'),
(13, 'rss_use_excerpt', '0', 'yes'),
(14, 'mailserver_url', 'mail.example.com', 'yes'),
(15, 'mailserver_login', 'login@example.com', 'yes'),
(16, 'mailserver_pass', 'password', 'yes'),
(17, 'mailserver_port', '110', 'yes'),
(18, 'default_category', '1', 'yes'),
(19, 'default_comment_status', 'open', 'yes'),
(20, 'default_ping_status', 'open', 'yes'),
(21, 'default_pingback_flag', '1', 'yes'),
(22, 'posts_per_page', '10', 'yes'),
(23, 'date_format', 'F j, Y', 'yes'),
(24, 'time_format', 'g:i a', 'yes'),
(25, 'links_updated_date_format', 'F j, Y g:i a', 'yes'),
(26, 'comment_moderation', '0', 'yes'),
(27, 'moderation_notify', '1', 'yes'),
(28, 'permalink_structure', '/%postname%/', 'yes'),
(29, 'gzipcompression', '0', 'yes'),
(30, 'hack_file', '0', 'yes'),
(31, 'blog_charset', 'UTF-8', 'yes'),
(32, 'moderation_keys', '', 'no'),
(33, 'active_plugins', 'a:0:{}', 'yes'),
(34, 'category_base', '', 'yes'),
(35, 'ping_sites', 'http://rpc.pingomatic.com/', 'yes'),
(36, 'advanced_edit', '0', 'yes'),
(37, 'comment_max_links', '2', 'yes'),
(38, 'gmt_offset', '0', 'yes'),
(39, 'default_email_category', '1', 'yes'),
(40, 'recently_edited', 'a:3:{i:0;s:80:"/Users/rishimg/Documents/My Work/www/atmosfi/wp-content/themes/atmosfi/style.css";i:1;s:101:"/Users/rishimg/Documents/My Work/www/atmosfi/wp-content/plugins/tinymce-advanced/tinymce-advanced.php";i:2;s:0:"";}', 'no'),
(41, 'template', 'atmosfi', 'yes'),
(42, 'stylesheet', 'atmosfi', 'yes'),
(43, 'comment_whitelist', '1', 'yes'),
(44, 'blacklist_keys', '', 'no'),
(45, 'comment_registration', '0', 'yes'),
(46, 'html_type', 'text/html', 'yes'),
(47, 'use_trackback', '0', 'yes'),
(48, 'default_role', 'subscriber', 'yes'),
(49, 'db_version', '31536', 'yes'),
(50, 'uploads_use_yearmonth_folders', '1', 'yes'),
(51, 'upload_path', '', 'yes'),
(52, 'blog_public', '1', 'yes'),
(53, 'default_link_category', '2', 'yes'),
(54, 'show_on_front', 'page', 'yes'),
(55, 'tag_base', '', 'yes'),
(56, 'show_avatars', '1', 'yes'),
(57, 'avatar_rating', 'G', 'yes'),
(58, 'upload_url_path', '', 'yes'),
(59, 'thumbnail_size_w', '150', 'yes'),
(60, 'thumbnail_size_h', '150', 'yes'),
(61, 'thumbnail_crop', '1', 'yes'),
(62, 'medium_size_w', '300', 'yes'),
(63, 'medium_size_h', '300', 'yes'),
(64, 'avatar_default', 'mystery', 'yes'),
(65, 'large_size_w', '1024', 'yes'),
(66, 'large_size_h', '1024', 'yes'),
(67, 'image_default_link_type', 'file', 'yes'),
(68, 'image_default_size', '', 'yes'),
(69, 'image_default_align', '', 'yes'),
(70, 'close_comments_for_old_posts', '0', 'yes'),
(71, 'close_comments_days_old', '14', 'yes'),
(72, 'thread_comments', '1', 'yes'),
(73, 'thread_comments_depth', '5', 'yes'),
(74, 'page_comments', '0', 'yes'),
(75, 'comments_per_page', '50', 'yes'),
(76, 'default_comments_page', 'newest', 'yes'),
(77, 'comment_order', 'asc', 'yes'),
(78, 'sticky_posts', 'a:0:{}', 'yes'),
(79, 'widget_categories', 'a:2:{i:2;a:4:{s:5:"title";s:0:"";s:5:"count";i:0;s:12:"hierarchical";i:0;s:8:"dropdown";i:0;}s:12:"_multiwidget";i:1;}', 'yes'),
(80, 'widget_text', 'a:2:{i:1;a:0:{}s:12:"_multiwidget";i:1;}', 'yes'),
(81, 'widget_rss', 'a:2:{i:1;a:0:{}s:12:"_multiwidget";i:1;}', 'yes'),
(82, 'uninstall_plugins', 'a:0:{}', 'no'),
(83, 'timezone_string', '', 'yes'),
(84, 'page_for_posts', '0', 'yes'),
(85, 'page_on_front', '8', 'yes'),
(86, 'default_post_format', '0', 'yes'),
(87, 'link_manager_enabled', '0', 'yes'),
(88, 'initial_db_version', '31535', 'yes'),
(89, 'wp_user_roles', 'a:5:{s:13:"administrator";a:2:{s:4:"name";s:13:"Administrator";s:12:"capabilities";a:62:{s:13:"switch_themes";b:1;s:11:"edit_themes";b:1;s:16:"activate_plugins";b:1;s:12:"edit_plugins";b:1;s:10:"edit_users";b:1;s:10:"edit_files";b:1;s:14:"manage_options";b:1;s:17:"moderate_comments";b:1;s:17:"manage_categories";b:1;s:12:"manage_links";b:1;s:12:"upload_files";b:1;s:6:"import";b:1;s:15:"unfiltered_html";b:1;s:10:"edit_posts";b:1;s:17:"edit_others_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:10:"edit_pages";b:1;s:4:"read";b:1;s:8:"level_10";b:1;s:7:"level_9";b:1;s:7:"level_8";b:1;s:7:"level_7";b:1;s:7:"level_6";b:1;s:7:"level_5";b:1;s:7:"level_4";b:1;s:7:"level_3";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:17:"edit_others_pages";b:1;s:20:"edit_published_pages";b:1;s:13:"publish_pages";b:1;s:12:"delete_pages";b:1;s:19:"delete_others_pages";b:1;s:22:"delete_published_pages";b:1;s:12:"delete_posts";b:1;s:19:"delete_others_posts";b:1;s:22:"delete_published_posts";b:1;s:20:"delete_private_posts";b:1;s:18:"edit_private_posts";b:1;s:18:"read_private_posts";b:1;s:20:"delete_private_pages";b:1;s:18:"edit_private_pages";b:1;s:18:"read_private_pages";b:1;s:12:"delete_users";b:1;s:12:"create_users";b:1;s:17:"unfiltered_upload";b:1;s:14:"edit_dashboard";b:1;s:14:"update_plugins";b:1;s:14:"delete_plugins";b:1;s:15:"install_plugins";b:1;s:13:"update_themes";b:1;s:14:"install_themes";b:1;s:11:"update_core";b:1;s:10:"list_users";b:1;s:12:"remove_users";b:1;s:9:"add_users";b:1;s:13:"promote_users";b:1;s:18:"edit_theme_options";b:1;s:13:"delete_themes";b:1;s:6:"export";b:1;}}s:6:"editor";a:2:{s:4:"name";s:6:"Editor";s:12:"capabilities";a:34:{s:17:"moderate_comments";b:1;s:17:"manage_categories";b:1;s:12:"manage_links";b:1;s:12:"upload_files";b:1;s:15:"unfiltered_html";b:1;s:10:"edit_posts";b:1;s:17:"edit_others_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:10:"edit_pages";b:1;s:4:"read";b:1;s:7:"level_7";b:1;s:7:"level_6";b:1;s:7:"level_5";b:1;s:7:"level_4";b:1;s:7:"level_3";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:17:"edit_others_pages";b:1;s:20:"edit_published_pages";b:1;s:13:"publish_pages";b:1;s:12:"delete_pages";b:1;s:19:"delete_others_pages";b:1;s:22:"delete_published_pages";b:1;s:12:"delete_posts";b:1;s:19:"delete_others_posts";b:1;s:22:"delete_published_posts";b:1;s:20:"delete_private_posts";b:1;s:18:"edit_private_posts";b:1;s:18:"read_private_posts";b:1;s:20:"delete_private_pages";b:1;s:18:"edit_private_pages";b:1;s:18:"read_private_pages";b:1;}}s:6:"author";a:2:{s:4:"name";s:6:"Author";s:12:"capabilities";a:10:{s:12:"upload_files";b:1;s:10:"edit_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:4:"read";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:12:"delete_posts";b:1;s:22:"delete_published_posts";b:1;}}s:11:"contributor";a:2:{s:4:"name";s:11:"Contributor";s:12:"capabilities";a:5:{s:10:"edit_posts";b:1;s:4:"read";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:12:"delete_posts";b:1;}}s:10:"subscriber";a:2:{s:4:"name";s:10:"Subscriber";s:12:"capabilities";a:2:{s:4:"read";b:1;s:7:"level_0";b:1;}}}', 'yes'),
(90, 'widget_search', 'a:2:{i:2;a:1:{s:5:"title";s:0:"";}s:12:"_multiwidget";i:1;}', 'yes'),
(91, 'widget_recent-posts', 'a:2:{i:2;a:2:{s:5:"title";s:0:"";s:6:"number";i:5;}s:12:"_multiwidget";i:1;}', 'yes'),
(92, 'widget_recent-comments', 'a:2:{i:2;a:2:{s:5:"title";s:0:"";s:6:"number";i:5;}s:12:"_multiwidget";i:1;}', 'yes'),
(93, 'widget_archives', 'a:2:{i:2;a:3:{s:5:"title";s:0:"";s:5:"count";i:0;s:8:"dropdown";i:0;}s:12:"_multiwidget";i:1;}', 'yes'),
(94, 'widget_meta', 'a:2:{i:2;a:1:{s:5:"title";s:0:"";}s:12:"_multiwidget";i:1;}', 'yes'),
(95, 'sidebars_widgets', 'a:3:{s:19:"wp_inactive_widgets";a:0:{}s:13:"widget-area-1";a:6:{i:0;s:8:"search-2";i:1;s:14:"recent-posts-2";i:2;s:17:"recent-comments-2";i:3;s:10:"archives-2";i:4;s:12:"categories-2";i:5;s:6:"meta-2";}s:13:"array_version";i:3;}', 'yes'),
(97, 'cron', 'a:5:{i:1440227592;a:3:{s:16:"wp_version_check";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}s:17:"wp_update_plugins";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}s:16:"wp_update_themes";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}}i:1440229080;a:1:{s:20:"wp_maybe_auto_update";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}}i:1440270801;a:1:{s:19:"wp_scheduled_delete";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}}i:1440275110;a:1:{s:30:"wp_scheduled_auto_draft_delete";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}}s:7:"version";i:2;}', 'yes'),
(99, '_transient_random_seed', '58c0306d0f5955b28ebd79bfc8d39784', 'yes'),
(100, 'nonce_key', 'Amw+_p2]w{/c zoRJ7m4Ge#5x>wp+{Rr{qEL0aft~<bt5Li0vM/2.-({v/HCrK.Q', 'yes'),
(101, 'nonce_salt', 'F;~F.@Y%`KK&g..mOO]u7-Xm/9y{iM],I(:h`A$;&P2AK&WW%dQ%PW}3~cwKs(xf', 'yes'),
(111, 'auth_key', '+zq7DF;&WGsF%tU0{ _&2(ILVWNQtPIG`#l)8&)PUUH&lCdNO|edmI1;/5,wgs>O', 'yes'),
(112, 'auth_salt', 'C?6DX/licm(J|~vt? ),h3s~)6C=(Wj_[5(S3MR2FeHX)Fs_H~o>z<dmn$X$I*jD', 'yes'),
(113, 'logged_in_key', 'NQgbhy`FNg`A`P}9:Dw,+3@F&fnB|nm*?9)^%LiO-Y=Bqqh=h?Idn$O!>Bv%CX`{', 'yes'),
(114, 'logged_in_salt', 'ZFl3IpmWH:3T~bmw~L_K|NQMbJFyhO!C_mmH0H!@{5nk*rZyD>gD[ $Y|m@=QHB9', 'yes'),
(138, 'theme_mods_twentyfifteen', 'a:1:{s:16:"sidebars_widgets";a:2:{s:4:"time";i:1436557502;s:4:"data";a:2:{s:19:"wp_inactive_widgets";a:0:{}s:9:"sidebar-1";a:6:{i:0;s:8:"search-2";i:1;s:14:"recent-posts-2";i:2;s:17:"recent-comments-2";i:3;s:10:"archives-2";i:4;s:12:"categories-2";i:5;s:6:"meta-2";}}}}', 'yes'),
(139, 'current_theme', 'AtmosFI', 'yes'),
(140, 'theme_mods_atmosfi', 'a:1:{i:0;b:0;}', 'yes'),
(141, 'theme_switched', '', 'yes'),
(179, 'my_admin_errors', '', 'yes'),
(183, 'recently_activated', 'a:1:{s:37:"tinymce-advanced/tinymce-advanced.php";i:1437178744;}', 'yes'),
(189, 'tadv_settings', 'a:6:{s:9:"toolbar_1";s:111:"bold,italic,blockquote,bullist,numlist,alignleft,aligncenter,alignright,link,unlink,fullscreen,undo,redo,wp_adv";s:9:"toolbar_2";s:102:"formatselect,alignjustify,strikethrough,outdent,indent,pastetext,removeformat,emoticons,forecolor,code";s:9:"toolbar_3";s:0:"";s:9:"toolbar_4";s:0:"";s:7:"options";s:15:"advlist,menubar";s:7:"plugins";s:107:"anchor,code,insertdatetime,nonbreaking,print,searchreplace,table,visualblocks,visualchars,emoticons,advlist";}', 'yes'),
(190, 'tadv_admin_settings', 'a:2:{s:7:"options";s:8:"no_autop";s:16:"disabled_plugins";s:0:"";}', 'yes'),
(191, 'tadv_version', '4000', 'yes'),
(271, 'widget_calendar', 'a:2:{i:1;a:0:{}s:12:"_multiwidget";i:1;}', 'yes'),
(272, 'widget_nav_menu', 'a:2:{i:1;a:0:{}s:12:"_multiwidget";i:1;}', 'yes'),
(273, 'widget_pages', 'a:2:{i:1;a:0:{}s:12:"_multiwidget";i:1;}', 'yes'),
(275, 'widget_tag_cloud', 'a:2:{i:1;a:0:{}s:12:"_multiwidget";i:1;}', 'yes'),
(295, '_site_transient_update_plugins', 'O:8:"stdClass":4:{s:12:"last_checked";i:1440187928;s:8:"response";a:0:{}s:12:"translations";a:0:{}s:9:"no_update";a:3:{s:19:"akismet/akismet.php";O:8:"stdClass":6:{s:2:"id";s:2:"15";s:4:"slug";s:7:"akismet";s:6:"plugin";s:19:"akismet/akismet.php";s:11:"new_version";s:5:"3.1.3";s:3:"url";s:38:"https://wordpress.org/plugins/akismet/";s:7:"package";s:56:"https://downloads.wordpress.org/plugin/akismet.3.1.3.zip";}s:9:"hello.php";O:8:"stdClass":6:{s:2:"id";s:4:"3564";s:4:"slug";s:11:"hello-dolly";s:6:"plugin";s:9:"hello.php";s:11:"new_version";s:3:"1.6";s:3:"url";s:42:"https://wordpress.org/plugins/hello-dolly/";s:7:"package";s:58:"https://downloads.wordpress.org/plugin/hello-dolly.1.6.zip";}s:37:"tinymce-advanced/tinymce-advanced.php";O:8:"stdClass":6:{s:2:"id";s:3:"731";s:4:"slug";s:16:"tinymce-advanced";s:6:"plugin";s:37:"tinymce-advanced/tinymce-advanced.php";s:11:"new_version";s:7:"4.2.3.1";s:3:"url";s:47:"https://wordpress.org/plugins/tinymce-advanced/";s:7:"package";s:67:"https://downloads.wordpress.org/plugin/tinymce-advanced.4.2.3.1.zip";}}}', 'yes'),
(300, 'db_upgraded', '', 'yes'),
(302, 'auto_core_update_notified', 'a:4:{s:4:"type";s:7:"success";s:5:"email";s:20:"moutushi82@gmail.com";s:7:"version";s:5:"4.2.4";s:9:"timestamp";i:1440187925;}', 'yes'),
(304, 'rewrite_rules', 'a:68:{s:47:"category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$";s:52:"index.php?category_name=$matches[1]&feed=$matches[2]";s:42:"category/(.+?)/(feed|rdf|rss|rss2|atom)/?$";s:52:"index.php?category_name=$matches[1]&feed=$matches[2]";s:35:"category/(.+?)/page/?([0-9]{1,})/?$";s:53:"index.php?category_name=$matches[1]&paged=$matches[2]";s:17:"category/(.+?)/?$";s:35:"index.php?category_name=$matches[1]";s:44:"tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?tag=$matches[1]&feed=$matches[2]";s:39:"tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?tag=$matches[1]&feed=$matches[2]";s:32:"tag/([^/]+)/page/?([0-9]{1,})/?$";s:43:"index.php?tag=$matches[1]&paged=$matches[2]";s:14:"tag/([^/]+)/?$";s:25:"index.php?tag=$matches[1]";s:45:"type/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?post_format=$matches[1]&feed=$matches[2]";s:40:"type/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?post_format=$matches[1]&feed=$matches[2]";s:33:"type/([^/]+)/page/?([0-9]{1,})/?$";s:51:"index.php?post_format=$matches[1]&paged=$matches[2]";s:15:"type/([^/]+)/?$";s:33:"index.php?post_format=$matches[1]";s:48:".*wp-(atom|rdf|rss|rss2|feed|commentsrss2)\\.php$";s:18:"index.php?feed=old";s:20:".*wp-app\\.php(/.*)?$";s:19:"index.php?error=403";s:18:".*wp-register.php$";s:23:"index.php?register=true";s:32:"feed/(feed|rdf|rss|rss2|atom)/?$";s:27:"index.php?&feed=$matches[1]";s:27:"(feed|rdf|rss|rss2|atom)/?$";s:27:"index.php?&feed=$matches[1]";s:20:"page/?([0-9]{1,})/?$";s:28:"index.php?&paged=$matches[1]";s:27:"comment-page-([0-9]{1,})/?$";s:38:"index.php?&page_id=8&cpage=$matches[1]";s:41:"comments/feed/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?&feed=$matches[1]&withcomments=1";s:36:"comments/(feed|rdf|rss|rss2|atom)/?$";s:42:"index.php?&feed=$matches[1]&withcomments=1";s:44:"search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:40:"index.php?s=$matches[1]&feed=$matches[2]";s:39:"search/(.+)/(feed|rdf|rss|rss2|atom)/?$";s:40:"index.php?s=$matches[1]&feed=$matches[2]";s:32:"search/(.+)/page/?([0-9]{1,})/?$";s:41:"index.php?s=$matches[1]&paged=$matches[2]";s:14:"search/(.+)/?$";s:23:"index.php?s=$matches[1]";s:47:"author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?author_name=$matches[1]&feed=$matches[2]";s:42:"author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:50:"index.php?author_name=$matches[1]&feed=$matches[2]";s:35:"author/([^/]+)/page/?([0-9]{1,})/?$";s:51:"index.php?author_name=$matches[1]&paged=$matches[2]";s:17:"author/([^/]+)/?$";s:33:"index.php?author_name=$matches[1]";s:69:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$";s:80:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]";s:64:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$";s:80:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]";s:57:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$";s:81:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]";s:39:"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$";s:63:"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]";s:56:"([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$";s:64:"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]";s:51:"([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$";s:64:"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]";s:44:"([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$";s:65:"index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]";s:26:"([0-9]{4})/([0-9]{1,2})/?$";s:47:"index.php?year=$matches[1]&monthnum=$matches[2]";s:43:"([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$";s:43:"index.php?year=$matches[1]&feed=$matches[2]";s:38:"([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$";s:43:"index.php?year=$matches[1]&feed=$matches[2]";s:31:"([0-9]{4})/page/?([0-9]{1,})/?$";s:44:"index.php?year=$matches[1]&paged=$matches[2]";s:13:"([0-9]{4})/?$";s:26:"index.php?year=$matches[1]";s:27:".?.+?/attachment/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:37:".?.+?/attachment/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:57:".?.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:52:".?.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:52:".?.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:20:"(.?.+?)/trackback/?$";s:35:"index.php?pagename=$matches[1]&tb=1";s:40:"(.?.+?)/feed/(feed|rdf|rss|rss2|atom)/?$";s:47:"index.php?pagename=$matches[1]&feed=$matches[2]";s:35:"(.?.+?)/(feed|rdf|rss|rss2|atom)/?$";s:47:"index.php?pagename=$matches[1]&feed=$matches[2]";s:28:"(.?.+?)/page/?([0-9]{1,})/?$";s:48:"index.php?pagename=$matches[1]&paged=$matches[2]";s:35:"(.?.+?)/comment-page-([0-9]{1,})/?$";s:48:"index.php?pagename=$matches[1]&cpage=$matches[2]";s:20:"(.?.+?)(/[0-9]+)?/?$";s:47:"index.php?pagename=$matches[1]&page=$matches[2]";s:27:"[^/]+/attachment/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:37:"[^/]+/attachment/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:57:"[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:52:"[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:52:"[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";s:20:"([^/]+)/trackback/?$";s:31:"index.php?name=$matches[1]&tb=1";s:40:"([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:43:"index.php?name=$matches[1]&feed=$matches[2]";s:35:"([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:43:"index.php?name=$matches[1]&feed=$matches[2]";s:28:"([^/]+)/page/?([0-9]{1,})/?$";s:44:"index.php?name=$matches[1]&paged=$matches[2]";s:35:"([^/]+)/comment-page-([0-9]{1,})/?$";s:44:"index.php?name=$matches[1]&cpage=$matches[2]";s:20:"([^/]+)(/[0-9]+)?/?$";s:43:"index.php?name=$matches[1]&page=$matches[2]";s:16:"[^/]+/([^/]+)/?$";s:32:"index.php?attachment=$matches[1]";s:26:"[^/]+/([^/]+)/trackback/?$";s:37:"index.php?attachment=$matches[1]&tb=1";s:46:"[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:41:"[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$";s:49:"index.php?attachment=$matches[1]&feed=$matches[2]";s:41:"[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$";s:50:"index.php?attachment=$matches[1]&cpage=$matches[2]";}', 'yes'),
(305, 'can_compress_scripts', '1', 'yes'),
(312, '_site_transient_timeout_theme_roots', '1440189708', 'yes'),
(313, '_site_transient_theme_roots', 'a:4:{s:7:"atmosfi";s:7:"/themes";s:13:"twentyfifteen";s:7:"/themes";s:14:"twentyfourteen";s:7:"/themes";s:14:"twentythirteen";s:7:"/themes";}', 'yes'),
(314, '_site_transient_update_core', 'O:8:"stdClass":4:{s:7:"updates";a:2:{i:0;O:8:"stdClass":10:{s:8:"response";s:7:"upgrade";s:8:"download";s:57:"https://downloads.wordpress.org/release/wordpress-4.3.zip";s:6:"locale";s:5:"en_US";s:8:"packages";O:8:"stdClass":5:{s:4:"full";s:57:"https://downloads.wordpress.org/release/wordpress-4.3.zip";s:10:"no_content";s:68:"https://downloads.wordpress.org/release/wordpress-4.3-no-content.zip";s:11:"new_bundled";s:69:"https://downloads.wordpress.org/release/wordpress-4.3-new-bundled.zip";s:7:"partial";b:0;s:8:"rollback";b:0;}s:7:"current";s:3:"4.3";s:7:"version";s:3:"4.3";s:11:"php_version";s:5:"5.2.4";s:13:"mysql_version";s:3:"5.0";s:11:"new_bundled";s:3:"4.1";s:15:"partial_version";s:0:"";}i:1;O:8:"stdClass":12:{s:8:"response";s:10:"autoupdate";s:8:"download";s:57:"https://downloads.wordpress.org/release/wordpress-4.3.zip";s:6:"locale";s:5:"en_US";s:8:"packages";O:8:"stdClass":5:{s:4:"full";s:57:"https://downloads.wordpress.org/release/wordpress-4.3.zip";s:10:"no_content";s:68:"https://downloads.wordpress.org/release/wordpress-4.3-no-content.zip";s:11:"new_bundled";s:69:"https://downloads.wordpress.org/release/wordpress-4.3-new-bundled.zip";s:7:"partial";b:0;s:8:"rollback";b:0;}s:7:"current";s:3:"4.3";s:7:"version";s:3:"4.3";s:11:"php_version";s:5:"5.2.4";s:13:"mysql_version";s:3:"5.0";s:11:"new_bundled";s:3:"4.1";s:15:"partial_version";s:0:"";s:13:"support_email";s:26:"updatehelp42@wordpress.org";s:9:"new_files";s:1:"1";}}s:12:"last_checked";i:1440187914;s:15:"version_checked";s:5:"4.2.4";s:12:"translations";a:0:{}}', 'yes'),
(317, '_site_transient_update_themes', 'O:8:"stdClass":4:{s:12:"last_checked";i:1440187928;s:7:"checked";a:4:{s:7:"atmosfi";s:0:"";s:13:"twentyfifteen";s:3:"1.2";s:14:"twentyfourteen";s:3:"1.4";s:14:"twentythirteen";s:3:"1.5";}s:8:"response";a:3:{s:13:"twentyfifteen";a:4:{s:5:"theme";s:13:"twentyfifteen";s:11:"new_version";s:3:"1.3";s:3:"url";s:43:"https://wordpress.org/themes/twentyfifteen/";s:7:"package";s:59:"https://downloads.wordpress.org/theme/twentyfifteen.1.3.zip";}s:14:"twentyfourteen";a:4:{s:5:"theme";s:14:"twentyfourteen";s:11:"new_version";s:3:"1.5";s:3:"url";s:44:"https://wordpress.org/themes/twentyfourteen/";s:7:"package";s:60:"https://downloads.wordpress.org/theme/twentyfourteen.1.5.zip";}s:14:"twentythirteen";a:4:{s:5:"theme";s:14:"twentythirteen";s:11:"new_version";s:3:"1.6";s:3:"url";s:44:"https://wordpress.org/themes/twentythirteen/";s:7:"package";s:60:"https://downloads.wordpress.org/theme/twentythirteen.1.6.zip";}}s:12:"translations";a:0:{}}', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `wp_postmeta`
--

CREATE TABLE IF NOT EXISTS `wp_postmeta` (
  `meta_id` bigint(20) unsigned NOT NULL,
  `post_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB AUTO_INCREMENT=153 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_postmeta`
--

INSERT INTO `wp_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(1, 2, '_wp_page_template', 'template-services.php'),
(2, 2, '_edit_lock', '1440188902:1'),
(3, 2, '_edit_last', '1'),
(4, 8, '_edit_last', '1'),
(5, 8, '_wp_page_template', 'template-home.php'),
(6, 8, '_edit_lock', '1436771713:1'),
(7, 8, 'homepage_section1_header', 'Customer'),
(8, 8, 'homepage_section1_subheader', 'RETEATION SERVICES'),
(9, 8, 'homepage_section1_content', 'atmosFi provides the an easy to use tool for all local businesses to keep their customers coming back for future business. It requires no additional work and setup takes 5 minutes or less.'),
(10, 8, 'homepage_section2_header', 'Market Directly'),
(11, 8, 'homepage_section2_subheader', 'TO YOUR CUSTOMER'),
(12, 8, 'homepage_section2_content', 'AtmosFi collects customer contact information via WiFi interaction and uses this information to keep your customers coming back.'),
(13, 8, 'homepage_section3_header', 'Automated Marketing'),
(14, 8, 'homepage_section3_subheader', 'FOR YOUR BUSINESS'),
(15, 8, 'homepage_section3_content', 'We know it can be difficult to manage your digital marketing while handling the day to day operations of your business. With AtmosFi your business can automate aspects of your digital marketing. We help you easily market to new and existing customers. AtmosFi enables your business to set up automated emailed promotions to your customers. Sending coupons, newsletters, and promotions was never so easy.'),
(16, 8, 'homepage_section4_header', 'Customer'),
(17, 8, 'homepage_section4_subheader', 'LOYALTY & ANALYTICS'),
(18, 8, 'homepage_section4_content', 'AtmosFi provides incite on how customers are interacting with your business. Our enhanced analytic reports allow you to understand the loyalty of each customer so that you can market accordingly. This knowledge based approach allows you to deliver more effective marketing campaigns. In addition, AtmosFi will provide detailed reports on how each marketing campaign (including automated) is doing.'),
(19, 8, 'homepage_section5_header', 'Social Sharing'),
(20, 8, 'homepage_section5_subheader', 'Social Sharing'),
(21, 8, 'homepage_section5_content', 'AtmosFi makes it easy for customers to share promotions, coupons, and alerts they receive from your business on Facebook, Twitter, and through Email. Customers can now share information about your business with their friends!'),
(22, 8, 'homepage_section6_header', 'How'),
(23, 8, 'homepage_section6_subheader', 'IT WORKS'),
(24, 8, 'homepage_section6_content', 'AtmosFi is a turn key WiFi solution for your business.'),
(25, 8, 'homepage_section7_header', 'Personal'),
(26, 8, 'homepage_section7_subheader', 'CUSTOMER DATABASE'),
(27, 8, 'homepage_section7_content', 'AtmosFi enables your business to build a customer database allowing you to know how many customers you have, how often customer visits, busiest days/time, basic information on the customer and more. Deliver the same personal customer service you deliver in your business – digitally.'),
(28, 8, 'homepage_section2_video', 'http://localhost/atmosfi/wp-content/uploads/2015/07/final-video.mp4'),
(29, 8, 'homepage_section5_facebook_link', 'https://www.facebook.com/pages/AtmosFi-Wi-Fi/1575654606015117?sk=timeline'),
(30, 8, 'homepage_section5_twitter_link', 'https://twitter.com/AtmosFi_Wifi'),
(31, 8, 'homepage_section5_google_link', 'https://plus.google.com/b/107404069253463963294/107404069253463963294/about'),
(32, 2, 'banner_section_header', 'Marketing Services & Features'),
(33, 2, 'banner_section_content', 'We provide businesses the ability to collect basic customer contact information and measured results on how customers are interacting with your business.'),
(34, 2, 'services_section1_header', 'AtmosFi WiFi Router'),
(35, 2, 'services_section1_subheader', ''),
(36, 2, 'services_section1_content', 'We provide a WiFi router that simply plugs into your business’s current internet modem. This creates a separate WiFi network for guests to enjoy complimentary internet for their phones, tablets and/or laptops. The router allows the business to control the time limit of the connection, download/upload rates, and re-direction to their website, yelp page or facebook page.'),
(37, 2, 'services_section2_header', 'Customer'),
(38, 2, 'services_section2_subheader', 'LOYALTY & ANALYTICS'),
(39, 2, 'services_section2_content', 'atmosFi is perfect for any kind of business that has customers visit their shop/business for 10+ minutes. Today’s trend of digital interaction through smart phones and tablets makes offering WiFi to customers more important than ever to meet customers desired needs. We service Coffee Shops, Bars, Restaurants, Hotels, Salons/Barbers, Car Service Centers and anywhere, where a customer may feel inclined to use their phone/device. See our testimonials to see how we’ve impacted our local business customers.'),
(40, 2, 'services_section3_header', 'Data Collection and Access'),
(41, 2, 'services_section3_subheader', ''),
(42, 2, 'services_section3_content', 'AtmosFi provides businesses the ability to collect basic customer contact information, how often the customer visits, how long they stay, and other key statistics that allow the business to know how customers are interacting with their business. This information can be accessed by the business at any point.'),
(43, 2, 'services_section4_header', 'Customer'),
(44, 2, 'services_section4_subheader', 'LOYALTY & ANALYTICS'),
(45, 2, 'services_section4_content', 'atmosFi is perfect for any kind of business that has customers visit their shop/business for 10+ minutes. Today’s trend of digital interaction through smart phones and tablets makes offering WiFi to customers more important than ever to meet customers desired needs. We service Coffee Shops, Bars, Restaurants, Hotels, Salons/Barbers, Car Service Centers and anywhere, where a customer may feel inclined to use their phone/device. See our testimonials to see how we’ve impacted our local business customers.'),
(46, 2, 'services_section5_header', 'Personal Marketing'),
(47, 2, 'services_section5_subheader', ''),
(48, 2, 'services_section5_content', 'Connect with every customer inside and outside the business with AtmosFi’s automated e-mail feature. Send a ‘Thank You’ note after the customer leaves or send them an exclusive coupon to help bring them back sooner. This requires no additional work for business as AtmosFi will conduct each interaction. In addition, AtmosFi leverages customer interaction data to provide efficient and intelligent marketing that targets your customers based on certain trends (frequency of visits, length of period since last visit, peak days/times, and more).'),
(49, 2, 'services_section6_header', 'Customer'),
(50, 2, 'services_section6_subheader', 'LOYALTY & ANALYTICS'),
(51, 2, 'services_section6_content', 'atmosFi is perfect for any kind of business that has customers visit their shop/business for 10+ minutes. Today’s trend of digital interaction through smart phones and tablets makes offering WiFi to customers more important than ever to meet customers desired needs. We service Coffee Shops, Bars, Restaurants, Hotels, Salons/Barbers, Car Service Centers and anywhere, where a customer may feel inclined to use their phone/device. See our testimonials to see how we’ve impacted our local business customers.'),
(52, 2, 'services_section7_header', 'Monthly Analytics'),
(53, 2, 'services_section7_subheader', ''),
(54, 2, 'services_section7_content', 'See measured results on how customers are interacting with your business. Curious to find out what your peak times are on certain days? Want to know how many returning customers you have and what your typical new customer acquisition rate is? AtmosFi does this all for you, which can help your business make more intelligent decisions and measure AtmosFi’s success for helping bring back customers.'),
(55, 2, 'services_section8_header', 'WEBSITE SERVICES'),
(56, 2, 'services_section8_subheader', ''),
(57, 2, 'services_section8_content', 'AtmosFi is a turn key WiFi solution for your business.'),
(58, 2, 'services_section8_content2', '<div class="col-sm-4">\r\n                	<h3>Website Development</h3>\r\n                    <p>Let our experts create and design your website, Fast! Our team of professionals create industry specific websites that fit your company’s brand – all at an affordable price! Contact a member of the AtmosFi team for a quote.</p>\r\n                    \r\n                </div>\r\n                \r\n                <div class="col-sm-4">\r\n                	<h3>Website Refresh and Update</h3>\r\n                    <p>Is your website outdated? We can help you quickly update the content on your website and refresh the outdated design.</p>\r\n                    \r\n                </div>\r\n                \r\n                <div class="col-sm-4">\r\n                	<h3>Logo Design</h3>\r\n                    <p>Is it time to start branding your business? AtmosFi has a great design team that can help enhance your businesses logo or completely redesign your logo from scratch. Our team of professionals will work with you until you are 100% satisfied or you get your money back!</p>\r\n                    \r\n                </div>'),
(59, 11, '_edit_last', '1'),
(60, 11, '_wp_page_template', 'template-contact.php'),
(61, 11, '_edit_lock', '1440187780:1'),
(62, 11, 'banner_section_header', 'Get In Touch'),
(63, 11, 'banner_section_content', 'We would love to hear from you. Use the form below and we’ll respond shortly. We’re also at our office Monday through Friday, 9:00AM to 5:00PM if you prefer to call or stop by.'),
(64, 11, 'contact_section1_address', 'AtmosFi - 3222 Tillman Drive, Suite 504, Bensalem PA 19020'),
(65, 11, 'contact_section1_phone', '(215) 867-9619'),
(66, 11, 'contact_section1_email', 'contact@atmosfi.net'),
(67, 13, '_edit_last', '1'),
(68, 13, '_edit_lock', '1440187833:1'),
(69, 13, '_wp_page_template', 'template-price.php'),
(70, 15, '_wp_attached_file', '2015/07/tick.png'),
(71, 15, '_wp_attachment_metadata', 'a:5:{s:5:"width";i:16;s:6:"height";i:16;s:4:"file";s:16:"2015/07/tick.png";s:5:"sizes";a:0:{}s:10:"image_meta";a:11:{s:8:"aperture";i:0;s:6:"credit";s:0:"";s:6:"camera";s:0:"";s:7:"caption";s:0:"";s:17:"created_timestamp";i:0;s:9:"copyright";s:0:"";s:12:"focal_length";i:0;s:3:"iso";i:0;s:13:"shutter_speed";i:0;s:5:"title";s:0:"";s:11:"orientation";i:0;}}'),
(72, 13, 'banner_section_header', 'Be with us...'),
(73, 13, 'banner_section_content', 'We provide flexible pricing plans for all businesses. The pricing below is the starting monthly rate at the end of Free Trial. As the volume of customer reach is increased, the monthly subscription is subject to rise. Please contact for additional information.'),
(74, 13, 'pricing_section1_header', 'Our Plans & Pricing'),
(75, 13, 'pricing_section1_content', '<div class="col-sm-4 social-boxLeft innerpageSec"><div class="pricePlans"><h1>New Customer Marketing</h1><h3>$100 per month</h3><p><!--<img src="image/border-logo.png" alt=""  class="border-logo" />--></p><p class="strongLetter"><img class="alignnone size-full wp-image-15" src="http://localhost/atmosfi/wp-content/uploads/2015/07/tick.png" alt="tick" width="16" height="16" />WiFi Router &amp; Log in page</p><p class="strongLetter"><img class="alignnone size-full wp-image-15" src="http://localhost/atmosfi/wp-content/uploads/2015/07/tick.png" alt="tick" width="16" height="16" />Customer Data Collection &amp; Acces</p><p class="strongLetter"><img class="alignnone size-full wp-image-15" src="http://localhost/atmosfi/wp-content/uploads/2015/07/tick.png" alt="tick" width="16" height="16" />Monthly Analytics</p><p class="strongLetter"><img class="alignnone size-full wp-image-15" src="http://localhost/atmosfi/wp-content/uploads/2015/07/tick.png" alt="tick" width="16" height="16" />New Customer Marketing</p><p class="strongLetter"><img class="alignnone size-full wp-image-15" src="http://localhost/atmosfi/wp-content/uploads/2015/07/tick.png" alt="tick" width="16" height="16" />Installation Fee</p><p><a href="http://localhost/atmosfi/contact-us/">Learn More...</a></p></div></div><div class="col-sm-4 social-boxLeft innerpageSec"><div class="pricePlans"><h1>Customer Segmented</h1><h3>$200 per month</h3><p class="strongLetterColor">Eligible after 3 months of service</p><p><!--<img src="image/border-logo.png" alt=""  class="border-logo" />--></p><p class="strongLetter"><img class="alignnone size-full wp-image-15" src="http://localhost/atmosfi/wp-content/uploads/2015/07/tick.png" alt="tick" width="16" height="16" /> WiFi Router &amp; Log in page</p><p class="strongLetter"><img class="alignnone size-full wp-image-15" src="http://localhost/atmosfi/wp-content/uploads/2015/07/tick.png" alt="tick" width="16" height="16" />Customer Data Collection &amp; Acces</p><p class="strongLetter"><img class="alignnone size-full wp-image-15" src="http://localhost/atmosfi/wp-content/uploads/2015/07/tick.png" alt="tick" width="16" height="16" />Monthly Analytics</p><p class="strongLetter"><img class="alignnone size-full wp-image-15" src="http://localhost/atmosfi/wp-content/uploads/2015/07/tick.png" alt="tick" width="16" height="16" />Automated Marketing</p><p class="strongLetter"><img class="alignnone size-full wp-image-15" src="http://localhost/atmosfi/wp-content/uploads/2015/07/tick.png" alt="tick" width="16" height="16" />Customer Segmented Marketing</p><p><a href="http://localhost/atmosfi/contact-us/">Learn More...</a></p></div></div><div class="col-sm-4 social-boxLeft innerpageSec"><div class="pricePlans"><h1>Year<br />Contract</h1><h3>Contact for details</h3><p><!--<img src="image/border-logo.png" alt=""  class="border-logo" />--></p><p class="strongLetter"><img class="alignnone size-full wp-image-15" src="http://localhost/atmosfi/wp-content/uploads/2015/07/tick.png" alt="tick" width="16" height="16" />WiFi Router &amp; Log in page</p><p class="strongLetter"><img class="alignnone size-full wp-image-15" src="http://localhost/atmosfi/wp-content/uploads/2015/07/tick.png" alt="tick" width="16" height="16" />Customer Data Collection &amp; Acces</p><p class="strongLetter"><img class="alignnone size-full wp-image-15" src="http://localhost/atmosfi/wp-content/uploads/2015/07/tick.png" alt="tick" width="16" height="16" />Monthly Analytics</p><p class="strongLetter"><img class="alignnone size-full wp-image-15" src="http://localhost/atmosfi/wp-content/uploads/2015/07/tick.png" alt="tick" width="16" height="16" />Automated Marketing</p><p class="strongLetter"><img class="alignnone size-full wp-image-15" src="http://localhost/atmosfi/wp-content/uploads/2015/07/tick.png" alt="tick" width="16" height="16" />Free Use of latest Features</p><p><a href="http://localhost/atmosfi/contact-us/">Learn More...</a></p></div></div>'),
(76, 13, 'pricing_section2_header', 'Common Questions'),
(77, 13, 'pricing_section2_content', '<div class="col-sm-4"><h4>What if customers sit down in my business for an extended period of time for the WiFi?</h4><p>We provide complete control on how long a customer can connect to the WiFi. We can limit access anywhere from 30 minutes to 24 hours based on your businesses needs.</p></div><div class="col-sm-4"><h4>What do I need to get set up?</h4><p>Set up takes less than 5 minutes and you only need an internet connection. Our router simply plugs into your current internet modem. We do not provide internet but simply help your business gain more value from providing internet access to your customers.</p></div><div class="col-sm-4"><h4>What payment options are available?</h4><p>Customers are sent an invoice via email every month. Payments can be made using all major credit cards (VISA, MasterCard, American Express).</p></div>'),
(80, 17, '_edit_last', '1'),
(81, 17, '_edit_lock', '1437201316:1'),
(82, 17, '_wp_page_template', 'template-about.php'),
(83, 17, 'banner_section_header', 'We keep your customers coming back.'),
(84, 17, 'banner_section_content', 'AtmosFi LLC is a Philadelphia based company focused on helping local businesses build stronger relationships with their customers. AtmosFi allows business owners to take control of their digital marketing all through WiFi. Customers connect to WiFi using their email and business owners can begin marketing to their customers based on frequency of visits. Keep your customers informed of your latest events, specials, and promotions using our WiFi Solution. Know your customers and keep them coming back – Try AtmosFi today!'),
(85, 17, 'about_section1_header', 'About Us'),
(86, 17, 'about_section1_content', 'In business for around many years now, atmodFi has garnered rich experience and vast exposure in industry. Our industry experience has helped us understand technology, verticals and the need of efficient execution of industry. Our innovations, customer centric approach and fast time-to-market have set high standards for technology, customer support and responsiveness.'),
(87, 17, 'about_section2_header', 'our'),
(88, 17, 'about_section2_content', '<p>atmosFi is perfect for any kind of business that has customers visit their shop/business for 10+ minutes. Today’s trend of digital interaction through smart phones and tablets makes offering WiFi to customers more important than ever to meet customers desired needs. We service Coffee Shops, Bars, Restaurants, Hotels, Salons/Barbers, Car Service Centers and anywhere, where a customer may feel inclined to use their phone/device. See our testimonials to see how we’ve impacted our local business customers.</p>'),
(89, 17, 'about_member_name_1', 'Niraj Patel'),
(90, 17, 'about_member_name_2', 'Ryan Oliveira'),
(91, 17, 'total_member', '2'),
(92, 17, 'about_member_email_1', 'contact@atmosfi.net'),
(93, 17, 'about_member_email_2', 'contact@atmosfi.net'),
(94, 17, 'about_member_desc_1', 'About Niraj Patel'),
(95, 17, 'about_member_desc_2', 'About Ryan Oliveira'),
(96, 17, 'about_section2_subheader', 'CUSTOMERS'),
(97, 17, 'about_member_designation_1', 'CEO'),
(98, 17, 'about_member_designation_2', 'CEO / Co-Founder'),
(99, 17, 'about_member_phone_1', '(215) 867-9619'),
(100, 17, 'about_member_phone_2', '(215) 867-9619'),
(101, 17, 'about_member_image_1', 'http://localhost/atmosfi/wp-content/uploads/2015/07/theme1.png'),
(102, 17, 'about_member_image_2', 'http://localhost/atmosfi/wp-content/uploads/2015/07/theme2.png'),
(105, 22, '_edit_last', '1'),
(106, 22, '_edit_lock', '1437198920:1'),
(107, 22, '_wp_page_template', 'template-partners.php'),
(108, 22, 'banner_section_header', 'Try us!!!'),
(109, 22, 'banner_section_content', 'AtmosFi are an efficient and energetic bunch of go getters who possess a compact vision for the future ahead. In today’s fast changing world, providing high end resolutions matching up to the client’s requirement and at the same time delivering effective support is a very rare phenomenon and our focus behind starting AtmosFi is to achieve and balance these tasks to perfection.'),
(110, 22, 'partners_section1_header', 'Featured Partners'),
(111, 22, 'partners_section1_content', 'In business for around many years now, atmodFi has garnered rich experience and vast exposure in industry. Our industry experience has helped us understand technology, verticals and the need of efficient execution of industry. Our innovations, customer centric approach and fast time-to-market have set high standards for technology, customer support and responsiveness.'),
(112, 22, 'partners_section2_header', 'our'),
(113, 22, 'partners_section2_subheader', 'CUSTOMERS'),
(114, 22, 'partners_section2_content', 'atmosFi is perfect for any kind of business that has customers visit their shop/business for 10+ minutes. Today’s trend of digital interaction through smart phones and tablets makes offering WiFi to customers more important than ever to meet customers desired needs. We service Coffee Shops, Bars, Restaurants, Hotels, Salons/Barbers, Car Service Centers and anywhere, where a customer may feel inclined to use their phone/device. See our testimonials to see how we’ve impacted our local business customers.\r\n\r\nAtmosFi a very strong satisfied client base from different continent of the world.'),
(115, 22, 'partners_image_1', 'http://localhost/atmosfi/wp-content/uploads/2015/07/logo11.jpg'),
(116, 22, 'partners_image_2', 'http://localhost/atmosfi/wp-content/uploads/2015/07/logo2.jpg'),
(117, 22, 'partners_image_3', 'http://localhost/atmosfi/wp-content/uploads/2015/07/logo3.jpg'),
(118, 29, '_edit_last', '1'),
(119, 29, '_edit_lock', '1437200883:1'),
(120, 29, '_wp_page_template', 'template-signup.php'),
(121, 29, 'banner_section_header', 'Sign up for a FREE Trial!'),
(122, 29, 'banner_section_content', 'Signing up is easy and takes only a few minutes. Fill out the information below and we will contact you shortly to schedule a day and time to visit your business and set you up for your Free Trial. Set up only takes 5 minutes!'),
(123, 29, 'signup_section1_header', 'Signup With Us...'),
(124, 29, 'signup_section1_content', 'atmosFi provides the an easy to use tool for all local businesses to keep their customers coming back for future business. It requires no additional work and setup takes 5 minutes or less.'),
(125, 31, 'banner_section_header', ''),
(126, 31, 'banner_section_content', ''),
(127, 31, 'signup_section1_header', ''),
(128, 31, 'signup_section1_content', ''),
(129, 31, 'business_url', 'www.testurl.com'),
(130, 31, 'internet_service', 'Comcast'),
(131, 31, 'email', 'moutushi82@gmail.com'),
(132, 31, 'phone', '6474677655'),
(133, 31, 'city', 'NORTH YORK'),
(134, 31, '_edit_lock', '1440187786:1'),
(135, 32, 'banner_section_header', ''),
(136, 32, 'banner_section_content', ''),
(137, 32, 'contact_section1_address', ''),
(138, 32, 'contact_section1_phone', ''),
(139, 32, 'contact_section1_email', ''),
(140, 32, 'email', 'moutushi82@gmail.com'),
(141, 32, 'phone', '6474677655'),
(142, 32, 'subject', 'Test Mail'),
(143, 32, '_edit_lock', '1438234110:1'),
(144, 33, 'banner_section_header', ''),
(145, 33, 'banner_section_content', ''),
(146, 33, 'contact_section1_address', ''),
(147, 33, 'contact_section1_phone', ''),
(148, 33, 'contact_section1_email', ''),
(149, 33, 'email', 'moutushi82@gmail.com'),
(150, 33, 'phone', '6474677655'),
(151, 33, 'subject', 'Test Mail 2'),
(152, 33, '_edit_lock', '1438234440:1');

-- --------------------------------------------------------

--
-- Table structure for table `wp_posts`
--

CREATE TABLE IF NOT EXISTS `wp_posts` (
  `ID` bigint(20) unsigned NOT NULL,
  `post_author` bigint(20) unsigned NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `post_password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `post_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `to_ping` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pinged` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `guid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `post_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_posts`
--

INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(1, 1, '2015-07-10 19:13:12', '2015-07-10 19:13:12', 'Welcome to WordPress. This is your first post. Edit or delete it, then start blogging!', 'Hello world!', '', 'publish', 'open', 'open', '', 'hello-world', '', '', '2015-07-10 19:13:12', '2015-07-10 19:13:12', '', 0, 'http://localhost/atmosfi/?p=1', 0, 'post', '', 1),
(2, 1, '2015-07-10 19:13:12', '2015-07-10 19:13:12', '', 'Services', '', 'publish', 'open', 'open', '', 'services', '', '', '2015-07-13 06:42:49', '2015-07-13 06:42:49', '', 0, 'http://localhost/atmosfi/?page_id=2', 0, 'page', '', 0),
(5, 1, '2015-07-10 20:45:23', '2015-07-10 20:45:23', '', 'Services', '', 'inherit', 'open', 'open', '', '2-revision-v1', '', '', '2015-07-10 20:45:23', '2015-07-10 20:45:23', '', 2, 'http://localhost/atmosfi/2015/07/10/2-revision-v1/', 0, 'revision', '', 0),
(8, 1, '2015-07-12 06:17:55', '2015-07-12 06:17:55', '', 'Home', '', 'publish', 'open', 'open', '', 'home', '', '', '2015-07-12 22:09:15', '2015-07-12 22:09:15', '', 0, 'http://localhost/atmosfi/?page_id=8', 0, 'page', '', 0),
(9, 1, '2015-07-12 06:17:55', '2015-07-12 06:17:55', '', 'Home', '', 'inherit', 'open', 'open', '', '8-revision-v1', '', '', '2015-07-12 06:17:55', '2015-07-12 06:17:55', '', 8, 'http://localhost/atmosfi/8-revision-v1/', 0, 'revision', '', 0),
(10, 1, '2015-07-12 21:34:12', '2015-07-12 21:34:12', '', 'final-video.mp4', '', 'inherit', 'open', 'open', '', 'final-video-mp4', '', '', '2015-07-12 21:34:12', '2015-07-12 21:34:12', '', 8, 'http://localhost/atmosfi/wp-content/uploads/2015/07/final-video.mp4', 0, 'attachment', 'video/mp4', 0),
(11, 1, '2015-07-15 20:10:03', '2015-07-15 20:10:03', '', 'Contact us', '', 'publish', 'open', 'closed', '', 'contact-us', '', '', '2015-07-17 05:51:25', '2015-07-17 05:51:25', '', 0, 'http://localhost/atmosfi/?page_id=11', 0, 'page', '', 0),
(12, 1, '2015-07-15 20:10:03', '2015-07-15 20:10:03', '', 'Contact us', '', 'inherit', 'open', 'open', '', '11-revision-v1', '', '', '2015-07-15 20:10:03', '2015-07-15 20:10:03', '', 11, 'http://localhost/atmosfi/11-revision-v1/', 0, 'revision', '', 0),
(13, 1, '2015-07-17 05:32:34', '2015-07-17 05:32:34', '', 'Plans & Pricing', '', 'publish', 'open', 'open', '', 'plans-pricing', '', '', '2015-07-17 05:42:11', '2015-07-17 05:42:11', '', 0, 'http://localhost/atmosfi/?page_id=13', 0, 'page', '', 0),
(14, 1, '2015-07-17 05:32:34', '2015-07-17 05:32:34', '', 'Plans & Pricing', '', 'inherit', 'open', 'open', '', '13-revision-v1', '', '', '2015-07-17 05:32:34', '2015-07-17 05:32:34', '', 13, 'http://localhost/atmosfi/13-revision-v1/', 0, 'revision', '', 0),
(15, 1, '2015-07-17 05:38:01', '2015-07-17 05:38:01', '', 'tick', '', 'inherit', 'open', 'open', '', 'tick', '', '', '2015-07-17 05:38:01', '2015-07-17 05:38:01', '', 13, 'http://localhost/atmosfi/wp-content/uploads/2015/07/tick.png', 0, 'attachment', 'image/png', 0),
(17, 1, '2015-07-17 05:59:36', '2015-07-17 05:59:36', '', 'About US', '', 'publish', 'open', 'open', '', 'about-us', '', '', '2015-07-17 14:44:48', '2015-07-17 14:44:48', '', 0, 'http://localhost/atmosfi/?page_id=17', 0, 'page', '', 0),
(18, 1, '2015-07-17 05:59:36', '2015-07-17 05:59:36', '', 'About US', '', 'inherit', 'open', 'open', '', '17-revision-v1', '', '', '2015-07-17 05:59:36', '2015-07-17 05:59:36', '', 17, 'http://localhost/atmosfi/17-revision-v1/', 0, 'revision', '', 0),
(19, 1, '2015-07-17 14:44:48', '2015-07-17 14:44:48', '', 'theme1.png', '', 'inherit', 'open', 'open', '', 'theme1-png', '', '', '2015-07-17 14:44:48', '2015-07-17 14:44:48', '', 17, 'http://localhost/atmosfi/wp-content/uploads/2015/07/theme1.png', 0, 'attachment', 'image/png', 0),
(20, 1, '2015-07-17 14:44:48', '2015-07-17 14:44:48', '', 'theme2.png', '', 'inherit', 'open', 'open', '', 'theme2-png', '', '', '2015-07-17 14:44:48', '2015-07-17 14:44:48', '', 17, 'http://localhost/atmosfi/wp-content/uploads/2015/07/theme2.png', 0, 'attachment', 'image/png', 0),
(22, 1, '2015-07-17 22:39:03', '2015-07-17 22:39:03', '', 'Partners', '', 'publish', 'open', 'open', '', 'partners', '', '', '2015-07-17 22:52:41', '2015-07-17 22:52:41', '', 0, 'http://localhost/atmosfi/?page_id=22', 0, 'page', '', 0),
(23, 1, '2015-07-17 22:39:03', '2015-07-17 22:39:03', '', 'Partners', '', 'inherit', 'open', 'open', '', '22-revision-v1', '', '', '2015-07-17 22:39:03', '2015-07-17 22:39:03', '', 22, 'http://localhost/atmosfi/22-revision-v1/', 0, 'revision', '', 0),
(24, 1, '2015-07-17 22:42:26', '2015-07-17 22:42:26', '', 'logo1.jpg', '', 'inherit', 'open', 'open', '', 'logo1-jpg', '', '', '2015-07-17 22:42:26', '2015-07-17 22:42:26', '', 22, 'http://localhost/atmosfi/wp-content/uploads/2015/07/logo1.jpg', 0, 'attachment', 'image/jpeg', 0),
(25, 1, '2015-07-17 22:52:41', '2015-07-17 22:52:41', '', 'logo1.jpg', '', 'inherit', 'open', 'open', '', 'logo1-jpg-2', '', '', '2015-07-17 22:52:41', '2015-07-17 22:52:41', '', 22, 'http://localhost/atmosfi/wp-content/uploads/2015/07/logo11.jpg', 0, 'attachment', 'image/jpeg', 0),
(26, 1, '2015-07-17 22:52:41', '2015-07-17 22:52:41', '', 'logo2.jpg', '', 'inherit', 'open', 'open', '', 'logo2-jpg', '', '', '2015-07-17 22:52:41', '2015-07-17 22:52:41', '', 22, 'http://localhost/atmosfi/wp-content/uploads/2015/07/logo2.jpg', 0, 'attachment', 'image/jpeg', 0),
(27, 1, '2015-07-17 22:52:41', '2015-07-17 22:52:41', '', 'logo3.jpg', '', 'inherit', 'open', 'open', '', 'logo3-jpg', '', '', '2015-07-17 22:52:41', '2015-07-17 22:52:41', '', 22, 'http://localhost/atmosfi/wp-content/uploads/2015/07/logo3.jpg', 0, 'attachment', 'image/jpeg', 0),
(29, 1, '2015-07-18 06:19:21', '2015-07-18 06:19:21', '', 'Sign UP', '', 'publish', 'open', 'open', '', 'sign-up', '', '', '2015-07-18 06:21:23', '2015-07-18 06:21:23', '', 0, 'http://localhost/atmosfi/?page_id=29', 0, 'page', '', 0),
(30, 1, '2015-07-18 06:19:21', '2015-07-18 06:19:21', '', 'Sign UP', '', 'inherit', 'open', 'open', '', '29-revision-v1', '', '', '2015-07-18 06:19:21', '2015-07-18 06:19:21', '', 29, 'http://localhost/atmosfi/29-revision-v1/', 0, 'revision', '', 0),
(31, 1, '2015-07-28 06:10:50', '2015-07-28 06:10:50', '', 'Moutushi Mandal', '', 'publish', 'open', 'open', '', 'moutushi-mandal', '', '', '2015-07-28 06:10:50', '2015-07-28 06:10:50', '', 0, 'http://localhost/atmosfi/?subscriber=moutushi-mandal', 0, 'subscriber', '', 0),
(32, 1, '2015-07-30 05:28:23', '2015-07-30 05:28:23', '', 'Moutushi Mandal', '', 'publish', 'open', 'open', '', 'moutushi-mandal', '', '', '2015-07-30 05:28:23', '2015-07-30 05:28:23', '', 0, 'http://localhost/atmosfi/?contact_request=moutushi-mandal', 0, 'contact_request', '', 0),
(33, 1, '2015-07-30 05:30:40', '2015-07-30 05:30:40', 'This is a testing mail. Please ignore it.', 'Moutushi Mandal', '', 'publish', 'open', 'open', '', 'moutushi-mandal-2', '', '', '2015-07-30 05:30:40', '2015-07-30 05:30:40', '', 0, 'http://localhost/atmosfi/?contact_request=moutushi-mandal-2', 0, 'contact_request', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_terms`
--

CREATE TABLE IF NOT EXISTS `wp_terms` (
  `term_id` bigint(20) unsigned NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_terms`
--

INSERT INTO `wp_terms` (`term_id`, `name`, `slug`, `term_group`) VALUES
(1, 'Uncategorized', 'uncategorized', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_term_relationships`
--

CREATE TABLE IF NOT EXISTS `wp_term_relationships` (
  `object_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `term_taxonomy_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `term_order` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_term_relationships`
--

INSERT INTO `wp_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`) VALUES
(1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_term_taxonomy`
--

CREATE TABLE IF NOT EXISTS `wp_term_taxonomy` (
  `term_taxonomy_id` bigint(20) unsigned NOT NULL,
  `term_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `taxonomy` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_term_taxonomy`
--

INSERT INTO `wp_term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
(1, 1, 'category', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `wp_usermeta`
--

CREATE TABLE IF NOT EXISTS `wp_usermeta` (
  `umeta_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_usermeta`
--

INSERT INTO `wp_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'nickname', 'admin'),
(2, 1, 'first_name', ''),
(3, 1, 'last_name', ''),
(4, 1, 'description', ''),
(5, 1, 'rich_editing', 'true'),
(6, 1, 'comment_shortcuts', 'false'),
(7, 1, 'admin_color', 'fresh'),
(8, 1, 'use_ssl', '0'),
(9, 1, 'show_admin_bar_front', 'true'),
(10, 1, 'wp_capabilities', 'a:1:{s:13:"administrator";b:1;}'),
(11, 1, 'wp_user_level', '10'),
(12, 1, 'dismissed_wp_pointers', 'wp360_locks,wp390_widgets,wp410_dfw'),
(13, 1, 'show_welcome_panel', '1'),
(14, 1, 'session_tokens', 'a:1:{s:64:"742a2602d62f992fe3c8ac942c76e7e2cd7eb00b1515229f5cef3185ad19fb24";a:4:{s:10:"expiration";i:1440360717;s:2:"ip";s:3:"::1";s:2:"ua";s:121:"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.157 Safari/537.36";s:5:"login";i:1440187917;}}'),
(15, 1, 'wp_dashboard_quick_press_last_post_id', '3'),
(16, 1, 'wp_user-settings', 'editor=html&libraryContent=browse&urlbutton=none&wplink=1'),
(17, 1, 'wp_user-settings-time', '1437200326'),
(18, 1, 'managenav-menuscolumnshidden', 'a:4:{i:0;s:11:"link-target";i:1;s:11:"css-classes";i:2;s:3:"xfn";i:3;s:11:"description";}'),
(19, 1, 'metaboxhidden_nav-menus', 'a:2:{i:0;s:8:"add-post";i:1;s:12:"add-post_tag";}');

-- --------------------------------------------------------

--
-- Table structure for table `wp_users`
--

CREATE TABLE IF NOT EXISTS `wp_users` (
  `ID` bigint(20) unsigned NOT NULL,
  `user_login` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_pass` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_nicename` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT '0',
  `display_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wp_users`
--

INSERT INTO `wp_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES
(1, 'admin', '$P$BGGpJUM1O6AO/T.i7Zh8J84q5isNCy1', 'admin', 'moutushi82@gmail.com', '', '2015-07-10 19:13:12', '', 0, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  ADD PRIMARY KEY (`meta_id`), ADD KEY `comment_id` (`comment_id`), ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_comments`
--
ALTER TABLE `wp_comments`
  ADD PRIMARY KEY (`comment_ID`), ADD KEY `comment_post_ID` (`comment_post_ID`), ADD KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`), ADD KEY `comment_date_gmt` (`comment_date_gmt`), ADD KEY `comment_parent` (`comment_parent`), ADD KEY `comment_author_email` (`comment_author_email`(10));

--
-- Indexes for table `wp_links`
--
ALTER TABLE `wp_links`
  ADD PRIMARY KEY (`link_id`), ADD KEY `link_visible` (`link_visible`);

--
-- Indexes for table `wp_options`
--
ALTER TABLE `wp_options`
  ADD PRIMARY KEY (`option_id`), ADD UNIQUE KEY `option_name` (`option_name`);

--
-- Indexes for table `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  ADD PRIMARY KEY (`meta_id`), ADD KEY `post_id` (`post_id`), ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_posts`
--
ALTER TABLE `wp_posts`
  ADD PRIMARY KEY (`ID`), ADD KEY `post_name` (`post_name`(191)), ADD KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`), ADD KEY `post_parent` (`post_parent`), ADD KEY `post_author` (`post_author`);

--
-- Indexes for table `wp_terms`
--
ALTER TABLE `wp_terms`
  ADD PRIMARY KEY (`term_id`), ADD KEY `slug` (`slug`(191)), ADD KEY `name` (`name`(191));

--
-- Indexes for table `wp_term_relationships`
--
ALTER TABLE `wp_term_relationships`
  ADD PRIMARY KEY (`object_id`,`term_taxonomy_id`), ADD KEY `term_taxonomy_id` (`term_taxonomy_id`);

--
-- Indexes for table `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  ADD PRIMARY KEY (`term_taxonomy_id`), ADD UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`), ADD KEY `taxonomy` (`taxonomy`);

--
-- Indexes for table `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  ADD PRIMARY KEY (`umeta_id`), ADD KEY `user_id` (`user_id`), ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_users`
--
ALTER TABLE `wp_users`
  ADD PRIMARY KEY (`ID`), ADD KEY `user_login_key` (`user_login`), ADD KEY `user_nicename` (`user_nicename`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  MODIFY `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wp_comments`
--
ALTER TABLE `wp_comments`
  MODIFY `comment_ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wp_links`
--
ALTER TABLE `wp_links`
  MODIFY `link_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wp_options`
--
ALTER TABLE `wp_options`
  MODIFY `option_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=318;
--
-- AUTO_INCREMENT for table `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  MODIFY `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=153;
--
-- AUTO_INCREMENT for table `wp_posts`
--
ALTER TABLE `wp_posts`
  MODIFY `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `wp_terms`
--
ALTER TABLE `wp_terms`
  MODIFY `term_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  MODIFY `term_taxonomy_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  MODIFY `umeta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `wp_users`
--
ALTER TABLE `wp_users`
  MODIFY `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
