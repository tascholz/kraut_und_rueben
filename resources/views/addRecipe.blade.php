<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<div>
    <form method="POST" action="/api/storeRecipe">
        @csrf

        <label for='name'>Rezeptname</label><br>
        <input type='text' id='name' name='name'/><br>
        
        <label for="rating">Rating</label><br>
        <select id="rating" name="rating" size='1'>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select> <br>

        <label for='description'>Beschreibung</label><br>
        <textarea id='description' id='description' name='description' cols='100' rows='20'></textarea><br>

        <label for='duration'>Dauer</label><br>
        <input type='text' id='duration' name='duration'><br>
        
        <label for='category'>Kategorie</label>
        <select id='category' name='category' size='1'>
            @foreach ($categories as $category)
                <option value="{{ $category['id'] }}">{{$category['category_name']}}</option>
            @endforeach
        </select>
        <br><br>
        
        <input type='hidden' id = 'ingredients' name='ingredients' value=''>
        
        <div id='container'></div>
        <br>
        <button type='submit'>Rezept hinzufügen</button>
        <!-- Ingredients -->
        

    </form>

    <div class='newIngredient' id='newIngredient'>
        <select id='formIngredientName' name="formIngredientName" size='1'>
            @foreach ($ingredients as $ingredient)
                <option value="{{ $ingredient['id'] }}">{{$ingredient['ingredient_name']}}</option>
            @endforeach
        
        </select>
        <input type='number' id="formIngredientCount">    
        <button id='addIngredient' onClick="addIngredient()">Zutat hinzufügen</button><br>
    </div>
</div>

<script>

    let ingredientList = []

    function createContainer(){
        let container = document.getElementById("container");

        while(container.firstChild){
            container.removeChild(container.lastChild);
        }
        ingredientList.forEach(res => {
        let card = document.createElement("div");

        let name = document.createTextNode(res.name + ': ');
        card.appendChild(name)

        let count = document.createTextNode(res.count);
        card.appendChild(count)

        container.appendChild(card);
        });
    }
    
    function addIngredient(){
        var element = document.getElementById('formIngredientName');
        var newIngredientId = element.value;
        var newName = element.options[element.selectedIndex].text;
        var element = document.getElementById('formIngredientCount');
        var newCount = element.value;
        ingredientList.push({
            ingredientId : newIngredientId,
            name: newName,
            count: newCount
        })

        var ingredientString = ''
        ingredientList.forEach(res => {
            ingredientString = ingredientString + ',' + res.ingredientId + ':' + res.count
        });
        document.getElementById('ingredients').value = ingredientString
        createContainer();
    }

</script>