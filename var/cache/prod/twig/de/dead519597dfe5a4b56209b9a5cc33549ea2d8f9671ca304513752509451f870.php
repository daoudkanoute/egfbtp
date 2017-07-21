<?php

/* AppBundle:Admin:statistiques.html.twig */
class __TwigTemplate_f43dda965f1577507eb59823ce22875d352358d2152c7aa05d3a2716dd420d78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:Admin:statistiques.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'headerscript' => array($this, 'block_headerscript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Statistiques";
    }

    // line 4
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 5
        echo "    <li><span>";
        $this->displayBlock("title", $context, $blocks);
        echo "</span></li>
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        <section class=\"panel\">
            <header class=\"panel-heading\">
                <h2 class=\"panel-title\">Nombre d'attestations PASI émises</h2>
                <p class=\"panel-subtitle\">Total cumulé des attestations émises à ce jour: <strong>";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["todayAttestationsCount"]) ? $context["todayAttestationsCount"] : null), "html", null, true);
        echo "</strong></p>
                <p class=\"panel-subtitle\">Total cumulé des attestations de réussite émises à ce jour: <strong>";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["todayAttestationsReussitCount"]) ? $context["todayAttestationsReussitCount"] : null), "html", null, true);
        echo "</strong></p>
                <h2>
                    <strong>
                        <select class=\"form-control\" id=\"years\">
                            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attestationsGraphs"]) ? $context["attestationsGraphs"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["year"] => $context["value"]) {
            // line 20
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\" ";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "</option>
                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['year'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                        </select>
                    </strong>
                </h2>
            </header>
            <div class=\"panel-body chart-data-selector\" id=\"selectorWrapper\">
                <div id=\"morrisStackedItems\" class=\"chart-data-selector-items\">
                <!-- Morris: Area -->
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attestationsGraphs"]) ? $context["attestationsGraphs"] : null));
        foreach ($context['_seq'] as $context["year"] => $context["graphData"]) {
            // line 30
            echo "                    <div class=\"chart chart-md\" id=\"morrisStacked-";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\" data-rel=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\"></div>
                    <script type=\"text/javascript\">
                        var morrisStackedData";
            // line 32
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo " = [
                            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["graphData"]);
            foreach ($context['_seq'] as $context["month"] => $context["values"]) {
                // line 34
                echo "                            {
                                'y'    : '";
                // line 35
                echo twig_escape_filter($this->env, $context["month"], "html", null, true);
                echo "',
                                'b'    : ";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["values"], "reussites", array()), "html", null, true);
                echo ",
                                'a'    : ";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["values"], "echecs", array()), "html", null, true);
                echo "
                            },
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['month'], $context['values'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                        ];
                    </script>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['year'], $context['graphData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                </div>
            </div>
        </section>
    </div>
    <div class=\"col-md-12\">
        <section class=\"panel\">
            <header class=\"panel-heading\">
                <h2 class=\"panel-title\">Nombre de recherches dans l'annuaire des apprenants par les ETT </h2>
            </header>
            <div class=\"panel-body\">
                <div id=\"ChartistSimpleLineChart\" class=\"ct-chart ct-perfect-fourth ct-golden-section\"></div>
            </div>
        </section>
    </div>
    <div class=\"col-md-12\">
        <section class=\"panel\">
            <header class=\"panel-heading\">
                <h2 class=\"panel-title\">Nombre de recherches dans l'annuaire des apprenants par les entreprises de BTP</h2>
            </header>
            <div class=\"panel-body\">
                <div id=\"ChartistSimpleLineChart2\" class=\"ct-chart ct-perfect-fourth ct-golden-section\"></div>
            </div>
        </section>
    </div>
    <div class=\"col-md-12\">
        <section class=\"panel\">
            <header class=\"panel-heading\">
                <h2 class=\"panel-title\">Nombre de stagiaires et de réussite au test PASI par organisme de formation</h2>
            </header>
            <div class=\"panel-body\" style=\"max-height: 500px;\">
                <div id=\"ChartistOverlappingBarsOnMobile\" class=\"ct-chart ct-perfect-fourth ct-golden-section\"  style=\"max-height: 470px;\"></div>
            </div>
        </section>
    </div>
</div>
";
    }

    // line 80
    public function block_javascripts($context, array $blocks = array())
    {
        // line 81
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fc7256b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fc7256b_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fc7256b_raphael_1.js");
            // line 87
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "fc7256b_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fc7256b_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fc7256b_chartist_2.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "fc7256b_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fc7256b_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fc7256b_chartist-plugin-legend_3.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "fc7256b_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fc7256b_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fc7256b_morris_4.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "fc7256b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fc7256b") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/fc7256b.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 89
        echo "    <script>
        (function() {
            var apprenantsByOFGraph = ";
        // line 91
        echo twig_jsonencode_filter((isset($context["apprenantsByOFGraph"]) ? $context["apprenantsByOFGraph"] : null));
        echo ";
            \$('#years').themePluginMultiSelect().on('change', function() {
                var rel = \$(this).val();
                \$('#morrisStackedItems .chart').removeClass('chart-active').addClass('chart-hidden');
                \$('#morrisStackedItems .chart[data-rel=\"' + rel + '\"]').addClass('chart-active').removeClass('chart-hidden');
            });

            \$('#years').trigger('change');
            \$('#selectorWrapper').addClass('ready');

            ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attestationsGraphs"]) ? $context["attestationsGraphs"] : null));
        foreach ($context['_seq'] as $context["year"] => $context["graphData"]) {
            // line 102
            echo "            Morris.Bar({
                resize: true,
                element: 'morrisStacked-";
            // line 104
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "',
                data: morrisStackedData";
            // line 105
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo ",
                xkey: 'y',
                ykeys: ['a', 'b'],
                labels: ['Réussites', 'Échecs'],
                barColors: ['#2baab1', '#0088cc'],
                fillOpacity: 0.7,
                smooth: false,
                stacked: true,
                hideHover: true
            });
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['year'], $context['graphData'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "

            new Chartist.Line('#ChartistSimpleLineChart', {
                labels: ['Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Août', 'Sep', 'Oct', 'Nov', 'Dec'],
                series: [
                    ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["searchsGraphs"]) ? $context["searchsGraphs"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["year"] => $context["month"]) {
            // line 122
            echo "                        [";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["month"]);
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ",";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "]";
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo ",";
            }
            // line 123
            echo "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['year'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "                ]
            },
            {
                low: 0,
                onlyInteger: true,
                showArea: false,
                lineSmooth: Chartist.Interpolation.simple({
                    divisor: 10,
                    fillHoles: false
                }),
                fullWidth: true,
                chartPadding: {
                    right: 40,
                    bottom: 40
                },
                plugins: [
                    Chartist.plugins.legend({
                        legendNames: [";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["searchsGraphs"]) ? $context["searchsGraphs"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["year"] => $context["month"]) {
            echo "'";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "'";
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo ",";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['year'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "],
                        position: 'bottom'
                    })
                ]
            });


            /*Entreprise BTP*/

            new Chartist.Line('#ChartistSimpleLineChart2', {
                labels: ['Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Août', 'Sep', 'Oct', 'Nov', 'Dec'],
                series: [
                    ";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["searchsGraphs2"]) ? $context["searchsGraphs2"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["year"] => $context["month"]) {
            // line 154
            echo "                        [";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["month"]);
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ",";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "]";
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo ",";
            }
            // line 155
            echo "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['year'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "                ]
            },
            {
                low: 0,
                onlyInteger: true,
                showArea: false,
                lineSmooth: Chartist.Interpolation.simple({
                    divisor: 10,
                    fillHoles: false
                }),
                fullWidth: true,
                chartPadding: {
                    right: 40,
                    bottom: 40
                },
                plugins: [
                    Chartist.plugins.legend({
                        legendNames: [";
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["searchsGraphs2"]) ? $context["searchsGraphs2"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["year"] => $context["month"]) {
            echo "'";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "'";
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo ",";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['year'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "],
                        position: 'bottom'
                    })
                ]
            });

            /*
             Chartist: Bar Chart - Overlapping On Mobile
             */
            (function() {
                var data = [
                    ";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["apprenantsByOFGraph"]) ? $context["apprenantsByOFGraph"] : null));
        foreach ($context['_seq'] as $context["organisme"] => $context["values"]) {
            // line 185
            echo "                    {
                        'y'    : '";
            // line 186
            echo twig_escape_filter($this->env, $context["organisme"], "html", null, true);
            echo "',
                        'a'    : ";
            // line 187
            echo twig_escape_filter($this->env, $this->getAttribute($context["values"], "successed", array()), "html", null, true);
            echo ",
                        'b'    : ";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute($context["values"], "failed", array()), "html", null, true);
            echo "
                    },
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['organisme'], $context['values'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        echo "                ];

                Morris.Bar({
                    resize: true,
                    element: 'ChartistOverlappingBarsOnMobile',
                    data: data,
                    xkey: 'y',
                    ykeys: ['a', 'b'],
                    labels: ['Réussites', 'Échecs'],
                    barColors: ['#2baab1', '#0088cc'],
                    fillOpacity: 0.7,
                    smooth: false,
                    stacked: true,
                    hideHover: true
                });

            })();
        })();
    </script>
";
    }

    // line 212
    public function block_headerscript($context, array $blocks = array())
    {
        // line 213
        echo "<style>
    .ct-chart .ct-series.ct-series-b .ct-bar {
        stroke: #71A28A;
    }
</style>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Admin:statistiques.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  619 => 213,  616 => 212,  593 => 191,  584 => 188,  580 => 187,  576 => 186,  573 => 185,  569 => 184,  522 => 173,  503 => 156,  489 => 155,  451 => 154,  434 => 153,  386 => 141,  367 => 124,  353 => 123,  315 => 122,  298 => 121,  291 => 116,  274 => 105,  270 => 104,  266 => 102,  262 => 101,  249 => 91,  245 => 89,  213 => 87,  208 => 81,  205 => 80,  166 => 43,  158 => 40,  149 => 37,  145 => 36,  141 => 35,  138 => 34,  134 => 33,  130 => 32,  122 => 30,  118 => 29,  109 => 22,  86 => 20,  69 => 19,  62 => 15,  58 => 14,  51 => 9,  48 => 8,  41 => 5,  38 => 4,  32 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:Admin:statistiques.html.twig", "/app/src/AppBundle/Resources/views/Admin/statistiques.html.twig");
    }
}
