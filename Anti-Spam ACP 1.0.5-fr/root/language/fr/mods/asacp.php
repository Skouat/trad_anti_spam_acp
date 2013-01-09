<?php
/**
*
* asacp	[french]
*
* @package Anti-Spam ACP
* @version $Id	asacp.php	07/01/2013 22h53 $
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
	'ASACP_AKISMET'			=> 'Akismet',
	'ASACP_AKISMET_SUBMIT'	=> 'Soumettre le message suivant à Akismet (seulement le spam)',
	'ASACP_BAN'				=> 'Bannir en un Clic',
	'ASACP_BAN_ACTIONS'		=> 'Les actions suivantes seront effectuées : %s',
	'ASACP_BAN_COMPLETE'	=> 'Vous avez banni avec succès l’utilisateur.<br /><br /><a href="%s">Cliquez ici pour retourner au profil de l’utilisateur</a>.',
	'ASACP_BAN_CONFIRM'		=> 'Êtes vous sûr de vouloir bannir l’utilisateur %s ? Toutes les actions définies dans les paramètres « Bannir en un Clic » d’Anti-Spam ACP seront exécutées pour cet utilisateur.<br /><br /><strong>Pas de marche arrière possible !</strong>',

	'ASACP_BAN_REASON'							=> 'Raison du Bannissement',
	'ASACP_BAN_REASON_EXPLAIN'					=> 'Entrez la raison du bannissement (privé).',
	'ASACP_BAN_REASON_SHOWN_TO_USER'			=> 'Raison du bannissement indiquée à l’utilisateur',
	'ASACP_BAN_REASON_SHOWN_TO_USER_EXPLAIN'	=> 'Si un message est inscrit ici, il sera visible par l’utilisateur ayant été banni.',

	'ASACP_CREDITS'			=> 'Protégé par <a href="http://www.lithiumstudios.org" onclick="window.open(this.href); return false;">Anti-Spam ACP</a>',
	'ASACP_EVIDENCE_SFS'	=> 'Si vous soumettez des informations à Stop Forum Spam, vous devez indiquer une raison probante.<br />(maxi 8.000 caractères).',

	'FOUNDER_ONLY'			=> 'Vous devez être Fondateur du forum pour accéder à cette fonctionnalité.',

	'IP_SEARCH'				=> 'Trouver l’adresse IP',

	'MORE'					=> 'Plus',

	'PROFILE_SPAM_DENIED'	=> 'Certains des champs renseignés sont considérés comme du spam.',

	'REMOVE_ASACP'			=> 'Supprimer Anti-Spam ACP',
	'REMOVE_ASACP_CONFIRM'	=> 'Êtes vous sûr de vouloir supprimer les modifications faites par le MOD Anti-Spam ACP ?<br /><br />Auparavant, assurez-vous que les modifications des sources aient été supprimées ou les modifications de la bases de données seront automatiquement refaites.',

	'SFS_SUBMIT'			=> 'Soumettre les informations de profil à <a href="http://www.stopforumspam.com/">Stop Forum Spam</a>.',
	'SIGNATURE_DISABLED'	=> 'Vous n’êtes pas autorisé à utiliser une signature.',
	'SPAM_DENIED'			=> 'Ce message a été marqué comme spam et a été refusé.',
	'STOP_FORUM_SPAM'		=> 'Stop Forum Spam',

	'USER_FLAG'				=> 'Marquage',
	'USER_FLAGGED'			=> 'Utilisateur marqué',
	'USER_FLAG_CONFIRM'		=> 'Êtes-vous sûr de vouloir marquer l’utilisateur %s ?',
	'USER_FLAG_NEW'			=> 'Nouveau marquage inscrit dans le journal',
	'USER_FLAG_SUCCESS'		=> 'L’utilisateur a été marqué.',
	'USER_UNFLAG'			=> 'Retirer le marquage',
	'USER_UNFLAG_CONFIRM'	=> 'Êtes vous sûr de vouloir retirer le marquage pour l’utilisateur %s ?',
	'USER_UNFLAG_SUCCESS'	=> 'Le marquage de cet utilisateur a été retiré .',
));

?>