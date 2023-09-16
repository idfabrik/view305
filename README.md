# Views305

Adaptation du web-documentaire Views306 en HTML/PHP, l'ancien site qui avait été développé en Flash.

## Fonctionnement / architecture
L'ensemble des vidéos est externalisé et se trouve sur YouTube.
Les images, les typos et autres ressources se trouvent sur le serveur de publication et doivent être accessibles depuis le script PHP.
Un script PHP sert à générer une page HTML qui contient tous les contenus du projet dans un seul long fichier statique.
Cette page (index.html) est prévue pour continuer à fonctionner sans serveur PHP ainsi que ces mises à jour.

## URL du site
Pas encore définies.

## Serveur 
Dans le projet j'ai mis un serveurweb simple pour faire tourner le site. Il suffit d'installer le serveur avec docker/docker-compose pour tester le site sur le port 800.

Adresse local http://localhost:800/

Cette même cofig peut-etre utilisé sur un serveur distant, par contre il faudra installer en certificat. 

## mignature video YT
les lignature se trouve dans le dossuer img/vignettes_videos_youtube
finalement je gère ça manuelement car souvent la première image de la video n'est pas bonne. 