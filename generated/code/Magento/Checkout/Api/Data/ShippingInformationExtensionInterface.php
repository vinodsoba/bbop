<?php
namespace Magento\Checkout\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\Checkout\Api\Data\ShippingInformationInterface
 */
interface ShippingInformationExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return boolean|null
     */
    public function getRegistrationCheckboxState();

    /**
     * @param boolean $registrationCheckboxState
     * @return $this
     */
    public function setRegistrationCheckboxState($registrationCheckboxState);

    /**
     * @return string|null
     */
    public function getRegistrationPassword();

    /**
     * @param string $registrationPassword
     * @return $this
     */
    public function setRegistrationPassword($registrationPassword);

    /**
     * @return string|null
     */
    public function getRegistrationPasswordConfirmation();

    /**
     * @param string $registrationPasswordConfirmation
     * @return $this
     */
    public function setRegistrationPasswordConfirmation($registrationPasswordConfirmation);

    /**
     * @return string|null
     */
    public function getDeliveryDate();

    /**
     * @param string $deliveryDate
     * @return $this
     */
    public function setDeliveryDate($deliveryDate);

    /**
     * @return string|null
     */
    public function getDeliveryTime();

    /**
     * @param string $deliveryTime
     * @return $this
     */
    public function setDeliveryTime($deliveryTime);
}
