<!DOCTYPE html>

  <html>
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title></title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
   
      <link rel="stylesheet" href="src/css/style.css">
  </head>
    <nav>
 
    </nav>
  <body>
             <div class="input-field col s12">
              
              <input type="text" id="name-input" placeholder="search name" name="current-search">
                
             
              <select class="browser-default" id="generation-search" style="display:none ;">
                <option value="" >Choose your option</option>
                <option value="generation/1">1</option>
                <option value="generation/2">2</option>
                <option value="generation/3">3</option>
                <option value="generation/4">4</option>
                <option value="generation/5">5</option>
                <option value="generation/6">6</option>
                <option value="generation/7">7</option>
              </select>

              
              <select class="browser-default" id="type-search" style="display:none ;" >
                <option value="" >Choose your option</option>
                <option value="Grass">Grass</option>
                <option value="Fire">Fire</option>
                <option value="Water">Water</option>
                <option value="Lightning">Lightning</option>
                <option value="Psychic">Psychic</option>
                <option value="Fighting">Fighting</option>
                <option value="Darkness">Darkness</option>
                <option value="Metal">Metal</option>
                <option value="Dragon">Dragon</option>
                <option value="Fairy">Fairy</option>
                <option value="Colorless">Colorless</option>
              </select>
              <button id="search-button"onclick="getValueInput()">search</button>

            </div>
          </ul>
        </div>
        <div class="col s12 m8 l9">
          <!-- Teal page content  -->
          <div class="row" class="responsive-img" id="pokeResults">
            
          </div>
        </div>
      </div>
          <!-- The Modal -->
    <div id="myModal" class="modal">

      <!-- Modal content -->
      <div class="modal-content">
        <span onclick="document.getElementById('myModal').style.display='none'"class="close">&times; close</span>
            <h4 id="modal-card-name"></h4> 
            <p id="modal-card-type"></p>
        <table class ="responsive-table highlight">
  
    
          <tbody>
            <tr>
              <td>Holofoil Market Price</td>
              <td id="modal-HoloFoil-price"></td>
            </tr>
            <tr>
              <td>Reverse Holofoil Market Price</td>
              <td id="modal-reverseHolofoil-price"></td>
              
            </tr>
            <tr>
              <td>Normal Market Price</td>
              <td id="modal-normal-price"></td>
              
            </tr>
          </tbody>
        </table>
        <img class="responsive-img" src="" alt="" id="modal-card-image">
        <button id="card-saver" > <img class="responsive-img"></button>

      </div>
    </div>

    <!-- The Modal -->
   
     <script src="src/js/pokesearch.js"></script>
    </body>

    </html>