<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_a85d6a31748d876458322312172d800ccb7207010d7ffc3bd49da61879362510 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'Main' => array($this, 'block_Main'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_Main($context, array $blocks = array())
    {
        // line 4
        echo "    <section>
        <div id=\"agileits-sign-in-page\" class=\"sign-in-wrapper\">
            <div class=\"agileinfo_signin\">

                ";
        // line 8
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 10
        echo "            </div>
        </div>
    </section>
";
    }

    // line 8
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 9
        echo "                ";
    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 9,  47 => 8,  40 => 10,  38 => 8,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSUser/layout.html.twig", "C:\\xampp\\htdocs\\Integration1\\ProjetWebTroc\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\layout.html.twig");
    }
}
