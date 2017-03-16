<div class="page-header">
    <h1>
        {% if user is defined %}
            Welcome, {{user['name']}}!
        {% else %}
            Welcome!
        {% endif %}
    </h1>
</div>

<p>This is test phalcon/mongodb project.</p>
{% if user is defined and users is defined %}
    {% include "/index/_list.volt" %}
{% endif %}
