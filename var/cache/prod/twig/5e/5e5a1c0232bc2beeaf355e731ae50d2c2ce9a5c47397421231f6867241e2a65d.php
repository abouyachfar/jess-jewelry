<?php

/* @PrestaShop/Admin/Configure/ShopParameters/product_preferences.html.twig */
class __TwigTemplate_066b52709547cc79f9c8cfc1556757964308ed64a6f45b703974ca912e1295cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/product_preferences.html.twig", 25);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 28
        list($context["generalForm"], $context["paginationForm"], $context["pageForm"], $context["stockForm"]) =         array($this->getAttribute(($context["form"] ?? null), "general", array()), $this->getAttribute(($context["form"] ?? null), "pagination", array()), $this->getAttribute(($context["form"] ?? null), "page", array()), $this->getAttribute(($context["form"] ?? null), "stock", array()));
        // line 25
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        // line 31
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("class" => "form", "id" => "configuration_form")));
        echo "
    <div class=\"row justify-content-center\">
        ";
        // line 34
        echo "        ";
        $this->loadTemplate("@PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_general.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/product_preferences.html.twig", 34)->display($context);
        // line 35
        echo "
        ";
        // line 37
        echo "        ";
        $this->loadTemplate("@PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_page.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/product_preferences.html.twig", 37)->display($context);
        // line 38
        echo "
        ";
        // line 40
        echo "        ";
        $this->loadTemplate("@PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_stock.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/product_preferences.html.twig", 40)->display($context);
        // line 41
        echo "
        ";
        // line 43
        echo "        ";
        $this->loadTemplate("@PrestaShop/Admin/Configure/ShopParameters/Blocks/product_preferences_pagination.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/product_preferences.html.twig", 43)->display($context);
        // line 44
        echo "    </div>
    ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        // line 49
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/product_preferences.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/product_preferences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 51,  74 => 49,  71 => 48,  65 => 45,  62 => 44,  59 => 43,  56 => 41,  53 => 40,  50 => 38,  47 => 37,  44 => 35,  41 => 34,  35 => 31,  32 => 30,  28 => 25,  26 => 28,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Configure/ShopParameters/product_preferences.html.twig", "/var/www/prestashop/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/product_preferences.html.twig");
    }
}
