Pour démarrer :
-> compléter les informations de BDD et de mail dans le .env ( à savoir
=> DATABASE_URL ,
=> MAILER_DSN , j'ai utilisé gmail pour celui-ci, avec un autre SMTP cela peux potentiellement ne pas marcher
=> MAILER_RECEIVER , celui-ci étant l'adresse vers laquelle on va envoyer les mails
)
-> créer la BDD
-> composer install
-> php bin/console doctrine:migration:migrate
-> php bin/console doctrine:fixtures:load
-> importer le contenu du dump ( table par table désolé, pas réussi a faire tout d'un coup)
-> symfony server:start

-> Apprécier la sublime intégration (non c'est faux)

Notes :
- Le login ne sert à rien mais il est bien fonctionnel
- Le mail est envoyé à la soumission d'un commentaire
- Lors de l'édition d'un article, il est obligatoire de re-sélectionner une photo ( pas trouvé comment corriger)
- Si il te manque qqch pour tester correctement, n'hésite pas à me joindre