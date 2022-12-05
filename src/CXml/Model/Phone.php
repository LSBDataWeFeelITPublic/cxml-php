<?php

namespace CXml\Model;

use JMS\Serializer\Annotation as Ser;

class Phone
{
    /**
     * @Ser\XmlAttribute
     * @Ser\SerializedName("name")
     */
    private ?string $name = null;

    /**
     * @Ser\SerializedName("TelephoneNumber")
     * @Ser\XmlElement (cdata=false)
     */
    private ?TelephoneNumber $telephoneNumber = null;

    public function __construct(?string $name = null, ?TelephoneNumber $telephoneNumber = null)
    {
        $this->name = $name;
        $this->telephoneNumber = $telephoneNumber;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getTelephoneNumber(): ?TelephoneNumber
    {
        return $this->telephoneNumber;
    }

}
