# cadavre-exquis
Pour ce projet WEB, j'ai décidé de créer un générateur de cadavre exquis.

Petite présentation :
Je ne sais pas si vous avez déjà jouer à ce jeu avec vos amis, mais je vous le conseille ! Le cadavre exquis est un jeu littéraire, (inventé à Paris vers 1925, avec notamment la contribution de Jacques Prévert et Yves Tanguy) dont le principe est le suivant : chaque participant écrit à tour de rôle une partie d'une phrase, dans l'ordre sujet–verbe–complément, sans savoir ce que le précédent a écrit.
La première phrase qui résulta de ce processus et qui donna le nom à ce jeu fut : « Le cadavre – exquis – boira – le vin – nouveau. »

J'ai donc cherché à faire une application qui permet de générer des cadavres exquis aléatoirement à partir du base de données qui contiendrait des mots. Il suffit de cliquer sur le bouton 'Générer un nouveau cadavre' pour afficher une nouvelle phrase.


Infos pratiques :
Je me suis aidée de symfony pour créer cette application.
J'ai créée la base de donnée moi-même, et toutes les données qui y sont ajoutés ont étés ajouté à la main (enfin à l'aide de doctrine et de ses fixtures). J'avais trouvé sur internet une api dejà existante avec des données qui semblaient adaptées à ma situation, mais je n'ai pas eu le temps de creuser plus la question.

Dans cette base de données, j'ai stocké des groupes de mots, qui ont chacun une fonction : sujet, verbe ou complément. Je peux donc utiliser cette propriété pour créer mes phrases complètes. Aussi pour que le verbe soient bien accordé avec le sujet, j'ai ajouté une propriété que j'ai appelée 'personne'(pour 1ere personne du singulier, 2e personne du pluriel...), qui prends des valeurs de 1 à 6.

Ensuite, à l'aide d'un controller je génère une phrase de manière aléatoire en piochant des groupes de mots dans ma base de donnée, et j'envoie la phrase à mon template twig correspondant, pour l'afficher.

Voilà comment ça fonctionne dans les grandes lignes.