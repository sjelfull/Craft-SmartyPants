## SmartyPants for Craft

Uses [PHP SmartyPants](https://github.com/michelf/php-smartypants) to apply some nice typography rules to text

## Usage

```twig
{% set text %}
 << I can't believe three years have already passed since Kirby's first release on January 9, 2012. A lot happened in the meantime and I can't thank you enough for your constant support and feedback throughout those three years. It means the world to me that my little software baby is still growing strong with your help. There's more to come - a lot more --- and I can't wait to share it with you ... >>
{% endset %}

<h2>SmartyPants</h2>

<p>{{ text | smartypants }}</p>

<h2>SmartyPants Typographer</h2>

<p>{{ text | smartyTypographer }}</p>
```