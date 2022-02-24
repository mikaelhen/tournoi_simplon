<form action="#" data-multi-step>
    <div data-step class="card">
        <h3 class="step-title">Etape 1</h3>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password">
        </div>
        <button type="button">Suivant</button>
    </div>

    <div data-step class="card"> 
        <h3 class="step-title">Etape 2</h3>
            <div class="form-group">
                <label for="address">Adresse</label>
                <input type="text" name="address" id="address">
            </div>
            <div class="form-group">
                <label for="city">Ville</label>
                <input type="text" name="city" id="city">
            </div>
            <div class="form-group">
                <label for="zipcode">Code postal</label>
                <input type="text" name="zipcode" id="zipcode">
            </div>
            <button type="button">Suivant</button>
            <button type="button">Précédent</button>

        </div>
    </div>
    <div date-step class="card">
        <h3 class="step-title">Etape 3</h3>
            <div class="form-group">
                <label for="lastName">Nom</label>
                <input type="text" name="lastName" id="lastName">
            </div>
            <div class="form-group">
                <label for="firstName">Prenom</label>
                <input type="text" name="firstName" id="firstName">
            </div>
            
            <button type="button">Suivant</button>
            <button type="button">Précédent</button>
            <div class="sendButton">
            <button type="Submit">Envoyer</button>
            </div>
            
        </div>
        
    </div>
</form>