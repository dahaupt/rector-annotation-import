<?php

use TYPO3\CMS\Extbase\Domain\Model\Category;

class Post
{
    /**
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected Category $category;
}
