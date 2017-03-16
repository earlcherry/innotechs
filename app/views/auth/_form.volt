{% if messages is defined %}
    {% for message in messages %}
        <p class="bg-danger">{{ message.getMessage() }}</p>
    {% endfor %}
{% endif %}
{{ form('', 'method': 'post') }}
<div class="input-group">
    {{ text_field("name", "size": 32,'class':'form-control','placeholder':'Name') }}
</div>
<br>
<div class="input-group">
    {{ password_field("password", "size": 32,'class':'form-control','placeholder':'Password') }}
</div>
<br>
{{ submit_button('Send','class':'btn btn-success') }}
{{ end_form() }}