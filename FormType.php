<html>
  <head>
    <title>PHP Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
    <header class="container-fluid bg-dark text-light">
      <div class="row">
        <div class="col d-flex justify-content-around align-items-center py-3">
          <a href="index.php" >Formulaires</a>
          <a href="exercice.php"> Entrainement</a>
          <a href="FormType.php"> FormTypePHP</a>
          <a href="FormTwig.php"> Form.html.twig</a>
        </div>
      </div>
    </header>
 <main class="container">
      <div class="row">
        <div class="col">
          <pre>
            <?php
namespace App\Form;
use App\Entity\User;
use Symfony\Component\Form\AbstractTYpe;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsRsolver\OptionsResolver;

class RegistrationType extends AbstractType
  {
    public function builForm(FormBuilderInterface $builder, array $options): void
    {
      $builder
        ->add('email', EmailType::class, [
              'attr' => [
              'class' => 'form-control'
              ],
              'label' => 'E-amil'
        ]) 
        ->add('password', PasswordType::class, [
              'attr' => [
              'class' =>'form-control'
              ],
              'label' => 'Mot de pass'
        ])
        ->add('confirm_^password', PasswordType::class, [
              'attr' => [
              'class' => 'form-control'
              ],
              'label' => 'Mot de passe'
        ])
        ;
    }
    public function configureoptions(OptionsResolver $resolver):v void
    {
      $resolver->setDefaults([
                             'data_class' => User::class,
      ])
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