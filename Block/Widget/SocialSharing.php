<?php

namespace Retorica\FgvThemeModule\Block\Widget;

class SocialSharing extends \Magento\Framework\View\Element\Template
{

    protected $_template = 'Giacomo_Magento2Module::widget/social-sharing.phtml';

    protected $_urlInterface;

    protected const FACEBOOK   = 'http://www.facebook.com/sharer.php?u=';

    protected const TWITTER    = 'http://twitter.com/share?url=';

    protected const  LINKEDIN  = 'http://www.linkedin.com/shareArticle?mini=true&amp;url=';

    protected const GOOGLEPLUS = 'https://plus.google.com/share?url=';



    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\UrlInterface $urlInterface,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->_urlInterface = $urlInterface;

    }


    protected function getCurrentUrl()
    {
        return $this->_urlInterface->getCurrentUrl();
    }


    protected function getFacebookShare()
    {
        return self::FACEBOOK.$this->getCurrentUrl;
    }


    protected function getGoogleShare()
    {
        return self::GOOGLE.$this->getCurrentUrl;
    }


    protected function getInstagramShare()
    {
        return self::INSTAGRAM.$this->getCurrentUrl;
    }


    protected function getLinkedinShare()
    {
        return self::LINKEDIN.$this->getCurrentUrl;
    }

}
