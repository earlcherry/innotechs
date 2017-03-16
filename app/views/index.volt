<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{ stylesheet_link('css/style.css') }}
        <title>{{ title }}</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        {% include "/menu.volt" %}
        <div class="clearfix"></div>
        <div class="container">
            <div class="test-template">
                {{ content() }}
            </div>
        </div>
    </body>
</html>