<?php
/**
*
*	acp_asacp [french]
*
* @package Anti-Spam ACP
* @version $Id acp_asacp.php	25/11/2012 c $
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
	'ADD_WORD'									=> 'Ajouter un mot',
	'ALLOW_FIELD'								=> 'Autorisé',
	'ASACP_AKISMET'								=> 'Akismet',
	'ASACP_AKISMET_DOMAIN'						=> 'URL de la page d’accueil',
	'ASACP_AKISMET_DOMAIN_EXPLAIN'				=> 'Indiquer la page d’accueil ou l’URL complète (avec http://) de ce site web.',
	'ASACP_AKISMET_ENABLE'						=> 'Activer la vérification Akismet',
	'ASACP_AKISMET_INVALID_KEY'					=> 'Votre clé API Akismet semble être invalide. Assurez-vous que vous utilisz la clé que vous avez obtenue auprès de <a href="http://akismet.com/">http://akismet.com/</a> et que vous avez utilisé une URL valide pour votre page d’accueil.',
	'ASACP_AKISMET_KEY'							=> 'Clé API Akismet',
	'ASACP_AKISMET_KEY_EXPLAIN'					=> 'Une clé API Akismet est requise pour utiliser ce service. Vous pouvez en obtenir une chez <a href="http://akismet.com/">http://akismet.com/</a>',
	'ASACP_AKISMET_POST_LIMIT'			   		=> 'Nombre de messages',
	'ASACP_AKISMET_POST_LIMIT_EXPLAIN'			=> 'Si l’utilisateur dispose d’un nombre de messages plus élevé que ce chiffre, la vérification Akismet ne sera pas utilisée pour cet utilisateur.<br /><strong>Si 0 est entré, la vérification Akismet fonctionnera en permanence.</strong>',
	'ASACP_BAN_CLEAR_OUTBOX'					=> 'Vider la boîte d’envoi' ,
	'ASACP_BAN_CLEAR_OUTBOX_EXPLAIN'			=> 'Vider la boîte d’envoi des messages privés de l’utilisateur',
	'ASACP_BAN_DEACTIVATE_USER'					=> 'Désactiver le compte',
	'ASACP_BAN_DEACTIVATE_USER_EXPLAIN'			=> 'Désactiver le compte de l’utilisateur',
	'ASACP_BAN_DELETE_AVATAR'					=> 'Supprimer l’avatar',
	'ASACP_BAN_DELETE_AVATAR_EXPLAIN'			=> 'Supprimer l’avatar de l’utilisateur lorsque « Bannir en un Clic » est utilisé',
	'ASACP_BAN_DELETE_BLOG'						=> 'Supprimer le Blog',
	'ASACP_BAN_DELETE_BLOG_EXPLAIN'				=> 'Supprimer les entrées du Blog de l’utilisateur (provenant du mod User Blog Mod)',
	'ASACP_BAN_DELETE_POSTS'					=> 'Supprimer les messages',
	'ASACP_BAN_DELETE_POSTS_EXPLAIN'			=> 'Supprimer les messages de l’utilisateur lorsque « Bannir en un Clic » est utilisé',
	'ASACP_BAN_DELETE_PROFILE_FIELDS'			=> 'Supprimer les champs du profil',
	'ASACP_BAN_DELETE_PROFILE_FIELDS_EXPLAIN'	=> 'Supprimer les champs du profil de l’utilisateur lorsque « Bannir en un Clic » est utilisé',
	'ASACP_BAN_DELETE_SIGNATURE'				=> 'Supprimer la signature',
	'ASACP_BAN_DELETE_SIGNATURE_EXPLAIN'		=> 'Supprimer la signature de l’utilisateur lorsque « Bannir en un Clic » est utilisé',
	'ASACP_BAN_MOVE_TO_GROUP'					=> 'Changer de groupe',
	'ASACP_BAN_MOVE_TO_GROUP_EXPLAIN'			=> 'Déplacer l’utilisateur vers le groupe sélectionné dans la liste lorsque « Bannir en un Clic » est utilisé',
	'ASACP_BAN_SETTINGS'						=> 'Bannir en un Clic',
	'ASACP_BAN_USERNAME'						=> 'Bannir l’utilisateur',
	'ASACP_BAN_USERNAME_EXPLAIN'				=> 'Bannir l’utilisateur lorsque « Bannir en un Clic » est utilisé',
	'ASACP_ENABLE'								=> 'Activer Anti-Spam ACP',
	'ASACP_ENABLE_EXPLAIN'						=> 'Mettre « Non » pour désactiver le système Anti-Spam ACP (ceci ne désactivera pas certaines fonctionnalités telle que « Bannir en un Clic »).',
	'ASACP_FLAG_LIST_EXPLAIN'					=> 'La liste de tous les utilisateurs actuellement marqués',
	'ASACP_IP_SEARCH_BOT_CHECK'					=> 'Contrôler les robots (bots)',
	'ASACP_IP_SEARCH_EXPLAIN'					=> 'Chercher dans tout le forum les actions faites par cette adresse IP.',
	'ASACP_IP_SEARCH_FLAG_LOG'					=> 'Journal des marquages utilisateurs',
	'ASACP_IP_SEARCH_LOGS'						=> 'Actions de Log',
	'ASACP_IP_SEARCH_POLL_VOTES'				=> 'Votes de sondages',
	'ASACP_IP_SEARCH_POSTS'						=> 'Messages',
	'ASACP_IP_SEARCH_PRIVMSGS'					=> 'Messages privés',
	'ASACP_IP_SEARCH_SPAM_LOG'					=> 'Journal des spams',
	'ASACP_IP_SEARCH_USERS'						=> 'Utilisateurs',
	'ASACP_LOG'									=> 'Activer le journal des spams',
	'ASACP_LOG_EXPLAIN'							=> 'Si désactivé, les nouveaux éléments ne seront pas ajoutés dans le journal des spams.',
	'ASACP_NOTIFY_NEW_FLAG'						=> 'Prévenir sur une nouvelle entrée dans le journal des marquages',
	'ASACP_NOTIFY_NEW_FLAG_EXPLAIN'				=> 'Prévenir les utilisateurs autorisés lorsqu’un nouvel élément est inscrit dans le journal.',
	'ASACP_PROFILE_DURING_REG'					=> 'Afficher les champs de profil autorisés pendant l’enregistrement',
	'ASACP_PROFILE_DURING_REG_EXPLAIN'			=> 'Si « Oui », tous les champs de profil autorisés seront affichés pendant l’enregistrement, à l’exception de la signature.',
	'ASACP_PROFILE_FIELDS'						=> 'Champs de profil',
	'ASACP_PROFILE_FIELDS_EXPLAIN'				=> 'Permet de définir les champs de profils autorisés.<br /><br /><strong>Après soumission, tous les champs de tous les utilisateurs seront mis à jour avec la règle définie.</strong>',
	'ASACP_REGISTER_SETTINGS'					=> 'Paramètres d’enregistrement',
	'ASACP_REG_CAPTCHA'							=> 'Confirmation visuelle (captcha) de pré-enregistrement',
	'ASACP_REG_CAPTCHA_EXPLAIN'					=> 'Contrôle l’affichage de la confirmation visuelle avant que le processus d’enregistrement commence.<br />Si activé, vous devriez envisager de désactiver « Activer la confirmation visuelle pour les inscriptions » dans « ACP>>Général>>Configuration générale>>Paramètres de la confirmation visuelle » afin que l’utilisateur n’ai pas à saisir deux fois la confirmation visuelle.',
	'ASACP_SETTINGS_UPDATED'					=> 'Les paramètres du mod Anti-Spam ACP ont été mis à jour avec succès.',
	'ASACP_SFS_ACTION'							=> 'Actions sur Stop Forum Spam',
	'ASACP_SFS_ACTION_EXPLAIN'					=> 'Les actions à accomplir quand un nouveau compte correspond à un profil présent sur <a href="http://www.stopforumspam.com/">Stop Forum Spam</a>',
	'ASACP_SFS_KEY'								=> 'Clé API pour Stop Forum Spam',
	'ASACP_SFS_KEY_EXPLAIN'						=> 'Si vous voulez pouvoir soumettre des informations à <a href="http://www.stopforumspam.com/">Stop Forum Spam</a>, enregistrez-vous <a href="http://www.stopforumspam.com/signup">ici</a> afin d’obtenir une clé API et renseignez-là dans ce champ.',
	'ASACP_SFS_MIN_FREQ'						=> 'Fréquence minimum',
	'ASACP_SFS_MIN_FREQ_EXPLAIN'				=> 'Fréquence minimum (nombre de fois que le compte a été rapporté par les autres sites) avant d’accomplir une action sur le compte provenant des informations rendues par <a href="http://www.stopforumspam.com/">Stop Forum Spam</a>.',
	'ASACP_SFS_SETTINGS'						=> 'Stop Forum Spam',
	'ASACP_SPAM_WORDS_ENABLE'					=> 'Activer les Mots de spams',
	'ASACP_SPAM_WORDS_ENABLE_EXPLAIN'			=> 'Mettre « Non » pour désactiver tout le système lié aux « Mots de spams ».',
	'ASACP_SPAM_WORDS_EXPLAIN'					=> 'Entrer et gérer les mots pour le système de mots de spams.',
	'ASACP_SPAM_WORDS_FLAG_LIMIT'				=> 'Nombre de marquages avant de marquer comme spam',
	'ASACP_SPAM_WORDS_FLAG_LIMIT_EXPLAIN'		=> 'Si un message est marqué comme spam et que la valeur est égale ou supérieur à celle indiquée, le message sera interdit ou soumis à une approbation.',
	'ASACP_SPAM_WORDS_PM_ACTION'				=> 'Action pour le spam de messages privés',
	'ASACP_SPAM_WORDS_PM_ACTION_EXPLAIN'		=> 'Sélectionner l’action à accomplir quand un message privé est marqué comme spam.',
	'ASACP_SPAM_WORDS_POSTING_ACTION'			=> 'Action pour le spam de messages',
	'ASACP_SPAM_WORDS_POSTING_ACTION_EXPLAIN'	=> 'Sélectionner l’action à accomplir quand un message est marqué comme spam.',
	'ASACP_SPAM_WORDS_POST_LIMIT'				=> 'Nombre de messages',
	'ASACP_SPAM_WORDS_POST_LIMIT_EXPLAIN'		=> 'Quand l’utilisateur a un nombre de messages supérieur à ce nombre, le contrôle des mots de spams ne sera pas appliqué à cet utilisateur.<br /><strong>Si à 0, le contrôle des mots de spams sera toujours actif.</strong>',
	'ASACP_SPAM_WORDS_PROFILE_ACTION'			=> 'Action pour le spam de profils',
	'ASACP_SPAM_WORDS_PROFILE_ACTION_EXPLAIN'	=> 'Sélectionner l’action à accomplir quand une information du profil d’un utilisateur est marquée comme spam.',
	'ASACP_USER_FLAG_ENABLE'					=> 'Activer le système de marquage utilisateur',
	'ASACP_USER_FLAG_ENABLE_EXPLAIN'			=> 'Si « Non », les utilisateurs ne seront pas marqués et tous les utilisateurs marqués précédemment ne seront plus enregistrés dans le journal lors de nouvelles actions.',
	'ASACP_VERSION'								=> 'Information de version',

	'CLICK_CHECK_NEW_VERSION'					=> 'Cliquer %sici%s pour vérifier si une nouvelle version est disponible.',
	'CLICK_GET_NEW_VERSION'						=> 'Cliquer %sici%s pour obtenir la nouvelle version.',

	'DELETE_SPAM_WORD'							=> 'Supprimer les mots de spams',
	'DELETE_SPAM_WORD_CONFIRM'					=> 'Êtes vous sûr de vouloir supprimer les mots de spams ?',
	'DENY_FIELD'								=> 'Interdire',
	'DENY_SUBMISSION'							=> 'Interdire la soumission',

	'FLAG_USER'									=> 'Marquer l’utilisateur',

	'INSTALLED_VERSION'							=> 'Version installée',
	'INTERESTS_POST_COUNT'						=> 'Nombre de messages pour le champ « Centres d’intérêt » :',
	'INTERESTS_POST_COUNT_EXPLAIN'				=> 'Si « Centres d’intérêt » est positionné sur « Nombre de messages », l’utilisateur pourra renseigner ce champ de profil après avoir atteint ce nombre de messages.',

	'LATEST_VERSION'							=> 'Dernière version',
	'LOCATION_POST_COUNT'						=> 'Nombre de messages pour le champ « Localisation »',
	'LOCATION_POST_COUNT_EXPLAIN'				=> 'Si « Localisation » est positionné sur « Nombre de messages », l’utilisateur pourra renseigner ce champ de profil après avoir atteint ce nombre de messages.',
	'LOG_VIEW_POST'								=> '%sVoir le message%s',
	'LOG_VIEW_PROFILE'							=> '%sVoir le profil%s',

	'NOTHING'									=> 'Rien',
	'NOT_AVAILABLE'								=> 'Non disponible',
	'NO_ITEMS'									=> 'Aucun résultat pour l’adresse IP donnée.',
	'NO_SPAM_WORD'								=> 'Le mot choisi n’existe pas.',
	'NO_SPAM_WORDS'								=> 'Aucun mot de spams dans la base.',

	'OCCUPATION_POST_COUNT'						=> 'Nombre de messages pour le champ « Emploi »',
	'OCCUPATION_POST_COUNT_EXPLAIN'				=> 'Si « Emploi » est positionné sur « Nombre de messages », l’utilisateur pourra renseigné ce champ de profil après avoir atteint ce nombre de messages.',

	'POST_COUNT'								=> 'Nombre de messages',

	'REGEX'										=> 'Expression régulière',
	'REGEX_AUTO'								=> 'Expression régulière automatique',
	'REGEX_AUTO_EXPLAIN'						=> 'Choisir « Oui » pour que le système crée automatiquement l’expression régulière avec le contenu dans « Texte du Mot de spams ».',
	'REGEX_EXPLAIN'								=> 'Choisir « Oui » pour utiliser l’expression régulière saisie dans « Texte du Mot de spams ».',
	'REQUIRE_ADMIN_ACTIVATION'					=> 'Nécessite l’activation par un administrateur',
	'REQUIRE_APPROVAL'							=> 'Nécessite l’approbation par un modérateur',
	'REQUIRE_FIELD'								=> 'Obligatoire',
	'REQUIRE_USER_ACTIVATION'					=> 'Activation de l’utilisateur obligatoire',

	'SIGNATURE_POST_COUNT'						=> 'Nombre de messages pour le champ « Signature »',
	'SIGNATURE_POST_COUNT_EXPLAIN'				=> 'Si « Signature » est positionné sur « Nombre de messages », l’utilisateur pourra renseigner ce champ de profil après avoir atteint ce nombre de messages.<br /><br />Le paramètrage pour la signature est indépendant des autres. La signature ne peut pas être demandée pendant l’enregistrement.',
	'SPAM_WORD_ADD_SUCCESS'						=> 'Mot de spams ajouté.',
	'SPAM_WORD_DELETE_SUCCESS'					=> 'Mot de spams supprimé.',
	'SPAM_WORD_EDIT_SUCCESS'					=> 'Mot de spams édité.',
	'SPAM_WORD_TEXT'							=> 'Texte du Mot de spams',
	'SPAM_WORD_TEXT_EXPLAIN'					=> 'Si vous utilisez une expression régulière, assurez-vous que son format est correct <a href="http://us2.php.net/manual/en/function.preg-match.php">preg_match</a> (Incluant les délimiteurs d’expression).',

	'UCP_AIM_POST_COUNT'						=> 'Nombre de messages pour le champ « Messagerie instantanée AOL ».',
	'UCP_AIM_POST_COUNT_EXPLAIN'				=> 'Si « Messagerie instantanée AOL » est positionné sur « Nombre de messages », l’utilisateur pourra renseigner ce champ de profil après avoir atteint ce nombre de messages.',
	'UCP_ICQ_POST_COUNT'						=> 'Nombre de messages pour le champ « Numéro ICQ »',
	'UCP_ICQ_POST_COUNT_EXPLAIN'				=> 'Si « Numéro ICQ » est positionné sur « Nombre de messages », l’utilisateur pourra renseigner ce champ de profil après avoir atteint ce nombre de messages.',
	'UCP_JABBER_POST_COUNT'						=> 'Nombre de messages pour le champ « Adresse Jabber »',
	'UCP_JABBER_POST_COUNT_EXPLAIN'				=> 'Si « Adresse Jabber » est positionné sur « Nombre de messages », l’utilisateur pourra renseigner ce champ de profil après avoir atteint ce nombre de messages.',
	'UCP_MSNM_POST_COUNT'						=> 'Nombre de messages pour le champ « WL/MSN Messenger »',
	'UCP_MSNM_POST_COUNT_EXPLAIN'				=> 'Si « WL/MSN Messenger » est positionné sur « Nombre de messages », l’utilisateur pourra renseigner ce champ de profil après avoir atteint ce nombre de messages.',
	'UCP_YIM_POST_COUNT'						=> 'Nombre de messages pour le champ « Yahoo Messenger »',
	'UCP_YIM_POST_COUNT_EXPLAIN'				=> 'Si « Yahoo Messenger » est positionné sur « Nombre de messages », l’utilisateur pourra renseigner ce champ de profil après avoir atteint ce nombre de messages.',

	'VERSION'									=> 'Version',

	'WEBSITE_POST_COUNT'						=> 'Nombre de messages pour le champ « Site Internet »',
	'WEBSITE_POST_COUNT_EXPLAIN'				=> 'Si « Site Internet » est positionné sur « Nombre de messages », l’utilisateur pourra renseigner ce champ de profil après avoir atteint ce nombre de messages.',
));

?>