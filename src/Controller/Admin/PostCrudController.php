<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use App\Entity\Post;
use App\Repository\CategoryRepository;
use Doctrine\Persistence\ManagerRegistry;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ArrayField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;




class PostCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Post::class;
    }

    // public function getCategories()
    // {
    //     $em = $this->getDoctrine()->getManager();
    //     $cats = $em->getRepository('Category')->findAll();
    //     dd($cats);
    // }
    public function configureFields(string $pageName): iterable
    {
        // $this->getCategories();
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('name'),
            TextEditorField::new('content'),
            AssociationField::new('category')
            //ArrayField::new('category', 'Category')
            // ChoiceField::new('category')->setChoices([
            //     'Category 1' => 1,
            //     'Category 2' => 2
            // ])
        ];
        // return [
        //     'name',
        //     'content',
        //     'category'
        // ];
    }
}
