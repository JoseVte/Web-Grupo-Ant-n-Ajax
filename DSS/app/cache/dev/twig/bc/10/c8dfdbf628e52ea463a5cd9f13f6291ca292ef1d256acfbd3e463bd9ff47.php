<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_bc10c8dfdbf628e52ea463a5cd9f13f6291ca292ef1d256acfbd3e463bd9ff47 extends Twig_Template
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
        // line 1
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  83 => 30,  79 => 29,  75 => 28,  66 => 25,  42 => 12,  26 => 3,  24 => 2,  85 => 25,  77 => 23,  69 => 18,  57 => 15,  53 => 14,  49 => 12,  30 => 5,  67 => 15,  63 => 14,  50 => 15,  38 => 8,  27 => 4,  19 => 1,  86 => 16,  81 => 24,  70 => 26,  64 => 17,  61 => 16,  59 => 13,  52 => 11,  48 => 10,  44 => 8,  40 => 9,  35 => 7,  33 => 6,  29 => 5,  23 => 3,  229 => 87,  226 => 86,  221 => 81,  217 => 75,  214 => 74,  211 => 73,  207 => 71,  204 => 70,  201 => 69,  196 => 89,  194 => 86,  189 => 84,  185 => 82,  183 => 81,  179 => 80,  173 => 76,  171 => 73,  168 => 72,  166 => 69,  163 => 68,  160 => 67,  149 => 59,  140 => 53,  135 => 51,  128 => 47,  124 => 46,  119 => 44,  111 => 39,  105 => 36,  98 => 32,  94 => 31,  90 => 30,  84 => 27,  76 => 6,  71 => 20,  65 => 17,  62 => 24,  51 => 7,  46 => 14,  43 => 5,  37 => 4,  32 => 6,);
    }
}
