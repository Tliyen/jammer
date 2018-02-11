<table>
    <tbody>
        <div id="all-items" class="items">
            {accessories}
            <tr class="item_row">
                <td><img class="draggable drag-drop" src="{imagelocation}.png"/></td>
                <td><h4>{name}</h4></td>
                <td><p>&nbsp;Calories: {calories}</p></td>
                <td><p>&nbsp;&nbsp;Salt: {salt}</p></td>
                <td><p>&nbsp;&nbsp;Price: {price}</p></td>
            </tr>
        </div>
        {/accessories}
    </div>
</tbody>
</table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>