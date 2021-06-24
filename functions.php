<?php

function my_setup()
{
add_theme_support('post-thumbnails'); 
add_theme_support('automatic-feed-links'); 
add_theme_support('title-tag'); 
add_theme_support(
'html5',
array( 
'search-form',
'comment-form',
'comment-list',
'gallery',
'caption',
)
);
}

add_action('after_setup_theme', 'my_setup');

function my_script_init()
{
wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css', array(), '5.8.2', 'all');
wp_enqueue_style('my', get_template_directory_uri() . '/sass/style.css', array(), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'my_script_init');

function my_enqueue_style()
{
wp_enqueue_style('slick-theme', get_template_directory_uri() . '/js/slick-theme.css');
wp_enqueue_style('slick', get_template_directory_uri() . '/js/slick.css');
}
add_action('wp_enqueue_scripts', 'my_enqueue_style');

function my_enqueue_script()
{
// </head>タグ前に出力する
wp_enqueue_script( 'slick_min', get_template_directory_uri() . '/js/slick.min.js');
}
add_action('wp_enqueue_scripts', 'my_enqueue_script');



function admin_attend_manage_menu() {
	add_menu_page( '出勤管理', '出勤管理' , 'administrator', 'attendance_manage', -1);
}
add_action('admin_menu', 'admin_attend_manage_menu');

function admin_analytics_menu_link() {
	?>
<script>
	jQuery(function($) {
		var menu_slug = 'attendance_manage';
		$('a.toplevel_page_' + menu_slug).prop({
			href: "../admin_scheduler/",
			target: "_blank"
		});
	});

</script><?php
}
add_action('admin_print_footer_scripts', 'admin_analytics_menu_link');

function hidden_checkbox() {
  ?>
<script>
	// hidden checkbox relations
	jQuery(function($) {
		var check = $('[data-name="attmgr_ex_attr_staff"]');
		if (check) {
			var checktf = check.find('input[type="checkbox"]').prop('checked');
			if (checktf = true) {
				$('#attmgr_ex_attr_staff').prop('checked', true);
			} else {
				$('#attmgr_ex_attr_staff').prop('checked', false);
			}
		}
	});

</script>
<?php
}
add_action("admin_print_footer_scripts-user-new.php", 'hidden_checkbox');





// ADD COLUMNS
function user_priority_column($columns) {
  unset($columns['ID']);
  $columns['priority']='表示順';
  return $columns;
}
add_filter( 'manage_users_columns', 'user_priority_column' );

// APPLY SORT
function user_sortable_column($columns) {
  $add_columns = [
    'priority' => '表示順',
  ];
  return array_merge($columns, $add_columns);
}
add_filter('manage_users_sortable_columns', 'user_sortable_column');

function my_pre_get_users($query) {
  if(!is_admin()) return;
  if($orderby = $query->get('orderby')) {
    switch($orderby) {
      case '表示順':
        $query->set('meta_key', 'priority');
        $query->set('orderby', 'meta_value_num');
        break;
    }
  }
}
add_action('pre_get_users', 'my_pre_get_users');


add_action('wp_enqueue_scripts', 'my_enqueue_script');
function sortable_userlist() {
  ?>
<script src="js/jquery-ui.min.js"></script>
<script src="js/sort-user.js"></script>
<style>
	.ui-sortable-helper {
		width: 100%;
		white-space: nowrap;
		box-shadow: 0 0 8px 0 rgba(0, 0, 0, 0.1);
	}

</style>
<?php
}
add_action("admin_print_footer_scripts-users.php", 'sortable_userlist');

// ADD CUSTOM POST TYPE
function create_post_type() {
  register_post_type('banner', array(
    'label' => 'イベントバナー',
    'labels' => array(
      'singular_name' => 'イベントバナー',
      'menu_name' => 'イベントバナー',
      'add_new_item' => '新規イベントバナーを追加',
      'add_new' => 'イベントバナーを追加',
      'new_item' => '新規イベントバナー',
      'edit_item'=>'イベントバナーを編集',
      'view_item' => 'イベントバナー詳細を表示',
      'not_found' => 'イベントバナーは見つかりませんでした',
      'not_found_in_trash' => 'ゴミ箱にイベントバナーはありません。',
      'search_items' => 'イベントバナーを検索',
    ),
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => 5,
    'rewrite' => true,
    )
  );
}
add_action( 'init', 'create_post_type' );



/**
 * ユーザー編集(ユーザー新規追加、プロフィール含む)の名姓の項目を姓名の順にします。
 */
function lastfirst_name() {
	?><script>
	jQuery(function($) {
		$('#last_name').closest('tr').after($('#first_name').closest('tr'));
	});

</script><?php
}
add_action( 'admin_footer-user-new.php', 'lastfirst_name' );
add_action( 'admin_footer-user-edit.php', 'lastfirst_name' );
add_action( 'admin_footer-profile.php', 'lastfirst_name' );

add_action( 'admin_print_scripts-profile.php', 'my_custom_order' );

//remove_action( 'admin_color_scheme_picker', 'admin_color_scheme_picker' );

//プロフィール表示項目編集（My WP Customize Admin/Frontendを使用するとプロフィール一覧のページごと表示数が変更できないため下記で代替）
function user_profile_hide_script( $hook ) {
$script = <<<SCRIPT
jQuery(function($) {
  jQuery('#your-profile .user-role-wrap').hide(); //権限グループ
  jQuery('#your-profile .user-rich-editing-wrap').hide(); //ビジュアルエディター
  jQuery('#your-profile .user-syntax-highlighting-wrap').hide(); //シンタックスハイライト
  jQuery('#your-profile .user-admin-color-wrap').hide(); //管理画面の配色
  jQuery('#your-profile .user-comment-shortcuts-wrap').hide(); //キーボードショートカット
  jQuery('#your-profile .show-admin-bar').hide(); //ツールバー
  jQuery('#your-profile .user-language-wrap').hide(); //言語
  jQuery('#your-profile .user-user-login-wrap').hide(); //ユーザー名
  jQuery('#your-profile .user-email-wrap').hide(); //メールアドレス
  jQuery('#your-profile .user-url-wrap').hide(); //サイト
  jQuery('#your-profile .user-aim-wrap').hide(); //AIM
  jQuery('#your-profile .user-pass1-wrap').hide(); //新しいパスワード
  jQuery('#your-profile .user-sessions-wrap').hide(); //セッション
	jQuery('#attmgr_ex_fields_title').hide(); //Attendance Manager の拡張項目
	jQuery('.attmgr_ex_fields_title').hide(); //スタッフ


});
SCRIPT;
wp_add_inline_script( 'jquery-core', $script );
}
add_action( 'admin_enqueue_scripts', 'user_profile_hide_script' );
