<?php

/* AccueilBundle:Offres:offres.html.twig */
class __TwigTemplate_2788a1b3b66bb6834ef4e0dfcbc845a5086eef19dc52365df8845b1234bf7ac2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AccueilBundle:Offres:offres.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d47f7672464f331289feab96013e54e7285c4d09185516c7cb5354198cac16f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d47f7672464f331289feab96013e54e7285c4d09185516c7cb5354198cac16f2->enter($__internal_d47f7672464f331289feab96013e54e7285c4d09185516c7cb5354198cac16f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AccueilBundle:Offres:offres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d47f7672464f331289feab96013e54e7285c4d09185516c7cb5354198cac16f2->leave($__internal_d47f7672464f331289feab96013e54e7285c4d09185516c7cb5354198cac16f2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b865c04c9077c6d533bbba912db9fbe42d8c7dbb771392cc738aaad4b793a1d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b865c04c9077c6d533bbba912db9fbe42d8c7dbb771392cc738aaad4b793a1d5->enter($__internal_b865c04c9077c6d533bbba912db9fbe42d8c7dbb771392cc738aaad4b793a1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
<!-- spacer section -->
<section class=\"spacer green\">
<div class=\"container\">
    <div class=\"row\">
        <div class=\"span12 aligncenter flyUp\">
            <h2 class=\"pagetitle\"><strong>Formulaire de depots d'annonce</strong></h2>
        </div>
    </div>
</div>
</section>
<!-- end spacer section -->
<!-- section: team -->
<section id=\"maincontent\" class=\"inner\">
<div class=\"container\">
    <div class=\"row\">
        <div class=\"span6\">
        <h4>Formulaire</h4>
            <div class=\"tabbable\">
                <div class=\"tab-content\">
                     Mettre ici les listes des offres
                </div>  
            </div>      
        </div>
        
        <div class=\"span6\">
            <h4>Formuaire</h4> 
                     Mettre ici les listes des offre
        </div>
    </div>  
</div>
<!-- end container -->
</section>


";
        
        $__internal_b865c04c9077c6d533bbba912db9fbe42d8c7dbb771392cc738aaad4b793a1d5->leave($__internal_b865c04c9077c6d533bbba912db9fbe42d8c7dbb771392cc738aaad4b793a1d5_prof);

    }

    // line 41
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3b6047d080ca7e87f726e9ab9436800abd8249781e4c9916d6810f2690b34c48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b6047d080ca7e87f726e9ab9436800abd8249781e4c9916d6810f2690b34c48->enter($__internal_3b6047d080ca7e87f726e9ab9436800abd8249781e4c9916d6810f2690b34c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 42
        echo "
";
        
        $__internal_3b6047d080ca7e87f726e9ab9436800abd8249781e4c9916d6810f2690b34c48->leave($__internal_3b6047d080ca7e87f726e9ab9436800abd8249781e4c9916d6810f2690b34c48_prof);

    }

    public function getTemplateName()
    {
        return "AccueilBundle:Offres:offres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 42,  83 => 41,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    
<!-- spacer section -->
<section class=\"spacer green\">
<div class=\"container\">
    <div class=\"row\">
        <div class=\"span12 aligncenter flyUp\">
            <h2 class=\"pagetitle\"><strong>Formulaire de depots d'annonce</strong></h2>
        </div>
    </div>
</div>
</section>
<!-- end spacer section -->
<!-- section: team -->
<section id=\"maincontent\" class=\"inner\">
<div class=\"container\">
    <div class=\"row\">
        <div class=\"span6\">
        <h4>Formulaire</h4>
            <div class=\"tabbable\">
                <div class=\"tab-content\">
                     Mettre ici les listes des offres
                </div>  
            </div>      
        </div>
        
        <div class=\"span6\">
            <h4>Formuaire</h4> 
                     Mettre ici les listes des offre
        </div>
    </div>  
</div>
<!-- end container -->
</section>


{% endblock %}

{% block stylesheets %}

{% endblock %}
", "AccueilBundle:Offres:offres.html.twig", "/var/www/html/SiteAnnonce/src/AccueilBundle/Resources/views/Offres/offres.html.twig");
    }
}
