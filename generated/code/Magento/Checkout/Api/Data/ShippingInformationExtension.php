<?php
namespace Magento\Checkout\Api\Data;

/**
 * Extension class for @see \Magento\Checkout\Api\Data\ShippingInformationInterface
 */
class ShippingInformationExtension extends \Magento\Framework\Api\AbstractSimpleObject implements ShippingInformationExtensionInterface
{
    /**
     * @return boolean|null
     */
    public function getRegistrationCheckboxState()
    {
        return $this->_get('registration_checkbox_state');
    }

    /**
     * @param boolean $registrationCheckboxState
     * @return $this
     */
    public function setRegistrationCheckboxState($registrationCheckboxState)
    {
        $this->setData('registration_checkbox_state', $registrationCheckboxState);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRegistrationPassword()
    {
        return $this->_get('registration_password');
    }

    /**
     * @param string $registrationPassword
     * @return $this
     */
    public function setRegistrationPassword($registrationPassword)
    {
        $this->setData('registration_password', $registrationPassword);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRegistrationPasswordConfirmation()
    {
        return $this->_get('registration_password_confirmation');
    }

    /**
     * @param string $registrationPasswordConfirmation
     * @return $this
     */
    public function setRegistrationPasswordConfirmation($registrationPasswordConfirmation)
    {
        $this->setData('registration_password_confirmation', $registrationPasswordConfirmation);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDeliveryDate()
    {
        return $this->_get('delivery_date');
    }

    /**
     * @param string $deliveryDate
     * @return $this
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->setData('delivery_date', $deliveryDate);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDeliveryTime()
    {
        return $this->_get('delivery_time');
    }

    /**
     * @param string $deliveryTime
     * @return $this
     */
    public function setDeliveryTime($deliveryTime)
    {
        $this->setData('delivery_time', $deliveryTime);
        return $this;
    }
}
