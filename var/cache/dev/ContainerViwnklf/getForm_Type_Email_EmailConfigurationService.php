<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'form.type.email.email_configuration' shared service.

return $this->services['form.type.email.email_configuration'] = new \PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Email\EmailConfigurationType(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->services['prestashop.adapter.legacy.context'] = new \PrestaShop\PrestaShop\Adapter\LegacyContext()) && false ?: '_'}->getLanguages(), ${($_ = isset($this->services['prestashop.core.form.choice_provider.mail_method']) ? $this->services['prestashop.core.form.choice_provider.mail_method'] : $this->load('getPrestashop_Core_Form_ChoiceProvider_MailMethodService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.form.choice_provider.contact_by_id']) ? $this->services['prestashop.core.form.choice_provider.contact_by_id'] : $this->load('getPrestashop_Core_Form_ChoiceProvider_ContactByIdService.php')) && false ?: '_'});
