<?php

/* PrestaShopBundle:Admin/Module/Includes:card_list_addons.html.twig */
class __TwigTemplate_8a3e7ef6579bf40fcb527e3f7c968ae27fe00dc30c19a94fdc8d8d0159487f75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 25
        echo "<div class=\"module-item-list module-addons-item-list col-md-12\">
    <div class=\"container-fluid\">
        <div class=\"module-addons-item-wrapper-list\">
          <span class=\"module-icon-addons-exit-list\">
            <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/img/preston.png"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Exit to PrestaShop Addons Marketplace", array(), "Admin.Modules.Feature"), "html", null, true);
        echo "\" />
          </span>
          ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("See all results for your search on", array(), "Admin.Modules.Feature"), "html", null, true);
        echo "<br/>
          <a class=\"url\" href=\"#\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PrestaShop Addons Marketplace", array(), "Admin.Modules.Feature"), "html", null, true);
        echo "</a>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module/Includes:card_list_addons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 32,  32 => 31,  25 => 29,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PrestaShopBundle:Admin/Module/Includes:card_list_addons.html.twig", "/Users/victorcata/Documents/Projects/07 - Mika/prestashop/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/card_list_addons.html.twig");
    }
}
