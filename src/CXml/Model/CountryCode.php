<?php

namespace CXml\Model;

use JMS\Serializer\Annotation as Ser;

class CountryCode
{
	/**
	 * @Ser\XmlAttribute
	 * @Ser\SerializedName("isoCountryCode")
	 */
	private string $isoCountryCode;

	/**
	 * @Ser\XmlValue(cdata=false)
	 */
	private ?string $code = null;

	public function __construct(string $isoCountryCode, ?string $code = null)
	{
		$this->isoCountryCode = $isoCountryCode;
		$this->code = $code;
	}

	public function getIsoCountryCode(): string
	{
		return $this->isoCountryCode;
	}

    public function getCode(): ?string
    {
        return $this->code;
    }

}
