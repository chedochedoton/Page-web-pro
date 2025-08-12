<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Contact</title>
</head>
<body>
    <h3>Demande de conseil</h3>
            <p>Tu peux me dire où tu veux aller, ton budget, et je te propose une idée de voyage.</p>
     <form action="https://formspree.io/f/mgvznnlg" method="POST">
              <label for="yourName">Ton nom</label>
              <input id="yourName" class="input" placeholder="Ex: Amina" />
              <label for="yourEmail">Ton email</label>
              <input id="yourEmail" class="input" placeholder="exemple@domaine.com" />
              <label for="yourMessage">Ton projet de voyage</label>
              <textarea id="yourMessage" class="input" rows="4" placeholder="Destination, dates, budget..."></textarea>
              <button onclick="sendEmail()" class="btn-primary" style="width:100%;">Envoyer une demande</button>
            </form>
</body>
</html>