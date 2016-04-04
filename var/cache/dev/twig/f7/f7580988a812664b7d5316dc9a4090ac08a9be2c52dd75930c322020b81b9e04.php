<?php

/* default/htmltopdf.html.twig */
class __TwigTemplate_c6522e4b80749ac0b6168688ede3fa1c68e51f9f0e3da71d7e411fe8541c8fa7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/htmltopdf.html.twig", 1);
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
        $__internal_477db239cbd62e1752be2afb05059ace6f712536df61defca82413e2558055e9 = $this->env->getExtension("native_profiler");
        $__internal_477db239cbd62e1752be2afb05059ace6f712536df61defca82413e2558055e9->enter($__internal_477db239cbd62e1752be2afb05059ace6f712536df61defca82413e2558055e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/htmltopdf.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_477db239cbd62e1752be2afb05059ace6f712536df61defca82413e2558055e9->leave($__internal_477db239cbd62e1752be2afb05059ace6f712536df61defca82413e2558055e9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1bf8299a3d64c0a25fe3ec44af75529f94b5ca1d3212ace890d993ed96e1ebea = $this->env->getExtension("native_profiler");
        $__internal_1bf8299a3d64c0a25fe3ec44af75529f94b5ca1d3212ace890d993ed96e1ebea->enter($__internal_1bf8299a3d64c0a25fe3ec44af75529f94b5ca1d3212ace890d993ed96e1ebea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">
                <h1><span>Welcome to HtmlToPdfApi</span></h1>
            </div>

            <div id=\"status\">
                <p>
                    To use this api, POST your html code in \"html_content\" key to this endpoint<br>
                    <code>/htmltopdf</code>
                </p>
            </div>
        </div>
    </div>
";
        
        $__internal_1bf8299a3d64c0a25fe3ec44af75529f94b5ca1d3212ace890d993ed96e1ebea->leave($__internal_1bf8299a3d64c0a25fe3ec44af75529f94b5ca1d3212ace890d993ed96e1ebea_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_14ee33f97843a876dc5a7086f7f055b0816c1fabcacc6234d5825973e292f263 = $this->env->getExtension("native_profiler");
        $__internal_14ee33f97843a876dc5a7086f7f055b0816c1fabcacc6234d5825973e292f263->enter($__internal_14ee33f97843a876dc5a7086f7f055b0816c1fabcacc6234d5825973e292f263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 21
        echo "<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
";
        
        $__internal_14ee33f97843a876dc5a7086f7f055b0816c1fabcacc6234d5825973e292f263->leave($__internal_14ee33f97843a876dc5a7086f7f055b0816c1fabcacc6234d5825973e292f263_prof);

    }

    public function getTemplateName()
    {
        return "default/htmltopdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 21,  62 => 20,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*             <div id="welcome">*/
/*                 <h1><span>Welcome to HtmlToPdfApi</span></h1>*/
/*             </div>*/
/* */
/*             <div id="status">*/
/*                 <p>*/
/*                     To use this api, POST your html code in "html_content" key to this endpoint<br>*/
/*                     <code>/htmltopdf</code>*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* <style>*/
/*     body { background: #F5F5F5; font: 18px/1.5 sans-serif; }*/
/*     h1, h2 { line-height: 1.2; margin: 0 0 .5em; }*/
/*     h1 { font-size: 36px; }*/
/*     h2 { font-size: 21px; margin-bottom: 1em; }*/
/*     p { margin: 0 0 1em 0; }*/
/*     a { color: #0000F0; }*/
/*     a:hover { text-decoration: none; }*/
/*     code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }*/
/*     #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }*/
/*     #container { padding: 2em; }*/
/*     #welcome, #status { margin-bottom: 2em; }*/
/*     #welcome h1 span { display: block; font-size: 75%; }*/
/*     #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }*/
/*     #icon-book { display: none; }*/
/* */
/*     @media (min-width: 768px) {*/
/*         #wrapper { width: 80%; margin: 2em auto; }*/
/*         #icon-book { display: inline-block; }*/
/*         #status a, #next a { display: block; }*/
/* */
/*         @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }*/
/*         @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }*/
/*         .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}*/
/*     }*/
/* </style>*/
/* {% endblock %}*/
/* */
