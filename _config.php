<?php

if(!defined('ZENSHORTCODES_DIR')) define('ZENSHORTCODES_DIR', rtrim(basename(dirname(__FILE__))));

object::useCustomClass('HtmlEditorField_Toolbar', 'ZenHtmlEditorField_Toolbar');

// custom editor config stuff for cms 
$config = HtmlEditorConfig::get('cms');
$config->enablePlugins(array('zenshortcodes' => BASE_URL . '/'. ZENSHORTCODES_DIR . '/editor_plugin_src.js'));
$config->addButtonsToLine(2, 'zenshortcodes');	
$config->setOption('content_css', BASE_URL . '/' . ZENSHORTCODES_DIR . '/css/zenshortcodes.css');
$config->setOption('extended_valid_elements', '*[contenteditable|class|id]');

ShortcodeParser::get('default')->register('zenshortcode', array('ZenShortCode', 'ShortcodeHandler'));