<?php
/**
 * Core FRENCH Language
 *
 * @package Elgg.Core
 * @subpackage Languages.French
 *
 * francois.gilbert@univ-rennes2.fr
 *
 */

$french = array(
/**
 * Sites
 */

	'item:site' => 'Sites',

/**
 * Sessions
 */

	'login' => "Connexion",
	'loginok' => "Vous êtes connectés.",
	'loginerror' => "Echec de la connexion. Vérifiez votre identifiant et mot de passe.",
	'login:empty' => "Un pseudo/email avec un mot de passe sont requis.",
	'login:baduser' => "Ooops. Impossible de retrouver votre compte dans le site.",
	'auth:nopams' => "Ooops : une erreur interne ! Aucune méthode d'authentification n'est installée.",

	'logout' => "Se déconnecter",
	'logoutok' => "Vous êtes déconnecté(e).",
	'logouterror' => "La déconnection n'est pas faite. Pouvez-vous recommencez l'opération ?",

	'loggedinrequired' => "Vous devez être connecté pour voir cette page.",
	'adminrequired' => "Vous devez être administrateur du site pour voir cette page.",
	'membershiprequired' => "Vous devez être membre du groupe pour voir cette page.",


/**
 * Errors
 */

	'exception:title' => "Ooops... Erreur fatale.",
	'exception:contact_admin' => "Une erreur interne est survenue et a été enregistrée. Si vous contactez l'administrateur du site, donnez-lui les informations suivantes :",

	'actionundefined' => "Cette action (%s) n'est pas (encore ?) définie dans le système.",
	'actionnotfound' => "Le fichier pour l'action '%s' est absent dans le site...",
	'actionloggedout' => "Désolé, pour cette action il faut être connecté...",
	'actionunauthorized' => "Désolé, vous n'avez pas la permission de faire cette action.",

	'InstallationException:SiteNotInstalled' => "Oooops... Impossible de traiter cette demande. Soit le site n'est pas configuré, soit la base de données n'est pas en ligne.",
	'InstallationException:MissingLibrary' => "Je n'ai pas pu charger la librairie %s",
	'InstallationException:CannotLoadSettings' => "Elgg n'a pas pu charger les réglages du site. Le fichier a un problème de droits ou bien n'existe pas.",

	'SecurityException:Codeblock' => "Accès refusé pour exécuter un bloc de code en mode privilégié.",
	'DatabaseException:WrongCredentials' => "Elgg ne peut pas accéder à sa base de données. Vérifiez les paramètres d'accès dans le fichier des paramètres du site.",
	'DatabaseException:NoConnect' => "Elgg ne peut pas accéder à la base de données '%s', vérifiez si cette base est bien crée et si leplease check that the database is created and you have access to it.",
	'SecurityException:FunctionDenied' => "L'accès à la fonction privilégiée '%s' est interdit.",
	'DatabaseException:DBSetupIssues' => "Oula... Il y a un certain nombre de problèmes : ",
	'DatabaseException:ScriptNotFound' => "Elgg couldn't find the requested database script at %s.",
	'DatabaseException:InvalidQuery' => "Invalid query",
	'DatabaseException:InvalidDBLink' => "Connection to database was lost.",

	'IOException:FailedToLoadGUID' => "Failed to load new %s from GUID:%d",
	'InvalidParameterException:NonElggObject' => "Passing a non-ElggObject to an ElggObject constructor!",
	'InvalidParameterException:UnrecognisedValue' => "Unrecognised value passed to constuctor.",

	'InvalidClassException:NotValidElggStar' => "GUID:%d is not a valid %s",

	'PluginException:MisconfiguredPlugin' => "%s (guid: %s) is a misconfigured plugin. It has been disabled. Please search the Elgg wiki for possible causes (http://docs.elgg.org/wiki/).",
	'PluginException:CannotStart' => '%s (guid: %s) cannot start and has been deactivated.  Reason: %s',
	'PluginException:InvalidID' => "%s is an invalid plugin ID.",
	'PluginException:InvalidPath' => "%s is an invalid plugin path.",
	'PluginException:InvalidManifest' => 'Invalid manifest file for plugin %s',
	'PluginException:InvalidPlugin' => '%s is not a valid plugin.',
	'PluginException:InvalidPlugin:Details' => '%s is not a valid plugin: %s',
	'PluginException:NullInstantiated' => 'ElggPlugin cannot be null instantiated. You must pass a GUID, a plugin ID, or a full path.',

	'ElggPlugin:MissingID' => 'Missing plugin ID (guid %s)',
	'ElggPlugin:NoPluginPackagePackage' => 'Missing ElggPluginPackage for plugin ID %s (guid %s)',

	'ElggPluginPackage:InvalidPlugin:MissingFile' => 'The required file "%s" is missing.',
	'ElggPluginPackage:InvalidPlugin:InvalidId' => 'This plugin\'s directory must be renamed to "%s" to match the ID in its manifest.',
	'ElggPluginPackage:InvalidPlugin:InvalidDependency' => 'Its manifest contains an invalid dependency type "%s".',
	'ElggPluginPackage:InvalidPlugin:InvalidProvides' => 'Its manifest contains an invalid provides type "%s".',
	'ElggPluginPackage:InvalidPlugin:CircularDep' => 'There is an invalid %s dependency "%s" in plugin %s.  Plugins cannot conflict with or require something they provide!',

	'ElggPlugin:Exception:CannotIncludeFile' => 'Cannot include %s for plugin %s (guid: %s) at %s.',
	'ElggPlugin:Exception:CannotRegisterViews' => 'Cannot open views dir for plugin %s (guid: %s) at %s.',
	'ElggPlugin:Exception:CannotRegisterLanguages' => 'Cannot register languages for plugin %s (guid: %s) at %s.',
	'ElggPlugin:Exception:NoID' => 'No ID for plugin guid %s!',

	'PluginException:ParserError' => 'Error parsing manifest with API version %s in plugin %s.',
	'PluginException:NoAvailableParser' => 'Cannot find a parser for manifest API version %s in plugin %s.',
	'PluginException:ParserErrorMissingRequiredAttribute' => "Missing required '%s' attribute in manifest for plugin %s.",

	'ElggPlugin:Dependencies:Requires' => 'Requiert',
	'ElggPlugin:Dependencies:Suggests' => 'Suggère',
	'ElggPlugin:Dependencies:Conflicts' => "S'oppose à",
	'ElggPlugin:Dependencies:Conflicted' => 'En conflit',
	'ElggPlugin:Dependencies:Provides' => 'Fournit',
	'ElggPlugin:Dependencies:Priority' => 'Priorité',

	'ElggPlugin:Dependencies:Elgg' => "Version d'Elgg",
	'ElggPlugin:Dependencies:PhpVersion' => 'Version PHP',
	'ElggPlugin:Dependencies:PhpExtension' => 'Extention PHP: %s',
	'ElggPlugin:Dependencies:PhpIni' => 'PHP ini setting: %s',
	'ElggPlugin:Dependencies:Plugin' => 'Plugin: %s',
	'ElggPlugin:Dependencies:Priority:After' => 'After %s',
	'ElggPlugin:Dependencies:Priority:Before' => 'Before %s',
	'ElggPlugin:Dependencies:Priority:Uninstalled' => '%s is not installed',
	'ElggPlugin:Dependencies:Suggests:Unsatisfied' => 'Missing',

	'ElggPlugin:InvalidAndDeactivated' => '%s is an invalid plugin and has been deactivated.',

	'InvalidParameterException:NonElggUser' => "Passing a non-ElggUser to an ElggUser constructor!",

	'InvalidParameterException:NonElggSite' => "Passing a non-ElggSite to an ElggSite constructor!",

	'InvalidParameterException:NonElggGroup' => "Passing a non-ElggGroup to an ElggGroup constructor!",

	'IOException:UnableToSaveNew' => "Unable to save new %s",

	'InvalidParameterException:GUIDNotForExport' => "GUID has not been specified during export, this should never happen.",
	'InvalidParameterException:NonArrayReturnValue' => "Entity serialisation function passed a non-array returnvalue parameter",

	'ConfigurationException:NoCachePath' => "Cache path set to nothing!",
	'IOException:NotDirectory' => "%s is not a directory.",

	'IOException:BaseEntitySaveFailed' => "Unable to save new object's base entity information!",
	'InvalidParameterException:UnexpectedODDClass' => "import() passed an unexpected ODD class",
	'InvalidParameterException:EntityTypeNotSet' => "Entity type must be set.",

	'ClassException:ClassnameNotClass' => "%s is not a %s.",
	'ClassNotFoundException:MissingClass' => "Class '%s' was not found, missing plugin?",
	'InstallationException:TypeNotSupported' => "Type %s is not supported. This indicates an error in your installation, most likely caused by an incomplete upgrade.",

	'ImportException:ImportFailed' => "Could not import element %d",
	'ImportException:ProblemSaving' => "There was a problem saving %s",
	'ImportException:NoGUID' => "New entity created but has no GUID, this should not happen.",

	'ImportException:GUIDNotFound' => "Entity '%d' could not be found.",
	'ImportException:ProblemUpdatingMeta' => "There was a problem updating '%s' on entity '%d'",

	'ExportException:NoSuchEntity' => "No such entity GUID:%d",

	'ImportException:NoODDElements' => "No OpenDD elements found in import data, import failed.",
	'ImportException:NotAllImported' => "Not all elements were imported.",

	'InvalidParameterException:UnrecognisedFileMode' => "Unrecognised file mode '%s'",
	'InvalidParameterException:MissingOwner' => "File %s (file guid:%d) (owner guid:%d) is missing an owner!",
	'IOException:CouldNotMake' => "Could not make %s",
	'IOException:MissingFileName' => "You must specify a name before opening a file.",
	'ClassNotFoundException:NotFoundNotSavedWithFile' => "Unable to load filestore class %s for file %u",
	'NotificationException:NoNotificationMethod' => "No notification method specified.",
	'NotificationException:NoHandlerFound' => "No handler found for '%s' or it was not callable.",
	'NotificationException:ErrorNotifyingGuid' => "There was an error while notifying %d",
	'NotificationException:NoEmailAddress' => "Could not get the email address for GUID:%d",
	'NotificationException:MissingParameter' => "Missing a required parameter, '%s'",

	'DatabaseException:WhereSetNonQuery' => "Where set contains non WhereQueryComponent",
	'DatabaseException:SelectFieldsMissing' => "Fields missing on a select style query",
	'DatabaseException:UnspecifiedQueryType' => "Unrecognised or unspecified query type.",
	'DatabaseException:NoTablesSpecified' => "No tables specified for query.",
	'DatabaseException:NoACL' => "No access control was provided on query",

	'InvalidParameterException:NoEntityFound' => "No entity found, it either doesn't exist or you don't have access to it.",

	'InvalidParameterException:GUIDNotFound' => "GUID:%s could not be found, or you can not access it.",
	'InvalidParameterException:IdNotExistForGUID' => "Sorry, '%s' does not exist for guid:%d",
	'InvalidParameterException:CanNotExportType' => "Sorry, I don't know how to export '%s'",
	'InvalidParameterException:NoDataFound' => "Could not find any data.",
	'InvalidParameterException:DoesNotBelong' => "Does not belong to entity.",
	'InvalidParameterException:DoesNotBelongOrRefer' => "Does not belong to entity or refer to entity.",
	'InvalidParameterException:MissingParameter' => "Missing parameter, you need to provide a GUID.",
	'InvalidParameterException:LibraryNotRegistered' => '%s is not a registered library',
	'InvalidParameterException:LibraryNotFound' => 'Could not load the %s library from %s',

	'APIException:ApiResultUnknown' => "API Result is of an unknown type, this should never happen.",
	'ConfigurationException:NoSiteID' => "No site ID has been specified.",
	'SecurityException:APIAccessDenied' => "Sorry, API access has been disabled by the administrator.",
	'SecurityException:NoAuthMethods' => "No authentication methods were found that could authenticate this API request.",
	'SecurityException:ForwardFailedToRedirect' => 'Redirect could not be issued due to headers already being sent. Halting execution for security. Search http://docs.elgg.org/ for more information.',
	'InvalidParameterException:APIMethodOrFunctionNotSet' => "Method or function not set in call in expose_method()",
	'InvalidParameterException:APIParametersArrayStructure' => "Parameters array structure is incorrect for call to expose method '%s'",
	'InvalidParameterException:UnrecognisedHttpMethod' => "Unrecognised http method %s for api method '%s'",
	'APIException:MissingParameterInMethod' => "Missing parameter %s in method %s",
	'APIException:ParameterNotArray' => "%s does not appear to be an array.",
	'APIException:UnrecognisedTypeCast' => "Unrecognised type in cast %s for variable '%s' in method '%s'",
	'APIException:InvalidParameter' => "Invalid parameter found for '%s' in method '%s'.",
	'APIException:FunctionParseError' => "%s(%s) has a parsing error.",
	'APIException:FunctionNoReturn' => "%s(%s) returned no value.",
	'APIException:APIAuthenticationFailed' => "Method call failed the API Authentication",
	'APIException:UserAuthenticationFailed' => "Method call failed the User Authentication",
	'SecurityException:AuthTokenExpired' => "Authentication token either missing, invalid or expired.",
	'CallException:InvalidCallMethod' => "%s must be called using '%s'",
	'APIException:MethodCallNotImplemented' => "Method call '%s' has not been implemented.",
	'APIException:FunctionDoesNotExist' => "Function for method '%s' is not callable",
	'APIException:AlgorithmNotSupported' => "Algorithm '%s' is not supported or has been disabled.",
	'ConfigurationException:CacheDirNotSet' => "Cache directory 'cache_path' not set.",
	'APIException:NotGetOrPost' => "Request method must be GET or POST",
	'APIException:MissingAPIKey' => "Missing API key",
	'APIException:BadAPIKey' => "Bad API key",
	'APIException:MissingHmac' => "Missing X-Elgg-hmac header",
	'APIException:MissingHmacAlgo' => "Missing X-Elgg-hmac-algo header",
	'APIException:MissingTime' => "Missing X-Elgg-time header",
	'APIException:MissingNonce' => "Missing X-Elgg-nonce header",
	'APIException:TemporalDrift' => "X-Elgg-time is too far in the past or future. Epoch fail.",
	'APIException:NoQueryString' => "No data on the query string",
	'APIException:MissingPOSTHash' => "Missing X-Elgg-posthash header",
	'APIException:MissingPOSTAlgo' => "Missing X-Elgg-posthash_algo header",
	'APIException:MissingContentType' => "Missing content type for post data",
	'SecurityException:InvalidPostHash' => "POST data hash is invalid - Expected %s but got %s.",
	'SecurityException:DupePacket' => "Packet signature already seen.",
	'SecurityException:InvalidAPIKey' => "Invalid or missing API Key.",
	'NotImplementedException:CallMethodNotImplemented' => "Call method '%s' is currently not supported.",

	'NotImplementedException:XMLRPCMethodNotImplemented' => "XML-RPC method call '%s' not implemented.",
	'InvalidParameterException:UnexpectedReturnFormat' => "Call to method '%s' returned an unexpected result.",
	'CallException:NotRPCCall' => "Call does not appear to be a valid XML-RPC call",

	'PluginException:NoPluginName' => "The plugin name could not be found",

	'SecurityException:authenticationfailed' => "User could not be authenticated",

	'CronException:unknownperiod' => '%s is not a recognised period.',

	'SecurityException:deletedisablecurrentsite' => 'You can not delete or disable the site you are currently viewing!',

	'RegistrationException:EmptyPassword' => 'The password fields cannot be empty',
	'RegistrationException:PasswordMismatch' => 'Passwords must match',
	'LoginException:BannedUser' => 'You have been banned from this site and cannot log in',
	'LoginException:UsernameFailure' => 'We could not log you in. Please check your username/email and password.',
	'LoginException:PasswordFailure' => 'We could not log you in. Please check your username/email and password.',
	'LoginException:AccountLocked' => 'Your account has been locked for too many log in failures.',
	'LoginException:ChangePasswordFailure' => 'Failed current password check.',
	'LoginException:Unknown' => 'We could not log you in due to an unknown error.',

	'deprecatedfunction' => 'Warning: This code uses the deprecated function \'%s\' and is not compatible with this version of Elgg',

	'pageownerunavailable' => 'Warning: The page owner %d is not accessible!',
	'viewfailure' => 'There was an internal failure in the view %s',
	'changebookmark' => 'Please change your bookmark for this page',
	'noaccess' => 'The content you were trying to view has been removed or you do not have permission to view it.',
	'error:missing_data' => 'There was some data missing in your request',

	'error:default' => 'Oops...something went wrong.',
	'error:404' => 'Sorry. We could not find the page that you requested.',

/**
 * API
 */
	'system.api.list' => "List all available API calls on the system.",
	'auth.gettoken' => "This API call lets a user obtain a user authentication token which can be used for authenticating future API calls. Pass it as the parameter auth_token",

/**
 * User details
 */

	'name' => "Nom à afficher",
	'email' => "Adresse email",
	'username' => "Pseudo",
	'loginusername' => "Username or email",
	'password' => "Mot de passe",
	'passwordagain' => "Mot de passe (pour vérification)",
	'admin_option' => "Est administrateur du site",

/**
 * Access
 */

	'PRIVATE' => "Privé",
	'LOGGED_IN' => "Membres connectés",
	'PUBLIC' => "Public",
	'LOGGED_OUT' => "Membres déconnectés",
	'access:friends:label' => "Relations",
	'access' => "Accès",
	'access:limited:label' => "Accès restreint",
	'access:help' => "Le niveau d'accès",
	'access:read' => "Accès en lecture",
	'access:write' => "Accès en écriture",
	'access:admin_only' => "Administrateurs du site",

/**
 * Dashboard and widgets
 */

	'dashboard' => "Tableau de bord",
	'dashboard:nowidgets' => "Votre tableau de bord permet de suivre l'activité et les contenus du site qui vous intéressent.",

	'widgets:add' => "Ajouter des Widgets",
	'widgets:add:description' => "Cliquez sur un widget ci-dessous pour l'ajouter à la page.",
	'widgets:position:fixed' => '(Fixed position on page)',
	'widget:unavailable' => "Hey. Vous avez déjà choisi ce widget",
	'widget:numbertodisplay' => "Nombre d'éléments à afficher.",

	'widget:delete' => 'Enlever %s',
	'widget:edit' => 'Personnaliser ce widget',

	'widgets' => "Widgets",
	'widget' => "Widget",
	'item:object:widget' => "Widgets",
	'widgets:save:success' => "Le widget a été sauvegardé.",
	'widgets:save:failure' => "Aïe. Le widget n'a pas pu être sauvegardé.",
	'widgets:add:success' => "On a ajouté ce widget dans la page.",
	'widgets:add:failure' => "Le widget n'a pas pu être ajouté.",
	'widgets:move:failure' => "La nouvelle position du widget n'a pas pu être mémorisée.",
	'widgets:remove:failure' => "Ca coince : impossible d'enlever ce widget. Désolé.",

/**
 * Groups
 */

	'group' => "Groupe",
	'item:group' => "Groupes",

/**
 * Users
 */

	'user' => "Membre",
	'item:user' => "Membres",

/**
 * Friends
 */

	'friends' => "Relations",
	'friends:yours' => "Vos relations",
	'friends:owned' => "Les relations de %s",
	'friend:add' => "Ajouter une relation",
	'friend:remove' => "Supprimer une relation",

	'friends:add:successful' => "%s a été ajouté dans vos relations.",
	'friends:add:failure' => "Impossible d'ajouter %s dans vos relations.",

	'friends:remove:successful' => "You have successfully removed %s from your friends.",
	'friends:remove:failure' => "We couldn't remove %s from your friends.",

	'friends:none' => "N'a pas encore de relation dans le site.",
	'friends:none:you' => "Pas encore de relations ? Ca ne saurait tarder.",

	'friends:none:found' => "Aucune relation n'a été trouvée.",

	'friends:of:none' => "Personne n'est encore entré en relation avec ce membre. Soyez le premier !",
	'friends:of:none:you' => "Personne ne vous a encore ajouté dans ses relations. Commencez par créer du contenu et mettre à jour votre page de membre du réseau. En vous mettant en visibilité, les autres membres vont vous trouver !",

	'friends:of:owned' => "Les personnes qui ont choisi d'entrer en relation avec %s.",

	'friends:of' => "Les relations de",
	'friends:collections' => "Liste de relations",
	'collections:add' => "Nouvelle liste",
	'friends:collections:add' => "Nouvelle liste de relations",
	'friends:addfriends' => "Ajouter des relations",
	'friends:collectionname' => "Nom de la liste",
	'friends:collectionfriends' => "Relations dans cette liste",
	'friends:collectionedit' => "Modifier cette liste",
	'friends:nocollections' => "You do not have any collections yet.",
	'friends:collectiondeleted' => "Your collection has been deleted.",
	'friends:collectiondeletefailed' => "We were unable to delete the collection. Either you don't have permission, or some other problem has occurred.",
	'friends:collectionadded' => "Your collection was successfully created",
	'friends:nocollectionname' => "You need to give your collection a name before it can be created.",
	'friends:collections:members' => "Collection members",
	'friends:collections:edit' => "Edit collection",
	'friends:collections:edited' => "Saved collection",
	'friends:collection:edit_failed' => 'Could not save collection.',

	'friendspicker:chararray' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',

	'avatar' => 'Avatar',
	'avatar:create' => 'Create your avatar',
	'avatar:edit' => 'Edit avatar',
	'avatar:preview' => 'Preview',
	'avatar:upload' => 'Upload a new avatar',
	'avatar:current' => 'Current avatar',
	'avatar:remove' => 'Remove your avatar and set the default icon',
	'avatar:crop:title' => 'Avatar cropping tool',
	'avatar:upload:instructions' => "Your avatar is displayed throughout the site. You can change it as often as you'd like. (File formats accepted: GIF, JPG or PNG)",
	'avatar:create:instructions' => 'Click and drag a square below to match how you want your avatar cropped. A preview will appear in the box on the right. When you are happy with the preview, click \'Create your avatar\'. This cropped version will be used throughout the site as your avatar.',
	'avatar:upload:success' => 'Avatar successfully uploaded',
	'avatar:upload:fail' => 'Avatar upload failed',
	'avatar:resize:fail' => 'Resize of the avatar failed',
	'avatar:crop:success' => 'Cropping the avatar succeeded',
	'avatar:crop:fail' => 'Avatar cropping failed',
	'avatar:remove:success' => 'Removing the avatar succeeded',
	'avatar:remove:fail' => 'Avatar remove failed',

	'profile:edit' => 'Edit profile',
	'profile:aboutme' => "About me",
	'profile:description' => "About me",
	'profile:briefdescription' => "Brief description",
	'profile:location' => "Location",
	'profile:skills' => "Skills",
	'profile:interests' => "Interests",
	'profile:contactemail' => "Contact email",
	'profile:phone' => "Telephone",
	'profile:mobile' => "Mobile phone",
	'profile:website' => "Website",
	'profile:twitter' => "Twitter username",
	'profile:saved' => "Your profile was successfully saved.",

	'profile:field:text' => 'Short text',
	'profile:field:longtext' => 'Large text area',
	'profile:field:tags' => 'Tags',
	'profile:field:url' => 'Web address',
	'profile:field:email' => 'Email address',
	'profile:field:location' => 'Location',
	'profile:field:date' => 'Date',

	'admin:appearance:profile_fields' => 'Edit Profile Fields',
	'profile:edit:default' => 'Edit profile fields',
	'profile:label' => "Profile label",
	'profile:type' => "Profile type",
	'profile:editdefault:delete:fail' => 'Removed default profile item field failed',
	'profile:editdefault:delete:success' => 'Profile field deleted',
	'profile:defaultprofile:reset' => 'Profile fields reset to the system default',
	'profile:resetdefault' => 'Reset profile fields to system defaults',
	'profile:resetdefault:confirm' => 'Are you sure you want to delete your custom profile fields?',
	'profile:explainchangefields' => "You can replace the existing profile fields with your own using the form below. \n\n Give the new profile field a label, for example, 'Favorite team', then select the field type (eg. text, url, tags), and click the 'Add' button. To re-order the fields drag on the handle next to the field label. To edit a field label - click on the label's text to make it editable. \n\n At any time you can revert back to the default profile set up, but you will lose any information already entered into custom fields on profile pages.",
	'profile:editdefault:success' => 'New profile field added',
	'profile:editdefault:fail' => 'Default profile could not be saved',
	'profile:field_too_long' => 'Cannot save your profile information because the "%s" section is too long.',
	'profile:noaccess' => "You do not have permission to edit this profile.",


/**
 * Feeds
 */
	'feed:rss' => 'RSS feed for this page',
/**
 * Links
 */
	'link:view' => 'view link',
	'link:view:all' => 'View all',


/**
 * River
 */
	'river' => "River",
	'river:friend:user:default' => "%s est maintenant en contact avec %s",
	'river:update:user:avatar' => '%s a une nouvelle photo',
	'river:update:user:profile' => '%s has updated their profile',
	'river:noaccess' => 'You do not have permission to view this item.',
	'river:posted:generic' => '%s a écrit',
	'riveritem:single:user' => 'un membre',
	'riveritem:plural:user' => 'des membres',
	'river:ingroup' => 'in the group %s',
	'river:none' => 'No activity',
	'river:update' => 'Update for %s',
	'river:delete:success' => 'River item has been deleted',
	'river:delete:fail' => 'River item could not be deleted',

	'river:widget:title' => "Activity",
	'river:widget:description' => "Display latest activity",
	'river:widget:type' => "Type of activity",
	'river:widgets:friends' => 'Friends activity',
	'river:widgets:all' => 'All site activity',

/**
 * Notifications
 */
	'notifications:usersettings' => "Notification settings",
	'notifications:methods' => "Select your notification methods.",
	'notification:method:email' => 'Email',

	'notifications:usersettings:save:ok' => "Your notification settings were successfully saved.",
	'notifications:usersettings:save:fail' => "There was a problem saving your notification settings.",

	'user.notification.get' => 'Return the notification settings for a given user.',
	'user.notification.set' => 'Set the notification settings for a given user.',

/**
 * Search
 */

	'search' => "Chercher",
	'searchtitle' => "Recherche: %s",
	'users:searchtitle' => "Recherche dans les membres : %s",
	'groups:searchtitle' => "Recherche dans les groupes: %s",
	'advancedsearchtitle' => "%s résultat(s) trouvé(s) pour %s",
	'notfound' => "Aucun résultat trouvé.",
	'next' => "Suivant",
	'previous' => "Précédent",

	'viewtype:change' => "Change list type",
	'viewtype:list' => "List view",
	'viewtype:gallery' => "Gallery",

	'tag:search:startblurb' => "Items with tags matching '%s':",

	'user:search:startblurb' => "Users matching '%s':",
	'user:search:finishblurb' => "To view more, click here.",

	'group:search:startblurb' => "Groups matching '%s':",
	'group:search:finishblurb' => "To view more, click here.",
	'search:go' => 'Go',
	'userpicker:only_friends' => 'Only friends',

/**
 * Account
 */

	'account' => "Account",
	'settings' => "Settings",
	'tools' => "Tools",
	'settings:edit' => 'Edit settings',

	'register' => "S'inscrire",
	'registerok' => "You have successfully registered for %s.",
	'registerbad' => "Your registration was unsuccessful because of an unknown error.",
	'registerdisabled' => "Registration has been disabled by the system administrator",
	'register:fields' => 'All fields are required',

	'registration:notemail' => 'The email address you provided does not appear to be a valid email address.',
	'registration:userexists' => 'That username already exists',
	'registration:usernametooshort' => 'Your username must be a minimum of %u characters long.',
	'registration:usernametoolong' => 'Your username is too long. It can have a maximum of %u characters.',
	'registration:passwordtooshort' => 'The password must be a minimum of %u characters long.',
	'registration:dupeemail' => 'This email address has already been registered.',
	'registration:invalidchars' => 'Sorry, your username contains the character %s which is invalid. The following characters are invalid: %s',
	'registration:emailnotvalid' => 'Sorry, the email address you entered is invalid on this system',
	'registration:passwordnotvalid' => 'Sorry, the password you entered is invalid on this system',
	'registration:usernamenotvalid' => 'Sorry, the username you entered is invalid on this system',

	'adduser' => "Add User",
	'adduser:ok' => "You have successfully added a new user.",
	'adduser:bad' => "The new user could not be created.",

	'user:set:name' => "Account name settings",
	'user:name:label' => "My display name",
	'user:name:success' => "Successfully changed your name on the system.",
	'user:name:fail' => "Could not change your name on the system.  Please make sure your name isn't too long and try again.",

	'user:set:password' => "Account password",
	'user:current_password:label' => 'Current password',
	'user:password:label' => "Your new password",
	'user:password2:label' => "Your new password again",
	'user:password:success' => "Password changed",
	'user:password:fail' => "Could not change your password on the system.",
	'user:password:fail:notsame' => "The two passwords are not the same!",
	'user:password:fail:tooshort' => "Password is too short!",
	'user:password:fail:incorrect_current_password' => 'The current password entered is incorrect.',
	'user:resetpassword:unknown_user' => 'Invalid user.',
	'user:resetpassword:reset_password_confirm' => 'Resetting your password will email a new password to your registered email address.',

	'user:set:language' => "Language settings",
	'user:language:label' => "Your language",
	'user:language:success' => "Your language settings have been updated.",
	'user:language:fail' => "Your language settings could not be saved.",

	'user:username:notfound' => 'Username %s not found.',

	'user:password:lost' => 'Lost password',
	'user:password:resetreq:success' => 'Successfully requested a new password, email sent',
	'user:password:resetreq:fail' => 'Could not request a new password.',

	'user:password:text' => 'To request a new password, enter your username or email address below and click the Request button.',

	'user:persistent' => 'Remember me',

	'walled_garden:welcome' => 'Bienvenue',

/**
 * Administration
 */
	'menu:page:header:administer' => 'Administrer',
	'menu:page:header:configure' => 'Configurer',
	'menu:page:header:develop' => 'Developper',
	'menu:page:header:default' => 'Divers',

	'admin:view_site' => 'Voir le site',
	'admin:loggedin' => 'Connecté sous %s',
	'admin:menu' => 'Menu',

	'admin:configuration:success' => "Les réglages sont enregistrés.",
	'admin:configuration:fail' => "Les réglages n'ont pu être enregistrés.",
	'admin:configuration:dataroot:relative_path' => 'Cannot set "%s" as the dataroot because it is not an absolute path.',

	'admin:unknown_section' => 'Invalid Admin Section.',

	'admin' => "Administration",
	'admin:description' => "The admin panel allows you to control all aspects of the system, from user management to how plugins behave. Choose an option below to get started.",

	'admin:statistics' => "Statistics",
	'admin:statistics:overview' => 'Overview',
	'admin:statistics:server' => 'Server Info',

	'admin:appearance' => 'Appearance',
	'admin:administer_utilities' => 'Utilities',
	'admin:develop_utilities' => 'Utilities',

	'admin:users' => "Users",
	'admin:users:online' => 'Currently Online',
	'admin:users:newest' => 'Newest',
	'admin:users:admins' => 'Administrators',
	'admin:users:add' => 'Add New User',
	'admin:users:description' => "This admin panel allows you to control user settings for your site. Choose an option below to get started.",
	'admin:users:adduser:label' => "Click here to add a new user...",
	'admin:users:opt:linktext' => "Configure users...",
	'admin:users:opt:description' => "Configure users and account information. ",
	'admin:users:find' => 'Find',

	'admin:settings' => 'Settings',
	'admin:settings:basic' => 'Basic Settings',
	'admin:settings:advanced' => 'Advanced Settings',
	'admin:site:description' => "This admin panel allows you to control global settings for your site. Choose an option below to get started.",
	'admin:site:opt:linktext' => "Configure site...",
	'admin:site:access:warning' => "Changing the access setting only affects the permissions on content created in the future.",

	'admin:dashboard' => 'Dashboard',
	'admin:widget:online_users' => 'Online users',
	'admin:widget:online_users:help' => 'Lists the users currently on the site',
	'admin:widget:new_users' => 'New users',
	'admin:widget:new_users:help' => 'Lists the newest users',
	'admin:widget:content_stats' => 'Content statistics',
	'admin:widget:content_stats:help' => 'Keep track of the content created by your users',
	'widget:content_stats:type' => 'Content type',
	'widget:content_stats:number' => 'Number',

	'admin:widget:admin_welcome' => 'Welcome',
	'admin:widget:admin_welcome:help' => "A short introduction to Elgg's admin area",
	'admin:widget:admin_welcome:intro' =>
'Welcome to Elgg! Right now you are looking at the administration dashboard. It\'s useful for tracking what\'s happening on the site.',

	'admin:widget:admin_welcome:admin_overview' =>
"Navigation for the administration area is provided by the menu to the right. It is organized into"
. " three sections:
	<dl>
		<dt>Administer</dt><dd>Everyday tasks like monitoring reported content, checking who is online, and viewing statistics.</dd>
		<dt>Configure</dt><dd>Occasional tasks like setting the site name or activating a plugin.</dd>
		<dt>Develop</dt><dd>For developers who are building plugins or designing themes. (Requires a developer plugin.)</dd>
	</dl>
	",

	// argh, this is ugly
	'admin:widget:admin_welcome:outro' => '<br />Be sure to check out the resources available through the footer links and thank you for using Elgg!',

	'admin:widget:control_panel' => 'Control panel',
	'admin:widget:control_panel:help' => "Provides easy access to common controls",

	'admin:cache:flush' => 'Flush the caches',
	'admin:cache:flushed' => "The site's caches have been flushed",

	'admin:footer:faq' => 'Administration FAQ',
	'admin:footer:manual' => 'Administration Manual',
	'admin:footer:community_forums' => 'Elgg Community Forums',
	'admin:footer:blog' => 'Elgg Blog',

	'admin:plugins:category:all' => 'All plugins',
	'admin:plugins:category:active' => 'Active plugins',
	'admin:plugins:category:inactive' => 'Inactive plugins',
	'admin:plugins:category:admin' => 'Admin',
	'admin:plugins:category:bundled' => 'Bundled',
	'admin:plugins:category:nonbundled' => 'Non-bundled',
	'admin:plugins:category:content' => 'Content',
	'admin:plugins:category:development' => 'Development',
	'admin:plugins:category:enhancement' => 'Enhancements',
	'admin:plugins:category:api' => 'Service/API',
	'admin:plugins:category:communication' => 'Communication',
	'admin:plugins:category:security' => 'Security and Spam',
	'admin:plugins:category:social' => 'Social',
	'admin:plugins:category:multimedia' => 'Multimedia',
	'admin:plugins:category:theme' => 'Themes',
	'admin:plugins:category:widget' => 'Widgets',
	'admin:plugins:category:utility' => 'Utilities',

	'admin:plugins:sort:priority' => 'Priority',
	'admin:plugins:sort:alpha' => 'Alphabetical',
	'admin:plugins:sort:date' => 'Newest',

	'admin:plugins:markdown:unknown_plugin' => 'Unknown plugin.',
	'admin:plugins:markdown:unknown_file' => 'Unknown file.',

	'admin:notices:could_not_delete' => 'Could not delete notice.',
	'item:object:admin_notice' => 'Admin notice',

	'admin:options' => 'Admin options',

/**
 * Plugins
 */

	'plugins:disabled' => 'Plugins are not being loaded because a file named "disabled" is in the mod directory.',
	'plugins:settings:save:ok' => "Settings for the %s plugin were saved successfully.",
	'plugins:settings:save:fail' => "There was a problem saving settings for the %s plugin.",
	'plugins:usersettings:save:ok' => "User settings for the %s plugin were saved successfully.",
	'plugins:usersettings:save:fail' => "There was a problem saving  user settings for the %s plugin.",
	'item:object:plugin' => 'Plugins',

	'admin:plugins' => "Plugins",
	'admin:plugins:activate_all' => 'Activate All',
	'admin:plugins:deactivate_all' => 'Deactivate All',
	'admin:plugins:activate' => 'Activate',
	'admin:plugins:deactivate' => 'Deactivate',
	'admin:plugins:description' => "This admin panel allows you to control and configure tools installed on your site.",
	'admin:plugins:opt:linktext' => "Configure tools...",
	'admin:plugins:opt:description' => "Configure the tools installed on the site. ",
	'admin:plugins:label:author' => "Author",
	'admin:plugins:label:copyright' => "Copyright",
	'admin:plugins:label:categories' => 'Categories',
	'admin:plugins:label:licence' => "License",
	'admin:plugins:label:website' => "URL",
	'admin:plugins:label:repository' => "Code",
	'admin:plugins:label:bugtracker' => "Report issue",
	'admin:plugins:label:donate' => "Donate",
	'admin:plugins:label:moreinfo' => 'more info',
	'admin:plugins:label:version' => 'Version',
	'admin:plugins:label:location' => 'Location',
	'admin:plugins:label:contributors' => 'Contributors',
	'admin:plugins:label:contributors:name' => 'Name',
	'admin:plugins:label:contributors:email' => 'E-mail',
	'admin:plugins:label:contributors:website' => 'Website',
	'admin:plugins:label:contributors:username' => 'Community username',
	'admin:plugins:label:contributors:description' => 'Description',
	'admin:plugins:label:dependencies' => 'Dependencies',

	'admin:plugins:warning:elgg_version_unknown' => 'This plugin uses a legacy manifest file and does not specify a compatible Elgg version. It probably will not work!',
	'admin:plugins:warning:unmet_dependencies' => 'This plugin has unmet dependencies and cannot be activated. Check dependencies under more info.',
	'admin:plugins:warning:invalid' => 'This plugin is invalid: %s',
	'admin:plugins:warning:invalid:check_docs' => 'Check <a href="http://docs.elgg.org/Invalid_Plugin">the Elgg documentation</a> for troubleshooting tips.',
	'admin:plugins:cannot_activate' => 'cannot activate',

	'admin:plugins:set_priority:yes' => "Reordered %s.",
	'admin:plugins:set_priority:no' => "Could not reorder %s.",
	'admin:plugins:set_priority:no_with_msg' => "Could not reorder %s. Error: %s",
	'admin:plugins:deactivate:yes' => "Deactivated %s.",
	'admin:plugins:deactivate:no' => "Could not deactivate %s.",
	'admin:plugins:deactivate:no_with_msg' => "Could not deactivate %s. Error: %s",
	'admin:plugins:activate:yes' => "Activated %s.",
	'admin:plugins:activate:no' => "Could not activate %s.",
	'admin:plugins:activate:no_with_msg' => "Could not activate %s. Error: %s",
	'admin:plugins:categories:all' => 'All categories',
	'admin:plugins:plugin_website' => 'Plugin website',
	'admin:plugins:author' => '%s',
	'admin:plugins:version' => 'Version %s',
	'admin:plugin_settings' => 'Plugin Settings',
	'admin:plugins:warning:unmet_dependencies_active' => 'This plugin is active but has unmet dependencies. You may encounter problems. See "more info" below for details.',

	'admin:plugins:dependencies:type' => 'Type',
	'admin:plugins:dependencies:name' => 'Name',
	'admin:plugins:dependencies:expected_value' => 'Expected Value',
	'admin:plugins:dependencies:local_value' => 'Actual value',
	'admin:plugins:dependencies:comment' => 'Comment',

	'admin:statistics:description' => "This is an overview of statistics on your site. If you need more detailed statistics, a professional administration feature is available.",
	'admin:statistics:opt:description' => "View statistical information about users and objects on your site.",
	'admin:statistics:opt:linktext' => "View statistics...",
	'admin:statistics:label:basic' => "Basic site statistics",
	'admin:statistics:label:numentities' => "Entities on site",
	'admin:statistics:label:numusers' => "Number of users",
	'admin:statistics:label:numonline' => "Number of users online",
	'admin:statistics:label:onlineusers' => "Users online now",
	'admin:statistics:label:admins'=>"Admins",
	'admin:statistics:label:version' => "Elgg version",
	'admin:statistics:label:version:release' => "Release",
	'admin:statistics:label:version:version' => "Version",

	'admin:server:label:php' => 'PHP',
	'admin:server:label:web_server' => 'Web Server',
	'admin:server:label:server' => 'Server',
	'admin:server:label:log_location' => 'Log Location',
	'admin:server:label:php_version' => 'PHP version',
	'admin:server:label:php_ini' => 'PHP ini file location',
	'admin:server:label:php_log' => 'PHP Log',
	'admin:server:label:mem_avail' => 'Memory available',
	'admin:server:label:mem_used' => 'Memory used',
	'admin:server:error_log' => "Web server's error log",
	'admin:server:label:post_max_size' => 'POST maximum size',
	'admin:server:label:upload_max_filesize' => 'Upload maximum size',
	'admin:server:warning:post_max_too_small' => '(Note: post_max_size must be larger than this value to support uploads of this size)',

	'admin:user:label:search' => "Find users:",
	'admin:user:label:searchbutton' => "Search",

	'admin:user:ban:no' => "Can not ban user",
	'admin:user:ban:yes' => "User banned.",
	'admin:user:self:ban:no' => "You cannot ban yourself",
	'admin:user:unban:no' => "Can not unban user",
	'admin:user:unban:yes' => "User unbanned.",
	'admin:user:delete:no' => "Can not delete user",
	'admin:user:delete:yes' => "The user %s has been deleted",
	'admin:user:self:delete:no' => "You cannot delete yourself",

	'admin:user:resetpassword:yes' => "Password reset, user notified.",
	'admin:user:resetpassword:no' => "Password could not be reset.",

	'admin:user:makeadmin:yes' => "User is now an admin.",
	'admin:user:makeadmin:no' => "We could not make this user an admin.",

	'admin:user:removeadmin:yes' => "User is no longer an admin.",
	'admin:user:removeadmin:no' => "We could not remove administrator privileges from this user.",
	'admin:user:self:removeadmin:no' => "You cannot remove your own administrator privileges.",

	'admin:appearance:menu_items' => 'Menu Items',
	'admin:menu_items:configure' => 'Configure main menu items',
	'admin:menu_items:description' => 'Select which menu items you want to show as featured links.  Unused items will be added as "More" at the end of the list.',
	'admin:menu_items:hide_toolbar_entries' => 'Remove links from tool bar menu?',
	'admin:menu_items:saved' => 'Menu items saved.',
	'admin:add_menu_item' => 'Add a custom menu item',
	'admin:add_menu_item:description' => 'Fill out the Display name and URL to add custom items to your navigation menu.',

	'admin:appearance:default_widgets' => 'Default Widgets',
	'admin:default_widgets:unknown_type' => 'Unknown widget type',
	'admin:default_widgets:instructions' => 'Add, remove, position, and configure default widgets for the selected widget page.'
		. '  These changes will only affect new users on the site.',

/**
 * User settings
 */
		
	'usersettings:description' => "The user settings panel allows you to control all your personal settings, from user management to how plugins behave. Choose an option below to get started.",

	'usersettings:statistics' => "Your statistics",
	'usersettings:statistics:opt:description' => "View statistical information about users and objects on your site.",
	'usersettings:statistics:opt:linktext' => "Account statistics",

	'usersettings:user' => "Your settings",
	'usersettings:user:opt:description' => "This allows you to control user settings.",
	'usersettings:user:opt:linktext' => "Change your settings",

	'usersettings:plugins' => "Tools",
	'usersettings:plugins:opt:description' => "Configure settings (if any) for your active tools.",
	'usersettings:plugins:opt:linktext' => "Configure your tools",

	'usersettings:plugins:description' => "This panel allows you to control and configure the personal settings for the tools installed by your system administrator.",
	'usersettings:statistics:label:numentities' => "Your content",

	'usersettings:statistics:yourdetails' => "Your details",
	'usersettings:statistics:label:name' => "Full name",
	'usersettings:statistics:label:email' => "Email",
	'usersettings:statistics:label:membersince' => "Member since",
	'usersettings:statistics:label:lastlogin' => "Last logged in",

/**
 * Activity river
 */
		
	'river:all' => "L'activité de tout le réseau",
	'river:mine' => "Mon activité",
	'river:friends' => "L'activité de mes relations",
	'river:select' => 'Montrer %s',
	'river:comments:more' => '+%u plus',
	'river:generic_comment' => 'Commentaire sur %s %s',

	'friends:widget:description' => "Affiche vos relations dans le réseau.",
	'friends:num_display' => "Nombre de relations à afficher",
	'friends:icon_size' => "Taille de l'icône",
	'friends:tiny' => "tout petit",
	'friends:small' => "petit",

/**
 * Icons
 */

	'icon:size' => "Taille de l'icône",
	'icon:size:topbar' => "Topbar",
	'icon:size:tiny' => "Tiny",
	'icon:size:small' => "Small",
	'icon:size:medium' => "Medium",
	'icon:size:large' => "Large",
	'icon:size:master' => "Extra Large",
		
/**
 * Generic action words
 */

	'save' => "Enregistrer",
	'reset' => 'Réinitialiser',
	'publish' => "Publier",
	'cancel' => "Annuler",
	'saving' => "Enregistrement ...",
	'update' => "Mise à jour",
	'preview' => "Prévisualisation",
	'edit' => "Modifier",
	'delete' => "Supprimer",
	'accept' => "Accepter",
	'reject' => "Rejeter",
	'decline' => "Refuser",
	'approve' => "Approuver",
	'activate' => "Activer",
	'deactivate' => "Désactiver",
	'disapprove' => "Désapprouver",
	'revoke' => "Révoquer",
	'load' => "Charger",
	'upload' => "Envoyer",
	'download' => "Télécharger",
	'ban' => "Bannir",
	'unban' => "Rétablir",
	'banned' => "Banni",
	'enable' => "Activer",
	'disable' => "Désactiver",
	'request' => "Demander",
	'complete' => "Terminer",
	'open' => 'Ouvrir',
	'close' => 'Fermer',
	'hide' => 'Masquer',
	'show' => 'Montrer',
	'reply' => "Répondre",
	'more' => 'Plus',
	'more_info' => "Plus d'info",
	'comments' => 'Commentaires',
	'import' => 'Importer',
	'export' => 'Exporter',
	'untitled' => 'Sans titre',
	'help' => 'Aide',
	'send' => 'Envoyer',
	'post' => 'Poster',
	'submit' => 'Soumettre',
	'comment' => 'Commenter',
	'upgrade' => 'Mettre à jour',
	'sort' => 'Trier',
	'filter' => 'Filtrer',
	'new' => 'Nouveau',
	'add' => 'Ajouter',
	'create' => 'Créer',
	'remove' => 'Enlever',
	'revert' => 'Annuler',

	'site' => 'Site',
	'activity' => 'Activité',
	'members' => 'Membres',

	'up' => 'Monter',
	'down' => 'Descendre',
	'top' => 'Haut',
	'bottom' => 'Bas',
	'right' => 'Droite',
	'left' => 'Gauche',
	'back' => 'Retour',

	'invite' => "Inviter",

	'resetpassword' => "Réinitialiser le mot de passe",
	'makeadmin' => "Donner l'administration",
	'removeadmin' => "Enlever l'administration",

	'option:yes' => "Oui",
	'option:no' => "Non",

	'unknown' => 'Inconnu',

	'active' => 'Actif',
	'total' => 'Total',
	
	'other' => 'Autre',
	'options' => 'Options',
	'advanced' => 'Avancé',

	'learnmore' => "Cliquez ici pour en savoir plus.",

	'content' => "contenu",
	'content:latest' => 'Dernière activité',
	'content:latest:blurb' => "Vous pouvez aussi cliquer ici pour voir les derniers contenus de l'ensemble du site.",

	'link:text' => 'voir le lien',
	
/**
 * Generic questions
 */

	'question:areyousure' => 'Etes-vous sûr(e) ?',

/**
 * Status
 */

	'status' => 'Statut',
	'status:unsaved_draft' => 'Brouillon non enregistré',
	'status:draft' => 'Brouillon',
	'status:unpublished' => 'Non publié',
	'status:published' => 'Publié',
	'status:featured' => 'Avec',
	'status:open' => 'Ouvert',
	'status:closed' => 'Fermé',

/**
 * Generic sorts
 */

	'sort:newest' => 'Plus récent',
	'sort:popular' => 'Populaire',
	'sort:alpha' => 'Alphabétique',
	'sort:priority' => 'Priorité',
		
/**
 * Generic data words
 */

	'title' => "Titre",
	'description' => "Description",
	'tags' => "Mots-clés",
	'spotlight' => "Mise en avant",
	'all' => "Tout",
	'mine' => "A moi",

	'by' => 'par',
	'none' => 'aucun',

	'annotations' => "Annotations",
	'relationships' => "Relations",
	'metadata' => "Métadonnées",
	'tagcloud' => "Nuage de mots-clés",
	'tagcloud:allsitetags' => "Mots-clé du site",

	'on' => 'Marche',
	'off' => 'Arrêt',

/**
 * Entity actions
 */
		
	'edit:this' => 'Modifier çà',
	'delete:this' => 'Supprimer ceci',
	'comment:this' => 'Faire un commentaire',

/**
 * Input / output strings
 */

	'deleteconfirm' => "Etes-vous sûr(e) de vouloir supprimer cet éléments ?",
	'deleteconfirm:plural' => "Ete(s)-vous sûr(e) de vouloir supprimer ces éléments ?",
	'fileexists' => "Un fichier a déjà été enregistré. Pour le remplacer, choisissez-le dans la liste suivante :",

/**
 * User add
 */

	'useradd:subject' => 'Votre compte de membre a été créé',
	'useradd:body' => "
%s,

Un compte de membre a été créé dans le site du réseau social '%s'.
Pour vous connecter, allez à l'adresse :

%s

Vos coordonnées de connection sont :

Pseudo: %s
Mot de passe: %s

Une fois connecté, nous vous recommandant de changer immédiatement votre mot de passe.",

/**
 * System messages
 */

	'systemmessages:dismiss' => "cliquez pour fermer",


/**
 * Import / export
 */
		
	'importsuccess' => "Import of data was successful",
	'importfail' => "OpenDD import of data failed.",

/**
 * Time
 */

	'friendlytime:justnow' => "à l'instant",
	'friendlytime:minutes' => "il y a %s minutes",
	'friendlytime:minutes:singular' => "a minute ago",
	'friendlytime:hours' => "il y a %s heures",
	'friendlytime:hours:singular' => "il y a une heure",
	'friendlytime:days' => "il y a %s jours",
	'friendlytime:days:singular' => "hier",
	'friendlytime:date_format' => 'j F Y @ g:ia', // TODO
	
	'friendlytime:future:minutes' => "dans %s minutes",
	'friendlytime:future:minutes:singular' => "dans une minute",
	'friendlytime:future:hours' => "dans %s heures",
	'friendlytime:future:hours:singular' => "dans une heure",
	'friendlytime:future:days' => "dans %s jours",
	'friendlytime:future:days:singular' => "demain",

	'date:month:01' => "Janvier %s",
	'date:month:02' => "Février %s",
	'date:month:03' => "Mars %s",
	'date:month:04' => "Avril %s",
	'date:month:05' => "Mai %s",
	'date:month:06' => "Juin %s",
	'date:month:07' => "Juillet %s",
	'date:month:08' => "Août %s",
	'date:month:09' => "Septembre %s",
	'date:month:10' => "Octobre %s",
	'date:month:11' => "Novembre %s",
	'date:month:12' => "Décembre %s",

	'date:weekday:0' => 'Dimanche',
	'date:weekday:1' => 'Lundi',
	'date:weekday:2' => 'Mardi',
	'date:weekday:3' => 'Mercredi',
	'date:weekday:4' => 'Jeudi',
	'date:weekday:5' => 'Vendredi',
	'date:weekday:6' => 'Samedi',
	
	'interval:minute' => 'Chaque minute',
	'interval:fiveminute' => 'Toutes les cinq minutes',
	'interval:fifteenmin' => "Tout les quart d'heure",
	'interval:halfhour' => 'Toutes les demi-heures',
	'interval:hourly' => 'Chaque heure',
	'interval:daily' => 'Chaque jour',
	'interval:monthly' => 'Chaque mois',
	'interval:yearly' => 'Tout les ans',
	'interval:reboot' => 'Au redémarrage',

/**
 * System settings
 */

	'installation:sitename' => "L'intitulé du site :",
	'installation:sitedescription' => "Une description courte du site (facultative) :",
	'installation:wwwroot' => "L'URL du site :",
	'installation:path' => "The full path of the Elgg installation:",
	'installation:dataroot' => "The full path of the data directory:",
	'installation:dataroot:warning' => "You must create this directory manually. It should be in a different directory to your Elgg installation.",
	'installation:sitepermissions' => "The default access permissions:",
	'installation:language' => "The default language for your site:",
	'installation:debug' => "Debug mode provides extra information which can be used to diagnose faults. However, it can slow your system down so should only be used if you are having problems:",
	'installation:debug:none' => 'Turn off debug mode (recommended)',
	'installation:debug:error' => 'Display only critical errors',
	'installation:debug:warning' => 'Display errors and warnings',
	'installation:debug:notice' => 'Log all errors, warnings and notices',

	// Walled Garden support
	'installation:registration:description' => 'User registration is enabled by default. Turn this off if you do not want new users to be able to register on their own.',
	'installation:registration:label' => 'Allow new users to register',
	'installation:walled_garden:description' => 'Enable the site to run as a private network. This will not allow non logged-in users to view any site pages other than those specifically marked as public.',
	'installation:walled_garden:label' => 'Restrict pages to logged-in users',

	'installation:httpslogin' => "Enable this to have user logins performed over HTTPS. You will need to have https enabled on your server for this to work.",
	'installation:httpslogin:label' => "Enable HTTPS logins",
	'installation:view' => "Enter the view which will be used as the default for your site or leave this blank for the default view (if in doubt, leave as default):",

	'installation:siteemail' => "Site email address (used when sending system emails):",

	'installation:disableapi' => "Elgg provides an API for building web services so that remote applications can interact with your site.",
	'installation:disableapi:label' => "Enable Elgg's web services API",

	'installation:allow_user_default_access:description' => "If checked, individual users will be allowed to set their own default access level that can over-ride the system default access level.",
	'installation:allow_user_default_access:label' => "Allow user default access",

	'installation:simplecache:description' => "The simple cache increases performance by caching static content including some CSS and JavaScript files. Normally you will want this on.",
	'installation:simplecache:label' => "Use simple cache (recommended)",

	'installation:minify:description' => "The simple cache can also improve front-end performance by compressing JavaScript and/or CSS content. Normally you will want these on.",
	'installation:minify_js:label' => "Compress JavaScript (recommended)",
	'installation:minify_css:label' => "Compress CSS (recommended)",

	'installation:systemcache:description' => "The system cache decreases the loading time of the Elgg engine by caching data to files.",
	'installation:systemcache:label' => "Use system cache (recommended)",

	'upgrading' => 'Upgrading...',
	'upgrade:db' => 'Your database was upgraded.',
	'upgrade:core' => 'Your Elgg installation was upgraded.',
	'upgrade:unlock' => 'Unlock upgrade',
	'upgrade:unlock:confirm' => "The database is locked for another upgrade. Running concurrent upgrades is dangerous. You should only continue if you know there is not another upgrade running. Unlock?",
	'upgrade:locked' => "Cannot upgrade. Another upgrade is running. To clear the upgrade lock, visit the Admin section.",
	'upgrade:unlock:success' => "Upgrade unlocked suscessfully.",
	'upgrade:unable_to_upgrade' => 'Unable to upgrade.',
	'upgrade:unable_to_upgrade_info' =>
		'This installation cannot be upgraded because legacy views
		were detected in the Elgg core views directory. These views have been deprecated and need to be
		removed for Elgg to function correctly. If you have not made changes to Elgg core, you can
		simply delete the views directory and replace it with the one from the latest
		package of Elgg downloaded from <a href="http://elgg.org">elgg.org</a>.<br /><br />

		If you need detailed instructions, please visit the <a href="http://docs.elgg.org/wiki/Upgrading_Elgg">
		Upgrading Elgg documentation</a>.  If you require assistance, please post to the
		<a href="http://community.elgg.org/pg/groups/discussion/">Community Support Forums</a>.',

	'update:twitter_api:deactivated' => 'Twitter API (previously Twitter Service) was deactivated during the upgrade. Please activate it manually if required.',
	'update:oauth_api:deactivated' => 'OAuth API (previously OAuth Lib) was deactivated during the upgrade.  Please activate it manually if required.',

	'deprecated:function' => '%s() was deprecated by %s()',

/**
 * Welcome
 */

	'welcome' => "Welcome",
	'welcome:user' => 'Welcome %s',

/**
 * Emails
 */
		
	'email:from' => 'From',
	'email:to' => 'To',
	'email:subject' => 'Subject',
	'email:body' => 'Body',
	
	'email:settings' => "Email settings",
	'email:address:label' => "Your email address",

	'email:save:success' => "New email address saved. Verification is requested.",
	'email:save:fail' => "Your new email address could not be saved.",

	'friend:newfriend:subject' => "%s has made you a friend!",
	'friend:newfriend:body' => "%s has made you a friend!

To view their profile, click here:

%s

You cannot reply to this email.",

	'email:resetpassword:subject' => "Password reset!",
	'email:resetpassword:body' => "Hi %s,

Your password has been reset to: %s",

	'email:resetreq:subject' => "Request for new password.",
	'email:resetreq:body' => "Hi %s,

Somebody (from the IP address %s) has requested a new password for their account.

If you requested this, click on the link below. Otherwise ignore this email.

%s
",

/**
 * user default access
 */

	'default_access:settings' => "Your default access level",
	'default_access:label' => "Default access",
	'user:default_access:success' => "Your new default access level was saved.",
	'user:default_access:failure' => "Your new default access level could not be saved.",

/**
 * XML-RPC
 */
	'xmlrpc:noinputdata'	=>	"Input data missing",

/**
 * Comments
 */

	'comments:count' => "%s comments",

	'river:comment:object:default' => '%s commented on %s',

	'generic_comments:add' => "Leave a comment",
	'generic_comments:post' => "Post comment",
	'generic_comments:text' => "Comment",
	'generic_comments:latest' => "Latest comments",
	'generic_comment:posted' => "Your comment was successfully posted.",
	'generic_comment:deleted' => "The comment was successfully deleted.",
	'generic_comment:blank' => "Sorry, you need to actually put something in your comment before we can save it.",
	'generic_comment:notfound' => "Sorry, we could not find the specified item.",
	'generic_comment:notdeleted' => "Sorry, we could not delete this comment.",
	'generic_comment:failure' => "An unexpected error occurred when adding your comment.",
	'generic_comment:none' => 'No comments',
	'generic_comment:title' => 'Comment by %s',
	'generic_comment:on' => '%s on %s',

	'generic_comment:email:subject' => 'You have a new comment!',
	'generic_comment:email:body' => "You have a new comment on your item \"%s\" from %s. It reads:


%s


To reply or view the original item, click here:

%s

To view %s's profile, click here:

%s

You cannot reply to this email.",

/**
 * Entities
 */
	
	'byline' => 'Par %s',
	'entity:default:strapline' => 'Created %s by %s',
	'entity:default:missingsupport:popup' => 'This entity cannot be displayed correctly. This may be because it requires support provided by a plugin that is no longer installed.',

	'entity:delete:success' => 'Entity %s has been deleted',
	'entity:delete:fail' => 'Entity %s could not be deleted',

/**
 * Action gatekeeper
 */

	'actiongatekeeper:missingfields' => 'Form is missing __token or __ts fields',
	'actiongatekeeper:tokeninvalid' => "We encountered an error (token mismatch). This probably means that the page you were using expired.",
	'actiongatekeeper:timeerror' => 'The page you were using has expired. Please refresh and try again.',
	'actiongatekeeper:pluginprevents' => 'A extension has prevented this form from being submitted.',
	'actiongatekeeper:uploadexceeded' => 'The size of file(s) uploaded exceeded the limit set by your site administrator',

/**
 * Word blacklists
 */

	'word:blacklist' => 'and, the, then, but, she, his, her, him, one, not, also, about, now, hence, however, still, likewise, otherwise, therefore, conversely, rather, consequently, furthermore, nevertheless, instead, meanwhile, accordingly, this, seems, what, whom, whose, whoever, whomever',

/**
 * Tag labels
 */

	'tag_names:tags' => 'Tags',
	'tags:site_cloud' => 'Site Tag Cloud',

/**
 * Javascript
 */

	'js:security:token_refresh_failed' => 'Cannot contact %s. You may experience problems saving content.',
	'js:security:token_refreshed' => 'Connection to %s restored!',
	'js:lightbox:current' => "image %s of %s",

/**
 * Languages according to ISO 639-1
 */
	"aa" => "Afar",
	"ab" => "Abkhazian",
	"af" => "Afrikaans",
	"am" => "Amharic",
	"ar" => "Arabic",
	"as" => "Assamese",
	"ay" => "Aymara",
	"az" => "Azerbaijani",
	"ba" => "Bashkir",
	"be" => "Byelorussian",
	"bg" => "Bulgarian",
	"bh" => "Bihari",
	"bi" => "Bislama",
	"bn" => "Bengali; Bangla",
	"bo" => "Tibetan",
	"br" => "Breton",
	"ca" => "Catalan",
	"co" => "Corsican",
	"cs" => "Czech",
	"cy" => "Welsh",
	"da" => "Danish",
	"de" => "German",
	"dz" => "Bhutani",
	"el" => "Greek",
	"en" => "English",
	"eo" => "Esperanto",
	"es" => "Spanish",
	"et" => "Estonian",
	"eu" => "Basque",
	"fa" => "Persian",
	"fi" => "Finnish",
	"fj" => "Fiji",
	"fo" => "Faeroese",
	"fr" => "French",
	"fy" => "Frisian",
	"ga" => "Irish",
	"gd" => "Scots / Gaelic",
	"gl" => "Galician",
	"gn" => "Guarani",
	"gu" => "Gujarati",
	"he" => "Hebrew",
	"ha" => "Hausa",
	"hi" => "Hindi",
	"hr" => "Croatian",
	"hu" => "Hungarian",
	"hy" => "Armenian",
	"ia" => "Interlingua",
	"id" => "Indonesian",
	"ie" => "Interlingue",
	"ik" => "Inupiak",
	//"in" => "Indonesian",
	"is" => "Icelandic",
	"it" => "Italian",
	"iu" => "Inuktitut",
	"iw" => "Hebrew (obsolete)",
	"ja" => "Japanese",
	"ji" => "Yiddish (obsolete)",
	"jw" => "Javanese",
	"ka" => "Georgian",
	"kk" => "Kazakh",
	"kl" => "Greenlandic",
	"km" => "Cambodian",
	"kn" => "Kannada",
	"ko" => "Korean",
	"ks" => "Kashmiri",
	"ku" => "Kurdish",
	"ky" => "Kirghiz",
	"la" => "Latin",
	"ln" => "Lingala",
	"lo" => "Laothian",
	"lt" => "Lithuanian",
	"lv" => "Latvian/Lettish",
	"mg" => "Malagasy",
	"mi" => "Maori",
	"mk" => "Macedonian",
	"ml" => "Malayalam",
	"mn" => "Mongolian",
	"mo" => "Moldavian",
	"mr" => "Marathi",
	"ms" => "Malay",
	"mt" => "Maltese",
	"my" => "Burmese",
	"na" => "Nauru",
	"ne" => "Nepali",
	"nl" => "Dutch",
	"no" => "Norwegian",
	"oc" => "Occitan",
	"om" => "(Afan) Oromo",
	"or" => "Oriya",
	"pa" => "Punjabi",
	"pl" => "Polish",
	"ps" => "Pashto / Pushto",
	"pt" => "Portuguese",
	"qu" => "Quechua",
	"rm" => "Rhaeto-Romance",
	"rn" => "Kirundi",
	"ro" => "Romanian",
	"ru" => "Russian",
	"rw" => "Kinyarwanda",
	"sa" => "Sanskrit",
	"sd" => "Sindhi",
	"sg" => "Sangro",
	"sh" => "Serbo-Croatian",
	"si" => "Singhalese",
	"sk" => "Slovak",
	"sl" => "Slovenian",
	"sm" => "Samoan",
	"sn" => "Shona",
	"so" => "Somali",
	"sq" => "Albanian",
	"sr" => "Serbian",
	"ss" => "Siswati",
	"st" => "Sesotho",
	"su" => "Sundanese",
	"sv" => "Swedish",
	"sw" => "Swahili",
	"ta" => "Tamil",
	"te" => "Tegulu",
	"tg" => "Tajik",
	"th" => "Thai",
	"ti" => "Tigrinya",
	"tk" => "Turkmen",
	"tl" => "Tagalog",
	"tn" => "Setswana",
	"to" => "Tonga",
	"tr" => "Turkish",
	"ts" => "Tsonga",
	"tt" => "Tatar",
	"tw" => "Twi",
	"ug" => "Uigur",
	"uk" => "Ukrainian",
	"ur" => "Urdu",
	"uz" => "Uzbek",
	"vi" => "Vietnamese",
	"vo" => "Volapuk",
	"wo" => "Wolof",
	"xh" => "Xhosa",
	//"y" => "Yiddish",
	"yi" => "Yiddish",
	"yo" => "Yoruba",
	"za" => "Zuang",
	"zh" => "Chinese",
	"zu" => "Zulu",
);
add_translation("fr",$french);
