<?php

namespace Csfd\Networking;


trait UrlAccess
{

	private $urlBuilder;

	public function setUrlBuilder(UrlBuilder $urlBuilder)
	{
		$this->urlBuilder = $urlBuilder;
	}

	/**
	 * Path in urls configuration to key
	 * @return array of keys
	 */
	protected function getConfigKeys()
	{
		$path = explode('\\', strToLower(get_class($this)));
		$path = array_splice($path, 1); // remove first (Csfd)
		return $path;
	}

	/**
	 * Gets url from config. Prepends root url.
	 * Traverses config by class namespace under Csfd.
	 * @param string $key
	 * @return string url
	 */
	protected function getUrl($key)
	{
		if (!$this->urlBuilder)
		{
			throw new \Exception('urlBuilder not set'); // TODO
		}

		$path = $this->getConfigKeys();
		array_push($path, $key);
		return $this->urlBuilder->get($path);
	}
	
}