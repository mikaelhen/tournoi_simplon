
<form action="#" data-multi-step class="multi-step-form">
    <div data-step class="card">
        <h3 class="step-title">Etape 1</h3>
        <div class="separatorForm"></div>
        <div class="form-group">
            <label for="email" class="titleForm">Email</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" required>
        </div>
        <button type="button" data-next>Suivant</button>
    </div>

    <div data-step  class="card"> 
        <h3 class="step-title">Etape 2</h3>
        <div class="separatorForm"></div>
            <div class="form-group">
                <label for="address" class="titleForm">Adresse</label>
                <input type="text" name="address" id="address" required>
            </div>
            <div class="form-group">
                <label for="city">Ville</label>
                <input type="text" name="city" id="city" required>
            </div>
            <div class="form-group">
                <label for="zipcode">Code postal</label>
                <input type="text" name="zipcode" id="zipcode" required>
            </div>
            <button type="button" data-next>Suivant</button>
            <button type="button" data-previous>Précédent</button>

        </div>
    </div>
    <div data-step  class="card">
        <h3 class="step-title">Etape 3</h3>
        <div class="separatorForm"></div>
            <div class="form-group">
                <label for="lastName" class="titleForm">Nom</label>
                <input type="text" name="lastName" id="lastName" required>
            </div>
            <div class="form-group">
                <label for="firstName">Prenom</label>
                <input type="text" name="firstName" id="firstName" required>
            </div>
            <div class="sendButton">
                <button type="button" data-previous>Précédent</button>
                <button type="Submit" class="buttonForm">Envoyer</button>
            </div>
            
        </div>
        
    </div>
</form>
