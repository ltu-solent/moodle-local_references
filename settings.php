<?php
/**
 * Config settings used in local/references,
 * Should be saved in config_plugins table under local_references.
 *
 * @copyright &copy; 2011 The Open University
 * @author j.platts@open.ac.uk
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 * @package local/references
 */

defined('MOODLE_INTERNAL') || die;

if ($hassiteconfig) {//Stops errors when tree not available

    //Config page
    $configpage = new admin_settingpage('local_references_config', get_string('configsettings', 'local_references'));


    $configpage->add(new admin_setting_heading('references_about', '', get_string('about', 'local_references')));
    //DEFINE PLUGIN CONFIG SETTINGS HERE

    //RefWorks API settings
    $configpage->add(new admin_setting_heading('references_rwhead', get_string('rwhead', 'local_references'), ''));

    //accesskeyid
    $accesskeyid = new admin_setting_configtext('local_references/accesskeyid', get_string('config_accesskeyid', 'local_references'),
                get_string('config_accesskeyid_desc', 'local_references'), '');
    $configpage->add($accesskeyid);

    //secret
    $secretkey = new admin_setting_configtext('local_references/secretkey', get_string('config_secretkey', 'local_references'),
                get_string('config_secretkey_desc', 'local_references'), '');
    $configpage->add($secretkey);

    //Group Code
    $groupcode = new admin_setting_configtext('local_references/groupcode', get_string('config_groupcode', 'local_references'),
                get_string('config_groupcode_desc', 'local_references'), '');
    $configpage->add($groupcode);

    //Temp Refworks account username
    $tempun = new admin_setting_configtext('local_references/tempun', get_string('config_tempun', 'local_references'),
                get_string('config_tempun_desc', 'local_references'), '');
    $configpage->add($tempun);

    //Temp Refworks account username
    $temppw = new admin_setting_configtext('local_references/temppw', get_string('config_temppw', 'local_references'),
                get_string('config_temppw_desc', 'local_references'), '');
    $configpage->add($temppw);

    //Athens Group id
    $groupid = new admin_setting_configtext('local_references/groupid', get_string('config_groupid', 'local_references'),
                get_string('config_groupid_desc', 'local_references'), '');
    $configpage->add($groupid);

    //Custom reference styles
    $referencestyles = new admin_setting_configtext('local_references/referencestyles', get_string('config_referencestyles', 'local_references'),
                get_string('config_referencestyles_desc', 'local_references'), '');
    $configpage->add($referencestyles);

    //OpenURL settings
    $configpage->add(new admin_setting_heading('references_ourlhead', get_string('ourlhead', 'local_references'), ''));

    //Custom reference styles
    $openurl = new admin_setting_configtext('local_references/openurl', get_string('config_openurl', 'local_references'),
                get_string('config_openurl_desc', 'local_references'), '');
    $configpage->add($openurl);

    //CrossRef API settings
    $configpage->add(new admin_setting_heading('references_crossrefhead', get_string('crossrefhead', 'local_references'), ''));

    //Crossref api user
    $crossrefuser = new admin_setting_configtext('local_references/crossrefuser', get_string('config_crossrefuser', 'local_references'),
                get_string('config_crossrefuser_desc', 'local_references'), '');
    $configpage->add($crossrefuser);

    //Crossref api password
    $crossrefpwd = new admin_setting_configtext('local_references/crossrefpwd', get_string('config_crossrefpwd', 'local_references'),
                get_string('config_crossrefpwd_desc', 'local_references'), '');
    $configpage->add($crossrefpwd);

    //WorldCat API
    $configpage->add(new admin_setting_heading('references_wchead', get_string('wchead', 'local_references'), ''));

    //WorldCat web service key
    $wcwskey = new admin_setting_configtext('local_references/wcwskey', get_string('config_wcwskey', 'local_references'),
                get_string('config_wcwskey_desc', 'local_references'), '');
    $configpage->add($wcwskey);

	//Primo configuration
	$configpage->add(new admin_setting_heading('references_primohead', get_string('primohead', 'local_references'), ''));
	//Primo URL
	$primourl = new admin_setting_configtext('local_references/primourl', get_string('config_primourl', 'local_references'),
                get_string('config_primourl_desc', 'local_references'), '');
    $configpage->add($primourl);
	//Primo Port
	$primoport = new admin_setting_configtext('local_references/primoport', get_string('config_primoport', 'local_references'),
                get_string('config_primoport_desc', 'local_references'), '');
    $configpage->add($primoport);
	//Primo Institution
	$primoinst = new admin_setting_configtext('local_references/primoinst', get_string('config_primoinst', 'local_references'),
                get_string('config_primoinst_desc', 'local_references'), '');
    $configpage->add($primoinst);
	//Primo Linkback syntax for Print materials
	$primoplinkback = new admin_setting_configtext('local_references/primoplinkback', get_string('config_primoplinkback', 'local_references'),
                get_string('config_primoplinkback_desc', 'local_references'), '');
    $configpage->add($primoplinkback);
	//Primo Linkback syntax for Online materials
	$primoolinkback = new admin_setting_configtext('local_references/primoolinkback', get_string('config_primoolinkback', 'local_references'),
                get_string('config_primoolinkback_desc', 'local_references'), '');
    $configpage->add($primoolinkback);
    //Primo Library Abbrevations
    $primolibs = new admin_setting_configtext('local_references/primolibs', get_string('config_primolibs', 'local_references'),
                get_string('config_primolibs_desc', 'local_references'), '');
    $configpage->add($primolibs);

    $bk_online_avail = new admin_setting_configtext('local_references/bk_online_avail', get_string('config_bk_online_avail', 'local_references'),
                get_string('config_bk_online_avail_desc', 'local_references'), '');
    $configpage->add($bk_online_avail);

    $bk_print_avail = new admin_setting_configtext('local_references/bk_print_avail', get_string('config_bk_print_avail', 'local_references'),
                get_string('config_bk_print_avail_desc', 'local_references'), '');
    $configpage->add($bk_print_avail);

    $jn_online_avail = new admin_setting_configtext('local_references/jn_online_avail', get_string('config_jn_online_avail', 'local_references'),
                get_string('config_jn_online_avail_desc', 'local_references'), '');
    $configpage->add($jn_online_avail);

    $jn_print_avail = new admin_setting_configtext('local_references/jn_print_avail', get_string('config_jn_print_avail', 'local_references'),
                get_string('config_jn_print_avail_desc', 'local_references'), '');
    $configpage->add($jn_print_avail);

    $vid_online_avail = new admin_setting_configtext('local_references/vid_online_avail', get_string('config_vid_online_avail', 'local_references'),
                get_string('config_vid_online_avail_desc', 'local_references'), '');
    $configpage->add($vid_online_avail);

    $vid_print_avail = new admin_setting_configtext('local_references/vid_print_avail', get_string('config_vid_print_avail', 'local_references'),
                get_string('config_vid_print_avail_desc', 'local_references'), '');
    $configpage->add($vid_print_avail);

    $doi_item_avail = new admin_setting_configtext('local_references/doi_item_avail', get_string('config_doi_item_avail', 'local_references'),
                get_string('config_doi_item_avail_desc', 'local_references'), '');
    $configpage->add($doi_item_avail);

    $bk_online_location = new admin_setting_configtext('local_references/bk_online_location', get_string('config_bk_online_location', 'local_references'),
                get_string('config_bk_online_location_desc', 'local_references'), '');
    $configpage->add($bk_online_location);

    $bk_print_location = new admin_setting_configtext('local_references/bk_print_location', get_string('config_bk_print_location', 'local_references'),
                get_string('config_bk_print_location_desc', 'local_references'), '');
    $configpage->add($bk_print_location);

    $jn_online_location = new admin_setting_configtext('local_references/jn_online_location', get_string('config_jn_online_location', 'local_references'),
                get_string('config_jn_online_location_desc', 'local_references'), '');
    $configpage->add($jn_online_location);

    $jn_print_location = new admin_setting_configtext('local_references/jn_print_location', get_string('config_jn_print_location', 'local_references'),
                get_string('config_jn_print_location_desc', 'local_references'), '');
    $configpage->add($jn_print_location);

    $vid_online_location = new admin_setting_configtext('local_references/vid_online_location', get_string('config_vid_online_location', 'local_references'),
                get_string('config_vid_online_location_desc', 'local_references'), '');
    $configpage->add($vid_online_location);

    $vid_print_location = new admin_setting_configtext('local_references/vid_print_location', get_string('config_vid_print_location', 'local_references'),
                get_string('config_vid_print_location_desc', 'local_references'), '');
    $configpage->add($vid_print_location);

    $doi_item_location = new admin_setting_configtext('local_references/doi_item_location', get_string('config_doi_item_location', 'local_references'),
                get_string('config_doi_item_location_desc', 'local_references'), '');
    $configpage->add($doi_item_location);

    $ADMIN->add('localplugins', $configpage);

}