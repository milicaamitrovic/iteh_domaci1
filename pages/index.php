<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dance studio</title>
  <link rel="stylesheet" href="global.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>



<body>
  <!-- Modal za izmenu -->
  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Izmena vrste plesa</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <!-- sadrzaj modala -->
          <form>
            <div class="form-group centered">
              <label for="naziv_vrste_plesa">Naziv vrste plesa:</label>
              <input type="text" class="form-control" id="naziv_vrste_plesa" value='' required>
            </div>
            <div class="form-group">
              <label for="koreograf">Koreograf:</label>
              <select type="text" class="form-control" id="koreograf" value='' required></select>
            </div>
            <fieldset disabled>
              <div class="form-group">
                <label for="broj_termina">Broj termina</label>
                <!-- placeholder/value -->
                <input type="text" id="broj_termina" class="form-control" placeholder="0">
              </div>
            </fieldset>
            <div class="d-grid gap-2">
              <a href='./terminiZaVrstuPlesa.php' id='sviTermini'><button class="btn btn-warning" type="button" style="background-color: #fafad2;">Svi termini</button></a>
            </div>
          </form>

        </div>
        <div class="modal-footer align_center">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #bdb76b;">Zatvori</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal" id="button_sacuvaj" style="background-color: #f0e68c;">Sacuvaj</button>
          <button type='button' class="btn btn-danger" data-dismiss="modal" id="button_delete" style="background-color: #eee8aa;">Obrisi</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal za dodavanje -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Dodavanje nove vrste plesa</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <!-- sadrzaj modala -->
          <form>
            <div class="form-group">
              <label for="naziv_vrste_plesa_dodaj">Naziv vrste plesa:</label>
              <input type="text" class="form-control" id="naziv_vrste_plesa_dodaj" placeholder="" required>
            </div>
            <div class="form-group">
              <label for="koreograf_dodaj"> Koreograf:</label>
              <select class="form-control" id="koreograf_dodaj" placeholder="" required>

              </select>
            </div>
            <fieldset disabled>
              <div class="form-group">
                <label for="broj_termina_dodaj">Broj termina</label>
                <input type="text" id="broj_termina_dodaj" class="form-control" placeholder="0">
              </div>
            </fieldset>
          </form>

        </div>
        <div class="modal-footer align_center">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #bdb76b;">Zatvori</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal" id="button_dodaj" style="background-color: #f0e68c;">Dodaj</button>
        </div>
      </div>
    </div>
  </div>


  <?php include 'header.php'; ?>

  <div class='centerDiv'>
    <div class='left_div grid-item'>
    </div>
    <div class='middle_div grid-item'>
      <div class='h_div'>
        <h1 class='h1_text'>Vrste plesova</h1>
      </div>
      <div class='table_div table-hover'>
        <table class="table">
          <thead class="thead-red" style="background-color: #fffacd;">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Vrsta plesa</th>
              <th scope="col">Koreograf</th>
              <th scope="col">Broj termina</th>
            </tr>
          </thead>
          <tbody id='vrste_plesova'>


          </tbody>
        </table>
      </div>
      <div class="button_div1">
        <button data-toggle="modal" data-target="#exampleModal" type="button" data-backdrop="static" style="background-color: #bdb76b;"
          class="btn btn-secondary btn-lg btn-block">NOVA VRSTA PLESA</button>
      </div>

    </div>

    <div class='right_div grid-item'>

    </div>

  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script>
    let vrste_plesova = [];
    let koreografi = [];
    let trenutniId = -1;

    $(document).ready(function () {

        ucitajVrstePlesova();
        ucitajKoreografe();

      // Dugme za cuvanje izmena
      $('#button_sacuvaj').click(function () {
        if (trenutniId == -1) {
          return;
        }
        const naziv = $('#naziv_vrste_plesa').val();
        if(naziv === "") {
            alert("Morate uneti naziv vrste plesa!");
            return false;
        }

        if(!/^([^0-9]*)$/.test(naziv) || !/^([^@#$%^&*.,<>'";:?]*)$/.test(naziv)) {
            alert("Naziv vrste plesa ne sme sadrzati cifre i specijalne karaktere!");
            return false;
        }
        
        const koreograf = $('#koreograf').val();
        $.post('../vrsta_plesaHandlers/update.php', { id: trenutniId, naziv: naziv, koreograf: koreograf }, function (data) {
          console.log(data);
          if (data != 1) {
            alert(data);
            return;
          }
          ucitajVrstePlesova();
          trenutniId = -1;
        })
      })

      // Dugme za brisanje
      $('#button_delete').click(function () {
        if (trenutniId == -1) {
          return;
        }
        $.post('../vrsta_plesaHandlers/delete.php', { id: trenutniId }, function (data) {
          if (data != 1) {
            alert("Ne mozete obrisati uslugu koja ima zakazane termine!");
            return;
          }
          console.log({ trenutniId: trenutniId });
          if (data == 1) {
            console.log('filter')
            vrste_plesova = vrste_plesova.filter(function (elem) { return elem.id != trenutniId });
            iscrtajTabelu();
          }

          trenutniId = -1;
        })
      })
      
      // Dugme za dodavanje
      $('#button_dodaj').click(function (e) {
        const naziv = $('#naziv_vrste_plesa_dodaj').val();
        if(naziv === "") {
            alert("Morate uneti naziv vrste plesa!");
            return false;
        }

        if(!/^([^0-9]*)$/.test(naziv) || !/^([^@#$%^&*.,<>'";:?]*)$/.test(naziv)) {
            alert("Naziv vrste plesa ne sme sadrzati cifre i specijalne karaktere!");
            return false;
        }

        if(vrste_plesova.find(x=>x.naziv.toUpperCase()==naziv.toUpperCase())){
            alert("Vrsta plesa sa datim nazivom vec postoji!");
            return false;
        }
        else {
            const koreograf = $('#koreograf_dodaj').val();
            $.post('../vrsta_plesaHandlers/add.php', { naziv: naziv, koreograf: koreograf }, function (data) {
            console.log(data);
            if (data != 1) {
            alert(data);
            return;
          }
          ucitajVrstePlesova();
        })
        }
      })

      // Modal za dodavanje
      $('#exampleModal').on('show.bs.modal', function (e) {
        $('#koreograf_dodaj').html('');
        for (let koreograf of koreografi) {
          $('#koreograf_dodaj').append(`
            <option value='${koreograf.id}'>${koreograf.imePrezime}</option>
          `)
        }
      })

      // Modal za izmenu
      $('#exampleModal2').on('show.bs.modal', function (e) {
        const button = $(e.relatedTarget);
        const id = button.data('id');
        trenutniId = id;
        
        $('#koreograf').html('');
        for (let koreograf of koreografi) {
          $('#koreograf').append(`
            <option value='${koreograf.id}'>${koreograf.imePrezime}</option>
          `)
        }

        const vrsta_plesa = vrste_plesova.find(function (elem) {
          return elem.id == id;
        });
        if (!vrsta_plesa) {
          return;
        }
        $('#sviTermini').attr('href', 'terminiZaVrstuPlesa.php?id=' + id)
        $('#koreograf').val(vrsta_plesa.koreograf);
        $('#naziv_vrste_plesa').val(vrsta_plesa.naziv);
        $('#broj_termina').val(vrsta_plesa.broj_termina);
      })

    })



    // Definicije funkcija
    function ucitajKoreografe() {
      $.getJSON('../koreografHandlers/getAll.php', function (data) {
        if (!data.status) {
          alert(data.greska);
          return;
        }
        koreografi = data.koreografi;
        console.log(koreografi);
      })
    }

    function ucitajVrstePlesova() {
      $.getJSON('../vrsta_plesaHandlers/getAll.php', function (data) {
        if (!data.status) {
          alert(data.greska);
          return;
        }
        console.log(data.vrste_plesova)
        vrste_plesova = data.vrste_plesova;
        iscrtajTabelu();
      })
    }

    function iscrtajTabelu() {
      $('#vrste_plesova').html('');
      let index = 1;
      for (let vrsta_plesa of vrste_plesova) {
        $('#vrste_plesova').append(`
          <tr data-toggle="modal" data-target="#exampleModal2" data-backdrop="static" data-id=${vrsta_plesa.id}  >
              <th scope="row">${index++}</th>
              <td>${vrsta_plesa.naziv}</td>
              <td>${vrsta_plesa.koreograf_imePrezime}</td>
              <td>${vrsta_plesa.broj_termina}</td>
            </tr>
          `)
      }
    }
  </script>
</body>

</html>