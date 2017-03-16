<table class="table table-bordered">
    <thead>
        <tr>
            <th>idx</th>
            <th>id</th>
            <th>name</th>
        </tr>
    </thead>
    <tbody>

        {% for index,user in users %}
            <tr>
                <td> {{ index+1 }}</td>
                <td> {{ user.getId() }}</td>
                <td> {{ user.name }}</td>
            </tr>
        {% endfor %}

    </tbody>
</table>