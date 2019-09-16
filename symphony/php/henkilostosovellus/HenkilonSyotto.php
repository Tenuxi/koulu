
  <form class="form-signin" action="index.php?page=henkilonlisays" method="post">
  <h1 class="h3 mb-3 font-weight-normal">Lisää henkilö</h1>
  
  <label for="inputHenkilonumero" class="sr-only">Henkilonumero</label>
  <input name="henkilonumero" type="text" id="inputHenkilonumero" class="form-control" placeholder="Henkilonumero" required autofocus>
  
  <label for="inputEtunimi" class="sr-only">Etunimi</label>
  <input name="etunimi" type="text" id="inputText" class="form-control" placeholder="Etunimi" required>
  
  <label for="inputSukunimi" class="sr-only">Sukunimi</label>
  <input name="sukunimi" type="text" id="inputText" class="form-control" placeholder="Sukunimi" required>
  
  <label for="inputOsasto" class="sr-only">Osasto</label>
  <input name="osasto" type="text" id="inputText" class="form-control" placeholder="Osasto" required>
  
  <label for="inputPalkka" class="sr-only">Palkka</label>
  <input name="palkka" type="text" id="inputText" class="form-control" placeholder="Palkka" required>
  
  <button class="btn btn-lg btn-info btn-block" type="submit">Tallenna</button>
</form>
