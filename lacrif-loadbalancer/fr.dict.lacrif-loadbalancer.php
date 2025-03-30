<?php
/**
 * Localized data
 *
 * @copyright   Copyright (C) 2022 Lacrif
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

Dict::Add('FR FR', 'French', 'Français', array(
	// Dictionary entries go here
	'Class:LoadBalancer' => 'Load Balancer',
	'Class:LoadBalancer/Attribute:functionalcis_list' => 'Membre(s) du Pool',
	'Class:LoadBalancer/Attribute:functionalcis_list+' => 'All the configuration items that compose this Load Balancer configuration',
	'Class:LoadBalancer/Attribute:status' => 'État',
	'Class:Certificate/Attribute:status/Value:active' => 'actif',
	'Class:Certificate/Attribute:status/Value:inactive' => 'inactif',
	'Class:LoadBalancer/Attribute:redundancy' => 'Analyse d\'impact : configuration de la redondance',
	'Class:LoadBalancer/Attribute:redundancy/disabled' => 'La solution est opérationelle si tous les CIs qui la composent sont opérationnels',
	'Class:LoadBalancer/Attribute:redundancy/count' => 'Nombre minimal de CIs pour que la solution soit opérationnelle : %1$s',
	'Class:LoadBalancer/Attribute:redundancy/percent' => 'Pourcentage minimal de CIs pour que la solution soit opérationnelle : %1$s %%',
	'Class:lnkFunctionalCIToLoadBalancer' => 'Lien CIs Functionels / Load Balancer',
	'Class:lnkFunctionalCIToLoadBalancer/Attribute:functionalci_id' => 'CI',
	'Class:lnkFunctionalCIToLoadBalancer/Attribute:loadbalancer_id' => 'Load Balancer',
	'Class:lnkFunctionalCIToLoadBalancer/Attribute:proto' => 'Protocole',
	'Class:lnkFunctionalCIToLoadBalancer/Attribute:proto+' => 'Protocole utilisé, probablement tcp ou udp pour un LB de niveau 4, or peut-être http / https / ... pour un LB de niveau 7',
	'Class:lnkFunctionalCIToLoadBalancer/Attribute:port' => 'Port',
	'Class:lnkFunctionalCIToLoadBalancer/Attribute:sslsrc' => 'Initiateur SSL',
	'Class:lnkFunctionalCIToLoadBalancer/Attribute:sslsrc+' => 'La connexion vers le back end est elle en SSL ?',
	'Class:lnkFunctionalCIToLoadBalancer/Attribute:sslsrc/Value:yes' => 'Oui',
	'Class:lnkFunctionalCIToLoadBalancer/Attribute:sslsrc/Value:no' => 'Non',
	'Class:lnkFunctionalCIToLoadBalancer/Attribute:sslend' => 'Terminaison SSL',
	'Class:lnkFunctionalCIToLoadBalancer/Attribute:sslend+' => 'Le load balancer termine-t-il la connexion SSL ?',
	'Class:lnkFunctionalCIToLoadBalancer/Attribute:sslend/Value:yes' => 'Oui',
	'Class:lnkFunctionalCIToLoadBalancer/Attribute:sslend/Value:no' => 'Non',
	'Class:FunctionalCI/Attribute:loadbalancer_list' => 'Load Balancer(s)'
));
?>
