<?php

/* AcmeDemoBundle:Demo:hello.html.twig */
class __TwigTemplate_6662e1aff8b8824864c7b099c1689d50 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 9
        $context['code'] = $this->env->getExtension('demo')->getCode($this);
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . $this->getContext($context, 'lastname')), "html");
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "   <h1>Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, 'firstname'), "html");
        echo " ";
        echo twig_escape_filter($this->env, $this->getContext($context, 'lastname'), "html");
        echo "!</h1>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}