<?php

namespace App\Controller\Admin;

use App\Entity\Photography;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PhotographyCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Photography::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
