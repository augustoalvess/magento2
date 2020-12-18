<?php

namespace Silva\Crud\Model;

class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'silva_crud_post';

	protected $_cacheTag = 'silva_crud_post';

	protected $_eventPrefix = 'silva_crud_post';

	protected function _construct()
	{
		$this->_init('Silva\Crud\Model\ResourceModel\Post');
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