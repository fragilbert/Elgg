<?php
/**
 * The Wire FRENCH language file
 */

$french = array(

	/**
	 * Menu items and titles
	 */
	'thewire' => "Le réseau",
	'thewire:everyone' => "Tout les messages",
	'thewire:user' => "Les messages de %s",
	'thewire:friends' => "Les messages des membres",
	'thewire:reply' => "Répondre",
	'thewire:replying' => "En réponse à %s (@%s) qui disait",
	'thewire:thread' => "Sujet",
	'thewire:charleft' => "caractère(s) restant(s)",
	'thewire:tags' => "Messages du réseau marqué avec '%s'",
	'thewire:noposts' => "Aucun message dans le réseau.",
	'item:object:thewire' => "Les messages du réseau",
	'thewire:update' => 'Mise à jour',
	'thewire:by' => 'Les messages de %s',
	'thewire:previous' => "Précédent",
	'thewire:hide' => "Masquer",
	'thewire:previous:help' => "Voir les messages précédents",
	'thewire:hide:help' => "Masquer les messages précédents",

	/**
	 * The wire river
	 */
	'river:create:object:thewire' => "%s posted to %s",
	'thewire:wire' => 'le réseau',

	/**
	 * Wire widget
	 */
	'thewire:widget:desc' => 'Display your latest wire posts',
	'thewire:num' => 'Number of posts to display',
	'thewire:moreposts' => 'More wire posts',

	/**
	 * Status messages
	 */
	'thewire:posted' => "Your message was successfully posted to the wire.",
	'thewire:deleted' => "The wire post was successfully deleted.",
	'thewire:blank' => "Sorry, you need to enter some text before we can post this.",
	'thewire:notfound' => "Sorry, we could not find the specified wire post.",
	'thewire:notdeleted' => "Sorry. We could not delete this wire post.",

	/**
	 * Notifications
	 */
	'thewire:notify:subject' => "New wire post",
	'thewire:notify:reply' => '%s responded to %s on the wire:',
	'thewire:notify:post' => '%s posted on the wire:',

	/**
	 * Settings
	 */
	'thewire:settings:limit' => "Maximum number of characters for wire messages:",
	'thewire:settings:limit:none' => "No limit",
);

add_translation("fr", $french);
