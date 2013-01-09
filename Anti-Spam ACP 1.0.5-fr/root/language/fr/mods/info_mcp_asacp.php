<?php
/**
*
* info_mcp_asacp	[french]
*
* @package Anti-Spam ACP
* @version $Id	info_mcp_asacp.php	09/01/2013 15h20 $
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
	'ASACP_SETTINGS'				=> 'Paramètrage d’Anti-Spam ACP',
	'ASACP_SPAM_LOG'				=> 'Journal des spams',
	'ASACP_SPAM_WORDS'				=> 'Mots de Spams',

	'LOG_ADDED_POST'				=> 'Ajout d’un message',
	'LOG_ALTERED_PROFILE'			=> 'Information de profil modifié',
	'LOG_ALTERED_SIGNATURE'			=> 'Signature modifiée',
	'LOG_ASACP_SETTINGS'			=> 'Mise à jour des paramètres d’Anti-Spam ACP',
	'LOG_CLEAR_FLAG_LOG'			=> 'Journal des marquages effacé',
	'LOG_CLEAR_SPAM_LOG'			=> 'Journal des spams effacé',
	'LOG_EDITED_POST'				=> 'Message édité',
	'LOG_INCORRECT_CODE'			=> 'Code de confirmation erroné.',
	'LOG_INCORRECT_CODE_DATA'		=> 'Code affiché : « %s »<br />Code saisi : « %s »',
	'LOG_USER_SFS_ACTIVATION'		=> '%s enregistré et marqué comme un possible compte de spam par Stop Forum Spam.',
	'LOG_SENT_PM'					=> 'Envoyer un message privé<br />à la liste : %s',
	'LOG_SPAM_PM_DENIED'			=> 'Un message privé a été marqué comme spam. Son envoi n’a pas été autorisé.<br />Le sujet du message était :<br />%s<br /><br />Le message était :<br />%s',
	'LOG_SPAM_PM_DENIED_AKISMET'	=> 'Un message privé a été marqué par Akismet comme spam. Son envoi n’a pas été autorisé.<br />Le sujet du message était :<br />%s<br /><br />Le message était :<br />%s',
	'LOG_SPAM_POST_DENIED'			=> 'Un message a été marqué comme spam. Sa publication n’a pas été autorisée.<br />Le sujet du message était :<br />%s<br /><br />Le message était :<br />%s',
	'LOG_SPAM_POST_DENIED_AKISMET'	=> 'Un message a été marqué par Akismet comme spam. Sa publication n’a pas été autorisée.<br />Le sujet du message était :<br />%s<br /><br />Le message était :<br />%s',
	'LOG_SPAM_PROFILE_DENIED'		=> 'Certains champs du profil étaient marqués comme Spam.<br />Informations soumises :<br /><br />%s',
	'LOG_SPAM_SIGNATURE_DENIED'		=> 'La signature a été marquée comme spam.<br />La signature était :<br />%s',
	'LOG_USER_FLAGGED'				=> '%s a été marqué.',
	'LOG_USER_UNFLAGGED'			=> 'Le marquage de %s a été retiré.',
));

?>