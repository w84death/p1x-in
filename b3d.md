---
layout: default
permalink: /wild/b3d
exclude: true
---
<h1>{{ page.title }}</h1>
    
{{ content }}

{% for category in site.data.market %}
<h2 class="title">{{ category.title }}</h2>
<div class="covers">
    {% for item in category.market %}
    <div class="rect market iblock">
        <a href="/market/{{ item.url }}">
            <h3>
                <img src="/assets/market/{{ item.url }}/cover.jpg" alt="{{ item.name }}" class="market"/>
            </h4>
            <h4>{{ item.name }}</h4>
            <p>{{ item.tagline }}</p>
        </a>
    </div>
    {% endfor %}
</div>
{% endfor %}