<?php
//button_1 : Accept [cookie_button]
//button_2 : Read More [cookie_link]
//button_3 : Reject [cookie_reject]
//button_4 : Settings [cookie_settings]
//button_5 : Close [cookie_close]

//note : always add empty border when adding styles Eg: solid 0px #ccc;

//always follow the naming structure for other bar types Eg: cli_theme_{bar type}_default
//pls add width param for preview in default themes eg: width:100%; for banner type.
$cli_theme_popup_default=array
(
	'title'=>'Theme_popup current',
	'config'=>array(
		"bar"=>array(
			"type"=>'popup',
			"text"=>'',
			"style"=>"padding:25px 15px; box-sizing:border-box; width:500px; margin:0px auto; border:20px solid rgba(0,0,0,0.5); font-size:12px;"
		),
		"heading"=>array(
			"status"=>1,
			"text"=>"This website uses cookies",
			"style"=>"padding:5px 0px; background:none; text-align:center; border:solid 0px #fff; margin:0px; margin-bottom:5px; border-radius:0px; line-height:24px; font-size:18px; font-weight:bold; text-transform:none;"
		),
		"button_1"=>array(
			"status"=>1,
			"text"=>"Accept",
			"style"=>"display:inline-block; padding:8px 16px 8px; border-radius:4px; text-align:center; font-size: 12px; border:solid 0px #fff;"
		),
		"button_2"=>array(
			"status"=>1,
			"text"=>"Read More",
			"style"=>"display:inline-block; text-align:center; font-size:12px; padding:8px 16px 8px; border:solid 0px #fff;"
		),
		"button_3"=>array(
			"status"=>1,
			"text"=>"Reject",
			"style"=>"display:inline-block; padding:8px 16px 8px; border-radius:4px; text-align:center; font-size: 12px; border:solid 0px #fff;"
		),
		"button_4"=>array(
			"status"=>1,
			"text"=>"Settings",
			"style"=>"display:inline-block; padding:8px 16px 8px; border-radius:4px; text-align:center; font-size: 12px; border:solid 0px #fff;"
		),
		"button_5"=>array(
			"status"=>1,
			"text"=>"X",
			"style"=>"display: inline-block; background:none; border-radius:20px; border:solid 1px #ccc; color: #ccc; text-align: center; font-size: 12px; width:22px; height: 22px; line-height: 22px; margin-left:10px; margin-top:3px; float:right; cursor:pointer;"
		)
	)
);



$cli_theme_popup1=array
(
	'title'=>'Theme_popup1',
	'config'=>array(
		"bar"=>array(
			"type"=>'popup',
			"text"=>'[cookie_close] This website uses cookies to improve your experience. We\'ll assume you\'re ok with this, but you can opt-out if you wish 
			[cookie_link] [cookie_button] [cookie_settings] ',
			"style"=>"background: #fff; border:solid 1px #dbdbdb; color: #000; padding:35px; box-sizing:border-box; width:500px; text-align:center; display:inline-block; font-size:14px; letter-spacing:normal;"
		),
		"heading"=>array(
			"status"=>1,
			"text"=>"This website uses cookies",
			"style"=>"display:inline-block; box-sizing:border-box; width:100%; padding:5px 0px; color:#000; background:none; text-align:center; border:solid 0px #fff; margin:0px; margin-bottom:5px; border-radius:0px; line-height:24px; font-size:18px; font-weight:bold; text-transform:none; letter-spacing:normal;"
		),
		"button_1"=>array(
			"status"=>1,
			"text"=>"Accept",
			"style"=>"display: inline-block; background:#04b47c; border-radius:0px; color: #fff; text-align: center; font-size:12px; padding:5px 8px; margin-left:10px; margin-top:15px; border:solid 0px #fff; line-height:20px;"
		),
		"button_2"=>array(
			"status"=>1,
			"text"=>"Read More",
			"style"=>"display: inline-block; background:#000; border-radius:2px; color: #fff; text-align: center; font-size:12px; padding:5px 8px; margin-left:10px; border:solid 0px #fff; line-height:20px;"
		),
		"button_3"=>array(
			"status"=>0,
			"text"=>"Reject",
			"style"=>"display: inline-block; background:#ccc; border-radius:0px; color: #333; text-align: center; font-size:12px; padding:5px 8px; margin-left:10px; border:solid 0px #fff; margin-top:15px; line-height:20px;"
		),
		"button_4"=>array(
			"status"=>1,
			"text"=>"Settings",
			"style"=>"display: inline-block; background:#000; border-radius:2px; color: #fff; text-align: center; font-size:12px; padding:5px 8px; margin-left:10px; border:solid 0px #fff; margin-top:15px; line-height:20px;"
		),
		"button_5"=>array(
			"status"=>1,
			"text"=>"X",
			"style"=>"display: inline-block; background:none; border-radius:20px; border:solid 1px #ccc; color: #ccc; text-align: center; font-size: 12px; width:22px; height: 22px; line-height: 22px; margin-right:-25px; margin-top:-25px; float: right; right:0px; cursor:pointer;"
		)
	)
);

$cli_theme_popup2=array
(
	'title'=>'Theme_popup2',
	'config'=>array(
		"bar"=>array(
			"type"=>'popup',
			"text"=>'[cookie_close] This website uses cookies to improve your experience. We\'ll assume you\'re ok with this, but you can opt-out if you wish 
			[cookie_link] [cookie_button] [cookie_settings] ',
			"style"=>"background:#000000; border:solid 0px #dbdbdb; color:#fff; padding:45px; box-sizing: border-box; width:500px; text-align:center; display:inline-block; font-size:14px; line-height:26px; letter-spacing:normal;"
		),
		"heading"=>array(
			"status"=>1,
			"text"=>"This website uses cookies",
			"style"=>"display:inline-block; box-sizing:border-box; width:100%; padding:5px 0px; color:#fff; background:none; text-align:center; border:solid 0px #fff; margin:0px; margin-bottom:5px; border-radius:0px; line-height:24px; font-size:18px; font-weight:bold; text-transform:none; letter-spacing:normal;"
		),
		"button_1"=>array(
			"status"=>1,
			"text"=>"Accept",
			"style"=>"display: inline-block; background:#623fe9; border-radius:0px; color: #fff; text-align: center; font-size:14px; padding:5px 14px; margin-left:10px; margin-top:15px; border:solid 0px #fff; line-height:26px;"
		),
		"button_2"=>array(
			"status"=>1,
			"text"=>"Read More",
			"style"=>"display: inline-block; background:#a8a8a8; border-radius:0px; color: #fff; text-align: center; font-size:14px; padding:5px 14px; margin-left:10px; margin-top:15px; border:solid 0px #fff; line-height:26px;"
		),
		"button_3"=>array(
			"status"=>0,
			"text"=>"Reject",
			"style"=>"display: inline-block; background:#a8a8a8; border-radius:0px; color: #fff; text-align: center; font-size:14px; padding:5px 14px; margin-left:10px; margin-top:15px; border:solid 0px #fff; line-height:26px;"
		),
		"button_4"=>array(
			"status"=>1,
			"text"=>"Settings",
			"style"=>"display: inline-block; background:#000; border-radius:0px; color: #fff; text-align: center; font-size:14px; padding:3px 12px; margin-left:10px; margin-top:15px; border:solid 1px #fff; line-height:26px;"
		),
		"button_5"=>array(
			"status"=>1,
			"text"=>"X",
			"style"=>"display: inline-block; background:none; border-radius:20px; border:solid 1px #ccc; color: #ccc; text-align: center; font-size: 12px; width:22px; height: 22px; line-height: 22px; margin-right:-35px; margin-top:-35px; float: right; right:0px; cursor:pointer;"
		)
	)
);


$cli_theme_popup3=array
(
	'title'=>'Theme_popup3',
	'config'=>array(
		"bar"=>array(
			"type"=>'popup',
			"text"=>'This website uses cookies to improve your experience. We\'ll assume you\'re ok with this, but you can opt-out if you wish. 
			[cookie_link] 
			[cookie_button] [cookie_reject] ',
			"style"=>"background:#fff; border:solid 0px #dbdbdb; color:#08402c; padding:45px; box-sizing: border-box; width:500px; text-align:center; display:inline-block; font-size:14px; line-height:26px; letter-spacing:normal;"
		),
		"heading"=>array(
			"status"=>1,
			"text"=>"This website uses cookies",
			"style"=>"display:inline-block; box-sizing:border-box; width:100%; padding:5px 0px; color:#08402c; background:none; text-align:center; border:solid 0px #fff; margin:0px; margin-bottom:5px; border-radius:0px; line-height:24px; font-size:18px; font-weight:bold; text-transform:none; letter-spacing:normal;"
		),
		"button_1"=>array(
			"status"=>1,
			"text"=>"Accept",
			"style"=>"display: inline-block; background:#08402c; border-radius:0px; color: #fff; text-align: center; font-size:14px; padding:5px 14px; margin-left:10px; margin-top:15px; border:solid 0px #fff; text-transform:uppercase; line-height:26px;"
		),
		"button_2"=>array(
			"status"=>1,
			"text"=>"Read More",
			"style"=>"display:inline-block; background:none; border-radius:0px; color:#08402c; text-align: center; font-size:14px; padding:0px 5px; text-decoration:underline; margin-left:5px; border:solid 0px #fff; font-weight:bold;"
		),
		"button_3"=>array(
			"status"=>1,
			"text"=>"Reject",
			"style"=>"display: inline-block; background:#babfbe; border-radius:0px; color:#fff; text-align: center; font-size:14px; padding:5px 14px; margin-left:10px; margin-top:15px; border:solid 0px #fff; text-transform:uppercase; line-height:26px;"
		),
		"button_4"=>array(
			"status"=>1,
			"text"=>"Settings",
			"style"=>"display:inline-block; background:none; border-radius:0px; color:#08402c; text-align: center; font-size:14px; padding:0px 5px; text-decoration:underline; margin-left:5px; border:solid 0px #fff; font-weight:bold;"
		),
		"button_5"=>array(
			"status"=>1,
			"text"=>"X",
			"style"=>"display: inline-block; background:none; border-radius:20px; border:solid 1px #ccc; color: #ccc; text-align: center; font-size: 12px; width:22px; height: 22px; line-height: 22px; margin-right:-35px; margin-top:-35px; float: right; right:0px; cursor:pointer;"
		)
	)
);

$cli_themes_popup=array(	
	'theme_popup_3'=>$cli_theme_popup3,
	'theme_popup_2'=>$cli_theme_popup2,
	'theme_popup_1'=>$cli_theme_popup1,
);