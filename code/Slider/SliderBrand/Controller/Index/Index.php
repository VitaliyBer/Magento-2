<?php
/**
 * Created by PhpStorm.
 * User: vitaliy
 * Date: 09.12.18
 * Time: 20:58
 */

namespace Slider\SliderBrand\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action
{
    public function execute()
    {
        $page = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        return $page;
    }
}