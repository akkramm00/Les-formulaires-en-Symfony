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

            <h2>configureOptions()</h2>
        <p>  configureOptions() permet de créer un systme d'options avec les options requises, les valeurs par défaut, la validation, la normalisation et plus encore. <br><br>

          Une bonne pratique est de le préciser dans configureOptions() l'entité sur laquelle vous travailler dans le formType. il faudra, comme le montre l'exemple ci-dessous, faire cette déclaration. Meme si cela est optionnel, cela vous évitera des désagréments en cas de code qui se complexifie.
          </p>
          <pre>
            public function configureOptions(OptionsResolver $resolver): void
            {
            $resolver->steDefaults([
                'data_class' => Comment::class,
            ])
            }
          </pre>
          ==============================================================================================================================
           <h1>La gestion du formulaire dans le contrôlelur et son affichage</h1>
          <p>
            Le controleur joue un role clé dans l'architecture MVC(MOdel-Vue-Controller)de symfony. il va envoyer à la vue le formulaire et va ensuite traiter les informations recueillis lors de la soumisson, du formulaire de l'utilisateur. Découvrons le fonctionnement du controleur, avec quelques exemples de sa gestion d'un formulaire, ainsi que les différentes façons d'utiliser la vue du formulaire dans un fichier twig.
          </p><br>

          <h2>CreateFormBuilder</h2>
          <p>
            Nous avons vu qu'une bonne pratique était de créer un formulaire à part sous forme de Type.<br>
            D'ailleurs, si vous utilisez MakerBundle pour la création d'une entité, il vous le dréera automatiquement à partir des propriétés de l'entié que vous venez de crér. Mais , il est possible de créer un formulaire directement dans le controleur grace à la méthode que fournit AbstractControllet: createFormBuilder().
          </p>
          <pre>
            #[Route('/new', name: 'app_comment_new', methods['GET', 'POST'])]
            public function new(rRequest $request): Response
            {
              $comment = new Comment();
                $form = $this->createFormBuilder($comment)
                    ->add('title', TextType::class, [
                        'attr' => [
                            'class' => 'form-control mt-3 mb-3'
                        ],
                    ]
            )
                    -> add('content', TextareaType::class, [
                        'attr' => [
                            'class' => 'form-control mt-3 mb-3',
                        ],
                        'label' => 'Commentaire',
                        'required' => true
                    ])
              ->getForm();
            //...
            }
          </pre>
          <br><br>
          <p>
            Dans l'exemple ci-dessus, nous contatons que créer un formulaire directement dans le controleur ressemble beaucoup à la foçon de créer un formulaire Type. Nous avnos remplacé la méthode =Build par $form. ette dernière  appelle la méthodecreatteFormBuilder(), qui a en paramètre l'entité voulue. Par la suite , la méthode add() se comporte comme avec BuildForm(). Enfin avant de clôturer, il faut appeler la méthode getForm().
            <br><br>

            N'oubliez pas d'impôrter toutes les classes qui sont utilisées, telles que TextType, TextareaType, et Comment.
          </p>
          <br><br>

          <h2>Formulaire de rendu</h2>
          <p>
            Maintenant , nous voulons que notre application affiche le formulaire. Dans l'exemple ci-dssous, nous mettons dans la variable $form le formuylaire en appelant la méthode creatForm() dans laquelle on passe en argument CommentType. Attention à ne pas oublier de l'importer avec autoloader .         
          </p>
          <br><br>
          <pre>
            #[Route('/comment')]
            class CommentController extends AbstractController
            {
            #[Route('/new', name: 'app_comment_new', methods: ['GET', 'POST'])]
            {
            $form = $this->creatForm(CommentType::class);
            return $this->render('comment.html.Twig', [
            'form' => $forrm,
            ])
            }
            }
          </pre>
          <p>
            C'est la méthode render() qui va appeler le fichier Twig, qui représente la Vue dans le MVC et qui va  lui transmettre les données voulues, ici le formulaire $form. 
          </p>
          <br><br>
          <h2>La vue</h2>
          <p>
            Le fichier "comment.html.twig" , à present qu'il a recu du controlleur le formulaire , va devoir l'afficher.<br>
            La façon la plus simple de le faire est celle-ci :
            <br>
            <pre>
              {% block body %}
                {{ form(form) }}
                  <button type="submit">Enregitrer</button>
              [% endblock %]
            </pre>
          </p>
          
        </div>
      </div>
    </main>







    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  </body>
</html>