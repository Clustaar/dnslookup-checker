# DNS Lookup Checker

Un outil pour vérifier qu'une IP est légitime. 
Cas d'utilisation standard : vérifier qu'une IP trouvée dans des logs serveur appartient bien à Google.  

## Principe

Il n'est pas difficile de se faire passer pour Googlebot. Changer son User-name peut suffire, mais certains vont plus loin en faisant croire que leur IP appartient à Google.  

Il existe une méthode pour identifier ces tricheurs, expliquée ici : <https://support.google.com/webmasters/answer/80553?hl=fr>.  

## L'outil

Le script proposé ici automatise cette vérification pour traiter un grand nombre d'IP rapidement.  

## Installation

Vous devez disposer d'un serveur web muni de PHP pour faire fonctionner cet outil.  
Il suffit ensuite de cloner ce dépôt Git :  

    git clone https://github.com/One-Clic/dnslookup-checker.git  

Alternativement, vous pouvez télécharger l'archive du dépôt et la dézipper où vous le souhaitez.

## Utilisation

Ouvrez `index.php` dans votre navigateur, renseignez votre liste d'adresses IP et cliquez sur envoyer pour obtenir les résultats du DNS Lookup.  
Pour chaque ligne traitée, l'outil vous fournira 3 informations : l'IP que vous avez indiquée, le résultat de la résolution DNS inversée (qui indique un nom de domaine), et le résultat de la résolution DNS de ce nom de domaine.  
Si les 3 résultats concordent, l'IP de départ est selon toute vraisemblance légitime.

## En savoir plus

Visitez notre blog et [cet article explicatif](http://clustaar.com/blog/analyse-de-logs-et-googlebot-dissocier-le-vrai-du-faux/) pour en savoir plus.  

## Contribuer

Ce script est distribué gratuitement. Il pourrait certainement amélioré, aussi n'hésitez pas à contribuer et à soumettre vos _pull requests_.  

## Licence

GNU AFFERO GENERAL PUBLIC LICENSE
Version 3, 19 November 2007
