<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Form\ChangePasswordFormType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\UserRepository;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AccountController extends AbstractController
{
    /**
     * @Route("/profile", name="account_profile")
     */
    public function profileEdit(Request $request, UserRepository $user) : Response
    {
        $user = $this->getUser();
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('index_route');
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/profile/changepassword", name="profile_changepassword")
     */
    public function profileChangePassword(Request $request, UserPasswordEncoderInterface $passwordEncoder) : Response
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $form = $this->createForm(ChangePasswordFormType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $old_pwd = $request->request->get('change_password_form')['oldPassword'];
            $new_pwd = $request->request->get('change_password_form')['plainPassword']['first'];

            // Si l'ancien mot de passe est bon
            if ($passwordEncoder->isPasswordValid($user, $old_pwd)) {
                // $newEncodedPassword = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
                $user->setPassword(
                    $passwordEncoder->encodePassword(
                        $user,
                        $new_pwd
                    )
                );

                $em->persist($user);
                $em->flush();

                $this->addFlash('notice', 'Votre mot de passe à bien été changé !');

                return $this->redirectToRoute('index_route');
            } else {
                $form->addError(new FormError('Ancien mot de passe incorrect'));
            }

        }

        return $this->render('user/edit_password.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }



}