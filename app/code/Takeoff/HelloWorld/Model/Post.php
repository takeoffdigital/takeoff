<?php
namespace Takeoff\HelloWorld\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'takeoff_helloworld_post';

    protected $_cacheTag = 'takeoff_helloworld_post';

    protected $_eventPrefix = 'takeoff_helloworld_post';

    protected function _construct()
    {
        $this->_init('Takeoff\HelloWorld\Model\ResourceModel\Post');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}