<?php

namespace ScopelEduardo\CmsLanguage\Block;

use Magento\Cms\Model\Page;
use Magento\Framework\Locale\Resolver as LocaleResolver;
use Magento\Framework\View\Element\Template;

class CmsLanguage extends Template
{

    /** @var LocaleResolver */
    private LocaleResolver $_localeResolver;

    /** @var Page */
    private Page $_cmsPage;

    /**
     * @param LocaleResolver $localeResolver
     * @param Page $cmsPage
     * @param Template\Context $context
     * @param array $data
     */
    public function __construct(
        LocaleResolver   $localeResolver,
        Page             $cmsPage,
        Template\Context $context,
        array            $data = []
    )
    {
        $this->_localeResolver = $localeResolver;
        $this->_cmsPage = $cmsPage;
        parent::__construct($context, $data);
    }

    /**
     * @return string
     */
    public function getStoreLanguage(): string
    {
        $localeCode = $this->_localeResolver->getLocale();
        return str_replace("_", "-", strtolower($localeCode));
    }

    /**
     * @return bool
     */
    public function isMultiStore(): bool
    {
        return count($this->_cmsPage->getStores()) > 1;
    }

    /**
     * @return string
     */
    public function getCmsPageIdentifier(): string
    {
        return $this->_cmsPage->getIdentifier();
    }

}
