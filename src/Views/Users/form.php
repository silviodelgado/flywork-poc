<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Test</title>
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script>
        function save() {
            if (!$('#frm')[0].checkValidity()) {
                return false;
            }

            $.ajax({
                url: '/rest/users/<?php echo $id ?? '' ?>',
                method: '<?php echo empty($id) ? 'POST' : 'PUT' ?>',
                data: {
                    'name': $('#name').val(),
                    'email': $('#email').val(),
                    'active': $('#active').prop('checked') ? 1 : 0
                }
            })
            .done(function (r) {
                console.log('done', r);
            })
            .fail(function (r) {
                console.log('fail', r);
            });
            return false;
        }
        function del(id) {
            $.ajax({
                url: '/rest/users/'+id,
                method: 'DELETE'
            })
            .done(function (r) {
                console.log('done', r);
            })
            .fail(function (r) {
                console.log('fail', r);
            });
            return false;
        }
    </script>
</head>
<body>

<h1><?php echo $title ?></h1>
<form id="frm">
    <div>
        <label>Name</label><br>
        <input type="text" id="name" value="<?php echo $name ?? '' ?>" required>
    </div>
    <div>
        <label>Email</label><br>
        <input type="text" id="email" value="<?php echo $email ?? '' ?>" required>
    </div>
    <div>
        <label>Active</label><br>
        <input type="radio" id="active" name="active" value="1"<?php echo empty($active) ? '' : ' checked' ?>> Yes
        <input type="radio" name="active" value="0"<?php echo empty($active) ? ' checked' : '' ?>> No
    </div>
    <div>
        <button onclick="save()">Save User</button>
    </div>
</form>

<hr>

<button onclick="del(11)">Excluir</button>

</body>
</html>
