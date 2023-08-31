<html>
  <head>
    <title>PHP Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
    <main class="container">
      <div class="row">
        <div class="col">
          
  <h1>Installation et utilisation des formlaires</h1>
    <p>
      Les formulaires offrent une véritable interaction avec l'utilisateur.non seulement elles apportent des informations précieuses mais permettent aussio d'évaluer et de mesurer son intéret pour le contenu du site Web. <br>
      Pour l'internaute ,remplir un formulaire nécessite de la confiance. Cela engage le site à lettre en place une sécurisation des données et parfois de les crypter ou les hasher comme les mots de passe par exemple.
    </p>
    <h2>Les trois étapes d'un formulaire</h2>
     <ul>
       <li>Construire un formulaire dans un controlleur ou en utilisant une classe de formulaire dans le dossier Form</li>
       <li>Rendre le formulaire dans un modèle, c-à-dire faire en sorte que le controlleur appelle une page twig avec les champs du formulaire</li>
       <li>Traiter le formulaire ,ce qui implique une validation est une trnasformation des données, le plus souvent en projet pour pouvoir etre transférerr dans une absse de données.</li>
     </ul>
    <h2>Installation dans un projet Symfony</h2>
    <p>
      dans les applications Symfony Flex , qui est facultatifmeme s'il est installer par défaut depuis Symfony 4, vous pouvez installer Smfony Form avec la ligne de commande  suivante: <br><br>

      * $ composer require Symfony/form
    </p>
    <br><br>

    <h2>Type de formulaire et type de champs</h2>
          <p>
            Un "type" de formulaire est une classe PHP.il permet de construire un formulaire et de définir les différents types de champs.Cette classe ,si vous utilisez les outils de Symfony comme makerBundle, sera créée dans le dossier Form et portera par convention le nom de l'entité suivi du mot "Type".Auinsi un formulaire pour une entité User se nommera "UserType" et aura le chemin d'accès: App\Form\UserType. <br> 
             Cette classe devra étendre la classe AbstractController, ce qui lui donnera 2 méthodes : builForm() et configureOptions().
            <br>
          </p>
          <h2>buildForm()</h2>
          <p>
            buildForm() dispose d'un constructeur de formiulaires "$buider = nom de variable donné par défaut" qui est un objet "FormBuilderInterface". <br>
            $builder possede donc quelques méthodes dont une indisponsable qui est " add() ". <br>
            la méthode "add()" va permettre d'ajouter tous les champs que l'on souhaite avoir dans  le formulaire. pPour cela , il faudra mettre en premier parametre le nom du champ et son type.
          </p>
          <pre>
            class CommentType extends AbstractType
            {
            public function buildForm(FormBuildderInterface $builder, array $options)
            {
              $builder
                  ->add('title', TextType::class)
                  ->add('content', TextareaType::class)
              ;
            
            }
            }
          </pre>
          <p>
            la clase CommentType possède la méthode builForm() dans l'exemple ci dessus. ONn constate également la présence de $builder qui a pour méthode add() avec "title" qui est typé en TextType et "cnotent" qui est typé en TextareaType.<br>
            De méme ,nous venos de créer un formType dans l'exemple ci-dessus "CommentType"que vous pourrez inclure dans d'autres formulaire par la suite. <br> 
            Le troisième argument de add(), qui est facultatif, est un tableau associatif. Il existe plusieurs options disponibles . Mais parlos des plus utilisés, à savoir "required" et "label" et "attr".
            <br><br>

            <ul>
              <li>required: peut etre obligatoitre si le champ de votre entité a l'option non nul, mais le préciser apporte plus de sécurité et permet une bonne lisibilté.</li>
              <li>label: utilise par défaut le nom de la propriété, mais en l'ajoutant en paramètre vous pouvez personnaliser votre label</li>
              <li>attr: permet d'attribuer des classes CSS</li>
            </ul>
          </p>

          <h2>Exemple </h2>
          <pre>
            class CommentType extends AbstractType
            {
            public function buildForm(FormBuildderInterface $builder, array $options)
            {
              $builder
                  ->add('title', TextType::class, [
                    'attr' => [
                        'class' => 'form-control mt-3 mb-3'
                    ],
                    'label' => 'titre du commentaire',
                    'required' => true
                  ])
                  ->add('content', TextareaType::class, [
                    'attr' => [
                          'class' => 'form-control mt-3 mb-3',
                    ],
                  'label' => 'commentaire' ,
                  'required' => true
                  ])
              ;
            
            }
            }
          </pre>

        </div>
      </div>
    </main>







    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  </body>
</html>