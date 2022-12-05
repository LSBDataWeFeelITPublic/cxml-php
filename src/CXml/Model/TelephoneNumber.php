<?php

namespace CXml\Model;

use JMS\Serializer\Annotation as Ser;

class TelephoneNumber
{
    /**
     * @Ser\SerializedName("Number")
     * @Ser\XmlElement (cdata=false)
     */
    private ?string $number = null;

    /**
     * @Ser\SerializedName("CountryCode")
     * @Ser\XmlElement (cdata=false)
     */
    private ?CountryCode $countryCode = null;

    /**
     * @Ser\SerializedName("AreaOrCityCode")
     * @Ser\XmlElement (cdata=false)
     */
    private ?string $areaOrCityCode = null;


    public function __construct(?string $number = null, ?CountryCode $countryCode = null, ?string $areaOrCityCode = null)
    {
        $this->number = $number;
        $this->countryCode = $countryCode;
        $this->areaOrCityCode = $areaOrCityCode;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function getCountryCode(): ?CountryCode
    {
        return $this->countryCode;
    }

    public function getAreaOrCityCode(): ?string
    {
        return $this->areaOrCityCode;
    }

}
