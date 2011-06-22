<?php

/* form_div_layout.html.twig */
class __TwigTemplate_e055a849f9cbe9d62f57671421e97df0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field_enctype' => array($this, 'block_field_enctype'),
            'field_label' => array($this, 'block_field_label'),
            'form_label' => array($this, 'block_form_label'),
            'field_errors' => array($this, 'block_field_errors'),
            'field_rows' => array($this, 'block_field_rows'),
            'field_rest' => array($this, 'block_field_rest'),
            'attributes' => array($this, 'block_attributes'),
            'container_attributes' => array($this, 'block_container_attributes'),
            'form_widget' => array($this, 'block_form_widget'),
            'field_widget' => array($this, 'block_field_widget'),
            'text_widget' => array($this, 'block_text_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'options' => array($this, 'block_options'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'field_row' => array($this, 'block_field_row'),
            'email_widget' => array($this, 'block_email_widget'),
            'prototype_row' => array($this, 'block_prototype_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        $this->displayBlock('field_enctype', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('field_label', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('form_label', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('field_errors', $context, $blocks);
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('field_rows', $context, $blocks);
        // line 39
        echo "
";
        // line 40
        $this->displayBlock('field_rest', $context, $blocks);
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('attributes', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('container_attributes', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('form_widget', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $this->displayBlock('field_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('text_widget', $context, $blocks);
        // line 86
        echo "
";
        // line 87
        $this->displayBlock('password_widget', $context, $blocks);
        // line 93
        echo "
";
        // line 94
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 102
        echo "
";
        // line 103
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 108
        echo "
";
        // line 109
        $this->displayBlock('options', $context, $blocks);
        // line 124
        echo "
";
        // line 125
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 150
        echo "
";
        // line 151
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 156
        echo "
";
        // line 157
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 162
        echo "
";
        // line 163
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 173
        echo "
";
        // line 174
        $this->displayBlock('date_widget', $context, $blocks);
        // line 189
        echo "
";
        // line 190
        $this->displayBlock('time_widget', $context, $blocks);
        // line 197
        echo "
";
        // line 198
        $this->displayBlock('number_widget', $context, $blocks);
        // line 205
        echo "
";
        // line 206
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 212
        echo "
";
        // line 213
        $this->displayBlock('money_widget', $context, $blocks);
        // line 218
        echo "
";
        // line 219
        $this->displayBlock('url_widget', $context, $blocks);
        // line 225
        echo "
";
        // line 226
        $this->displayBlock('search_widget', $context, $blocks);
        // line 232
        echo "
";
        // line 233
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 239
        echo "
";
        // line 240
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('field_row', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('email_widget', $context, $blocks);
        // line 262
        echo "
";
        // line 263
        $this->displayBlock('prototype_row', $context, $blocks);
    }

    // line 1
    public function block_field_enctype($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    ";
        if ($this->getContext($context, 'multipart')) {
            echo "enctype=\"multipart/form-data\"";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 7
    public function block_field_label($context, array $blocks = array())
    {
        // line 8
        ob_start();
        // line 9
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
        echo "\"";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'attr'));
        foreach ($context['_seq'] as $context['attrname'] => $context['attrvalue']) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getContext($context, 'attrname'), "html");
            echo "=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'attrvalue'), "html");
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, 'label')), "html");
        echo "</label>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 13
    public function block_form_label($context, array $blocks = array())
    {
        // line 14
        ob_start();
        // line 15
        echo "    <label ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'attr'));
        foreach ($context['_seq'] as $context['attrname'] => $context['attrvalue']) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getContext($context, 'attrname'), "html");
            echo "=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'attrvalue'), "html");
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, 'label')), "html");
        echo "</label>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 19
    public function block_field_errors($context, array $blocks = array())
    {
        // line 20
        ob_start();
        // line 21
        echo "    ";
        if ((twig_length_filter($this->env, $this->getContext($context, 'errors')) > 0)) {
            // line 22
            echo "    <ul>
        ";
            // line 23
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'errors'));
            foreach ($context['_seq'] as $context['_key'] => $context['error']) {
                // line 24
                echo "            <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getContext($context, 'error'), "messageTemplate", array(), "any", false), $this->getAttribute($this->getContext($context, 'error'), "messageParameters", array(), "any", false), "validators"), "html");
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 26
            echo "    </ul>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 31
    public function block_field_rows($context, array $blocks = array())
    {
        // line 32
        ob_start();
        // line 33
        echo "    ";
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, 'form'));
        echo "
    ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'form'));
        foreach ($context['_seq'] as $context['_key'] => $context['child']) {
            // line 35
            echo "        ";
            echo $this->env->getExtension('form')->renderRow($this->getContext($context, 'child'));
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 40
    public function block_field_rest($context, array $blocks = array())
    {
        // line 41
        ob_start();
        // line 42
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'form'));
        foreach ($context['_seq'] as $context['_key'] => $context['child']) {
            // line 43
            echo "        ";
            if ((!$this->getAttribute($this->getContext($context, 'child'), "rendered", array(), "any", false))) {
                // line 44
                echo "            ";
                echo $this->env->getExtension('form')->renderRow($this->getContext($context, 'child'));
                echo "
        ";
            }
            // line 46
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 50
    public function block_attributes($context, array $blocks = array())
    {
        // line 51
        ob_start();
        // line 52
        echo "    id=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, 'full_name'), "html");
        echo "\"";
        if ($this->getContext($context, 'read_only')) {
            echo " disabled=\"disabled\"";
        }
        if ($this->getContext($context, 'required')) {
            echo " required=\"required\"";
        }
        if ($this->getContext($context, 'max_length')) {
            echo " maxlength=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'max_length'), "html");
            echo "\"";
        }
        if ($this->getContext($context, 'pattern')) {
            echo " pattern=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'pattern'), "html");
            echo "\"";
        }
        // line 53
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'attr'));
        foreach ($context['_seq'] as $context['attrname'] => $context['attrvalue']) {
            echo twig_escape_filter($this->env, $this->getContext($context, 'attrname'), "html");
            echo "=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'attrvalue'), "html");
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 57
    public function block_container_attributes($context, array $blocks = array())
    {
        // line 58
        ob_start();
        // line 59
        echo "    id=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, 'id'), "html");
        echo "\"
    ";
        // line 60
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'attr'));
        foreach ($context['_seq'] as $context['attrname'] => $context['attrvalue']) {
            echo twig_escape_filter($this->env, $this->getContext($context, 'attrname'), "html");
            echo "=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'attrvalue'), "html");
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 64
    public function block_form_widget($context, array $blocks = array())
    {
        // line 65
        ob_start();
        // line 66
        echo "    <div ";
        echo $this->renderBlock("container_attributes", $context, $blocks);
        echo ">
        ";
        // line 67
        echo $this->renderBlock("field_rows", $context, $blocks);
        echo "
        ";
        // line 68
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, 'form'));
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 73
    public function block_field_widget($context, array $blocks = array())
    {
        // line 74
        ob_start();
        // line 75
        echo "    ";
        $context['type'] = ((array_key_exists("type", $context)) ? (twig_default_filter($this->getContext($context, 'type'), "text")) : ("text"));
        // line 76
        echo "    <input type=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, 'type'), "html");
        echo "\" ";
        echo $this->renderBlock("attributes", $context, $blocks);
        echo " value=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, 'value'), "html");
        echo "\" />
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 80
    public function block_text_widget($context, array $blocks = array())
    {
        // line 81
        ob_start();
        // line 82
        echo "    ";
        $context['type'] = ((array_key_exists("type", $context)) ? (twig_default_filter($this->getContext($context, 'type'), "text")) : ("text"));
        // line 83
        echo "    ";
        echo $this->renderBlock("field_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 87
    public function block_password_widget($context, array $blocks = array())
    {
        // line 88
        ob_start();
        // line 89
        echo "    ";
        $context['type'] = ((array_key_exists("type", $context)) ? (twig_default_filter($this->getContext($context, 'type'), "password")) : ("password"));
        // line 90
        echo "    ";
        echo $this->renderBlock("field_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 94
    public function block_hidden_widget($context, array $blocks = array())
    {
        // line 95
        echo "    ";
        $context['type'] = ((array_key_exists("type", $context)) ? (twig_default_filter($this->getContext($context, 'type'), "hidden")) : ("hidden"));
        // line 96
        echo "    ";
        echo $this->renderBlock("field_widget", $context, $blocks);
        echo "
";
    }

    // line 99
    public function block_hidden_row($context, array $blocks = array())
    {
        // line 100
        echo "    ";
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'form'));
        echo "
";
    }

    // line 103
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 104
        ob_start();
        // line 105
        echo "    <textarea ";
        echo $this->renderBlock("attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, $this->getContext($context, 'value'), "html");
        echo "</textarea>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 109
    public function block_options($context, array $blocks = array())
    {
        // line 110
        ob_start();
        // line 111
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'options'));
        foreach ($context['_seq'] as $context['choice'] => $context['label']) {
            // line 112
            echo "        ";
            if ($this->env->getExtension('form')->isChoiceGroup($this->getContext($context, 'label'))) {
                // line 113
                echo "            <optgroup label=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, 'choice'), "html");
                echo "\">
                ";
                // line 114
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'label'));
                foreach ($context['_seq'] as $context['nestedChoice'] => $context['nestedLabel']) {
                    // line 115
                    echo "                    <option value=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, 'nestedChoice'), "html");
                    echo "\"";
                    if ($this->env->getExtension('form')->isChoiceSelected($this->getContext($context, 'form'), $this->getContext($context, 'nestedChoice'))) {
                        echo " selected=\"selected\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getContext($context, 'nestedLabel'), "html");
                    echo "</option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['nestedChoice'], $context['nestedLabel'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 117
                echo "            </optgroup>
        ";
            } else {
                // line 119
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, 'choice'), "html");
                echo "\"";
                if ($this->env->getExtension('form')->isChoiceSelected($this->getContext($context, 'form'), $this->getContext($context, 'choice'))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getContext($context, 'label'), "html");
                echo "</option>
        ";
            }
            // line 121
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['choice'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 125
    public function block_choice_widget($context, array $blocks = array())
    {
        // line 126
        ob_start();
        // line 127
        echo "    ";
        if ($this->getContext($context, 'expanded')) {
            // line 128
            echo "        <div ";
            echo $this->renderBlock("container_attributes", $context, $blocks);
            echo ">
        ";
            // line 129
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'form'));
            foreach ($context['_seq'] as $context['choice'] => $context['child']) {
                // line 130
                echo "            ";
                echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'child'));
                echo "
            ";
                // line 131
                echo $this->env->getExtension('form')->renderLabel($this->getContext($context, 'child'));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['choice'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 133
            echo "        </div>
    ";
        } else {
            // line 135
            echo "    <select ";
            echo $this->renderBlock("attributes", $context, $blocks);
            if ($this->getContext($context, 'multiple')) {
                echo " multiple=\"multiple\"";
            }
            echo ">
        ";
            // line 136
            if ((!twig_test_none($this->getContext($context, 'empty_value')))) {
                // line 137
                echo "            <option value=\"\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, 'empty_value')), "html");
                echo "</option>
        ";
            }
            // line 139
            echo "        ";
            if ((twig_length_filter($this->env, $this->getContext($context, 'preferred_choices')) > 0)) {
                // line 140
                echo "            ";
                $context['options'] = $this->getContext($context, 'preferred_choices');
                // line 141
                echo "            ";
                echo $this->renderBlock("options", $context, $blocks);
                echo "
            <option disabled=\"disabled\">";
                // line 142
                echo twig_escape_filter($this->env, $this->getContext($context, 'separator'), "html");
                echo "</option>
        ";
            }
            // line 144
            echo "        ";
            $context['options'] = $this->getContext($context, 'choices');
            // line 145
            echo "        ";
            echo $this->renderBlock("options", $context, $blocks);
            echo "
    </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 151
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 152
        ob_start();
        // line 153
        echo "    <input type=\"checkbox\" ";
        echo $this->renderBlock("attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'value'), "html");
            echo "\"";
        }
        if ($this->getContext($context, 'checked')) {
            echo " checked=\"checked\"";
        }
        echo " />
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 157
    public function block_radio_widget($context, array $blocks = array())
    {
        // line 158
        ob_start();
        // line 159
        echo "    <input type=\"radio\" ";
        echo $this->renderBlock("attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, 'value'), "html");
            echo "\"";
        }
        if ($this->getContext($context, 'checked')) {
            echo " checked=\"checked\"";
        }
        echo " />
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 163
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 164
        ob_start();
        // line 165
        echo "    <div ";
        echo $this->renderBlock("container_attributes", $context, $blocks);
        echo ">
        ";
        // line 166
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, 'form'), "date", array(), "any", false));
        echo "
        ";
        // line 167
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, 'form'), "time", array(), "any", false));
        echo "
        ";
        // line 168
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "date", array(), "any", false));
        echo "
        ";
        // line 169
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "time", array(), "any", false));
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 174
    public function block_date_widget($context, array $blocks = array())
    {
        // line 175
        ob_start();
        // line 176
        echo "    ";
        if (($this->getContext($context, 'widget') == "single_text")) {
            // line 177
            echo "        ";
            echo $this->renderBlock("text_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 179
            echo "        <div ";
            echo $this->renderBlock("container_attributes", $context, $blocks);
            echo ">
            ";
            // line 180
            echo twig_strtr($this->getContext($context, 'date_pattern'), array("{{ year }}" => $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "year", array(), "any", false)), "{{ month }}" => $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "month", array(), "any", false)), "{{ day }}" => $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "day", array(), "any", false))));
            // line 184
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 190
    public function block_time_widget($context, array $blocks = array())
    {
        // line 191
        ob_start();
        // line 192
        echo "    <div ";
        echo $this->renderBlock("container_attributes", $context, $blocks);
        echo ">
        ";
        // line 193
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "hour", array(), "any", false), array("attr" => array("size" => "1")));
        echo ":";
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "minute", array(), "any", false), array("attr" => array("size" => "1")));
        if ($this->getContext($context, 'with_seconds')) {
            echo ":";
            echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "second", array(), "any", false), array("attr" => array("size" => "1")));
        }
        // line 194
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 198
    public function block_number_widget($context, array $blocks = array())
    {
        // line 199
        ob_start();
        // line 200
        echo "    ";
        // line 201
        echo "    ";
        $context['type'] = ((array_key_exists("type", $context)) ? (twig_default_filter($this->getContext($context, 'type'), "text")) : ("text"));
        // line 202
        echo "    ";
        echo $this->renderBlock("field_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 206
    public function block_integer_widget($context, array $blocks = array())
    {
        // line 207
        ob_start();
        // line 208
        echo "    ";
        $context['type'] = ((array_key_exists("type", $context)) ? (twig_default_filter($this->getContext($context, 'type'), "number")) : ("number"));
        // line 209
        echo "    ";
        echo $this->renderBlock("field_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 213
    public function block_money_widget($context, array $blocks = array())
    {
        // line 214
        ob_start();
        // line 215
        echo "    ";
        echo twig_strtr($this->getContext($context, 'money_pattern'), array("{{ widget }}" => $this->renderBlock("field_widget", $context, $blocks)));
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 219
    public function block_url_widget($context, array $blocks = array())
    {
        // line 220
        ob_start();
        // line 221
        echo "    ";
        $context['type'] = ((array_key_exists("type", $context)) ? (twig_default_filter($this->getContext($context, 'type'), "url")) : ("url"));
        // line 222
        echo "    ";
        echo $this->renderBlock("field_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 226
    public function block_search_widget($context, array $blocks = array())
    {
        // line 227
        ob_start();
        // line 228
        echo "    ";
        $context['type'] = ((array_key_exists("type", $context)) ? (twig_default_filter($this->getContext($context, 'type'), "search")) : ("search"));
        // line 229
        echo "    ";
        echo $this->renderBlock("field_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 233
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 234
        ob_start();
        // line 235
        echo "    ";
        $context['type'] = ((array_key_exists("type", $context)) ? (twig_default_filter($this->getContext($context, 'type'), "text")) : ("text"));
        // line 236
        echo "    ";
        echo $this->renderBlock("field_widget", $context, $blocks);
        echo " %
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 240
    public function block_repeated_row($context, array $blocks = array())
    {
        // line 241
        ob_start();
        // line 242
        echo "    ";
        echo $this->renderBlock("field_rows", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 246
    public function block_field_row($context, array $blocks = array())
    {
        // line 247
        ob_start();
        // line 248
        echo "    <div>
        ";
        // line 249
        echo $this->env->getExtension('form')->renderLabel($this->getContext($context, 'form'));
        echo "
        ";
        // line 250
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, 'form'));
        echo "
        ";
        // line 251
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, 'form'));
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 256
    public function block_email_widget($context, array $blocks = array())
    {
        // line 257
        ob_start();
        // line 258
        echo "    ";
        $context['type'] = ((array_key_exists("type", $context)) ? (twig_default_filter($this->getContext($context, 'type'), "email")) : ("email"));
        // line 259
        echo "    ";
        echo $this->renderBlock("field_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 263
    public function block_prototype_row($context, array $blocks = array())
    {
        // line 264
        ob_start();
        // line 265
        echo "    <script type=\"text/html\" id=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, 'proto_id'), "html");
        echo "\">";
        echo $this->renderBlock("field_row", $context, $blocks);
        echo "</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function isTraitable()
    {
        return true;
    }
}
