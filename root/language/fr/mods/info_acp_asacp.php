<?php
/**
*
* info_acp_asacp	[french]
*
* @package Anti-Spam ACP
* @version $Id$	info_acp_asacp.php 25/11/2012 c
* @copyright (c) 2008 EXreaction
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translator papicx@phpbb-fr.com   http://forums.phpbb-fr.com
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …

$lang = array_merge($lang, array(
	'ANTISPAM'						=> 'Anti-Spam',
	'ASACP_FLAG_LIST'				=> 'Liste des utilisateurs marqués',
	'ASACP_FLAG_LOG'				=> 'Journal des marquages',
	'ASACP_IP_SEARCH'				=> 'Recherche d’adresse IP',
	'ASACP_PROFILE_FIELDS'			=> 'Champs de profil',
	'ASACP_SETTINGS'				=> 'Paramètrage de Anti-Spam ACP',
	'ASACP_SPAM_LOG'				=> 'Journal des Spams',
	'ASACP_SPAM_WORDS'				=> 'Mots de Spam',

	'LOG_ADDED_POST'				=> 'Ajout d’un message',
	'LOG_ALTERED_PROFILE'			=> 'Information de profil modifié',
	'LOG_ALTERED_SIGNATURE'			=> 'Signature modifiée',
	'LOG_ASACP_SETTINGS'			=> 'Paramètrage de Anti-Spam ACP modifié',
	'LOG_CLEAR_FLAG_LOG'			=> 'Journal des marquages effacés',
	'LOG_CLEAR_SPAM_LOG'			=> 'Journal des spams effacés',
	'LOG_EDITED_POST'				=> 'Message édité',
	'LOG_INCORRECT_CODE'			=> 'Code de confirmation erroné.',
	'LOG_INCORRECT_CODE_DATA'		=> 'Code affiché : « %s »<br />Code saisi : « %s »',
	'LOG_USER_SFS_ACTIVATION'		=> '%s enregistré et marqué comme un possible compte de spam par Stop Forum Spam.',
	'LOG_SENT_PM'					=> 'Envoyer un message privé<br />à la liste : %s',
	'LOG_SPAM_PM_DENIED'			=> 'Un message privé a été marqué comme spam et interdit d’envoi.<br />Le sujet du message était :<br />%s<br /><br />Le message était :<br />%s',
	'LOG_SPAM_PM_DENIED_AKISMET'	=> 'Un message privé a été marqué par Akismet comme spam et interdit d’envoi.<br />Le sujet du message était :<br />%s<br /><br />Le message était :<br />%s',
	'LOG_SPAM_POST_DENIED'			=> 'Un message a été marqué comme spam et interdit d’envoi.<br />Le sujet du message était :<br />%s<br /><br />Le message était :<br />%s',
	'LOG_SPAM_POST_DENIED_AKISMET'	=> 'Un message a été marqué par Akismet comme spam et interdit d’envoi.<br />Le sujet du message était :<br />%s<br /><br />Le message était :<br />%s',
	'LOG_SPAM_PROFILE_DENIED'		=> 'Un ou plusieurs champs du profil étaient marqué(s) comme Spam.<br />Les informations soumises :<br /><br />%s',
	'LOG_SPAM_SIGNATURE_DENIED'		=> 'La signature a été marquée comme spam.<br />La signature était :<br />%s',
	'LOG_USER_FLAGGED'				=> '%s a été marqué.',
	'LOG_USER_UNFLAGGED'			=> 'Le marquage de %s a été retiré.',

	'acl_a_asacp'					=> array(
		'lang'						=> 'Peut gérer « Anti-Spam ACP »',
		'cat'						=> 'settings',
	),

	'acl_m_asacp_ban'				=> array(
		'lang'						=> 'Peut utiliser « Bannir en un Clic »',
		'cat'						=> 'misc',
	),

	'acl_m_asacp_ip_search'			=> array(
		'lang'						=> 'Peut utiliser la « Recherche d’adresse IP »',
		'cat'						=> 'misc',
	),

	'acl_a_asacp_profile_fields'	=> array(
		'lang'						=> 'Peut modifier le paramétrage de « Champs de profil »',
		'cat'						=> 'settings',
	),

	'acl_m_asacp_spam_log'			=> array(
		'lang'						=> 'Peut voir le « Journal des Spam »',
		'cat'						=> 'misc',
	),

	'acl_a_asacp_spam_words'		=> array(
		'lang'						=> 'Peut gérer la « Liste des Mots de Spam »',
		'cat'						=> 'settings',
	),

	'acl_m_asacp_user_flag'			=> array(
		'lang'						=> 'Peut « Marquer l’utilisateur », voir le « Journal des marquages » et la « Liste des utilisateurs marqués »',	
		'cat'						=> 'misc',
	),

));

?>