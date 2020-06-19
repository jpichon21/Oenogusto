<?php  
ob_start();
$overview = get_option('cookielawinfo_privacy_overview_content_settings', array('privacy_overview_menu_title'=>'Privacy Overview','privacy_overview_content' => '','privacy_overview_title' => '',));
$strict_enabled = apply_filters('gdpr_strictly_enabled_category', array('necessary', 'obligatoire'));
$privacy_menu_title = isset($overview['privacy_overview_menu_title']) && !empty($overview['privacy_overview_menu_title']) ? $overview['privacy_overview_menu_title'] : 'Privacy Overview';
$cli_always_enable_text = __('Always Enabled', 'cookie-law-info'); 
$cli_enable_text = __('Enabled', 'cookie-law-info'); 
$cli_disable_text = __('Disabled', 'cookie-law-info'); 
$cli_privacy_readmore='<a class="cli-privacy-readmore" data-readmore-text="'.__('Show more', 'cookie-law-info').'" data-readless-text="'.__('Show less', 'cookie-law-info').'"></a>';
?>
<div class="wt-cli-element cli-container-fluid cli-tab-container">
    <div class="cli-row">
        <div class="cli-col-12 cli-align-items-stretch cli-px-0">
            <div class="cli-privacy-overview">
                <?php  
                $overview = get_option('cookielawinfo_privacy_overview_content_settings', array('privacy_overview_content' => '','privacy_overview_title' => '',)); 
                $overview_title = !empty($overview['privacy_overview_title']) ? $overview['privacy_overview_title'] : __('Privacy Overview', 'cookie-law-info');
                ?>
                <h4><?php echo $overview_title; ?></h4>
                <?php 
                $privacy_overview_content=nl2br($overview['privacy_overview_content']);
                $privacy_overview_content = __($privacy_overview_content, 'cookie-law-info'); 
                $privacy_overview_content = do_shortcode(stripslashes($privacy_overview_content));
                $content_length=strlen(strip_tags($privacy_overview_content));
                 ?>                       
                <div class="cli-privacy-content">
                    <p><?php echo $privacy_overview_content;?></p>
                </div>
                <?php
                 echo $cli_privacy_readmore;
                ?>
            </div>
        </div>  
        <div class="cli-col-12 cli-align-items-stretch cli-px-0 cli-tab-section-container">
            <div class="cli-tab-section cli-privacy-tab">
                <div class="cli-tab-header">
                    <a class="cli-nav-link cli-settings-mobile" >
                        <?php echo $overview_title; ?>
                    </a>
                </div>
                <div class="cli-tab-content">
                    <div class="cli-tab-pane cli-fade">
                        <p><?php  echo $privacy_overview_content;  ?></p>
                    </div>
                </div>

            </div>
            <?php  
            foreach ($the_cookie_list as $key => $cookie) 
            { ?>
                <div class="cli-tab-section">
                <div class="cli-tab-header">
                    <a class="cli-nav-link cli-settings-mobile" data-target="<?php echo $key; ?>" data-toggle="cli-toggle-tab" >
                        <?php echo $cookie['name']; ?> 
                    </a>
                <?php
                    $checked = false;
                    if(isset($_COOKIE["cookielawinfo-checkbox-$key"]) && $_COOKIE["cookielawinfo-checkbox-$key"] =='yes')
                    {
                        $checked = true;  
                    }
                    if(!isset($_COOKIE["cookielawinfo-checkbox-$key"]) && $cookie['defaultstate']== 'enabled')
                    {   
                        $checked = true;     
                    }
                ?>
                <?php if(in_array($key, $strict_enabled)) 
                {
                ?>  
                    <div class="wt-cli-necessary-checkbox">
                        <input type="checkbox" class="cli-user-preference-checkbox" id="checkbox-<?php echo $key; ?>" data-id="checkbox-<?php echo $key; ?>" checked  />
                        <label class="form-check-label" for="checkbox-<?php echo $key; ?>"> <?php echo $cookie['name']; ?> </label>
                    </div>
                    <span class="cli-necessary-caption">
                        <?php echo $cli_always_enable_text; ?>
                    </span>                           
                <?php }
                else
                {
                ?>
                <label class="cli-switch">
                    <input type="checkbox" class="cli-user-preference-checkbox" data-id="checkbox-<?php echo $key; ?>" <?php  if($checked) echo "checked"; ?>  />
                    <span class="cli-slider" data-cli-enable="<?php echo $cli_enable_text; ?>" data-cli-disable="<?php echo $cli_disable_text; ?>"></span>                           
                </label>    
                <?php } ?>
                </div>
                <div class="cli-tab-content">
                    <div class="cli-tab-pane cli-fade" data-id="<?php echo $key; ?>">
                        <?php echo do_shortcode(term_description( $cookie['term_id'], 'cookielawinfo-category' )) ?>
                    </div>
                </div>
                </div>
            <?php  } ?>
           
        </div>
        <div class="cli-col-12 cli-align-items-stretch cli-px-0">
            <div class="cli-tab-footer">
                <?php if ($the_options['accept_all'] == true) { ?>
                    <a class="cli_setting_save_button cli-btn"><?php echo __('Save & Accept', 'cookie-law-info'); ?></a>
                <?php } ?>
            </div>
        </div>
    </div> 
</div> 
<?php $pop_out=ob_get_contents();
ob_end_clean();
?>