<div>
    <form action="index.php?route=students&action=edit&form_sent=1" method="POST">
        <input type="hidden" name="id" value="<?=$student['id']?>">
        <input class="form-control mb-2" type="text" name="name" placeholder="Imię" value="<?=$student['name']?>"/>
        <input class="form-control mb-2" type="text" name="surname" placeholder="Nazwisko" value="<?=$student['surname']?>">
        <input class="form-control mb-2" type="email" name="email" placeholder="E-mail" value="<?=$student['email']?>">
        <button class="btn btn-success">Edytuj studenta</button>
    </form>
</div>