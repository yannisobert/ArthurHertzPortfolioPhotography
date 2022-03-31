<?php

namespace App\Controller\Admin;

use App\Entity\PhotoCategory;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PhotoCategoryCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PhotoCategory::class;
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
