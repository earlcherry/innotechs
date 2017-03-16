<div class="navbar navbar-inverse" role="navigation">
    <div class="container">
        <div class="navbar-header">
            {{ link_to("/",title,'class':'navbar-brand') }}
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                {% if user is defined %}
                    <li>{{ link_to("/auth/signout", "Sign Out") }}</li>
                    {% else %}
                    <li>{{ link_to("/auth/signin", "Sign In") }}</li>
                    <li>{{ link_to("/auth/signup", "Sign Up") }}</li>
                    {% endif %}
            </ul>
        </div>

    </div>
</div>