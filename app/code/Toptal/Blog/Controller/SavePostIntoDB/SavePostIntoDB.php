<?php

namespace Toptal\Blog\Controller\SavePostIntoDB;

use \Magento\Framework\App\Action\Action;
use \Magento\Framework\View\Result\PageFactory;
use \Magento\Framework\View\Result\Page;
use \Magento\Framework\App\Action\Context;
use \Magento\Framework\Exception\LocalizedException;

class SavePostIntoDB extends Action
{

    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * @param Context $context
     * @param PageFactory $resultPageFactory
     *
     * @codeCoverageIgnore
     * @SuppressWarnings(PHPMD.ExcessiveParameterList)
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct(
            $context
        );
        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * Prints the blog from informed order id
     * @return Page
     * @throws LocalizedException
     */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        // $name = $this->getRequest()->getPostValue("name");
        // $item = $this->_objectManager->create("Toptal\Blog\Model\PostData");
        //     $item->setName($name);
        //     $item->save();
        //     $redirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        //     $redirect->setUrl($this->_redirect->getRefererUrl());
        //     return $redirect;
        // // return $resultPage;
            // start

        $data = $this->getRequest()->getPostValue();
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();       
        $question = $objectManager->create('Toptal\Blog\Model\PostData');
        $question->setData($data);
        //$question->setEmail('test@test.com');
        //$question->setQuery('Question Description');
        $question->save();
        $this->messageManager->addSuccess( __('Thanks you.') );
        //$this->messageManager->addSuccess('Query subbmitted successfully.');
        $this->_redirect('*/*/');
        return;

            // end
        /*

  
        */
    }
}