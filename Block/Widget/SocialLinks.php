<?php

namespace Giacomo\Magento2Module\Block\Widget;

class SocialLinks extends \Magento\Framework\View\Element\Template
{

    protected $_template = 'Giacomo_Magento2Module::widget/social-links.phtml';


    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

}
