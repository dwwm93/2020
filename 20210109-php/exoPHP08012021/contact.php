
<style type="text/css">
.contact, .login, .inscription {
    font-family: Georgia, 'Times New Roman', Times, serif, cursive;
    background-color: cyan;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    color: blanchedalmond;
    font-size: 18px;
}

.title{
    font-family: Georgia, 'Times New Roman', Times, serif, cursive;
    padding: 0 15px;
    text-shadow: 0 0 5px black;
    display: inline-block;
    margin: 0 auto;
}

.title-1{
    font-size: 50px;
    margin-bottom: 30px;

}
.container1, .container2{
    width: 500px;
    display: flex;
    flex-direction: column;
    background-color: black;
    border-radius: 3px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0, 4);
    padding: 30px;
}

.form_group{
    width: 100%;
    margin-bottom: 20px;
    position: relative;
}



.form_input{
    font-size: 16px;
    font-family: inherit;
    padding: 3px 10px;
    border-radius: 3px;
    border: none;
    border-bottom: 4px solid transparent;
    width: 100%;
}

.submitBtn{
    display: block;
    padding: 5px 30px;
    border: none;
    outline: none;
    background-color: cyan;
    color: darkgrey;
    border-radius: 30px;
    margin: 20px auto;
    
}
</style>
<span class="contact">
    <div class="container2">
        <h1 class="title title-1">Contact</h1>
        <form class="form">
            <div class="form_group">
                <input type="nom" class="form_input" id="nom" placeholder="Entrez Votre Nom" required>

            </div>
            <div class="form_group">
                <input type="nom" class="form_input" placeholder="Entrez Votre Prenom" required>

            </div>
            <div class="form_group">
                <select name="motif" id="motif">
                    <option value="">Choix du motif...</option>
                    <option value="">Reclamation</option>
                    <option value="">Suggestion</option>
                    <option value="">Emploi</option>
                    <option value="">Autre</option>
                </select>
                <label for="motif">
                    Motif
                </label>

            </div>
            <div class="form_message"><label for="message">Message</label><textarea name="" id="message" cols="30"
                    rows="10" class="form_input"></textarea></div>
            <div class="submit">
                <button class="submitBtn">Envoyer</button>
            </div>
        </form>

    </div>
</span>